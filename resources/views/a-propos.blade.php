@extends('layouts.app')

@section('title', 'À propos - ARTI CALL')

@section('meta_description',
    'Découvrez ARTI CALL, centre d’appel basé à Fès, spécialisé dans la relation client, la
    téléprospection et le développement commercial.')

@section('content')

    {{-- =========================================================
    HERO
========================================================= --}}
    <section class="relative overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0">
            <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-red-600/20 blur-3xl"></div>
            <div class="absolute -left-32 bottom-0 w-96 h-96 rounded-full bg-red-600/10 blur-3xl"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
            <div class="max-w-3xl">

                <div
                    class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-bold uppercase tracking-widest text-red-400">
                    <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                    À propos de nous
                </div>

                <h1 class="mt-6 text-4xl font-extrabold leading-[1.08] tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Une relation client
                    <span class="text-red-500">qui fait la différence.</span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    ARTI CALL accompagne les entreprises dans la gestion de leur
                    relation client, la téléprospection et le développement
                    commercial avec des solutions professionnelles et adaptées
                    à leurs besoins.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ url('/contact') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-red-600/20 hover:bg-red-700 hover:-translate-y-0.5 transition duration-300">
                        Parlons de votre projet
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>

                    <a href="{{ url('/services') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/20 bg-white/5 px-6 py-3.5 text-sm font-bold text-white hover:bg-white/10 transition">
                        Découvrir nos services
                    </a>
                </div>

            </div>
        </div>
    </section>


    {{-- =========================================================
    INTRODUCTION
========================================================= --}}
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
========================================================= --}}
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
========================================================= --}}
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
========================================================= --}}
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
========================================================= --}}
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
========================================================= --}}
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
