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
                        CALL CENTER PHOTO - HERO
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

            @keyframes services-bg-zoom {
                0% {
                    transform: scale(1);
                }

                100% {
                    transform: scale(1.06);
                }
            }

            /* Accessibilité : stoppe l'animation si l'utilisateur le préfère */
            @media (prefers-reduced-motion: reduce) {
                .arti-services-bg {
                    animation: none;
                }
            }
        </style>
    @endpush

    {{-- =========================================================
HERO
========================================================= --}}

    <section class="relative isolate overflow-hidden bg-slate-950 text-white">

        {{-- Background photo call center animée --}}
        <div class="arti-services-bg absolute inset-0 -z-20"></div>

        {{-- Dark overlay --}}
        <div class="absolute inset-0 -z-10 bg-slate-950/75"></div>

        {{-- Gradient overlay --}}
        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-slate-950 via-slate-950/85 to-slate-950/50"></div>

        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-slate-950 via-transparent to-slate-950/30"></div>

        {{-- Red atmosphere --}}
        <div class="absolute -right-32 -top-32 -z-10 h-96 w-96 rounded-full bg-red-600/20 blur-3xl"></div>

        <div class="absolute -left-40 bottom-0 -z-10 h-96 w-96 rounded-full bg-red-600/10 blur-3xl"></div>


        <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">

            <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12 lg:gap-16">

                {{-- Hero left --}}
                <div class="lg:col-span-7">

                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-red-500/30 bg-red-600/10 px-4 py-2 backdrop-blur-sm">

                        <span class="h-2 w-2 rounded-full bg-red-500"></span>

                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-red-400">
                            Nos services
                        </span>

                    </div>


                    <h1 class="mt-6 text-4xl font-extrabold leading-[1.08] tracking-tight sm:text-5xl lg:text-6xl">

                        Des solutions de relation client

                        <span class="text-red-500">
                            pensées pour votre activité.
                        </span>

                    </h1>


                    <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-200">

                        ARTI CALL accompagne les entreprises depuis Fès, Maroc,
                        avec des solutions Inbound, Outbound et complémentaires
                        adaptées à leurs objectifs.

                    </p>


                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                        <a href="{{ url('/contact') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-red-600/20 transition hover:bg-red-700">

                            <span>
                                Demander un devis
                            </span>

                            <i data-lucide="arrow-right" class="h-4 w-4"></i>

                        </a>


                        <a href="#inbound"
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/20 bg-white/5 px-6 py-3.5 text-sm font-bold text-white backdrop-blur-sm transition hover:bg-white/10">

                            <span>
                                Découvrir nos services
                            </span>

                            <i data-lucide="arrow-down" class="h-4 w-4"></i>

                        </a>

                    </div>

                </div>


                {{-- Hero right --}}
                <div class="lg:col-span-5">

                    <div
                        class="rounded-3xl border border-white/10 bg-slate-950/55 p-6 shadow-2xl shadow-black/30 backdrop-blur-md sm:p-8">

                        <p class="text-sm font-semibold text-slate-300">
                            Une offre structurée
                        </p>

                        <h2 class="mt-2 text-2xl font-bold text-white">
                            Du premier appel au développement commercial.
                        </h2>


                        <div class="mt-7 space-y-4">

                            @foreach ($categories as $cat)
                                <a href="#{{ $cat['id'] }}"
                                    class="group flex items-center gap-4 rounded-2xl border border-white/10 bg-white/5 p-4 transition hover:border-red-500/50 hover:bg-red-600/10">

                                    <div
                                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-600 transition group-hover:scale-105">

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
                                        class="ml-auto h-4 w-4 text-slate-500 transition group-hover:text-red-400"></i>

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
========================================================= --}}

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
========================================================= --}}
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
                        <article
                            class="group relative flex flex-col overflow-hidden rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-red-200 hover:shadow-xl hover:shadow-slate-200/60">

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


                            <div class="mt-auto pt-7">

                                <a href="{{ url('/contact') }}?service={{ $service['slug'] }}"
                                    class="group/link inline-flex items-center gap-2 text-sm font-bold text-red-600">

                                    <span>
                                        Demander un devis
                                    </span>

                                    <i data-lucide="arrow-right"
                                        class="h-4 w-4 transition-transform group-hover/link:translate-x-1"></i>

                                </a>

                            </div>

                        </article>
                    @endforeach

                </div>

            </div>

        </section>
    @endforeach

    {{-- =========================================================
WHY ARTI CALL
========================================================= --}}

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
========================================================= --}}

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
