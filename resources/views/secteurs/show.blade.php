@extends('layouts.app')

@section('title', $secteur->meta_title ?? 'Centre d’appel pour le secteur ' . $secteur->nom . ' - ARTI CALL')
@section('meta_description', $secteur->meta_description ?? $secteur->description_courte)

@section('content')

{{-- ================= HERO ================= --}}
<section class="relative overflow-hidden bg-slate-50 border-b border-slate-200">
    <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-red-100/60"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">

        <nav class="flex items-center gap-2 text-sm text-slate-500" aria-label="Fil d'Ariane">
            <a href="{{ url('/') }}" class="hover:text-red-600">Accueil</a>
            <span>/</span>
            <a href="{{ route('secteurs.index') }}" class="hover:text-red-600">Secteurs</a>
            <span>/</span>
            <span class="font-semibold text-slate-800">{{ $secteur->nom }}</span>
        </nav>

        <div class="mt-8 grid gap-10 lg:grid-cols-3 lg:items-center">
            <div class="lg:col-span-2">
                <div class="w-14 h-14 rounded-2xl bg-red-600 flex items-center justify-center shadow-sm">
                    <i data-lucide="{{ $secteur->icone }}" class="w-7 h-7 text-white"></i>
                </div>

                <h1 class="mt-6 text-3xl sm:text-5xl font-extrabold text-slate-900 leading-tight">
                    Centre d'appel pour le secteur {{ $secteur->nom }}
                </h1>

                <p class="mt-5 text-lg leading-8 text-slate-600 max-w-2xl">
                    {{ $secteur->description_courte }}
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="{{ url('/devis') }}?secteur={{ $secteur->slug }}"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white shadow-sm hover:bg-red-700 transition">
                        Demander un devis
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                    <a href="{{ url('/services') }}"
                       class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-300 bg-white px-6 py-3.5 text-sm font-bold text-slate-700 hover:border-red-300 hover:text-red-600 transition">
                        Voir nos services
                    </a>
                </div>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <ul class="space-y-4">
                    @foreach (['Agents formés à votre métier', 'Réponse rapide sous 24h', 'Devis gratuit et sans engagement'] as $point)
                        <li class="flex items-start gap-3 text-sm font-medium text-slate-700">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-red-600 shrink-0"></i>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>


{{-- ================= DÉFIS ================= --}}
@if (!empty($secteur->defis))
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-2xl">
        <span class="text-xs font-bold uppercase tracking-wider text-red-600">Vos défis</span>
        <h2 class="mt-2 text-2xl sm:text-3xl font-extrabold text-slate-900">
            Ce qui freine votre activité aujourd'hui
        </h2>
    </div>

    <div class="mt-8 grid gap-6 md:grid-cols-3">
        @foreach ($secteur->defis as $defi)
            <div class="rounded-2xl border border-slate-200 bg-white p-6">
                <div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center">
                    <i data-lucide="alert-circle" class="w-5 h-5 text-red-600"></i>
                </div>
                <h3 class="mt-4 font-bold text-slate-900">{{ $defi['titre'] }}</h3>
                <p class="mt-2 text-sm leading-6 text-slate-600">{{ $defi['texte'] }}</p>
            </div>
        @endforeach
    </div>
</section>
@endif


{{-- ================= SOLUTION + AVANTAGES ================= --}}
<section class="bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid gap-12 lg:grid-cols-3">

        <div class="lg:col-span-2">
            <span class="text-xs font-bold uppercase tracking-wider text-red-600">Notre solution</span>
            <h2 class="mt-2 text-2xl sm:text-3xl font-extrabold text-slate-900">
                Comment ARTI CALL vous accompagne
            </h2>

            @if ($secteur->description)
                <p class="mt-4 leading-7 text-slate-600">{{ $secteur->description }}</p>
            @endif

            @if (!empty($secteur->services))
                <ul class="mt-8 grid gap-3 sm:grid-cols-2">
                    @foreach ($secteur->services as $service)
                        <li class="flex items-center gap-3 rounded-xl border border-slate-200 bg-white px-4 py-3.5 text-sm font-semibold text-slate-700">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-red-600 shrink-0"></i>
                            {{ $service }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <aside class="rounded-2xl bg-slate-950 p-7 text-white h-fit">
            <h3 class="text-lg font-bold">Pourquoi ARTI CALL ?</h3>
            <ul class="mt-5 space-y-3">
                @foreach ($secteur->avantages ?? [] as $avantage)
                    <li class="flex items-start gap-3 text-sm text-white/85">
                        <i data-lucide="check" class="w-4 h-4 mt-0.5 text-red-500 shrink-0"></i>
                        {{ $avantage }}
                    </li>
                @endforeach
            </ul>
            <a href="{{ url('/devis') }}?secteur={{ $secteur->slug }}"
               class="mt-7 flex items-center justify-center gap-2 rounded-xl bg-red-600 px-5 py-3 text-sm font-bold text-white hover:bg-red-700 transition">
                Parler à un expert
            </a>
        </aside>
    </div>
</section>


{{-- ================= COMMENT ÇA MARCHE ================= --}}
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="max-w-2xl">
        <span class="text-xs font-bold uppercase tracking-wider text-red-600">Comment ça marche</span>
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
                <div class="w-10 h-10 rounded-full bg-red-600 text-white font-extrabold flex items-center justify-center">
                    {{ $num }}
                </div>
                <h3 class="mt-4 font-bold text-slate-900">{{ $titre }}</h3>
                <p class="mt-2 text-sm leading-6 text-slate-600">{{ $texte }}</p>
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
                <details class="group rounded-xl border border-slate-200 bg-white p-5">
                    <summary class="flex cursor-pointer items-center justify-between gap-4 font-semibold text-slate-900 list-none">
                        {{ $item['q'] }}
                        <i data-lucide="chevron-down" class="w-5 h-5 text-red-600 shrink-0 transition group-open:rotate-180"></i>
                    </summary>
                    <p class="mt-3 text-sm leading-6 text-slate-600">{{ $item['a'] }}</p>
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
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
    ])->all(),
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
</script>
@endpush
@endif


{{-- ================= AUTRES SECTEURS ================= --}}
@if ($autres->isNotEmpty())
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
    <div class="flex items-center justify-between">
        <h2 class="text-xl font-bold text-slate-900">Autres secteurs</h2>
        <a href="{{ route('secteurs.index') }}" class="text-sm font-semibold text-red-600 hover:underline">
            Voir tout
        </a>
    </div>

    <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($autres as $autre)
            <a href="{{ route('secteurs.show', $autre) }}"
               class="flex items-center gap-3 rounded-xl border border-slate-200 bg-white p-4 text-sm font-semibold text-slate-700 hover:border-red-300 hover:text-red-600 transition">
                <i data-lucide="{{ $autre->icone }}" class="w-5 h-5 text-red-600"></i>
                {{ $autre->nom }}
            </a>
        @endforeach
    </div>
</section>
@endif

@endsection