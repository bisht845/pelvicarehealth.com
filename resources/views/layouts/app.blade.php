<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('meta_description')
    <meta name="description" content="@yield('meta_description')">
    @else
    <meta name="description" content="Pain during sex? Leaking urine after childbirth? Connect with verified womens health physiotherapists in Delhi NCR. Private, safe, judgment-free care.">
    @endif
    
    @hasSection('title')
    <title>@yield('title')</title>
    @else
    <title>Womens Health Physiotherapy India | Pain During Sex & Postpartum Care</title>
    @endif
    
    <!-- Schema Markup (JSON-LD) -->
    @php
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'MedicalWebPage',
            'name' => "Women's Health Physiotherapy Platform India",
            'specialty' => "Women's Health Physiotherapy",
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'India'
            ],
            'availableLanguage' => ['en', 'hi'],
            'description' => "Pain during sex? Leaking urine after childbirth? Connect with verified women's health physiotherapists in Delhi NCR. Private, safe, judgment-free care."
        ];
    @endphp
    <script type="application/ld+json">
    {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|playfair-display:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .heading-font {
            font-family: 'Playfair Display', serif;
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-white text-gray-900 antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-pink-400 to-pink-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xl font-bold heading-font text-gray-900">Pelvicare<sup class="text-xs text-red-600">®</sup></div>
                            <div class="text-xs text-gray-600">Women's Health Physiotherapy</div>
                        </div>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-pink-600 transition-colors font-medium {{ request()->routeIs('home') ? 'text-pink-600' : '' }}">Home</a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-pink-600 transition-colors font-medium {{ request()->routeIs('services') ? 'text-pink-600' : '' }}">Services</a>
                    <a href="{{ route('treatments') }}" class="text-gray-700 hover:text-pink-600 transition-colors font-medium {{ request()->routeIs('treatments') ? 'text-pink-600' : '' }}">Treatments</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-pink-600 transition-colors font-medium {{ request()->routeIs('about') ? 'text-pink-600' : '' }}">About</a>
                    <a href="{{ route('contact') }}" class="bg-gradient-to-r from-pink-500 to-pink-600 text-white px-6 py-2 rounded-full hover:from-pink-600 hover:to-pink-700 transition-all shadow-md hover:shadow-lg">Contact</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden text-gray-700 hover:text-pink-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 pt-2 pb-4 space-y-2">
                <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 rounded-lg {{ request()->routeIs('home') ? 'bg-pink-50 text-pink-600' : '' }}">Home</a>
                <a href="{{ route('services') }}" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 rounded-lg {{ request()->routeIs('services') ? 'bg-pink-50 text-pink-600' : '' }}">Services</a>
                <a href="{{ route('treatments') }}" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 rounded-lg {{ request()->routeIs('treatments') ? 'bg-pink-50 text-pink-600' : '' }}">Treatments</a>
                <a href="{{ route('about') }}" class="block px-4 py-2 text-gray-700 hover:bg-pink-50 rounded-lg {{ request()->routeIs('about') ? 'bg-pink-50 text-pink-600' : '' }}">About</a>
                <a href="{{ route('contact') }}" class="block px-4 py-2 bg-gradient-to-r from-pink-500 to-pink-600 text-white rounded-lg text-center">Contact</a>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 to-gray-800 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-pink-400 to-pink-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xl font-bold heading-font">Pelvicare<sup class="text-xs text-pink-400">®</sup></div>
                            <div class="text-xs text-gray-400">Women's Health Physiotherapy</div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm mb-4">Expert care for pelvic health conditions. Empowering women through specialized physiotherapy.</p>
                    <div class="text-gray-400 text-sm">
                        <p class="font-semibold mb-2">Locations:</p>
                        <p>Currently in <strong class="text-white">Delhi NCR, Mumbai, Bangalore, Pune</strong></p>
                        <p class="text-xs mt-2">(Pincode checker available)</p>
                    </div>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-4 heading-font text-white">For Women</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ route('services') }}#sexual" class="hover:text-pink-400 transition-colors">Pain During Sex</a></li>
                        <li><a href="{{ route('services') }}#postpartum" class="hover:text-pink-400 transition-colors">Postpartum Recovery</a></li>
                        <li><a href="{{ route('services') }}#pregnancy" class="hover:text-pink-400 transition-colors">Pregnancy Pain</a></li>
                        <li><a href="{{ route('services') }}#bladder" class="hover:text-pink-400 transition-colors">Bladder Issues</a></li>
                        <li><a href="{{ route('services') }}#pelvic" class="hover:text-pink-400 transition-colors">Pelvic Pain</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-4 heading-font text-white">Learn</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ route('home') }}#problems" class="hover:text-pink-400 transition-colors">Is This Normal?</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-pink-400 transition-colors">What to Expect</a></li>
                        <li><a href="{{ route('home') }}#testimonials" class="hover:text-pink-400 transition-colors">Success Stories</a></li>
                        <li><a href="#" class="hover:text-pink-400 transition-colors">Blog</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-4 heading-font text-white">Company</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ route('about') }}" class="hover:text-pink-400 transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-pink-400 transition-colors">Privacy & Safety</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-pink-400 transition-colors">Contact Us</a></li>
                        <li><a href="#" class="hover:text-pink-400 transition-colors">Partner Clinics</a></li>
                    </ul>
                    <div class="mt-6">
                        <h4 class="font-semibold mb-3 text-white text-sm">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors" aria-label="Instagram">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors" aria-label="Facebook">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                        </div>
                        <p class="text-xs text-gray-500 mt-2">For awareness, not selling</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} Pelvicare Women Health Physiotherapy. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>

