@extends('layouts.app')

@section('title', 'Nos services - Centre d’appel Inbound et Outbound à Fès, Maroc | ARTI CALL')

@section('meta_description',
    'Découvrez les services Inbound, Outbound et complémentaires proposés par ARTI CALL, centre
    d’appel à Fès, Maroc : service client, réception d’appels, téléprospection, télémarketing, génération de leads et prise
    de rendez-vous.')

    @php
        $categories = [
            [
                'id' => 'inbound',
                'icon' => 'phone-incoming',
                'number' => '01',
                'eyebrow' => 'SERVICES INBOUND',
                'title' => 'Nous répondons à vos clients',
                'intro' =>
                    'Confiez à ARTI CALL la gestion de vos appels entrants et offrez à vos clients une expérience professionnelle, disponible et structurée.',
                'services' => [
                    [
                        'icon' => 'phone-call',
                        'title' => 'Réception d’appels',
                        'text' =>
                            'Nous prenons en charge vos appels entrants et orientons chaque demande selon vos procédures.',
                        'benefits' => [
                            'Appels traités avec votre script',
                            'Transmission claire des messages',
                            'Réduction des appels manqués',
                        ],
                        'slug' => 'reception-appels',
                    ],
                    [
                        'icon' => 'headset',
                        'title' => 'Service client',
                        'text' =>
                            'Une équipe dédiée répond aux questions de vos clients et assure le suivi de leurs demandes.',
                        'benefits' => [
                            'Réponses homogènes',
                            'Suivi structuré des demandes',
                            'Image de marque préservée',
                        ],
                        'slug' => 'service-client',
                    ],
                    [
                        'icon' => 'life-buoy',
                        'title' => 'Assistance et support',
                        'text' =>
                            'Une assistance téléphonique adaptée à vos besoins pour accompagner vos clients avant et après leur achat.',
                        'benefits' => [
                            'Prise en charge des réclamations',
                            'Escalade vers vos équipes si nécessaire',
                            'Suivi des échanges',
                        ],
                        'slug' => 'support-client',
                    ],
                    [
                        'icon' => 'calendar-check',
                        'title' => 'Prise de rendez-vous',
                        'text' =>
                            'Nous organisons les rendez-vous de vos équipes commerciales, techniques ou opérationnelles.',
                        'benefits' => [
                            'Agenda toujours à jour',
                            'Rappels aux clients',
                            'Réduction des rendez-vous manqués',
                        ],
                        'slug' => 'prise-rendez-vous-inbound',
                    ],
                    [
                        'icon' => 'shopping-cart',
                        'title' => 'Réception de commandes',
                        'text' =>
                            'Nous enregistrons les commandes reçues par téléphone et vérifions les informations nécessaires.',
                        'benefits' => ['Saisie fiable', 'Confirmation au client', 'Transmission rapide'],
                        'slug' => 'reception-commandes',
                    ],
                ],
            ],

            [
                'id' => 'outbound',
                'icon' => 'phone-outgoing',
                'number' => '02',
                'eyebrow' => 'SERVICES OUTBOUND',
                'title' => 'Nous développons votre activité',
                'intro' =>
                    'Notre équipe contacte vos prospects et vos clients selon une stratégie définie avec vous pour soutenir vos objectifs commerciaux.',
                'services' => [
                    [
                        'icon' => 'target',
                        'title' => 'Téléprospection',
                        'text' =>
                            'Nous contactons vos cibles pour présenter votre offre, identifier les besoins et détecter les opportunités.',
                        'benefits' => [
                            'Ciblage selon vos critères',
                            'Scripts adaptés à votre offre',
                            'Reporting régulier',
                        ],
                        'slug' => 'teleprospection',
                    ],
                    [
                        'icon' => 'megaphone',
                        'title' => 'Télémarketing et télévente',
                        'text' =>
                            'Des campagnes d’appels conçues pour promouvoir vos offres et développer vos ventes par téléphone.',
                        'benefits' => ['Campagnes sur mesure', 'Suivi des résultats', 'Ajustements selon les retours'],
                        'slug' => 'telemarketing',
                    ],
                    [
                        'icon' => 'users',
                        'title' => 'Génération de leads',
                        'text' =>
                            'Nous identifions et qualifions les prospects correspondant aux critères définis avec votre équipe.',
                        'benefits' => [
                            'Qualification selon vos critères',
                            'Leads transmis avec leur contexte',
                            'Gain de temps pour vos commerciaux',
                        ],
                        'slug' => 'generation-leads',
                    ],
                    [
                        'icon' => 'calendar-plus',
                        'title' => 'Prise de rendez-vous commerciaux',
                        'text' =>
                            'Nous organisons des rendez-vous qualifiés pour permettre à vos commerciaux de se concentrer sur les opportunités.',
                        'benefits' => ['Rendez-vous confirmés', 'Informations prospect fournies', 'Relances incluses'],
                        'slug' => 'rendez-vous-commerciaux',
                    ],
                    [
                        'icon' => 'repeat',
                        'title' => 'Relance et fidélisation',
                        'text' =>
                            'Nous assurons vos relances commerciales et vos appels de suivi pour maintenir une relation régulière avec vos clients.',
                        'benefits' => ['Relances planifiées', 'Retours clients collectés', 'Suivi de la relation'],
                        'slug' => 'fidelisation',
                    ],
                    [
                        'icon' => 'clipboard-list',
                        'title' => 'Enquêtes et sondages',
                        'text' =>
                            'Nous réalisons des enquêtes téléphoniques pour recueillir les avis de vos clients ou étudier un marché.',
                        'benefits' => [
                            'Questionnaires sur mesure',
                            'Données collectées proprement',
                            'Synthèse des résultats',
                        ],
                        'slug' => 'enquetes-sondages',
                    ],
                ],
            ],

            [
                'id' => 'complementaires',
                'icon' => 'layers',
                'number' => '03',
                'eyebrow' => 'SERVICES COMPLÉMENTAIRES',
                'title' => 'Un support au-delà du téléphone',
                'intro' =>
                    'Selon les besoins du projet, ARTI CALL peut également accompagner vos équipes avec des services complémentaires de support et de back-office.',
                'services' => [
                    [
                        'icon' => 'mail',
                        'title' => 'Gestion des emails',
                        'text' =>
                            'Traitement et suivi des emails clients selon vos procédures et vos modèles de réponse.',
                        'benefits' => ['Réponses dans les délais', 'Tri des demandes', 'Suivi des dossiers'],
                        'slug' => 'gestion-emails',
                    ],
                    [
                        'icon' => 'message-circle',
                        'title' => 'Chat en ligne',
                        'text' =>
                            'Réponse aux visiteurs de votre site et orientation des demandes directement depuis votre chat.',
                        'benefits' => ['Réponse rapide', 'Orientation des visiteurs', 'Complément du téléphone'],
                        'slug' => 'chat-en-ligne',
                    ],
                    [
                        'icon' => 'database',
                        'title' => 'Saisie de données et back-office',
                        'text' =>
                            'Saisie, mise à jour de fichiers et tâches administratives permettant de libérer du temps à vos équipes.',
                        'benefits' => ['Données à jour', 'Procédures respectées', 'Temps libéré pour vos équipes'],
                        'slug' => 'back-office',
                    ],
                ],
            ],
        ];
    @endphp

@section('content')

    @push('styles')
        <style>
            /* =========================================================
                        HERO - ANIMATION UNIQUEMENT
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
                    linear-gradient(90deg,
                        rgba(2, 6, 23, 0.94) 0%,
                        rgba(2, 6, 23, 0.78) 45%,
                        rgba(2, 6, 23, 0.55) 100%);
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

            .arti-hero-left {
                animation:
                    hero-left-in 1s cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            .arti-hero-right {
                animation:
                    hero-right-in 1s cubic-bezier(0.22, 1, 0.36, 1) 0.20s both;
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

            /* =========================================================
                        HERO RIGHT ITEMS
                    ========================================================== */

            .arti-hero-service-item {
                opacity: 0;
                animation:
                    hero-item-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) forwards;
            }

            .arti-hero-service-item:nth-child(1) {
                animation-delay: 0.55s;
            }

            .arti-hero-service-item:nth-child(2) {
                animation-delay: 0.68s;
            }

            .arti-hero-service-item:nth-child(3) {
                animation-delay: 0.81s;
            }

            /* =========================================================
                        HERO CARD
                    ========================================================== */

            .arti-hero-panel {
                position: relative;
                transition:
                    transform 0.5s cubic-bezier(0.22, 1, 0.36, 1),
                    border-color 0.4s ease,
                    background-color 0.4s ease;
            }

            .arti-hero-panel:hover {
                transform: translateY(-5px);
            }

            .arti-hero-panel::before {
                content: "";
                position: absolute;
                left: 12%;
                right: 12%;
                top: 0;
                height: 1px;
                background: linear-gradient(90deg,
                        transparent,
                        rgba(239, 68, 68, 0.85),
                        transparent);
                animation: hero-line 4s ease-in-out infinite;
            }

            /* =========================================================
                        BUTTON SHINE
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
                background: linear-gradient(90deg,
                        transparent,
                        rgba(255, 255, 255, 0.20),
                        transparent);
                transform: skewX(-20deg);
                transition: left 0.7s ease;
            }

            .arti-hero-main-btn:hover::before {
                left: 150%;
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

            @keyframes hero-right-in {
                from {
                    opacity: 0;
                    transform: translate3d(45px, 25px, 0) scale(0.96);
                }

                to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0) scale(1);
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

            @keyframes hero-item-in {
                from {
                    opacity: 0;
                    transform: translateX(25px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes hero-line {

                0%,
                100% {
                    opacity: 0.35;
                    transform: scaleX(0.75);
                }

                50% {
                    opacity: 1;
                    transform: scaleX(1);
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
                .arti-hero-left,
                .arti-hero-right,
                .arti-hero-badge,
                .arti-hero-title,
                .arti-hero-description,
                .arti-hero-buttons,
                .arti-hero-service-item,
                .arti-hero-panel::before {
                    animation: none !important;
                }

                .arti-hero-left,
                .arti-hero-right,
                .arti-hero-badge,
                .arti-hero-title,
                .arti-hero-description,
                .arti-hero-buttons,
                .arti-hero-service-item {
                    opacity: 1;
                    transform: none;
                }

                .arti-hero-panel {
                    transition: none;
                }
            }
        </style>
    @endpush


    {{-- =========================================================
    HERO
    ========================================================== --}}

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


        <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">

            <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12 lg:gap-16">


                {{-- =================================================
                    HERO LEFT
                ================================================== --}}

                <div class="arti-hero-left lg:col-span-7">

                    <div
                        class="arti-hero-badge inline-flex items-center gap-2 rounded-full border border-red-500/30 bg-red-600/10 px-4 py-2 backdrop-blur-sm">

                        <span class="h-2 w-2 animate-pulse rounded-full bg-red-500"></span>

                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-red-400">
                            Nos services
                        </span>

                    </div>


                    <h1
                        class="arti-hero-title mt-6 text-4xl font-extrabold leading-[1.08] tracking-tight sm:text-5xl lg:text-6xl">

                        Des solutions de relation client

                        <span class="text-red-500">
                            pensées pour votre activité.
                        </span>

                    </h1>


                    <p class="arti-hero-description mt-6 max-w-2xl text-lg leading-8 text-slate-200">

                        ARTI CALL accompagne les entreprises depuis Fès, Maroc,
                        avec des solutions Inbound, Outbound et complémentaires
                        adaptées à leurs objectifs.

                    </p>


                    <div class="arti-hero-buttons mt-8 flex flex-col gap-3 sm:flex-row">

                        <a href="{{ url('/contact') }}"
                            class="arti-hero-main-btn group inline-flex items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-red-600/20 transition duration-300 hover:-translate-y-1 hover:bg-red-700 hover:shadow-xl hover:shadow-red-600/30">

                            <span class="relative z-10">
                                Demander un devis
                            </span>

                            <i data-lucide="arrow-right"
                                class="relative z-10 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                            </i>

                        </a>


                        <a href="#inbound"
                            class="group inline-flex items-center justify-center gap-2 rounded-xl border border-white/20 bg-white/5 px-6 py-3.5 text-sm font-bold text-white backdrop-blur-sm transition duration-300 hover:-translate-y-1 hover:bg-white/10">

                            <span>
                                Découvrir nos services
                            </span>

                            <i data-lucide="arrow-down"
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-y-1">
                            </i>

                        </a>

                    </div>

                </div>


                {{-- =================================================
                    HERO RIGHT
                ================================================== --}}

                <div class="arti-hero-right lg:col-span-5">

                    <div
                        class="arti-hero-panel rounded-3xl border border-white/10 bg-slate-950/55 p-6 shadow-2xl shadow-black/30 backdrop-blur-md sm:p-8">

                        <p class="text-sm font-semibold text-slate-300">
                            Une offre structurée
                        </p>

                        <h2 class="mt-2 text-2xl font-bold text-white">
                            Du premier appel au développement commercial.
                        </h2>


                        <div class="mt-7 space-y-4">

                            @foreach ($categories as $cat)
                                <a href="#{{ $cat['id'] }}"
                                    class="arti-hero-service-item group flex items-center gap-4 rounded-2xl border border-white/10 bg-white/5 p-4 transition duration-300 hover:-translate-y-1 hover:border-red-500/50 hover:bg-red-600/10">

                                    <div
                                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-600 transition duration-300 group-hover:scale-105 group-hover:rotate-3">

                                        <i data-lucide="{{ $cat['icon'] }}" class="h-5 w-5 text-white"></i>

                                    </div>

                                    <div class="min-w-0">

                                        <div class="text-sm font-bold text-white">
                                            {{ $cat['title'] }}
                                        </div>

                                        <div class="mt-1 text-xs text-slate-400">
                                            {{ count($cat['services']) }} prestations
                                        </div>

                                    </div>

                                    <i data-lucide="arrow-up-right"
                                        class="ml-auto h-4 w-4 text-slate-500 transition duration-300 group-hover:translate-x-1 group-hover:-translate-y-1 group-hover:text-red-400">
                                    </i>

                                </a>
                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    INTRO
    ========================================================== --}}

    <section class="bg-white py-16 lg:py-20">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 items-end gap-10 lg:grid-cols-2 lg:gap-20">

                <div>

                    <span class="text-sm font-bold uppercase tracking-[0.16em] text-red-600">
                        Une offre complète
                    </span>

                    <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                        Des services adaptés à chaque étape de votre relation client
                    </h2>

                </div>

                <p class="text-base leading-8 text-slate-600 sm:text-lg">

                    Que vous cherchiez à mieux gérer vos appels entrants,
                    développer votre prospection ou renforcer vos opérations
                    de support, nos services peuvent être organisés selon
                    vos besoins et vos objectifs.

                </p>

            </div>

            <div class="relative mt-12 h-px bg-slate-200">

                <div class="absolute left-0 top-0 h-px w-24 bg-red-600"></div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    SERVICES
    ========================================================== --}}

    @foreach ($categories as $cat)
        <section id="{{ $cat['id'] }}"
            class="scroll-mt-24 {{ $loop->index === 1 ? 'bg-slate-50' : 'bg-white' }} py-20 lg:py-24">

            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                <div class="grid grid-cols-1 items-end gap-8 lg:grid-cols-12">

                    <div class="lg:col-span-8">

                        <div class="flex items-center gap-4">

                            <span
                                class="flex h-12 w-12 items-center justify-center rounded-2xl bg-red-600 text-sm font-extrabold text-white shadow-lg shadow-red-600/15">
                                {{ $cat['number'] }}
                            </span>

                            <div>

                                <span class="text-xs font-bold uppercase tracking-[0.18em] text-red-600">
                                    {{ $cat['eyebrow'] }}
                                </span>

                                <h2 class="mt-1 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                                    {{ $cat['title'] }}
                                </h2>

                            </div>

                        </div>

                        <p class="mt-5 max-w-3xl text-base leading-8 text-slate-600 sm:text-lg">
                            {{ $cat['intro'] }}
                        </p>

                    </div>

                    <div class="lg:col-span-4 lg:text-right">

                        <span
                            class="inline-flex items-center gap-2 rounded-full border border-red-100 bg-red-50 px-4 py-2 text-sm font-semibold text-red-700">

                            <span class="h-2 w-2 rounded-full bg-red-600"></span>

                            {{ count($cat['services']) }} services disponibles

                        </span>

                    </div>

                </div>

                <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

                    @foreach ($cat['services'] as $service)
                        {{-- =====================================================
                        SERVICE CARD COMPLÈTE CLIQUABLE
                        ====================================================== --}}

                        <a href="{{ route('services.show', $service['slug']) }}"
                            class="group relative flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-red-200 hover:shadow-xl hover:shadow-slate-200/60">

                            <div
                                class="absolute left-0 right-0 top-0 h-1 origin-left scale-x-0 bg-red-600 transition-transform duration-300 group-hover:scale-x-100">
                            </div>

                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-2xl bg-red-50 text-red-600 transition group-hover:bg-red-600 group-hover:text-white">

                                <i data-lucide="{{ $service['icon'] }}" class="h-6 w-6"></i>

                            </div>

                            <h3 class="mt-6 text-xl font-bold text-slate-900">
                                {{ $service['title'] }}
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-slate-600">
                                {{ $service['text'] }}
                            </p>

                            <ul class="mt-6 space-y-3">

                                @foreach ($service['benefits'] as $benefit)
                                    <li class="flex items-start gap-3 text-sm text-slate-700">

                                        <span
                                            class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-red-50">

                                            <i data-lucide="check" class="h-3 w-3 text-red-600"></i>

                                        </span>

                                        <span>
                                            {{ $benefit }}
                                        </span>

                                    </li>
                                @endforeach

                            </ul>

                            {{-- Lien visuel uniquement : toute la carte est clickable --}}
                            <div class="mt-auto flex items-center gap-2 pt-7 text-sm font-bold text-red-600">

                                <span>
                                    Découvrir ce service
                                </span>

                                <i data-lucide="arrow-right"
                                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"></i>

                            </div>

                        </a>
                    @endforeach

                </div>

            </div>

        </section>
    @endforeach


    {{-- =========================================================
    WHY ARTI CALL
    ========================================================== --}}

    <section class="bg-slate-950 py-20 text-white lg:py-24">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2 lg:gap-20">

                <div>

                    <span class="text-sm font-bold uppercase tracking-[0.16em] text-red-500">
                        Pourquoi ARTI CALL ?
                    </span>

                    <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">
                        Une équipe qui s'intègre à votre organisation
                    </h2>

                    <p class="mt-5 text-base leading-8 text-slate-300">

                        Nous construisons chaque campagne autour de vos objectifs,
                        de vos procédures et de votre manière de communiquer avec
                        vos clients et prospects.

                    </p>

                    <a href="{{ url('/contact') }}"
                        class="mt-8 inline-flex items-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white transition hover:bg-red-700">

                        <span>
                            Parler de votre projet
                        </span>

                        <i data-lucide="arrow-right" class="h-4 w-4"></i>

                    </a>

                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                    <div class="rounded-2xl border border-white/10 bg-white/5 p-6">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-600">

                            <i data-lucide="users" class="h-5 w-5 text-white"></i>

                        </div>

                        <h3 class="mt-5 text-lg font-bold">
                            Équipe professionnelle
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-400">
                            Des agents préparés aux objectifs et aux procédures de chaque campagne.
                        </p>

                    </div>

                    <div class="rounded-2xl border border-white/10 bg-white/5 p-6">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-600">

                            <i data-lucide="map-pin" class="h-5 w-5 text-white"></i>

                        </div>

                        <h3 class="mt-5 text-lg font-bold">
                            Basée à Fès
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-400">
                            Une implantation à Fès, au Maroc, au service de vos opérations.
                        </p>

                    </div>

                    <div class="rounded-2xl border border-white/10 bg-white/5 p-6">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-600">

                            <i data-lucide="sliders-horizontal" class="h-5 w-5 text-white"></i>

                        </div>

                        <h3 class="mt-5 text-lg font-bold">
                            Solutions personnalisées
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-400">
                            Des campagnes organisées selon vos besoins et vos objectifs.
                        </p>

                    </div>

                    <div class="rounded-2xl border border-white/10 bg-white/5 p-6">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-600">

                            <i data-lucide="bar-chart-3" class="h-5 w-5 text-white"></i>

                        </div>

                        <h3 class="mt-5 text-lg font-bold">
                            Suivi des campagnes
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-400">
                            Un suivi structuré pour garder une vision claire des opérations.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    FINAL CTA
    ========================================================== --}}

    <section class="bg-white py-20">

        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-3xl bg-red-600 px-6 py-12 text-center sm:px-10 lg:px-14">

                <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-white/10"></div>

                <div class="absolute -bottom-28 -left-24 h-80 w-80 rounded-full bg-white/10"></div>

                <div class="relative z-10">

                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-white/15 px-4 py-2 text-xs font-bold uppercase tracking-wider text-white">

                        <span class="h-2 w-2 rounded-full bg-white"></span>

                        Parlons de votre projet

                    </span>

                    <h2 class="mt-5 text-3xl font-extrabold text-white sm:text-4xl">
                        Vous avez un besoin en relation client ?
                    </h2>

                    <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-white/85">

                        Présentez-nous votre besoin et échangeons sur une solution
                        adaptée à votre activité.

                    </p>

                    <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">

                        <a href="{{ url('/contact') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3.5 text-sm font-bold text-red-600 transition hover:bg-slate-100">

                            <span>
                                Demander un devis
                            </span>

                            <i data-lucide="arrow-right" class="h-4 w-4"></i>

                        </a>

                        <a href="{{ url('/') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/40 bg-white/10 px-6 py-3.5 text-sm font-bold text-white transition hover:bg-white/20">

                            <span>
                                Retour à l'accueil
                            </span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
