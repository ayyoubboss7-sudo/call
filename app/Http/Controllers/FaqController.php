<?php

namespace App\Http\Controllers;

class FaqController extends Controller
{
    public function index()
    {
        // Les réponses sont génériques : adaptez-les aux prestations réelles d'ARTI CALL.
        $categories = [
            [
                'id'    => 'general',
                'title' => 'Général',
                'icon'  => 'building-2',
                'items' => [
                    [
                        'q' => 'Quels services propose ARTI CALL ?',
                        'a' => 'ARTI CALL propose des services Inbound (réception d\'appels, service client, prise de rendez-vous) et Outbound (téléprospection, télémarketing, génération de leads), ainsi que des services complémentaires selon vos besoins.',
                    ],
                    [
                        'q' => 'Où se trouve ARTI CALL ?',
                        'a' => 'ARTI CALL est un centre d\'appel basé à Fès, au Maroc.',
                    ],
                    [
                        'q' => 'Pour quels types d\'entreprises travaillez-vous ?',
                        'a' => 'Nous accompagnons des startups, des PME et de plus grandes structures, dans des secteurs comme l\'e-commerce, l\'immobilier, l\'assurance, la finance ou les télécommunications.',
                    ],
                ],
            ],
            [
                'id'    => 'inbound',
                'title' => 'Services Inbound',
                'icon'  => 'phone-incoming',
                'items' => [
                    [
                        'q' => 'Pouvez-vous gérer le service client de mon entreprise ?',
                        'a' => 'Oui, selon les modalités définies avec vous : horaires, canaux, scripts et niveau d\'assistance attendu.',
                    ],
                    [
                        'q' => 'Pouvez-vous prendre des rendez-vous ou des commandes par téléphone ?',
                        'a' => 'Oui. Nos agents peuvent qualifier la demande, prendre le rendez-vous ou enregistrer la commande selon la procédure que nous définissons ensemble.',
                    ],
                ],
            ],
            [
                'id'    => 'outbound',
                'title' => 'Services Outbound',
                'icon'  => 'phone-outgoing',
                'items' => [
                    [
                        'q' => 'Pouvez-vous lancer une campagne de téléprospection ?',
                        'a' => 'Oui. Nous définissons avec vous la cible, le script et les objectifs, puis nous suivons les résultats de la campagne.',
                    ],
                    [
                        'q' => 'Comment sont qualifiés les prospects ?',
                        'a' => 'Les critères de qualification sont définis avec vous avant le lancement. Chaque contact est ensuite traité selon ces critères et transmis avec les informations recueillies.',
                    ],
                ],
            ],
            [
                'id'    => 'collaboration',
                'title' => 'Collaboration et devis',
                'icon'  => 'file-text',
                'items' => [
                    [
                        'q' => 'Comment demander un devis ?',
                        'a' => 'Remplissez le formulaire de la page Contact en précisant votre besoin, ou contactez-nous directement. Nous revenons vers vous pour affiner le projet.',
                    ],
                    [
                        'q' => 'Comment se déroule le démarrage d\'une campagne ?',
                        'a' => 'Analyse de vos objectifs, préparation des scripts, formation des agents, lancement, puis suivi et optimisation en continu.',
                    ],
                    [
                        'q' => 'Mes données sont-elles protégées ?',
                        'a' => 'Les informations que vous nous confiez sont traitées de manière confidentielle et conformément aux règles applicables.',
                    ],
                ],
            ],
        ];

        return view('faq', compact('categories'));
    }
}