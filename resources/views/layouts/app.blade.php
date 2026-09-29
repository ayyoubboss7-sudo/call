<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="@yield('meta_description', 'ARTI CALL - Centre d’appel à Fès, Maroc. Solutions professionnelles de relation client, téléprospection et développement commercial.')">

    <meta name="keywords"
        content="centre d'appel Fès, centre d'appel Maroc, call center Fès, téléprospection Maroc, télémarketing Maroc, service client Maroc, génération de leads">

    <meta name="author" content="ARTI CALL">

    <title>
        @yield('title', 'ARTI CALL - Centre d’appel à Fès, Maroc')
    </title>

    {{-- Vite / Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest"></script>

    {{-- =========================================================
        CSS DIRECT POUR GARANTIR LE HEADER FIXE
    ========================================================== --}}
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
        }

        .arti-fixed-header {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
            z-index: 99999 !important;
        }

        .arti-main {
            padding-top: 80px !important;
        }

        .arti-mobile-menu {
            position: fixed !important;
            top: 80px !important;
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
            z-index: 99998 !important;
        }
    </style>

    @stack('styles')
</head>

<body class="min-h-screen bg-white text-slate-900 antialiased">

    {{-- =========================================================
        HEADER FIXE
    ========================================================== --}}
    <header class="arti-fixed-header bg-white border-b border-slate-200 shadow-sm">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="h-20 flex items-center justify-between">

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="flex items-center gap-3 group">

                    <div
                        class="w-11 h-11 rounded-xl bg-red-600 flex items-center justify-center shadow-sm group-hover:bg-red-700 transition">

                        <i data-lucide="phone-call" class="w-5 h-5 text-white">
                        </i>

                    </div>

                    <div class="leading-tight">

                        <div class="text-xl font-extrabold tracking-tight text-slate-900">
                            ARTI <span class="text-red-600">CALL</span>
                        </div>

                        <div class="text-[11px] font-medium text-slate-500 uppercase tracking-wider">
                            Centre d'appel
                        </div>

                    </div>

                </a>


                {{-- Desktop Navigation --}}
                <nav class="hidden lg:flex items-center gap-8">

                    <a href="{{ url('/') }}"
                        class="text-sm font-semibold text-slate-700 hover:text-red-600 transition">
                        Accueil
                    </a>

                    <a href="{{ url('/services') }}"
                        class="text-sm font-semibold text-slate-700 hover:text-red-600 transition">
                        Services
                    </a>

                    <a href="{{ url('/secteurs') }}"
                        class="text-sm font-semibold text-slate-700 hover:text-red-600 transition">
                        Secteurs
                    </a>

                    <a href="{{ url('/a-propos') }}"
                        class="text-sm font-semibold text-slate-700 hover:text-red-600 transition">
                        À propos
                    </a>

                    <a href="{{ url('/faq') }}"
                        class="text-sm font-semibold text-slate-700 hover:text-red-600 transition">
                        FAQ
                    </a>

                    <a href="{{ url('/contact') }}"
                        class="text-sm font-semibold text-slate-700 hover:text-red-600 transition">
                        Contact
                    </a>

                </nav>


                {{-- Desktop CTA --}}
                <div class="hidden lg:flex items-center">

                    <a href="{{ url('/contact') }}"
                        class="inline-flex items-center gap-2 rounded-xl bg-red-600 px-5 py-3 text-sm font-bold text-white shadow-sm hover:bg-red-700 transition">

                        <span>Demander un devis</span>

                        <i data-lucide="arrow-right" class="w-4 h-4">
                        </i>

                    </a>

                </div>


                {{-- Mobile menu button --}}
                <button type="button" id="mobile-menu-button" aria-label="Ouvrir le menu" aria-expanded="false"
                    class="lg:hidden inline-flex items-center justify-center w-11 h-11 rounded-xl border border-slate-200 bg-white text-slate-700 hover:border-red-300 hover:text-red-600 transition">

                    <i data-lucide="menu" id="menu-open-icon" class="w-5 h-5">
                    </i>

                    <i data-lucide="x" id="menu-close-icon" class="hidden w-5 h-5">
                    </i>

                </button>

            </div>

        </div>


        {{-- =====================================================
            MOBILE NAVIGATION
        ====================================================== --}}
        <div id="mobile-menu" class="arti-mobile-menu hidden lg:hidden border-t border-slate-200 bg-white shadow-lg">

            <div class="max-w-7xl mx-auto px-4 py-5 sm:px-6">

                <nav class="flex flex-col gap-1">

                    <a href="{{ url('/') }}"
                        class="rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-red-50 hover:text-red-600 transition">
                        Accueil
                    </a>

                    <a href="{{ url('/services') }}"
                        class="rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-red-50 hover:text-red-600 transition">
                        Services
                    </a>

                    <a href="{{ url('/secteurs') }}"
                        class="rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-red-50 hover:text-red-600 transition">
                        Secteurs
                    </a>

                    <a href="{{ url('/a-propos') }}"
                        class="rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-red-50 hover:text-red-600 transition">
                        À propos
                    </a>

                    <a href="{{ url('/faq') }}"
                        class="rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-red-50 hover:text-red-600 transition">
                        FAQ
                    </a>

                    <a href="{{ url('/contact') }}"
                        class="rounded-lg px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-red-50 hover:text-red-600 transition">
                        Contact
                    </a>

                    <div class="pt-3 mt-2 border-t border-slate-100">

                        <a href="{{ url('/contact') }}"
                            class="flex items-center justify-center gap-2 w-full rounded-xl bg-red-600 px-5 py-3 text-sm font-bold text-white hover:bg-red-700 transition">

                            <span>Demander un devis</span>

                            <i data-lucide="arrow-right" class="w-4 h-4">
                            </i>

                        </a>

                    </div>

                </nav>

            </div>

        </div>

    </header>


    {{-- =========================================================
        MAIN CONTENT
    ========================================================== --}}
    <main class="arti-main min-h-[60vh]">

        @yield('content')

    </main>


    {{-- =========================================================
        CTA
    ========================================================== --}}
    <section class="bg-slate-950">

        <div class="max-w-7xl mx-auto px-4 py-14 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-3xl bg-red-600 px-6 py-10 sm:px-10 lg:px-14">

                {{-- Decorative circles --}}
                <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-white/10">
                </div>

                <div class="absolute -left-20 -bottom-24 w-72 h-72 rounded-full bg-white/5">
                </div>


                <div class="relative z-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">

                    <div class="max-w-2xl">

                        <span
                            class="inline-flex items-center gap-2 rounded-full bg-white/15 px-4 py-2 text-xs font-bold uppercase tracking-wider text-white mb-4">

                            <span class="w-2 h-2 rounded-full bg-white"></span>

                            Parlons de votre projet

                        </span>

                        <h2 class="text-3xl sm:text-4xl font-extrabold text-white leading-tight">
                            Besoin d'une solution de relation client ?
                        </h2>

                        <p class="mt-4 text-base leading-7 text-white/85 max-w-xl">
                            ARTI CALL accompagne les entreprises dans leurs
                            opérations de service client, téléprospection et
                            développement commercial depuis Fès, Maroc.
                        </p>

                    </div>


                    <div class="flex flex-col sm:flex-row gap-3 shrink-0">

                        <a href="{{ url('/contact') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3.5 text-sm font-bold text-red-600 shadow-sm hover:bg-slate-100 transition">

                            <span>Demander un devis</span>

                            <i data-lucide="arrow-right" class="w-4 h-4">
                            </i>

                        </a>

                        <a href="{{ url('/services') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/40 bg-white/10 px-6 py-3.5 text-sm font-bold text-white hover:bg-white/20 transition">

                            <span>Nos services</span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        FOOTER
    ========================================================== --}}
    <footer class="bg-white border-t border-slate-200">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="py-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

                {{-- Brand --}}
                <div>

                    <a href="{{ url('/') }}" class="inline-flex items-center gap-3">

                        <div class="w-10 h-10 rounded-xl bg-red-600 flex items-center justify-center">

                            <i data-lucide="phone-call" class="w-5 h-5 text-white">
                            </i>

                        </div>

                        <div>

                            <div class="text-lg font-extrabold text-slate-900">
                                ARTI <span class="text-red-600">CALL</span>
                            </div>

                            <div class="text-[10px] uppercase tracking-wider text-slate-500">
                                Centre d'appel
                            </div>

                        </div>

                    </a>


                    <p class="mt-5 text-sm leading-6 text-slate-600 max-w-xs">
                        Centre d'appel basé à Fès, Maroc, spécialisé dans
                        la relation client, la téléprospection et le
                        développement commercial.
                    </p>


                    <div class="mt-5 flex items-start gap-3 text-sm text-slate-600">

                        <i data-lucide="map-pin" class="w-4 h-4 mt-0.5 text-red-600 shrink-0">
                        </i>

                        <span>
                            Fès, Maroc
                        </span>

                    </div>

                </div>


                {{-- Navigation --}}
                <div>

                    <h3 class="text-sm font-bold uppercase tracking-wider text-slate-900">
                        Navigation
                    </h3>

                    <ul class="mt-5 space-y-3">

                        <li>
                            <a href="{{ url('/') }}"
                                class="text-sm text-slate-600 hover:text-red-600 transition">
                                Accueil
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/services') }}"
                                class="text-sm text-slate-600 hover:text-red-600 transition">
                                Services
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/secteurs') }}"
                                class="text-sm text-slate-600 hover:text-red-600 transition">
                                Secteurs
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/a-propos') }}"
                                class="text-sm text-slate-600 hover:text-red-600 transition">
                                À propos
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/faq') }}"
                                class="text-sm text-slate-600 hover:text-red-600 transition">
                                FAQ
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/contact') }}"
                                class="text-sm text-slate-600 hover:text-red-600 transition">
                                Contact
                            </a>
                        </li>

                    </ul>

                </div>


                {{-- Services --}}
                <div>

                    <h3 class="text-sm font-bold uppercase tracking-wider text-slate-900">
                        Nos services
                    </h3>

                    <ul class="mt-5 space-y-3">

                        <li>
                            <a href="{{ url('/services') }}"
                                class="text-sm text-slate-600 hover:text-red-600 transition">
                                Inbound
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/services') }}"
                                class="text-sm text-slate-600 hover:text-red-600 transition">
                                Outbound
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/services') }}"
                                class="text-sm text-slate-600 hover:text-red-600 transition">
                                Téléprospection
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/services') }}"
                                class="text-sm text-slate-600 hover:text-red-600 transition">
                                Service client
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/services') }}"
                                class="text-sm text-slate-600 hover:text-red-600 transition">
                                Génération de leads
                            </a>
                        </li>

                    </ul>

                </div>


                {{-- Contact --}}
                <div>

                    <h3 class="text-sm font-bold uppercase tracking-wider text-slate-900">
                        Contact
                    </h3>

                    <ul class="mt-5 space-y-4">

                        {{-- Téléphone --}}
                        <li class="flex items-start gap-3">

                            <div class="w-9 h-9 rounded-lg bg-red-50 flex items-center justify-center shrink-0">

                                <i data-lucide="phone" class="w-4 h-4 text-red-600">
                                </i>

                            </div>

                            <div>

                                <div class="text-xs text-slate-500">
                                    Téléphone
                                </div>

                                <span class="text-sm font-semibold text-slate-800">
                                    [À compléter]
                                </span>

                            </div>

                        </li>


                        {{-- Email --}}
                        <li class="flex items-start gap-3">

                            <div class="w-9 h-9 rounded-lg bg-red-50 flex items-center justify-center shrink-0">

                                <i data-lucide="mail" class="w-4 h-4 text-red-600">
                                </i>

                            </div>

                            <div>

                                <div class="text-xs text-slate-500">
                                    Email
                                </div>

                                <span class="text-sm font-semibold text-slate-800">
                                    [À compléter]
                                </span>

                            </div>

                        </li>


                        {{-- Adresse --}}
                        <li class="flex items-start gap-3">

                            <div class="w-9 h-9 rounded-lg bg-slate-100 flex items-center justify-center shrink-0">

                                <i data-lucide="map-pin" class="w-4 h-4 text-slate-700">
                                </i>

                            </div>

                            <div>

                                <div class="text-xs text-slate-500">
                                    Adresse
                                </div>

                                <span class="text-sm font-semibold text-slate-800">
                                    Fès, Maroc
                                </span>

                            </div>

                        </li>

                    </ul>


                    {{-- Réseaux sociaux --}}
                    <div class="mt-6 flex items-center gap-3">

                        <a href="#" aria-label="LinkedIn"
                            class="w-9 h-9 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 hover:border-red-600 hover:bg-red-600 hover:text-white transition">

                            <i data-lucide="linkedin" class="w-4 h-4">
                            </i>

                        </a>

                        <a href="#" aria-label="Facebook"
                            class="w-9 h-9 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 hover:border-red-600 hover:bg-red-600 hover:text-white transition">

                            <i data-lucide="facebook" class="w-4 h-4">
                            </i>

                        </a>

                        <a href="#" aria-label="Instagram"
                            class="w-9 h-9 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 hover:border-red-600 hover:bg-red-600 hover:text-white transition">

                            <i data-lucide="instagram" class="w-4 h-4">
                            </i>

                        </a>

                    </div>

                </div>

            </div>


            {{-- Bottom footer --}}
            <div class="border-t border-slate-200 py-6 flex flex-col md:flex-row items-center justify-between gap-4">

                <p class="text-xs sm:text-sm text-slate-500 text-center md:text-left">
                    © {{ date('Y') }} ARTI CALL. Tous droits réservés.
                </p>


                <div class="flex items-center gap-5">

                    <a href="#" class="text-xs sm:text-sm text-slate-500 hover:text-red-600 transition">
                        Politique de confidentialité
                    </a>

                    <a href="#" class="text-xs sm:text-sm text-slate-500 hover:text-red-600 transition">
                        Mentions légales
                    </a>

                </div>

            </div>

        </div>

    </footer>


    {{-- =========================================================
        JAVASCRIPT
    ========================================================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            /*
             * Initialisation des icônes Lucide
             */
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }


            /*
             * Mobile menu
             */
            const mobileMenuButton =
                document.getElementById('mobile-menu-button');

            const mobileMenu =
                document.getElementById('mobile-menu');

            const menuOpenIcon =
                document.getElementById('menu-open-icon');

            const menuCloseIcon =
                document.getElementById('menu-close-icon');


            if (
                mobileMenuButton &&
                mobileMenu &&
                menuOpenIcon &&
                menuCloseIcon
            ) {

                mobileMenuButton.addEventListener('click', function() {

                    const isOpen = !mobileMenu.classList.contains('hidden');


                    if (isOpen) {

                        mobileMenu.classList.add('hidden');

                        menuOpenIcon.classList.remove('hidden');

                        menuCloseIcon.classList.add('hidden');

                        mobileMenuButton.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                    } else {

                        mobileMenu.classList.remove('hidden');

                        menuOpenIcon.classList.add('hidden');

                        menuCloseIcon.classList.remove('hidden');

                        mobileMenuButton.setAttribute(
                            'aria-expanded',
                            'true'
                        );

                    }

                });


                /*
                 * Fermer le menu mobile après clic
                 */
                const mobileLinks =
                    mobileMenu.querySelectorAll('a');


                mobileLinks.forEach(function(link) {

                    link.addEventListener('click', function() {

                        mobileMenu.classList.add('hidden');

                        menuOpenIcon.classList.remove('hidden');

                        menuCloseIcon.classList.add('hidden');

                        mobileMenuButton.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                    });

                });

            }

        });
    </script>

    @stack('scripts')

</body>

</html>
