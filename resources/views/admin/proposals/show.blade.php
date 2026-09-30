<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposal Details</title>
    <style>
        :root {
            --bg: #f4f7fb;
            --surface: #ffffff;
            --sidebar: #0f172a;
            --sidebar-soft: #1e293b;
            --primary: #0f766e;
            --gold: #d4a94d;
            --text: #102033;
            --muted: #5d7288;
            --line: #dfeaf6;
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
            font-size: 1.35rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: var(--gold);
        }

        .brand small {
            display: block;
            color: rgba(255,255,255,0.7);
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
            border-color: rgba(212, 169, 77, 0.4);
        }

        .nav-logout {
            margin-top: auto;
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
            text-decoration: none;
        }

        .nav-links a.active {
            background: rgba(15, 118, 110, 0.08);
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
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--line);
        }

        h1 {
            margin: 0;
            font-size: clamp(1.8rem, 2vw, 2.6rem);
            color: var(--text);
        }

        .actions {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .link, .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1rem;
            border-radius: 10px;
            font-weight: 700;
            border: 1px solid var(--line);
            background: #fff;
            color: var(--text);
        }

        .button {
            background: var(--primary);
            border-color: var(--primary);
            color: #fff;
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 20px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1rem;
            padding: 1.5rem;
        }

        .field {
            background: #f8fbff;
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 1rem;
        }

        .label {
            display: block;
            margin-bottom: 0.4rem;
            color: var(--muted);
            font-size: 0.74rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            font-weight: 700;
        }

        .value {
            color: var(--text);
            line-height: 1.6;
            word-break: break-word;
        }

        .summary {
            padding: 1.5rem;
            border-top: 1px solid var(--line);
            background: #fbfdff;
        }

        .summary strong {
            color: var(--primary);
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
                padding-bottom: 0.2rem;
            }

            .nav-item {
                white-space: normal;
            }

            .nav-logout {
                margin-top: auto;
            }

            .content {
                padding: 1.2rem;
            }

            .top-nav {
                padding: 0.85rem 0.9rem;
            }

            .topbar {
                display: block;
            }

            .actions {
                margin-top: 1rem;
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
                <a class="nav-item" href="{{ route('admin.dashboard') }}">
                    <span>Home</span>
                    <span>Overview</span>
                </a>
                <a class="nav-item active" href="{{ route('admin.proposals.index') }}">
                    <span>Proposals</span>
                    <span>List</span>
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
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    <a class="active" href="{{ route('admin.proposals.index') }}">Proposals</a>
                </div>
                <div class="user-badge">{{ auth('admin')->user()->name ?? 'Admin' }}</div>
            </div>

            <div class="topbar">
                <h1>Proposal Details</h1>
                <div class="actions">
                    <a class="link" href="{{ route('admin.proposals.index') }}">Back to list</a>
                    @if ($proposal->business_plan_path)
                        <a class="button" href="{{ route('admin.proposals.document', $proposal) }}">Download document</a>
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="grid">
                    <div class="field">
                        <span class="label">Full name</span>
                        <div class="value">{{ $proposal->full_name }}</div>
                    </div>
                    <div class="field">
                        <span class="label">Email</span>
                        <div class="value">{{ $proposal->email }}</div>
                    </div>
                    <div class="field">
                        <span class="label">Phone</span>
                        <div class="value">{{ $proposal->phone ?? 'Not provided' }}</div>
                    </div>
                    <div class="field">
                        <span class="label">Company</span>
                        <div class="value">{{ $proposal->company }}</div>
                    </div>
                    <div class="field">
                        <span class="label">Country</span>
                        <div class="value">{{ $proposal->country }}</div>
                    </div>
                    <div class="field">
                        <span class="label">Project name</span>
                        <div class="value">{{ $proposal->project_name }}</div>
                    </div>
                    <div class="field">
                        <span class="label">Sector</span>
                        <div class="value">{{ $proposal->sector }}</div>
                    </div>
                    <div class="field">
                        <span class="label">Estimated investment</span>
                        <div class="value">{{ $proposal->estimated_investment }}</div>
                    </div>
                    <div class="field">
                        <span class="label">Land required</span>
                        <div class="value">{{ $proposal->land_required }}</div>
                    </div>
                    <div class="field">
                        <span class="label">Submitted</span>
                        <div class="value">{{ $proposal->created_at->format('d M Y, H:i') }}</div>
                    </div>
                </div>

                <div class="summary">
                    <strong>Why Rwanda / Executive Summary</strong>
                    <p>{{ $proposal->why_rwanda }}</p>
                    @if ($proposal->business_plan_name)
                        <p><strong>Attached document:</strong> {{ $proposal->business_plan_name }}</p>
                    @else
                        <p><strong>Attached document:</strong> None uploaded</p>
                    @endif
                </div>
            </div>
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
