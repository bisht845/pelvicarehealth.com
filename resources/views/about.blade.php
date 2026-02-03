@extends('layouts.app')

@section('title', 'About - Pelvicare Women\'s Health Physiotherapy')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    .font-letter { font-family: 'Dancing Script', cursive; }
    .about-gradient-letter { background: linear-gradient(180deg, #f5f3ff 0%, #fce7f3 50%, #fdf2f8 100%); }
    .about-gradient-mission { background: linear-gradient(180deg, #ede9fe 0%, #fce7f3 100%); }
    .about-gradient-values { background: linear-gradient(180deg, #f5f3ff 0%, #fce7f3 100%); }
    .about-gradient-cta { background: linear-gradient(180deg, #db2777 0%, #be185d 50%, #9d174d 100%); }
    .about-floral-pattern { background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M40 20c0-4 3-8 8-8s8 4 8 8-3 8-8 8-8-4-8-8zm0 20c0-4 3-8 8-8s8 4 8 8-3 8-8 8-8-4-8-8z' fill='%23f9a8d4' fill-opacity='0.15'/%3E%3Cpath d='M20 40c-4 0-8-3-8-8s4-8 8-8 8 3 8 8-4 8-8 8z' fill='%23e9d5ff' fill-opacity='0.2'/%3E%3C/svg%3E"); }
    .about-card-shadow { box-shadow: 0 4px 20px rgba(147, 51, 234, 0.08), 0 2px 8px rgba(219, 39, 119, 0.06); }
    .about-icon-pink { background-color: #ec4899; }
    .about-icon-purple { background-color: #8b5cf6; }
    .about-icon-orange { background-color: #f97316; }
    .about-icon-green { background-color: #22c55e; }
</style>
@endpush

@section('content')
    {{-- ========== A Letter from the Founder ========== --}}
    <section class="relative py-12 sm:py-16 lg:py-24 overflow-hidden about-gradient-letter about-floral-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative bg-white/90 backdrop-blur-sm rounded-3xl border border-pink-100 about-card-shadow overflow-hidden" style="background: linear-gradient(180deg, #fefefe 0%, #fdf2f8 100%);">
                <h2 class="text-center text-3xl sm:text-4xl font-letter font-semibold text-gray-800 pt-10 sm:pt-12 pb-6">A Letter from the Founder</h2>

                <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-12 px-6 sm:px-8 lg:px-12 pb-12 sm:pb-16">
                    {{-- Left: Letter text --}}
                    <div class="lg:col-span-3 space-y-5 text-gray-800 text-sm sm:text-base leading-relaxed">
                        <p class="font-medium">Dear women,</p>
                        <p>Over 19+ years in practice in women's health physiotherapy, countless women felt vulnerable. Women who sat across from me, eyes brimming with tears, voices lowered, and hearts full of questions they felt too vulnerable to ask.</p>
                        <p class="italic text-gray-700">"No one believes me."</p>
                        <p class="italic text-gray-700">"I thought this was just part of being a woman,"</p>
                        <p class="italic text-gray-700">"I was told to just "adjust,""</p>
                        <p class="italic text-gray-700">"Am I the only one?"</p>
                        <p>No woman should ever have to live in pain, discomfort, shame, or confusion. I founded PelviCare to ensure women have a place where their pain is taken seriously and treated with care.</p>
                        <p>You are not alone. Your concerns are real, and healing is possible.</p>
                        <p>I hope you find PelviCare to be a space where you're treated with compassion, where your voice matters, and where you can expect care that is tailored to your unique journey – with respect, expertise, and kindness.</p>
                        <p>My team and I are dedicated to listening to you, without judgment, and customizing evidence-based care to fit your needs and wishes.</p>
                        <p>You deserve to understand your body, regain comfort and confidence, and trust that you are in good hands.</p>
                        <p class="text-right font-letter text-xl sm:text-2xl font-semibold text-gray-800 pt-2">Dr. Sunita Patel</p>
                    </div>

                    {{-- Right: Photo + Info card --}}
                    <div class="lg:col-span-2 flex flex-col items-center lg:items-end gap-6">
                        <div class="w-full max-w-xs sm:max-w-sm rounded-2xl overflow-hidden border-2 border-white shadow-lg shrink-0">
                            <img src="{{ asset('images/physiotherapist_1.png') }}" alt="Dr. Sunita Patel - Founder" class="w-full h-auto object-cover aspect-[3/4] object-top">
                        </div>
                        <div class="w-full max-w-xs sm:max-w-sm rounded-2xl border border-pink-100 p-5 sm:p-6 about-floral-pattern shrink-0" style="background: linear-gradient(135deg, #fdf2f8 0%, #fce7f3 100%);">
                            <h3 class="font-bold text-gray-800 text-lg sm:text-xl mb-1">Dr. Sunita Patel</h3>
                            <p class="text-gray-600 text-sm">Women's Health & Pelvic Floor</p>
                            <p class="text-gray-600 text-sm">Physiotherapist</p>
                            <p class="text-gray-600 text-sm font-medium mt-1">Founder of PelviCare</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== Our Mission ========== --}}
    <section class="relative py-12 sm:py-16 lg:py-24 overflow-hidden about-gradient-mission about-floral-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-2xl sm:text-3xl lg:text-4xl font-bold heading-font text-gray-800 mb-4">Our Mission</h2>
            <p class="text-center text-gray-700 text-base sm:text-lg max-w-3xl mx-auto mb-10 sm:mb-14">At PelviCare, our mission begins with a simple belief: <strong>women's pain is real,</strong> and it deserves to be heard.</p>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-16 items-start">
                {{-- Left: Mission text --}}
                <div class="lg:col-span-3 space-y-5 text-gray-700 text-sm sm:text-base leading-relaxed">
                    <p>For decades, women have been told that urine leakage is "normal," pain during intimacy is "in the mind," or that they must simply "adjust" after childbirth or menopause. Too many women live silently with discomfort, shame, or unanswered questions.</p>
                    <p class="font-bold text-gray-800">PelviCare exists to change that.</p>
                    <ul class="space-y-3 list-none pl-0">
                        <li class="flex items-start gap-3"><span class="shrink-0 w-5 h-5 text-pink-500 mt-0.5"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg></span><span>We listen to what women are experiencing</span></li>
                        <li class="flex items-start gap-3"><span class="shrink-0 w-5 h-5 text-pink-500 mt-0.5"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg></span><span>Every concern is taken seriously</span></li>
                        <li class="flex items-start gap-3"><span class="shrink-0 w-5 h-5 text-pink-500 mt-0.5"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg></span><span>Every care plan is personalised, not rushed</span></li>
                    </ul>
                    <p>Whether it is pelvic pain, bladder or bowel issues, sexual health concerns, pregnancy-related discomfort, <strong>postpartum recovery,</strong> or menopause changes, PelviCare ensures that women are guided with respect, evidence-based care, and compassion – never judgment.</p>
                </div>

                {{-- Right: Dr. Sunita Patel card --}}
                <div class="lg:col-span-2">
                    <div class="bg-pink-50/90 rounded-2xl border border-pink-100 about-card-shadow p-6 sm:p-8 about-floral-pattern overflow-hidden relative max-w-md mx-auto lg:mx-0">
                        <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">
                            <div class="shrink-0 w-32 h-32 sm:w-36 sm:h-36 rounded-2xl overflow-hidden border-2 border-white shadow-md">
                                <img src="{{ asset('images/physiotherapist_1.png') }}" alt="Dr. Sunita Patel" class="w-full h-full object-cover object-top">
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-xl sm:text-2xl">Dr. Sunita Patel</h3>
                                <p class="text-gray-600 text-sm sm:text-base mt-1">Women's Health & Pelvic Floor Physiotherapist</p>
                                <p class="text-gray-600 text-sm sm:text-base font-medium mt-2">19+ Years of Clinical Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-center italic text-gray-700 text-base sm:text-lg mt-10 sm:mt-14 max-w-2xl mx-auto">Because women deserve care that listens, understands, and truly helps.</p>
        </div>
    </section>

    {{-- ========== Our Core Values ========== --}}
    <section class="relative py-12 sm:py-16 lg:py-24 overflow-hidden about-gradient-values about-floral-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-2xl sm:text-3xl lg:text-4xl font-bold heading-font text-gray-800 mb-4">Our Core Values</h2>
            <p class="text-center text-gray-600 text-base sm:text-lg max-w-3xl mx-auto mb-10 sm:mb-14">At PelviCare, our mission to transform women's health care by making evidence-based pelvic health physiotherapy <strong class="text-gray-800">accessible</strong>, respectful, and personalised for every woman.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                <div class="bg-white rounded-2xl p-6 sm:p-8 about-card-shadow border border-gray-100">
                    <div class="w-14 h-14 rounded-xl about-icon-pink flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-3">Compassion</h3>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">We provide a safe, nonjudgmental environment where you can comfortably discuss sensitive pelvic health issues. Your feelings and experiences are honoured.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 sm:p-8 about-card-shadow border border-gray-100">
                    <div class="w-14 h-14 rounded-xl about-icon-purple flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-3">Excellence</h3>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">We stay updated with the latest research and techniques in pelvic health physiotherapy, ensuring you receive the most effective, evidence-based care.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 sm:p-8 about-card-shadow border border-gray-100">
                    <div class="w-14 h-14 rounded-xl about-icon-purple flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-3">Empowerment</h3>
                    <p class="text-gray-600 text-sm sm:text-base leading-relaxed">We empower women with the knowledge, tools, and confidence to actively participate in their healing and maintain their health.</p>
                </div>
            </div>

            <p class="text-center text-gray-600 text-base sm:text-lg mt-10 sm:mt-14 max-w-2xl mx-auto">Led by clinical expertise and compassion, we're here to bridge the gap between women's concerns and the care they deserve.</p>
        </div>
    </section>

    {{-- ========== How We Help You Heal ========== --}}
    <section class="relative py-12 sm:py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-2xl sm:text-3xl lg:text-4xl font-bold heading-font text-gray-800 mb-3">How We Help You Heal</h2>
            <p class="text-center text-gray-600 text-base sm:text-lg max-w-3xl mx-auto mb-4">Evidence-based women's health physiotherapy, personalised to your body, symptoms, and life stage.</p>
            <p class="text-center text-gray-600 text-sm sm:text-base max-w-3xl mx-auto mb-10 sm:mb-14">Our care focuses on understanding why your symptoms are happening and guiding you with safe, respectful, and effective treatment approaches.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                {{-- 1. Manual Therapy --}}
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-gray-100 about-card-shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl about-icon-pink flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 pt-1">Manual Therapy</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Hands-on techniques to relieve pelvic, back, and intimate pain by addressing muscle tension, scar restrictions, and joint stiffness.</p>
                    <ul class="space-y-2 text-gray-600 text-sm mb-3 list-none pl-0">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Soft tissue mobilisation</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Myofascial release</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Joint mobilisation</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Scar tissue mobilisation</li>
                    </ul>
                    <p class="text-gray-500 text-xs sm:text-sm">Commonly used for pelvic pain, painful intercourse, post-surgery recovery, back pain, and postpartum discomfort.</p>
                </div>

                {{-- 2. Pelvic Floor Exercises --}}
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-gray-100 about-card-shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-violet-400 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 pt-1">Pelvic Floor Exercises</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Personalised exercises to strengthen, relax, or coordinate pelvic floor muscles — based on your individual assessment.</p>
                    <ul class="space-y-2 text-gray-600 text-sm mb-3 list-none pl-0">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Kegel exercises (only when appropriate)</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Pelvic floor relaxation & down-training</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Biofeedback-guided exercises</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Progressive muscle strengthening</li>
                    </ul>
                    <p class="text-gray-500 text-xs sm:text-sm">Not all pelvic issues need strengthening — assessment always comes first.</p>
                </div>

                {{-- 3. Biofeedback Therapy --}}
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-gray-100 about-card-shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-violet-400 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 pt-1">Biofeedback Therapy</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Technology-assisted training to help you understand and improve pelvic floor muscle control using real-time visual or auditory feedback.</p>
                    <ul class="space-y-2 text-gray-600 text-sm mb-3 list-none pl-0">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Real-time muscle activity monitoring</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Visual feedback systems</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Muscle coordination & control training</li>
                    </ul>
                    <p class="text-gray-500 text-xs sm:text-sm">Helpful for urinary or bowel issues, pelvic floor dysfunction, and difficulty sensing muscles.</p>
                </div>

                {{-- 4. Education & Lifestyle Guidance --}}
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-gray-100 about-card-shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl about-icon-green flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 pt-1">Education & Lifestyle Guidance</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Empowering you with knowledge about your body so you can manage symptoms confidently in daily life.</p>
                    <ul class="space-y-2 text-gray-600 text-sm mb-3 list-none pl-0">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Bladder training</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Bowel management strategies</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Posture & ergonomic advice</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Daily activity and habit modifications</li>
                    </ul>
                    <p class="text-gray-500 text-xs sm:text-sm">Education is a key part of long-term recovery and prevention.</p>
                </div>

                {{-- 5. Core Strengthening & Stability --}}
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-gray-100 about-card-shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl about-icon-orange flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 pt-1">Core Strengthening & Stability</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Strengthening deep core muscles that support the pelvis and spine — essential during pregnancy, postpartum, and chronic pain recovery.</p>
                    <ul class="space-y-2 text-gray-600 text-sm mb-3 list-none pl-0">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Deep core muscle activation</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Postural retraining</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Functional movement patterns</li>
                    </ul>
                    <p class="text-gray-500 text-xs sm:text-sm">Commonly used for diastasis recti, back pain, pelvic instability, and postnatal recovery.</p>
                </div>

                {{-- 6. Pain Management --}}
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-gray-100 about-card-shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl about-icon-purple flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 pt-1">Pain Management</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Gentle, evidence-based approaches to reduce chronic pelvic, back, and intimate pain.</p>
                    <ul class="space-y-2 text-gray-600 text-sm list-none pl-0">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Relaxation techniques</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Breathing exercises</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Pain neuroscience education</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Nervous system calming strategies</li>
                    </ul>
                    <p class="text-gray-500 text-xs sm:text-sm mt-3">Especially helpful for chronic pelvic pain, endometriosis-related pain, and sexual pain.</p>
                </div>

                {{-- 7. Scar & Perineal Rehabilitation --}}
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-gray-100 about-card-shadow hover:shadow-lg transition-shadow">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-violet-300 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 pt-1">Scar & Perineal Rehabilitation</h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Specialised care for scars and perineal tissues after childbirth or surgery — an often overlooked but crucial part of recovery.</p>
                    <ul class="space-y-2 text-gray-600 text-sm list-none pl-0">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> C-section scar therapy</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Episiotomy & perineal scar care</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Scar desensitisation</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-pink-500 shrink-0"></span> Tissue mobility restoration</li>
                    </ul>
                    <p class="text-gray-500 text-xs sm:text-sm mt-3">Supports pain-free movement, pelvic health, and comfortable intimacy.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== Why Choose Pelvicare? ========== --}}
    <section class="relative py-12 sm:py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-2xl sm:text-3xl lg:text-4xl font-bold heading-font text-gray-800 mb-10 sm:mb-14">Why Choose Pelvicare?</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                <div class="bg-white rounded-2xl p-6 sm:p-8 about-card-shadow border border-gray-100">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div>
                            <div class="w-14 h-14 rounded-xl bg-pink-500 flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Specialised Expertise</h3>
                            <p class="text-gray-600 text-sm sm:text-base">Focused training and experience specifically in women's pelvic health physiotherapy.</p>
                        </div>
                        <div>
                            <div class="w-14 h-14 rounded-xl about-icon-purple flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Evidence-Based</h3>
                            <p class="text-gray-600 text-sm sm:text-base">Treatment approaches grounded in the latest research and clinical evidence.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-6 sm:p-8 about-card-shadow border border-gray-100">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div>
                            <div class="w-14 h-14 rounded-xl about-icon-orange flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Personalized Care</h3>
                            <p class="text-gray-600 text-sm sm:text-base">Each treatment plan is customized to your specific needs, goals, and lifestyle.</p>
                        </div>
                        <div>
                            <div class="w-14 h-14 rounded-xl about-icon-purple flex items-center justify-center mb-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Comprehensive Support</h3>
                            <p class="text-gray-600 text-sm sm:text-base">From initial assessment through treatment and follow-up, we're with you every step of the way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========== Ready to Start Your Journey? (CTA) ========== --}}
    <section class="relative py-14 sm:py-20 lg:py-24 overflow-hidden about-gradient-cta">
        <div class="absolute inset-0 about-floral-pattern opacity-30"></div>
        {{-- Floral corner accents --}}
        <div class="absolute bottom-0 left-0 w-48 h-48 sm:w-64 sm:h-64 opacity-25 pointer-events-none" aria-hidden="true">
            <svg viewBox="0 0 120 120" class="w-full h-full text-white/90" fill="currentColor"><circle cx="30" cy="90" r="8"/><circle cx="50" cy="75" r="10"/><circle cx="70" cy="85" r="7"/><circle cx="25" cy="70" r="6"/><path d="M20 95 Q30 85 45 88 Q35 75 25 80 Z" fill="rgba(255,255,255,0.3)"/></svg>
        </div>
        <div class="absolute bottom-0 right-0 w-48 h-48 sm:w-64 sm:h-64 opacity-25 pointer-events-none" aria-hidden="true">
            <svg viewBox="0 0 120 120" class="w-full h-full text-white/90" fill="currentColor"><circle cx="90" cy="90" r="8"/><circle cx="70" cy="75" r="10"/><circle cx="50" cy="85" r="7"/><circle cx="95" cy="70" r="6"/><path d="M100 95 Q90 85 75 88 Q85 75 95 80 Z" fill="rgba(255,255,255,0.3)"/></svg>
        </div>
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold heading-font text-white mb-4">Ready to Start Your Journey?</h2>
            <p class="text-white/95 text-base sm:text-lg mb-8 sm:mb-10">Contact us today to schedule a consultation and learn more about how we can help you.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-full font-semibold text-pink-600 bg-white hover:bg-gray-50 shadow-lg hover:shadow-xl transition-all duration-200">
                Get in Touch
            </a>
        </div>
    </section>
@endsection
