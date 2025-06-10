<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us | SaaS Company</title>
    @vite('resources/css/app.css')
</head>
<body class="text-gray-800 bg-white">

    {{-- Navigation Header (reuse from Home) --}}
    <header class="flex justify-between items-center p-6 shadow-md">
        <div class="text-xl font-bold">SaaSLogo</div>
        <nav class="space-x-6">
            <a href="/" class="hover:text-blue-600">Home</a>
            <a href="/about" class="text-blue-600 font-semibold">About</a>
            <a href="/services" class="hover:text-blue-600">Services</a>
            <a href="/portfolio" class="hover:text-blue-600">Portfolio</a>
            <a href="/blog" class="hover:text-blue-600">Blog</a>
            <a href="/contact" class="hover:text-blue-600">Contact</a>
        </nav>
    </header>

    {{-- Breadcrumbs --}}
    <div class="px-6 pt-4 text-sm text-gray-500">
        <a href="/" class="hover:underline">Home</a> > <span class="text-gray-700">About Us</span>
    </div>

    {{-- Page Title + Short Intro --}}
    <section class="text-center py-10 px-4 md:px-20">
        <h1 class="text-4xl font-bold mb-4">About Us</h1>
        <p class="text-lg text-gray-600">Empowering businesses by delivering innovative and scalable software solutions.</p>
    </section>

    {{-- Our Story / Background --}}
    <section class="bg-gray-100 py-10 px-6 md:px-20">
        <h2 class="text-2xl font-bold mb-4">Our Story</h2>
        <p class="text-gray-700 leading-relaxed">
            Founded in 2021, we help startups and enterprises build scalable software products. Our journey began with a passion for solving real-world business challenges through technology. From small prototypes to enterprise-level systems, we’ve grown with every challenge.
        </p>
    </section>

    {{-- Mission & Vision --}}
    <section class="py-10 px-6 md:px-20">
        <div class="grid md:grid-cols-2 gap-10">
            <div>
                <h2 class="text-xl font-bold mb-2">Our Mission</h2>
                <p class="text-gray-600">To develop powerful, user-centric digital solutions that drive success for our clients every day.</p>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-2">Our Vision</h2>
                <p class="text-gray-600">To be a global leader in custom software development, transforming businesses through innovation.</p>
            </div>
        </div>
    </section>

    {{-- What Makes Us Different --}}
    <section class="bg-gray-50 py-10 px-6 md:px-20">
        <h2 class="text-2xl font-bold mb-6">What Makes Us Different</h2>
        <ul class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 list-disc list-inside text-gray-700">
            <li>Client-first approach</li>
            <li>Proven track record</li>
            <li>Agile & Transparent process</li>
            <li>Full-cycle development</li>
            <li>Long-term partnerships</li>
            <li>Dedicated support & maintenance</li>
        </ul>
    </section>

    {{-- Meet the Team --}}
    <section class="py-10 px-6 md:px-20">
        <h2 class="text-2xl font-bold mb-6">Meet the Team</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
            <div>
                <img src="https://via.placeholder.com/150" class="mx-auto rounded-full mb-4" alt="Founder Photo">
                <h3 class="font-semibold">Raj Kumar</h3>
                <p class="text-sm text-gray-500">Founder & CEO</p>
                <p class="text-gray-600 text-sm mt-2">Tech visionary and leader focused on innovation and quality delivery.</p>
            </div>
            <!-- Add more team members as needed -->
        </div>
    </section>

    {{-- Achievements / Stats --}}
    <section class="bg-gray-100 py-10 px-6 md:px-20 text-center">
        <h2 class="text-2xl font-bold mb-6">Our Achievements</h2>
        <div class="grid sm:grid-cols-3 gap-6">
            <div>
                <p class="text-3xl font-bold text-blue-600">120+</p>
                <p class="text-gray-600">Projects Completed</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-blue-600">75+</p>
                <p class="text-gray-600">Happy Clients</p>
            </div>
            <div>
                <p class="text-3xl font-bold text-blue-600">10</p>
                <p class="text-gray-600">Countries Served</p>
            </div>
        </div>
    </section>

    {{-- Client Logos / Badges --}}
    <section class="py-10 px-6 md:px-20">
        <h2 class="text-2xl font-bold mb-6 text-center">Trusted By</h2>
        <div class="flex flex-wrap justify-center gap-8">
            <img src="https://via.placeholder.com/100x50" alt="Client Logo">
            <img src="https://via.placeholder.com/100x50" alt="Client Logo">
            <img src="https://via.placeholder.com/100x50" alt="Client Logo">
            <!-- Add more logos as needed -->
        </div>
    </section>

    {{-- Call to Action --}}
    <section class="bg-blue-600 text-white py-10 px-6 md:px-20 text-center">
        <h2 class="text-2xl font-bold mb-4">Let’s Build Something Amazing Together</h2>
        <a href="/contact" class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100">Contact Us</a>
    </section>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white py-6 px-6 md:px-20">
        <div class="flex flex-col md:flex-row justify-between items-center text-sm space-y-4 md:space-y-0">
            <div>&copy; 2025 SaaS Company. All rights reserved.</div>
            <div class="space-x-4">
                <a href="/privacy" class="hover:underline">Privacy Policy</a>
                <a href="/terms" class="hover:underline">Terms & Conditions</a>
            </div>
        </div>
    </footer>

</body>
</html>
