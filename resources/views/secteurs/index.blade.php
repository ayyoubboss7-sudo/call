@extends('layouts.app')

@section('title', 'Secteurs d’activité - ARTI CALL')
@section('meta_description', 'ARTI CALL accompagne différents secteurs : santé, immobilier, assurance, e-commerce, hôtellerie et plus, depuis Fès, Maroc.')

@section('content')

{{-- ============================================================
    HERO
============================================================ --}}
<section class="relative overflow-hidden bg-black text-white">

    {{-- Lueur rouge + grille discrète --}}
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(220,38,38,0.40),transparent_55%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,rgba(220,38,38,0.15),transparent_50%)]"></div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-white/10"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-20 lg:pb-28">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-sm text-white/50" aria-label="Fil d'Ariane">
            <a href="{{ url('/') }}" class="hover:text-white transition">Accueil</a>
            <span>/</span>
            <span class="text-white/90">Secteurs</span>
        </nav>

        <div class="mt-14 max-w-4xl">

            <span class="inline-flex items-center gap-2 rounded-full bg-red-600/15 px-4 py-2 text-xs font-bold uppercase tracking-widest text-red-400 ring-1 ring-inset ring-red-500/30">
                <span class="w-2 h-2 rounded-full bg-red-500"></span>
                Secteurs d'activité
            </span>

            <h1 class="mt-7 text-4xl sm:text-5xl lg:text-7xl font-extrabold tracking-tight leading-[1.05]">
                <span class="text-white">Un centre d'appel</span><br>
                <span class="text-white">qui comprend</span>
                <span class="text-red-500">votre métier</span>
            </h1>

            <p class="mt-7 text-lg leading-8 text-white/65 max-w-2xl">
                Nos agents sont formés à votre secteur, à votre vocabulaire et à vos process.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-3">
                <a href="#liste-secteurs"
                   class="inline-flex items-center justify-center gap-2 rounded-xl bg-red-600 px-7 py-4 text-sm font-bold text-white hover:bg-red-500 transition">
                    Découvrir les secteurs
                    <i data-lucide="arrow-down" class="w-4 h-4"></i>
                </a>
                <a href="{{ url('/contact') }}"
                   class="inline-flex items-center justify-center gap-2 rounded-xl px-7 py-4 text-sm font-bold text-white ring-1 ring-inset ring-white/25 hover:bg-white/10 transition">
                    Demander un devis
                </a>
            </div>
        </div>

        {{-- Mini stats --}}
        <dl class="mt-16 grid grid-cols-2 sm:grid-cols-3 gap-8 max-w-2xl border-t border-white/10 pt-8">
            <div>
                <dt class="text-xs uppercase tracking-widest text-white/50">Secteurs</dt>
                <dd class="mt-2 text-3xl font-extrabold text-white">
                    <span data-count="{{ $secteurs->count() }}">0</span>
                </dd>
            </div>
            <div>
                <dt class="text-xs uppercase tracking-widest text-white/50">Langues</dt>
                <dd class="mt-2 text-3xl font-extrabold text-white">FR · AR · EN</dd>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <dt class="text-xs uppercase tracking-widest text-white/50">Devis</dt>
                <dd class="mt-2 text-3xl font-extrabold text-red-500">Gratuit</dd>
            </div>
        </dl>
    </div>
</section>


{{-- ============================================================
    LISTE DES SECTEURS
============================================================ --}}
<section id="liste-secteurs" class="bg-white scroll-mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">

        <div class="max-w-2xl">
            <p class="text-sm font-bold uppercase tracking-widest text-red-600">Nos secteurs</p>
            <h2 class="mt-3 text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">
                Trouvez le vôtre
            </h2>
            <p class="mt-4 text-lg text-slate-600">
                Chaque métier a ses contraintes. Choisissez votre secteur pour voir comment nous vous accompagnons.
            </p>
        </div>

        <div class="mt-14 grid gap-x-12 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($secteurs as $i => $secteur)
                <a href="{{ route('secteurs.show', $secteur) }}"
                   class="group flex flex-col border-t-2 border-slate-900 py-8 transition hover:border-red-600">

                    <div class="flex items-center justify-between">
                        <span class="text-sm font-bold text-red-600">
                            {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <i data-lucide="{{ $secteur->icone }}"
                           class="w-7 h-7 text-slate-300 transition group-hover:text-red-600"></i>
                    </div>

                    <h3 class="mt-6 text-2xl font-extrabold tracking-tight text-slate-900 transition group-hover:text-red-600">
                        {{ $secteur->nom }}
                    </h3>

                    <p class="mt-3 leading-7 text-slate-600">
                        {{ $secteur->description_courte }}
                    </p>

                    <span class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-slate-900 transition group-hover:text-red-600">
                        En savoir plus
                        <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                    </span>
                </a>
            @empty
                <p class="text-slate-500">Aucun secteur disponible pour le moment.</p>
            @endforelse
        </div>
    </div>
</section>


{{-- ============================================================
    BANDE "VOTRE SECTEUR N'EST PAS LISTÉ ?"
============================================================ --}}
<section class="bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
            <div class="max-w-2xl">
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900">
                    Votre secteur n'est pas dans la liste ?
                </h2>
                <p class="mt-3 text-slate-600">
                    Nous adaptons nos services à chaque activité. Parlez-nous de votre besoin et nous vous proposerons une solution sur mesure.
                </p>
            </div>

            <a href="{{ url('/contact') }}"
               class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-slate-950 px-7 py-4 text-sm font-bold text-white hover:bg-red-600 transition">
                Parler à un expert
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>
    </div>
</section>

@endsection