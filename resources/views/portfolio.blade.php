<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio | Our Work</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --primary: #2563eb;
            --accent: #f59e42;
            --bg: #f8fafc;
            --card-bg: #fff;
            --text: #232946;
            --radius: 1.1rem;
            --shadow: 0 4px 24px rgba(0,0,0,0.07);
        }
        body {
            font-family: 'Segoe UI', 'Arial', sans-serif;
            background: var(--bg);
            color: var(--text);
            margin: 0;
            padding: 0;
            line-height: 1.7;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 2rem 1rem;
        }
        h1, h2, h3 {
            font-weight: 700;
            color: var(--primary);
            margin-bottom: .7em;
        }
        h1 {
            font-size: 2.5rem;
        }
        .intro {
            font-size: 1.2rem;
            color: #374151;
            margin-bottom: 2.3rem;
        }

        /* Filters */
        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 1.1rem;
            margin-bottom: 2.2rem;
        }
        .filter-btn {
            background: #e0e7ef;
            color: var(--primary);
            border: none;
            border-radius: 2rem;
            padding: .6rem 1.5rem;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 600;
            transition: background .18s, color .18s;
        }
        .filter-btn.active,
        .filter-btn:hover {
            background: var(--primary);
            color: #fff;
        }

        /* Featured Project */
        .featured-section {
            display: flex;
            flex-wrap: wrap;
            gap: 2.5rem;
            background: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 2rem 1.2rem;
            margin-bottom: 3rem;
            align-items: center;
        }
        .featured-img {
            flex: 1 1 320px;
            min-width: 240px;
            max-width: 400px;
        }
        .featured-img img {
            width: 100%;
            border-radius: 1rem;
            object-fit: cover;
            box-shadow: 0 4px 16px rgba(37,99,235,0.08);
        }
        .featured-content {
            flex: 2 1 400px;
            min-width: 240px;
        }
        .featured-title {
            font-size: 1.5rem;
            color: var(--primary);
            font-weight: 700;
            margin-bottom: .7rem;
        }
        .featured-meta {
            margin-bottom: .8rem;
            color: #555;
        }
        .featured-list {
            margin: 0 0 1rem 1.2rem;
            padding: 0;
            color: #222;
        }
        .featured-list li {
            margin-bottom: .3rem;
        }
        .featured-link {
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            font-size: 1.05rem;
        }
        .featured-link:hover {
            color: var(--primary);
        }

        /* Project Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        .project-card {
            background: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform .18s;
        }
        .project-card:hover {
            transform: translateY(-7px) scale(1.025);
            box-shadow: 0 8px 32px rgba(37,99,235,0.13);
        }
        .project-thumb {
            width: 100%;
            height: 160px;
            object-fit: cover;
            background: #e0e7ef;
        }
        .project-content {
            padding: 1.2rem 1rem 1.1rem 1rem;
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
        }
        .project-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: .4rem;
        }
        .project-desc {
            font-size: .98rem;
            color: #555;
            margin-bottom: 1rem;
            flex: 1 1 auto;
        }
        .project-link {
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            font-size: 1.01rem;
            align-self: flex-start;
            transition: color .18s;
        }
        .project-link:hover {
            color: var(--primary);
        }

        /* Client Logo Slider */
        .clients-section {
            margin: 3rem 0 2.5rem 0;
            text-align: center;
        }
        .clients-logos {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
            align-items: center;
            margin-top: 1.2rem;
        }
        .client-logo {
            height: 48px;
            opacity: .8;
            filter: grayscale(1);
            transition: filter .2s, opacity .2s;
        }
        .client-logo:hover {
            filter: grayscale(0);
            opacity: 1;
        }

        /* CTA */
        .cta-section {
            background: var(--primary);
            color: #fff;
            border-radius: var(--radius);
            text-align: center;
            padding: 2.5rem 1rem 2rem 1rem;
            margin-bottom: 2.5rem;
        }
        .cta-section h2 {
            color: #fff;
        }
        .cta-btn {
            display: inline-block;
            margin-top: 1.3rem;
            background: var(--accent);
            color: #fff;
            font-weight: 600;
            font-size: 1.1rem;
            padding: .9rem 2.4rem;
            border: none;
            border-radius: 2rem;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            transition: background .2s;
            text-decoration: none;
        }
        .cta-btn:hover {
            background: #ea580c;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .featured-section {
                flex-direction: column;
                gap: 1.5rem;
            }
            .clients-logos {
                gap: 1.1rem;
            }
        }
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }
            .container {
                padding: 1rem .2rem;
            }
            .featured-section, .cta-section {
                padding: 1.2rem .5rem;
            }
            .projects-grid {
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- 1. Page Title + Intro -->
        <h1>Our Work</h1>
        <div class="intro">
            Take a look at some of the <strong>software solutions</strong> we’ve delivered for businesses across industries.
        </div>

        <!-- 3. Project Filters / Categories -->
        <div class="filters">
            <button class="filter-btn active" onclick="filterProjects('all')">All</button>
            <button class="filter-btn" onclick="filterProjects('web')">Web Apps</button>
            <button class="filter-btn" onclick="filterProjects('mobile')">Mobile Apps</button>
            <button class="filter-btn" onclick="filterProjects('ecommerce')">E-commerce</button>
            <button class="filter-btn" onclick="filterProjects('ai')">AI Solutions</button>
        </div>

        <!-- 4. Featured Project Section -->
        <section class="featured-section">
            <div class="featured-img">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=600&q=80" alt="Featured Project">
            </div>
            <div class="featured-content">
                <div class="featured-title">SmartShop E-commerce Platform</div>
                <div class="featured-meta">Goal: Build a scalable, user-friendly online marketplace</div>
                <ul class="featured-list">
                    <li><strong>Challenges:</strong> High traffic, real-time inventory, seamless checkout</li>
                    <li><strong>Tech Used:</strong> Laravel, Vue.js, Stripe, AWS</li>
                    <li><strong>Results:</strong> 99.99% uptime, 3x sales growth in 6 months</li>
                </ul>
                <a href="/portfolio/smartshop-ecommerce" class="featured-link">View Case Study &rarr;</a>
            </div>
        </section>

        <!-- 2. Project Grid / Cards -->
        <div class="projects-grid" id="projectsGrid">
            <div class="project-card" data-cat="web">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Project 1" class="project-thumb">
                <div class="project-content">
                    <div class="project-title">TaskFlow Web App</div>
                    <div class="project-desc">A productivity platform for remote teams to manage tasks and projects.</div>
                    <a href="/portfolio/taskflow-webapp" class="project-link">View Case Study &rarr;</a>
                </div>
            </div>
            <div class="project-card" data-cat="mobile">
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80" alt="Project 2" class="project-thumb">
                <div class="project-content">
                    <div class="project-title">FitTrack Mobile</div>
                    <div class="project-desc">A cross-platform fitness app with real-time tracking and analytics.</div>
                    <a href="/portfolio/fittrack-mobile" class="project-link">View Case Study &rarr;</a>
                </div>
            </div>
            <div class="project-card" data-cat="ecommerce">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80" alt="Project 3" class="project-thumb">
                <div class="project-content">
                    <div class="project-title">UrbanCart</div>
                    <div class="project-desc">A modern e-commerce store with advanced search and personalized offers.</div>
                    <a href="/portfolio/urbancart" class="project-link">View Case Study &rarr;</a>
                </div>
            </div>
            <div class="project-card" data-cat="ai">
                <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" alt="Project 4" class="project-thumb">
                <div class="project-content">
                    <div class="project-title">InsightAI Dashboard</div>
                    <div class="project-desc">AI-powered analytics dashboard for business intelligence and automation.</div>
                    <a href="/portfolio/insightai-dashboard" class="project-link">View Case Study &rarr;</a>
                </div>
            </div>
            <div class="project-card" data-cat="web">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=400&q=80" alt="Project 5" class="project-thumb">
                <div class="project-content">
                    <div class="project-title">EduPortal LMS</div>
                    <div class="project-desc">A learning management system for schools and online educators.</div>
                    <a href="/portfolio/eduportal-lms" class="project-link">View Case Study &rarr;</a>
                </div>
            </div>
            <div class="project-card" data-cat="mobile">
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80" alt="Project 6" class="project-thumb">
                <div class="project-content">
                    <div class="project-title">QuickMed App</div>
                    <div class="project-desc">A telemedicine mobile app for instant doctor consultations.</div>
                    <a href="/portfolio/quickmed-app" class="project-link">View Case Study &rarr;</a>
                </div>
            </div>
        </div>

        <!-- 6. Client Logo Slider -->
        <div class="clients-section">
            <h2>Trusted by Leading Brands</h2>
            <div class="clients-logos">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" alt="Client 1" class="client-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Client 2" class="client-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="Client 3" class="client-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Client 4" class="client-logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/NASA_Worm_logo.svg" alt="Client 5" class="client-logo">
            </div>
        </div>

        <!-- 7. Call to Action -->
        <div class="cta-section">
            <h2>Got a project in mind? Let's bring it to life!</h2>
            <a href="/contact" class="cta-btn">👉 Work With Us</a>
        </div>
    </div>
    <script>
        // Simple filter logic (no external JS needed)
        function filterProjects(cat) {
            const cards = document.querySelectorAll('.project-card');
            const btns = document.querySelectorAll('.filter-btn');
            btns.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            cards.forEach(card => {
                if (cat === 'all' || card.getAttribute('data-cat') === cat) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
