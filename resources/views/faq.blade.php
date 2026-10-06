@extends('layouts.app')

@section('title', 'FAQ - ARTI CALL | Centre d’appel à Fès, Maroc')
@section('meta_description', 'Réponses aux questions fréquentes sur ARTI CALL, centre d’appel à Fès, Maroc : services
    Inbound, Outbound, devis et collaboration.')

    {{-- JSON-LD FAQPage (SEO) --}}
    @push('styles')
        <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => collect($categories)->pluck('items')->flatten(1)->map(fn ($i) => [
                '@type' => 'Question',
                'name' => $i['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $i['a']],
            ])->values(),
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>

        <style>
            /* =========================================================
                    FAQ HERO - MÊME ANIMATION QUE SERVICES
                ========================================================== */

            .arti-faq-bg {
                position: absolute;
                inset: 0;
                overflow: hidden;
                background-image: url('/images/call-center-bg.jpg');
                background-size: cover;
                background-position: center;
                animation: faq-bg-zoom 18s ease-in-out infinite alternate;
                will-change: transform;
            }

            .arti-faq-bg::after {
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

            .arti-faq-smoke {
                position: absolute;
                border-radius: 9999px;
                pointer-events: none;
                filter: blur(80px);
                will-change: transform, opacity;
            }

            .arti-faq-smoke-1 {
                width: 420px;
                height: 180px;
                left: -120px;
                top: 18%;
                background: rgba(255, 255, 255, 0.12);
                opacity: 0.25;
                animation: faq-smoke-1 14s ease-in-out infinite alternate;
            }

            .arti-faq-smoke-2 {
                width: 500px;
                height: 220px;
                right: -170px;
                bottom: 5%;
                background: rgba(220, 38, 38, 0.20);
                opacity: 0.35;
                animation: faq-smoke-2 17s ease-in-out infinite alternate;
            }

            .arti-faq-smoke-3 {
                width: 350px;
                height: 160px;
                left: 35%;
                top: -100px;
                background: rgba(255, 255, 255, 0.10);
                opacity: 0.18;
                animation: faq-smoke-3 20s ease-in-out infinite alternate;
            }

            /* =========================================================
                    RED GLOW
                ========================================================== */

            .arti-faq-glow {
                position: absolute;
                width: 430px;
                height: 430px;
                border-radius: 9999px;
                background: rgba(220, 38, 38, 0.16);
                filter: blur(90px);
                pointer-events: none;
                animation: faq-glow 7s ease-in-out infinite;
            }

            .arti-faq-glow-right {
                right: -160px;
                top: -150px;
            }

            .arti-faq-glow-left {
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

            .arti-faq-particle {
                position: absolute;
                width: 4px;
                height: 4px;
                border-radius: 9999px;
                background: rgba(248, 113, 113, 0.65);
                box-shadow: 0 0 14px rgba(239, 68, 68, 0.50);
                pointer-events: none;
                animation: faq-particle linear infinite;
            }

            .arti-faq-particle.p1 {
                left: 8%;
                top: 35%;
                animation-duration: 9s;
                animation-delay: -2s;
            }

            .arti-faq-particle.p2 {
                left: 20%;
                top: 70%;
                width: 3px;
                height: 3px;
                animation-duration: 12s;
                animation-delay: -6s;
            }

            .arti-faq-particle.p3 {
                left: 42%;
                top: 22%;
                animation-duration: 10s;
                animation-delay: -4s;
            }

            .arti-faq-particle.p4 {
                left: 65%;
                top: 72%;
                width: 3px;
                height: 3px;
                animation-duration: 13s;
                animation-delay: -8s;
            }

            .arti-faq-particle.p5 {
                left: 79%;
                top: 32%;
                animation-duration: 11s;
                animation-delay: -3s;
            }

            .arti-faq-particle.p6 {
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

            .arti-faq-left {
                animation:
                    faq-left-in 1s cubic-bezier(0.22, 1, 0.36, 1) both;
            }

            .arti-faq-badge {
                animation:
                    faq-badge-in 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.10s both;
            }

            .arti-faq-title {
                animation:
                    faq-title-in 1s cubic-bezier(0.22, 1, 0.36, 1) 0.20s both;
            }

            .arti-faq-description {
                animation:
                    faq-description-in 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.38s both;
            }

            /* =========================================================
                    HERO BUTTONS
                ========================================================== */

            .arti-faq-buttons {
                animation:
                    faq-description-in 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.52s both;
            }

            .arti-faq-main-btn {
                position: relative;
                overflow: hidden;
            }

            .arti-faq-main-btn::before {
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

            .arti-faq-main-btn:hover::before {
                left: 150%;
            }

            /* =========================================================
                    HERO PANEL / DECORATION
                ========================================================== */

            .arti-faq-hero-line {
                position: absolute;
                left: 12%;
                right: 12%;
                bottom: 0;
                height: 1px;
                background: linear-gradient(90deg,
                        transparent,
                        rgba(239, 68, 68, 0.85),
                        transparent);
                animation: faq-line 4s ease-in-out infinite;
            }

            /* =========================================================
                    KEYFRAMES
                ========================================================== */

            @keyframes faq-bg-zoom {
                0% {
                    transform: scale(1);
                }

                100% {
                    transform: scale(1.06);
                }
            }

            @keyframes faq-smoke-1 {
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

            @keyframes faq-smoke-2 {
                0% {
                    transform: translate3d(30px, 30px, 0) scale(1);
                    opacity: 0.20;
                }

                100% {
                    transform: translate3d(-180px, -80px, 0) scale(1.30);
                    opacity: 0.38;
                }
            }

            @keyframes faq-smoke-3 {
                0% {
                    transform: translate3d(-100px, 40px, 0) scale(0.90);
                    opacity: 0.08;
                }

                100% {
                    transform: translate3d(180px, 120px, 0) scale(1.20);
                    opacity: 0.20;
                }
            }

            @keyframes faq-glow {

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

            @keyframes faq-particle {
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

            @keyframes faq-left-in {
                from {
                    opacity: 0;
                    transform: translate3d(-45px, 20px, 0);
                }

                to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
                }
            }

            @keyframes faq-badge-in {
                from {
                    opacity: 0;
                    transform: translateY(-15px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes faq-title-in {
                from {
                    opacity: 0;
                    transform: translateY(25px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes faq-description-in {
                from {
                    opacity: 0;
                    transform: translateY(18px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes faq-line {

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

                .arti-faq-bg,
                .arti-faq-smoke,
                .arti-faq-glow,
                .arti-faq-particle,
                .arti-faq-left,
                .arti-faq-badge,
                .arti-faq-title,
                .arti-faq-description,
                .arti-faq-buttons,
                .arti-faq-hero-line {
                    animation: none !important;
                }

                .arti-faq-left,
                .arti-faq-badge,
                .arti-faq-title,
                .arti-faq-description,
                .arti-faq-buttons {
                    opacity: 1;
                    transform: none;
                }
            }
        </style>
    @endpush


@section('content')

    {{-- =====================================================
        HERO
    ====================================================== --}}
    <section class="relative isolate overflow-hidden bg-slate-950 text-white">

        {{-- Background photo call center animée --}}
        <div class="arti-faq-bg absolute inset-0 -z-30"></div>

        {{-- Dark overlay --}}
        <div class="absolute inset-0 -z-20 bg-slate-950/75"></div>

        {{-- Gradient overlay --}}
        <div class="absolute inset-0 -z-20 bg-gradient-to-r from-slate-950 via-slate-950/85 to-slate-950/50"></div>

        {{-- Vertical gradient --}}
        <div class="absolute inset-0 -z-20 bg-gradient-to-t from-slate-950 via-transparent to-slate-950/30"></div>


        {{-- =====================================================
            HERO ATMOSPHERE
        ====================================================== --}}

        <div class="arti-faq-glow arti-faq-glow-right -z-10"></div>

        <div class="arti-faq-glow arti-faq-glow-left -z-10"></div>

        {{-- Smoke --}}
        <div class="arti-faq-smoke arti-faq-smoke-1 -z-10"></div>

        <div class="arti-faq-smoke arti-faq-smoke-2 -z-10"></div>

        <div class="arti-faq-smoke arti-faq-smoke-3 -z-10"></div>


        {{-- Floating particles --}}
        <span class="arti-faq-particle p1"></span>
        <span class="arti-faq-particle p2"></span>
        <span class="arti-faq-particle p3"></span>
        <span class="arti-faq-particle p4"></span>
        <span class="arti-faq-particle p5"></span>
        <span class="arti-faq-particle p6"></span>


        <div class="relative z-10 mx-auto max-w-7xl px-4 pb-24 pt-14 sm:px-6 lg:px-8 lg:pb-28 lg:pt-16">

            <div class="mt-6 grid items-end gap-10 lg:grid-cols-12">

                <div class="arti-faq-left lg:col-span-7">

                    {{-- Badge --}}
                    <div
                        class="arti-faq-badge inline-flex items-center gap-2 rounded-full border border-red-500/30 bg-red-600/10 px-4 py-2 backdrop-blur-sm">

                        <span class="h-2 w-2 rounded-full bg-red-500"></span>

                        <span class="text-xs font-bold uppercase tracking-[0.18em] text-red-400">
                            Questions fréquentes
                        </span>

                    </div>


                    {{-- Title --}}
                    <h1
                        class="arti-faq-title mt-6 text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">

                        Vos questions sur

                        <span class="text-red-500">
                            ARTI CALL
                        </span>

                    </h1>


                    {{-- Description --}}
                    <p class="arti-faq-description mt-5 max-w-xl text-base leading-8 text-slate-200 sm:text-lg">

                        Services, démarrage d'une campagne, devis : retrouvez ici les réponses
                        aux questions que les entreprises nous posent le plus souvent.

                    </p>


                    {{-- Button --}}
                    <div class="arti-faq-buttons mt-8">

                        <a href="{{ url('/contact') }}"
                            class="arti-faq-main-btn group inline-flex items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-red-600/20 transition duration-300 hover:-translate-y-1 hover:bg-red-700 hover:shadow-xl hover:shadow-red-600/30">

                            <span class="relative z-10">
                                Nous contacter
                            </span>

                            <i data-lucide="arrow-right"
                                class="relative z-10 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1">
                            </i>

                        </a>

                    </div>

                </div>

            </div>

            {{-- Animated line --}}
            <div class="arti-faq-hero-line"></div>

        </div>

    </section>


    {{-- =====================================================
        RECHERCHE (chevauche le hero)
    ====================================================== --}}
    <div class="relative z-20 mx-auto -mt-9 max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="mx-auto max-w-3xl">

            <label for="faq-search" class="sr-only">
                Rechercher dans la FAQ
            </label>

            <div
                class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white px-5 shadow-xl shadow-slate-900/10 focus-within:border-red-500 focus-within:ring-4 focus-within:ring-red-100">

                <i data-lucide="search" class="h-5 w-5 shrink-0 text-slate-400"></i>

                <input id="faq-search" type="search" autocomplete="off"
                    placeholder="Rechercher une question : devis, téléprospection, service client..."
                    class="h-16 w-full border-0 bg-transparent text-base text-slate-900 placeholder:text-slate-400 focus:outline-none focus:ring-0">

                <button type="button" id="faq-clear" aria-label="Effacer la recherche"
                    class="hidden h-8 w-8 shrink-0 items-center justify-center rounded-full text-slate-500 transition hover:bg-slate-100">

                    <i data-lucide="x" class="h-4 w-4"></i>

                </button>

            </div>

            <p id="faq-status" class="mt-3 h-5 text-center text-sm text-slate-500" aria-live="polite"></p>

        </div>

    </div>


    {{-- =====================================================
        CONTENU
    ====================================================== --}}
    <section class="bg-white">

        <div class="mx-auto max-w-7xl px-4 pb-20 pt-10 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-14">

                {{-- Sommaire --}}
                <aside class="lg:col-span-4 xl:col-span-3">

                    <div class="lg:sticky lg:top-28">

                        <p class="hidden text-sm font-bold text-slate-900 lg:block">
                            Thèmes
                        </p>

                        <ul id="faq-nav"
                            class="-mx-4 flex gap-2 overflow-x-auto px-4 pb-2 lg:mx-0 lg:mt-4 lg:flex-col lg:gap-0 lg:overflow-visible lg:border-l lg:border-slate-200 lg:px-0 lg:pb-0">

                            @foreach ($categories as $cat)
                                <li class="shrink-0" data-nav-item="{{ $cat['id'] }}">

                                    <a href="#{{ $cat['id'] }}" data-nav="{{ $cat['id'] }}" data-active="false"
                                        class="flex items-center justify-between gap-4 rounded-full border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-600 transition hover:text-red-600
                                               data-[active=true]:border-red-600 data-[active=true]:bg-red-600 data-[active=true]:text-white
                                               lg:-ml-px lg:rounded-none lg:border-0 lg:border-l-2 lg:border-transparent lg:bg-transparent lg:px-5 lg:py-3
                                               lg:data-[active=true]:border-red-600 lg:data-[active=true]:bg-transparent lg:data-[active=true]:text-red-600">

                                        <span class="whitespace-nowrap">
                                            {{ $cat['title'] }}
                                        </span>

                                        <span data-faq-count="{{ $cat['id'] }}"
                                            class="hidden text-xs font-medium text-slate-400 lg:inline">

                                            {{ count($cat['items']) }}

                                        </span>

                                    </a>

                                </li>
                            @endforeach

                        </ul>

                    </div>

                </aside>


                {{-- Questions / réponses --}}
                <div class="lg:col-span-8 xl:col-span-9">

                    <div class="space-y-14" id="faq-list">

                        @foreach ($categories as $cat)
                            <section id="{{ $cat['id'] }}" data-category class="scroll-mt-28">

                                <div class="flex items-center gap-4">

                                    <div
                                        class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-50 text-red-600">

                                        <i data-lucide="{{ $cat['icon'] }}" class="h-5 w-5"></i>

                                    </div>

                                    <h2 class="text-2xl font-extrabold tracking-tight text-slate-900">

                                        {{ $cat['title'] }}

                                    </h2>

                                </div>


                                <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200 bg-white">

                                    @foreach ($cat['items'] as $item)
                                        <details data-item
                                            class="group border-b border-slate-200 last:border-b-0 open:bg-red-50/40">

                                            <summary
                                                class="flex cursor-pointer list-none items-center justify-between gap-6 border-l-4 border-transparent px-5 py-5 transition group-open:border-red-600 sm:px-6 [&::-webkit-details-marker]:hidden hover:bg-slate-50 group-open:hover:bg-transparent">

                                                <span data-q
                                                    class="text-[15px] font-semibold leading-6 text-slate-900 group-open:text-red-600 sm:text-base">

                                                    {{ $item['q'] }}

                                                </span>

                                                <span
                                                    class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-slate-100 text-slate-600 transition group-open:rotate-180 group-open:bg-red-600 group-open:text-white">

                                                    <i data-lucide="chevron-down" class="h-4 w-4"></i>

                                                </span>

                                            </summary>


                                            <div class="border-l-4 border-red-600 px-5 pb-6 pr-14 sm:px-6 sm:pr-16">

                                                <p data-a class="max-w-2xl text-[15px] leading-7 text-slate-600">

                                                    {{ $item['a'] }}

                                                </p>

                                            </div>

                                        </details>
                                    @endforeach

                                </div>

                            </section>
                        @endforeach

                    </div>


                    {{-- Aucun résultat --}}
                    <div id="faq-empty" class="hidden rounded-2xl border border-dashed border-slate-300 p-10 text-center">

                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-red-50 text-red-600">

                            <i data-lucide="search-x" class="h-6 w-6"></i>

                        </div>

                        <p class="mt-4 text-base font-bold text-slate-900">
                            Aucune question ne correspond à votre recherche
                        </p>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Essayez avec un autre mot-clé, ou posez-nous directement votre question.
                        </p>

                        <a href="{{ url('/contact') }}"
                            class="mt-5 inline-flex items-center gap-2 rounded-xl bg-red-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-red-700">

                            <span>
                                Nous contacter
                            </span>

                            <i data-lucide="arrow-right" class="h-4 w-4"></i>

                        </a>

                    </div>


                    {{-- Bloc d'aide --}}
                    <div
                        class="mt-16 flex flex-col gap-6 rounded-2xl bg-slate-50 p-6 sm:p-8 md:flex-row md:items-center md:justify-between">

                        <div class="flex items-start gap-4">

                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-600 text-white">

                                <i data-lucide="headset" class="h-6 w-6"></i>

                            </div>

                            <div>

                                <p class="text-lg font-bold text-slate-900">
                                    Vous n'avez pas trouvé votre réponse ?
                                </p>

                                <p class="mt-1 max-w-md text-sm leading-6 text-slate-600">
                                    Notre équipe basée à Fès est à votre disposition pour étudier votre besoin.
                                </p>

                            </div>

                        </div>


                        <a href="{{ url('/contact') }}"
                            class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white shadow-sm transition hover:bg-red-700">

                            <span>
                                Nous contacter
                            </span>

                            <i data-lucide="arrow-right" class="h-4 w-4"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const input = document.getElementById('faq-search');
            const clearBtn = document.getElementById('faq-clear');
            const status = document.getElementById('faq-status');
            const list = document.getElementById('faq-list');
            const empty = document.getElementById('faq-empty');
            const categories = Array.from(document.querySelectorAll('[data-category]'));

            const normalize = (s) => s.toLowerCase()
                .normalize('NFD').replace(/[\u0300-\u036f]/g, '');

            /* ---------- Recherche ---------- */
            function filter() {

                const term = normalize(input.value.trim());

                let total = 0;

                clearBtn.classList.toggle('hidden', term === '');
                clearBtn.classList.toggle('flex', term !== '');

                categories.forEach(function(cat) {

                    let visible = 0;

                    cat.querySelectorAll('[data-item]').forEach(function(item) {

                        const text = normalize(
                            item.querySelector('[data-q]').textContent + ' ' +
                            item.querySelector('[data-a]').textContent
                        );

                        const match = term === '' || text.includes(term);

                        item.classList.toggle('hidden', !match);

                        item.open = term !== '' && match;

                        if (match) visible++;

                    });

                    cat.classList.toggle('hidden', visible === 0);

                    const nav = document.querySelector(
                        '[data-nav-item="' + cat.id + '"]'
                    );

                    const count = document.querySelector(
                        '[data-faq-count="' + cat.id + '"]'
                    );

                    if (nav) {
                        nav.classList.toggle('hidden', visible === 0);
                    }

                    if (count) {
                        count.textContent = visible;
                    }

                    total += visible;

                });

                list.classList.toggle('hidden', total === 0);

                empty.classList.toggle('hidden', total !== 0);

                status.textContent = term === '' ?
                    '' :
                    total + (total > 1 ? ' résultats' : ' résultat');

            }


            input.addEventListener('input', filter);


            clearBtn.addEventListener('click', function() {

                input.value = '';

                filter();

                input.focus();

            });


            /* ---------- Scroll-spy du sommaire ---------- */

            const links = document.querySelectorAll('[data-nav]');


            function setActive(id) {

                links.forEach(function(l) {

                    l.dataset.active =
                        (l.dataset.nav === id) ? 'true' : 'false';

                });

            }


            if ('IntersectionObserver' in window) {

                const observer = new IntersectionObserver(function(entries) {

                    entries.forEach(function(e) {

                        if (e.isIntersecting) {
                            setActive(e.target.id);
                        }

                    });

                }, {
                    rootMargin: '-30% 0px -60% 0px'
                });


                categories.forEach(function(c) {

                    observer.observe(c);

                });

            }


            if (categories.length) {
                setActive(categories[0].id);
            }

        });
    </script>
@endpush
