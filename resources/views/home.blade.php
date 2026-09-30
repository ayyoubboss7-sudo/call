```blade
@extends('layouts.app')

@section('title', 'ARTI CALL - Centre d’appel à Fès, Maroc')

@section('meta_description',
    'ARTI CALL est un centre d’appel basé à Fès, Maroc, spécialisé dans la relation client, la
    téléprospection, le télémarketing et le développement commercial.')

@section('content')

    {{-- =========================================================
    HERO
    ========================================================= --}}
    <section class="arti-hero relative isolate overflow-hidden bg-slate-950 text-white">

        {{-- Background --}}
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-[#111827] to-black"></div>

        <div
            class="arti-glow arti-glow-red absolute -right-40 -top-40 h-[500px] w-[500px] rounded-full bg-red-600/10 blur-[120px]">
        </div>

        <div
            class="arti-glow arti-glow-red-2 absolute -bottom-40 -left-40 h-[500px] w-[500px] rounded-full bg-red-700/10 blur-[120px]">
        </div>

        {{-- Smoke --}}
        <div class="arti-smoke arti-smoke-1"></div>
        <div class="arti-smoke arti-smoke-2"></div>
        <div class="arti-smoke arti-smoke-3"></div>

        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(220,38,38,0.08),transparent_55%)]"></div>

        {{-- Decorative --}}
        <div class="arti-orbit absolute right-[-120px] top-[-120px] h-[360px] w-[360px] rounded-full border border-white/5">
        </div>

        <div
            class="arti-orbit arti-orbit-delay absolute right-[-70px] top-[-70px] h-[260px] w-[260px] rounded-full border border-red-500/10">
        </div>

        <div class="arti-particle absolute left-[10%] top-[20%] h-1 w-1 rounded-full bg-white/30"></div>

        <div class="arti-particle arti-particle-2 absolute right-[20%] top-[30%] h-1.5 w-1.5 rounded-full bg-red-400/40">
        </div>

        <div class="arti-particle arti-particle-3 absolute bottom-[20%] left-[18%] h-1 w-1 rounded-full bg-white/20">
        </div>

        <div class="arti-particle arti-particle-4 absolute left-[35%] top-[15%] h-1 w-1 rounded-full bg-red-400/30">
        </div>

        <div class="arti-particle arti-particle-5 absolute bottom-[18%] right-[35%] h-1 w-1 rounded-full bg-white/20">
        </div>

        <div class="arti-particle arti-particle-6 absolute right-[8%] top-[55%] h-1.5 w-1.5 rounded-full bg-red-500/30">
        </div>


        {{-- Content --}}
        <div class="relative z-10 mx-auto max-w-7xl px-4 pb-12 sm:px-6 sm:pb-16 lg:px-8 lg:pb-20">

            <div class="grid items-center gap-16 py-20 sm:py-24 lg:grid-cols-2 lg:gap-20 lg:py-28">

                {{-- LEFT --}}
                <div class="arti-reveal arti-reveal-left max-w-2xl">

                    <div
                        class="arti-badge inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 backdrop-blur-sm">

                        <span class="h-2 w-2 animate-pulse rounded-full bg-red-500"></span>

                        <span class="text-xs font-bold uppercase tracking-wider text-red-400 sm:text-sm">
                            Centre d'appel à Fès, Maroc
                        </span>

                    </div>


                    <h1 class="mt-7 text-4xl font-black leading-[1.08] tracking-tight sm:text-5xl lg:text-6xl">

                        Votre partenaire pour une

                        <span class="arti-title-red inline-block text-red-500">
                            relation client
                        </span>

                        performante.

                    </h1>


                    <p class="mt-7 max-w-xl text-base leading-8 text-slate-300 sm:text-lg">

                        ARTI CALL accompagne les entreprises dans leur relation client,
                        leur prospection commerciale et leurs opérations à distance
                        avec une approche professionnelle et adaptée à leurs objectifs.

                    </p>


                    <div class="mt-9 flex flex-col gap-3 sm:flex-row">

                        <a href="{{ url('/contact') }}"
                            class="arti-btn-primary inline-flex items-center justify-center gap-2 rounded-xl bg-red-600 px-7 py-4 text-sm font-bold text-white shadow-lg shadow-red-600/20 transition duration-300 hover:-translate-y-1 hover:bg-red-700 hover:shadow-red-600/30">

                            Demander un devis

                            <i data-lucide="arrow-up-right" class="h-4 w-4 transition-transform duration-300">
                            </i>

                        </a>


                        <a href="{{ url('/services') }}"
                            class="arti-btn-secondary inline-flex items-center justify-center gap-2 rounded-xl border border-white/15 bg-white/5 px-7 py-4 text-sm font-bold text-white backdrop-blur-sm transition duration-300 hover:-translate-y-1 hover:border-red-500/40 hover:bg-white/10">

                            Découvrir nos services

                            <i data-lucide="arrow-right" class="h-4 w-4 transition-transform duration-300">
                            </i>

                        </a>

                    </div>


                    {{-- Trust --}}
                    <div class="mt-10 grid gap-3 sm:grid-cols-3">

                        <div class="arti-trust flex items-center gap-2 text-sm text-slate-300">

                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-red-500/10">

                                <i data-lucide="check" class="h-3 w-3 text-red-400">
                                </i>

                            </span>

                            Équipe professionnelle

                        </div>


                        <div class="arti-trust flex items-center gap-2 text-sm text-slate-300">

                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-red-500/10">

                                <i data-lucide="check" class="h-3 w-3 text-red-400">
                                </i>

                            </span>

                            Solutions personnalisées

                        </div>


                        <div class="arti-trust flex items-center gap-2 text-sm text-slate-300">

                            <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-red-500/10">

                                <i data-lucide="check" class="h-3 w-3 text-red-400">
                                </i>

                            </span>

                            Approche orientée résultats

                        </div>

                    </div>

                </div>


                {{-- RIGHT --}}
                <div class="arti-reveal arti-reveal-right relative mx-auto w-full max-w-xl lg:mx-0 lg:ml-auto">

                    <div
                        class="arti-main-card rounded-[2rem] border border-white/10 bg-white/[0.03] p-3 shadow-2xl backdrop-blur-xl">

                        <div class="relative overflow-hidden rounded-[1.6rem] border border-white/10 bg-slate-900/80">

                            {{-- Card glow --}}
                            <div
                                class="arti-card-glow absolute -right-32 -top-32 h-80 w-80 rounded-full bg-red-600/20 blur-[90px]">
                            </div>

                            <div
                                class="arti-card-glow arti-card-glow-2 absolute -bottom-32 -left-32 h-80 w-80 rounded-full bg-red-600/10 blur-[90px]">
                            </div>


                            <div class="relative z-10 p-6 sm:p-9">

                                {{-- Header --}}
                                <div class="flex items-center justify-between gap-4">

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="arti-icon-box flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-600">

                                            <i data-lucide="headphones" class="h-5 w-5 text-white">
                                            </i>

                                        </div>

                                        <div>

                                            <div class="text-sm font-bold text-white">
                                                ARTI CALL
                                            </div>

                                            <div class="text-xs text-slate-500">
                                                Relation client & développement
                                            </div>

                                        </div>

                                    </div>


                                    <div
                                        class="flex shrink-0 items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1.5">

                                        <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-green-400">
                                        </span>

                                        <span class="text-xs font-semibold text-slate-300">
                                            Disponible
                                        </span>

                                    </div>

                                </div>


                                {{-- Main --}}
                                <div class="mt-12 text-center">

                                    <div
                                        class="arti-phone-float arti-phone-pulse mx-auto flex h-28 w-28 items-center justify-center rounded-[2rem] bg-red-600 shadow-2xl shadow-red-600/30">

                                        <i data-lucide="phone-call" class="h-12 w-12 text-white">
                                        </i>

                                    </div>


                                    <p class="mt-7 text-xs font-bold uppercase tracking-[0.25em] text-red-400">
                                        Votre relation client
                                    </p>


                                    <h2 class="mt-3 text-2xl font-black text-white sm:text-3xl">
                                        Une équipe à votre écoute
                                    </h2>


                                    <p class="mx-auto mt-4 max-w-md text-sm leading-7 text-slate-400">

                                        Des solutions professionnelles pour accompagner
                                        vos clients et soutenir vos objectifs commerciaux.

                                    </p>

                                </div>


                                {{-- Mini services --}}
                                <div class="mt-10 grid grid-cols-3 gap-2 sm:gap-3">

                                    <div
                                        class="arti-mini-card rounded-2xl border border-white/10 bg-white/5 p-3 text-center transition hover:border-red-500/20 hover:bg-white/10 sm:p-4">

                                        <i data-lucide="phone-incoming" class="mx-auto h-5 w-5 text-red-400">
                                        </i>

                                        <div class="mt-3 text-xs font-bold text-white">
                                            Inbound
                                        </div>

                                        <div class="mt-1 text-[10px] text-slate-500 sm:text-[11px]">
                                            Service client
                                        </div>

                                    </div>


                                    <div
                                        class="arti-mini-card rounded-2xl border border-white/10 bg-white/5 p-3 text-center transition hover:border-red-500/20 hover:bg-white/10 sm:p-4">

                                        <i data-lucide="phone-outgoing" class="mx-auto h-5 w-5 text-red-400">
                                        </i>

                                        <div class="mt-3 text-xs font-bold text-white">
                                            Outbound
                                        </div>

                                        <div class="mt-1 text-[10px] text-slate-500 sm:text-[11px]">
                                            Prospection
                                        </div>

                                    </div>


                                    <div
                                        class="arti-mini-card rounded-2xl border border-white/10 bg-white/5 p-3 text-center transition hover:border-red-500/20 hover:bg-white/10 sm:p-4">

                                        <i data-lucide="target" class="mx-auto h-5 w-5 text-red-400">
                                        </i>

                                        <div class="mt-3 text-xs font-bold text-white">
                                            Leads
                                        </div>

                                        <div class="mt-1 text-[10px] text-slate-500 sm:text-[11px]">
                                            Qualification
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Location --}}
                    <div
                        class="arti-location relative z-20 mt-4 flex w-fit items-center gap-3 rounded-2xl border border-white/10 bg-slate-950 px-5 py-4 shadow-xl sm:absolute sm:-bottom-7 sm:-left-7 sm:mt-0">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-red-500/10">

                            <i data-lucide="map-pin" class="h-5 w-5 text-red-500">
                            </i>

                        </div>

                        <div>

                            <div class="text-xs text-slate-500">
                                Notre implantation
                            </div>

                            <div class="text-sm font-bold text-white">
                                Fès, Maroc
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    INTRO
    ========================================================= --}}
    <section class="arti-section-reveal relative z-10 bg-slate-950">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-3">

                <div class="arti-intro-card border-b border-white/10 px-6 py-10 lg:border-b-0 lg:border-r lg:px-10">

                    <div class="arti-section-icon flex h-12 w-12 items-center justify-center rounded-xl bg-red-500/10">

                        <i data-lucide="users" class="h-6 w-6 text-red-500">
                        </i>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-white">
                        Relation client
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        Une prise en charge professionnelle de vos clients
                        et de leurs demandes.
                    </p>

                </div>


                <div class="arti-intro-card border-b border-white/10 px-6 py-10 lg:border-b-0 lg:border-r lg:px-10">

                    <div class="arti-section-icon flex h-12 w-12 items-center justify-center rounded-xl bg-red-500/10">

                        <i data-lucide="target" class="h-6 w-6 text-red-500">
                        </i>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-white">
                        Développement commercial
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        Des campagnes de prospection et de qualification
                        adaptées à vos objectifs.
                    </p>

                </div>


                <div class="arti-intro-card px-6 py-10 lg:px-10">

                    <div class="arti-section-icon flex h-12 w-12 items-center justify-center rounded-xl bg-red-500/10">

                        <i data-lucide="settings-2" class="h-6 w-6 text-red-500">
                        </i>

                    </div>

                    <h3 class="mt-5 text-lg font-bold text-white">
                        Solutions personnalisées
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        Une approche construite autour de vos besoins
                        et de votre organisation.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    ABOUT
    ========================================================= --}}
    <section class="arti-section-reveal relative z-10 bg-white py-20 sm:py-24 lg:py-28">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid items-center gap-16 lg:grid-cols-2 lg:gap-20">

                {{-- Card --}}
                <div class="arti-about-card relative">

                    <div class="rounded-[2rem] bg-red-600 p-2 sm:p-3">

                        <div class="rounded-[1.6rem] bg-white p-7 sm:p-10">

                            <div class="flex items-center justify-between">

                                <div
                                    class="arti-section-icon flex h-14 w-14 items-center justify-center rounded-2xl bg-red-50">

                                    <i data-lucide="building-2" class="h-7 w-7 text-red-600">
                                    </i>

                                </div>

                                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">
                                    ARTI CALL
                                </span>

                            </div>


                            <h3 class="mt-8 text-2xl font-black text-slate-950 sm:text-3xl">
                                Une équipe basée à Fès
                            </h3>


                            <p class="mt-4 leading-7 text-slate-600">

                                ARTI CALL accompagne les entreprises dans leurs
                                opérations de relation client et de développement
                                commercial à distance.

                            </p>


                            <div class="mt-8 space-y-4">

                                <div class="arti-check-row flex items-start gap-3">

                                    <span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-red-100">

                                        <i data-lucide="check" class="h-3.5 w-3.5 text-red-600">
                                        </i>

                                    </span>

                                    <span class="text-sm text-slate-600">
                                        Communication professionnelle
                                    </span>

                                </div>


                                <div class="arti-check-row flex items-start gap-3">

                                    <span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-red-100">

                                        <i data-lucide="check" class="h-3.5 w-3.5 text-red-600">
                                        </i>

                                    </span>

                                    <span class="text-sm text-slate-600">
                                        Processus adaptés à vos besoins
                                    </span>

                                </div>


                                <div class="arti-check-row flex items-start gap-3">

                                    <span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-red-100">

                                        <i data-lucide="check" class="h-3.5 w-3.5 text-red-600">
                                        </i>

                                    </span>

                                    <span class="text-sm text-slate-600">
                                        Suivi structuré des opérations
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div
                        class="relative z-20 mt-4 flex w-fit items-center gap-3 rounded-2xl bg-slate-950 px-5 py-4 shadow-xl sm:absolute sm:-bottom-6 sm:-right-6 sm:mt-0">

                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-red-600">

                            <i data-lucide="map-pin" class="h-5 w-5 text-white">
                            </i>

                        </div>

                        <div>

                            <div class="text-xs text-slate-400">
                                Localisation
                            </div>

                            <div class="text-sm font-bold text-white">
                                Fès, Maroc
                            </div>

                        </div>

                    </div>

                </div>


                {{-- Text --}}
                <div class="arti-reveal">

                    <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                        À propos d'ARTI CALL
                    </span>

                    <h2 class="mt-4 text-3xl font-black leading-tight text-slate-950 sm:text-4xl lg:text-5xl">
                        Une approche professionnelle de la relation client
                    </h2>

                    <p class="mt-6 text-lg leading-8 text-slate-600">

                        Nous accompagnons les entreprises qui souhaitent améliorer
                        leur relation avec leurs clients, développer leur activité
                        commerciale ou externaliser certaines opérations à distance.

                    </p>

                    <p class="mt-5 leading-7 text-slate-600">

                        Notre approche repose sur l'écoute, la préparation,
                        la qualité des échanges et l'adaptation des opérations
                        aux objectifs définis avec chaque entreprise.

                    </p>

                    <a href="{{ url('/a-propos') }}"
                        class="arti-btn-primary mt-8 inline-flex items-center gap-2 rounded-xl bg-slate-950 px-6 py-3.5 text-sm font-bold text-white transition hover:-translate-y-1 hover:bg-red-600">

                        Découvrir ARTI CALL

                        <i data-lucide="arrow-right" class="h-4 w-4 transition-transform duration-300">
                        </i>

                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    SERVICES
    ========================================================= --}}
    <section class="arti-section-reveal relative z-10 bg-slate-50 py-20 sm:py-24 lg:py-28">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="arti-reveal max-w-3xl">

                <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                    Nos services
                </span>

                <h2 class="mt-4 text-3xl font-black text-slate-950 sm:text-4xl lg:text-5xl">
                    Des solutions conçues pour vos objectifs
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600">
                    De la gestion des appels entrants à la prospection commerciale,
                    ARTI CALL vous accompagne avec des solutions adaptées à votre activité.
                </p>

            </div>


            <div class="mt-12 grid gap-6 lg:grid-cols-2">

                {{-- INBOUND --}}
                <div
                    class="arti-service-card group rounded-[2rem] border border-slate-200 bg-white p-7 shadow-sm transition duration-500 hover:-translate-y-2 hover:border-red-200 hover:shadow-2xl sm:p-9">

                    <div class="flex items-center justify-between">

                        <div class="arti-section-icon flex h-14 w-14 items-center justify-center rounded-2xl bg-red-50">

                            <i data-lucide="phone-incoming" class="h-7 w-7 text-red-600">
                            </i>

                        </div>

                        <span class="rounded-full bg-red-50 px-3 py-1.5 text-xs font-bold text-red-600">
                            INBOUND
                        </span>

                    </div>


                    <h3 class="mt-7 text-2xl font-black text-slate-950">
                        Relation client & services entrants
                    </h3>

                    <p class="mt-4 leading-7 text-slate-600">
                        Nous vous accompagnons dans la gestion des appels,
                        demandes et interactions avec vos clients.
                    </p>


                    <div class="mt-7 grid gap-3 sm:grid-cols-2">

                        @foreach (['Réception d’appels', 'Service client', 'Assistance téléphonique', 'Prise de rendez-vous', 'Gestion des demandes', 'Support après-vente'] as $service)
                            <div class="arti-list-item flex items-center gap-2 text-sm text-slate-600">

                                <i data-lucide="check" class="h-4 w-4 shrink-0 text-red-600">
                                </i>

                                {{ $service }}

                            </div>
                        @endforeach

                    </div>


                    <a href="{{ url('/services') }}"
                        class="mt-8 inline-flex items-center gap-2 text-sm font-bold text-red-600">

                        Découvrir les services Inbound

                        <i data-lucide="arrow-right" class="h-4 w-4 transition-transform duration-300">
                        </i>

                    </a>

                </div>


                {{-- OUTBOUND --}}
                <div
                    class="arti-service-card group relative overflow-hidden rounded-[2rem] bg-slate-950 p-7 shadow-xl transition duration-500 hover:-translate-y-2 hover:shadow-2xl sm:p-9">

                    <div
                        class="arti-card-glow absolute -right-20 -top-20 h-60 w-60 rounded-full bg-red-600/10 blur-[70px]">
                    </div>

                    <div class="relative z-10">

                        <div class="flex items-center justify-between">

                            <div
                                class="arti-section-icon flex h-14 w-14 items-center justify-center rounded-2xl bg-red-600">

                                <i data-lucide="phone-outgoing" class="h-7 w-7 text-white">
                                </i>

                            </div>

                            <span class="rounded-full bg-white/10 px-3 py-1.5 text-xs font-bold text-red-400">
                                OUTBOUND
                            </span>

                        </div>


                        <h3 class="mt-7 text-2xl font-black text-white">
                            Prospection & développement commercial
                        </h3>

                        <p class="mt-4 leading-7 text-slate-400">
                            Nous vous accompagnons dans vos campagnes de prospection,
                            de qualification et de développement commercial.
                        </p>


                        <div class="mt-7 grid gap-3 sm:grid-cols-2">

                            @foreach (['Téléprospection', 'Télémarketing', 'Télévente', 'Génération de leads', 'Qualification', 'Prise de rendez-vous'] as $service)
                                <div class="arti-list-item flex items-center gap-2 text-sm text-slate-300">

                                    <i data-lucide="check" class="h-4 w-4 shrink-0 text-red-500">
                                    </i>

                                    {{ $service }}

                                </div>
                            @endforeach

                        </div>


                        <a href="{{ url('/services') }}"
                            class="mt-8 inline-flex items-center gap-2 text-sm font-bold text-red-500">

                            Découvrir les services Outbound

                            <i data-lucide="arrow-right" class="h-4 w-4 transition-transform duration-300">
                            </i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    WHY ARTI CALL
    ========================================================= --}}
    <section class="arti-section-reveal relative z-10 bg-white py-20 sm:py-24 lg:py-28">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid items-center gap-16 lg:grid-cols-2 lg:gap-20">

                <div class="arti-reveal">

                    <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                        Pourquoi ARTI CALL ?
                    </span>

                    <h2 class="mt-4 text-3xl font-black leading-tight text-slate-950 sm:text-4xl lg:text-5xl">
                        Un partenaire qui comprend vos enjeux
                    </h2>

                    <p class="mt-6 text-lg leading-8 text-slate-600">
                        Nous construisons notre approche autour de vos besoins,
                        de votre cible et des objectifs de votre opération.
                    </p>


                    <div class="mt-10 space-y-7">

                        <div class="arti-feature flex gap-4">

                            <div
                                class="arti-feature-icon flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-50">

                                <i data-lucide="users" class="h-5 w-5 text-red-600">
                                </i>

                            </div>

                            <div>

                                <h3 class="font-bold text-slate-950">
                                    Une équipe professionnelle
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    Des collaborateurs préparés aux spécificités
                                    de vos opérations.
                                </p>

                            </div>

                        </div>


                        <div class="arti-feature flex gap-4">

                            <div
                                class="arti-feature-icon flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-50">

                                <i data-lucide="settings-2" class="h-5 w-5 text-red-600">
                                </i>

                            </div>

                            <div>

                                <h3 class="font-bold text-slate-950">
                                    Des solutions personnalisées
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    Une organisation adaptée aux besoins de votre campagne.
                                </p>

                            </div>

                        </div>


                        <div class="arti-feature flex gap-4">

                            <div
                                class="arti-feature-icon flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-50">

                                <i data-lucide="bar-chart-3" class="h-5 w-5 text-red-600">
                                </i>

                            </div>

                            <div>

                                <h3 class="font-bold text-slate-950">
                                    Un suivi structuré
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    Des opérations suivies afin d'identifier les
                                    axes d'amélioration.
                                </p>

                            </div>

                        </div>


                        <div class="arti-feature flex gap-4">

                            <div
                                class="arti-feature-icon flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-50">

                                <i data-lucide="shield-check" class="h-5 w-5 text-red-600">
                                </i>

                            </div>

                            <div>

                                <h3 class="font-bold text-slate-950">
                                    Une attention à la confidentialité
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-600">
                                    Les informations confiées sont traitées avec
                                    sérieux et conformément aux règles applicables.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Engagement --}}
                <div class="arti-engagement relative overflow-hidden rounded-[2rem] bg-slate-950 p-7 sm:p-10">

                    <div
                        class="arti-card-glow absolute -right-24 -top-24 h-72 w-72 rounded-full bg-red-600/15 blur-[80px]">
                    </div>

                    <div class="relative z-10">

                        <div class="flex items-center gap-4">

                            <div
                                class="arti-section-icon flex h-14 w-14 items-center justify-center rounded-2xl bg-red-600">

                                <i data-lucide="award" class="h-7 w-7 text-white">
                                </i>

                            </div>

                            <div>

                                <span class="text-xs font-bold uppercase tracking-widest text-red-400">
                                    Notre engagement
                                </span>

                                <h3 class="mt-1 text-xl font-black text-white">
                                    Qualité & professionnalisme
                                </h3>

                            </div>

                        </div>


                        <div class="mt-9 space-y-4">

                            <div class="arti-dark-item rounded-2xl border border-white/10 bg-white/5 p-5">

                                <div class="flex gap-4">

                                    <i data-lucide="check-circle-2" class="mt-0.5 h-5 w-5 shrink-0 text-red-500">
                                    </i>

                                    <div>

                                        <h4 class="font-bold text-white">
                                            Qualité des échanges
                                        </h4>

                                        <p class="mt-1 text-sm leading-6 text-slate-400">
                                            Une attention portée à chaque interaction
                                            avec vos clients et prospects.
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <div class="arti-dark-item rounded-2xl border border-white/10 bg-white/5 p-5">

                                <div class="flex gap-4">

                                    <i data-lucide="check-circle-2" class="mt-0.5 h-5 w-5 shrink-0 text-red-500">
                                    </i>

                                    <div>

                                        <h4 class="font-bold text-white">
                                            Flexibilité
                                        </h4>

                                        <p class="mt-1 text-sm leading-6 text-slate-400">
                                            Une organisation pouvant évoluer selon
                                            les besoins de votre opération.
                                        </p>

                                    </div>

                                </div>

                            </div>


                            <div class="arti-dark-item rounded-2xl border border-white/10 bg-white/5 p-5">

                                <div class="flex gap-4">

                                    <i data-lucide="check-circle-2" class="mt-0.5 h-5 w-5 shrink-0 text-red-500">
                                    </i>

                                    <div>

                                        <h4 class="font-bold text-white">
                                            Accompagnement
                                        </h4>

                                        <p class="mt-1 text-sm leading-6 text-slate-400">
                                            Un échange régulier pour suivre les besoins
                                            et les évolutions de la campagne.
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <a href="{{ url('/contact') }}"
                            class="arti-btn-primary mt-8 flex items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-4 text-sm font-bold text-white transition hover:bg-red-700">

                            Parlons de votre projet

                            <i data-lucide="arrow-right" class="h-4 w-4 transition-transform duration-300">
                            </i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    SECTORS
    ========================================================= --}}
    <section class="arti-section-reveal relative z-10 bg-slate-50 py-20 sm:py-24 lg:py-28">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="arti-reveal max-w-3xl">

                <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                    Secteurs
                </span>

                <h2 class="mt-4 text-3xl font-black text-slate-950 sm:text-4xl lg:text-5xl">
                    Des solutions pour différents secteurs
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Nos opérations peuvent être adaptées aux spécificités
                    de votre secteur et aux objectifs de votre entreprise.
                </p>

            </div>


            @php
                $sectors = [
                    ['name' => 'E-commerce', 'icon' => 'shopping-cart'],
                    ['name' => 'Immobilier', 'icon' => 'building-2'],
                    ['name' => 'Assurance', 'icon' => 'shield'],
                    ['name' => 'Finance', 'icon' => 'landmark'],
                    ['name' => 'Télécommunications', 'icon' => 'smartphone'],
                    ['name' => 'Santé', 'icon' => 'heart-pulse'],
                    ['name' => 'Éducation', 'icon' => 'graduation-cap'],
                    ['name' => 'Hôtellerie', 'icon' => 'hotel'],
                    ['name' => 'Commerce', 'icon' => 'store'],
                    ['name' => 'Services', 'icon' => 'briefcase-business'],
                    ['name' => 'PME', 'icon' => 'building'],
                    ['name' => 'Startups', 'icon' => 'rocket'],
                ];
            @endphp


            <div class="mt-12 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">

                @foreach ($sectors as $sector)
                    <div
                        class="arti-sector-card group rounded-2xl border border-slate-200 bg-white p-5 transition duration-500 hover:-translate-y-1 hover:border-red-200 hover:shadow-xl">

                        <div
                            class="arti-sector-icon flex h-12 w-12 items-center justify-center rounded-xl bg-red-50 transition group-hover:bg-red-600">

                            <i data-lucide="{{ $sector['icon'] }}"
                                class="h-5 w-5 text-red-600 transition group-hover:text-white">
                            </i>

                        </div>

                        <h3 class="mt-4 text-sm font-bold text-slate-900">
                            {{ $sector['name'] }}
                        </h3>

                    </div>
                @endforeach

            </div>


            <a href="{{ url('/secteurs') }}" class="mt-8 inline-flex items-center gap-2 text-sm font-bold text-red-600">

                Découvrir tous nos secteurs

                <i data-lucide="arrow-right" class="h-4 w-4 transition-transform duration-300">
                </i>

            </a>

        </div>

    </section>


    {{-- =========================================================
    PROCESS
    ========================================================= --}}
    <section class="arti-section-reveal relative z-10 bg-white py-20 sm:py-24 lg:py-28">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="arti-reveal mx-auto max-w-3xl text-center">

                <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                    Notre méthode
                </span>

                <h2 class="mt-4 text-3xl font-black text-slate-950 sm:text-4xl lg:text-5xl">
                    Une méthode claire et structurée
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Chaque opération commence par la compréhension de vos besoins
                    et évolue grâce à un suivi régulier.
                </p>

            </div>


            @php
                $steps = [
                    [
                        'number' => '01',
                        'title' => 'Analyse',
                        'description' => 'Compréhension de vos objectifs, besoins et cible.',
                        'icon' => 'search',
                    ],
                    [
                        'number' => '02',
                        'title' => 'Préparation',
                        'description' => 'Définition des scripts, procédures et scénarios.',
                        'icon' => 'file-cog',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Formation',
                        'description' => 'Préparation des agents aux spécificités de votre campagne.',
                        'icon' => 'graduation-cap',
                    ],
                    [
                        'number' => '04',
                        'title' => 'Lancement',
                        'description' => 'Démarrage de l’opération selon les procédures définies.',
                        'icon' => 'rocket',
                    ],
                    [
                        'number' => '05',
                        'title' => 'Suivi',
                        'description' => 'Suivi des opérations et des résultats observés.',
                        'icon' => 'bar-chart-3',
                    ],
                    [
                        'number' => '06',
                        'title' => 'Optimisation',
                        'description' => 'Amélioration continue selon les besoins identifiés.',
                        'icon' => 'trending-up',
                    ],
                ];
            @endphp


            <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($steps as $step)
                    <div
                        class="arti-step-card group rounded-3xl border border-slate-200 bg-white p-7 transition duration-500 hover:-translate-y-1 hover:border-red-200 hover:shadow-xl">

                        <div class="flex items-center justify-between">

                            <div class="arti-section-icon flex h-12 w-12 items-center justify-center rounded-xl bg-red-50">

                                <i data-lucide="{{ $step['icon'] }}" class="h-5 w-5 text-red-600">
                                </i>

                            </div>

                            <span class="text-4xl font-black text-slate-100">
                                {{ $step['number'] }}
                            </span>

                        </div>


                        <h3 class="mt-6 text-lg font-black text-slate-950">
                            {{ $step['title'] }}
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            {{ $step['description'] }}
                        </p>

                    </div>
                @endforeach

            </div>

        </div>

    </section>


    {{-- =========================================================
    FAQ
    ========================================================= --}}
    <section class="arti-section-reveal relative z-10 bg-slate-50 py-20 sm:py-24 lg:py-28">

        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">

            <div class="arti-reveal text-center">

                <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                    FAQ
                </span>

                <h2 class="mt-4 text-3xl font-black text-slate-950 sm:text-4xl lg:text-5xl">
                    Les questions fréquentes
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Les réponses aux principales questions concernant
                    les services d'ARTI CALL.
                </p>

            </div>


            <div class="mt-12 space-y-4">

                <details
                    class="arti-faq group rounded-2xl border border-slate-200 bg-white p-6 transition hover:border-red-200">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5">

                        <span class="font-bold text-slate-900">
                            Quels services propose ARTI CALL ?
                        </span>

                        <span
                            class="arti-faq-icon flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-red-50 transition duration-300">

                            <i data-lucide="plus" class="h-4 w-4 text-red-600">
                            </i>

                        </span>

                    </summary>

                    <p class="mt-4 pr-10 text-sm leading-7 text-slate-600">

                        ARTI CALL propose notamment des services Inbound et Outbound,
                        tels que la réception d'appels, le service client,
                        la téléprospection, la qualification et la prise de rendez-vous,
                        selon les prestations effectivement proposées.

                    </p>

                </details>


                <details
                    class="arti-faq group rounded-2xl border border-slate-200 bg-white p-6 transition hover:border-red-200">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5">

                        <span class="font-bold text-slate-900">
                            Où se trouve ARTI CALL ?
                        </span>

                        <span
                            class="arti-faq-icon flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-red-50 transition duration-300">

                            <i data-lucide="plus" class="h-4 w-4 text-red-600">
                            </i>

                        </span>

                    </summary>

                    <p class="mt-4 pr-10 text-sm leading-7 text-slate-600">
                        ARTI CALL est basée à Fès, au Maroc.
                    </p>

                </details>


                <details
                    class="arti-faq group rounded-2xl border border-slate-200 bg-white p-6 transition hover:border-red-200">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5">

                        <span class="font-bold text-slate-900">
                            Pouvez-vous gérer une campagne de téléprospection ?
                        </span>

                        <span
                            class="arti-faq-icon flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-red-50 transition duration-300">

                            <i data-lucide="plus" class="h-4 w-4 text-red-600">
                            </i>

                        </span>

                    </summary>

                    <p class="mt-4 pr-10 text-sm leading-7 text-slate-600">

                        Oui, lorsque cette prestation correspond aux services
                        proposés et aux besoins définis avec le client.
                        Les modalités de la campagne sont établies avant son lancement.

                    </p>

                </details>


                <details
                    class="arti-faq group rounded-2xl border border-slate-200 bg-white p-6 transition hover:border-red-200">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5">

                        <span class="font-bold text-slate-900">
                            Comment demander un devis ?
                        </span>

                        <span
                            class="arti-faq-icon flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-red-50 transition duration-300">

                            <i data-lucide="plus" class="h-4 w-4 text-red-600">
                            </i>

                        </span>

                    </summary>

                    <p class="mt-4 pr-10 text-sm leading-7 text-slate-600">

                        Vous pouvez utiliser notre page contact pour présenter
                        votre besoin et demander un devis personnalisé.

                    </p>

                </details>

            </div>


            <div class="mt-8 text-center">

                <a href="{{ url('/faq') }}" class="inline-flex items-center gap-2 text-sm font-bold text-red-600">

                    Voir toutes les questions

                    <i data-lucide="arrow-right" class="h-4 w-4 transition-transform duration-300">
                    </i>

                </a>

            </div>

        </div>

    </section>


    {{-- =========================================================
    FINAL CTA
    ========================================================= --}}
    <section class="arti-section-reveal relative z-10 bg-white py-20 sm:py-24 lg:py-28">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div
                class="arti-final-cta relative overflow-hidden rounded-[2rem] bg-red-600 px-7 py-14 shadow-2xl shadow-red-600/10 sm:px-12 lg:px-16 lg:py-16">

                <div class="arti-cta-circle absolute -right-32 -top-32 h-96 w-96 rounded-full bg-white/10">
                </div>

                <div
                    class="arti-cta-circle arti-cta-circle-2 absolute -bottom-32 -left-24 h-80 w-80 rounded-full bg-white/10">
                </div>

                <div class="arti-cta-ring absolute right-10 top-10 h-24 w-24 rounded-full border border-white/10">
                </div>


                <div class="relative z-10 max-w-3xl">

                    <span class="text-xs font-bold uppercase tracking-[0.25em] text-white/75">
                        Parlons de votre projet
                    </span>

                    <h2 class="mt-4 text-3xl font-black leading-tight text-white sm:text-4xl lg:text-5xl">
                        Prêt à améliorer votre relation client ?
                    </h2>

                    <p class="mt-5 max-w-2xl text-base leading-8 text-white/85 sm:text-lg">
                        Présentez-nous votre besoin et découvrons ensemble
                        une solution adaptée à vos objectifs.
                    </p>


                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">

                        <a href="{{ url('/contact') }}"
                            class="arti-cta-button inline-flex items-center justify-center gap-2 rounded-xl bg-white px-7 py-4 text-sm font-bold text-red-600 transition hover:-translate-y-1 hover:bg-slate-100">

                            Demander un devis

                            <i data-lucide="arrow-right" class="h-4 w-4 transition-transform duration-300">
                            </i>

                        </a>


                        <a href="{{ url('/contact') }}"
                            class="arti-cta-button inline-flex items-center justify-center gap-2 rounded-xl border border-white/40 px-7 py-4 text-sm font-bold text-white transition hover:-translate-y-1 hover:bg-white/10">

                            Nous contacter

                            <i data-lucide="phone" class="h-4 w-4 transition-transform duration-300">
                            </i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    ANIMATIONS
    ========================================================= --}}
    @push('styles')
        <style>
            /* =====================================================
                                       GLOBAL SCROLL REVEAL
                                    ===================================================== */

            .arti-reveal {
                opacity: 0;
                transform: translateY(35px);
                animation: artiReveal 0.9s cubic-bezier(.22, 1, .36, 1) forwards;
            }

            .arti-reveal-left {
                animation-name: artiRevealLeft;
            }

            .arti-reveal-right {
                animation-name: artiRevealRight;
                animation-delay: .15s;
            }

            .arti-section-reveal {
                animation: artiSectionFade 1s ease both;
            }

            @keyframes artiReveal {
                from {
                    opacity: 0;
                    transform: translateY(35px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes artiRevealLeft {
                from {
                    opacity: 0;
                    transform: translateX(-45px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes artiRevealRight {
                from {
                    opacity: 0;
                    transform: translateX(45px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes artiSectionFade {
                from {
                    opacity: .35;
                }

                to {
                    opacity: 1;
                }
            }


            /* =====================================================
                                       HERO GLOWS
                                    ===================================================== */

            .arti-glow {
                animation: artiGlow 7s ease-in-out infinite alternate;
                will-change: transform, opacity;
            }

            .arti-glow-red-2 {
                animation-delay: -3s;
            }

            @keyframes artiGlow {
                0% {
                    transform: translate3d(0, 0, 0) scale(.92);
                    opacity: .55;
                }

                50% {
                    transform: translate3d(-30px, 25px, 0) scale(1.08);
                    opacity: .85;
                }

                100% {
                    transform: translate3d(35px, -20px, 0) scale(1);
                    opacity: .6;
                }
            }


            /* =====================================================
                                       SMOKE
                                    ===================================================== */

            .arti-smoke {
                position: absolute;
                width: 420px;
                height: 420px;
                border-radius: 50%;
                pointer-events: none;
                filter: blur(80px);
                opacity: .13;
                mix-blend-mode: screen;
                will-change: transform;
            }

            .arti-smoke-1 {
                left: -180px;
                bottom: -190px;
                background: radial-gradient(circle,
                        rgba(255, 255, 255, .28) 0%,
                        rgba(255, 255, 255, .10) 30%,
                        transparent 70%);
                animation: artiSmokeOne 16s ease-in-out infinite alternate;
            }

            .arti-smoke-2 {
                right: -180px;
                top: -160px;
                background: radial-gradient(circle,
                        rgba(220, 38, 38, .28) 0%,
                        rgba(220, 38, 38, .10) 35%,
                        transparent 70%);
                animation: artiSmokeTwo 19s ease-in-out infinite alternate;
            }

            .arti-smoke-3 {
                left: 32%;
                top: 20%;
                width: 350px;
                height: 350px;
                background: radial-gradient(circle,
                        rgba(255, 255, 255, .15) 0%,
                        rgba(148, 163, 184, .06) 35%,
                        transparent 70%);
                opacity: .07;
                animation: artiSmokeThree 22s ease-in-out infinite alternate;
            }

            @keyframes artiSmokeOne {
                0% {
                    transform: translate3d(-30px, 20px, 0) scale(.9);
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
                    transform: translate3d(-120px, 10px, 0) scale(.95);
                }
            }

            @keyframes artiSmokeThree {
                0% {
                    transform: translate3d(-20px, 20px, 0) scale(.9);
                }

                50% {
                    transform: translate3d(50px, -30px, 0) scale(1.15);
                }

                100% {
                    transform: translate3d(-40px, 40px, 0) scale(1);
                }
            }


            /* =====================================================
                                       ORBITS
                                    ===================================================== */

            .arti-orbit {
                animation: artiOrbit 18s linear infinite;
                transform-origin: center;
            }

            .arti-orbit-delay {
                animation-duration: 24s;
                animation-direction: reverse;
            }

            @keyframes artiOrbit {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }


            /* =====================================================
                                       PARTICLES
                                    ===================================================== */

            .arti-particle {
                animation: artiParticle 4s ease-in-out infinite;
            }

            .arti-particle-2 {
                animation-delay: -1s;
                animation-duration: 5s;
            }

            .arti-particle-3 {
                animation-delay: -2s;
                animation-duration: 6s;
            }

            .arti-particle-4 {
                animation-delay: -3s;
                animation-duration: 4.5s;
            }

            .arti-particle-5 {
                animation-delay: -1.5s;
                animation-duration: 5.5s;
            }

            .arti-particle-6 {
                animation-delay: -2.5s;
                animation-duration: 4.8s;
            }

            @keyframes artiParticle {

                0%,
                100% {
                    opacity: .25;
                    transform: translateY(0) scale(1);
                }

                50% {
                    opacity: .9;
                    transform: translateY(-14px) scale(1.7);
                }
            }


            /* =====================================================
                                       HERO BADGE
                                    ===================================================== */

            .arti-badge {
                animation: artiBadge 1s cubic-bezier(.22, 1, .36, 1) .2s both;
            }

            @keyframes artiBadge {
                from {
                    opacity: 0;
                    transform: translateY(-15px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }


            /* =====================================================
                                       TITLE
                                    ===================================================== */

            .arti-title-red {
                animation: artiTitleGlow 3s ease-in-out infinite alternate;
            }

            @keyframes artiTitleGlow {
                from {
                    text-shadow: 0 0 0 rgba(239, 68, 68, 0);
                }

                to {
                    text-shadow: 0 0 30px rgba(239, 68, 68, .35);
                }
            }


            /* =====================================================
                                       BUTTONS
                                    ===================================================== */

            .arti-btn-primary:hover i,
            .arti-btn-secondary:hover i,
            .arti-cta-button:hover i {
                transform: translateX(4px);
            }


            /* =====================================================
                                       PHONE
                                    ===================================================== */

            .arti-phone-float {
                animation: artiPhoneFloat 4s ease-in-out infinite;
            }

            .arti-phone-pulse {
                position: relative;
            }

            .arti-phone-pulse::before,
            .arti-phone-pulse::after {
                content: "";
                position: absolute;
                inset: -10px;
                border: 1px solid rgba(239, 68, 68, .25);
                border-radius: 2rem;
                animation: artiPhoneRing 3s ease-out infinite;
            }

            .arti-phone-pulse::after {
                animation-delay: 1.5s;
            }

            @keyframes artiPhoneFloat {

                0%,
                100% {
                    transform: translateY(0) rotate(0deg);
                }

                50% {
                    transform: translateY(-9px) rotate(1deg);
                }
            }

            @keyframes artiPhoneRing {
                0% {
                    opacity: .7;
                    transform: scale(.95);
                }

                100% {
                    opacity: 0;
                    transform: scale(1.35);
                }
            }


            /* =====================================================
                                       MAIN CARD
                                    ===================================================== */

            .arti-main-card {
                animation: artiCardFloat 6s ease-in-out infinite;
                transform-style: preserve-3d;
            }

            @keyframes artiCardFloat {

                0%,
                100% {
                    transform: translateY(0) rotateX(0deg);
                }

                50% {
                    transform: translateY(-6px) rotateX(.5deg);
                }
            }

            .arti-card-glow {
                animation: artiCardGlow 8s ease-in-out infinite alternate;
            }

            .arti-card-glow-2 {
                animation-delay: -4s;
            }

            @keyframes artiCardGlow {
                0% {
                    transform: scale(.9) translate(0, 0);
                    opacity: .4;
                }

                100% {
                    transform: scale(1.15) translate(20px, -15px);
                    opacity: .8;
                }
            }


            /* =====================================================
                                       MINI CARDS
                                    ===================================================== */

            .arti-mini-card {
                transition:
                    transform .35s ease,
                    border-color .35s ease,
                    background-color .35s ease,
                    box-shadow .35s ease;
            }

            .arti-mini-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 15px 35px rgba(0, 0, 0, .25);
            }


            /* =====================================================
                                       LOCATION
                                    ===================================================== */

            .arti-location {
                animation: artiLocation 1s cubic-bezier(.22, 1, .36, 1) .7s both;
            }

            @keyframes artiLocation {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }


            /* =====================================================
                                       SECTION ICONS
                                    ===================================================== */

            .arti-section-icon {
                transition:
                    transform .35s ease,
                    box-shadow .35s ease;
            }

            .arti-section-icon:hover {
                transform: translateY(-4px) rotate(-3deg);
                box-shadow: 0 12px 25px rgba(220, 38, 38, .18);
            }


            /* =====================================================
                                       INTRO CARDS
                                    ===================================================== */

            .arti-intro-card {
                transition:
                    background-color .4s ease,
                    transform .4s ease;
            }

            .arti-intro-card:hover {
                background-color: rgba(255, 255, 255, .025);
            }


            /* =====================================================
                                       ABOUT CHECKS
                                    ===================================================== */

            .arti-check-row {
                transition: transform .3s ease;
            }

            .arti-check-row:hover {
                transform: translateX(6px);
            }


            /* =====================================================
                                       SERVICE CARDS
                                    ===================================================== */

            .arti-service-card {
                transform-style: preserve-3d;
            }

            .arti-service-card:hover .arti-section-icon {
                transform: translateY(-4px) scale(1.05);
            }

            .arti-list-item {
                transition:
                    transform .25s ease,
                    color .25s ease;
            }

            .arti-list-item:hover {
                transform: translateX(5px);
            }


            /* =====================================================
                                       WHY FEATURES
                                    ===================================================== */

            .arti-feature {
                transition: transform .35s ease;
            }

            .arti-feature:hover {
                transform: translateX(7px);
            }

            .arti-feature-icon {
                transition:
                    transform .35s ease,
                    box-shadow .35s ease;
            }

            .arti-feature:hover .arti-feature-icon {
                transform: rotate(-5deg) scale(1.05);
                box-shadow: 0 10px 25px rgba(220, 38, 38, .15);
            }


            /* =====================================================
                                       DARK ENGAGEMENT
                                    ===================================================== */

            .arti-engagement {
                transition:
                    transform .5s ease,
                    box-shadow .5s ease;
            }

            .arti-engagement:hover {
                transform: translateY(-5px);
                box-shadow: 0 30px 60px rgba(15, 23, 42, .25);
            }

            .arti-dark-item {
                transition:
                    transform .35s ease,
                    border-color .35s ease,
                    background-color .35s ease;
            }

            .arti-dark-item:hover {
                transform: translateX(5px);
                border-color: rgba(239, 68, 68, .25);
                background-color: rgba(255, 255, 255, .08);
            }


            /* =====================================================
                                       SECTORS
                                    ===================================================== */

            .arti-sector-card {
                transform-style: preserve-3d;
            }

            .arti-sector-card:hover .arti-sector-icon {
                transform: rotate(-5deg) scale(1.08);
            }

            .arti-sector-icon {
                transition:
                    transform .35s ease,
                    background-color .35s ease;
            }


            /* =====================================================
                                       PROCESS
                                    ===================================================== */

            .arti-step-card {
                position: relative;
                overflow: hidden;
            }

            .arti-step-card::before {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg,
                        transparent,
                        rgba(220, 38, 38, .8),
                        transparent);
                transform: translateX(-100%);
                transition: transform .6s ease;
            }

            .arti-step-card:hover::before {
                transform: translateX(100%);
            }

            .arti-step-card:hover .arti-section-icon {
                transform: scale(1.08) rotate(-4deg);
            }


            /* =====================================================
                                       FAQ
                                    ===================================================== */

            .arti-faq {
                transition:
                    transform .35s ease,
                    box-shadow .35s ease,
                    border-color .35s ease;
            }

            .arti-faq:hover {
                transform: translateY(-2px);
                box-shadow: 0 12px 30px rgba(15, 23, 42, .06);
            }

            .arti-faq[open] {
                border-color: rgba(220, 38, 38, .25);
                box-shadow: 0 15px 35px rgba(15, 23, 42, .07);
            }

            .arti-faq[open] .arti-faq-icon {
                transform: rotate(45deg);
                background: rgba(220, 38, 38, .1);
            }


            /* =====================================================
                                       FINAL CTA
                                    ===================================================== */

            .arti-final-cta {
                animation: artiCtaFloat 6s ease-in-out infinite;
            }

            @keyframes artiCtaFloat {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-4px);
                }
            }

            .arti-cta-circle {
                animation: artiCtaCircle 10s ease-in-out infinite alternate;
            }

            .arti-cta-circle-2 {
                animation-delay: -5s;
            }

            @keyframes artiCtaCircle {
                0% {
                    transform: scale(.9) translate(0, 0);
                }

                100% {
                    transform: scale(1.15) translate(25px, -20px);
                }
            }

            .arti-cta-ring {
                animation: artiCtaRing 8s linear infinite;
            }

            @keyframes artiCtaRing {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }


            /* =====================================================
                                       MOBILE
                                    ===================================================== */

            @media (max-width: 640px) {

                .arti-smoke {
                    transform: scale(.7);
                    opacity: .08;
                }

                .arti-phone-float {
                    animation-duration: 5s;
                }

                .arti-main-card {
                    animation-duration: 8s;
                }

                .arti-final-cta {
                    animation-duration: 8s;
                }
            }


            /* =====================================================
                                       REDUCED MOTION
                                    ===================================================== */

            @media (prefers-reduced-motion: reduce) {

                .arti-smoke,
                .arti-phone-float,
                .arti-main-card,
                .arti-final-cta,
                .arti-glow,
                .arti-orbit,
                .arti-particle,
                .arti-title-red,
                .arti-phone-pulse::before,
                .arti-phone-pulse::after {
                    animation: none !important;
                }

                .arti-reveal,
                .arti-reveal-left,
                .arti-reveal-right {
                    opacity: 1;
                    transform: none;
                    animation: none !important;
                }

                .arti-service-card,
                .arti-sector-card,
                .arti-step-card,
                .arti-engagement {
                    transition: none !important;
                }
            }
        </style>
    @endpush

@endsection
