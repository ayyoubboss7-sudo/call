@extends('layouts.app')

@section('title', 'Demander un devis - ARTI CALL | Centre d’appel à Fès, Maroc')
@section('meta_description', 'Demandez un devis gratuit à ARTI CALL, centre d’appel à Fès : réponse téléphonique, service client, téléprospection. Réponse sous 24h.')

@php
    $field = 'mt-2 block w-full rounded-xl border border-slate-300 bg-white px-4 py-3.5 text-[15px] text-slate-900 placeholder:text-slate-400 transition focus:border-red-500 focus:outline-none focus:ring-4 focus:ring-red-100';
    $label = 'block text-sm font-semibold text-slate-900';
@endphp

@section('content')

{{-- ============================================================
    HERO
============================================================ --}}
<section class="relative overflow-hidden bg-black text-white">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(220,38,38,0.40),transparent_55%)]"></div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-white/10"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 pb-16 lg:pb-24">

        <nav class="flex items-center gap-2 text-sm text-white/50" aria-label="Fil d'Ariane">
            <a href="{{ url('/') }}" class="hover:text-white transition">Accueil</a>
            <span>/</span>
            <span class="text-white/90">Demander un devis</span>
        </nav>

        <div class="mt-12 max-w-3xl">
            <span class="inline-flex items-center gap-2 rounded-full bg-red-600/15 px-4 py-2 text-xs font-bold uppercase tracking-widest text-red-400 ring-1 ring-inset ring-red-500/30">
                <span class="w-2 h-2 rounded-full bg-red-500"></span>
                Devis gratuit
            </span>

            <h1 class="mt-6 text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.05]">
                Parlons de <span class="text-red-500">votre projet</span>
            </h1>

            <p class="mt-6 text-lg leading-8 text-white/65 max-w-2xl">
                Décrivez votre besoin en quelques lignes. Nous revenons vers vous sous 24h avec une proposition adaptée.
            </p>
        </div>
    </div>
</section>


{{-- ============================================================
    FORMULAIRE
============================================================ --}}
<section class="bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
        <div class="grid gap-16 lg:grid-cols-12">

            {{-- ---------- Colonne gauche : réassurance ---------- --}}
            <aside class="lg:col-span-5">
                <p class="text-sm font-bold uppercase tracking-widest text-red-600">Comment ça se passe</p>
                <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900">
                    Un devis clair, sans engagement
                </h2>

                <ol class="mt-10 space-y-8">
                    @foreach ([
                        ['1', 'Vous nous écrivez', 'Quelques informations sur votre activité et votre besoin.'],
                        ['2', 'Nous vous rappelons', 'Un expert vous contacte sous 24h pour préciser votre projet.'],
                        ['3', 'Vous recevez votre devis', 'Une proposition détaillée, adaptée à votre volume et à votre secteur.'],
                    ] as [$num, $titre, $texte])
                        <li class="flex gap-5">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-red-600 text-sm font-extrabold text-white">
                                {{ $num }}
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900">{{ $titre }}</h3>
                                <p class="mt-1 leading-7 text-slate-600">{{ $texte }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>

                {{-- Coordonnées (à compléter) --}}
                <div class="mt-12 border-t border-slate-200 pt-8">
                    <p class="text-sm font-bold uppercase tracking-widest text-slate-900">Nous contacter directement</p>
                    <ul class="mt-5 space-y-4">
                        <li class="flex items-center gap-4">
                            <i data-lucide="phone" class="w-5 h-5 text-red-600 shrink-0"></i>
                            <span class="text-slate-700">[Téléphone à compléter]</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i data-lucide="mail" class="w-5 h-5 text-red-600 shrink-0"></i>
                            <span class="text-slate-700">[Email à compléter]</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i data-lucide="map-pin" class="w-5 h-5 text-red-600 shrink-0"></i>
                            <span class="text-slate-700">Fès, Maroc</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i data-lucide="clock" class="w-5 h-5 text-red-600 shrink-0"></i>
                            <span class="text-slate-700">Réponse sous 24h ouvrées</span>
                        </li>
                    </ul>
                </div>
            </aside>


            {{-- ---------- Colonne droite : formulaire ---------- --}}
            <div class="lg:col-span-7" id="formulaire">

                @if (session('success'))
                    <div class="mb-8 flex items-start gap-4 rounded-2xl bg-green-50 p-6 ring-1 ring-green-200" role="status">
                        <i data-lucide="check-circle-2" class="w-6 h-6 text-green-600 shrink-0"></i>
                        <div>
                            <p class="font-bold text-green-900">Demande envoyée</p>
                            <p class="mt-1 text-sm leading-6 text-green-800">{{ session('success') }}</p>
                        </div>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-8 flex items-start gap-4 rounded-2xl bg-red-50 p-6 ring-1 ring-red-200" role="alert">
                        <i data-lucide="alert-circle" class="w-6 h-6 text-red-600 shrink-0"></i>
                        <div>
                            <p class="font-bold text-red-900">Veuillez corriger les champs en rouge</p>
                            <p class="mt-1 text-sm text-red-800">{{ $errors->count() }} erreur(s) dans le formulaire.</p>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('devis.store') }}" novalidate
                      class="rounded-3xl bg-slate-50 p-6 sm:p-10">
                    @csrf

                    {{-- Champ piège anti-spam (invisible) --}}
                    <div style="position:absolute;left:-9999px;" aria-hidden="true">
                        <label>Ne pas remplir <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
                    </div>

                    <h2 class="text-2xl font-extrabold tracking-tight text-slate-900">Votre demande de devis</h2>
                    <p class="mt-2 text-sm text-slate-500">Les champs marqués d'un <span class="text-red-600">*</span> sont obligatoires.</p>

                    <div class="mt-8 grid gap-6 sm:grid-cols-2">

                        {{-- Nom --}}
                        <div>
                            <label for="nom" class="{{ $label }}">Nom et prénom <span class="text-red-600">*</span></label>
                            <input id="nom" name="nom" type="text" value="{{ old('nom') }}" autocomplete="name"
                                   class="{{ $field }} @error('nom') !border-red-500 @enderror" placeholder="Votre nom complet">
                            @error('nom') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        {{-- Entreprise --}}
                        <div>
                            <label for="entreprise" class="{{ $label }}">Entreprise</label>
                            <input id="entreprise" name="entreprise" type="text" value="{{ old('entreprise') }}" autocomplete="organization"
                                   class="{{ $field }} @error('entreprise') !border-red-500 @enderror" placeholder="Nom de votre société">
                            @error('entreprise') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="{{ $label }}">Email <span class="text-red-600">*</span></label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email"
                                   class="{{ $field }} @error('email') !border-red-500 @enderror" placeholder="vous@entreprise.com">
                            @error('email') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        {{-- Téléphone --}}
                        <div>
                            <label for="telephone" class="{{ $label }}">Téléphone <span class="text-red-600">*</span></label>
                            <input id="telephone" name="telephone" type="tel" value="{{ old('telephone') }}" autocomplete="tel"
                                   class="{{ $field }} @error('telephone') !border-red-500 @enderror" placeholder="+212 6 00 00 00 00">
                            @error('telephone') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        {{-- Secteur --}}
                        <div class="sm:col-span-2">
                            <label for="secteur_id" class="{{ $label }}">Secteur d'activité</label>
                            <select id="secteur_id" name="secteur_id"
                                    class="{{ $field }} @error('secteur_id') !border-red-500 @enderror">
                                <option value="">Sélectionnez votre secteur</option>
                                @foreach ($secteurs as $secteur)
                                    <option value="{{ $secteur->id }}" @selected((string) $selected === (string) $secteur->id)>
                                        {{ $secteur->nom }}
                                    </option>
                                @endforeach
                            </select>
                            @error('secteur_id') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    {{-- Service recherché --}}
                    <fieldset class="mt-8">
                        <legend class="{{ $label }}">Service recherché <span class="text-red-600">*</span></legend>

                        <div class="mt-3 grid gap-3 sm:grid-cols-2">
                            @foreach ([
                                'inbound'   => ['phone-incoming', 'Inbound', 'Réponse aux appels, service client'],
                                'outbound'  => ['phone-outgoing', 'Outbound', 'Téléprospection, génération de leads'],
                                'les-deux'  => ['repeat', 'Les deux', 'Appels entrants et sortants'],
                                'autre'     => ['help-circle', 'Autre / Je ne sais pas', 'Parlons-en ensemble'],
                            ] as $value => [$ico, $titre, $sous])
                                <label class="cursor-pointer">
                                    <input type="radio" name="service" value="{{ $value }}" class="peer sr-only"
                                           @checked(old('service') === $value)>
                                    <span class="flex items-start gap-3 rounded-xl border border-slate-300 bg-white p-4 transition
                                                 hover:border-red-300 peer-checked:border-red-600 peer-checked:ring-4 peer-checked:ring-red-100
                                                 peer-focus-visible:ring-4 peer-focus-visible:ring-red-100">
                                        <i data-lucide="{{ $ico }}" class="w-5 h-5 mt-0.5 text-red-600 shrink-0"></i>
                                        <span>
                                            <span class="block text-sm font-bold text-slate-900">{{ $titre }}</span>
                                            <span class="block text-sm text-slate-500">{{ $sous }}</span>
                                        </span>
                                    </span>
                                </label>
                            @endforeach
                        </div>
                        @error('service') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                    </fieldset>

                    {{-- Volume --}}
                    <div class="mt-8">
                        <label for="volume" class="{{ $label }}">Volume d'appels approximatif (par mois)</label>
                        <select id="volume" name="volume" class="{{ $field }} @error('volume') !border-red-500 @enderror">
                            <option value="">Je ne sais pas encore</option>
                            @foreach ([
                                'moins-500'  => 'Moins de 500 appels',
                                '500-2000'   => '500 à 2 000 appels',
                                '2000-5000'  => '2 000 à 5 000 appels',
                                'plus-5000'  => 'Plus de 5 000 appels',
                            ] as $value => $texte)
                                <option value="{{ $value }}" @selected(old('volume') === $value)>{{ $texte }}</option>
                            @endforeach
                        </select>
                        @error('volume') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    {{-- Message --}}
                    <div class="mt-6">
                        <label for="message" class="{{ $label }}">Votre besoin</label>
                        <textarea id="message" name="message" rows="5"
                                  class="{{ $field }} @error('message') !border-red-500 @enderror"
                                  placeholder="Horaires de couverture, langues, objectifs, délai de démarrage...">{{ old('message') }}</textarea>
                        @error('message') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    {{-- Consentement --}}
                    <div class="mt-6">
                        <label class="flex cursor-pointer items-start gap-3">
                            <input type="checkbox" name="consent" value="1" @checked(old('consent'))
                                   class="mt-1 h-4 w-4 rounded border-slate-300 text-red-600 focus:ring-red-500">
                            <span class="text-sm leading-6 text-slate-600">
                                J'accepte d'être recontacté par ARTI CALL au sujet de ma demande.
                                <span class="text-red-600">*</span>
                            </span>
                        </label>
                        @error('consent') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit"
                            class="mt-8 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-red-600 px-7 py-4 text-sm font-bold text-white shadow-sm transition hover:bg-red-700 sm:w-auto">
                        Demander mon devis
                        <i data-lucide="send" class="w-4 h-4"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection


@push('scripts')
    @if ($errors->any() || session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var f = document.getElementById('formulaire');
                if (f) f.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        </script>
    @endif
@endpush