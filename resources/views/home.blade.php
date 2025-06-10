<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SaaS Company | Home</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-900">

    {{-- 1. Header --}}
    <header class="flex justify-between items-center p-6 shadow-md">
        <div class="text-xl font-bold">SaaSLogo</div>
        <nav class="space-x-6">
            <a href="/" class="hover:text-blue-600">Home</a>
            <a href="/about" class="hover:text-blue-600">About</a>
            <a href="/services" class="hover:text-blue-600">Services</a>
            <a href="/portfolio" class="hover:text-blue-600">Portfolio</a>
            <a href="/blog" class="hover:text-blue-600">Blog</a>
            <a href="/contact" class="hover:text-blue-600">Contact</a>
        </nav>
    </header>

    {{-- Continue all other sections (slider, services, etc.) here as shared earlier --}}
    <section class="text-center p-20">
        <h1 class="text-4xl font-bold mb-4">Welcome to Our SaaS Company</h1>
        <p class="text-lg text-gray-600 mb-6">We build powerful software for modern businesses.</p>
        <a href="/services" class="bg-blue-600 text-white px-6 py-3 rounded">Explore Services</a>
    </section>


     {{-- 2. Image Slider --}}
<section class="mt-6">
    <div class="w-full overflow-hidden">
        <div class="w-[300%] flex animate-slide">
            <div class="w-[100%] h-96 bg-cover bg-center text-white flex items-center justify-center" style="background-image: url('/images/slide1.jpg');">
                <div class="text-center">
                    <h2 class="text-3xl font-bold mb-2">Build Smarter Software</h2>
                    <p class="mb-4">Custom SaaS development at speed</p>
                    <a href="/services" class="bg-blue-600 px-4 py-2 rounded text-white">Explore Services</a>
                </div>
            </div>
            {{-- Add more slides similarly --}}
        </div>
    </div>
</section>

{{-- 3. Services Snapshot --}}
<section class="p-8">
    <h2 class="text-2xl font-semibold mb-4 text-center">Our Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="border p-4 rounded shadow">Web Development</div>
        <div class="border p-4 rounded shadow">Mobile App Development</div>
        <div class="border p-4 rounded shadow">Cloud Integration</div>
    </div>
</section>

{{-- 4. Why Choose Us --}}
<section class="p-8 bg-gray-100">
    <h2 class="text-2xl font-semibold mb-4 text-center">Why Choose Us?</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
        <div>🏆 Experience</div>
        <div>⚡ Fast Delivery</div>
        <div>😊 Client Satisfaction</div>
        <div>🔧 Custom Solutions</div>
    </div>
</section>

{{-- 5. Portfolio Preview --}}
<section class="p-8">
    <h2 class="text-2xl font-semibold mb-4 text-center">Recent Projects</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-gray-200 h-40"></div>
        <div class="bg-gray-200 h-40"></div>
        <div class="bg-gray-200 h-40"></div>
    </div>
    <div class="text-center mt-4">
        <a href="/portfolio" class="text-blue-600">See All Projects →</a>
    </div>
</section>

{{-- 6. Testimonials --}}
<section class="p-8 bg-gray-100">
    <h2 class="text-2xl font-semibold mb-4 text-center">Testimonials</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>"Great team!" - John, CEO of ABC</div>
        <div>"Fast and reliable!" - Sarah, Founder of XYZ</div>
    </div>
</section>

{{-- 7. Tech Stack --}}
<section class="p-8">
    <h2 class="text-2xl font-semibold mb-4 text-center">Our Tech Stack</h2>
    <div class="flex justify-center gap-6 text-2xl">
        <span>Laravel</span>
        <span>React</span>
        <span>PHP</span>
        <span>Node.js</span>
    </div>
</section>

{{-- 8. Blog Snippets --}}
<section class="p-8 bg-gray-100">
    <h2 class="text-2xl font-semibold mb-4 text-center">Latest Blogs</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="border p-4">How to scale your SaaS</div>
        <div class="border p-4">Laravel Tips for Startups</div>
        <div class="border p-4">Why React Rocks</div>
    </div>
</section>

{{-- 9. CTA --}}
<section class="p-8 text-center">
    <h2 class="text-2xl mb-4">Ready to build your software with us?</h2>
    <a href="/contact" class="bg-blue-600 px-6 py-3 rounded text-white">Contact Now</a>
</section>

{{-- 10. Footer --}}
<footer class="bg-gray-900 text-white p-6 text-center">
    <div class="mb-4">
        <a href="/about" class="mx-2">About</a>
        <a href="/services" class="mx-2">Services</a>
        <a href="/portfolio" class="mx-2">Portfolio</a>
        <a href="/blog" class="mx-2">Blog</a>
        <a href="/contact" class="mx-2">Contact</a>
    </div>
    <div class="text-sm">📍 Address | ✉️ email@example.com | ☎️ +91-0000000000</div>
    <div class="mt-2 text-xs">© 2025 | Privacy Policy | Terms</div>
</footer>


</body>
</html>
