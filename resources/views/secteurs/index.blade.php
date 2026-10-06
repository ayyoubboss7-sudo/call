@extends('layouts.app')

@section('title', 'Secteurs d’activité - ARTI CALL')
@section('meta_description', 'ARTI CALL accompagne différents secteurs : santé, immobilier, assurance, e-commerce, hôtellerie et plus, depuis Fès, Maroc.')

@section('content')

    @push('styles')
        <style>
            /* =========================================================
                HERO - ANIMATION COMME LA PAGE SERVICES
            ========================================================== */

            .arti-services-bg {
                position: absolute;
                inset: 0;
                overflow: hidden;
                background-image: url('/images/call-center-bg.jpg');
                background-size: cover;
                background-position: center;
                animation: services-bg-zoom 18s ease-in-out infinite alternate;
                will-change: transform;
            }

            .arti-services-bg::after {
                content: "";
                position: absolute;
                inset: 0;
                background:
                    linear-gradient(
                        90deg,
                        rgba(2, 6, 23, 0.94) 0%,
                        rgba(2, 6, 23, 0.78) 45%,
                        rgba(2, 6, 23, 0.55) 100%
                    );
            }

            /* =========================================================
                SMOKE / FOG
            ========================================================== */

            .arti-hero-smoke {
                position: absolute;
                border-radius: 9999px;
                pointer-events: none;
                filter: blur(80px);
                will-change: transform, opacity;
            }

            .arti-hero-smoke-1 {
                width: 420px;
                height: 180px;
                left: -120px;
                top: 18%;
                background: rgba(255, 255, 255, 0.12);
                opacity: 0.25;
                animation: hero-smoke-1 14s ease-in-out infinite alternate;
            }

            .arti-hero-smoke-2 {
                width: 500px;
                height: 220px;
                right: -170px;
                bottom: 5%;
                background: rgba(220, 38, 38, 0.20);
                opacity: 0.35;
                animation: hero-smoke-2 17s ease-in-out infinite alternate;
            }

            .arti-hero-smoke-3 {
                width: 350px;
                height: 160px;
                left: 35%;
                top: -100px;
                background: rgba(255, 255, 255, 0.10);
                opacity: 0.18;
                animation: hero-smoke-3 20s ease-in-out infinite alternate;
            }

            /* =========================================================
                RED GLOW
            ========================================================== */

            .arti-hero-glow {
                position: absolute;
                width: 430px;
                height: 430px;
                border-radius: 9999px;
                background: rgba(220, 38, 38, 0.16);
                filter: blur(90px);
                pointer-events: none;
                animation: hero-glow 7s ease-in-out infinite;
            }

            .arti-hero-glow-right {
                right: -160px;
                top: -150px;
            }

            .arti-hero-glow-left {
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

            .arti-hero-particle {
                position: absolute;
                width: 4px;
                height: 4px;
                border-radius: 9999px;
                background: rgba(248, 113, 113, 0.65);
                box-shadow: 0 0 14px rgba(239, 68, 68, 0.50);
                pointer-events: none;
                animation: hero-particle linear infinite;
            }

            .arti-hero-particle.p1 {
                left: 8%;
                top: 35%;
                animation-duration: 9s;
                animation-delay: -2s;
            }

            .arti-hero-particle.p2 {
                left: 20%;
                top: 70%;
                width: 3px;
                height: 3px;
                animation-duration: 12s;
                animation-delay: -6s;
            }

            .arti-hero-particle.p3 {
                left: 42%;
                top: 22%;
                animation-duration: 10s;
                animation-delay: -4s;
            }

            .arti-hero-particle.p4 {
                left: 65%;
                top: 72%;
                width: 3px;
                height: 3px;
                animation-duration: 13s;
                animation-delay: -8s;
            }

            .arti-hero-particle.p5 {
                left: 79%;
                top: 32%;
                animation-duration: 11s;
                animation-delay: -3s;
            }

            .arti-hero-particle.p6 {
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

            .arti-hero-content {
                animation:
                    hero-left-in 1s cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            .arti-hero-badge {
                animation:
                    hero-badge-in 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.10s both;
            }

            .arti-hero-title {
                animation:
                    hero-title-in 1s cubic-bezier(0.22, 1, 0.36, 1) 0.20s both;
            }

            .arti-hero-description {
                animation:
                    hero-description-in 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.38s both;
            }

            .arti-hero-buttons {
                animation:
                    hero-description-in 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.52s both;
            }

            .arti-hero-stats {
                animation:
                    hero-description-in 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.65s both;
            }

            /* =========================================================
                HERO BUTTON SHINE
            ========================================================== */

            .arti-hero-main-btn {
                position: relative;
                overflow: hidden;
            }

            .arti-hero-main-btn::before {
                content: "";
                position: absolute;
                top: 0;
                left: -120%;
                width: 70%;
                height: 100%;
                background: linear-gradient(
                    90deg,
                    transparent,
                    rgba(255, 255, 255, 0.20),
                    transparent
                );
                transform: skewX(-20deg);
                transition: left 0.7s ease;
            }

            .arti-hero-main-btn:hover::before {
                left: 150%;
            }

            /* =========================================================
                HERO STATS
            ========================================================== */

            .arti-stat-item {
                transition:
                    transform 0.3s ease,
                    border-color 0.3s ease;
            }

            .arti-stat-item:hover {
                transform: translateY(-3px);
            }

            /* =========================================================
                KEYFRAMES
            ========================================================== */

            @keyframes services-bg-zoom {
                0% {
                    transform: scale(1);
                }

                100% {
                    transform: scale(1.06);
                }
            }

            @keyframes hero-smoke-1 {
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

            @keyframes hero-smoke-2 {
                0% {
                    transform: translate3d(30px, 30px, 0) scale(1);
                    opacity: 0.20;
                }

                100% {
                    transform: translate3d(-180px, -80px, 0) scale(1.30);
                    opacity: 0.38;
                }
            }

            @keyframes hero-smoke-3 {
                0% {
                    transform: translate3d(-100px, 40px, 0) scale(0.90);
                    opacity: 0.08;
                }

                100% {
                    transform: translate3d(180px, 120px, 0) scale(1.20);
                    opacity: 0.20;
                }
            }

            @keyframes hero-glow {
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

            @keyframes hero-particle {
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

            @keyframes hero-left-in {
                from {
                    opacity: 0;
                    transform: translate3d(-45px, 20px, 0);
                }

                to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
                }
            }

            @keyframes hero-badge-in {
                from {
                    opacity: 0;
                    transform: translateY(-15px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes hero-title-in {
                from {
                    opacity: 0;
                    transform: translateY(25px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes hero-description-in {
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

                .arti-services-bg,
                .arti-hero-smoke,
                .arti-hero-glow,
                .arti-hero-particle,
                .arti-hero-content,
                .arti-hero-badge,
                .arti-hero-title,
                .arti-hero-description,
                .arti-hero-buttons,
                .arti-hero-stats {
                    animation: none !important;
                }

                .arti-hero-content,
                .arti-hero-badge,
                .arti-hero-title,
                .arti-hero-description,
                .arti-hero-buttons,
                .arti-hero-stats {
                    opacity: 1;
                    transform: none;
                }
            }
        </style>
    @endpush


    {{-- ============================================================
        HERO
    ============================================================ --}}

    <section class="relative isolate overflow-hidden bg-slate-950 text-white">

        {{-- Background photo call center animée --}}
        <div class="arti-services-bg absolute inset-0 -z-30"></div>

        {{-- Dark overlay --}}
        <div class="absolute inset-0 -z-20 bg-slate-950/75"></div>

        {{-- Gradient overlay --}}
        <div class="absolute inset-0 -z-20 bg-gradient-to-r from-slate-950 via-slate-950/85 to-slate-950/50"></div>

        {{-- Vertical gradient --}}
        <div class="absolute inset-0 -z-20 bg-gradient-to-t from-slate-950 via-transparent to-slate-950/30"></div>


        {{-- =====================================================
            HERO ATMOSPHERE
        ====================================================== --}}

        <div class="arti-hero-glow arti-hero-glow-right -z-10"></div>

        <div class="arti-hero-glow arti-hero-glow-left -z-10"></div>

        {{-- Smoke --}}
        <div class="arti-hero-smoke arti-hero-smoke-1 -z-10"></div>

        <div class="arti-hero-smoke arti-hero-smoke-2 -z-10"></div>

        <div class="arti-hero-smoke arti-hero-smoke-3 -z-10"></div>


        {{-- Floating particles --}}
        <span class="arti-hero-particle p1"></span>
        <span class="arti-hero-particle p2"></span>
        <span class="arti-hero-particle p3"></span>
        <span class="arti-hero-particle p4"></span>
        <span class="arti-hero-particle p5"></span>
        <span class="arti-hero-particle p6"></span>


        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-20 lg:pb-28">

            {{-- Breadcrumb --}}
            <nav class="flex items-center gap-2 text-sm text-white/50" aria-label="Fil d'Ariane">
            </nav>


            <div class="arti-hero-content mt-14 max-w-4xl">

                <span
                    class="arti-hero-badge inline-flex items-center gap-2 rounded-full border border-red-500/30 bg-red-600/10 px-4 py-2 backdrop-blur-sm">

                    <span class="h-2 w-2 animate-pulse rounded-full bg-red-500"></span>

                    <span class="text-xs font-bold uppercase tracking-[0.18em] text-red-400">
                        Secteurs d'activité
                    </span>

                </span>


                <h1
                    class="arti-hero-title mt-7 text-4xl sm:text-5xl lg:text-7xl font-extrabold tracking-tight leading-[1.05]">

                    <span class="text-white">
                        Un centre d'appel
                    </span>

                    <br>

                    <span class="text-white">
                        qui comprend
                    </span>

                    <span class="text-red-500">
                        votre métier
                    </span>

                </h1>


                <p class="arti-hero-description mt-7 text-lg leading-8 text-white/65 max-w-2xl">

                    Nos agents sont formés à votre secteur, à votre vocabulaire et à vos process.

                </p>


                <div class="arti-hero-buttons mt-10 flex flex-col sm:flex-row gap-3">

                    <a href="#liste-secteurs"
                        class="arti-hero-main-btn group inline-flex items-center justify-center gap-2 rounded-xl bg-red-600 px-7 py-4 text-sm font-bold text-white shadow-lg shadow-red-600/20 hover:bg-red-700 transition">

                        <span class="relative z-10">
                            Découvrir les secteurs
                        </span>

                        <i data-lucide="arrow-down"
                            class="relative z-10 w-4 h-4 transition-transform duration-300 group-hover:translate-y-1"></i>

                    </a>


                    <a href="{{ url('/contact') }}"
                        class="group inline-flex items-center justify-center gap-2 rounded-xl border border-white/20 bg-white/5 px-7 py-4 text-sm font-bold text-white backdrop-blur-sm hover:bg-white/10 transition">

                        <span>
                            Demander un devis
                        </span>

                        <i data-lucide="arrow-right"
                            class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1">
                        </i>

                    </a>

                </div>

            </div>


            {{-- Mini stats --}}
            <dl
                class="arti-hero-stats mt-16 grid grid-cols-2 sm:grid-cols-3 gap-8 max-w-2xl border-t border-white/10 pt-8">

                <div class="arti-stat-item">

                    <dt class="text-xs uppercase tracking-widest text-white/50">
                        Secteurs
                    </dt>

                    <dd class="mt-2 text-3xl font-extrabold text-white">

                        <span data-count="{{ $secteurs->count() }}">
                            0
                        </span>

                    </dd>

                </div>


                <div class="arti-stat-item">

                    <dt class="text-xs uppercase tracking-widest text-white/50">
                        Langues
                    </dt>

                    <dd class="mt-2 text-3xl font-extrabold text-white">
                        FR · AR · EN
                    </dd>

                </div>


                <div class="arti-stat-item col-span-2 sm:col-span-1">

                    <dt class="text-xs uppercase tracking-widest text-white/50">
                        Devis
                    </dt>

                    <dd class="mt-2 text-3xl font-extrabold text-red-500">
                        Gratuit
                    </dd>

                </div>

            </dl>

        </div>

    </section>


    {{-- ============================================================
        LISTE DES SECTEURS
    ============================================================ --}}

    <section id="liste-secteurs" class="bg-white scroll-mt-24">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">


            <div class="max-w-2xl">

                <p class="text-sm font-bold uppercase tracking-widest text-red-600">
                    Nos secteurs
                </p>


                <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">
                    Trouvez le vôtre
                </h2>


                <p class="mt-4 text-lg text-slate-600">

                    Chaque métier a ses contraintes. Choisissez votre secteur pour voir comment nous vous accompagnons.

                </p>

            </div>


            <div class="mt-14 grid gap-x-12 sm:grid-cols-2 lg:grid-cols-3">

                @forelse ($secteurs as $i => $secteur)

                    <a href="{{ route('secteurs.show', $secteur) }}"
                        class="group flex flex-col border-t-2 border-slate-900 py-8 transition hover:border-red-600">

                        <div class="flex items-center justify-between">

                            <span class="text-sm font-bold text-red-600">

                                {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}

                            </span>


                            <i data-lucide="{{ $secteur->icone }}"
                                class="w-7 h-7 text-slate-300 transition group-hover:text-red-600">
                            </i>

                        </div>


                        <h3
                            class="mt-6 text-2xl font-extrabold tracking-tight text-slate-900 transition group-hover:text-red-600">

                            {{ $secteur->nom }}

                        </h3>


                        <p class="mt-3 leading-7 text-slate-600">

                            {{ $secteur->description_courte }}

                        </p>


                        <span
                            class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-slate-900 transition group-hover:text-red-600">

                            En savoir plus

                            <i data-lucide="arrow-right"
                                class="w-4 h-4 transition-transform group-hover:translate-x-1">
                            </i>

                        </span>

                    </a>

                @empty

                    <p class="text-slate-500">
                        Aucun secteur disponible pour le moment.
                    </p>

                @endforelse

            </div>

        </div>

    </section>


    {{-- ============================================================
        BANDE "VOTRE SECTEUR N'EST PAS LISTÉ ?"
    ============================================================ --}}

    <section class="bg-slate-50 border-t border-slate-200">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">


                <div class="max-w-2xl">

                    <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900">

                        Votre secteur n'est pas dans la liste ?

                    </h2>


                    <p class="mt-3 text-slate-600">

                        Nous adaptons nos services à chaque activité. Parlez-nous de votre besoin et nous vous proposerons une solution sur mesure.

                    </p>

                </div>


                <a href="{{ url('/contact') }}"
                    class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-slate-950 px-7 py-4 text-sm font-bold text-white hover:bg-red-600 transition">

                    Parler à un expert

                    <i data-lucide="arrow-right" class="w-4 h-4"></i>

                </a>

            </div>

        </div>

    </section>

@endsection
