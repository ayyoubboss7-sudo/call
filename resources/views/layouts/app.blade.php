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

    {{-- Marque JS actif (les animations ne se cachent que si JS fonctionne) --}}
    <script>document.documentElement.classList.add('js');</script>

    {{-- Vite / Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
        }

        /* ===== Header fixe ===== */
        .arti-fixed-header {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
            z-index: 99999 !important;
            transition: box-shadow .3s ease;
        }

        .arti-fixed-header.is-scrolled {
            box-shadow: 0 8px 24px -12px rgba(15, 23, 42, .25);
        }

        .arti-main {
            padding-top: 80px !important;
            animation: page-in .55s cubic-bezier(.22, 1, .36, 1) both;
        }

        .arti-mobile-menu {
            position: fixed !important;
            top: 80px !important;
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
            z-index: 99998 !important;
        }

        /* ===== Transition entre pages ===== */
        @keyframes page-in {
            from {
                opacity: 0;
                transform: translateY(14px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        .arti-main.is-leaving {
            opacity: 0;
            transform: translateY(-8px);
            transition: opacity .28s ease, transform .28s ease;
        }

        /* ===== Barre de progression ===== */
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
            transition: width 2s cubic-bezier(.1, .6, .2, 1), opacity .2s;
        }

        /* ===== Scroll reveal (automatique sur toutes les pages) ===== */
        .js [data-reveal] {
            opacity: 0;
            transform: translate3d(0, 28px, 0);
            transition: opacity .7s cubic-bezier(.22, 1, .36, 1),
                        transform .7s cubic-bezier(.22, 1, .36, 1);
            transition-delay: var(--reveal-delay, 0ms);
            will-change: opacity, transform;
        }

        .js [data-reveal="left"]  { transform: translate3d(-32px, 0, 0); }
        .js [data-reveal="right"] { transform: translate3d(32px, 0, 0); }
        .js [data-reveal="zoom"]  { transform: scale(.94); }
        .js [data-reveal="fade"]  { transform: none; }

        .js [data-reveal].is-visible {
            opacity: 1;
            transform: none;
        }

        /* ===== Accessibilité : réduire les animations ===== */
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

    {{-- Barre de progression --}}
    <div id="page-progress"></div>

    {{-- =========================================================
    HEADER FIXE
========================================================== --}}
    <header class="arti-fixed-header bg-white border-b border-slate-200 shadow-sm">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="h-20 flex items-center justify-between">

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="flex items-center -ml-3 sm:-ml-3 lg:-ml-5" aria-label="ARTI CALL - Accueil">
                    <img src="{{ asset('images/logo.png') }}"
                         alt="ARTI CALL - Centre d'appel à Fès"
                         class="h-11 sm:h-12 lg:h-14 w-auto">
                </a>


                {{-- Desktop Navigation --}}
                <nav class="hidden lg:flex items-center gap-8">

                    <a href="{{ url('/') }}" {{ request()->is('/') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition {{ request()->is('/') ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600' : 'text-slate-700 hover:text-red-600' }}">Accueil</a>

                    <a href="{{ url('/services') }}" {{ request()->is('services*') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition {{ request()->is('services*') ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600' : 'text-slate-700 hover:text-red-600' }}">Services</a>

                    <a href="{{ url('/secteurs') }}" {{ request()->is('secteurs*') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition {{ request()->is('secteurs*') ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600' : 'text-slate-700 hover:text-red-600' }}">Secteurs</a>

                    <a href="{{ url('/a-propos') }}" {{ request()->is('a-propos*') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition {{ request()->is('a-propos*') ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600' : 'text-slate-700 hover:text-red-600' }}">À propos</a>

                    <a href="{{ url('/faq') }}" {{ request()->is('faq*') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition {{ request()->is('faq*') ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600' : 'text-slate-700 hover:text-red-600' }}">FAQ</a>

                    <a href="{{ url('/contact') }}" {{ request()->is('contact*') ? 'aria-current=page' : '' }}
                        class="relative text-sm font-semibold transition {{ request()->is('contact*') ? 'text-red-600 after:absolute after:left-0 after:-bottom-[29px] after:h-[3px] after:w-full after:rounded-full after:bg-red-600' : 'text-slate-700 hover:text-red-600' }}">Contact</a>

                </nav>


                {{-- Desktop CTA --}}
                <div class="hidden lg:flex items-center">
                    <a href="{{ url('/devis') }}"
                        class="inline-flex items-center gap-2 rounded-xl bg-red-600 px-5 py-3 text-sm font-bold text-white shadow-sm hover:bg-red-700 transition">
                        <span>Demander un devis</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>


                {{-- Mobile menu button --}}
                <button type="button" id="mobile-menu-button" aria-label="Ouvrir le menu" aria-expanded="false"
                    class="lg:hidden inline-flex items-center justify-center w-11 h-11 rounded-xl border border-slate-200 bg-white text-slate-700 hover:border-red-300 hover:text-red-600 transition">
                    <i data-lucide="menu" id="menu-open-icon" class="w-5 h-5"></i>
                    <i data-lucide="x" id="menu-close-icon" class="hidden w-5 h-5"></i>
                </button>

            </div>

        </div>


        {{-- MOBILE NAVIGATION --}}
        <div id="mobile-menu" class="arti-mobile-menu hidden lg:hidden border-t border-slate-200 bg-white shadow-lg">

            <div class="max-w-7xl mx-auto px-4 py-5 sm:px-6">

                <nav class="flex flex-col gap-1">

                    <a href="{{ url('/') }}" {{ request()->is('/') ? 'aria-current=page' : '' }}
                        class="rounded-lg px-4 py-3 text-sm font-semibold transition {{ request()->is('/') ? 'bg-red-50 text-red-600' : 'text-slate-700 hover:bg-red-50 hover:text-red-600' }}">Accueil</a>

                    <a href="{{ url('/services') }}" {{ request()->is('services*') ? 'aria-current=page' : '' }}
                        class="rounded-lg px-4 py-3 text-sm font-semibold transition {{ request()->is('services*') ? 'bg-red-50 text-red-600' : 'text-slate-700 hover:bg-red-50 hover:text-red-600' }}">Services</a>

                    <a href="{{ url('/secteurs') }}" {{ request()->is('secteurs*') ? 'aria-current=page' : '' }}
                        class="rounded-lg px-4 py-3 text-sm font-semibold transition {{ request()->is('secteurs*') ? 'bg-red-50 text-red-600' : 'text-slate-700 hover:bg-red-50 hover:text-red-600' }}">Secteurs</a>

                    <a href="{{ url('/a-propos') }}" {{ request()->is('a-propos*') ? 'aria-current=page' : '' }}
                        class="rounded-lg px-4 py-3 text-sm font-semibold transition {{ request()->is('a-propos*') ? 'bg-red-50 text-red-600' : 'text-slate-700 hover:bg-red-50 hover:text-red-600' }}">À propos</a>

                    <a href="{{ url('/faq') }}" {{ request()->is('faq*') ? 'aria-current=page' : '' }}
                        class="rounded-lg px-4 py-3 text-sm font-semibold transition {{ request()->is('faq*') ? 'bg-red-50 text-red-600' : 'text-slate-700 hover:bg-red-50 hover:text-red-600' }}">FAQ</a>

                    <a href="{{ url('/contact') }}" {{ request()->is('contact*') ? 'aria-current=page' : '' }}
                        class="rounded-lg px-4 py-3 text-sm font-semibold transition {{ request()->is('contact*') ? 'bg-red-50 text-red-600' : 'text-slate-700 hover:bg-red-50 hover:text-red-600' }}">Contact</a>

                    <div class="pt-3 mt-2 border-t border-slate-100">
                        <a href="{{ url('/devis') }}"
                            class="flex items-center justify-center gap-2 w-full rounded-xl bg-red-600 px-5 py-3 text-sm font-bold text-white hover:bg-red-700 transition">
                            <span>Demander un devis</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
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
  


    {{-- =========================================================
        FOOTER
    ========================================================== --}}
    <footer class="bg-white border-t border-slate-200">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="py-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

                {{-- Brand --}}
                <div>

                  <a href="{{ url('/') }}" class="inline-flex items-center" aria-label="ARTI CALL - Accueil">
    <img src="{{ asset('images/logo.png') }}"
         alt="ARTI CALL - Centre d'appel à Fès"
         class="h-12 w-auto">
</a>
                    <p class="mt-5 text-sm leading-6 text-slate-600 max-w-xs">
                        Centre d'appel basé à Fès, Maroc, spécialisé dans
                        la relation client, la téléprospection et le
                        développement commercial.
                    </p>

                    <div class="mt-5 flex items-start gap-3 text-sm text-slate-600">
                        <i data-lucide="map-pin" class="w-4 h-4 mt-0.5 text-red-600 shrink-0"></i>
                        <span>Fès, Maroc</span>
                    </div>

                </div>


                {{-- Navigation --}}
                <div>

                    <h3 class="text-sm font-bold uppercase tracking-wider text-slate-900">Navigation</h3>

                    <ul class="mt-5 space-y-3">
                        <li><a href="{{ url('/') }}" class="text-sm text-slate-600 hover:text-red-600 transition">Accueil</a></li>
                        <li><a href="{{ url('/services') }}" class="text-sm text-slate-600 hover:text-red-600 transition">Services</a></li>
                        <li><a href="{{ url('/secteurs') }}" class="text-sm text-slate-600 hover:text-red-600 transition">Secteurs</a></li>
                        <li><a href="{{ url('/a-propos') }}" class="text-sm text-slate-600 hover:text-red-600 transition">À propos</a></li>
                        <li><a href="{{ url('/faq') }}" class="text-sm text-slate-600 hover:text-red-600 transition">FAQ</a></li>
                        <li><a href="{{ url('/contact') }}" class="text-sm text-slate-600 hover:text-red-600 transition">Contact</a></li>
                    </ul>

                </div>


                {{-- Services --}}
                <div>

                    <h3 class="text-sm font-bold uppercase tracking-wider text-slate-900">Nos services</h3>

                    <ul class="mt-5 space-y-3">
                        <li><a href="{{ url('/services') }}" class="text-sm text-slate-600 hover:text-red-600 transition">Inbound</a></li>
                        <li><a href="{{ url('/services') }}" class="text-sm text-slate-600 hover:text-red-600 transition">Outbound</a></li>
                        <li><a href="{{ url('/services') }}" class="text-sm text-slate-600 hover:text-red-600 transition">Téléprospection</a></li>
                        <li><a href="{{ url('/services') }}" class="text-sm text-slate-600 hover:text-red-600 transition">Service client</a></li>
                        <li><a href="{{ url('/services') }}" class="text-sm text-slate-600 hover:text-red-600 transition">Génération de leads</a></li>
                    </ul>

                </div>


                {{-- Contact --}}
                <div>

                    <h3 class="text-sm font-bold uppercase tracking-wider text-slate-900">Contact</h3>

                    <ul class="mt-5 space-y-4">

                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-lg bg-red-50 flex items-center justify-center shrink-0">
                                <i data-lucide="phone" class="w-4 h-4 text-red-600"></i>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500">Téléphone</div>
                                <span class="text-sm font-semibold text-slate-800">[À compléter]</span>
                            </div>
                        </li>

                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-lg bg-red-50 flex items-center justify-center shrink-0">
                                <i data-lucide="mail" class="w-4 h-4 text-red-600"></i>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500">Email</div>
                                <span class="text-sm font-semibold text-slate-800">[À compléter]</span>
                            </div>
                        </li>

                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-lg bg-slate-100 flex items-center justify-center shrink-0">
                                <i data-lucide="map-pin" class="w-4 h-4 text-slate-700"></i>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500">Adresse</div>
                                <span class="text-sm font-semibold text-slate-800">Fès, Maroc</span>
                            </div>
                        </li>

                    </ul>

                    {{-- Réseaux sociaux --}}
                    <div class="mt-6 flex items-center gap-3">

                        <a href="#" aria-label="LinkedIn"
                            class="w-9 h-9 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 hover:border-red-600 hover:bg-red-600 hover:text-white transition">
                            <i data-lucide="linkedin" class="w-4 h-4"></i>
                        </a>

                        <a href="#" aria-label="Facebook"
                            class="w-9 h-9 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 hover:border-red-600 hover:bg-red-600 hover:text-white transition">
                            <i data-lucide="facebook" class="w-4 h-4"></i>
                        </a>

                        <a href="#" aria-label="Instagram"
                            class="w-9 h-9 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 hover:border-red-600 hover:bg-red-600 hover:text-white transition">
                            <i data-lucide="instagram" class="w-4 h-4"></i>
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
                    <a href="#" class="text-xs sm:text-sm text-slate-500 hover:text-red-600 transition">Politique de confidentialité</a>
                    <a href="#" class="text-xs sm:text-sm text-slate-500 hover:text-red-600 transition">Mentions légales</a>
                </div>

            </div>

        </div>

    </footer>


    {{-- =========================================================
    JAVASCRIPT
========================================================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            /* ---------- Icônes Lucide ---------- */
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }


            /* ---------- Menu mobile ---------- */
            var mobileMenuButton = document.getElementById('mobile-menu-button');
            var mobileMenu = document.getElementById('mobile-menu');
            var menuOpenIcon = document.getElementById('menu-open-icon');
            var menuCloseIcon = document.getElementById('menu-close-icon');

            function closeMobileMenu() {
                mobileMenu.classList.add('hidden');
                menuOpenIcon.classList.remove('hidden');
                menuCloseIcon.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            }

            function openMobileMenu() {
                mobileMenu.classList.remove('hidden');
                menuOpenIcon.classList.add('hidden');
                menuCloseIcon.classList.remove('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'true');
            }

            if (mobileMenuButton && mobileMenu && menuOpenIcon && menuCloseIcon) {

                mobileMenuButton.addEventListener('click', function () {
                    if (mobileMenu.classList.contains('hidden')) {
                        openMobileMenu();
                    } else {
                        closeMobileMenu();
                    }
                });

                mobileMenu.querySelectorAll('a').forEach(function (link) {
                    link.addEventListener('click', closeMobileMenu);
                });
            }


            /* =====================================================
               ANIMATIONS
            ===================================================== */
            var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            var main = document.querySelector('.arti-main');


            /* ---------- 1. Scroll reveal automatique (toutes les pages) ----------
               Pour exclure une zone : ajouter l'attribut data-no-reveal */
            function autoReveal() {
                if (!main || reduceMotion) return;

                var selector = [
                    'h1', 'h2', 'h3', 'h4',
                    'p', 'ul', 'ol', 'dl', 'form', 'table',
                    'details', 'img', 'figure', 'blockquote',
                    '.grid > *'
                ].join(',');

                var candidates = Array.prototype.slice.call(main.querySelectorAll(selector));
                var set = new Set(candidates);

                var targets = candidates.filter(function (el) {
                    if (el.closest('[data-no-reveal]')) return false;
                    if (el.hasAttribute('data-reveal')) return false;

                    var p = el.parentElement;
                    while (p && p !== main) {
                        if (set.has(p)) return false;
                        p = p.parentElement;
                    }
                    return true;
                });

                var counters = new Map();

                targets.forEach(function (el) {
                    var parent = el.parentElement;
                    var i = counters.get(parent) || 0;
                    counters.set(parent, i + 1);

                    el.setAttribute('data-reveal', '');
                    el.style.setProperty('--reveal-delay', (Math.min(i, 6) * 90) + 'ms');
                });
            }

            autoReveal();

            var revealEls = document.querySelectorAll('[data-reveal]');

            revealEls.forEach(function (el) {
                if (el.dataset.delay) {
                    el.style.setProperty('--reveal-delay', el.dataset.delay + 'ms');
                }
            });

            function finishReveal(el) {
                var delay = parseInt(el.style.getPropertyValue('--reveal-delay'), 10) || 0;

                setTimeout(function () {
                    el.removeAttribute('data-reveal');
                    el.classList.remove('is-visible');
                    el.style.removeProperty('--reveal-delay');
                }, 1000 + delay);
            }

            if ('IntersectionObserver' in window && !reduceMotion) {

                var revealObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (!entry.isIntersecting) return;

                        entry.target.classList.add('is-visible');
                        revealObserver.unobserve(entry.target);
                        finishReveal(entry.target);
                    });
                }, { threshold: 0.1, rootMargin: '0px 0px -6% 0px' });

                revealEls.forEach(function (el) { revealObserver.observe(el); });

            } else {
                revealEls.forEach(function (el) { el.classList.add('is-visible'); });
            }


            /* ---------- 2. Compteurs animés ----------
               Usage : <span data-count="100" data-suffix="+">0</span> */
            var countEls = document.querySelectorAll('[data-count]');

            if ('IntersectionObserver' in window && countEls.length) {

                var countObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (!entry.isIntersecting) return;

                        var el = entry.target;
                        var target = parseFloat(el.dataset.count);
                        var suffix = el.dataset.suffix || '';
                        var start = performance.now();

                        function tick(now) {
                            var p = Math.min((now - start) / 1600, 1);
                            var eased = 1 - Math.pow(1 - p, 3);
                            el.textContent = Math.round(target * eased) + suffix;
                            if (p < 1) requestAnimationFrame(tick);
                        }

                        requestAnimationFrame(tick);
                        countObserver.unobserve(el);
                    });
                }, { threshold: 0.5 });

                countEls.forEach(function (el) { countObserver.observe(el); });
            }


            /* ---------- 3. Header : ombre au scroll ---------- */
            var header = document.querySelector('.arti-fixed-header');

            function onScroll() {
                if (header) {
                    header.classList.toggle('is-scrolled', window.scrollY > 10);
                }
            }

            onScroll();
            window.addEventListener('scroll', onScroll, { passive: true });


            /* ---------- 4. Transition entre pages ---------- */
            var progress = document.getElementById('page-progress');

            document.addEventListener('click', function (e) {
                if (reduceMotion) return;

                var link = e.target.closest('a');
                if (!link) return;

                var href = link.getAttribute('href');

                if (
                    !href ||
                    e.defaultPrevented ||
                    e.button !== 0 ||
                    e.metaKey || e.ctrlKey || e.shiftKey || e.altKey ||
                    link.target === '_blank' ||
                    link.hasAttribute('download') ||
                    href.charAt(0) === '#' ||
                    href.indexOf('mailto:') === 0 ||
                    href.indexOf('tel:') === 0 ||
                    link.origin !== window.location.origin ||
                    link.href === window.location.href
                ) return;

                e.preventDefault();

                if (main) main.classList.add('is-leaving');
                if (progress) progress.classList.add('is-active');

                setTimeout(function () {
                    window.location.href = link.href;
                }, 300);
            });

            // Bouton "Retour" du navigateur : réinitialise l'état
            window.addEventListener('pageshow', function (e) {
                if (e.persisted) {
                    if (main) main.classList.remove('is-leaving');
                    if (progress) progress.classList.remove('is-active');
                }
            });

        });
    </script>

    @stack('scripts')

</body>

</html>