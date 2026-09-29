<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rwanda 2000  Land · Investment · Opportunity. An invitation for global investors to propose transformative projects for designated land in Rwanda. Submit your vision today.">
    <meta name="keywords" content="Rwanda investment, land investment Africa, Rwanda 2000, Build in Rwanda, RDB, East Africa investment, agricultural land Rwanda">
    <meta property="og:title" content="Build in Rwanda  Rwanda 2000 | Land · Investment · Opportunity">
    <meta property="og:description" content="2,000 hectares. Your vision. Rwanda. Bring your transformative project to the Land of a Thousand Hills.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://buildinrwnda.online">
    <link rel="canonical" href="https://buildinrwnda.online">
    <title>Build in Rwanda  Rwanda 2000 | Land · Investment · Opportunity</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

{{-- Header Partial --}}
@include('partials.header')

{{-- ════════════════════════════════════════
     1. HERO  Cinematic Background Carousel
════════════════════════════════════════ --}}
<section id="hero" aria-label="Hero section">

    {{-- Carousel Slides --}}
    <div class="hero-carousel" aria-live="polite">

        <div class="hero-slide active" data-caption="Land of a Thousand Hills" style="background-image: url('/images/hero.png');">
            <div class="hero-slide-overlay"></div>
        </div>

        <div class="hero-slide" data-caption="Kigali  Africa's Rising Capital" style="background-image: url('/images/kigali.png');">
            <div class="hero-slide-overlay"></div>
        </div>

        <div class="hero-slide" data-caption="Agricultural Heartland" style="background-image: url('/images/agriculture.png');">
            <div class="hero-slide-overlay"></div>
        </div>

        <div class="hero-slide" data-caption="Lake Kivu  The Blue Heart of Rwanda" style="background-image: url('/images/lake.png');">
            <div class="hero-slide-overlay"></div>
        </div>

        <div class="hero-slide" data-caption="Nyungwe  Ancient Rainforest" style="background-image: url('/images/forest.png');">
            <div class="hero-slide-overlay"></div>
        </div>

    </div>

    {{-- Content overlay --}}
    <div class="hero-content">

        <div class="hero-badge">
            <span class="hero-badge-dot"></span>
            Rwanda 2000 &bull; Land &bull; Investment &bull; Opportunity
        </div>

        <h1 class="hero-title">
            <span class="hero-line hero-line-1">2,000 HECTARES.</span>
            <span class="hero-line hero-line-2 gold">YOUR VISION.</span>
            <span class="hero-line hero-line-3">RWANDA.</span>
        </h1>

        <div class="hero-divider-wrap" aria-hidden="true">
            <div class="hero-divider-line"></div>
            <div class="hero-divider-diamond"></div>
            <div class="hero-divider-line"></div>
        </div>

        <p class="hero-subtitle">Bring your vision. Build in Rwanda.</p>

        <p class="hero-desc">
            An opportunity for investors to propose transformative projects<br class="hero-br">
            for designated land in Rwanda. Export potential 
Technology/innovation components
Environmental sustainability plan
        </p>

        <div class="hero-actions">
            <a href="#pitch" class="btn btn-hero-primary" id="hero-submit-btn">
                <span class="btn-icon">✦</span>
                <span>Submit Your Project</span>
            </a>
            <a href="#opportunity" class="btn btn-hero-outline" id="hero-explore-btn">
                Explore the Opportunity
                <span class="btn-arrow">↓</span>
            </a>
        </div>

        {{-- ── 2,000 HA Stats Bar  Placed Directly Under Buttons ── --}}
        <div class="hero-stats-strip" aria-label="Key opportunity metrics">
            <div class="hero-stat-box">
                <div class="hero-stat-num">
                    <span data-count="2000" data-suffix=" HA">2,000 HA</span>
                </div>
                <div class="hero-stat-label">Designated Opportunity</div>
            </div>
            <div class="hero-stat-box">
                <div class="hero-stat-num">GLOBAL</div>
                <div class="hero-stat-label">Investor Participation</div>
                <div class="hero-stat-sub">Open to all nations</div>
            </div>
            <div class="hero-stat-box">
                <div class="hero-stat-num">PROJECT-BASED</div>
                <div class="hero-stat-label">Proposal Evaluation</div>
                <div class="hero-stat-sub">Your idea is the currency</div>
            </div>
            <div class="hero-stat-box">
                <div class="hero-stat-num">IMPACT-DRIVEN</div>
                <div class="hero-stat-label">Selection Criteria</div>
                <div class="hero-stat-sub">Jobs &bull; Investment &bull; Innovation</div>
            </div>
        </div>

    </div>

    {{-- Slide caption bar --}}
    <div class="hero-caption-bar" aria-hidden="true">
        <div class="hero-caption-icon">📷</div>
        <div class="hero-caption-text" id="hero-caption-text">Land of a Thousand Hills</div>
    </div>

    {{-- Carousel navigation --}}
    <div class="hero-carousel-nav" role="tablist" aria-label="Hero image slideshow">
        <button class="hero-nav-dot active" data-slide="0" role="tab" aria-selected="true" aria-label="Slide 1"></button>
        <button class="hero-nav-dot" data-slide="1" role="tab" aria-selected="false" aria-label="Slide 2"></button>
        <button class="hero-nav-dot" data-slide="2" role="tab" aria-selected="false" aria-label="Slide 3"></button>
        <button class="hero-nav-dot" data-slide="3" role="tab" aria-selected="false" aria-label="Slide 4"></button>
        <button class="hero-nav-dot" data-slide="4" role="tab" aria-selected="false" aria-label="Slide 5"></button>
    </div>

    {{-- Arrow controls --}}
    <button class="hero-arrow hero-arrow-prev" id="hero-prev" aria-label="Previous slide">&#8249;</button>
    <button class="hero-arrow hero-arrow-next" id="hero-next" aria-label="Next slide">&#8250;</button>

    {{-- Progress bar --}}
    <div class="hero-progress" aria-hidden="true">
        <div class="hero-progress-bar" id="hero-progress-bar"></div>
    </div>

    {{-- Scroll cue --}}
    <div class="hero-scroll" aria-hidden="true">
        <div class="hero-scroll-line"></div>
        <span>Scroll</span>
    </div>

</section>

{{-- ════════════════════════════════════════
     2. ABOUT
════════════════════════════════════════ --}}
<section id="about" aria-labelledby="about-heading">
    <div class="about-inner">
        <div class="about-left reveal">
            <span class="section-eyebrow">About the Programme</span>
            <h2 id="about-heading">A platform for ideas<br>that can <em>grow in Rwanda</em></h2>
            <div class="about-divider"></div>
            <div class="about-paragraphs">
                <p>
                    Rwanda Land 2000 is a proposed investment initiative designed to attract innovative, productive and sustainable projects to Rwanda. We believe the best ideas should have a place to grow.
                </p>
                <p>
                    Investors are invited to present their project concepts, investment plans and intended use of land  across agriculture, manufacturing, tourism, energy, housing, logistics and beyond.
                </p>
                <p class="note">
                    Projects that meet the programme's eligibility, environmental, economic and development requirements may proceed through the appropriate government approval and land-allocation processes. Submission does not automatically mean land is granted.
                </p>
            </div>
        </div>

        <div class="about-right">
            <div class="about-feature reveal reveal-d1">
                <div class="about-feature-icon">🌿</div>
                <div class="about-feature-text">
                    <h4>Sustainable Focus</h4>
                    <p>Projects must demonstrate environmental responsibility and long-term sustainability alongside commercial viability.</p>
                </div>
            </div>
            <div class="about-feature reveal reveal-d2">
                <div class="about-feature-icon">🤝</div>
                <div class="about-feature-text">
                    <h4>Government-Aligned</h4>
                    <p>Shortlisted proposals proceed through formal RDB approval processes and existing regulatory frameworks.</p>
                </div>
            </div>
            <div class="about-feature reveal reveal-d3">
                <div class="about-feature-icon">💡</div>
                <div class="about-feature-text">
                    <h4>Project-Centred</h4>
                    <p>We evaluate the quality and impact of your idea  not simply the size of your balance sheet.</p>
                </div>
            </div>
            <div class="about-feature reveal reveal-d4">
                <div class="about-feature-icon">📈</div>
                <div class="about-feature-text">
                    <h4>Measurable Impact</h4>
                    <p>Jobs created, export potential, technology components and local economic benefits all form part of the evaluation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════
     3. THE OPPORTUNITY
════════════════════════════════════════ --}}
<section id="opportunity" aria-labelledby="opportunity-heading">
    <div class="opportunity-header reveal">
        <span class="section-eyebrow">The Opportunity</span>
        <h2 id="opportunity-heading">2,000 Hectares of <span>Opportunity</span></h2>
        <p>
            Designated land across Rwanda available for transformative projects. Tell us what you would build  we will evaluate proposals across six development themes.
        </p>
    </div>

    <div class="opportunity-layout">
        {{-- SVG Rwanda Map --}}
        <div class="map-container reveal">
            <div class="map-title">Republic of Rwanda</div>
            <svg class="rwanda-map-svg" viewBox="0 0 200 180" xmlns="http://www.w3.org/2000/svg"
                 role="img" aria-label="Map of Rwanda">
                <title>Rwanda  Land of a Thousand Hills</title>
                <path d="
                  M 60,20 L 72,14 L 90,18 L 105,12 L 125,16 L 140,10 L 150,20
                  L 160,30 L 165,45 L 158,58 L 165,70 L 160,85 L 155,100
                  L 148,115 L 138,125 L 125,135 L 115,148 L 100,158 L 88,165
                  L 75,160 L 62,150 L 50,140 L 40,128 L 32,115 L 28,100
                  L 30,85 L 24,70 L 30,55 L 35,42 L 42,30 L 55,22 Z
                "/>
            </svg>
            <div style="text-align:center; margin-top:1.5rem;">
                <p style="font-size:0.78rem; color:rgba(248,243,235,0.5); letter-spacing:0.05em;">
                    Land of a Thousand Hills<br>
                    <span style="color:var(--gold);">East Africa</span>
                </p>
            </div>
        </div>

        {{-- Sector Cards --}}
        <div class="sectors-grid reveal reveal-d1">
            <div class="sector-card" tabindex="0" aria-label="Agriculture sector">
                <div class="sector-icon">🌾</div>
                <div class="sector-name">Agriculture</div>
                <div class="sector-desc">Large-scale farming, horticulture, livestock and aquaculture.</div>
            </div>
            <div class="sector-card" tabindex="0" aria-label="Manufacturing sector">
                <div class="sector-icon">🏭</div>
                <div class="sector-name">Manufacturing</div>
                <div class="sector-desc">Processing, production and value-added industries.</div>
            </div>
            <div class="sector-card" tabindex="0" aria-label="Tourism sector">
                <div class="sector-icon">🦍</div>
                <div class="sector-name">Tourism</div>
                <div class="sector-desc">Hotels, resorts, eco-tourism and recreational developments.</div>
            </div>
            <div class="sector-card" tabindex="0" aria-label="Energy sector">
                <div class="sector-icon">⚡</div>
                <div class="sector-name">Energy</div>
                <div class="sector-desc">Renewable energy and supporting infrastructure.</div>
            </div>
            <div class="sector-card" tabindex="0" aria-label="Housing sector">
                <div class="sector-icon">🏘️</div>
                <div class="sector-name">Housing</div>
                <div class="sector-desc">Sustainable and affordable housing concepts.</div>
            </div>
            <div class="sector-card" tabindex="0" aria-label="Logistics sector">
                <div class="sector-icon">🚚</div>
                <div class="sector-name">Logistics</div>
                <div class="sector-desc">Warehousing, distribution and regional supply chains.</div>
            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════
     4. WHY RWANDA?
════════════════════════════════════════ --}}
<section id="why-rwanda" aria-labelledby="why-heading">
    <div class="why-header reveal">
        <span class="section-eyebrow">Why Rwanda</span>
        <h2 id="why-heading">A Country Built<br>for <em>Possibility</em></h2>
    </div>

    <div class="why-grid">
        <div class="why-card reveal">
            <div class="why-card-num">01</div>
            <div class="why-card-icon">📍</div>
            <h3>Strategic Location</h3>
            <p>At the heart of East and Central Africa, Rwanda provides access to a regional market of over 200 million people  a gateway to both the EAC and COMESA blocs.</p>
        </div>
        <div class="why-card reveal reveal-d1">
            <div class="why-card-num">02</div>
            <div class="why-card-icon">🏛️</div>
            <h3>Investment Ecosystem</h3>
            <p>Ranked among Africa's top business destinations, Rwanda offers investor-friendly policies, low corruption, political stability and streamlined regulatory processes.</p>
        </div>
        <div class="why-card reveal reveal-d2">
            <div class="why-card-num">03</div>
            <div class="why-card-icon">👩‍🎓</div>
            <h3>Skilled Workforce</h3>
            <p>A young, educated and growing workforce with increasing technical and professional skills. Rwanda invests heavily in education and vocational training.</p>
        </div>
        <div class="why-card reveal">
            <div class="why-card-num">04</div>
            <div class="why-card-icon">📡</div>
            <h3>Digital Infrastructure</h3>
            <p>One of Africa's most connected nations, with high-speed fibre coverage across the country and a government committed to a knowledge-based economy.</p>
        </div>
        <div class="why-card reveal reveal-d1">
            <div class="why-card-num">05</div>
            <div class="why-card-icon">📊</div>
            <h3>Growing Economy</h3>
            <p>Consistent GDP growth, a stable currency, low inflation and a track record of delivering national development goals through Vision 2050.</p>
        </div>
        <div class="why-card reveal reveal-d2">
            <div class="why-card-num">06</div>
            <div class="why-card-icon">🌍</div>
            <h3>Regional Market Access</h3>
            <p>Membership of the EAC, COMESA and AfCFTA  giving investors preferential access to the world's largest free trade area covering 54 African nations.</p>
        </div>
        <div class="why-card reveal" style="grid-column: span 3;">
            <div class="why-card-num">07</div>
            <div class="why-card-icon">⚙️</div>
            <h3>Investment Facilitation</h3>
            <p>The Rwanda Development Board operates a world-class One Stop Centre  handling business registration, licences, environmental clearances and investment approvals in a single location. RDB's priority sectors include agriculture, energy, manufacturing, ICT, infrastructure, tourism and real estate.</p>
        </div>
    </div>

    <div class="why-photo-band">
        <div class="why-photo reveal">
            <img src="/images/hero.png" alt="Rwanda's iconic thousand hills  lush green landscape" loading="lazy">
            <span class="why-photo-caption">The Land</span>
        </div>
        <div class="why-photo reveal reveal-d1">
            <img src="/images/kigali.png" alt="Kigali city skyline at dusk" loading="lazy">
            <span class="why-photo-caption">The City</span>
        </div>
        <div class="why-photo reveal reveal-d2">
            <img src="/images/agriculture.png" alt="Rwandan agricultural terraces" loading="lazy">
            <span class="why-photo-caption">The Opportunity</span>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════
     5. WHO CAN APPLY
════════════════════════════════════════ --}}
<section id="who-apply" aria-labelledby="who-heading">
    <div class="who-inner">
        <div class="who-left reveal">
            <span class="section-eyebrow">Who Can Apply</span>
            <h2 id="who-heading">We Are <em>Looking For</em></h2>
            <p>
                We evaluate projects on their merit and impact  not simply financial credentials. If you have a transformative idea and a credible plan to deliver it, we want to hear from you.
            </p>
            <a href="#pitch" class="btn btn-ghost-gold">Submit Your Project</a>
        </div>
        <div class="who-right reveal reveal-d1">
            <div class="who-tags">
                <span class="who-tag">International Companies</span>
                <span class="who-tag">African Businesses</span>
                <span class="who-tag">Multinational Corporations</span>
                <span class="who-tag">Institutional Investors</span>
                <span class="who-tag">Agribusinesses</span>
                <span class="who-tag">Developers</span>
                <span class="who-tag">Technology Companies</span>
                <span class="who-tag">Renewable Energy Companies</span>
                <span class="who-tag">Tourism Groups</span>
                <span class="who-tag">Manufacturing Companies</span>
                <span class="who-tag">Development Partners</span>
                <span class="who-tag">Joint Ventures</span>
                <span class="who-tag">Qualified Entrepreneurs</span>
            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════
     6. THE PITCH  Multi-step Form
════════════════════════════════════════ --}}
<section id="pitch" aria-labelledby="pitch-heading">
    <div class="pitch-header reveal">
        <span class="section-eyebrow">The Pitch</span>
        <h2 id="pitch-heading">What Would You <em>Build</em>?</h2>
        <p class="tagline">
            Rwanda has the land.<br>
            You have the idea.<br>
            Tell us what you would build.
        </p>
    </div>

    {{-- Stepper --}}
    <div class="form-stepper" role="navigation" aria-label="Form progress">
        <div class="stepper-step active" id="step-ind-1">
            <div class="stepper-num">1</div>
            <div class="stepper-label">Applicant</div>
        </div>
        <div class="stepper-connector"></div>
        <div class="stepper-step" id="step-ind-2">
            <div class="stepper-num">2</div>
            <div class="stepper-label">Project</div>
        </div>
        <div class="stepper-connector"></div>
        <div class="stepper-step" id="step-ind-3">
            <div class="stepper-num">3</div>
            <div class="stepper-label">Proposal</div>
        </div>
    </div>

    <div class="pitch-form-wrap" id="pitch-form-container">
        <form id="pitch-form" novalidate>
            @csrf

            {{-- PANEL 1: Applicant Information --}}
            <div class="form-panel active" id="panel-1">
                <div class="form-section-title">Applicant Information</div>
                <div class="form-grid">
                    <div class="form-field">
                        <label for="full-name">Full Name *</label>
                        <input type="text" id="full-name" name="full_name" placeholder="Your full name" required>
                    </div>
                    <div class="form-field">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" placeholder="your@email.com" required>
                    </div>
                </div>
                <div class="form-grid">
                    <div class="form-field">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+1 234 567 8900">
                    </div>
                    <div class="form-field">
                        <label for="company">Company / Organisation *</label>
                        <input type="text" id="company" name="company" placeholder="Your company or organisation" required>
                    </div>
                </div>
                <div class="form-grid col-1">
                    <div class="form-field">
                        <label for="country">Country *</label>
                        <select id="country" name="country" required>
                            <option value="" disabled selected>Select country</option>
                            <option>Rwanda</option>
                            <option>United Kingdom</option>
                            <option>United States</option>
                            <option>China</option>
                            <option>India</option>
                            <option>Kenya</option>
                            <option>Uganda</option>
                            <option>Tanzania</option>
                            <option>South Africa</option>
                            <option>Nigeria</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>Netherlands</option>
                            <option>Canada</option>
                            <option>Australia</option>
                            <option>UAE</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-nav">
                    <span></span>
                    <button type="button" class="btn btn-primary btn-next-step" id="step1-next">
                        <span>Next: Project Details →</span>
                    </button>
                </div>
            </div>

            {{-- PANEL 2: Project Details --}}
            <div class="form-panel" id="panel-2">
                <div class="form-section-title">Project Details</div>
                <div class="form-grid">
                    <div class="form-field">
                        <label for="project-name">Project Name *</label>
                        <input type="text" id="project-name" name="project_name" placeholder="Name your project" required>
                    </div>
                    <div class="form-field">
                        <label for="sector">Sector *</label>
                        <select id="sector" name="sector" required>
                            <option value="" disabled selected>Select sector</option>
                            <option>Agriculture</option>
                            <option>Manufacturing</option>
                            <option>Tourism</option>
                            <option>Energy</option>
                            <option>Housing</option>
                            <option>Logistics</option>
                            <option>Technology / ICT</option>
                            <option>Healthcare</option>
                            <option>Education</option>
                            <option>Finance</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-grid">
                    <div class="form-field">
                        <label for="investment">Estimated Investment (USD) *</label>
                        <input type="text" id="investment" name="estimated_investment" placeholder="e.g. $5,000,000" required>
                    </div>
                    <div class="form-field">
                        <label for="land-required">Land & Proposed Location Required *</label>
                        <input type="text" id="land-required" name="land_required" placeholder="e.g. 50 ha in Eastern Province" required>
                    </div>
                </div>
                <div class="form-nav">
                    <button type="button" class="btn btn-outline btn-prev-step">← Back</button>
                    <button type="button" class="btn btn-primary btn-next-step" id="step2-next">
                        <span>Next: Proposal & Submit →</span>
                    </button>
                </div>
            </div>

            {{-- PANEL 3: Proposal & Submission --}}
            <div class="form-panel" id="panel-3">
                <div class="form-section-title">Project Proposal & Pitch</div>
                <div class="form-grid col-1 why-rwandaQ">
                    <div class="form-field">
                        <label for="why-rwanda-q">Project Executive Summary / Why Rwanda *</label>
                        <textarea id="why-rwanda-q" name="why_rwanda" placeholder="Briefly describe your project vision, key economic impact, and why it is suited to Rwanda." style="min-height:140px;" required></textarea>
                    </div>
                </div>

                <div class="form-field" style="margin-top:1.5rem;">
                    <label style="display:block; margin-bottom:0.5rem; font-size:0.85rem; color:var(--gold); font-weight:600;">Pitch Deck / Supporting Document (Optional)</label>
                    <div class="upload-area" id="upload-bp" tabindex="0" aria-label="Upload proposal document">
                        <input type="file" name="business_plan" accept=".pdf,.doc,.docx,.zip" style="display:none">
                        <div class="upload-icon">📄</div>
                        <p>Upload Pitch Deck or Business Proposal<br><span>Click to browse or drag & drop (PDF, DOCX)</span></p>
                    </div>
                </div>

                <div style="padding:1.25rem; background:rgba(200,168,75,0.05); border:1px solid rgba(200,168,75,0.15); border-radius:6px; margin:1.5rem 0; font-size:0.8rem; color:rgba(248,243,235,0.6); line-height:1.7;">
                    By submitting this proposal, you acknowledge that submission does not guarantee land allocation or programme approval. All proposals will be assessed against official criteria via applicable RDB approval processes.
                </div>
                <div class="form-nav">
                    <button type="button" class="btn btn-outline btn-prev-step">← Back</button>
                    <button type="submit" class="btn btn-primary btn-submit" id="submit-proposal-btn" style="padding:0.9rem 2.5rem;">
                        <span>Submit Proposal →</span>
                    </button>
                </div>
            </div>
        </form>
    </div>

    {{-- Success Message --}}
    <div id="form-success" style="display:none; text-align:center; max-width:600px; margin:0 auto; padding:4rem 2rem;">
        <div style="font-size:4rem; margin-bottom:1.5rem;">✅</div>
        <h3 style="font-size:2rem; color:var(--gold); margin-bottom:1rem;">Proposal Received</h3>
        <p style="color:rgba(248,243,235,0.7); font-size:1rem; line-height:1.8; margin-bottom:2rem;">
            Thank you for your submission. Your project proposal has been received and will be reviewed against the programme's eligibility criteria. We will be in touch in due course.
        </p>
        <a href="#" class="btn btn-ghost-gold">Return to Top</a>
    </div>
</section>

{{-- ════════════════════════════════════════
     7. HOW IT WORKS
════════════════════════════════════════ --}}
<section id="how-it-works" aria-labelledby="how-heading">
    <div class="how-header reveal">
        <span class="section-eyebrow">How It Works</span>
        <h2 id="how-heading">From Idea to Impact</h2>
    </div>

    <div class="how-steps">
        <div class="how-step">
            <div class="how-step-num">01</div>
            <h3>Submit</h3>
            <p>Tell us what you want to build. Complete the proposal form and upload your project documentation.</p>
        </div>
        <div class="how-step">
            <div class="how-step-num">02</div>
            <h3>Review</h3>
            <p>Your proposal is assessed against programme criteria  eligibility, environmental, economic and development requirements.</p>
        </div>
        <div class="how-step">
            <div class="how-step-num">03</div>
            <h3>Shortlist</h3>
            <p>Qualifying proposals proceed to further evaluation. You will be contacted by the programme team.</p>
        </div>
        <div class="how-step">
            <div class="how-step-num">04</div>
            <h3>Due Diligence</h3>
            <p>Financial, technical, environmental and legal assessments conducted on shortlisted proposals.</p>
        </div>
        <div class="how-step">
            <div class="how-step-num">05</div>
            <h3>Approval & Implementation</h3>
            <p>Approved projects proceed through applicable government and land allocation processes via RDB.</p>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════
     8. GALLERY
════════════════════════════════════════ --}}
<section id="gallery" aria-labelledby="gallery-heading">
    <div class="gallery-header reveal">
        <span class="section-eyebrow">Rwanda Gallery</span>
        <h2 id="gallery-heading">See the Opportunity</h2>
    </div>

    <div class="gallery-tabs" role="tablist" aria-label="Gallery categories">
        <button class="gallery-tab active" data-cat="all" role="tab" aria-selected="true">All</button>
        <button class="gallery-tab" data-cat="land" role="tab" aria-selected="false">The Land</button>
        <button class="gallery-tab" data-cat="people" role="tab" aria-selected="false">The People</button>
        <button class="gallery-tab" data-cat="city" role="tab" aria-selected="false">The City</button>
        <button class="gallery-tab" data-cat="opportunity" role="tab" aria-selected="false">The Opportunity</button>
        <button class="gallery-tab" data-cat="future" role="tab" aria-selected="false">The Future</button>
    </div>

    <div class="gallery-masonry" role="list">
        <div class="gallery-item g-wide" data-cat="land" role="listitem">
            <img src="/images/hero.png" alt="Rwanda thousand hills aerial view" loading="lazy">
            <div class="gallery-item-overlay">
                <span class="gallery-item-label">The Land  Thousand Hills</span>
            </div>
        </div>
        <div class="gallery-item g-tall" data-cat="people" role="listitem">
            <img src="/images/people.png" alt="Rwandan entrepreneurs collaborating" loading="lazy">
            <div class="gallery-item-overlay">
                <span class="gallery-item-label">The People</span>
            </div>
        </div>
        <div class="gallery-item g-med" data-cat="city" role="listitem">
            <img src="/images/kigali.png" alt="Kigali city skyline" loading="lazy">
            <div class="gallery-item-overlay">
                <span class="gallery-item-label">The City  Kigali</span>
            </div>
        </div>
        <div class="gallery-item g-med" data-cat="opportunity" role="listitem">
            <img src="/images/agriculture.png" alt="Rwanda agricultural landscape" loading="lazy">
            <div class="gallery-item-overlay">
                <span class="gallery-item-label">The Opportunity  Agriculture</span>
            </div>
        </div>
        <div class="gallery-item g-std" data-cat="land" role="listitem">
            <img src="/images/forest.png" alt="Nyungwe Forest aerial view" loading="lazy">
            <div class="gallery-item-overlay">
                <span class="gallery-item-label">Nyungwe Forest</span>
            </div>
        </div>
        <div class="gallery-item g-std" data-cat="future" role="listitem">
            <img src="/images/people.png" alt="Rwanda digital future" loading="lazy">
            <div class="gallery-item-overlay">
                <span class="gallery-item-label">The Future</span>
            </div>
        </div>
        <div class="gallery-item g-std" data-cat="opportunity" role="listitem">
            <img src="/images/lake.png" alt="Lake Kivu Rwanda" loading="lazy">
            <div class="gallery-item-overlay">
                <span class="gallery-item-label">Lake Kivu</span>
            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════
     9. FAQ
════════════════════════════════════════ --}}
<section id="faq" aria-labelledby="faq-heading">
    <div class="faq-inner">
        <div class="faq-header reveal">
            <span class="section-eyebrow">Frequently Asked Questions</span>
            <h2 id="faq-heading">Your Questions Answered</h2>
        </div>

        <div class="faq-list" role="list">

            <div class="faq-item" role="listitem">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
                    <h3>Who can submit a proposal?</h3>
                    <div class="faq-icon" aria-hidden="true">+</div>
                </div>
                <div class="faq-answer">
                    <p>Any international company, African business, multinational corporation, institutional investor, agribusiness, developer, technology company, renewable energy company, tourism group, manufacturing company, development partner, joint venture or qualified entrepreneur is welcome to submit a project proposal. We evaluate projects on their merit and impact.</p>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
                    <h3>How much land can a project request?</h3>
                    <div class="faq-icon" aria-hidden="true">+</div>
                </div>
                <div class="faq-answer">
                    <p>There is no fixed minimum or maximum land allocation. Project proposals should indicate the land area required to deliver the project effectively. The programme covers a total of 2,000 designated hectares across Rwanda, and land allocations are subject to government approval and availability.</p>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
                    <h3>Is land automatically granted if my proposal is accepted?</h3>
                    <div class="faq-icon" aria-hidden="true">+</div>
                </div>
                <div class="faq-answer">
                    <p>No. Submission and even shortlisting do not automatically result in land allocation. Qualifying proposals must proceed through the appropriate government approval and land-allocation processes, including review by the Rwanda Development Board (RDB). The programme facilitates the process  it does not replace it.</p>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
                    <h3>What sectors qualify?</h3>
                    <div class="faq-icon" aria-hidden="true">+</div>
                </div>
                <div class="faq-answer">
                    <p>The programme is open across six primary themes: Agriculture, Manufacturing, Tourism, Energy, Housing and Logistics. Projects in technology, ICT, healthcare and education may also be considered where they align with Rwanda's national development priorities.</p>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
                    <h3>Can foreign companies participate?</h3>
                    <div class="faq-icon" aria-hidden="true">+</div>
                </div>
                <div class="faq-answer">
                    <p>Yes. The programme actively encourages international participation. Foreign investors, multinational corporations and international development partners are all welcome to submit proposals. Rwanda's investment framework is open and investor-friendly to foreign capital.</p>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
                    <h3>What documents are required?</h3>
                    <div class="faq-icon" aria-hidden="true">+</div>
                </div>
                <div class="faq-answer">
                    <p>We ask for a business plan or project proposal, financial projections, company registration documents and any relevant supporting materials. All documents should be submitted in PDF format where possible. The quality of your project concept matters more than the volume of documentation.</p>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
                    <h3>How are proposals evaluated?</h3>
                    <div class="faq-icon" aria-hidden="true">+</div>
                </div>
                <div class="faq-answer">
                    <p>Proposals are assessed against eligibility, environmental, economic and development criteria. Key factors include job creation, local economic impact, export potential, technology and innovation components, environmental sustainability planning, and overall alignment with Rwanda's Vision 2050 development goals.</p>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
                    <h3>What happens after submission?</h3>
                    <div class="faq-icon" aria-hidden="true">+</div>
                </div>
                <div class="faq-answer">
                    <p>After submission, your proposal is reviewed by the programme team. You will be notified whether your proposal has been shortlisted for further evaluation. Shortlisted proposals proceed to a due diligence phase covering financial, technical, environmental and legal assessments. Approved projects are then guided through the applicable government processes.</p>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <div class="faq-question" role="button" tabindex="0" aria-expanded="false">
                    <h3>What environmental requirements apply?</h3>
                    <div class="faq-icon" aria-hidden="true">+</div>
                </div>
                <div class="faq-answer">
                    <p>All projects must demonstrate a credible approach to environmental sustainability. Rwanda has strong environmental protection standards, and projects are expected to meet national environmental requirements including Environmental and Social Impact Assessments (ESIAs) where applicable. Environmental considerations form a core part of the evaluation criteria.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ════════════════════════════════════════
     10. CONTACT
════════════════════════════════════════ --}}
<section id="contact" aria-labelledby="contact-heading">
    <div class="contact-inner">
        <div class="contact-left reveal">
            <span class="section-eyebrow">Contact</span>
            <h2 id="contact-heading">Build With <em>Rwanda</em></h2>
            <p>
                Ready to explore the opportunity? Get in touch with the Rwanda 2000 programme team for investment enquiries, media requests and partnership discussions.
            </p>

            <div class="contact-channels">
                <a href="mailto:support@buildinrwnda.online" class="contact-channel">
                    <div class="contact-ch-icon">✉️</div>
                    <div>
                        <div class="contact-ch-label">Official Support & Enquiries</div>
                        <div class="contact-ch-value">support@buildinrwnda.online</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="contact-right reveal reveal-d2">
            <div class="rdb-box">
                <h4>Official Investment Registration</h4>
                <p>
                    Rwanda Development Board (RDB) operates an official One Stop Centre for investment registration, business licensing and all formal government approvals. For legally binding investment registration, please use the official RDB system.
                </p>
                {{-- <a href="https://www.rdb.rw" target="_blank" rel="noopener noreferrer">
                    Visit RDB  Rwanda Development Board ↗
                </a> --}}
            </div>

            <div class="rdb-box">
                <h4>Land Administration</h4>
                <p>
                    All land-related matters in Rwanda are administered through the Rwanda Land Management and Use Authority and the Ministry of Environment. Official land processes apply to all approved projects.
                </p>
                {{-- <a href="https://www.lands.rw/home" target="_blank" rel="noopener noreferrer">
                    Visit Rwanda Land Authority ↗
                </a> --}}
            </div>

            <div class="rdb-box">
                <h4>Ready to Propose?</h4>
                <p>Submit your project concept through our proposal form and begin your Rwanda investment journey.</p>
                <a href="#pitch">Submit Your Project Proposal →</a>
            </div>
        </div>
    </div>
</section>

{{-- Footer Partial --}}
@include('partials.footer')

</body>
</html>
