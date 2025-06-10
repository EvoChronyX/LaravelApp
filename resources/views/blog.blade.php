<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Page - Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts: Poppins & Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #10b981;
            --light-blue: #0ea5e9;
            --orange: #f59e0b;
            --gray-bg: #f8fafc;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --card-radius: 1.1rem;
            --shadow: 0 4px 24px 0 rgba(30,41,59,0.08);
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Poppins', 'Roboto', Arial, sans-serif;
            background: var(--gray-bg);
            color: var(--text-dark);
            line-height: 1.6;
        }
        a { color: var(--primary); text-decoration: none; transition: color 0.2s; }
        a:hover { color: var(--secondary); }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        /* Hero Section */
        .hero {
            text-align: center;
            padding: 3.5rem 0 2.5rem 0;
            background: #fff;
            border-radius: var(--card-radius);
            margin-top: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow);
        }
        .hero h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.7rem;
        }
        .hero p {
            color: var(--text-light);
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 400px;
            margin: 0 auto;
            background: var(--gray-bg);
            border-radius: 2rem;
            padding: 0.25rem 0.5rem;
            box-shadow: 0 2px 8px 0 rgba(30,41,59,0.06);
        }
        .search-bar input {
            border: none;
            background: transparent;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            flex: 1;
            outline: none;
            font-family: inherit;
        }
        .search-bar button {
            border: none;
            background: var(--primary);
            color: #fff;
            padding: 0.7rem 1.1rem;
            border-radius: 2rem;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background 0.2s;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }
        .search-bar button:hover {
            background: var(--secondary);
        }
        /* Category Showcase */
        .categories {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        .category-card {
            border-radius: var(--card-radius);
            padding: 2rem 1.5rem;
            color: #fff;
            box-shadow: var(--shadow);
            transition: transform 0.18s, box-shadow 0.18s;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            min-height: 180px;
        }
        .category-card.green { background: linear-gradient(90deg, #10b981 70%, #34d399 100%); }
        .category-card.blue { background: linear-gradient(90deg, #2563eb 70%, #0ea5e9 100%); }
        .category-card.orange { background: linear-gradient(90deg, #f59e0b 70%, #fbbf24 100%); }
        .category-card h3 {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            letter-spacing: 0.03em;
        }
        .category-card h4 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.4rem;
        }
        .category-card p {
            font-size: 1rem;
            opacity: 0.92;
        }
        .category-card:hover {
            transform: translateY(-6px) scale(1.025);
            box-shadow: 0 8px 32px 0 rgba(30,41,59,0.14);
        }
        /* Featured Section */
        .featured-section {
            margin-bottom: 3rem;
        }
        .featured-section h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1.5rem;
            letter-spacing: 0.01em;
            text-align: left;
        }
        .featured-cards {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        .featured-card {
            position: relative;
            border-radius: var(--card-radius);
            overflow: hidden;
            min-height: 220px;
            background: #e0e7ef;
            box-shadow: var(--shadow);
            color: #fff;
            transition: transform 0.18s, box-shadow 0.18s;
            display: flex;
            align-items: flex-end;
        }
        .featured-card .bg-img {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            z-index: 1;
            filter: brightness(0.75) blur(0.5px);
        }
        .featured-card .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(37,99,235,0.4) 0%, rgba(30,41,59,0.7) 100%);
            z-index: 2;
        }
        .featured-card-content {
            position: relative;
            z-index: 3;
            padding: 1.5rem 1.3rem;
        }
        .featured-card .date {
            font-size: 0.98rem;
            opacity: 0.84;
            margin-bottom: 0.4rem;
        }
        .featured-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 0.2rem;
        }
        .featured-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 12px 36px 0 rgba(30,41,59,0.16);
        }
        /* Latest Articles Section */
        .latest-section {
            margin-bottom: 3rem;
        }
        .latest-section h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1.5rem;
            letter-spacing: 0.01em;
            text-align: left;
        }
        .latest-cards {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        .latest-card {
            display: flex;
            background: #fff;
            border-radius: var(--card-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: transform 0.18s, box-shadow 0.18s;
            min-height: 140px;
        }
        .latest-card:hover {
            transform: translateY(-6px) scale(1.025);
            box-shadow: 0 8px 32px 0 rgba(30,41,59,0.14);
        }
        .latest-card-img {
            width: 110px;
            min-width: 110px;
            background: #e0e7ef;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            color: var(--primary);
        }
        .latest-card-content {
            flex: 1;
            padding: 1.1rem 1.2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .category-tag {
            display: inline-block;
            font-size: 0.89rem;
            font-weight: 600;
            padding: 0.25rem 0.8rem;
            border-radius: 1rem;
            margin-bottom: 0.4rem;
            color: #fff;
        }
        .category-tag.green { background: var(--secondary); }
        .category-tag.blue { background: var(--light-blue); }
        .category-tag.orange { background: var(--orange); }
        .latest-card h4 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.3rem;
        }
        .latest-card p {
            font-size: 0.98rem;
            color: var(--text-light);
            margin-bottom: 0.3rem;
        }
        .read-more {
            font-size: 0.96rem;
            font-weight: 600;
            margin-top: 0.2rem;
            display: inline-block;
            color: var(--primary);
        }
        .read-more i {
            margin-left: 0.2rem;
        }
        /* Responsive Grid */
        @media (min-width: 600px) {
            .categories {
                grid-template-columns: repeat(2, 1fr);
            }
            .featured-cards, .latest-cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (min-width: 900px) {
            .categories {
                grid-template-columns: repeat(3, 1fr);
            }
            .featured-cards, .latest-cards {
                grid-template-columns: repeat(3, 1fr);
            }
            .hero h1 { font-size: 3rem; }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Hero Section -->
        <section class="hero">
            <h1>Discover our latest news</h1>
            <p>Discover the achievements that set us apart...</p>
            <form class="search-bar" action="#" method="get">
                <input type="text" placeholder="Find Now" name="q" />
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </section>
        <!-- Category Showcase -->
        <section class="categories">
            <div class="category-card green">
                <h3>Health & Nutrition</h3>
                <h4>Eat Well, Live Better</h4>
                <p>Explore tips and guides for a healthier lifestyle, nutrition advice, and wellness trends.</p>
            </div>
            <div class="category-card blue">
                <h3>Sustainability</h3>
                <h4>Green Living Tips</h4>
                <p>Learn how to make eco-friendly choices and discover the latest in sustainable living.</p>
            </div>
            <div class="category-card orange">
                <h3>Cultural Insights</h3>
                <h4>Traditions & Stories</h4>
                <p>Dive into diverse cultures, traditions, and inspiring stories from around the world.</p>
            </div>
        </section>
        <!-- Featured Section -->
        <section class="featured-section">
            <h2>Featured</h2>
            <div class="featured-cards">
                <div class="featured-card">
                    <div class="bg-img" style="background-image:url('https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80');"></div>
                    <div class="overlay"></div>
                    <div class="featured-card-content">
                        <div class="date">August 7, 2017</div>
                        <h3>Top Hidden Gems: Must-Visit Spots This Year</h3>
                    </div>
                </div>
                <div class="featured-card">
                    <div class="bg-img" style="background-image:url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80');"></div>
                    <div class="overlay"></div>
                    <div class="featured-card-content">
                        <div class="date">January 12, 2024</div>
                        <h3>Eco-Friendly Habits for a Greener Tomorrow</h3>
                    </div>
                </div>
                <div class="featured-card">
                    <div class="bg-img" style="background-image:url('https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80');"></div>
                    <div class="overlay"></div>
                    <div class="featured-card-content">
                        <div class="date">March 22, 2025</div>
                        <h3>Nutrition Myths Busted: What Science Says</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Articles Section -->
        <section class="latest-section">
            <h2>Latest</h2>
            <div class="latest-cards">
                <div class="latest-card">
                    <div class="latest-card-img">
                        <i class="fas fa-apple-alt"></i>
                    </div>
                    <div class="latest-card-content">
                        <span class="category-tag green">Health & Nutrition</span>
                        <h4>5 Superfoods to Boost Your Immune System</h4>
                        <p>Discover the top foods that can help strengthen your body's natural defenses.</p>
                        <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="latest-card">
                    <div class="latest-card-img">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="latest-card-content">
                        <span class="category-tag blue">Sustainability</span>
                        <h4>How to Reduce Your Carbon Footprint at Home</h4>
                        <p>Simple changes you can make today to live a more eco-friendly lifestyle.</p>
                        <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="latest-card">
                    <div class="latest-card-img">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="latest-card-content">
                        <span class="category-tag orange">Cultural Insights</span>
                        <h4>Festivals Around the World: A Cultural Journey</h4>
                        <p>Experience the diversity of global celebrations and their unique traditions.</p>
                        <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
