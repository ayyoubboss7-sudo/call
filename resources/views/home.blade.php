@extends('layouts.app')

@section('title', 'ARTI CALL - Centre d’appel à Fès, Maroc')

@section('meta_description', 'ARTI CALL est un centre d’appel basé à Fès, Maroc, spécialisé dans la relation client, la
    téléprospection, le télémarketing et le développement commercial.')

@section('content')

    {{-- =========================================================
HERO
========================================================= --}}

    <section class="relative overflow-hidden bg-slate-950 text-white">

        ```
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

        {{-- Smoke 1 --}}
        <div class="arti-smoke arti-smoke-1"></div>

        {{-- Smoke 2 --}}
        <div class="arti-smoke arti-smoke-2"></div>

        {{-- Smoke 3 --}}
        <div class="arti-smoke arti-smoke-3"></div>

        {{-- Soft center light --}}
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(220,38,38,0.10),transparent_58%)]">
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
    HERO CONTENT
====================================================== --}}

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center py-20 lg:py-28">

                {{-- Hero content --}}
                <div class="max-w-2xl">

                    <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2">

                        <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>

                        <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-red-400">
                            Centre d'appel à Fès, Maroc
                        </span>

                    </div>

                    <h1 class="mt-7 text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-[1.05] text-white">

                        Votre partenaire pour une

                        <span class="text-red-500">
                            relation client
                        </span>

                        performante.

                    </h1>

                    <p class="mt-7 max-w-xl text-lg leading-8 text-slate-300">

                        ARTI CALL accompagne les entreprises dans leur relation client,
                        leur prospection commerciale et leurs opérations à distance
                        avec une approche professionnelle et adaptée à leurs objectifs.

                    </p>

                    <div class="mt-9 flex flex-col sm:flex-row gap-3">

                        <a href="{{ url('/contact') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-red-600 px-7 py-4 text-sm font-bold text-white shadow-lg shadow-red-600/20 transition hover:bg-red-700 hover:-translate-y-0.5">

                            Demander un devis

                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>

                        </a>

                        <a href="{{ url('/services') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/20 bg-white/5 px-7 py-4 text-sm font-bold text-white transition hover:bg-white/10 hover:border-red-500/50">

                            Découvrir nos services

                            <i data-lucide="arrow-right" class="w-4 h-4"></i>

                        </a>

                    </div>

                    {{-- Trust --}}
                    <div class="mt-9 flex flex-wrap gap-x-6 gap-y-3">

                        <div class="flex items-center gap-2 text-sm text-slate-300">

                            <span
                                class="flex w-5 h-5 items-center justify-center rounded-full bg-red-500/15 border border-red-500/20">

                                <i data-lucide="check" class="w-3 h-3 text-red-400"></i>

                            </span>

                            Équipe professionnelle

                        </div>

                        <div class="flex items-center gap-2 text-sm text-slate-300">

                            <span
                                class="flex w-5 h-5 items-center justify-center rounded-full bg-red-500/15 border border-red-500/20">

                                <i data-lucide="check" class="w-3 h-3 text-red-400"></i>

                            </span>

                            Solutions personnalisées

                        </div>

                        <div class="flex items-center gap-2 text-sm text-slate-300">

                            <span
                                class="flex w-5 h-5 items-center justify-center rounded-full bg-red-500/15 border border-red-500/20">

                                <i data-lucide="check" class="w-3 h-3 text-red-400"></i>

                            </span>

                            Approche orientée résultats

                        </div>

                    </div>

                </div>


                {{-- Hero visual --}}
                <div class="relative">

                    <div
                        class="relative rounded-[2rem] bg-black/40 border border-white/10 p-3 shadow-2xl shadow-black/30 backdrop-blur-sm">

                        <div
                            class="relative overflow-hidden rounded-[1.5rem] border border-white/10 bg-slate-900/80 backdrop-blur-sm">

                            {{-- Inner decorations --}}
                            <div class="absolute -top-24 -right-24 w-72 h-72 rounded-full bg-red-600/20 blur-[80px]"></div>

                            <div class="absolute -bottom-32 -left-24 w-80 h-80 rounded-full bg-red-600/10 blur-[80px]">
                            </div>

                            <div class="relative z-10 p-7 sm:p-9">

                                {{-- Top --}}
                                <div class="flex items-center justify-between">

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="w-11 h-11 rounded-xl bg-red-600 flex items-center justify-center shadow-lg shadow-red-600/30">

                                            <i data-lucide="headphones" class="w-5 h-5 text-white"></i>

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

                                    <span
                                        class="flex items-center gap-2 rounded-full bg-white/5 border border-white/10 px-3 py-1.5 text-xs font-semibold text-slate-300">

                                        <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>

                                        Disponible

                                    </span>

                                </div>


                                {{-- Main visual --}}
                                <div class="mt-12 text-center">

                                    <div
                                        class="mx-auto flex w-28 h-28 items-center justify-center rounded-[2rem] bg-red-600 shadow-xl shadow-red-600/30 arti-phone-float">

                                        <i data-lucide="phone-call" class="w-12 h-12 text-white"></i>

                                    </div>

                                    <p class="mt-7 text-xs font-bold uppercase tracking-[0.25em] text-red-400">

                                        Votre relation client

                                    </p>

                                    <h2 class="mt-3 text-2xl sm:text-3xl font-black text-white">

                                        Une équipe à votre écoute

                                    </h2>

                                    <p class="mt-4 max-w-md mx-auto text-sm leading-7 text-slate-400">

                                        Des solutions professionnelles pour accompagner
                                        vos clients et soutenir vos objectifs commerciaux.

                                    </p>

                                </div>


                                {{-- Services mini cards --}}
                                <div class="mt-10 grid grid-cols-3 gap-3">

                                    <div
                                        class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center backdrop-blur-sm transition hover:bg-white/10 hover:border-red-500/20">

                                        <i data-lucide="phone-incoming" class="mx-auto w-5 h-5 text-red-400"></i>

                                        <div class="mt-3 text-xs font-bold text-white">
                                            Inbound
                                        </div>

                                        <div class="mt-1 text-[11px] text-slate-500">
                                            Service client
                                        </div>

                                    </div>

                                    <div
                                        class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center backdrop-blur-sm transition hover:bg-white/10 hover:border-red-500/20">

                                        <i data-lucide="phone-outgoing" class="mx-auto w-5 h-5 text-red-400"></i>

                                        <div class="mt-3 text-xs font-bold text-white">
                                            Outbound
                                        </div>

                                        <div class="mt-1 text-[11px] text-slate-500">
                                            Prospection
                                        </div>

                                    </div>

                                    <div
                                        class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center backdrop-blur-sm transition hover:bg-white/10 hover:border-red-500/20">

                                        <i data-lucide="target" class="mx-auto w-5 h-5 text-red-400"></i>

                                        <div class="mt-3 text-xs font-bold text-white">
                                            Leads
                                        </div>

                                        <div class="mt-1 text-[11px] text-slate-500">
                                            Qualification
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Location badge --}}
                    <div
                        class="absolute -bottom-6 -left-3 sm:-left-7 flex items-center gap-3 rounded-2xl border border-white/10 bg-slate-950/90 px-5 py-4 shadow-xl backdrop-blur-md">

                        <div
                            class="flex w-11 h-11 items-center justify-center rounded-xl bg-red-500/10 border border-red-500/20">

                            <i data-lucide="map-pin" class="w-5 h-5 text-red-500"></i>

                        </div>

                        <div>

                            <div class="text-xs text-slate-500">
                                Notre implantation
                            </div>

                            <div class="font-bold text-white">
                                Fès, Maroc
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        ```

    </section>

    {{-- =========================================================
INTRO / POSITIONING
========================================================= --}}

    <section class="border-y border-slate-200 bg-slate-950">

        ```
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-3">

                <div class="border-b lg:border-b-0 lg:border-r border-white/10 px-6 py-10 lg:px-10">

                    <div class="text-red-500">
                        <i data-lucide="users" class="w-6 h-6"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-bold text-white">
                        Relation client
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        Une prise en charge professionnelle de vos clients
                        et de leurs demandes.
                    </p>

                </div>

                <div class="border-b lg:border-b-0 lg:border-r border-white/10 px-6 py-10 lg:px-10">

                    <div class="text-red-500">
                        <i data-lucide="target" class="w-6 h-6"></i>
                    </div>

                    <h3 class="mt-5 text-lg font-bold text-white">
                        Développement commercial
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-400">
                        Des campagnes de prospection et de qualification
                        adaptées à vos objectifs.
                    </p>

                </div>

                <div class="px-6 py-10 lg:px-10">

                    <div class="text-red-500">
                        <i data-lucide="settings-2" class="w-6 h-6"></i>
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
        ```

    </section>

    {{-- =========================================================
ABOUT
========================================================= --}}

    <section class="bg-white py-20 lg:py-28">

        ```
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">

                {{-- Visual --}}
                <div class="relative">

                    <div class="rounded-[2rem] bg-red-600 p-3">

                        <div class="rounded-[1.6rem] bg-white p-8 sm:p-10">

                            <div class="flex items-center justify-between">

                                <div class="flex w-14 h-14 items-center justify-center rounded-2xl bg-red-50">

                                    <i data-lucide="building-2" class="w-7 h-7 text-red-600"></i>

                                </div>

                                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">
                                    ARTI CALL
                                </span>

                            </div>

                            <h3 class="mt-8 text-2xl sm:text-3xl font-black text-slate-950">
                                Une équipe basée à Fès
                            </h3>

                            <p class="mt-4 text-slate-600 leading-7">

                                ARTI CALL accompagne les entreprises dans leurs
                                opérations de relation client et de développement
                                commercial à distance.

                            </p>

                            <div class="mt-8 space-y-4">

                                <div class="flex items-start gap-3">

                                    <div class="mt-0.5 flex w-6 h-6 items-center justify-center rounded-full bg-red-100">

                                        <i data-lucide="check" class="w-3.5 h-3.5 text-red-600"></i>

                                    </div>

                                    <span class="text-sm text-slate-600">
                                        Communication professionnelle
                                    </span>

                                </div>

                                <div class="flex items-start gap-3">

                                    <div class="mt-0.5 flex w-6 h-6 items-center justify-center rounded-full bg-red-100">

                                        <i data-lucide="check" class="w-3.5 h-3.5 text-red-600"></i>

                                    </div>

                                    <span class="text-sm text-slate-600">
                                        Processus adaptés à vos besoins
                                    </span>

                                </div>

                                <div class="flex items-start gap-3">

                                    <div class="mt-0.5 flex w-6 h-6 items-center justify-center rounded-full bg-red-100">

                                        <i data-lucide="check" class="w-3.5 h-3.5 text-red-600"></i>

                                    </div>

                                    <span class="text-sm text-slate-600">
                                        Suivi structuré des opérations
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="absolute -bottom-6 -right-3 sm:-right-6 rounded-2xl bg-slate-950 px-6 py-5 shadow-xl">

                        <div class="flex items-center gap-3">

                            <div class="flex w-10 h-10 items-center justify-center rounded-xl bg-red-600">

                                <i data-lucide="map-pin" class="w-5 h-5 text-white"></i>

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

                </div>


                {{-- Text --}}
                <div>

                    <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                        À propos d'ARTI CALL
                    </span>

                    <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black leading-tight text-slate-950">

                        Une approche professionnelle de la relation client

                    </h2>

                    <p class="mt-6 text-lg leading-8 text-slate-600">

                        Nous accompagnons les entreprises qui souhaitent améliorer
                        leur relation avec leurs clients, développer leur activité
                        commerciale ou externaliser certaines opérations à distance.

                    </p>

                    <p class="mt-5 text-slate-600 leading-7">

                        Notre approche repose sur l'écoute, la préparation,
                        la qualité des échanges et l'adaptation des opérations
                        aux objectifs définis avec chaque entreprise.

                    </p>

                    <a href="{{ url('/a-propos') }}"
                        class="mt-8 inline-flex items-center gap-2 rounded-xl bg-slate-950 px-6 py-3.5 text-sm font-bold text-white transition hover:bg-red-600">

                        Découvrir ARTI CALL

                        <i data-lucide="arrow-right" class="w-4 h-4"></i>

                    </a>

                </div>

            </div>

        </div>
        ```

    </section>

    {{-- =========================================================
SERVICES
========================================================= --}}

    <section class="bg-slate-50 py-20 lg:py-28">

        ```
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="max-w-3xl">

                <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                    Nos services
                </span>

                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black text-slate-950">
                    Des solutions conçues pour vos objectifs
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600">
                    De la gestion des appels entrants à la prospection commerciale,
                    ARTI CALL vous accompagne avec des solutions adaptées à votre activité.
                </p>

            </div>

            <div class="mt-12 grid lg:grid-cols-2 gap-6">

                {{-- INBOUND --}}
                <div
                    class="group rounded-[2rem] bg-white border border-slate-200 p-7 sm:p-9 transition hover:border-red-200 hover:shadow-2xl hover:shadow-slate-900/5">

                    <div class="flex items-center justify-between">

                        <div class="flex w-14 h-14 items-center justify-center rounded-2xl bg-red-50">

                            <i data-lucide="phone-incoming" class="w-7 h-7 text-red-600"></i>

                        </div>

                        <span class="rounded-full bg-red-50 px-3 py-1.5 text-xs font-bold text-red-600">
                            INBOUND
                        </span>

                    </div>

                    <h3 class="mt-7 text-2xl font-black text-slate-950">
                        Relation client & services entrants
                    </h3>

                    <p class="mt-4 text-slate-600 leading-7">
                        Nous vous accompagnons dans la gestion des appels,
                        demandes et interactions avec vos clients.
                    </p>

                    <div class="mt-7 grid sm:grid-cols-2 gap-3">

                        @foreach (['Réception d’appels', 'Service client', 'Assistance téléphonique', 'Prise de rendez-vous', 'Gestion des demandes', 'Support après-vente'] as $service)
                            <div class="flex items-center gap-2 text-sm text-slate-600">

                                <i data-lucide="check" class="w-4 h-4 shrink-0 text-red-600"></i>

                                {{ $service }}

                            </div>
                        @endforeach

                    </div>

                    <a href="{{ url('/services') }}"
                        class="mt-8 inline-flex items-center gap-2 text-sm font-bold text-red-600 transition hover:text-red-700">

                        Découvrir les services Inbound

                        <i data-lucide="arrow-right" class="w-4 h-4"></i>

                    </a>

                </div>


                {{-- OUTBOUND --}}
                <div
                    class="group rounded-[2rem] bg-slate-950 p-7 sm:p-9 transition hover:shadow-2xl hover:shadow-slate-900/10">

                    <div class="flex items-center justify-between">

                        <div class="flex w-14 h-14 items-center justify-center rounded-2xl bg-red-600">

                            <i data-lucide="phone-outgoing" class="w-7 h-7 text-white"></i>

                        </div>

                        <span class="rounded-full bg-white/10 px-3 py-1.5 text-xs font-bold text-red-400">
                            OUTBOUND
                        </span>

                    </div>

                    <h3 class="mt-7 text-2xl font-black text-white">
                        Prospection & développement commercial
                    </h3>

                    <p class="mt-4 text-slate-400 leading-7">
                        Nous vous accompagnons dans vos campagnes de prospection,
                        de qualification et de développement commercial.
                    </p>

                    <div class="mt-7 grid sm:grid-cols-2 gap-3">

                        @foreach (['Téléprospection', 'Télémarketing', 'Télévente', 'Génération de leads', 'Qualification', 'Prise de rendez-vous'] as $service)
                            <div class="flex items-center gap-2 text-sm text-slate-300">

                                <i data-lucide="check" class="w-4 h-4 shrink-0 text-red-500"></i>

                                {{ $service }}

                            </div>
                        @endforeach

                    </div>

                    <a href="{{ url('/services') }}"
                        class="mt-8 inline-flex items-center gap-2 text-sm font-bold text-red-500 transition hover:text-red-400">

                        Découvrir les services Outbound

                        <i data-lucide="arrow-right" class="w-4 h-4"></i>

                    </a>

                </div>

            </div>

        </div>
        ```

    </section>

    {{-- =========================================================
WHY ARTI CALL
========================================================= --}}

    <section class="bg-white py-20 lg:py-28">

        ```
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">

                <div>

                    <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                        Pourquoi ARTI CALL ?
                    </span>

                    <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black leading-tight text-slate-950">
                        Un partenaire qui comprend vos enjeux
                    </h2>

                    <p class="mt-6 text-lg leading-8 text-slate-600">
                        Nous construisons notre approche autour de vos besoins,
                        de votre cible et des objectifs de votre opération.
                    </p>

                    <div class="mt-9 space-y-7">

                        <div class="flex gap-4">

                            <div class="flex w-12 h-12 shrink-0 items-center justify-center rounded-xl bg-red-50">

                                <i data-lucide="users" class="w-5 h-5 text-red-600"></i>

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

                        <div class="flex gap-4">

                            <div class="flex w-12 h-12 shrink-0 items-center justify-center rounded-xl bg-red-50">

                                <i data-lucide="settings-2" class="w-5 h-5 text-red-600"></i>

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

                        <div class="flex gap-4">

                            <div class="flex w-12 h-12 shrink-0 items-center justify-center rounded-xl bg-red-50">

                                <i data-lucide="bar-chart-3" class="w-5 h-5 text-red-600"></i>

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

                        <div class="flex gap-4">

                            <div class="flex w-12 h-12 shrink-0 items-center justify-center rounded-xl bg-red-50">

                                <i data-lucide="shield-check" class="w-5 h-5 text-red-600"></i>

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


                {{-- Dark card --}}
                <div class="rounded-[2rem] bg-slate-950 p-7 sm:p-10">

                    <div class="flex items-center gap-4">

                        <div class="flex w-14 h-14 items-center justify-center rounded-2xl bg-red-600">

                            <i data-lucide="award" class="w-7 h-7 text-white"></i>

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

                        <div class="rounded-2xl border border-white/10 bg-white/5 p-5">

                            <div class="flex gap-4">

                                <i data-lucide="check-circle-2" class="mt-0.5 w-5 h-5 shrink-0 text-red-500"></i>

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

                        <div class="rounded-2xl border border-white/10 bg-white/5 p-5">

                            <div class="flex gap-4">

                                <i data-lucide="check-circle-2" class="mt-0.5 w-5 h-5 shrink-0 text-red-500"></i>

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

                        <div class="rounded-2xl border border-white/10 bg-white/5 p-5">

                            <div class="flex gap-4">

                                <i data-lucide="check-circle-2" class="mt-0.5 w-5 h-5 shrink-0 text-red-500"></i>

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
                        class="mt-8 flex items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-4 text-sm font-bold text-white transition hover:bg-red-700">

                        Parlons de votre projet

                        <i data-lucide="arrow-right" class="w-4 h-4"></i>

                    </a>

                </div>

            </div>

        </div>
        ```

    </section>

    {{-- =========================================================
SECTORS
========================================================= --}}

    <section class="bg-slate-50 py-20 lg:py-28">

        ```
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="max-w-3xl">

                <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                    Secteurs
                </span>

                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black text-slate-950">
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

            <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">

                @foreach ($sectors as $sector)
                    <div
                        class="group rounded-2xl border border-slate-200 bg-white p-5 transition hover:-translate-y-1 hover:border-red-200 hover:shadow-xl hover:shadow-slate-900/5">

                        <div
                            class="flex w-12 h-12 items-center justify-center rounded-xl bg-red-50 transition group-hover:bg-red-600">

                            <i data-lucide="{{ $sector['icon'] }}"
                                class="w-5 h-5 text-red-600 transition group-hover:text-white"></i>

                        </div>

                        <h3 class="mt-4 text-sm font-bold text-slate-900">
                            {{ $sector['name'] }}
                        </h3>

                    </div>
                @endforeach

            </div>

            <a href="{{ url('/secteurs') }}"
                class="mt-8 inline-flex items-center gap-2 text-sm font-bold text-red-600 transition hover:text-red-700">

                Découvrir tous nos secteurs

                <i data-lucide="arrow-right" class="w-4 h-4"></i>

            </a>

        </div>
        ```

    </section>

    {{-- =========================================================
PROCESS
========================================================= --}}

    <section class="bg-white py-20 lg:py-28">

        ```
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="max-w-3xl mx-auto text-center">

                <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                    Notre méthode
                </span>

                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black text-slate-950">
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

            <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

                @foreach ($steps as $step)
                    <div
                        class="group relative rounded-3xl border border-slate-200 bg-white p-7 transition hover:-translate-y-1 hover:border-red-200 hover:shadow-xl hover:shadow-slate-900/5">

                        <div class="flex items-center justify-between">

                            <div class="flex w-12 h-12 items-center justify-center rounded-xl bg-red-50">

                                <i data-lucide="{{ $step['icon'] }}" class="w-5 h-5 text-red-600"></i>

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
        ```

    </section>

    {{-- =========================================================
FAQ
========================================================= --}}

    <section class="bg-slate-50 py-20 lg:py-28">

        ```
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center">

                <span class="text-sm font-bold uppercase tracking-[0.18em] text-red-600">
                    FAQ
                </span>

                <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black text-slate-950">
                    Les questions fréquentes
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Les réponses aux principales questions concernant
                    les services d'ARTI CALL.
                </p>

            </div>

            <div class="mt-12 space-y-4">

                <details class="group rounded-2xl border border-slate-200 bg-white p-6">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5">

                        <span class="font-bold text-slate-900">
                            Quels services propose ARTI CALL ?
                        </span>

                        <span
                            class="flex w-9 h-9 shrink-0 items-center justify-center rounded-xl bg-red-50 group-open:bg-red-600 transition">

                            <i data-lucide="plus" class="w-4 h-4 text-red-600 group-open:text-white"></i>

                        </span>

                    </summary>

                    <p class="mt-4 pr-10 text-sm leading-7 text-slate-600">

                        ARTI CALL propose notamment des services Inbound et Outbound,
                        tels que la réception d'appels, le service client,
                        la téléprospection, la qualification et la prise de rendez-vous,
                        selon les prestations effectivement proposées.

                    </p>

                </details>


                <details class="group rounded-2xl border border-slate-200 bg-white p-6">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5">

                        <span class="font-bold text-slate-900">
                            Où se trouve ARTI CALL ?
                        </span>

                        <span class="flex w-9 h-9 shrink-0 items-center justify-center rounded-xl bg-red-50">

                            <i data-lucide="plus" class="w-4 h-4 text-red-600"></i>

                        </span>

                    </summary>

                    <p class="mt-4 pr-10 text-sm leading-7 text-slate-600">
                        ARTI CALL est basée à Fès, au Maroc.
                    </p>

                </details>


                <details class="group rounded-2xl border border-slate-200 bg-white p-6">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5">

                        <span class="font-bold text-slate-900">
                            Pouvez-vous gérer une campagne de téléprospection ?
                        </span>

                        <span class="flex w-9 h-9 shrink-0 items-center justify-center rounded-xl bg-red-50">

                            <i data-lucide="plus" class="w-4 h-4 text-red-600"></i>

                        </span>

                    </summary>

                    <p class="mt-4 pr-10 text-sm leading-7 text-slate-600">

                        Oui, lorsque cette prestation correspond aux services
                        proposés et aux besoins définis avec le client.
                        Les modalités de la campagne sont établies avant son lancement.

                    </p>

                </details>


                <details class="group rounded-2xl border border-slate-200 bg-white p-6">

                    <summary class="flex cursor-pointer list-none items-center justify-between gap-5">

                        <span class="font-bold text-slate-900">
                            Comment demander un devis ?
                        </span>

                        <span class="flex w-9 h-9 shrink-0 items-center justify-center rounded-xl bg-red-50">

                            <i data-lucide="plus" class="w-4 h-4 text-red-600"></i>

                        </span>

                    </summary>

                    <p class="mt-4 pr-10 text-sm leading-7 text-slate-600">

                        Vous pouvez utiliser notre page contact pour présenter
                        votre besoin et demander un devis personnalisé.

                    </p>

                </details>

            </div>

            <div class="mt-8 text-center">

                <a href="{{ url('/faq') }}"
                    class="inline-flex items-center gap-2 text-sm font-bold text-red-600 transition hover:text-red-700">

                    Voir toutes les questions

                    <i data-lucide="arrow-right" class="w-4 h-4"></i>

                </a>

            </div>

        </div>
        ```

    </section>

    {{-- =========================================================
FINAL CTA
========================================================= --}}

    <section class="bg-white py-20 lg:py-28">

        ```
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-[2rem] bg-red-600 px-7 py-14 sm:px-12 lg:px-16 lg:py-16">

                <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-white/10"></div>

                <div class="absolute -left-24 -bottom-32 w-80 h-80 rounded-full bg-white/10"></div>

                <div class="relative z-10 max-w-3xl">

                    <span class="text-xs font-bold uppercase tracking-[0.25em] text-white/75">
                        Parlons de votre projet
                    </span>

                    <h2 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-black leading-tight text-white">
                        Prêt à améliorer votre relation client ?
                    </h2>

                    <p class="mt-5 max-w-2xl text-base sm:text-lg leading-8 text-white/85">
                        Présentez-nous votre besoin et découvrons ensemble
                        une solution adaptée à vos objectifs.
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row gap-3">

                        <a href="{{ url('/contact') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-7 py-4 text-sm font-bold text-red-600 transition hover:bg-slate-100">

                            Demander un devis

                            <i data-lucide="arrow-right" class="w-4 h-4"></i>

                        </a>

                        <a href="{{ url('/contact') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/40 px-7 py-4 text-sm font-bold text-white transition hover:bg-white/10">

                            Nous contacter

                            <i data-lucide="phone" class="w-4 h-4"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>
        
        ```

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
