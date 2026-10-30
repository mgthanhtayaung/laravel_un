<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="page-shell">
            <header class="topbar">
                <div class="brand">
                    <span class="brand-mark">U</span>
                    <span>{{ config('app.name') }}</span>
                </div>
                <nav class="nav" aria-label="Main navigation">
                    <a href="#">Overview</a>
                    <a href="#">Features</a>
                    <a href="#">Pricing</a>
                    <a href="#">Contact</a>
                </nav>
            </header>

            <main>
                <section class="hero">
                    <div>
                        <span class="pill">Welcome</span>
                        <h1>Build smarter workflows.</h1>
                        <p class="lead">
                            {{ config('app.name') }} brings your team, tasks, and ideas together in one elegant workspace.
                            Organize projects faster and move from planning to execution with clarity.
                        </p>

                        <div class="cta-row">
                            <a href="#" class="primary-btn">Get Started</a>
                            <a href="#" class="secondary-btn">View Demo</a>
                        </div>
                    </div>

                    <div class="hero-panel">
                        <div class="dashboard-card">
                            <div class="score">
                                <div>
                                    <span>Performance</span>
                                    <h2>92%</h2>
                                </div>
                                <span>+18.4%</span>
                            </div>

                            <div class="metric-bar"><div></div></div>

                            <div class="metric-row">
                                <span>Productivity</span>
                                <span>72%</span>
                            </div>
                            <div class="metric-row">
                                <span>Engagement</span>
                                <span>84%</span>
                            </div>
                            <div class="metric-row">
                                <span>Delivery</span>
                                <span>91%</span>
                            </div>

                            <div class="mini-grid">
                                <div class="mini-tile">
                                    <strong>1.2k</strong>
                                    <span>Tasks</span>
                                </div>
                                <div class="mini-tile">
                                    <strong>84</strong>
                                    <span>Members</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="stats-strip" aria-label="Key statistics">
                    <div class="stat-box">
                        <strong>3x</strong>
                        <span>Faster delivery</span>
                    </div>
                    <div class="stat-box">
                        <strong>24/7</strong>
                        <span>Team visibility</span>
                    </div>
                    <div class="stat-box">
                        <strong>18k</strong>
                        <span>Insights</span>
                    </div>
                    <div class="stat-box">
                        <strong>99.9%</strong>
                        <span>Reliability</span>
                    </div>
                </section>

                <section class="card-grid" aria-label="Feature list">
                    <article class="feature-card">
                        <div class="icon">⚡</div>
                        <h3>Fast Setup</h3>
                        <p>Launch in minutes with a clear workflow built for modern teams.</p>
                    </article>
                    <article class="feature-card">
                        <div class="icon">📊</div>
                        <h3>Actionable Insights</h3>
                        <p>See progress, trends, and priorities in a single glance.</p>
                    </article>
                    <article class="feature-card">
                        <div class="icon">🛠️</div>
                        <h3>Flexible Tools</h3>
                        <p>Adapt your process with modular features designed to scale.</p>
                    </article>
                    <article class="feature-card">
                        <div class="icon">🔒</div>
                        <h3>Secure by Default</h3>
                        <p>Keep everything organized with strong defaults and stable workflows.</p>
                    </article>
                </section>
            </main>
        </div>
    </body>
</html>
