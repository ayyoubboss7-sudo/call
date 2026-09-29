@extends('layouts.app')

@section('title', 'FAQ - ARTI CALL | Centre d’appel à Fès, Maroc')
@section('meta_description', 'Réponses aux questions fréquentes sur ARTI CALL, centre d’appel à Fès, Maroc : services Inbound, Outbound, devis et collaboration.')

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
@endpush

@section('content')

    {{-- =====================================================
        HERO : rouge, avec barre de recherche
    ====================================================== --}}
    <section class="relative overflow-hidden bg-slate-950">

        <div class="absolute -right-24 -top-24 h-80 w-80 rounded-full bg-red-600/20"></div>
        <div class="absolute -left-28 -bottom-36 h-96 w-96 rounded-full bg-white/5"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 pb-24 pt-14 sm:px-6 lg:px-8 lg:pb-28 lg:pt-16">

            <nav class="text-sm text-white/70" aria-label="Fil d'Ariane">
                <a href="{{ url('/') }}" class="transition hover:text-white">Accueil</a>
                <span class="mx-2">/</span>
                <span class="font-semibold text-white">FAQ</span>
            </nav>

            <div class="mt-6 grid items-end gap-10 lg:grid-cols-12">

                <div class="lg:col-span-7">
                    <h1 class="text-4xl font-extrabold leading-tight text-white sm:text-5xl">
                        Vos questions sur ARTI CALL
                    </h1>

                    <p class="mt-5 max-w-xl text-base leading-8 text-slate-300 sm:text-lg">
                        Services, démarrage d'une campagne, devis : retrouvez ici les réponses
                        aux questions que les entreprises nous posent le plus souvent.
                    </p>
                </div>

                {{-- Accès rapide --}}
                <div class="lg:col-span-5">
                    <div class="rounded-2xl bg-white/10 p-5 backdrop-blur-sm ring-1 ring-white/20">
                        <p class="text-sm font-semibold text-white">Vous préférez nous parler directement ?</p>
                        <p class="mt-1 text-sm leading-6 text-white/80">
                            Décrivez-nous votre projet, nous revenons vers vous avec une proposition adaptée.
                        </p>
                        <a href="{{ url('/contact') }}"
                            class="mt-4 inline-flex items-center gap-2 rounded-xl bg-red-600 px-5 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-red-700">
                            <span>Demander un devis</span>
                            <i data-lucide="arrow-right" class="h-4 w-4"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- =====================================================
        RECHERCHE (chevauche le hero)
    ====================================================== --}}
    <div class="relative z-20 mx-auto -mt-9 max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl">
            <label for="faq-search" class="sr-only">Rechercher dans la FAQ</label>

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

                        <p class="hidden text-sm font-bold text-slate-900 lg:block">Thèmes</p>

                        <ul id="faq-nav"
                            class="-mx-4 flex gap-2 overflow-x-auto px-4 pb-2 lg:mx-0 lg:mt-4 lg:flex-col lg:gap-0 lg:overflow-visible lg:border-l lg:border-slate-200 lg:px-0 lg:pb-0">

                            @foreach ($categories as $cat)
                                <li class="shrink-0" data-nav-item="{{ $cat['id'] }}">
                                    <a href="#{{ $cat['id'] }}" data-nav="{{ $cat['id'] }}" data-active="false"
                                        class="flex items-center justify-between gap-4 rounded-full border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-600 transition hover:text-red-600
                                               data-[active=true]:border-red-600 data-[active=true]:bg-red-600 data-[active=true]:text-white
                                               lg:-ml-px lg:rounded-none lg:border-0 lg:border-l-2 lg:border-transparent lg:bg-transparent lg:px-5 lg:py-3
                                               lg:data-[active=true]:border-red-600 lg:data-[active=true]:bg-transparent lg:data-[active=true]:text-red-600">
                                        <span class="whitespace-nowrap">{{ $cat['title'] }}</span>
                                        <span data-count="{{ $cat['id'] }}"
                                            class="hidden text-xs font-medium text-slate-400 lg:inline">{{ count($cat['items']) }}</span>
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
                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-red-50 text-red-600">
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
                        <p class="mt-4 text-base font-bold text-slate-900">Aucune question ne correspond à votre recherche</p>
                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Essayez avec un autre mot-clé, ou posez-nous directement votre question.
                        </p>
                        <a href="{{ url('/contact') }}"
                            class="mt-5 inline-flex items-center gap-2 rounded-xl bg-red-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-red-700">
                            <span>Nous contacter</span>
                            <i data-lucide="arrow-right" class="h-4 w-4"></i>
                        </a>
                    </div>


                    {{-- Bloc d'aide --}}
                    <div class="mt-16 flex flex-col gap-6 rounded-2xl bg-slate-50 p-6 sm:p-8 md:flex-row md:items-center md:justify-between">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-600 text-white">
                                <i data-lucide="headset" class="h-6 w-6"></i>
                            </div>
                            <div>
                                <p class="text-lg font-bold text-slate-900">Vous n'avez pas trouvé votre réponse ?</p>
                                <p class="mt-1 max-w-md text-sm leading-6 text-slate-600">
                                    Notre équipe basée à Fès est à votre disposition pour étudier votre besoin.
                                </p>
                            </div>
                        </div>

                        <a href="{{ url('/contact') }}"
                            class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white shadow-sm transition hover:bg-red-700">
                            <span>Nous contacter</span>
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

                    const nav = document.querySelector('[data-nav-item="' + cat.id + '"]');
                    const count = document.querySelector('[data-count="' + cat.id + '"]');
                    if (nav) nav.classList.toggle('hidden', visible === 0);
                    if (count) count.textContent = visible;

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
                    l.dataset.active = (l.dataset.nav === id) ? 'true' : 'false';
                });
            }

            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(e) {
                        if (e.isIntersecting) setActive(e.target.id);
                    });
                }, {
                    rootMargin: '-30% 0px -60% 0px'
                });

                categories.forEach(function(c) {
                    observer.observe(c);
                });
            }

            if (categories.length) setActive(categories[0].id);
        });
    </script>
@endpush