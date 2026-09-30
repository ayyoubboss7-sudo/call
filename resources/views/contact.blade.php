```blade
@extends('layouts.app')

@section('title', 'Contact - ARTI CALL')

@section('meta_description',
    'Contactez ARTI CALL à Fès pour vos besoins en relation client, téléprospection, service
    client et développement commercial.')

@section('content')
    {{-- =========================================================
HERO
========================================================= --}}
    <section class="relative isolate overflow-hidden bg-slate-950 text-white">
        {{-- Background --}}
        <div class="absolute inset-0">

            <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-red-600/20 blur-3xl"></div>

            <div class="absolute -left-32 bottom-0 w-96 h-96 rounded-full bg-red-600/10 blur-3xl"></div>

            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(220,38,38,0.08),transparent_55%)]"></div>

        </div>

        <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">

            <div class="max-w-3xl">

                <div
                    class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-bold uppercase tracking-widest text-red-400">

                    <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>

                    Contact

                </div>

                <h1 class="mt-6 text-4xl font-extrabold leading-[1.08] tracking-tight text-white sm:text-5xl lg:text-6xl">

                    Parlons de votre

                    <span class="text-red-500">
                        projet.
                    </span>

                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">

                    Une question, un besoin ou un projet ?

                    Notre équipe est à votre écoute pour vous proposer

                    une solution adaptée à votre activité.

                </p>

            </div>

        </div>
    </section>


    {{-- =========================================================
CONTACT SECTION
========================================================= --}}
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
                            <form action="#" method="POST" class="mt-8 space-y-6">

                                @csrf


                                {{-- Nom + Email --}}
                                <div class="grid sm:grid-cols-2 gap-5">

                                    <div>

                                        <label for="nom" class="mb-2 block text-sm font-bold text-slate-700">

                                            Nom complet

                                        </label>

                                        <div class="contact-input">

                                            <i data-lucide="user" class="contact-form-icon">
                                            </i>

                                            <input type="text" id="nom" name="nom" placeholder="Votre nom"
                                                required
                                                class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10">

                                        </div>

                                    </div>


                                    <div>

                                        <label for="email" class="mb-2 block text-sm font-bold text-slate-700">

                                            Email

                                        </label>

                                        <div class="contact-input">

                                            <i data-lucide="mail" class="contact-form-icon">
                                            </i>

                                            <input type="email" id="email" name="email"
                                                placeholder="votre@email.com" required
                                                class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10">

                                        </div>

                                    </div>

                                </div>


                                {{-- Téléphone + Société --}}
                                <div class="grid sm:grid-cols-2 gap-5">

                                    <div>

                                        <label for="telephone" class="mb-2 block text-sm font-bold text-slate-700">

                                            Téléphone

                                        </label>

                                        <div class="contact-input">

                                            <i data-lucide="phone" class="contact-form-icon">
                                            </i>

                                            <input type="tel" id="telephone" name="telephone"
                                                placeholder="+212 6 XX XX XX XX"
                                                class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10">

                                        </div>

                                    </div>


                                    <div>

                                        <label for="societe" class="mb-2 block text-sm font-bold text-slate-700">

                                            Société

                                        </label>

                                        <div class="contact-input">

                                            <i data-lucide="building-2" class="contact-form-icon">
                                            </i>

                                            <input type="text" id="societe" name="societe"
                                                placeholder="Nom de votre société"
                                                class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pr-4 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10">

                                        </div>

                                    </div>

                                </div>


                                {{-- Service --}}
                                <div>

                                    <label for="service" class="mb-2 block text-sm font-bold text-slate-700">

                                        Service souhaité

                                    </label>

                                    <div class="contact-input">

                                        <i data-lucide="briefcase-business" class="contact-form-icon">
                                        </i>

                                        <select id="service" name="service"
                                            class="w-full appearance-none rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-10 text-sm text-slate-700 outline-none transition focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10">

                                            <option value="">
                                                Sélectionnez un service
                                            </option>

                                            <option value="inbound">
                                                Inbound / Réception d'appels
                                            </option>

                                            <option value="outbound">
                                                Outbound / Émission d'appels
                                            </option>

                                            <option value="teleprospection">
                                                Téléprospection
                                            </option>

                                            <option value="service-client">
                                                Service client
                                            </option>

                                            <option value="leads">
                                                Génération de leads
                                            </option>

                                            <option value="autre">
                                                Autre demande
                                            </option>

                                        </select>

                                        <i data-lucide="chevron-down" class="contact-select-icon">
                                        </i>

                                    </div>

                                </div>


                                {{-- Message --}}
                                <div>

                                    <label for="message" class="mb-2 block text-sm font-bold text-slate-700">

                                        Votre message

                                    </label>

                                    <textarea id="message" name="message" rows="6" placeholder="Décrivez-nous votre besoin ou votre projet..."
                                        required
                                        class="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-red-500 focus:bg-white focus:ring-4 focus:ring-red-500/10"></textarea>

                                </div>


                                {{-- Submit --}}
                                <button type="submit"
                                    class="group inline-flex w-full items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-4 text-sm font-bold text-white shadow-lg shadow-red-600/20 transition duration-300 hover:bg-red-700 hover:-translate-y-0.5">

                                    Envoyer ma demande

                                    <i data-lucide="arrow-right"
                                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                                    </i>

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

    </section>


    {{-- =========================================================
MAP / LOCALISATION
========================================================= --}}
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


                {{-- Map placeholder --}}
                <div class="relative min-h-[350px] overflow-hidden rounded-3xl bg-slate-950">

                    {{-- Professional Smoke Background --}}
                    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-[#111827] to-black"></div>

                    {{-- Ambient red glows --}}
                    <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-red-600/20 blur-[100px]"></div>

                    <div class="absolute -bottom-32 -left-32 w-96 h-96 rounded-full bg-red-700/10 blur-[100px]"></div>

                    {{-- Smoke --}}
                    <div class="arti-smoke arti-smoke-1"></div>
                    <div class="arti-smoke arti-smoke-2"></div>
                    <div class="arti-smoke arti-smoke-3"></div>

                    {{-- Center light --}}
                    <div
                        class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(220,38,38,0.10),transparent_58%)]">
                    </div>

                    {{-- Decorative circles --}}
                    <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full border border-red-500/10">
                    </div>

                    <div class="absolute -right-10 -top-10 w-44 h-44 rounded-full border border-red-500/10">
                    </div>

                    {{-- Particles --}}
                    <div class="absolute top-16 left-16 w-1 h-1 rounded-full bg-white/30 animate-pulse"></div>

                    <div class="absolute top-32 right-24 w-1.5 h-1.5 rounded-full bg-red-400/40 animate-pulse">
                    </div>

                    <div class="absolute bottom-24 left-28 w-1 h-1 rounded-full bg-white/20 animate-pulse"></div>

                    <div class="absolute bottom-16 right-20 w-1 h-1 rounded-full bg-red-500/40 animate-pulse">
                    </div>


                    {{-- Map content - INCHANGÉ --}}
                    <div class="relative z-10 flex min-h-[350px] items-center justify-center p-8">

                        <div class="text-center">

                            <div
                                class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-red-600 shadow-2xl shadow-red-600/30">

                                <i data-lucide="map-pin" class="h-9 w-9 text-white">
                                </i>

                            </div>

                            <h3 class="mt-6 text-2xl font-extrabold text-white">

                                Fès, Maroc

                            </h3>

                            <p class="mt-2 text-sm text-slate-400">

                                ARTI CALL

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
FINAL CTA
========================================================= --}}
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
========================================================= --}}
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

@endsection
```
