@extends('layouts.app')

@section('title', $secteur->meta_title ?? 'Centre d’appel pour le secteur ' . $secteur->nom . ' - ARTI CALL')
@section('meta_description', $secteur->meta_description ?? $secteur->description_courte)

@section('content')

{{-- =========================================================
ANIMATIONS
========================================================= --}}

<style>
    @keyframes serviceFadeUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes serviceFadeLeft {
        from {
            opacity: 0;
            transform: translateX(-35px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes serviceScale {
        from {
            opacity: 0;
            transform: scale(0.75) rotate(-8deg);
        }

        to {
            opacity: 1;
            transform: scale(1) rotate(0);
        }
    }

    @keyframes serviceGlow {
        0%,
        100% {
            transform: translate(0, 0) scale(1);
            opacity: 0.45;
        }

        50% {
            transform: translate(25px, 20px) scale(1.12);
            opacity: 0.7;
        }
    }

    @keyframes servicePulse {
        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(220, 38, 38, 0.35);
        }

        50% {
            box-shadow: 0 0 0 12px rgba(220, 38, 38, 0);
        }
    }

    .service-fade-up {
        animation: serviceFadeUp 0.8s ease-out both;
    }

    .service-fade-left {
        animation: serviceFadeLeft 0.8s ease-out both;
    }

    .service-icon-animation {
        animation:
            serviceScale 0.8s cubic-bezier(0.22, 1, 0.36, 1) both,
            servicePulse 2.5s ease-in-out 1s infinite;
    }

    .service-glow {
        animation: serviceGlow 7s ease-in-out infinite;
    }

    .service-delay-1 {
        animation-delay: 0.15s;
    }

    .service-delay-2 {
        animation-delay: 0.3s;
    }

    .service-delay-3 {
        animation-delay: 0.45s;
    }

    .service-delay-4 {
        animation-delay: 0.6s;
    }

    .service-benefit {
        opacity: 0;
        animation: serviceFadeUp 0.65s ease-out forwards;
        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease,
            border-color 0.3s ease;
    }

    .service-benefit:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
        border-color: rgba(220, 38, 38, 0.25);
    }

    .service-button {
        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease,
            background-color 0.3s ease;
    }

    .service-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(220, 38, 38, 0.25);
    }

    .service-back-link {
        transition:
            transform 0.3s ease,
            color 0.3s ease;
    }

    .service-back-link:hover {
        transform: translateX(-5px);
    }

    @media (prefers-reduced-motion: reduce) {
        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }
</style>


{{-- =========================================================
HERO SECTEUR
========================================================= --}}

<section class="relative isolate overflow-hidden bg-slate-950 text-white">

    <div class="absolute inset-0 -z-10 bg-gradient-to-br from-slate-950 via-slate-900 to-black"></div>

    <div
        class="service-glow absolute -right-32 -top-32 -z-10 h-96 w-96 rounded-full bg-red-600/20 blur-3xl">
    </div>

    <div
        class="service-glow absolute -left-40 bottom-0 -z-10 h-96 w-96 rounded-full bg-red-600/10 blur-3xl"
        style="animation-delay: -3s;">
    </div>

    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">

        <div class="max-w-4xl">

            {{-- Retour aux secteurs --}}

            <a href="{{ route('secteurs.index') }}"
                class="service-fade-left service-back-link inline-flex items-center gap-2 text-sm font-semibold text-slate-400">

                <i data-lucide="arrow-left" class="h-4 w-4"></i>

                Retour aux secteurs

            </a>


            {{-- Icon secteur --}}

            <div
                class="service-icon-animation mt-8 flex h-16 w-16 items-center justify-center rounded-2xl bg-red-600 shadow-lg shadow-red-600/20">

                <i
                    data-lucide="{{ $secteur->icone }}"
                    class="h-8 w-8 text-white">
                </i>

            </div>


            {{-- Category --}}

            <p
                class="service-fade-up service-delay-1 mt-8 text-sm font-bold uppercase tracking-[0.18em] text-red-500">

                Secteur d'activité

            </p>


            {{-- Title --}}

            <h1
                class="service-fade-up service-delay-2 mt-3 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">

                Centre d'appel pour le secteur
                {{ $secteur->nom }}

            </h1>


            {{-- Description --}}

            <p
                class="service-fade-up service-delay-3 mt-6 max-w-3xl text-lg leading-8 text-slate-300">

                {{ $secteur->description_courte }}

            </p>


            {{-- Button --}}

            <div class="service-fade-up service-delay-4 mt-8">

                <a href="{{ url('/devis') }}?secteur={{ $secteur->slug }}"
                    class="service-button inline-flex items-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white hover:bg-red-700">

                    Demander un devis

                    <i data-lucide="arrow-right" class="h-4 w-4"></i>

                </a>

            </div>

        </div>

    </div>

</section>


{{-- ================= DÉFIS ================= --}}

@if (!empty($secteur->defis))

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <div class="max-w-2xl">

        <span class="text-xs font-bold uppercase tracking-wider text-red-600">
            Vos défis
        </span>

        <h2 class="mt-2 text-2xl sm:text-3xl font-extrabold text-slate-900">

            Ce qui freine votre activité aujourd'hui

        </h2>

    </div>


    <div class="mt-8 grid gap-6 md:grid-cols-3">

        @foreach ($secteur->defis as $defi)

            <div class="rounded-2xl border border-slate-200 bg-white p-6">

                <div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center">

                    <i
                        data-lucide="alert-circle"
                        class="w-5 h-5 text-red-600">
                    </i>

                </div>

                <h3 class="mt-4 font-bold text-slate-900">

                    {{ $defi['titre'] }}

                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-600">

                    {{ $defi['texte'] }}

                </p>

            </div>

        @endforeach

    </div>

</section>

@endif


{{-- ================= SOLUTION + AVANTAGES ================= --}}

<section class="bg-slate-50 border-y border-slate-200">

    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid gap-12 lg:grid-cols-3">

        <div class="lg:col-span-2">

            <span class="text-xs font-bold uppercase tracking-wider text-red-600">

                Notre solution

            </span>

            <h2 class="mt-2 text-2xl sm:text-3xl font-extrabold text-slate-900">

                Comment ARTI CALL vous accompagne

            </h2>


            @if ($secteur->description)

                <p class="mt-4 leading-7 text-slate-600">

                    {{ $secteur->description }}

                </p>

            @endif


            @if (!empty($secteur->services))

                <ul class="mt-8 grid gap-3 sm:grid-cols-2">

                    @foreach ($secteur->services as $service)

                        <li
                            class="flex items-center gap-3 rounded-xl border border-slate-200 bg-white px-4 py-3.5 text-sm font-semibold text-slate-700">

                            <i
                                data-lucide="check-circle-2"
                                class="w-4 h-4 text-red-600 shrink-0">
                            </i>

                            {{ $service }}

                        </li>

                    @endforeach

                </ul>

            @endif

        </div>


        <aside class="rounded-2xl bg-slate-950 p-7 text-white h-fit">

            <h3 class="text-lg font-bold">

                Pourquoi ARTI CALL ?

            </h3>


            <ul class="mt-5 space-y-3">

                @foreach ($secteur->avantages ?? [] as $avantage)

                    <li class="flex items-start gap-3 text-sm text-white/85">

                        <i
                            data-lucide="check"
                            class="w-4 h-4 mt-0.5 text-red-500 shrink-0">
                        </i>

                        {{ $avantage }}

                    </li>

                @endforeach

            </ul>


            <a
                href="{{ url('/devis') }}?secteur={{ $secteur->slug }}"
                class="mt-7 flex items-center justify-center gap-2 rounded-xl bg-red-600 px-5 py-3 text-sm font-bold text-white hover:bg-red-700 transition">

                Parler à un expert

            </a>

        </aside>

    </div>

</section>


{{-- ================= COMMENT ÇA MARCHE ================= --}}

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <div class="max-w-2xl">

        <span class="text-xs font-bold uppercase tracking-wider text-red-600">

            Comment ça marche

        </span>

        <h2 class="mt-2 text-2xl sm:text-3xl font-extrabold text-slate-900">

            Un démarrage simple en 3 étapes

        </h2>

    </div>


    <div class="mt-10 grid gap-6 md:grid-cols-3">

        @foreach ([

            ['1', 'Brief', 'Nous étudions votre activité, vos horaires et vos besoins.'],

            ['2', 'Script & formation', 'Nous préparons les scripts et formons les agents à votre métier.'],

            ['3', 'Lancement & suivi', 'Vos appels sont traités et vous suivez les résultats via des rapports réguliers.'],

        ] as [$num, $titre, $texte])

            <div class="rounded-2xl border border-slate-200 bg-white p-6">

                <div
                    class="w-10 h-10 rounded-full bg-red-600 text-white font-extrabold flex items-center justify-center">

                    {{ $num }}

                </div>

                <h3 class="mt-4 font-bold text-slate-900">

                    {{ $titre }}

                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-600">

                    {{ $texte }}

                </p>

            </div>

        @endforeach

    </div>

</section>


{{-- ================= FAQ ================= --}}

@if (!empty($secteur->faq))

<section class="bg-slate-50 border-y border-slate-200">

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 text-center">

            Questions fréquentes

        </h2>


        <div class="mt-8 space-y-3">

            @foreach ($secteur->faq as $item)

                <details
                    class="group rounded-xl border border-slate-200 bg-white p-5">

                    <summary
                        class="flex cursor-pointer items-center justify-between gap-4 font-semibold text-slate-900 list-none">

                        {{ $item['q'] }}

                        <i
                            data-lucide="chevron-down"
                            class="w-5 h-5 text-red-600 shrink-0 transition group-open:rotate-180">
                        </i>

                    </summary>

                    <p class="mt-3 text-sm leading-6 text-slate-600">

                        {{ $item['a'] }}

                    </p>

                </details>

            @endforeach

        </div>

    </div>

</section>


@push('scripts')

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => collect($secteur->faq)->map(fn ($f) => [
        '@type' => 'Question',
        'name' => $f['q'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $f['a']
        ],
    ])->all(),
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
</script>

@endpush

@endif


{{-- ================= AUTRES SECTEURS ================= --}}

@if ($autres->isNotEmpty())

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

    <div class="flex items-center justify-between">

        <h2 class="text-xl font-bold text-slate-900">

            Autres secteurs

        </h2>


        <a
            href="{{ route('secteurs.index') }}"
            class="text-sm font-semibold text-red-600 hover:underline">

            Voir tout

        </a>

    </div>


    <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

        @foreach ($autres as $autre)

            <a
                href="{{ route('secteurs.show', $autre) }}"
                class="flex items-center gap-3 rounded-xl border border-slate-200 bg-white p-4 text-sm font-semibold text-slate-700 hover:border-red-300 hover:text-red-600 transition">

                <i
                    data-lucide="{{ $autre->icone }}"
                    class="w-5 h-5 text-red-600">
                </i>

                {{ $autre->nom }}

            </a>

        @endforeach

    </div>

</section>

@endif


@endsection
