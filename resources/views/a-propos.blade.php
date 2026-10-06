@extends('layouts.app')

@section('title', 'À propos - ARTI CALL')

@section('meta_description',
    'Découvrez ARTI CALL, centre d’appel basé à Fès, spécialisé dans la relation client, la
    téléprospection et le développement commercial.')

@section('content')

    {{-- =========================================================
    HERO
    ========================================================== --}}

    @push('styles')
        <style>
            /* =========================================================
                        HERO - MÊME ANIMATION QUE SERVICES / SECTEURS
                    ========================================================== */

            .arti-about-hero-bg {
                position: absolute;
                inset: 0;
                overflow: hidden;
                background-image: url('/images/call-center-bg.jpg');
                background-size: cover;
                background-position: center;
                animation: about-hero-bg-zoom 18s ease-in-out infinite alternate;
                will-change: transform;
            }

            .arti-about-hero-bg::after {
                content: "";
                position: absolute;
                inset: 0;
                background:
                    linear-gradient(90deg,
                        rgba(2, 6, 23, 0.94) 0%,
                        rgba(2, 6, 23, 0.78) 45%,
                        rgba(2, 6, 23, 0.55) 100%);
            }

            /* =========================================================
                        SMOKE / FOG
                    ========================================================== */

            .arti-about-hero-smoke {
                position: absolute;
                border-radius: 9999px;
                pointer-events: none;
                filter: blur(80px);
                will-change: transform, opacity;
            }

            .arti-about-hero-smoke-1 {
                width: 420px;
                height: 180px;
                left: -120px;
                top: 18%;
                background: rgba(255, 255, 255, 0.12);
                opacity: 0.25;
                animation: about-hero-smoke-1 14s ease-in-out infinite alternate;
            }

            .arti-about-hero-smoke-2 {
                width: 500px;
                height: 220px;
                right: -170px;
                bottom: 5%;
                background: rgba(220, 38, 38, 0.20);
                opacity: 0.35;
                animation: about-hero-smoke-2 17s ease-in-out infinite alternate;
            }

            .arti-about-hero-smoke-3 {
                width: 350px;
                height: 160px;
                left: 35%;
                top: -100px;
                background: rgba(255, 255, 255, 0.10);
                opacity: 0.18;
                animation: about-hero-smoke-3 20s ease-in-out infinite alternate;
            }

            /* =========================================================
                        RED GLOW
                    ========================================================== */

            .arti-about-hero-glow {
                position: absolute;
                width: 430px;
                height: 430px;
                border-radius: 9999px;
                background: rgba(220, 38, 38, 0.16);
                filter: blur(90px);
                pointer-events: none;
                animation: about-hero-glow 7s ease-in-out infinite;
            }

            .arti-about-hero-glow-right {
                right: -160px;
                top: -150px;
            }

            .arti-about-hero-glow-left {
                left: -180px;
                bottom: -180px;
                width: 350px;
                height: 350px;
                background: rgba(220, 38, 38, 0.09);
                animation-delay: 2s;
            }

            /* =========================================================
                        FLOATING PARTICLES
                    ========================================================== */

            .arti-about-hero-particle {
                position: absolute;
                width: 4px;
                height: 4px;
                border-radius: 9999px;
                background: rgba(248, 113, 113, 0.65);
                box-shadow: 0 0 14px rgba(239, 68, 68, 0.50);
                pointer-events: none;
                animation: about-hero-particle linear infinite;
            }

            .arti-about-hero-particle.p1 {
                left: 8%;
                top: 35%;
                animation-duration: 9s;
                animation-delay: -2s;
            }

            .arti-about-hero-particle.p2 {
                left: 20%;
                top: 70%;
                width: 3px;
                height: 3px;
                animation-duration: 12s;
                animation-delay: -6s;
            }

            .arti-about-hero-particle.p3 {
                left: 42%;
                top: 22%;
                animation-duration: 10s;
                animation-delay: -4s;
            }

            .arti-about-hero-particle.p4 {
                left: 65%;
                top: 72%;
                width: 3px;
                height: 3px;
                animation-duration: 13s;
                animation-delay: -8s;
            }

            .arti-about-hero-particle.p5 {
                left: 79%;
                top: 32%;
                animation-duration: 11s;
                animation-delay: -3s;
            }

            .arti-about-hero-particle.p6 {
                left: 91%;
                top: 62%;
                width: 3px;
                height: 3px;
                animation-duration: 14s;
                animation-delay: -7s;
            }

            /* =========================================================
                        HERO CONTENT ENTRANCE
                    ========================================================== */

            .arti-about-hero-content {
                animation:
                    about-hero-left-in 1s cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            .arti-about-hero-badge {
                animation:
                    about-hero-badge-in 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.10s both;
            }

            .arti-about-hero-title {
                animation:
                    about-hero-title-in 1s cubic-bezier(0.22, 1, 0.36, 1) 0.20s both;
            }

            .arti-about-hero-description {
                animation:
                    about-hero-description-in 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.38s both;
            }

            .arti-about-hero-buttons {
                animation:
                    about-hero-description-in 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.52s both;
            }

            /* =========================================================
                        BUTTON SHINE
                    ========================================================== */

            .arti-about-hero-main-btn {
                position: relative;
                overflow: hidden;
            }

            .arti-about-hero-main-btn::before {
                content: "";
                position: absolute;
                top: 0;
                left: -120%;
                width: 70%;
                height: 100%;
                background: linear-gradient(90deg,
                        transparent,
                        rgba(255, 255, 255, 0.20),
                        transparent);
                transform: skewX(-20deg);
                transition: left 0.7s ease;
            }

            .arti-about-hero-main-btn:hover::before {
                left: 150%;
            }

            /* =========================================================
                        KEYFRAMES
                    ========================================================== */

            @keyframes about-hero-bg-zoom {
                0% {
                    transform: scale(1);
                }

                100% {
                    transform: scale(1.06);
                }
            }

            @keyframes about-hero-smoke-1 {
                0% {
                    transform: translate3d(-20px, 20px, 0) scale(1);
                    opacity: 0.16;
                }

                50% {
                    opacity: 0.28;
                }

                100% {
                    transform: translate3d(180px, -40px, 0) scale(1.25);
                    opacity: 0.10;
                }
            }

            @keyframes about-hero-smoke-2 {
                0% {
                    transform: translate3d(30px, 30px, 0) scale(1);
                    opacity: 0.20;
                }

                100% {
                    transform: translate3d(-180px, -80px, 0) scale(1.30);
                    opacity: 0.38;
                }
            }

            @keyframes about-hero-smoke-3 {
                0% {
                    transform: translate3d(-100px, 40px, 0) scale(0.90);
                    opacity: 0.08;
                }

                100% {
                    transform: translate3d(180px, 120px, 0) scale(1.20);
                    opacity: 0.20;
                }
            }

            @keyframes about-hero-glow {

                0%,
                100% {
                    transform: scale(0.94);
                    opacity: 0.55;
                }

                50% {
                    transform: scale(1.12);
                    opacity: 1;
                }
            }

            @keyframes about-hero-particle {
                0% {
                    transform: translate3d(0, 35px, 0);
                    opacity: 0;
                }

                15% {
                    opacity: 0.75;
                }

                50% {
                    transform: translate3d(35px, -70px, 0);
                    opacity: 0.50;
                }

                85% {
                    opacity: 0.70;
                }

                100% {
                    transform: translate3d(-20px, -160px, 0);
                    opacity: 0;
                }
            }

            @keyframes about-hero-left-in {
                from {
                    opacity: 0;
                    transform: translate3d(-45px, 20px, 0);
                }

                to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
                }
            }

            @keyframes about-hero-badge-in {
                from {
                    opacity: 0;
                    transform: translateY(-15px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes about-hero-title-in {
                from {
                    opacity: 0;
                    transform: translateY(25px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes about-hero-description-in {
                from {
                    opacity: 0;
                    transform: translateY(18px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* =========================================================
                        ACCESSIBILITY
                    ========================================================== */

            @media (prefers-reduced-motion: reduce) {

                .arti-about-hero-bg,
                .arti-about-hero-smoke,
                .arti-about-hero-glow,
                .arti-about-hero-particle,
                .arti-about-hero-content,
                .arti-about-hero-badge,
                .arti-about-hero-title,
                .arti-about-hero-description,
                .arti-about-hero-buttons {
                    animation: none !important;
                }

                .arti-about-hero-content,
                .arti-about-hero-badge,
                .arti-about-hero-title,
                .arti-about-hero-description,
                .arti-about-hero-buttons {
                    opacity: 1;
                    transform: none;
                }
            }
        </style>
    @endpush


    {{-- =========================================================
    HERO
    ========================================================== --}}

    <section class="relative isolate overflow-hidden bg-slate-950 text-white">

        {{-- Background photo --}}
        <div class="arti-about-hero-bg absolute inset-0 -z-30"></div>

        {{-- Dark overlay --}}
        <div class="absolute inset-0 -z-20 bg-slate-950/75"></div>

        {{-- Horizontal gradient --}}
        <div class="absolute inset-0 -z-20 bg-gradient-to-r from-slate-950 via-slate-950/85 to-slate-950/50"></div>

        {{-- Vertical gradient --}}
        <div class="absolute inset-0 -z-20 bg-gradient-to-t from-slate-950 via-transparent to-slate-950/30"></div>


        {{-- =====================================================
            HERO ATMOSPHERE
        ====================================================== --}}

        <div class="arti-about-hero-glow arti-about-hero-glow-right -z-10"></div>

        <div class="arti-about-hero-glow arti-about-hero-glow-left -z-10"></div>


        {{-- Smoke --}}
        <div class="arti-about-hero-smoke arti-about-hero-smoke-1 -z-10"></div>

        <div class="arti-about-hero-smoke arti-about-hero-smoke-2 -z-10"></div>

        <div class="arti-about-hero-smoke arti-about-hero-smoke-3 -z-10"></div>


        {{-- Floating particles --}}
        <span class="arti-about-hero-particle p1"></span>
        <span class="arti-about-hero-particle p2"></span>
        <span class="arti-about-hero-particle p3"></span>
        <span class="arti-about-hero-particle p4"></span>
        <span class="arti-about-hero-particle p5"></span>
        <span class="arti-about-hero-particle p6"></span>


        <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">

            <div class="arti-about-hero-content max-w-3xl">

                <div
                    class="arti-about-hero-badge inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-bold uppercase tracking-widest text-red-400 backdrop-blur-sm">

                    <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>

                    À propos de nous

                </div>


                <h1
                    class="arti-about-hero-title mt-6 text-4xl font-extrabold leading-[1.08] tracking-tight text-white sm:text-5xl lg:text-6xl">

                    Une relation client
                    <span class="text-red-500">
                        qui fait la différence.
                    </span>

                </h1>


                <p class="arti-about-hero-description mt-6 max-w-2xl text-lg leading-8 text-slate-300">

                    ARTI CALL accompagne les entreprises dans la gestion de leur
                    relation client, la téléprospection et le développement
                    commercial avec des solutions professionnelles et adaptées
                    à leurs besoins.

                </p>


                <div class="arti-about-hero-buttons mt-8 flex flex-col gap-3 sm:flex-row">

                    <a href="{{ url('/contact') }}"
                        class="arti-about-hero-main-btn group inline-flex items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-red-600/20 hover:bg-red-700 hover:-translate-y-0.5 transition duration-300">

                        <span class="relative z-10">
                            Parlons de votre projet
                        </span>

                        <i data-lucide="arrow-right"
                            class="relative z-10 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>

                    </a>


                    <a href="{{ url('/services') }}"
                        class="group inline-flex items-center justify-center gap-2 rounded-xl border border-white/20 bg-white/5 px-6 py-3.5 text-sm font-bold text-white hover:bg-white/10 transition backdrop-blur-sm">

                        <span>
                            Découvrir nos services
                        </span>

                        <i data-lucide="arrow-right"
                            class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1">
                        </i>

                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    INTRODUCTION
    ========================================================== --}}

    <section class="bg-white py-20 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                {{-- Text --}}
                <div>
                    <span class="text-sm font-bold uppercase tracking-widest text-red-600">
                        Qui sommes-nous ?
                    </span>

                    <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight">
                        Un partenaire dédié à votre
                        <span class="text-red-600">relation client</span>
                    </h2>

                    <p class="mt-6 text-base leading-8 text-slate-600">
                        ARTI CALL est un centre d’appel basé à Fès, au Maroc,
                        spécialisé dans les opérations de relation client et
                        de développement commercial.
                    </p>

                    <p class="mt-4 text-base leading-8 text-slate-600">
                        Notre objectif est d’aider les entreprises à améliorer
                        leur expérience client, développer leur activité et
                        optimiser leurs opérations grâce à une équipe formée,
                        une organisation structurée et des solutions adaptées.
                    </p>

                    <div class="mt-8 grid sm:grid-cols-2 gap-4">

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center shrink-0">
                                <i data-lucide="headphones" class="w-5 h-5 text-red-600"></i>
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-900">
                                    Relation client
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-500">
                                    Une expérience client professionnelle.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center shrink-0">
                                <i data-lucide="trending-up" class="w-5 h-5 text-red-600"></i>
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-900">
                                    Développement commercial
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-500">
                                    Des actions orientées vers vos objectifs.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>


                {{-- Visual --}}
                <div class="relative">

                    <div class="relative overflow-hidden rounded-3xl bg-slate-950 min-h-[430px]">

                        {{-- =====================================================
                        PROFESSIONAL SMOKE BACKGROUND
                        ====================================================== --}}

                        {{-- Base background --}}
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-[#111827] to-black">
                        </div>

                        {{-- Soft red ambient glow --}}
                        <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-red-600/20 blur-[100px]">
                        </div>

                        <div class="absolute -bottom-32 -left-32 w-96 h-96 rounded-full bg-red-700/10 blur-[100px]">
                        </div>


                        {{-- =====================================================
                        SMOKE 1
                        ====================================================== --}}
                        <div class="arti-smoke arti-smoke-1"></div>


                        {{-- =====================================================
                        SMOKE 2
                        ====================================================== --}}
                        <div class="arti-smoke arti-smoke-2"></div>


                        {{-- =====================================================
                        SMOKE 3
                        ====================================================== --}}
                        <div class="arti-smoke arti-smoke-3"></div>


                        {{-- Soft center light --}}
                        <div
                            class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(220,38,38,0.10),transparent_58%)]">
                        </div>


                        {{-- Decorative circles --}}
                        <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full border border-red-500/10">
                        </div>

                        <div class="absolute -right-10 -top-10 w-44 h-44 rounded-full border border-red-500/10">
                        </div>


                        {{-- Small particles --}}
                        <div class="absolute top-16 left-16 w-1 h-1 rounded-full bg-white/30 animate-pulse"></div>

                        <div class="absolute top-32 right-24 w-1.5 h-1.5 rounded-full bg-red-400/40 animate-pulse">
                        </div>

                        <div class="absolute bottom-24 left-28 w-1 h-1 rounded-full bg-white/20 animate-pulse">
                        </div>

                        <div class="absolute bottom-16 right-20 w-1 h-1 rounded-full bg-red-500/40 animate-pulse">
                        </div>


                        {{-- =====================================================
                        CONTENT
                        ====================================================== --}}
                        <div class="relative z-10 h-full min-h-[430px] flex items-center justify-center p-8">

                            <div class="text-center">

                                <div
                                    class="mx-auto w-24 h-24 rounded-3xl bg-red-600 flex items-center justify-center shadow-2xl shadow-red-600/30 arti-phone-float">

                                    <i data-lucide="phone-call" class="w-11 h-11 text-white"></i>

                                </div>

                                <h3 class="mt-7 text-3xl font-extrabold text-white">
                                    ARTI <span class="text-red-500">CALL</span>
                                </h3>

                                <p class="mt-2 text-sm uppercase tracking-[0.25em] text-slate-400">
                                    Centre d'appel
                                </p>

                                <div class="mt-8 flex items-center justify-center gap-3">

                                    <span class="relative flex h-2 w-2">

                                        <span
                                            class="absolute inline-flex h-full w-full rounded-full bg-red-500 opacity-75 animate-ping">
                                        </span>

                                        <span class="relative inline-flex h-2 w-2 rounded-full bg-red-500">
                                        </span>

                                    </span>

                                    <span class="text-sm text-slate-300">
                                        Fès, Maroc
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
    MISSION / VISION
    ========================================================== --}}

    <section class="bg-slate-50 py-20 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="max-w-2xl">
                <span class="text-sm font-bold uppercase tracking-widest text-red-600">
                    Notre engagement
                </span>

                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900">
                    Une vision centrée sur vos objectifs
                </h2>
            </div>


            <div class="mt-12 grid md:grid-cols-2 gap-6">

                {{-- Mission --}}
                <div
                    class="group rounded-3xl bg-white border border-slate-200 p-8 hover:border-red-200 hover:shadow-xl hover:shadow-slate-200/50 transition duration-300">

                    <div
                        class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center group-hover:bg-red-600 transition duration-300">
                        <i data-lucide="target" class="w-7 h-7 text-red-600 group-hover:text-white transition"></i>
                    </div>

                    <h3 class="mt-7 text-2xl font-extrabold text-slate-900">
                        Notre mission
                    </h3>

                    <p class="mt-4 text-base leading-8 text-slate-600">
                        Fournir aux entreprises des solutions de relation client
                        fiables, professionnelles et flexibles afin de leur
                        permettre de se concentrer sur leur cœur de métier.
                    </p>

                </div>


                {{-- Vision --}}
                <div
                    class="group rounded-3xl bg-white border border-slate-200 p-8 hover:border-red-200 hover:shadow-xl hover:shadow-slate-200/50 transition duration-300">

                    <div
                        class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center group-hover:bg-red-600 transition duration-300">
                        <i data-lucide="eye" class="w-7 h-7 text-red-600 group-hover:text-white transition"></i>
                    </div>

                    <h3 class="mt-7 text-2xl font-extrabold text-slate-900">
                        Notre vision
                    </h3>

                    <p class="mt-4 text-base leading-8 text-slate-600">
                        Construire des relations durables avec nos clients en
                        combinant qualité de service, professionnalisme,
                        écoute et amélioration continue.
                    </p>

                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
    VALEURS
    ========================================================== --}}

    <section class="bg-white py-20 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto">

                <span class="text-sm font-bold uppercase tracking-widest text-red-600">
                    Nos valeurs
                </span>

                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900">
                    Les principes qui nous guident
                </h2>

                <p class="mt-5 text-base leading-7 text-slate-600">
                    Chaque interaction avec nos clients repose sur des valeurs
                    simples et essentielles.
                </p>

            </div>


            <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

                {{-- Valeur 1 --}}
                <div
                    class="group rounded-2xl border border-slate-200 bg-white p-6 hover:-translate-y-1 hover:border-red-200 hover:shadow-xl transition duration-300">

                    <div
                        class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center group-hover:bg-red-600 transition">
                        <i data-lucide="shield-check" class="w-6 h-6 text-red-600 group-hover:text-white transition"></i>
                    </div>

                    <h3 class="mt-5 font-extrabold text-slate-900">
                        Fiabilité
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Un service structuré et constant pour accompagner vos opérations.
                    </p>

                </div>


                {{-- Valeur 2 --}}
                <div
                    class="group rounded-2xl border border-slate-200 bg-white p-6 hover:-translate-y-1 hover:border-red-200 hover:shadow-xl transition duration-300">

                    <div
                        class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center group-hover:bg-red-600 transition">
                        <i data-lucide="users" class="w-6 h-6 text-red-600 group-hover:text-white transition"></i>
                    </div>

                    <h3 class="mt-5 font-extrabold text-slate-900">
                        Écoute
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Comprendre vos besoins pour proposer une réponse adaptée.
                    </p>

                </div>


                {{-- Valeur 3 --}}
                <div
                    class="group rounded-2xl border border-slate-200 bg-white p-6 hover:-translate-y-1 hover:border-red-200 hover:shadow-xl transition duration-300">

                    <div
                        class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center group-hover:bg-red-600 transition">
                        <i data-lucide="sparkles" class="w-6 h-6 text-red-600 group-hover:text-white transition"></i>
                    </div>

                    <h3 class="mt-5 font-extrabold text-slate-900">
                        Qualité
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Nous accordons une attention particulière à chaque interaction.
                    </p>

                </div>


                {{-- Valeur 4 --}}
                <div
                    class="group rounded-2xl border border-slate-200 bg-white p-6 hover:-translate-y-1 hover:border-red-200 hover:shadow-xl transition duration-300">

                    <div
                        class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center group-hover:bg-red-600 transition">
                        <i data-lucide="refresh-cw" class="w-6 h-6 text-red-600 group-hover:text-white transition"></i>
                    </div>

                    <h3 class="mt-5 font-extrabold text-slate-900">
                        Amélioration continue
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Nous cherchons constamment à améliorer nos méthodes et nos résultats.
                    </p>

                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
    CHIFFRES CLÉS
    ========================================================== --}}

    <section class="bg-slate-950 py-20 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto">

                <span class="text-sm font-bold uppercase tracking-widest text-red-500">
                    ARTI CALL en quelques mots
                </span>

                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-white">
                    Une organisation pensée pour vos besoins
                </h2>

            </div>


            <div class="mt-12 grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">

                <div class="rounded-2xl border border-white/10 bg-white/5 p-6 text-center">
                    <div class="text-3xl sm:text-4xl font-extrabold text-red-500">
                        Fès
                    </div>
                    <p class="mt-2 text-sm text-slate-400">
                        Maroc
                    </p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/5 p-6 text-center">
                    <div class="text-3xl sm:text-4xl font-extrabold text-red-500">
                        24/7
                    </div>
                    <p class="mt-2 text-sm text-slate-400">
                        Selon vos besoins
                    </p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/5 p-6 text-center">
                    <div class="text-3xl sm:text-4xl font-extrabold text-red-500">
                        100%
                    </div>
                    <p class="mt-2 text-sm text-slate-400">
                        Engagement
                    </p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/5 p-6 text-center">
                    <div class="text-3xl sm:text-4xl font-extrabold text-red-500">
                        1
                    </div>
                    <p class="mt-2 text-sm text-slate-400">
                        Partenaire à vos côtés
                    </p>
                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
    CTA FINAL
    ========================================================== --}}

    <section class="bg-white py-20 sm:py-24">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-3xl bg-red-600 p-8 sm:p-12 lg:p-14 text-center">

                <div class="absolute -right-24 -top-24 w-72 h-72 rounded-full bg-white/10"></div>

                <div class="absolute -left-24 -bottom-28 w-80 h-80 rounded-full bg-white/5"></div>

                <div class="relative z-10">

                    <div class="mx-auto w-14 h-14 rounded-2xl bg-white/15 flex items-center justify-center">
                        <i data-lucide="message-circle" class="w-7 h-7 text-white"></i>
                    </div>

                    <h2 class="mt-6 text-3xl sm:text-4xl font-extrabold text-white">
                        Prêt à améliorer votre relation client ?
                    </h2>

                    <p class="mt-4 max-w-2xl mx-auto text-white/85 leading-7">
                        Échangeons sur vos besoins et construisons ensemble
                        une solution adaptée à votre activité.
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row justify-center gap-3">

                        <a href="{{ url('/contact') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3.5 text-sm font-bold text-red-600 hover:bg-slate-100 transition">

                            Nous contacter

                            <i data-lucide="arrow-right" class="w-4 h-4"></i>

                        </a>

                        <a href="{{ url('/services') }}"
                            class="inline-flex items-center justify-center rounded-xl border border-white/40 bg-white/10 px-6 py-3.5 text-sm font-bold text-white hover:bg-white/20 transition">

                            Voir nos services

                        </a>

                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
    SMOKE + BACKGROUND ANIMATION
    ========================================================== --}}

    @push('styles')
        <style>
            .arti-smoke {
                position: absolute;
                width: 420px;
                height: 420px;
                border-radius: 50%;
                pointer-events: none;
                filter: blur(75px);
                opacity: 0.15;
                mix-blend-mode: screen;
            }

            .arti-smoke-1 {
                left: -180px;
                bottom: -190px;

                background: radial-gradient(circle,
                        rgba(255, 255, 255, 0.30) 0%,
                        rgba(255, 255, 255, 0.12) 30%,
                        transparent 70%);

                animation: artiSmokeOne 16s ease-in-out infinite alternate;
            }

            .arti-smoke-2 {
                right: -180px;
                top: -160px;

                background: radial-gradient(circle,
                        rgba(220, 38, 38, 0.30) 0%,
                        rgba(220, 38, 38, 0.10) 35%,
                        transparent 70%);

                animation: artiSmokeTwo 19s ease-in-out infinite alternate;
            }

            .arti-smoke-3 {
                width: 350px;
                height: 350px;
                left: 32%;
                top: 20%;

                background: radial-gradient(circle,
                        rgba(255, 255, 255, 0.18) 0%,
                        rgba(148, 163, 184, 0.08) 35%,
                        transparent 70%);

                opacity: 0.09;

                animation: artiSmokeThree 22s ease-in-out infinite alternate;
            }

            @keyframes artiSmokeOne {
                0% {
                    transform: translate3d(-30px, 20px, 0) scale(0.90);
                }

                50% {
                    transform: translate3d(80px, -45px, 0) scale(1.15);
                }

                100% {
                    transform: translate3d(160px, 20px, 0) scale(1);
                }
            }

            @keyframes artiSmokeTwo {
                0% {
                    transform: translate3d(40px, -20px, 0) scale(1);
                }

                50% {
                    transform: translate3d(-70px, 50px, 0) scale(1.18);
                }

                100% {
                    transform: translate3d(-120px, 10px, 0) scale(0.95);
                }
            }

            @keyframes artiSmokeThree {
                0% {
                    transform: translate3d(-20px, 20px, 0) scale(0.90);
                }

                50% {
                    transform: translate3d(50px, -30px, 0) scale(1.15);
                }

                100% {
                    transform: translate3d(-40px, 40px, 0) scale(1);
                }
            }

            .arti-phone-float {
                animation: artiPhoneFloat 4s ease-in-out infinite;
            }

            @keyframes artiPhoneFloat {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-7px);
                }
            }

            @media (prefers-reduced-motion: reduce) {

                .arti-smoke,
                .arti-phone-float {
                    animation: none;
                }
            }
        </style>
    @endpush

@endsection
