@extends('layouts.app')

@section('title')
Women's Health Physiotherapy India | Pain During Sex & Postpartum Care
@endsection

@section('meta_description')
Pain during sex? Leaking urine after childbirth? Connect with verified women's health physiotherapists in Delhi NCR. Private, safe, judgment-free care.
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-pink-50 via-white to-pink-100 overflow-hidden flex items-center" style="height: auto; min-height: 500px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center w-full py-8">
                <!-- Left Column - Text Content -->
            <div class="order-2 lg:order-1 flex flex-col justify-center">
                <div class="inline-block bg-pink-50 border border-pink-100 text-pink-700 px-4 py-1.5 rounded-full text-xs md:text-sm font-semibold mb-6 w-fit shadow-sm">
                    ✨ Trusted by 5,000+ Women Across India
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold heading-font text-gray-900 mb-6 leading-tight">
                    Your Body Deserves <br>
                    <span class="relative inline-block mt-2">
                        <span class="relative z-10 bg-pink-100 text-pink-600 px-4 py-1 rounded-lg shadow-md border border-pink-200">Expert Care</span>
                        <span class="absolute -bottom-2 -right-2 w-full h-full bg-pink-50 rounded-lg -z-0"></span>
                    </span>
                </h1>
                <p class="text-lg text-gray-700 mb-8 leading-relaxed max-w-lg">
                    Pain during sex? Leaking urine? Pelvic discomfort? You're not alone. Connect with verified women's health physiotherapists who understand your concerns.
                </p>
                
                <!-- Trust Signals - One Line with Icons -->
                <div class="flex items-center gap-6 md:gap-8 mb-8 flex-wrap">
                    <div class="flex items-center gap-3 group">
                        <div class="w-10 h-10 bg-white border border-pink-100 rounded-full flex items-center justify-center flex-shrink-0 shadow-sm group-hover:shadow-md transition-all text-pink-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-lg font-bold text-gray-900 leading-none">200+</div>
                            <div class="text-xs text-gray-500 font-medium mt-0.5">Specialists</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-3 group">
                        <div class="w-10 h-10 bg-white border border-pink-100 rounded-full flex items-center justify-center flex-shrink-0 shadow-sm group-hover:shadow-md transition-all text-pink-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-lg font-bold text-gray-900 leading-none">100%</div>
                            <div class="text-xs text-gray-500 font-medium mt-0.5">Women-Only</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-3 group">
                        <div class="w-10 h-10 bg-white border border-pink-100 rounded-full flex items-center justify-center flex-shrink-0 shadow-sm group-hover:shadow-md transition-all text-pink-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-lg font-bold text-gray-900 leading-none">24/7</div>
                            <div class="text-xs text-gray-500 font-medium mt-0.5">Available</div>
                        </div>
                    </div>
                </div>
                
                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row gap-4 mb-6">
                    <a href="{{ route('book-appointment') }}" class="flex items-center justify-center bg-pink-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-pink-700 transition-all shadow-lg hover:shadow-pink-200 hover:-translate-y-0.5 text-center text-base min-w-[200px]" style="background-color: #db2777;">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Book Consultation
                    </a>
                    <a href="#problems" class="flex items-center justify-center bg-white text-gray-700 px-8 py-4 rounded-xl font-bold hover:bg-gray-50 transition-all border border-gray-200 hover:border-pink-200 hover:text-pink-600 text-center text-base min-w-[160px]">
                        Learn More
                    </a>
                </div>
                
                <p class="text-xs text-gray-500 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                    Available in <strong>Delhi NCR, Mumbai, Bangalore, Pune</strong> • 💻 Online & In-Person
                </p>
            </div>
            
            <!-- Right Column - Image -->
            <div class="order-1 lg:order-2 flex items-center justify-center p-4 lg:p-8">
                <div class="relative w-full max-w-md mx-auto">
                    <div class="absolute inset-0 bg-gradient-to-tr from-pink-100 to-pink-50 rounded-[2rem] transform rotate-3 scale-105 -z-10"></div>
                    <img src="{{ asset('images/hero_woman_consultation.png') }}" alt="Women's Health Consultation" class="relative rounded-[1.5rem] shadow-2xl w-full h-auto object-cover border-4 border-white max-h-[500px]">
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Featured Physiotherapists Section -->
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-4">
                    Meet Our Expert Physiotherapists
                </h2>
                <p class="text-lg text-gray-600">Certified specialists dedicated to women's pelvic health</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Physiotherapist 1 -->
                <div class="bg-gradient-to-br from-pink-50 to-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-2 border border-pink-100">
                    <div class="relative mb-6">
                        <img src="{{ asset('images/physiotherapist_1.png') }}" alt="Dr. Priya Sharma" class="w-full h-84 object-cover rounded-xl">
                        <div class="absolute top-3 right-3 bg-white rounded-full px-3 py-1 text-xs font-semibold text-pink-600 shadow-md">
                            ⭐ 4.9/5
                        </div>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-2">Dr. Priya Sharma</h3>
                    <p class="text-sm text-pink-600 font-semibold mb-3">MPT in Women's Health</p>
                    <p class="text-sm text-gray-600 mb-4">8+ years experience in pelvic floor rehabilitation and postpartum care</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500">📍 Delhi NCR</span>
                        <a href="{{ route('book-appointment') }}" class="text-pink-600 hover:text-pink-700 font-semibold text-sm">Book Now →</a>
                    </div>
                </div>
                
                <!-- Physiotherapist 2 -->
                <div class="bg-gradient-to-br from-pink-50 to-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-2 border border-pink-100">
                    <div class="relative mb-6">
                        <img src="{{ asset('images/physiotherapist_2.png') }}" alt="Dr. Anjali Mehta" class="w-full h-84 object-cover rounded-xl">
                        <div class="absolute top-3 right-3 bg-white rounded-full px-3 py-1 text-xs font-semibold text-pink-600 shadow-md">
                            ⭐ 5.0/5
                        </div>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-2">Dr. Anjali Mehta</h3>
                    <p class="text-sm text-pink-600 font-semibold mb-3">Pelvic Health Specialist</p>
                    <p class="text-sm text-gray-600 mb-4">10+ years treating sexual pain and pelvic dysfunction</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500">📍 Mumbai</span>
                        <a href="{{ route('book-appointment') }}" class="text-pink-600 hover:text-pink-700 font-semibold text-sm">Book Now →</a>
                    </div>
                </div>
                
                <!-- Physiotherapist 3 -->
                <div class="bg-gradient-to-br from-pink-50 to-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-2 border border-pink-100">
                    <div class="relative mb-6">
                        <img src="{{ asset('images/physiotherapist_3.png') }}" alt="Dr. Kavita Reddy" class="w-full h-84 object-cover rounded-xl">
                        <div class="absolute top-3 right-3 bg-white rounded-full px-3 py-1 text-xs font-semibold text-pink-600 shadow-md">
                            ⭐ 4.8/5
                        </div>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-2">Dr. Kavita Reddy</h3>
                    <p class="text-sm text-pink-600 font-semibold mb-3">Prenatal & Postnatal Expert</p>
                    <p class="text-sm text-gray-600 mb-4">12+ years in pregnancy care and postpartum recovery</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500">📍 Bangalore</span>
                        <a href="{{ route('book-appointment') }}" class="text-pink-600 hover:text-pink-700 font-semibold text-sm">Book Now →</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <a href="{{ route('book-appointment') }}" class="inline-block bg-gradient-to-r from-pink-400 to-pink-500 text-white px-8 py-3 rounded-full font-semibold hover:from-pink-500 hover:to-pink-600 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    View All Specialists
                </a>
            </div>
        </div>
    </section>

    <!-- Problem Discovery Section -->
    <section id="problems" class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-4">
                    Search Your Symptoms – Get Real Answers
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1: Pain During Sex -->
                <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-2xl p-6 hover:shadow-xl transition-all transform hover:-translate-y-2 border border-pink-200">
                    <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-3">
                        "Why does sex hurt even when I want it?"
                    </h3>
                    <ul class="text-gray-700 space-y-2 mb-4 text-sm">
                        <li>• 33% of Indian women experience painful intercourse</li>
                        <li>• Most cases are treatable with physiotherapy</li>
                    </ul>
                    <a href="{{ route('services') }}" class="text-pink-600 font-semibold hover:text-pink-700 inline-flex items-center">
                        Learn More →
                    </a>
                </div>
                
                <!-- Card 2: Pain After Childbirth -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 hover:shadow-xl transition-all transform hover:-translate-y-2 border border-blue-200">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-3">
                        "Is pain months after delivery normal?"
                    </h3>
                    <ul class="text-gray-700 space-y-2 mb-4 text-sm">
                        <li>• Pain after episiotomy, C-section, or vaginal delivery</li>
                        <li>• You don't have to live with this</li>
                    </ul>
                    <a href="{{ route('services') }}" class="text-blue-600 font-semibold hover:text-blue-700 inline-flex items-center">
                        Learn More →
                    </a>
                </div>
                
                <!-- Card 3: Leaking Urine -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 hover:shadow-xl transition-all transform hover:-translate-y-2 border border-purple-200">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-3">
                        "Why do I leak urine when I laugh or sneeze?"
                    </h3>
                    <ul class="text-gray-700 space-y-2 mb-4 text-sm">
                        <li>• 45% of postpartum women experience this</li>
                        <li>• Pelvic floor physiotherapy helps 8 out of 10 women</li>
                    </ul>
                    <a href="{{ route('services') }}" class="text-purple-600 font-semibold hover:text-purple-700 inline-flex items-center">
                        Learn More →
                    </a>
                </div>
                
                <!-- Card 4: Pelvic Pain -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-2xl p-6 hover:shadow-xl transition-all transform hover:-translate-y-2 border border-red-200">
                    <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-3">
                        "Pelvic pain but all tests are normal?"
                    </h3>
                    <ul class="text-gray-700 space-y-2 mb-4 text-sm">
                        <li>• When doctors can't explain your pain</li>
                        <li>• Women's health physios specialize in chronic pelvic pain</li>
                    </ul>
                    <a href="{{ route('services') }}" class="text-red-600 font-semibold hover:text-red-700 inline-flex items-center">
                        Learn More →
                    </a>
                </div>
                
                <!-- Card 5: Pregnancy Pain -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 hover:shadow-xl transition-all transform hover:-translate-y-2 border border-green-200">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-3">
                        "Severe back or pelvic pain during pregnancy?"
                    </h3>
                    <ul class="text-gray-700 space-y-2 mb-4 text-sm">
                        <li>• Pregnancy-safe physiotherapy options</li>
                        <li>• Relief without medication</li>
                    </ul>
                    <a href="{{ route('services') }}" class="text-green-600 font-semibold hover:text-green-700 inline-flex items-center">
                        Learn More →
                    </a>
                </div>
                
                <!-- Card 6: Something Feels Wrong -->
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl p-6 hover:shadow-xl transition-all transform hover:-translate-y-2 border border-indigo-200">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-3">
                        "I can't explain it, but something feels off"
                    </h3>
                    <ul class="text-gray-700 space-y-2 mb-4 text-sm">
                        <li>• You don't need a diagnosis to ask for help</li>
                        <li>• Start with a private conversation</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="text-indigo-600 font-semibold hover:text-indigo-700 inline-flex items-center">
                        Talk to Someone →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Validation Section -->
    <section class="py-8 bg-gradient-to-br from-pink-50 to-blue-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-6">
                "Doctors Said Everything Is Normal. So Why Does It Still Hurt?"
            </h2>
            <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                If you've heard: <em>"Just relax,"</em> <em>"It's stress,"</em> <em>"Give it more time,"</em> or <em>"This is normal after childbirth"</em>... but the pain continues, <strong>you're not imagining it.</strong>
            </p>
            
            <div class="bg-white rounded-2xl p-8 shadow-lg mb-8 text-left">
                <h3 class="font-bold text-gray-900 mb-4 text-lg">Supporting Research:</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-pink-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Studies show <strong>82% of Indian women</strong> experience sexual dysfunction, yet <strong>64% can't talk about it</strong> with partners.</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-pink-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Research from India found <strong>painful intercourse affects 33% of women</strong>, yet <strong>88.9% of doctors rarely see these issues</strong> because it is underreported.</span>
                    </li>
                </ul>
            </div>
            
            <a href="{{ route('contact') }}" class="inline-block bg-gradient-to-r from-pink-500 to-pink-600 text-white px-8 py-4 rounded-full font-semibold hover:from-pink-600 hover:to-pink-700 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 text-lg">
                Talk to a Women's Health Specialist →
            </a>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-4">
                    Private Care Without Judgment – Here's How
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-3xl font-bold">
                        1
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-4">
                        Choose What Feels Right
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Read about your symptoms privately. No login required. Take your time.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-3xl font-bold">
                        2
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-4">
                        Talk to a Specialist
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Connect with women-only physiotherapists specializing in pelvic pain, sexual pain, and postpartum recovery. Available via online video consult or clinic/home visit.
                    </p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-3xl font-bold">
                        3
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-4">
                        Get a Personalized Plan
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Gentle, respectful care designed for women's bodies. No embarrassment. No rushing.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof Section -->
    <section id="testimonials" class="py-8 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-4">
                    You're in Safe Company
                </h2>
            </div>
            
            <!-- Stats Bar -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white rounded-xl p-6 text-center shadow-md">
                    <div class="text-4xl font-bold text-pink-600 mb-2">5,247</div>
                    <div class="text-gray-700">women found answers here</div>
                </div>
                <div class="bg-white rounded-xl p-6 text-center shadow-md">
                    <div class="text-4xl font-bold text-pink-600 mb-2">200+</div>
                    <div class="text-gray-700">verified women's health specialists</div>
                </div>
                <div class="bg-white rounded-xl p-6 text-center shadow-md">
                    <div class="text-4xl font-bold text-pink-600 mb-2">3</div>
                    <div class="text-gray-700">Cities: Delhi NCR | Mumbai | Bangalore</div>
                </div>
            </div>
            
            <!-- Testimonials -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.996 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4 italic leading-relaxed">
                        "I suffered for 2 years after my C-section... Within 6 weeks of physiotherapy, the pain reduced by 70%."
                    </p>
                    <p class="text-sm text-gray-600">– Anonymous, Delhi (Age 31)</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.996 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4 italic leading-relaxed">
                        "I couldn't talk to anyone about pain during sex. This platform made it easy to ask questions anonymously first."
                    </p>
                    <p class="text-sm text-gray-600">– Anonymous, Bangalore (Age 28)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Treat Section -->
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-4">
                    Conditions Women Search For... But Rarely Talk About
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-xl p-6 border border-pink-200">
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">Sexual Health</h3>
                    <ul class="text-sm text-gray-700 space-y-2">
                        <li>• Pain during sex (dyspareunia)</li>
                        <li>• Painful penetration</li>
                        <li>• Pain after sex</li>
                        <li>• Fear of intimacy after childbirth</li>
                        <li>• Tight pelvic floor muscles</li>
                    </ul>
                </div>
                
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border border-blue-200">
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">Postpartum Issues</h3>
                    <ul class="text-sm text-gray-700 space-y-2">
                        <li>• Pain after episiotomy</li>
                        <li>• C-section scar pain</li>
                        <li>• Urine leakage after delivery</li>
                        <li>• Core weakness (diastasis recti)</li>
                        <li>• Pain during first sex after delivery</li>
                    </ul>
                </div>
                
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border border-purple-200">
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">Pelvic & Bladder</h3>
                    <ul class="text-sm text-gray-700 space-y-2">
                        <li>• Chronic pelvic pain</li>
                        <li>• Stress urinary incontinence</li>
                        <li>• Frequent urge to pee</li>
                        <li>• Pelvic organ prolapse symptoms</li>
                    </ul>
                </div>
                
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200">
                    <h3 class="font-bold text-gray-900 mb-3 text-lg">Pregnancy-Related</h3>
                    <ul class="text-sm text-gray-700 space-y-2">
                        <li>• Pelvic girdle pain</li>
                        <li>• Sciatica during pregnancy</li>
                        <li>• Pubic bone pain</li>
                        <li>• Back pain during pregnancy</li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('treatments') }}" class="inline-block text-pink-600 font-semibold hover:text-pink-700 transition-colors text-lg">
                    → Full list of conditions we treat
                </a>
            </div>
        </div>
    </section>

    <!-- Who You'll Meet Section -->
    <section class="py-8 bg-gradient-to-br from-pink-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-4">
                    Women's Health Specialists Who Understand
                </h2>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-8 shadow-lg mb-8">
                    <h3 class="font-bold text-gray-900 mb-6 text-xl">Specialist Standards:</h3>
                    <ul class="space-y-4 text-gray-700">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-pink-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span><strong>Female-only</strong> (no male physios)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-pink-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span><strong>Certified</strong> in women's health physiotherapy (APTA Pelvic Health or Postgraduate training)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-pink-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span><strong>3+ years</strong> treating women-specific conditions</span>
                        </li>
                    </ul>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <h4 class="font-bold text-gray-900 mb-3">Expertise In:</h4>
                        <p class="text-gray-700">Sexual pain, bladder issues, postpartum recovery, and pelvic floor dysfunction.</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <h4 class="font-bold text-gray-900 mb-3">Availability:</h4>
                        <p class="text-gray-700">Online video consultation, in-clinic appointments, and home visits (select cities).</p>
                    </div>
                </div>
                
                <div class="text-center">
                    <a href="{{ route('about') }}" class="inline-block bg-gradient-to-r from-pink-500 to-pink-600 text-white px-8 py-4 rounded-full font-semibold hover:from-pink-600 hover:to-pink-700 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Browse Specialists →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Questions Section -->
    <section class="py-8 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-4">
                    The Questions You've Been Googling
                </h2>
                <p class="text-xl text-gray-600">Written like a friend explaining, not a doctor.</p>
            </div>
            
            <div class="space-y-4">
                @php
                    $questions = array(
                        'Why does sex hurt even when I want it?',
                        'Is pain during sex normal?',
                        'Why do I leak urine when I laugh?',
                        'Is pain after childbirth normal or should I see someone?',
                        'Pelvic pain but all reports are normal what\'s wrong?',
                        'Why does my body tense up during sex?',
                        'Can physiotherapy really help with sexual pain?',
                        'What happens in a women\'s health physio session?',
                        'Is it normal to fear sex after childbirth?',
                        'When should I worry about pelvic pain during pregnancy?'
                    );
                @endphp
                
                @foreach($questions as $index => $question)
                <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl p-6 hover:shadow-md transition-all border border-gray-200">
                    <div class="flex items-start">
                        <span class="text-pink-600 font-bold mr-4 text-lg">{{ $index + 1 }}.</span>
                        <a href="{{ route('contact') }}" class="text-gray-900 hover:text-pink-600 font-medium text-lg flex-1">
                            {{ $question }}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('contact') }}" class="inline-block text-pink-600 font-semibold hover:text-pink-700 transition-colors text-lg">
                    → See all answered questions
                </a>
            </div>
        </div>
    </section>

    <!-- Privacy Promise Section -->
    <section class="py-8 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-8">
                Your Privacy Is Non-Negotiable
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <svg class="w-12 h-12 text-pink-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <h3 class="font-bold text-gray-900 mb-2">Optional anonymity</h3>
                    <p class="text-gray-700 text-sm">Use a pseudonym</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <svg class="w-12 h-12 text-pink-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <h3 class="font-bold text-gray-900 mb-2">Discreet appointments</h3>
                    <p class="text-gray-700 text-sm">Labeled as "Wellness Consultation"</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <svg class="w-12 h-12 text-pink-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                    <h3 class="font-bold text-gray-900 mb-2">Secure & encrypted</h3>
                    <p class="text-gray-700 text-sm">No data selling</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <svg class="w-12 h-12 text-pink-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <h3 class="font-bold text-gray-900 mb-2">Judgment-free zone</h3>
                    <p class="text-gray-700 text-sm">Nothing is "too embarrassing"</p>
                </div>
            </div>
            
            <a href="#" class="inline-block text-pink-600 font-semibold hover:text-pink-700 transition-colors">
                Read our full privacy policy →
            </a>
        </div>
    </section>

    <!-- Final Conversion Push -->
    <section class="py-8 bg-gradient-to-r from-pink-500 to-pink-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold heading-font text-white mb-6">
                If You've Been Carrying This Silently - Put It Down Here
            </h2>
            <p class="text-xl text-pink-100 mb-10 leading-relaxed">
                You don't have to explain perfectly, be brave, or know what's wrong—you just have to be tired of the pain.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-pink-600 px-8 py-4 rounded-full font-semibold hover:bg-pink-50 transition-all shadow-xl hover:shadow-2xl transform hover:-translate-y-1 text-lg">
                    Find a Specialist Now →
                </a>
                <a href="#problems" class="bg-pink-400/20 text-white px-8 py-4 rounded-full font-semibold hover:bg-pink-400/30 transition-all border-2 border-white/50 text-lg">
                    Read About Common Issues First →
                </a>
                <a href="{{ route('contact') }}" class="bg-pink-400/20 text-white px-8 py-4 rounded-full font-semibold hover:bg-pink-400/30 transition-all border-2 border-white/50 text-lg">
                    Ask a Question Anonymously →
                </a>
            </div>
        </div>
    </section>
@endsection
