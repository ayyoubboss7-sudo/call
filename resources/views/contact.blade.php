@extends('layouts.app')

@section('title', 'Contact - ARTI CALL')

@section('meta_description',
    'Contactez ARTI CALL à Fès pour vos besoins en relation client, téléprospection, service
    client et développement commercial.')

    {{-- =========================================================
CONTACT HERO ANIMATION
========================================================= --}}
    @push('styles')
        <style>
            /* =========================================================
                   CONTACT HERO - MÊME ANIMATION QUE SERVICES / FAQ
                ========================================================== */

            .arti-contact-bg {
                position: absolute;
                inset: 0;
                overflow: hidden;
                background-image: url('/images/call-center-bg.jpg');
                background-size: cover;
                background-position: center;
                animation: contact-bg-zoom 18s ease-in-out infinite alternate;
                will-change: transform;
            }

            .arti-contact-bg::after {
                content: "";
                position: absolute;
                inset: 0;
                background:
                    linear-gradient(90deg,
                        rgba(2, 6, 23, 0.95) 0%,
                        rgba(2, 6, 23, 0.82) 42%,
                        rgba(2, 6, 23, 0.58) 100%);
            }

            /* =========================================================
                   DARK OVERLAYS
                ========================================================== */

            .arti-contact-overlay {
                position: absolute;
                inset: 0;
                pointer-events: none;
            }

            .arti-contact-overlay-1 {
                background:
                    linear-gradient(90deg,
                        rgba(2, 6, 23, 0.92),
                        rgba(2, 6, 23, 0.72),
                        rgba(2, 6, 23, 0.42));
            }

            .arti-contact-overlay-2 {
                background:
                    linear-gradient(to top,
                        rgba(2, 6, 23, 0.98),
                        transparent 55%,
                        rgba(2, 6, 23, 0.35));
            }

            .arti-contact-overlay-3 {
                background:
                    radial-gradient(circle at center,
                        rgba(220, 38, 38, 0.08),
                        transparent 58%);
            }

            /* =========================================================
                   SMOKE
                ========================================================== */

            .arti-contact-smoke {
                position: absolute;
                border-radius: 9999px;
                pointer-events: none;
                filter: blur(80px);
                will-change: transform, opacity;
            }

            .arti-contact-smoke-1 {
                width: 430px;
                height: 190px;
                left: -130px;
                top: 15%;
                background: rgba(255, 255, 255, 0.12);
                opacity: 0.24;
                animation: contact-smoke-1 14s ease-in-out infinite alternate;
            }

            .arti-contact-smoke-2 {
                width: 510px;
                height: 230px;
                right: -180px;
                bottom: 4%;
                background: rgba(220, 38, 38, 0.20);
                opacity: 0.34;
                animation: contact-smoke-2 17s ease-in-out infinite alternate;
            }

            .arti-contact-smoke-3 {
                width: 360px;
                height: 170px;
                left: 36%;
                top: -100px;
                background: rgba(255, 255, 255, 0.10);
                opacity: 0.18;
                animation: contact-smoke-3 20s ease-in-out infinite alternate;
            }

            /* =========================================================
                   RED GLOW
                ========================================================== */

            .arti-contact-glow {
                position: absolute;
                width: 430px;
                height: 430px;
                border-radius: 9999px;
                background: rgba(220, 38, 38, 0.16);
                filter: blur(90px);
                pointer-events: none;
                animation: contact-glow 7s ease-in-out infinite;
            }

            .arti-contact-glow-right {
                right: -160px;
                top: -150px;
            }

            .arti-contact-glow-left {
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

            .arti-contact-particle {
                position: absolute;
                width: 4px;
                height: 4px;
                border-radius: 9999px;
                background: rgba(248, 113, 113, 0.65);
                box-shadow: 0 0 14px rgba(239, 68, 68, 0.50);
                pointer-events: none;
                animation: contact-particle linear infinite;
            }

            .arti-contact-particle.p1 {
                left: 8%;
                top: 35%;
                animation-duration: 9s;
                animation-delay: -2s;
            }

            .arti-contact-particle.p2 {
                left: 20%;
                top: 70%;
                width: 3px;
                height: 3px;
                animation-duration: 12s;
                animation-delay: -6s;
            }

            .arti-contact-particle.p3 {
                left: 42%;
                top: 22%;
                animation-duration: 10s;
                animation-delay: -4s;
            }

            .arti-contact-particle.p4 {
                left: 65%;
                top: 72%;
                width: 3px;
                height: 3px;
                animation-duration: 13s;
                animation-delay: -8s;
            }

            .arti-contact-particle.p5 {
                left: 79%;
                top: 32%;
                animation-duration: 11s;
                animation-delay: -3s;
            }

            .arti-contact-particle.p6 {
                left: 91%;
                top: 62%;
                width: 3px;
                height: 3px;
                animation-duration: 14s;
                animation-delay: -7s;
            }

            /* =========================================================
                   HERO CONTENT ANIMATION
                ========================================================== */

            .arti-contact-content {
                animation:
                    contact-content-in 1s cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            .arti-contact-badge {
                animation:
                    contact-badge-in 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.10s both;
            }

            .arti-contact-title {
                animation:
                    contact-title-in 1s cubic-bezier(0.22, 1, 0.36, 1) 0.20s both;
            }

            .arti-contact-description {
                animation:
                    contact-description-in 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.38s both;
            }

            /* =========================================================
                   HERO LINE
                ========================================================== */

            .arti-contact-hero-line {
                position: absolute;
                left: 12%;
                right: 12%;
                bottom: 0;
                height: 1px;
                background: linear-gradient(90deg,
                        transparent,
                        rgba(239, 68, 68, 0.85),
                        transparent);
                animation: contact-line 4s ease-in-out infinite;
            }

            /* =========================================================
                   KEYFRAMES
                ========================================================== */

            @keyframes contact-bg-zoom {
                0% {
                    transform: scale(1);
                }

                100% {
                    transform: scale(1.06);
                }
            }

            @keyframes contact-smoke-1 {
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

            @keyframes contact-smoke-2 {
                0% {
                    transform: translate3d(30px, 30px, 0) scale(1);
                    opacity: 0.20;
                }

                100% {
                    transform: translate3d(-180px, -80px, 0) scale(1.30);
                    opacity: 0.38;
                }
            }

            @keyframes contact-smoke-3 {
                0% {
                    transform: translate3d(-100px, 40px, 0) scale(0.90);
                    opacity: 0.08;
                }

                100% {
                    transform: translate3d(180px, 120px, 0) scale(1.20);
                    opacity: 0.20;
                }
            }

            @keyframes contact-glow {

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

            @keyframes contact-particle {
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

            @keyframes contact-content-in {
                from {
                    opacity: 0;
                    transform: translate3d(-45px, 20px, 0);
                }

                to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
                }
            }

            @keyframes contact-badge-in {
                from {
                    opacity: 0;
                    transform: translateY(-15px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes contact-title-in {
                from {
                    opacity: 0;
                    transform: translateY(25px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes contact-description-in {
                from {
                    opacity: 0;
                    transform: translateY(18px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes contact-line {

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
                   REDUCED MOTION
                ========================================================== */

            @media (prefers-reduced-motion: reduce) {

                .arti-contact-bg,
                .arti-contact-smoke,
                .arti-contact-glow,
                .arti-contact-particle,
                .arti-contact-content,
                .arti-contact-badge,
                .arti-contact-title,
                .arti-contact-description,
                .arti-contact-hero-line {
                    animation: none !important;
                }

                .arti-contact-content,
                .arti-contact-badge,
                .arti-contact-title,
                .arti-contact-description {
                    opacity: 1;
                    transform: none;
                }
            }
        </style>
    @endpush


@section('content')

    {{-- =========================================================
    HERO
    ========================================================== --}}
    <section class="relative isolate overflow-hidden bg-slate-950 text-white">

        {{-- Background photo animée --}}
        <div class="arti-contact-bg absolute inset-0 -z-30"></div>

        {{-- Overlays --}}
        <div class="arti-contact-overlay arti-contact-overlay-1 absolute inset-0 -z-20"></div>

        <div class="arti-contact-overlay arti-contact-overlay-2 absolute inset-0 -z-20"></div>

        <div class="arti-contact-overlay arti-contact-overlay-3 absolute inset-0 -z-20"></div>


        {{-- Red glow --}}
        <div class="arti-contact-glow arti-contact-glow-right -z-10"></div>

        <div class="arti-contact-glow arti-contact-glow-left -z-10"></div>


        {{-- Smoke --}}
        <div class="arti-contact-smoke arti-contact-smoke-1 -z-10"></div>

        <div class="arti-contact-smoke arti-contact-smoke-2 -z-10"></div>

        <div class="arti-contact-smoke arti-contact-smoke-3 -z-10"></div>


        {{-- Floating particles --}}
        <span class="arti-contact-particle p1"></span>
        <span class="arti-contact-particle p2"></span>
        <span class="arti-contact-particle p3"></span>
        <span class="arti-contact-particle p4"></span>
        <span class="arti-contact-particle p5"></span>
        <span class="arti-contact-particle p6"></span>


        <div class="relative z-10 mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">

            <div class="arti-contact-content max-w-3xl">

                {{-- Badge --}}
                <div
                    class="arti-contact-badge inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-bold uppercase tracking-widest text-red-400 backdrop-blur-sm">

                    <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>

                    Contact

                </div>


                {{-- Title --}}
                <h1
                    class="arti-contact-title mt-6 text-4xl font-extrabold leading-[1.08] tracking-tight text-white sm:text-5xl lg:text-6xl">

                    Parlons de votre

                    <span class="text-red-500">
                        projet.
                    </span>

                </h1>


                {{-- Description --}}
                <p class="arti-contact-description mt-6 max-w-2xl text-lg leading-8 text-slate-300">

                    Une question, un besoin ou un projet ?

                    Notre équipe est à votre écoute pour vous proposer

                    une solution adaptée à votre activité.

                </p>

            </div>

            {{-- Animated line --}}
            <div class="arti-contact-hero-line"></div>

        </div>

    </section>


    {{-- =========================================================
    CONTACT SECTION
    ========================================================== --}}
    <section class="bg-slate-50 py-20 sm:py-24">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-12 gap-10 lg:gap-16">


                {{-- =====================================================
                LEFT - INFORMATIONS
                ====================================================== --}}
                <div class="lg:col-span-5">

                    <span class="text-sm font-bold uppercase tracking-widest text-red-600">

                        Nos coordonnées

                    </span>

                    <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900">

                        Restons en contact

                    </h2>

                    <p class="mt-5 text-base leading-8 text-slate-600">

                        Vous souhaitez en savoir plus sur nos services ?

                        Contactez-nous et discutons ensemble de vos besoins.

                    </p>


                    {{-- Contact cards --}}
                    <div class="mt-10 space-y-4">


                        {{-- Téléphone --}}
                        <div
                            class="group flex items-start gap-4 rounded-2xl border border-slate-200 bg-white p-5 hover:border-red-200 hover:shadow-lg hover:shadow-slate-200/50 transition duration-300">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-50 group-hover:bg-red-600 transition duration-300">

                                <i data-lucide="phone" class="h-5 w-5 text-red-600 group-hover:text-white transition">
                                </i>

                            </div>

                            <div>

                                <p class="text-sm font-bold text-slate-400">
                                    Téléphone
                                </p>

                                <p class="mt-1 font-bold text-slate-900">
                                    [À compléter]
                                </p>

                                <p class="mt-1 text-sm text-slate-500">
                                    Disponible selon vos horaires
                                </p>

                            </div>

                        </div>


                        {{-- Email --}}
                        <div
                            class="group flex items-start gap-4 rounded-2xl border border-slate-200 bg-white p-5 hover:border-red-200 hover:shadow-lg hover:shadow-slate-200/50 transition duration-300">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-50 group-hover:bg-red-600 transition duration-300">

                                <i data-lucide="mail" class="h-5 w-5 text-red-600 group-hover:text-white transition">
                                </i>

                            </div>

                            <div>

                                <p class="text-sm font-bold text-slate-400">
                                    Email
                                </p>

                                <p class="mt-1 font-bold text-slate-900">
                                    [À compléter]
                                </p>

                                <p class="mt-1 text-sm text-slate-500">
                                    Nous vous répondrons rapidement
                                </p>

                            </div>

                        </div>


                        {{-- Adresse --}}
                        <div
                            class="group flex items-start gap-4 rounded-2xl border border-slate-200 bg-white p-5 hover:border-red-200 hover:shadow-lg hover:shadow-slate-200/50 transition duration-300">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-50 group-hover:bg-red-600 transition duration-300">

                                <i data-lucide="map-pin" class="h-5 w-5 text-red-600 group-hover:text-white transition">
                                </i>

                            </div>

                            <div>

                                <p class="text-sm font-bold text-slate-400">
                                    Adresse
                                </p>

                                <p class="mt-1 font-bold text-slate-900">
                                    Fès, Maroc
                                </p>

                                <p class="mt-1 text-sm text-slate-500">
                                    Centre d'appel ARTI CALL
                                </p>

                            </div>

                        </div>


                        {{-- Horaires --}}
                        <div
                            class="group flex items-start gap-4 rounded-2xl border border-slate-200 bg-white p-5 hover:border-red-200 hover:shadow-lg hover:shadow-slate-200/50 transition duration-300">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-50 group-hover:bg-red-600 transition duration-300">

                                <i data-lucide="clock" class="h-5 w-5 text-red-600 group-hover:text-white transition">
                                </i>

                            </div>

                            <div>

                                <p class="text-sm font-bold text-slate-400">
                                    Horaires
                                </p>

                                <p class="mt-1 font-bold text-slate-900">
                                    Selon vos besoins
                                </p>

                                <p class="mt-1 text-sm text-slate-500">
                                    Une organisation flexible
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Social --}}
                    <div class="mt-8">

                        <p class="text-sm font-bold text-slate-900">
                            Suivez-nous
                        </p>

                        <div class="mt-4 flex gap-3">

                            <a href="#"
                                class="flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 hover:border-red-200 hover:bg-red-600 hover:text-white transition duration-300">

                                <i data-lucide="linkedin" class="w-5 h-5"></i>

                            </a>

                            <a href="#"
                                class="flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 hover:border-red-200 hover:bg-red-600 hover:text-white transition duration-300">

                                <i data-lucide="facebook" class="w-5 h-5"></i>

                            </a>

                            <a href="#"
                                class="flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 hover:border-red-200 hover:bg-red-600 hover:text-white transition duration-300">

                                <i data-lucide="instagram" class="w-5 h-5"></i>

                            </a>

                        </div>

                    </div>

                </div>


                {{-- =====================================================
                RIGHT - FORMULAIRE
                ====================================================== --}}
                <div class="lg:col-span-7">

                    <div
                        class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/40 sm:p-8 lg:p-10">

                        {{-- Decorative glow --}}
                        <div class="absolute -right-24 -top-24 h-64 w-64 rounded-full bg-red-600/5 blur-3xl">
                        </div>

                        <div class="relative">

                            <div>

                                <span class="text-sm font-bold uppercase tracking-widest text-red-600">

                                    Envoyez-nous un message

                                </span>

                                <h2 class="mt-3 text-2xl font-extrabold text-slate-900 sm:text-3xl">

                                    Comment pouvons-nous vous aider ?

                                </h2>

                                <p class="mt-3 text-sm leading-7 text-slate-500">

                                    Remplissez le formulaire ci-dessous et notre équipe

                                    reviendra vers vous.

                                </p>

                            </div>


                          {{-- Form --}}
<div id="formulaire" class="scroll-mt-28">

    @if (session('success'))
        <div class="mt-8 flex items-start gap-4 rounded-2xl bg-green-50 p-5 ring-1 ring-green-200" role="status">
            <i data-lucide="check-circle-2" class="h-6 w-6 shrink-0 text-green-600"></i>
            <div>
                <p class="font-bold text-green-900">Message envoyé</p>
                <p class="mt-1 text-sm leading-6 text-green-800">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="mt-8 flex items-start gap-4 rounded-2xl bg-red-50 p-5 ring-1 ring-red-200" role="alert">
            <i data-lucide="alert-circle" class="h-6 w-6 shrink-0 text-red-600"></i>
            <div>
                <p class="font-bold text-red-900">Veuillez corriger les champs en rouge</p>
                <p class="mt-1 text-sm text-red-800">{{ $errors->count() }} erreur(s) dans le formulaire.</p>
            </div>
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST" novalidate class="mt-8 space-y-6">
        @csrf

        {{-- Champ piège anti-spam (invisible) --}}
        <div style="position:absolute;left:-9999px;" aria-hidden="true">
            <label>Ne pas remplir <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
        </div>

        {{-- Nom + Email --}}
        <div class="grid sm:grid-cols-2 gap-5">

            <div>
                <label for="nom" class="mb-2 block text-sm font-bold text-slate-700">Nom complet <span class="text-red-600">*</span></label>
                <div class="contact-input">
                    <i data-lucide="user" class="contact-form-icon"></i>
                    <input type="text" id="nom" name="nom" value="{{ old('nom') }}" placeholder="Votre nom" autocomplete="name"
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10 @error('nom') !border-red-500 @enderror">
                </div>
                @error('nom') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="email" class="mb-2 block text-sm font-bold text-slate-700">Email <span class="text-red-600">*</span></label>
                <div class="contact-input">
                    <i data-lucide="mail" class="contact-form-icon"></i>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="votre@email.com" autocomplete="email"
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10 @error('email') !border-red-500 @enderror">
                </div>
                @error('email') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

        </div>

        {{-- Téléphone + Société --}}
        <div class="grid sm:grid-cols-2 gap-5">

            <div>
                <label for="telephone" class="mb-2 block text-sm font-bold text-slate-700">Téléphone</label>
                <div class="contact-input">
                    <i data-lucide="phone" class="contact-form-icon"></i>
                    <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}" placeholder="+212 6 XX XX XX XX" autocomplete="tel"
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10 @error('telephone') !border-red-500 @enderror">
                </div>
                @error('telephone') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="societe" class="mb-2 block text-sm font-bold text-slate-700">Société</label>
                <div class="contact-input">
                    <i data-lucide="building-2" class="contact-form-icon"></i>
                    <input type="text" id="societe" name="societe" value="{{ old('societe') }}" placeholder="Nom de votre société" autocomplete="organization"
                        class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10 @error('societe') !border-red-500 @enderror">
                </div>
                @error('societe') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

        </div>

        {{-- Service --}}
        <div>
            <label for="service" class="mb-2 block text-sm font-bold text-slate-700">Service souhaité</label>
            <div class="contact-input">
                <i data-lucide="briefcase-business" class="contact-form-icon"></i>
                <select id="service" name="service"
                    class="w-full appearance-none rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-10 text-sm text-slate-700 outline-none transition focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10 @error('service') !border-red-500 @enderror">
                    <option value="">Sélectionnez un service</option>
                    @foreach ([
                        'inbound'         => 'Inbound / Réception d\'appels',
                        'outbound'        => 'Outbound / Émission d\'appels',
                        'teleprospection' => 'Téléprospection',
                        'service-client'  => 'Service client',
                        'leads'           => 'Génération de leads',
                        'autre'           => 'Autre demande',
                    ] as $value => $label)
                        <option value="{{ $value }}" @selected(old('service') === $value)>{{ $label }}</option>
                    @endforeach
                </select>
                <i data-lucide="chevron-down" class="contact-select-icon"></i>
            </div>
            @error('service') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        {{-- Message --}}
        <div>
            <label for="message" class="mb-2 block text-sm font-bold text-slate-700">Votre message <span class="text-red-600">*</span></label>
            <textarea id="message" name="message" rows="6" placeholder="Décrivez-nous votre besoin ou votre projet..."
                class="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10 @error('message') !border-red-500 @enderror">{{ old('message') }}</textarea>
            @error('message') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        {{-- Submit --}}
        <button type="submit"
            class="group inline-flex w-full items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-4 text-sm font-bold text-white shadow-lg shadow-red-600/20 transition duration-300 hover:bg-red-700 hover:-translate-y-0.5">
            Envoyer ma demande
            <i data-lucide="arrow-right" class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"></i>
        </button>

        <p class="text-center text-xs text-slate-400">
            Vos informations restent confidentielles et sont utilisées uniquement
            pour répondre à votre demande.
        </p>

    </form>
</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    MAP / LOCALISATION
    ========================================================== --}}
    <section class="bg-white py-20 sm:py-24">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-10 items-center">

                {{-- Text --}}
                <div>

                    <span class="text-sm font-bold uppercase tracking-widest text-red-600">

                        Notre localisation

                    </span>

                    <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold text-slate-900">

                        ARTI CALL à Fès

                    </h2>

                    <p class="mt-5 text-base leading-8 text-slate-600">

                        Notre centre d'appel est basé à Fès, au Maroc.

                        Nous accompagnons nos partenaires avec des solutions

                        professionnelles adaptées à leurs besoins.

                    </p>

                    <div class="mt-8 flex items-start gap-4">

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-50">

                            <i data-lucide="map-pin" class="h-5 w-5 text-red-600">
                            </i>

                        </div>

                        <div>

                            <h3 class="font-bold text-slate-900">
                                Fès, Maroc
                            </h3>

                            <p class="mt-1 text-sm text-slate-500">
                                Centre d'appel ARTI CALL
                            </p>

                        </div>

                    </div>

                </div>


                {{-- =========================================================
                REAL MAP - ARTI CALL / FÈS
                ========================================================== --}}
                <a href="https://www.google.com/maps/search/?api=1&query=arti%20call%20Fes" target="_blank"
                    rel="noopener noreferrer"
                    class="relative block min-h-[350px] overflow-hidden rounded-3xl bg-slate-950 shadow-xl cursor-pointer group">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2759.6066691311216!2d-5.0022347!3d34.034588899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8b6be3794107%3A0xc01be10f93e1721f!2sarti%20call!5e1!3m2!1sfr!2sma!4v1790865716604!5m2!1sfr!2sma"
                        class="absolute inset-0 h-full min-h-[350px] w-full border-0 pointer-events-none" width="600"
                        height="450" style="border:0;" allowfullscreen loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin" title="Localisation ARTI CALL - Fès">
                    </iframe>

                    {{-- Map overlay --}}
                    <div class="pointer-events-none absolute inset-0 rounded-3xl ring-1 ring-inset ring-slate-900/10">
                    </div>

                    {{-- Location badge --}}
                    <div class="pointer-events-none absolute left-4 top-4 z-10">

                        <div
                            class="flex items-center gap-2 rounded-xl border border-white/20 bg-slate-950/90 px-4 py-3 shadow-xl backdrop-blur-md">

                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-red-600">

                                <i data-lucide="map-pin" class="h-4 w-4 text-white"></i>

                            </div>

                            <div>

                                <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                                    Notre localisation
                                </p>

                                <p class="text-sm font-bold text-white">
                                    Fès, Maroc
                                </p>

                            </div>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </section>


    {{-- =========================================================
    FINAL CTA
    ========================================================== --}}
    <section class="bg-slate-950 py-20 sm:py-24">

        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-3xl bg-red-600 p-8 text-center sm:p-12 lg:p-14">

                <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-white/10">
                </div>

                <div class="absolute -left-24 -bottom-28 h-80 w-80 rounded-full bg-white/5">
                </div>

                <div class="relative z-10">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-white/15">

                        <i data-lucide="phone-call" class="h-7 w-7 text-white">
                        </i>

                    </div>

                    <h2 class="mt-6 text-3xl font-extrabold text-white sm:text-4xl">

                        Besoin d'une solution adaptée ?

                    </h2>

                    <p class="mx-auto mt-4 max-w-2xl leading-7 text-white/85">

                        Notre équipe est à votre écoute pour comprendre vos besoins

                        et vous accompagner dans votre projet.

                    </p>

                    <div class="mt-8">

                        <a href="#"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3.5 text-sm font-bold text-red-600 transition hover:bg-slate-100">

                            Nous appeler

                            <i data-lucide="phone" class="h-4 w-4">
                            </i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    CONTACT FORM ICONS CSS
    ========================================================== --}}
    @push('styles')
        <style>
            .contact-input {
                position: relative;
                width: 100%;
            }

            .contact-form-icon {
                position: absolute;
                left: 1rem;
                top: 50%;
                width: 1rem;
                height: 1rem;
                transform: translateY(-50%);
                pointer-events: none;
                color: #94a3b8;
                z-index: 5;
            }

            .contact-input input,
            .contact-input select {
                padding-left: 2.75rem !important;
            }

            .contact-select-icon {
                position: absolute;
                right: 1rem;
                top: 50%;
                width: 1rem;
                height: 1rem;
                transform: translateY(-50%);
                pointer-events: none;
                color: #94a3b8;
                z-index: 5;
            }

            .contact-input:focus-within .contact-form-icon {
                color: #dc2626;
            }

            .contact-input:focus-within .contact-select-icon {
                color: #dc2626;
            }

            .contact-input input,
            .contact-input select {
                position: relative;
                z-index: 1;
            }


            /* =========================================================
                       PROFESSIONAL SMOKE BACKGROUND
                       MAP / FÈS - ARTI CALL
                    ========================================================= */

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

            @media (prefers-reduced-motion: reduce) {
                .arti-smoke {
                    animation: none;
                }
            }
        </style>
    @endpush
    @push('scripts')
    @if ($errors->any() || session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var f = document.getElementById('formulaire');
                if (f) f.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        </script>
    @endif
@endpush

@endsection
