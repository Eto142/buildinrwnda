<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Proposals</title>
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
            text-decoration: none;
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
            color: var(--text);
            font-size: clamp(1.8rem, 2vw, 2.5rem);
        }

        .panel {
            background: var(--surface);
            border-radius: 20px;
            border: 1px solid var(--line);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid var(--line);
            background: #f9fbff;
        }

        .panel-header h2 {
            margin: 0;
            font-size: 1.2rem;
            color: var(--text);
        }

        .view-link {
            color: var(--primary);
            font-weight: 700;
            text-decoration: none;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 760px;
            background: #fff;
        }

        th, td {
            padding: 1rem 1.1rem;
            border-bottom: 1px solid var(--line);
            text-align: left;
            vertical-align: top;
        }

        th {
            background: #f6f9fc;
            color: var(--muted);
            font-size: 0.76rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        td {
            color: var(--text);
        }

        a.link {
            color: var(--primary);
            font-weight: 700;
            text-decoration: none;
        }

        .empty {
            padding: 2rem 1.5rem;
            color: var(--muted);
            background: #fff;
            text-align: center;
            font-weight: 600;
        }

        .pagination {
            padding: 1.25rem 1.5rem 1.5rem;
            color: var(--muted);
        }

        .pagination nav {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .pagination a,
        .pagination span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 2.6rem;
            height: 2.6rem;
            padding: 0 0.8rem;
            border-radius: 10px;
            border: 1px solid var(--line);
            background: #fff;
            color: var(--text);
            text-decoration: none;
        }

        .pagination .current {
            background: var(--primary);
            border-color: var(--primary);
            color: #fff;
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
                <h1>Submitted Proposals</h1>
            </div>

            <div class="panel">
                <div class="panel-header">
                    <h2>Proposal list</h2>
                    <a class="view-link" href="{{ route('admin.dashboard') }}">Back to dashboard</a>
                </div>

                @if($proposals->isEmpty())
                    <div class="empty">No proposals have been submitted yet.</div>
                @else
                    <div class="table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>Applicant</th>
                                    <th>Company</th>
                                    <th>Project</th>
                                    <th>Sector</th>
                                    <th>Submitted</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proposals as $proposal)
                                    <tr>
                                        <td>{{ $proposal->full_name }}</td>
                                        <td>{{ $proposal->company }}</td>
                                        <td>{{ $proposal->project_name }}</td>
                                        <td>{{ $proposal->sector }}</td>
                                        <td>{{ $proposal->created_at->format('d M Y') }}</td>
                                        <td><a class="link" href="{{ route('admin.proposals.show', $proposal) }}">View details</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="pagination">
                        {{ $proposals->links() }}
                    </div>
                @endif
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
