<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($slug)
    {
        $services = [

            'reception-appels' => [
                'icon' => 'phone-call',
                'title' => 'Réception d’appels',
                'category' => 'Services Inbound',
                'description' => 'Nous prenons en charge vos appels entrants et orientons chaque demande selon vos procédures.',
                'benefits' => [
                    'Appels traités avec votre script',
                    'Transmission claire des messages',
                    'Réduction des appels manqués',
                ],
            ],

            'service-client' => [
                'icon' => 'headset',
                'title' => 'Service client',
                'category' => 'Services Inbound',
                'description' => 'Une équipe dédiée répond aux questions de vos clients et assure le suivi de leurs demandes.',
                'benefits' => [
                    'Réponses homogènes',
                    'Suivi structuré des demandes',
                    'Image de marque préservée',
                ],
            ],

            'support-client' => [
                'icon' => 'life-buoy',
                'title' => 'Assistance et support',
                'category' => 'Services Inbound',
                'description' => 'Une assistance téléphonique adaptée à vos besoins pour accompagner vos clients avant et après leur achat.',
                'benefits' => [
                    'Prise en charge des réclamations',
                    'Escalade vers vos équipes si nécessaire',
                    'Suivi des échanges',
                ],
            ],

            'prise-rendez-vous-inbound' => [
                'icon' => 'calendar-check',
                'title' => 'Prise de rendez-vous',
                'category' => 'Services Inbound',
                'description' => 'Nous organisons les rendez-vous de vos équipes commerciales, techniques ou opérationnelles.',
                'benefits' => [
                    'Agenda toujours à jour',
                    'Rappels aux clients',
                    'Réduction des rendez-vous manqués',
                ],
            ],

            'reception-commandes' => [
                'icon' => 'shopping-cart',
                'title' => 'Réception de commandes',
                'category' => 'Services Inbound',
                'description' => 'Nous enregistrons les commandes reçues par téléphone et vérifions les informations nécessaires.',
                'benefits' => [
                    'Saisie fiable',
                    'Confirmation au client',
                    'Transmission rapide',
                ],
            ],

            'teleprospection' => [
                'icon' => 'target',
                'title' => 'Téléprospection',
                'category' => 'Services Outbound',
                'description' => 'Nous contactons vos cibles pour présenter votre offre, identifier les besoins et détecter les opportunités.',
                'benefits' => [
                    'Ciblage selon vos critères',
                    'Scripts adaptés à votre offre',
                    'Reporting régulier',
                ],
            ],

            'telemarketing' => [
                'icon' => 'megaphone',
                'title' => 'Télémarketing et télévente',
                'category' => 'Services Outbound',
                'description' => 'Des campagnes d’appels conçues pour promouvoir vos offres et développer vos ventes par téléphone.',
                'benefits' => [
                    'Campagnes sur mesure',
                    'Suivi des résultats',
                    'Ajustements selon les retours',
                ],
            ],

            'generation-leads' => [
                'icon' => 'users',
                'title' => 'Génération de leads',
                'category' => 'Services Outbound',
                'description' => 'Nous identifions et qualifions les prospects correspondant aux critères définis avec votre équipe.',
                'benefits' => [
                    'Qualification selon vos critères',
                    'Leads transmis avec leur contexte',
                    'Gain de temps pour vos commerciaux',
                ],
            ],

            'rendez-vous-commerciaux' => [
                'icon' => 'calendar-plus',
                'title' => 'Prise de rendez-vous commerciaux',
                'category' => 'Services Outbound',
                'description' => 'Nous organisons des rendez-vous qualifiés pour permettre à vos commerciaux de se concentrer sur les opportunités.',
                'benefits' => [
                    'Rendez-vous confirmés',
                    'Informations prospect fournies',
                    'Relances incluses',
                ],
            ],

            'fidelisation' => [
                'icon' => 'repeat',
                'title' => 'Relance et fidélisation',
                'category' => 'Services Outbound',
                'description' => 'Nous assurons vos relances commerciales et vos appels de suivi pour maintenir une relation régulière avec vos clients.',
                'benefits' => [
                    'Relances planifiées',
                    'Retours clients collectés',
                    'Suivi de la relation',
                ],
            ],

            'enquetes-sondages' => [
                'icon' => 'clipboard-list',
                'title' => 'Enquêtes et sondages',
                'category' => 'Services Outbound',
                'description' => 'Nous réalisons des enquêtes téléphoniques pour recueillir les avis de vos clients ou étudier un marché.',
                'benefits' => [
                    'Questionnaires sur mesure',
                    'Données collectées proprement',
                    'Synthèse des résultats',
                ],
            ],

            'gestion-emails' => [
                'icon' => 'mail',
                'title' => 'Gestion des emails',
                'category' => 'Services complémentaires',
                'description' => 'Traitement et suivi des emails clients selon vos procédures et vos modèles de réponse.',
                'benefits' => [
                    'Réponses dans les délais',
                    'Tri des demandes',
                    'Suivi des dossiers',
                ],
            ],

            'chat-en-ligne' => [
                'icon' => 'message-circle',
                'title' => 'Chat en ligne',
                'category' => 'Services complémentaires',
                'description' => 'Réponse aux visiteurs de votre site et orientation des demandes directement depuis votre chat.',
                'benefits' => [
                    'Réponse rapide',
                    'Orientation des visiteurs',
                    'Complément du téléphone',
                ],
            ],

            'back-office' => [
                'icon' => 'database',
                'title' => 'Saisie de données et back-office',
                'category' => 'Services complémentaires',
                'description' => 'Saisie, mise à jour de fichiers et tâches administratives permettant de libérer du temps à vos équipes.',
                'benefits' => [
                    'Données à jour',
                    'Procédures respectées',
                    'Temps libéré pour vos équipes',
                ],
            ],
        ];

        if (!isset($services[$slug])) {
            abort(404);
        }

        $service = $services[$slug];

        return view('services.show', compact('service'));
    }
}
