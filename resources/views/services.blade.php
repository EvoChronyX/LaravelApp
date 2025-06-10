<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Services | Your Company Name</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #f3f4f6;
            --accent: #f59e42;
            --text: #22223b;
            --bg: #fff;
            --radius: 1rem;
            --shadow: 0 4px 24px rgba(0,0,0,0.08);
        }
        body {
            font-family: 'Segoe UI', 'Arial', sans-serif;
            background: var(--secondary);
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
            font-size: 1.25rem;
            color: #374151;
            margin-bottom: 2.5rem;
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        .service-card {
            background: var(--bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 2rem 1.5rem 1.5rem 1.5rem;
            text-align: center;
            transition: transform .18s;
        }
        .service-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px rgba(37,99,235,0.15);
        }
        .service-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }
        .service-title {
            font-size: 1.25rem;
            margin-bottom: .5rem;
            color: var(--text);
        }
        .service-desc {
            font-size: 1rem;
            color: #555;
            margin-bottom: 1rem;
        }
        .service-link {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
            transition: color .2s;
        }
        .service-link:hover {
            color: var(--primary);
        }

        /* How We Work */
        .process-section {
            margin-bottom: 3rem;
        }
        .process-steps {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: space-between;
        }
        .process-step {
            background: var(--bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            flex: 1 1 180px;
            min-width: 180px;
            max-width: 220px;
            text-align: center;
            padding: 1.5rem 1rem;
            position: relative;
        }
        .process-step:not(:last-child)::after {
            content: '';
            display: block;
            position: absolute;
            right: -1.5rem;
            top: 50%;
            transform: translateY(-50%);
            width: 2rem;
            height: 3px;
            background: var(--accent);
        }
        .process-icon {
            font-size: 2rem;
            margin-bottom: .5rem;
            color: var(--primary);
        }
        .process-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: .2rem;
        }

        /* Industries */
        .industries-section {
            margin-bottom: 3rem;
        }
        .industries-list {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-top: 1rem;
        }
        .industry-item {
            background: var(--bg);
            border-radius: 2rem;
            padding: .7rem 1.7rem;
            font-size: 1rem;
            color: var(--primary);
            border: 1px solid #e0e7ef;
            box-shadow: 0 2px 8px rgba(37,99,235,0.04);
        }

        /* Why Choose Us */
        .why-section {
            margin-bottom: 3rem;
        }
        .why-list {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }
        .why-item {
            background: var(--bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            flex: 1 1 200px;
            min-width: 180px;
            max-width: 260px;
            padding: 1.2rem 1rem;
            text-align: center;
        }
        .why-icon {
            font-size: 2rem;
            color: var(--accent);
            margin-bottom: .5rem;
        }
        .why-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text);
        }

        /* CTA */
        .cta-section {
            background: var(--primary);
            color: #fff;
            border-radius: var(--radius);
            text-align: center;
            padding: 2.5rem 1rem 2rem 1rem;
            margin-bottom: 3rem;
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

        /* FAQ */
        .faq-section {
            margin-bottom: 2.5rem;
        }
        .faq-list {
            max-width: 700px;
            margin: auto;
        }
        .faq-item {
            background: var(--bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin-bottom: 1rem;
            padding: 1.1rem 1.3rem;
        }
        .faq-q {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: .3rem;
        }
        .faq-a {
            color: #444;
            font-size: 1rem;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .why-list, .process-steps {
                flex-direction: column;
                gap: 1.2rem;
            }
            .services-grid {
                gap: 1.2rem;
            }
            .industries-list {
                gap: 1rem;
            }
        }
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }
            .service-card, .process-step, .why-item {
                padding: 1.1rem .7rem;
            }
            .container {
                padding: 1rem .2rem;
            }
            .cta-section {
                padding: 1.3rem .5rem;
            }
            .faq-list {
                padding: 0 .5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- 1. Page Title + Intro -->
        <h1>Our Services</h1>
        <div class="intro">
            We deliver <strong>scalable, secure, and high-performance software solutions</strong> tailored to your business needs.
        </div>

        <!-- 2. Service Cards / Grid Layout -->
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">💻</div>
                <div class="service-title bg-primary">Web Development</div>
                <div class="service-desc">Custom websites and web apps using the latest frameworks for speed, security, and scalability.</div>
                <a href="/services/web-development" class="service-link">Learn More &rarr;</a>
            </div>
            <div class="service-card">
                <div class="service-icon">📱</div>
                <div class="service-title">Mobile App Development</div>
                <div class="service-desc">iOS & Android apps, cross-platform solutions, and seamless mobile experiences for your users.</div>
                <a href="/services/mobile-app-development" class="service-link">Learn More &rarr;</a>
            </div>
            <div class="service-card">
                <div class="service-icon">🎨</div>
                <div class="service-title">UI/UX Design</div>
                <div class="service-desc">Intuitive, user-centered design for web and mobile, boosting engagement and conversions.</div>
                <a href="/services/ui-ux-design" class="service-link">Learn More &rarr;</a>
            </div>
            <div class="service-card">
                <div class="service-icon">🔗</div>
                <div class="service-title">API Development</div>
                <div class="service-desc">Robust, secure APIs for integrations, automation, and scalable digital ecosystems.</div>
                <a href="/services/api-development" class="service-link">Learn More &rarr;</a>
            </div>
            <div class="service-card">
                <div class="service-icon">🤖</div>
                <div class="service-title">AI / Automation Solutions</div>
                <div class="service-desc">Smart automation, AI integrations, and machine learning to drive efficiency and innovation.</div>
                <a href="/services/ai-automation" class="service-link">Learn More &rarr;</a>
            </div>
            <div class="service-card">
                <div class="service-icon">📈</div>
                <div class="service-title">Digital Marketing</div>
                <div class="service-desc">SEO, SEM, and digital campaigns to grow your brand and reach your target audience.</div>
                <a href="/services/digital-marketing" class="service-link">Learn More &rarr;</a>
            </div>
        </div>

        <!-- 3. How We Work / Our Process -->
        <div class="process-section">
            <h2>How We Work</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="process-icon">📝</div>
                    <div class="process-title">Requirement Gathering</div>
                </div>
                <div class="process-step">
                    <div class="process-icon">📐</div>
                    <div class="process-title">Planning &amp; Design</div>
                </div>
                <div class="process-step">
                    <div class="process-icon">💻</div>
                    <div class="process-title">Development</div>
                </div>
                <div class="process-step">
                    <div class="process-icon">✅</div>
                    <div class="process-title">Testing &amp; QA</div>
                </div>
                <div class="process-step">
                    <div class="process-icon">🚀</div>
                    <div class="process-title">Deployment &amp; Support</div>
                </div>
            </div>
        </div>

        <!-- 4. Industries We Serve -->
        <div class="industries-section">
            <h2>Industries We Serve</h2>
            <div>
                We’ve helped clients across industries with <strong>custom software solutions</strong>:
            </div>
            <div class="industries-list">
                <div class="industry-item">E-commerce</div>
                <div class="industry-item">Healthcare</div>
                <div class="industry-item">Logistics</div>
                <div class="industry-item">Real Estate</div>
                <div class="industry-item">EdTech</div>
            </div>
        </div>

        <!-- 5. Why Choose Us -->
        <div class="why-section">
            <h2>Why Choose Us</h2>
            <div class="why-list">
                <div class="why-item">
                    <div class="why-icon">👨‍💻</div>
                    <div class="why-title">Dedicated Team</div>
                </div>
                <div class="why-item">
                    <div class="why-icon">💡</div>
                    <div class="why-title">Transparent Pricing</div>
                </div>
                <div class="why-item">
                    <div class="why-icon">🔒</div>
                    <div class="why-title">Ongoing Support</div>
                </div>
            </div>
        </div>

        <!-- 6. Call to Action -->
        <div class="cta-section">
            <h2>Need a custom software solution? Let’s talk.</h2>
            <a href="/contact" class="cta-btn">Get a Free Quote</a>
        </div>

        <!-- 7. FAQ -->
        <div class="faq-section">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-q">How long does a typical project take?</div>
                    <div class="faq-a">Project timelines depend on scope and requirements, but most projects are delivered in 4–12 weeks.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">Do you offer post-launch support?</div>
                    <div class="faq-a">Yes! We provide ongoing maintenance, updates, and technical support after deployment.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">Can you help with digital marketing?</div>
                    <div class="faq-a">Absolutely. Our digital marketing experts can help you grow your online presence and reach your target audience.</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
