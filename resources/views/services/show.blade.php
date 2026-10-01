@extends('layouts.app')

@section('title', $service['title'] . ' - ARTI CALL')

@section('meta_description', $service['description'])

@section('content')

    {{-- =========================================================
    ANIMATIONS
    ========================================================== --}}

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
    HERO SERVICE
    ========================================================== --}}

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

                <a href="{{ route('services') }}"
                    class="service-fade-left service-back-link inline-flex items-center gap-2 text-sm font-semibold text-slate-400">

                    <i data-lucide="arrow-left" class="h-4 w-4"></i>

                    Retour aux services

                </a>

                <div
                    class="service-icon-animation mt-8 flex h-16 w-16 items-center justify-center rounded-2xl bg-red-600 shadow-lg shadow-red-600/20">

                    <i data-lucide="{{ $service['icon'] }}" class="h-8 w-8 text-white"></i>

                </div>

                <p class="service-fade-up service-delay-1 mt-8 text-sm font-bold uppercase tracking-[0.18em] text-red-500">
                    {{ $service['category'] }}
                </p>

                <h1
                    class="service-fade-up service-delay-2 mt-3 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    {{ $service['title'] }}
                </h1>

                <p
                    class="service-fade-up service-delay-3 mt-6 max-w-3xl text-lg leading-8 text-slate-300">
                    {{ $service['description'] }}
                </p>

                <div class="service-fade-up service-delay-4 mt-8">

                    <a href="{{ url('/contact') }}?service={{ urlencode($service['title']) }}"
                        class="service-button inline-flex items-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white hover:bg-red-700">

                        Demander un devis

                        <i data-lucide="arrow-right" class="h-4 w-4"></i>

                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    SERVICE DETAILS
    ========================================================== --}}

    <section class="bg-white py-20 lg:py-24">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-20">

                <div class="service-fade-left">

                    <span class="text-sm font-bold uppercase tracking-[0.16em] text-red-600">
                        Notre accompagnement
                    </span>

                    <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                        Une solution adaptée à vos besoins
                    </h2>

                    <p class="mt-5 text-base leading-8 text-slate-600 sm:text-lg">
                        ARTI CALL vous accompagne avec une organisation structurée,
                        des procédures adaptées et un suivi régulier de vos opérations.
                    </p>

                </div>


                <div class="service-fade-up service-delay-2">

                    <h2 class="text-2xl font-extrabold text-slate-900">
                        Les avantages
                    </h2>

                    <ul class="mt-6 space-y-4">

                        @foreach ($service['benefits'] as $index => $benefit)
                            <li
                                class="service-benefit flex items-start gap-4 rounded-2xl border border-slate-200 bg-slate-50 p-5"
                                style="animation-delay: {{ 0.15 + ($index * 0.12) }}s;">

                                <span
                                    class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-red-600 transition-transform duration-300 hover:scale-110">

                                    <i data-lucide="check" class="h-4 w-4 text-white"></i>

                                </span>

                                <span class="pt-1 font-semibold text-slate-800">
                                    {{ $benefit }}
                                </span>

                            </li>
                        @endforeach

                    </ul>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
    CTA
    ========================================================== --}}

    <section class="relative isolate overflow-hidden bg-slate-950 py-20 text-white">

        <div
            class="service-glow absolute -right-32 top-0 -z-10 h-80 w-80 rounded-full bg-red-600/10 blur-3xl">
        </div>

        <div
            class="service-glow absolute -left-32 bottom-0 -z-10 h-72 w-72 rounded-full bg-red-600/10 blur-3xl"
            style="animation-delay: -4s;">
        </div>

        <div class="mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8">

            <span class="service-fade-up text-sm font-bold uppercase tracking-[0.16em] text-red-500">
                Parlons de votre projet
            </span>

            <h2 class="service-fade-up service-delay-1 mt-3 text-3xl font-extrabold sm:text-4xl">
                Besoin de {{ strtolower($service['title']) }} ?
            </h2>

            <p class="service-fade-up service-delay-2 mx-auto mt-5 max-w-2xl text-base leading-8 text-slate-300">
                Présentez-nous votre besoin et échangeons sur une solution
                adaptée à votre activité.
            </p>

            <div class="service-fade-up service-delay-3 mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">

                <a href="{{ url('/contact') }}?service={{ urlencode($service['title']) }}"
                    class="service-button inline-flex items-center gap-2 rounded-xl bg-red-600 px-6 py-3.5 text-sm font-bold text-white hover:bg-red-700">

                    Demander un devis

                    <i data-lucide="arrow-right" class="h-4 w-4"></i>

                </a>

                <a href="{{ route('services') }}"
                    class="service-back-link inline-flex items-center gap-2 rounded-xl border border-white/20 bg-white/5 px-6 py-3.5 text-sm font-bold text-white hover:bg-white/10">

                    Voir tous les services

                    <i data-lucide="arrow-left" class="h-4 w-4"></i>

                </a>

            </div>

        </div>

    </section>

@endsection
