@extends('layouts.app')

@section('title', 'Secteurs d’activité - ARTI CALL')
@section('meta_description', 'ARTI CALL accompagne différents secteurs : santé, immobilier, assurance, e-commerce, hôtellerie et plus, depuis Fès, Maroc.')

@section('content')
<section class="bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <span class="inline-block rounded-full bg-red-50 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-red-600">
            Secteurs d'activité
        </span>
        <h1 class="mt-4 text-4xl sm:text-5xl font-extrabold text-slate-900 leading-tight max-w-3xl">
            Un centre d'appel qui comprend votre métier
        </h1>
        <p class="mt-4 text-lg text-slate-600 max-w-2xl">
            Nos agents sont formés à votre secteur, à votre vocabulaire et à vos process.
        </p>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($secteurs as $secteur)
            <a href="{{ route('secteurs.show', $secteur) }}"
               class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:border-red-300 hover:shadow-md transition">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center group-hover:bg-red-600 transition">
                    <i data-lucide="{{ $secteur->icone }}" class="w-6 h-6 text-red-600 group-hover:text-white transition"></i>
                </div>
                <h2 class="mt-5 text-lg font-bold text-slate-900">{{ $secteur->nom }}</h2>
                <p class="mt-2 text-sm leading-6 text-slate-600">{{ $secteur->description_courte }}</p>
                <span class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-red-600">
                    En savoir plus
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </span>
            </a>
        @empty
            <p class="text-slate-500">Aucun secteur disponible pour le moment.</p>
        @endforelse
    </div>
</section>
@endsection