// Rwanda 2000 — Main JS
import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {

  /* ════════════════════════════════════════════
     HERO CAROUSEL
  ════════════════════════════════════════════ */
  const slides      = document.querySelectorAll('.hero-slide');
  const dots        = document.querySelectorAll('.hero-nav-dot');
  const captionEl   = document.getElementById('hero-caption-text');
  const progressBar = document.getElementById('hero-progress-bar');
  const prevBtn     = document.getElementById('hero-prev');
  const nextBtn     = document.getElementById('hero-next');

  if (slides.length) {
    let current   = 0;
    let timer     = null;
    let progress  = 0;
    let rafId     = null;
    const DURATION = 6000; // ms per slide

    const goToSlide = (index) => {
      // Remove active from old
      slides[current].classList.remove('active');
      slides[current].classList.add('prev-slide');
      dots[current].classList.remove('active');
      dots[current].setAttribute('aria-selected', 'false');

      setTimeout(() => slides[current].classList.remove('prev-slide'), 1400);

      current = (index + slides.length) % slides.length;

      slides[current].classList.add('active');
      dots[current].classList.add('active');
      dots[current].setAttribute('aria-selected', 'true');

      // Update caption
      if (captionEl) {
        captionEl.style.opacity = '0';
        setTimeout(() => {
          captionEl.textContent = slides[current].dataset.caption || '';
          captionEl.style.opacity = '1';
        }, 300);
      }

      // Reset progress
      progress = 0;
      if (progressBar) progressBar.style.width = '0%';
    };

    const startTimer = () => {
      if (timer) clearInterval(timer);
      if (rafId) cancelAnimationFrame(rafId);
      progress = 0;
      let lastTime = null;

      const tick = (time) => {
        if (!lastTime) lastTime = time;
        const delta = time - lastTime;
        lastTime = time;
        progress = Math.min(progress + (delta / DURATION) * 100, 100);
        if (progressBar) progressBar.style.width = progress + '%';
        if (progress < 100) {
          rafId = requestAnimationFrame(tick);
        } else {
          goToSlide(current + 1);
          startTimer();
        }
      };
      rafId = requestAnimationFrame(tick);
    };

    // Controls
    if (prevBtn) prevBtn.addEventListener('click', () => { goToSlide(current - 1); startTimer(); });
    if (nextBtn) nextBtn.addEventListener('click', () => { goToSlide(current + 1); startTimer(); });
    dots.forEach((dot, i) => {
      dot.addEventListener('click', () => { goToSlide(i); startTimer(); });
    });

    // Keyboard
    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft')  { goToSlide(current - 1); startTimer(); }
      if (e.key === 'ArrowRight') { goToSlide(current + 1); startTimer(); }
    });

    // Touch/swipe
    let touchStartX = 0;
    const heroEl = document.getElementById('hero');
    if (heroEl) {
      heroEl.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
      heroEl.addEventListener('touchend', e => {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) {
          goToSlide(diff > 0 ? current + 1 : current - 1);
          startTimer();
        }
      }, { passive: true });
    }

    // Pause on hover
    if (heroEl) {
      heroEl.addEventListener('mouseenter', () => { if (rafId) { cancelAnimationFrame(rafId); rafId = null; } });
      heroEl.addEventListener('mouseleave', () => { startTimer(); });
    }

    startTimer();
  }

  /* ── Nav scroll effect ── */
  const nav = document.getElementById('main-nav');
  const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 60);
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ── Mobile menu ── */
  const burger    = document.getElementById('nav-burger');
  const drawer    = document.getElementById('mobile-drawer');
  const backdrop  = document.getElementById('mobile-drawer-backdrop');
  const mClose    = document.getElementById('mobile-close');
  const mLinks    = document.querySelectorAll('.mobile-link');

  const openDrawer = () => {
    if (drawer) drawer.classList.add('open');
    if (backdrop) backdrop.classList.add('open');
    if (burger) burger.classList.add('active');
    document.body.style.overflow = 'hidden';
  };

  const closeDrawer = () => {
    if (drawer) drawer.classList.remove('open');
    if (backdrop) backdrop.classList.remove('open');
    if (burger) burger.classList.remove('active');
    document.body.style.overflow = '';
  };

  if (burger) {
    burger.addEventListener('click', (e) => {
      e.stopPropagation();
      if (drawer && drawer.classList.contains('open')) {
        closeDrawer();
      } else {
        openDrawer();
      }
    });
  }

  if (mClose) mClose.addEventListener('click', closeDrawer);
  if (backdrop) backdrop.addEventListener('click', closeDrawer);

  mLinks.forEach(link => {
    link.addEventListener('click', () => {
      closeDrawer();
    });
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeDrawer();
  });

  /* ── Intersection Observer — reveal animations ── */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); } });
  }, { threshold: 0.12 });

  document.querySelectorAll('.reveal, .how-step').forEach(el => observer.observe(el));

  /* ── Animated counters in stats bar ── */
  const counters = document.querySelectorAll('[data-count]');
  const counterObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el = e.target;
      const target = parseFloat(el.dataset.count);
      const suffix = el.dataset.suffix || '';
      const prefix = el.dataset.prefix || '';
      const decimals = el.dataset.decimals || 0;
      const duration = 2000;
      const step = (target / duration) * 16;
      let current = 0;
      const tick = () => {
        current = Math.min(current + step, target);
        el.textContent = prefix + (decimals > 0 ? current.toFixed(decimals) : Math.floor(current)) + suffix;
        if (current < target) requestAnimationFrame(tick);
      };
      tick();
      counterObs.unobserve(el);
    });
  }, { threshold: 0.5 });
  counters.forEach(c => counterObs.observe(c));

  /* ── Multi-step form ── */
  const panels   = document.querySelectorAll('.form-panel');
  const steps    = document.querySelectorAll('.stepper-step');
  let currentStep = 0;

  const goTo = (n) => {
    panels[currentStep].classList.remove('active');
    steps[currentStep].classList.remove('active');
    steps[currentStep].classList.add('done');
    currentStep = n;
    panels[currentStep].classList.add('active');
    steps[currentStep].classList.add('active');
    steps[currentStep].classList.remove('done');
    document.getElementById('pitch').scrollIntoView({ behavior: 'smooth', block: 'start' });
  };

  document.querySelectorAll('.btn-next-step').forEach(btn => {
    btn.addEventListener('click', () => {
      const activePanel = panels[currentStep];
      const inputs = activePanel.querySelectorAll('input, select, textarea');
      let valid = true;
      inputs.forEach(input => {
        if (!input.checkValidity()) {
          input.reportValidity();
          valid = false;
        }
      });
      if (valid && currentStep < panels.length - 1) {
        goTo(currentStep + 1);
      }
    });
  });
  document.querySelectorAll('.btn-prev-step').forEach(btn => {
    btn.addEventListener('click', () => {
      if (currentStep > 0) {
        steps[currentStep].classList.remove('active', 'done');
        steps[currentStep - 1].classList.remove('done');
        panels[currentStep].classList.remove('active');
        currentStep--;
        panels[currentStep].classList.add('active');
        steps[currentStep].classList.add('active');
      }
    });
  });

  /* ── FAQ accordion ── */
  document.querySelectorAll('.faq-question').forEach(q => {
    q.addEventListener('click', () => {
      const item = q.closest('.faq-item');
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    });
  });

  /* ── Gallery tabs ── */
  const galleryItems = document.querySelectorAll('.gallery-item[data-cat]');
  document.querySelectorAll('.gallery-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.gallery-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const cat = tab.dataset.cat;
      galleryItems.forEach(item => {
        if (cat === 'all' || item.dataset.cat === cat) {
          item.style.display = '';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });

  /* ── Smooth scroll for anchor links ── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  /* ── File upload drag & drop ── */
  document.querySelectorAll('.upload-area').forEach(area => {
    const input = area.querySelector('input[type="file"]');
    area.addEventListener('dragover', e => { e.preventDefault(); area.style.borderColor = 'var(--gold)'; });
    area.addEventListener('dragleave', () => { area.style.borderColor = ''; });
    area.addEventListener('drop', e => {
      e.preventDefault();
      area.style.borderColor = '';
      if (input && e.dataTransfer.files.length) {
        input.files = e.dataTransfer.files;
        area.querySelector('p').innerHTML = `<strong style="color:var(--gold)">${e.dataTransfer.files[0].name}</strong> ready to upload`;
      }
    });
    area.addEventListener('click', () => input && input.click());
    if (input) {
      input.addEventListener('change', () => {
        if (input.files[0]) {
          area.querySelector('p').innerHTML = `<strong style="color:var(--gold)">${input.files[0].name}</strong> ready to upload`;
        }
      });
    }
  });

  /* ── Form submit ── */
  const form = document.getElementById('pitch-form');
  if (form) {
    const errorBox = document.getElementById('form-error');
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const btn = form.querySelector('.btn-submit');
      const originalLabel = btn.textContent;
      errorBox.hidden = true;
      errorBox.textContent = '';
      btn.textContent = 'Submitting…';
      btn.disabled = true;

      const formData = new FormData(form);
      fetch('/submit-proposal', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')?.value || '',
          'Accept': 'application/json'
        },
        body: formData
      })
      .then(async (res) => {
        const data = await res.json().catch(() => ({}));
        if (!res.ok || !data.success) {
          const validationErrors = Object.values(data.errors || {}).flat();
          throw new Error(validationErrors.join(' ') || data.message || 'Your proposal could not be submitted. Please try again.');
        }
        return data;
      })
      .then(data => {
        document.getElementById('form-success').style.display = 'block';
        document.getElementById('pitch-form-container').style.display = 'none';
      })
      .catch((error) => {
        errorBox.textContent = error.message;
        errorBox.hidden = false;
        btn.textContent = originalLabel;
        btn.disabled = false;
      });
    });
  }

  /* ── Floating Scroll to Top ── */
  const scrollTopBtn = document.getElementById('scroll-to-top');
  if (scrollTopBtn) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 350) {
        scrollTopBtn.classList.add('visible');
      } else {
        scrollTopBtn.classList.remove('visible');
      }
    }, { passive: true });

    scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
});
