<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="@yield('meta_description', 'ARTI CALL - Centre d’appel à Fès, Maroc. Solutions professionnelles de relation client, téléprospection et développement commercial.')">

    <meta name="keywords"
        content="centre d'appel Fès, centre d'appel Maroc, call center Fès, téléprospection Maroc, télémarketing Maroc, service client Maroc, génération de leads">

    <meta name="author" content="ARTI CALL">

    <title>
        @yield('title', 'ARTI CALL - Centre d’appel à Fès, Maroc')
    </title>

    {{-- =========================================================
        PRELOAD LOGO
    ========================================================== --}}
    <link rel="preload" as="image" href="{{ asset('images/logo.png') }}">

    {{-- =========================================================
        VITE / TAILWIND
    ========================================================== --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- =========================================================
        LUCIDE ICONS
    ========================================================== --}}
    <script src="https://unpkg.com/lucide@latest"></script>

    {{-- =========================================================
        INTRO / ANIMATIONS / HEADER
    ========================================================== --}}
    <script>
        (function () {

            var root = document.documentElement;

            root.classList.add('js');

            /*
             * Intro : une seule fois par session
             */
            try {

                var reduce = window.matchMedia(
                    '(prefers-reduced-motion: reduce)'
                ).matches;

                if (
                    !reduce &&
                    !sessionStorage.getItem('arti_intro')
                ) {
                    root.classList.add('show-preloader');
                }

            } catch (e) {}

            /*
             * Fin de l'intro
             */
            window.artiFinishIntro = function () {

                if (
                    !root.classList.contains('show-preloader') ||
                    root.classList.contains('intro-done')
                ) {
                    return;
                }

                root.classList.add('intro-done');

                try {
                    sessionStorage.setItem('arti_intro', '1');
                } catch (e) {}

                document.dispatchEvent(
                    new Event('arti:intro-done')
                );

                setTimeout(function () {

                    var pre =
                        document.getElementById('arti-preloader');

                    if (pre) {
                        pre.remove();
                    }

                }, 1000);
            };

            /*
             * Sécurité
             */
            if (
                root.classList.contains('show-preloader')
            ) {

                setTimeout(
                    window.artiFinishIntro,
                    6000
                );

            }

        })();
    </script>

    <style>

        /* =====================================================
           SOCIAL ICONS
        ====================================================== */

        .social-icon {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            color: #dc2626;
            background: #fef2f2;
            transition: all .25s cubic-bezier(.22, 1, .36, 1);
        }

        .social-icon:hover {
            color: #ffffff;
            background: #dc2626;
            transform: translateY(-3px);
            box-shadow: 0 6px 14px -6px rgba(220, 38, 38, .5);
        }

        /* WhatsApp */
        .social-whatsapp:hover {
            background: #25D366;
            box-shadow: 0 6px 14px -6px rgba(37, 211, 102, .5);
        }

        .social-icon svg {
            width: 17px;
            height: 17px;
        }

        /* =====================================================
           BASE
        ====================================================== */

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
        }


        /* =====================================================
           HEADER
        ====================================================== */

        .arti-fixed-header {

            position: fixed !important;

            top: 0 !important;
            left: 0 !important;
            right: 0 !important;

            width: 100% !important;

            z-index: 99999 !important;

            transition:
                box-shadow .3s ease,
                background-color .3s ease;

        }

        .arti-fixed-header.is-scrolled {

            box-shadow:
                0 8px 24px -12px
                rgba(15, 23, 42, .25);

        }


        /* =====================================================
           MAIN
        ====================================================== */

        .arti-main {

            padding-top: 80px !important;

            animation:
                page-in .55s
                cubic-bezier(.22, 1, .36, 1)
                both;

        }


        /* =====================================================
           MOBILE MENU
        ====================================================== */

        .arti-mobile-menu {

            position: fixed !important;

            top: 80px !important;
            left: 0 !important;
            right: 0 !important;

            width: 100% !important;

            z-index: 99998 !important;

        }


        /* =====================================================
           PAGE TRANSITION
        ====================================================== */

        @keyframes page-in {

            from {

                opacity: 0;

                transform:
                    translateY(14px);

            }

            to {

                opacity: 1;

                transform: none;

            }

        }


        .arti-main.is-leaving {

            opacity: 0;

            transform:
                translateY(-8px);

            transition:
                opacity .28s ease,
                transform .28s ease;

        }


        /* =====================================================
           PROGRESS BAR
        ====================================================== */

        #page-progress {

            position: fixed;

            top: 0;
            left: 0;

            height: 3px;

            width: 0;

            background: #dc2626;

            z-index: 100000;

            opacity: 0;

            pointer-events: none;

        }


        #page-progress.is-active {

            opacity: 1;

            width: 85%;

            transition:
                width 2s
                cubic-bezier(.1, .6, .2, 1),
                opacity .2s;

        }


        /* =====================================================
           PRELOADER
        ====================================================== */

        #arti-preloader {

            display: none;

        }


        .show-preloader #arti-preloader {

            position: fixed;

            inset: 0;

            z-index: 100001;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            gap: 26px;

            background:
                radial-gradient(
                    60% 50% at 50% 45%,
                    #fff1f1 0%,
                    #ffffff 70%
                );

            transition:
                opacity .7s ease .1s,
                visibility .7s ease .1s;

        }


        .show-preloader:not(.intro-done) body {

            overflow: hidden;

        }


        .show-preloader.intro-done #arti-preloader {

            opacity: 0;

            visibility: hidden;

            pointer-events: none;

        }


        .arti-pre__logo {

            height: 72px;

            width: auto;

            animation:
                pre-logo-in .9s
                cubic-bezier(.22, 1, .36, 1)
                backwards;

            transition:
                transform .7s ease,
                opacity .5s ease;

        }


        @media (min-width: 640px) {

            .arti-pre__logo {

                height: 88px;

            }

        }


        .show-preloader.intro-done
        .arti-pre__logo {

            transform: scale(1.06);

            opacity: 0;

        }


        .arti-pre__bar {

            width: 160px;

            height: 3px;

            overflow: hidden;

            border-radius: 999px;

            background: #e2e8f0;

            animation:
                pre-fade .6s ease .3s backwards;

        }


        .arti-pre__bar span {

            display: block;

            width: 0;

            height: 100%;

            border-radius: 999px;

            background: #dc2626;

            animation:
                pre-bar 1.5s
                cubic-bezier(.1, .6, .2, 1)
                .2s forwards;

        }


        .intro-done
        .arti-pre__bar span {

            animation: none;

            width: 100%;

            transition:
                width .25s ease;

        }


        .arti-pre__tag {

            font-size: 12px;

            letter-spacing: .08em;

            color: #64748b;

            animation:
                pre-fade .8s ease .5s backwards;

        }


        @keyframes pre-logo-in {

            from {

                opacity: 0;

                transform:
                    translateY(14px)
                    scale(.96);

            }

            to {

                opacity: 1;

                transform: none;

            }

        }


        @keyframes pre-fade {

            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }

        }


        @keyframes pre-bar {

            from {
                width: 0;
            }

            to {
                width: 85%;
            }

        }


        /* =====================================================
           MAIN DURING INTRO
        ====================================================== */

        .show-preloader
        .arti-main {

            animation: none;

            opacity: 0;

        }


        .show-preloader.intro-done
        .arti-main {

            opacity: 1;

            animation:
                page-in .7s
                cubic-bezier(.22, 1, .36, 1)
                .15s backwards;

        }


        /* =====================================================
           SCROLL REVEAL
        ====================================================== */

        .js [data-reveal] {

            opacity: 0;

            transform:
                translate3d(0, 28px, 0);

            transition:
                opacity .7s
                cubic-bezier(.22, 1, .36, 1),

                transform .7s
                cubic-bezier(.22, 1, .36, 1);

            transition-delay:
                var(--reveal-delay, 0ms);

            will-change:
                opacity,
                transform;

        }


        .js [data-reveal="left"] {

            transform:
                translate3d(-32px, 0, 0);

        }


        .js [data-reveal="right"] {

            transform:
                translate3d(32px, 0, 0);

        }


        .js [data-reveal="zoom"] {

            transform:
                scale(.94);

        }


        .js [data-reveal="fade"] {

            transform: none;

        }


        .js [data-reveal].is-visible {

            opacity: 1;

            transform: none;

        }


        /* =====================================================
           ACCESSIBILITY
        ====================================================== */

        @media (prefers-reduced-motion: reduce) {

            .js [data-reveal] {

                opacity: 1 !important;

                transform: none !important;

                transition: none !important;

            }

            .arti-main {

                animation: none !important;

            }

            html {

                scroll-behavior: auto;

            }

        }

    </style>

    @stack('styles')

</head>


<body class="min-h-screen bg-white text-slate-900 antialiased">


    {{-- =====================================================
        PRELOADER
    ====================================================== --}}

    <div id="arti-preloader"
         role="status"
         aria-live="polite"
         aria-label="Chargement en cours">

        <img
            src="{{ asset('images/logo.png') }}"
            alt="ARTI CALL"
            class="arti-pre__logo"
            fetchpriority="high"
        >

        <div class="arti-pre__bar">
            <span></span>
        </div>

        <p class="arti-pre__tag">
            Centre d'appel · Fès, Maroc
        </p>

    </div>


    {{-- =====================================================
        PAGE PROGRESS
    ====================================================== --}}

    <div id="page-progress"></div>


    {{-- =====================================================
        HEADER
    ====================================================== --}}

    <header
        class="arti-fixed-header bg-white border-b border-slate-200 shadow-sm">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="h-20 flex items-center justify-between">


                {{-- LOGO --}}

                <a
                    href="{{ url('/') }}"
                    class="flex items-center -ml-3 sm:-ml-3 lg:-ml-5"
                    aria-label="ARTI CALL - Accueil">

                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="ARTI CALL - Centre d'appel à Fès"
                        class="h-11 sm:h-12 lg:h-14 w-auto"
                    >

                </a>


                {{-- DESKTOP NAVIGATION --}}

                <nav class="hidden lg:flex items-center gap-8">

                    <a
                        href="{{ url('/') }}"
                        {{ request()->is('/') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition
                        {{ request()->is('/')
                            ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600'
                            : 'text-slate-700 hover:text-red-600'
                        }}">

                        Accueil

                    </a>


                    <a
                        href="{{ url('/services') }}"
                        {{ request()->is('services*') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition
                        {{ request()->is('services*')
                            ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600'
                            : 'text-slate-700 hover:text-red-600'
                        }}">

                        Services

                    </a>


                    <a
                        href="{{ url('/secteurs') }}"
                        {{ request()->is('secteurs*') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition
                        {{ request()->is('secteurs*')
                            ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600'
                            : 'text-slate-700 hover:text-red-600'
                        }}">

                        Secteurs

                    </a>


                    <a
                        href="{{ url('/a-propos') }}"
                        {{ request()->is('a-propos*') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition
                        {{ request()->is('a-propos*')
                            ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600'
                            : 'text-slate-700 hover:text-red-600'
                        }}">

                        À propos

                    </a>


                    <a
                        href="{{ url('/faq') }}"
                        {{ request()->is('faq*') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition
                        {{ request()->is('faq*')
                            ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600'
                            : 'text-slate-700 hover:text-red-600'
                        }}">

                        FAQ

                    </a>


                    <a
                        href="{{ url('/contact') }}"
                        {{ request()->is('contact*') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition
                        {{ request()->is('contact*')
                            ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600'
                            : 'text-slate-700 hover:text-red-600'
                        }}">

                        Contact

                    </a>

                </nav>


                {{-- DESKTOP CTA --}}

                <div class="hidden lg:flex items-center">

                    <a
                        href="{{ url('/devis') }}"
                        class="inline-flex items-center gap-2
                        rounded-xl bg-red-600 px-5 py-3
                        text-sm font-bold text-white
                        shadow-sm hover:bg-red-700
                        transition">

                        <span>
                            Demander un devis
                        </span>

                        <i
                            data-lucide="arrow-right"
                            class="w-4 h-4">
                        </i>

                    </a>

                </div>


                {{-- MOBILE BUTTON --}}

                <button
                    type="button"
                    id="mobile-menu-button"
                    aria-label="Ouvrir le menu"
                    aria-expanded="false"
                    class="lg:hidden inline-flex items-center
                    justify-center w-11 h-11 rounded-xl
                    border border-slate-200 bg-white
                    text-slate-700
                    hover:border-red-300
                    hover:text-red-600
                    transition">

                    <i
                        data-lucide="menu"
                        id="menu-open-icon"
                        class="w-5 h-5">
                    </i>

                    <i
                        data-lucide="x"
                        id="menu-close-icon"
                        class="hidden w-5 h-5">
                    </i>

                </button>

            </div>

        </div>


        {{-- =====================================================
            MOBILE NAVIGATION
        ====================================================== --}}

        <div
            id="mobile-menu"
            class="arti-mobile-menu hidden lg:hidden
            border-t border-slate-200
            bg-white shadow-lg">

            <div
                class="max-w-7xl mx-auto px-4 py-5 sm:px-6">

                <nav class="flex flex-col gap-1">


                    <a
                        href="{{ url('/') }}"
                        class="rounded-lg px-4 py-3
                        text-sm font-semibold transition
                        {{ request()->is('/')
                            ? 'bg-red-50 text-red-600'
                            : 'text-slate-700 hover:bg-red-50 hover:text-red-600'
                        }}">

                        Accueil

                    </a>


                    <a
                        href="{{ url('/services') }}"
                        class="rounded-lg px-4 py-3
                        text-sm font-semibold transition
                        {{ request()->is('services*')
                            ? 'bg-red-50 text-red-600'
                            : 'text-slate-700 hover:bg-red-50 hover:text-red-600'
                        }}">

                        Services

                    </a>


                    <a
                        href="{{ url('/secteurs') }}"
                        class="rounded-lg px-4 py-3
                        text-sm font-semibold transition
                        {{ request()->is('secteurs*')
                            ? 'bg-red-50 text-red-600'
                            : 'text-slate-700 hover:bg-red-50 hover:text-red-600'
                        }}">

                        Secteurs

                    </a>


                    <a
                        href="{{ url('/a-propos') }}"
                        class="rounded-lg px-4 py-3
                        text-sm font-semibold transition
                        {{ request()->is('a-propos*')
                            ? 'bg-red-50 text-red-600'
                            : 'text-slate-700 hover:bg-red-50 hover:text-red-600'
                        }}">

                        À propos

                    </a>


                    <a
                        href="{{ url('/faq') }}"
                        class="rounded-lg px-4 py-3
                        text-sm font-semibold transition
                        {{ request()->is('faq*')
                            ? 'bg-red-50 text-red-600'
                            : 'text-slate-700 hover:bg-red-50 hover:text-red-600'
                        }}">

                        FAQ

                    </a>


                    <a
                        href="{{ url('/contact') }}"
                        class="rounded-lg px-4 py-3
                        text-sm font-semibold transition
                        {{ request()->is('contact*')
                            ? 'bg-red-50 text-red-600'
                            : 'text-slate-700 hover:bg-red-50 hover:text-red-600'
                        }}">

                        Contact

                    </a>


                    <div class="pt-3 mt-2 border-t border-slate-100">

                        <a
                            href="{{ url('/devis') }}"
                            class="flex items-center justify-center
                            gap-2 w-full rounded-xl
                            bg-red-600 px-5 py-3
                            text-sm font-bold text-white
                            hover:bg-red-700 transition">

                            <span>
                                Demander un devis
                            </span>

                            <i
                                data-lucide="arrow-right"
                                class="w-4 h-4">
                            </i>

                        </a>

                    </div>

                </nav>

            </div>

        </div>

    </header>


    {{-- =====================================================
        MAIN CONTENT
    ====================================================== --}}

    <main class="arti-main min-h-[60vh]">

        @yield('content')

    </main>


    {{-- =====================================================
        FOOTER
    ====================================================== --}}

    <footer class="bg-white border-t border-slate-200">

        <div
            class="max-w-7xl mx-auto
            px-4 sm:px-6 lg:px-8">


            <div
                class="py-14 grid
                grid-cols-1
                sm:grid-cols-2
                lg:grid-cols-4
                gap-10">


                {{-- =================================================
                    BRAND
                ================================================== --}}

                <div>

                    <a
                        href="{{ url('/') }}"
                        class="inline-flex items-center"
                        aria-label="ARTI CALL - Accueil">

                        <img
                            src="{{ asset('images/logo.png') }}"
                            alt="ARTI CALL - Centre d'appel à Fès"
                            class="h-12 w-auto"
                        >

                    </a>


                    <p
                        class="mt-5 text-sm leading-6
                        text-slate-600 max-w-xs">

                        Centre d'appel basé à Fès, Maroc,
                        spécialisé dans la relation client,
                        la téléprospection et le
                        développement commercial.

                    </p>


                    <div
                        class="mt-5 flex items-start gap-3
                        text-sm text-slate-600">

                        <i
                            data-lucide="map-pin"
                            class="w-4 h-4 mt-0.5
                            text-red-600 shrink-0">
                        </i>

                        <span>
                            Fès, Maroc
                        </span>

                    </div>

                </div>


                {{-- =================================================
                    NAVIGATION
                ================================================== --}}

                <div>

                    <h3
                        class="text-sm font-bold uppercase
                        tracking-wider text-slate-900">

                        Navigation

                    </h3>


                    <ul class="mt-5 space-y-3">

                        <li>
                            <a
                                href="{{ url('/') }}"
                                class="text-sm text-slate-600
                                hover:text-red-600 transition">

                                Accueil

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('/services') }}"
                                class="text-sm text-slate-600
                                hover:text-red-600 transition">

                                Services

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('/secteurs') }}"
                                class="text-sm text-slate-600
                                hover:text-red-600 transition">

                                Secteurs

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('/a-propos') }}"
                                class="text-sm text-slate-600
                                hover:text-red-600 transition">

                                À propos

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('/faq') }}"
                                class="text-sm text-slate-600
                                hover:text-red-600 transition">

                                FAQ

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('/contact') }}"
                                class="text-sm text-slate-600
                                hover:text-red-600 transition">

                                Contact

                            </a>
                        </li>

                    </ul>

                </div>


                {{-- =================================================
                    SERVICES
                ================================================== --}}

                <div>

                    <h3
                        class="text-sm font-bold uppercase
                        tracking-wider text-slate-900">

                        Nos services

                    </h3>


                    <ul class="mt-5 space-y-3">

                        <li>
                            <a
                                href="{{ url('/services') }}"
                                class="text-sm text-slate-600
                                hover:text-red-600 transition">

                                Inbound

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('/services') }}"
                                class="text-sm text-slate-600
                                hover:text-red-600 transition">

                                Outbound

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('/services') }}"
                                class="text-sm text-slate-600
                                hover:text-red-600 transition">

                                Téléprospection

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('/services') }}"
                                class="text-sm text-slate-600
                                hover:text-red-600 transition">

                                Service client

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ url('/services') }}"
                                class="text-sm text-slate-600
                                hover:text-red-600 transition">

                                Génération de leads

                            </a>
                        </li>

                    </ul>

                </div>


                {{-- =================================================
                    CONTACT
                ================================================== --}}

                <div>

                    <h3
                        class="text-sm font-bold uppercase
                        tracking-wider text-slate-900">

                        Contact

                    </h3>


                    <ul class="mt-5 space-y-4">


                        {{-- TELEPHONE --}}

                        <li class="flex items-start gap-3">

                            <div
                                class="w-9 h-9 rounded-lg
                                bg-red-50 flex items-center
                                justify-center shrink-0">

                                <i
                                    data-lucide="phone"
                                    class="w-4 h-4 text-red-600">
                                </i>

                            </div>


                            <div>

                                <div
                                    class="text-xs text-slate-500">

                                    Téléphone

                                </div>

                                <span
                                    class="text-sm font-semibold
                                    text-slate-800">

                                    [À compléter]

                                </span>

                            </div>

                        </li>


                        {{-- EMAIL --}}

                        <li class="flex items-start gap-3">

                            <div
                                class="w-9 h-9 rounded-lg
                                bg-red-50 flex items-center
                                justify-center shrink-0">

                                <i
                                    data-lucide="mail"
                                    class="w-4 h-4 text-red-600">
                                </i>

                            </div>


                            <div>

                                <div
                                    class="text-xs text-slate-500">

                                    Email

                                </div>

                                <span
                                    class="text-sm font-semibold
                                    text-slate-800">

                                    [À compléter]

                                </span>

                            </div>

                        </li>


                        {{-- ADRESSE --}}

                        <li class="flex items-start gap-3">

                            <div
                                class="w-9 h-9 rounded-lg
                                bg-slate-100 flex items-center
                                justify-center shrink-0">

                                <i
                                    data-lucide="map-pin"
                                    class="w-4 h-4 text-slate-700">
                                </i>

                            </div>


                            <div>

                                <div
                                    class="text-xs text-slate-500">

                                    Adresse

                                </div>

                                <span
                                    class="text-sm font-semibold
                                    text-slate-800">

                                    Fès, Maroc

                                </span>

                            </div>

                        </li>

                    </ul>


                    {{-- =================================================
                        SOCIAL MEDIA
                    ================================================== --}}

                    <div class="mt-7">

                        <h3
                            class="text-sm font-bold uppercase
                            tracking-wider text-slate-900">

                            Suivez-nous

                        </h3>

                        <div class="mt-5 flex items-center gap-2.5">

                            {{-- Facebook --}}
                            <a
                                href="#"
                                aria-label="Facebook"
                                title="Facebook"
                                class="social-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    class="fill-current"
                                    aria-hidden="true">

                                    <path d="M13.6 21v-8h2.7l.4-3h-3.1V8.1c0-.9.3-1.6 1.7-1.6h1.8V3.8c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3V10H7.5v3h2.9v8h3.2z"/>

                                </svg>

                            </a>

                            {{-- Instagram --}}
                            <a
                                href="#"
                                aria-label="Instagram"
                                title="Instagram"
                                class="social-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    aria-hidden="true">

                                    <rect x="3.5" y="3.5" width="17" height="17" rx="4"/>
                                    <circle cx="12" cy="12" r="4"/>
                                    <circle cx="17.4" cy="6.6" r="1" fill="currentColor" stroke="none"/>

                                </svg>

                            </a>

                            {{-- LinkedIn --}}
                            <a
                                href="#"
                                aria-label="LinkedIn"
                                title="LinkedIn"
                                class="social-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    class="fill-current"
                                    aria-hidden="true">

                                    <path d="M5.2 8.2A1.8 1.8 0 1 0 5.2 4.6a1.8 1.8 0 0 0 0 3.6z"/>
                                    <path d="M3.7 9.7h3v10.6h-3V9.7z"/>
                                    <path d="M9 9.7h2.9v1.45h.04c.4-.75 1.38-1.85 3.35-1.85 3.58 0 4.24 2.35 4.24 5.4v5.6h-3v-4.96c0-1.18-.02-2.7-1.65-2.7-1.65 0-1.9 1.29-1.9 2.62v5.04H9V9.7z"/>

                                </svg>

                            </a>

                            {{-- X / Twitter --}}
                            <a
                                href="#"
                                aria-label="X"
                                title="X"
                                class="social-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    class="fill-current"
                                    aria-hidden="true">

                                    <path d="M18.9 2H22l-6.77 7.74L23.2 22h-6.24l-4.89-6.39L6.48 22H3.36l7.24-8.28L2.8 2h6.4l4.42 5.84L18.9 2zm-1.1 17.8h1.73L8.26 4.1H6.4L17.8 19.8z"/>

                                </svg>

                            </a>

                            {{-- WhatsApp --}}
                            <a
                                href="#"
                                aria-label="WhatsApp"
                                title="WhatsApp"
                                class="social-icon social-whatsapp">

                                <svg
                                    viewBox="0 0 24 24"
                                    class="fill-current"
                                    aria-hidden="true">

                                    <path d="M20.5 3.5A11.7 11.7 0 0 0 12.1 0C5.6 0 .3 5.3.3 11.8c0 2.1.6 4.2 1.7 6L.2 24l6.3-1.7c1.7.9 3.6 1.3 5.6 1.3h.1c6.5 0 11.8-5.3 11.8-11.8 0-3.2-1.3-6.1-3.5-8.3zM12.1 21.5c-1.7 0-3.4-.5-4.9-1.3l-.4-.2-3.7 1 1-3.6-.2-.4a9.6 9.6 0 1 1 8.2 4.5zm5.3-7.2c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.2-1.2-.4-2.3-1.4-.8-.7-1.4-1.6-1.6-1.9-.2-.3 0-.5.1-.7.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5-.1-.1-.7-1.7-1-2.3-.3-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.2.2 2.1 3.2 5.1 4.5.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2-1.3.3-.6.3-1.2.2-1.3-.1-.1-.3-.2-.6-.4z"/>

                                </svg>

                            </a>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =====================================================
                FOOTER BOTTOM
            ====================================================== --}}

            <div
                class="border-t border-slate-200
                py-6 flex flex-col md:flex-row
                items-center justify-between
                gap-4">


                <p
                    class="text-xs sm:text-sm
                    text-slate-500
                    text-center md:text-left">

                    © {{ date('Y') }}
                    ARTI CALL.
                    Tous droits réservés.

                </p>


                <div
                    class="flex items-center gap-5">

                    <a
                        href="#"
                        class="text-xs sm:text-sm
                        text-slate-500
                        hover:text-red-600 transition">

                        Politique de confidentialité

                    </a>


                    <a
                        href="#"
                        class="text-xs sm:text-sm
                        text-slate-500
                        hover:text-red-600 transition">

                        Mentions légales

                    </a>

                </div>

            </div>

        </div>

    </footer>


    {{-- =====================================================
        JAVASCRIPT
    ====================================================== --}}

    <script>

        document.addEventListener(
            'DOMContentLoaded',
            function () {


                /* =================================================
                   INTRO
                ================================================== */

                if (
                    document.documentElement
                        .classList
                        .contains('show-preloader')
                ) {

                    var MIN_INTRO = 1500;


                    var endIntro = function () {

                        var wait =
                            Math.max(
                                0,
                                MIN_INTRO -
                                performance.now()
                            );


                        setTimeout(
                            function () {

                                if (
                                    window.artiFinishIntro
                                ) {

                                    window
                                        .artiFinishIntro();

                                }

                            },
                            wait
                        );

                    };


                    if (
                        document.readyState ===
                        'complete'
                    ) {

                        endIntro();

                    } else {

                        window.addEventListener(
                            'load',
                            endIntro
                        );

                    }

                }


                /* =================================================
                   LUCIDE
                ================================================== */

                if (
                    typeof lucide !==
                    'undefined'
                ) {

                    lucide.createIcons();

                }


                /* =================================================
                   MOBILE MENU
                ================================================== */

                var mobileMenuButton =
                    document.getElementById(
                        'mobile-menu-button'
                    );

                var mobileMenu =
                    document.getElementById(
                        'mobile-menu'
                    );

                var menuOpenIcon =
                    document.getElementById(
                        'menu-open-icon'
                    );

                var menuCloseIcon =
                    document.getElementById(
                        'menu-close-icon'
                    );


                function closeMobileMenu() {

                    if (!mobileMenu) return;

                    mobileMenu.classList.add(
                        'hidden'
                    );

                    menuOpenIcon.classList.remove(
                        'hidden'
                    );

                    menuCloseIcon.classList.add(
                        'hidden'
                    );

                    mobileMenuButton.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                }


                function openMobileMenu() {

                    mobileMenu.classList.remove(
                        'hidden'
                    );

                    menuOpenIcon.classList.add(
                        'hidden'
                    );

                    menuCloseIcon.classList.remove(
                        'hidden'
                    );

                    mobileMenuButton.setAttribute(
                        'aria-expanded',
                        'true'
                    );

                }


                if (
                    mobileMenuButton &&
                    mobileMenu &&
                    menuOpenIcon &&
                    menuCloseIcon
                ) {

                    mobileMenuButton.addEventListener(
                        'click',
                        function () {

                            if (
                                mobileMenu.classList
                                    .contains('hidden')
                            ) {

                                openMobileMenu();

                            } else {

                                closeMobileMenu();

                            }

                        }
                    );


                    mobileMenu
                        .querySelectorAll('a')
                        .forEach(function (link) {

                            link.addEventListener(
                                'click',
                                closeMobileMenu
                            );

                        });

                }


                /* =================================================
                   ANIMATIONS
                ================================================== */

                var reduceMotion =
                    window.matchMedia(
                        '(prefers-reduced-motion: reduce)'
                    ).matches;


                var main =
                    document.querySelector(
                        '.arti-main'
                    );


                /* =================================================
                   AUTO REVEAL
                ================================================== */

                function autoReveal() {

                    if (
                        !main ||
                        reduceMotion
                    ) {
                        return;
                    }


                    var selector = [

                        'h1',
                        'h2',
                        'h3',
                        'h4',

                        'p',

                        'ul',
                        'ol',
                        'dl',

                        'form',

                        'table',

                        'details',

                        'img',

                        'figure',

                        'blockquote',

                        '.grid > *'

                    ].join(',');


                    var candidates =
                        Array.prototype.slice.call(
                            main.querySelectorAll(
                                selector
                            )
                        );


                    var set =
                        new Set(candidates);


                    var targets =
                        candidates.filter(
                            function (el) {

                                if (
                                    el.closest(
                                        '[data-no-reveal]'
                                    )
                                ) {
                                    return false;
                                }


                                if (
                                    el.hasAttribute(
                                        'data-reveal'
                                    )
                                ) {
                                    return false;
                                }


                                var p =
                                    el.parentElement;


                                while (
                                    p &&
                                    p !== main
                                ) {

                                    if (
                                        set.has(p)
                                    ) {
                                        return false;
                                    }

                                    p =
                                        p.parentElement;

                                }


                                return true;

                            }
                        );


                    var counters =
                        new Map();


                    targets.forEach(
                        function (el) {

                            var parent =
                                el.parentElement;


                            var i =
                                counters.get(parent) ||
                                0;


                            counters.set(
                                parent,
                                i + 1
                            );


                            el.setAttribute(
                                'data-reveal',
                                ''
                            );


                            el.style.setProperty(
                                '--reveal-delay',
                                (
                                    Math.min(i, 6) *
                                    90
                                ) + 'ms'
                            );

                        }
                    );

                }


                autoReveal();


                function initReveal() {

                    var revealEls =
                        document.querySelectorAll(
                            '[data-reveal]'
                        );


                    revealEls.forEach(
                        function (el) {

                            if (
                                el.dataset.delay
                            ) {

                                el.style.setProperty(
                                    '--reveal-delay',
                                    el.dataset.delay +
                                    'ms'
                                );

                            }

                        }
                    );


                    function finishReveal(el) {

                        var delay =
                            parseInt(
                                el.style
                                    .getPropertyValue(
                                        '--reveal-delay'
                                    ),
                                10
                            ) || 0;


                        setTimeout(
                            function () {

                                el.removeAttribute(
                                    'data-reveal'
                                );

                                el.classList.remove(
                                    'is-visible'
                                );

                                el.style.removeProperty(
                                    '--reveal-delay'
                                );

                            },
                            1000 + delay
                        );

                    }


                    if (
                        'IntersectionObserver'
                        in window &&
                        !reduceMotion
                    ) {

                        var revealObserver =
                            new IntersectionObserver(
                                function (
                                    entries
                                ) {

                                    entries.forEach(
                                        function (
                                            entry
                                        ) {

                                            if (
                                                !entry.isIntersecting
                                            ) {
                                                return;
                                            }


                                            entry.target
                                                .classList
                                                .add(
                                                    'is-visible'
                                                );


                                            revealObserver
                                                .unobserve(
                                                    entry.target
                                                );


                                            finishReveal(
                                                entry.target
                                            );

                                        }
                                    );

                                },
                                {
                                    threshold: 0.1,

                                    rootMargin:
                                        '0px 0px -6% 0px'
                                }
                            );


                        revealEls.forEach(
                            function (el) {

                                revealObserver.observe(
                                    el
                                );

                            }
                        );


                    } else {

                        revealEls.forEach(
                            function (el) {

                                el.classList.add(
                                    'is-visible'
                                );

                            }
                        );

                    }

                }


                /* =================================================
                   START REVEAL
                ================================================== */

                if (
                    document.documentElement
                        .classList
                        .contains('show-preloader') &&

                    !document.documentElement
                        .classList
                        .contains('intro-done')
                ) {

                    document.addEventListener(
                        'arti:intro-done',
                        initReveal,
                        { once: true }
                    );

                } else {

                    initReveal();

                }


                /* =================================================
                   COUNTERS
                ================================================== */

                var countEls =
                    document.querySelectorAll(
                        '[data-count]'
                    );


                if (
                    'IntersectionObserver'
                    in window &&
                    countEls.length
                ) {

                    var countObserver =
                        new IntersectionObserver(
                            function (
                                entries
                            ) {

                                entries.forEach(
                                    function (
                                        entry
                                    ) {

                                        if (
                                            !entry.isIntersecting
                                        ) {
                                            return;
                                        }


                                        var el =
                                            entry.target;


                                        var target =
                                            parseFloat(
                                                el.dataset.count
                                            );


                                        var suffix =
                                            el.dataset.suffix ||
                                            '';


                                        var start =
                                            performance.now();


                                        function tick(now) {

                                            var p =
                                                Math.min(
                                                    (
                                                        now -
                                                        start
                                                    ) / 1600,
                                                    1
                                                );


                                            var eased =
                                                1 -
                                                Math.pow(
                                                    1 - p,
                                                    3
                                                );


                                            el.textContent =
                                                Math.round(
                                                    target *
                                                    eased
                                                ) +
                                                suffix;


                                            if (p < 1) {

                                                requestAnimationFrame(
                                                    tick
                                                );

                                            }

                                        }


                                        requestAnimationFrame(
                                            tick
                                        );


                                        countObserver.unobserve(
                                            el
                                        );

                                    }
                                );

                            },
                            {
                                threshold: 0.5
                            }
                        );


                    countEls.forEach(
                        function (el) {

                            countObserver.observe(
                                el
                            );

                        }
                    );

                }


                /* =================================================
                   HEADER SCROLL
                ================================================== */

                var header =
                    document.querySelector(
                        '.arti-fixed-header'
                    );


                function onScroll() {

                    if (header) {

                        header.classList.toggle(
                            'is-scrolled',
                            window.scrollY > 10
                        );

                    }

                }


                onScroll();


                window.addEventListener(
                    'scroll',
                    onScroll,
                    {
                        passive: true
                    }
                );


                /* =================================================
                   PAGE TRANSITION
                ================================================== */

                var progress =
                    document.getElementById(
                        'page-progress'
                    );


                document.addEventListener(
                    'click',
                    function (e) {

                        if (reduceMotion) {
                            return;
                        }


                        var link =
                            e.target.closest('a');


                        if (!link) {
                            return;
                        }


                        var href =
                            link.getAttribute(
                                'href'
                            );


                        if (

                            !href ||

                            e.defaultPrevented ||

                            e.button !== 0 ||

                            e.metaKey ||
                            e.ctrlKey ||
                            e.shiftKey ||
                            e.altKey ||

                            link.target === '_blank' ||

                            link.hasAttribute(
                                'download'
                            ) ||

                            href.charAt(0) === '#' ||

                            href.indexOf(
                                'mailto:'
                            ) === 0 ||

                            href.indexOf(
                                'tel:'
                            ) === 0 ||

                            link.origin !==
                            window.location.origin ||

                            link.href ===
                            window.location.href

                        ) {

                            return;

                        }


                        e.preventDefault();


                        if (main) {

                            main.classList.add(
                                'is-leaving'
                            );

                        }


                        if (progress) {

                            progress.classList.add(
                                'is-active'
                            );

                        }


                        setTimeout(
                            function () {

                                window.location.href =
                                    link.href;

                            },
                            300
                        );

                    }
                );


                /* =================================================
                   BROWSER BACK
                ================================================== */

                window.addEventListener(
                    'pageshow',
                    function (e) {

                        if (e.persisted) {

                            if (main) {

                                main.classList.remove(
                                    'is-leaving'
                                );

                            }


                            if (progress) {

                                progress.classList.remove(
                                    'is-active'
                                );

                            }

                        }

                    }
                );

            }

        );

    </script>


    @stack('scripts')

</body>

</html>