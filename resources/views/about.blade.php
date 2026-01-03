@extends('layouts.app')

@section('title', 'About - Pelvicare Women\'s Health Physiotherapy')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-br from-pink-50 via-blue-50 to-pink-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold heading-font text-gray-900 text-center mb-4">
                About Pelvicare
            </h1>
            <p class="text-xl text-gray-700 text-center max-w-3xl mx-auto">
                Dedicated to empowering women through specialized pelvic health care
            </p>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-6">
                        Our Mission
                    </h2>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        At Pelvicare, we are committed to providing compassionate, evidence-based pelvic health physiotherapy 
                        services that empower women to live their lives to the fullest. We understand that pelvic health issues 
                        can be sensitive and deeply personal, which is why we create a safe, supportive environment for every patient.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        Our approach combines the latest research in pelvic health with personalized care, ensuring that each 
                        treatment plan is tailored to meet your unique needs and goals. We believe in treating the whole person, 
                        not just the symptoms.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Whether you're dealing with pelvic pain, incontinence, pregnancy-related issues, or other pelvic health 
                        concerns, we're here to support you on your journey to better health and wellness.
                    </p>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-pink-200 to-blue-200 rounded-3xl p-8 shadow-2xl">
                        <div class="bg-white rounded-2xl p-8 shadow-xl">
                            <div class="text-center">
                                <div class="w-32 h-32 bg-gradient-to-br from-pink-400 to-pink-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold heading-font text-gray-900 mb-2">Dr. Sunita Patel, PT</h3>
                                <p class="text-gray-600 mb-4">Physiotherapist</p>
                                <p class="text-gray-700 leading-relaxed">
                                    With years of specialized training and experience in women's health physiotherapy, 
                                    Dr. Sunita Patel brings expertise, compassion, and dedication to every patient interaction.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-4">
                    Our Core Values
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-4">Compassion</h3>
                    <p class="text-gray-700 leading-relaxed">
                        We understand that pelvic health issues can be sensitive. We provide a safe, non-judgmental 
                        environment where you can feel comfortable discussing your concerns.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-4">Excellence</h3>
                    <p class="text-gray-700 leading-relaxed">
                        We stay current with the latest research and treatment techniques in pelvic health physiotherapy, 
                        ensuring you receive the most effective care available.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold heading-font text-gray-900 mb-4">Empowerment</h3>
                    <p class="text-gray-700 leading-relaxed">
                        We believe in empowering our patients with knowledge and tools to take control of their health, 
                        both during treatment and in their daily lives.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold heading-font text-gray-900 mb-4">
                    Why Choose Pelvicare?
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold heading-font text-gray-900 mb-2">Specialized Expertise</h3>
                        <p class="text-gray-700">
                            Focused training and experience specifically in women's pelvic health physiotherapy.
                        </p>
                    </div>
                </div>
                
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold heading-font text-gray-900 mb-2">Personalized Care</h3>
                        <p class="text-gray-700">
                            Each treatment plan is customized to your specific needs, goals, and lifestyle.
                        </p>
                    </div>
                </div>
                
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold heading-font text-gray-900 mb-2">Evidence-Based</h3>
                        <p class="text-gray-700">
                            Treatment approaches grounded in the latest research and clinical evidence.
                        </p>
                    </div>
                </div>
                
                <div class="flex gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold heading-font text-gray-900 mb-2">Comprehensive Support</h3>
                        <p class="text-gray-700">
                            From initial assessment through treatment and follow-up, we're with you every step of the way.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-pink-500 to-pink-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold heading-font text-white mb-6">
                Ready to Start Your Journey?
            </h2>
            <p class="text-xl text-pink-100 mb-8">
                Contact us today to schedule a consultation and learn more about how we can help you.
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-pink-600 px-8 py-4 rounded-full font-semibold hover:bg-pink-50 transition-all shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                Get in Touch
            </a>
        </div>
    </section>
@endsection

