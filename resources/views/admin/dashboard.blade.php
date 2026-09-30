<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        :root {
            --bg: #f4f7fb;
            --surface: #ffffff;
            --surface-alt: #edf3ff;
            --sidebar: #0f172a;
            --sidebar-soft: #1e293b;
            --primary: #0f766e;
            --primary-soft: #ccfbf1;
            --gold: #d4a94d;
            --text: #102033;
            --muted: #5d7288;
            --line: #dfeaf6;
            --success: #1d9b76;
            --shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
        }

        a { text-decoration: none; }

        .admin-shell {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 260px;
            background: linear-gradient(180deg, var(--sidebar) 0%, var(--sidebar-soft) 100%);
            color: #fff;
            padding: 2rem 1.25rem;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            transition: transform 0.25s ease;
            z-index: 30;
        }

        .mobile-menu-toggle {
            display: none;
        }

        .sidebar-overlay {
            display: none;
        }

        .brand {
            font-size: 1.4rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--gold);
        }

        .brand small {
            display: block;
            color: rgba(255,255,255,0.72);
            margin-top: 0.45rem;
            font-size: 0.72rem;
            letter-spacing: 0.08em;
            text-transform: none;
        }

        .nav {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .nav-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.85rem 1rem;
            border-radius: 12px;
            color: #dbeafe;
            background: rgba(148, 163, 184, 0.08);
            border: 1px solid rgba(148, 163, 184, 0.1);
            font-weight: 600;
        }

        .nav-item.active {
            background: rgba(212, 169, 77, 0.12);
            color: #fff;
            border-color: rgba(212, 169, 77, 0.4);
        }

        .nav-logout {
            margin-top: auto;
            display: block;
        }

        .nav-logout button {
            width: 100%;
            border: 0;
            border-radius: 12px;
            background: rgba(255,255,255,0.08);
            color: #fff;
            padding: 0.9rem 1rem;
            font-weight: 700;
            cursor: pointer;
        }

        .content {
            flex: 1;
            padding: 2rem;
        }

        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 16px;
            box-shadow: var(--shadow);
            padding: 0.85rem 1rem;
            margin-bottom: 1.5rem;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: var(--muted);
            font-weight: 700;
            padding: 0.55rem 0.8rem;
            border-radius: 10px;
        }

        .nav-links a.active {
            background: var(--primary-soft);
            color: var(--primary);
        }

        .user-badge {
            background: #eef7f6;
            border: 1px solid #d7f0ec;
            color: var(--primary);
            border-radius: 999px;
            padding: 0.55rem 0.8rem;
            font-weight: 700;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .eyebrow {
            margin: 0 0 0.5rem;
            font-size: 0.74rem;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: var(--muted);
            font-weight: 700;
        }

        h1 {
            margin: 0;
            font-size: clamp(1.9rem, 2vw, 2.8rem);
            color: var(--text);
        }

        .pill {
            background: var(--surface);
            color: var(--primary);
            border: 1px solid var(--line);
            box-shadow: var(--shadow);
            border-radius: 999px;
            padding: 0.8rem 1.1rem;
            font-weight: 700;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1.25rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--surface);
            border-radius: 18px;
            border: 1px solid var(--line);
            box-shadow: var(--shadow);
            padding: 1.3rem 1.25rem;
        }

        .stat-card.primary {
            background: linear-gradient(135deg, var(--primary-soft) 0%, #ffffff 100%);
        }

        .stat-card.gold {
            background: linear-gradient(135deg, rgba(212, 169, 77, 0.12) 0%, #ffffff 100%);
        }

        .stat-label {
            font-size: 0.8rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-bottom: 0.5rem;
            display: block;
        }

        .stat-value {
            font-size: clamp(1.8rem, 2vw, 2.6rem);
            font-weight: 700;
            color: var(--text);
            margin: 0;
        }

        .panel {
            background: var(--surface);
            border-radius: 20px;
            border: 1px solid var(--line);
            box-shadow: var(--shadow);
            padding: 1.5rem;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .panel-header h2 {
            margin: 0;
            font-size: 1.2rem;
            color: var(--text);
        }

        .view-link {
            color: var(--primary);
            font-weight: 700;
        }

        .history-list {
            display: grid;
            gap: 0.8rem;
        }

        .history-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            padding: 1rem 1.1rem;
            border-radius: 14px;
            background: #f8fbff;
            border: 1px solid var(--line);
            color: var(--text);
        }

        .project-name {
            display: block;
            font-weight: 700;
            margin-bottom: 0.2rem;
        }

        .history-item small,
        .history-item p {
            margin: 0;
            color: var(--muted);
        }

        .history-meta {
            text-align: right;
        }

        .empty-state {
            padding: 1.5rem;
            border-radius: 14px;
            background: #f8fbff;
            border: 1px dashed var(--line);
            text-align: center;
            color: var(--muted);
            font-weight: 600;
        }

        @media (max-width: 900px) {
            .mobile-menu-toggle {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 46px;
                height: 46px;
                border-radius: 12px;
                border: 1px solid var(--line);
                background: var(--surface);
                color: var(--text);
                font-size: 1.5rem;
                cursor: pointer;
                box-shadow: var(--shadow);
                position: fixed;
                top: 1rem;
                left: 1rem;
                z-index: 40;
            }

            .admin-shell {
                display: block;
                position: relative;
            }

            .sidebar {
                position: fixed;
                left: 0;
                top: 0;
                bottom: 0;
                width: 270px;
                max-width: 82vw;
                transform: translateX(-110%);
                padding-bottom: 1rem;
                box-shadow: 0 20px 40px rgba(15, 23, 42, 0.25);
            }

            .admin-shell.sidebar-open .sidebar {
                transform: translateX(0);
            }

            .sidebar-overlay {
                position: fixed;
                inset: 0;
                background: rgba(15, 23, 42, 0.45);
                z-index: 20;
                display: none;
            }

            .admin-shell.sidebar-open .sidebar-overlay {
                display: block;
            }

            .nav {
                flex-direction: column;
                overflow-x: visible;
                padding-bottom: 0.25rem;
            }

            .nav-item {
                white-space: normal;
            }

            .nav-logout {
                margin-top: 0;
                min-width: 160px;
            }

            .content {
                padding: 1.25rem;
            }

            .top-nav {
                padding: 0.85rem 0.9rem;
            }

            .topbar {
                display: block;
            }

            .topbar .pill {
                display: inline-block;
                margin-top: 1rem;
            }
        }

        @media (max-width: 560px) {
            .history-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .history-meta {
                text-align: left;
            }

            .panel {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="admin-shell">
        <div class="sidebar-overlay" data-sidebar-close></div>

        <button class="mobile-menu-toggle" type="button" aria-label="Toggle menu" aria-expanded="false" data-sidebar-toggle>☰</button>

        <aside class="sidebar">
            <div>
                <div class="brand">
                    RDB Admin
                    <small>Proposal portal</small>
                </div>
            </div>

            <nav class="nav" aria-label="Sidebar navigation">
                <a class="nav-item active" href="{{ route('admin.dashboard') }}">
                    <span>Home</span>
                    <span>{{ $proposalCount }}</span>
                </a>
                <a class="nav-item" href="{{ route('admin.proposals.index') }}">
                    <span>Proposals</span>
                    <span>View</span>
                </a>
            </nav>

            <div class="nav-logout">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </aside>

        <main class="content">
            <div class="top-nav">
                <div class="nav-links">
                    <a class="active" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    <a href="{{ route('admin.proposals.index') }}">Proposals</a>
                </div>
                <div class="user-badge">{{ auth('admin')->user()->name ?? 'Admin' }}</div>
            </div>

            <header class="topbar">
                <div>
                    <p class="eyebrow">Admin dashboard</p>
                    <h1>Welcome back, {{ auth('admin')->user()->name ?? 'Admin' }}</h1>
                </div>
                <div class="pill">{{ $proposalCount }} proposals submitted</div>
            </header>

            <section class="stats-grid" aria-label="Summary statistics">
                <div class="stat-card primary">
                    <span class="stat-label">Total proposals</span>
                    <p class="stat-value">{{ $proposalCount }}</p>
                </div>
                <div class="stat-card gold">
                    <span class="stat-label">Recent activity</span>
                    <p class="stat-value">{{ $recentProposals->count() }}</p>
                </div>
                <div class="stat-card">
                    <span class="stat-label">Last updated</span>
                    <p class="stat-value">{{ now()->format('d M') }}</p>
                </div>
            </section>

            <section class="panel">
                <div class="panel-header">
                    <h2>Recent submissions</h2>
                    <a class="view-link" href="{{ route('admin.proposals.index') }}">View all proposals</a>
                </div>

                @if ($recentProposals->isEmpty())
                    <div class="empty-state">No proposals submitted yet.</div>
                @else
                    <div class="history-list">
                        @foreach ($recentProposals as $proposal)
                            <a class="history-item" href="{{ route('admin.proposals.show', $proposal) }}">
                                <div>
                                    <span class="project-name">{{ $proposal->project_name }}</span>
                                    <p>{{ $proposal->company }}</p>
                                </div>
                                <div class="history-meta">
                                    <small>{{ $proposal->full_name }}</small>
                                    <p>{{ $proposal->created_at->format('d M Y') }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif
            </section>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const shell = document.querySelector('.admin-shell');
            const toggle = document.querySelector('[data-sidebar-toggle]');
            const closeButton = document.querySelector('[data-sidebar-close]');
            const sidebarLinks = document.querySelectorAll('.sidebar a, .sidebar button');

            if (!shell || !toggle) return;

            const closeSidebar = () => {
                shell.classList.remove('sidebar-open');
                toggle.setAttribute('aria-expanded', 'false');
            };

            toggle.addEventListener('click', function () {
                const isOpen = shell.classList.toggle('sidebar-open');
                toggle.setAttribute('aria-expanded', String(isOpen));
            });

            if (closeButton) {
                closeButton.addEventListener('click', closeSidebar);
            }

            sidebarLinks.forEach(function (link) {
                link.addEventListener('click', closeSidebar);
            });
        });
    </script>
</body>
</html>
