<?php
// database/seeders/SecteurSeeder.php

namespace Database\Seeders;

use App\Models\Secteur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SecteurSeeder extends Seeder
{
    public function run(): void
    {
        $avantages = [
            'Agents formés à votre métier',
            'Disponibilité étendue',
            'Reporting régulier',
            'Tarification flexible',
        ];

        $secteurs = [
            [
                'nom' => 'Santé',
                'icone' => 'heart-pulse',
                'courte' => 'Prise de rendez-vous, accueil des patients et rappels automatiques.',
                'description' => 'Cliniques, cabinets et laboratoires reçoivent de nombreux appels. ARTI CALL prend en charge l’accueil téléphonique et la gestion de vos rendez-vous pour que votre équipe se concentre sur les patients.',
                'services' => ['Prise de rendez-vous', 'Accueil téléphonique', 'Rappels de rendez-vous', 'Orientation des patients'],
                'defis' => [
                    ['Appels manqués', 'Les patients raccrochent quand personne ne répond, surtout aux heures de pointe.'],
                    ['Rendez-vous non honorés', 'Sans rappel, beaucoup de rendez-vous sont oubliés.'],
                    ['Charge administrative', 'Le personnel perd du temps au téléphone au lieu de s’occuper des patients.'],
                ],
                'faq' => [
                    ['Vos agents peuvent-ils gérer l’agenda de notre clinique ?', 'Oui, ils prennent, déplacent et confirment les rendez-vous selon vos règles.'],
                    ['Les informations des patients restent-elles confidentielles ?', 'Nos agents s’engagent à la confidentialité et suivent vos procédures.'],
                ],
            ],
            [
                'nom' => 'Juridique',
                'icone' => 'scale',
                'courte' => 'Réception des appels, qualification des dossiers et prise de rendez-vous.',
                'description' => 'Un cabinet d’avocats ou de notaires ne peut pas répondre pendant les audiences et les rendez-vous. Nous assurons un premier accueil professionnel et qualifions chaque demande.',
                'services' => ['Standard téléphonique', 'Qualification des demandes', 'Prise de rendez-vous', 'Transmission des messages urgents'],
                'defis' => [
                    ['Indisponibilité en journée', 'Audiences et rendez-vous empêchent de décrocher.'],
                    ['Demandes mal qualifiées', 'Du temps est perdu sur des dossiers hors de votre domaine.'],
                    ['Image professionnelle', 'Un appel sans réponse peut faire perdre un futur client.'],
                ],
                'faq' => [
                    ['Pouvez-vous filtrer les appels selon notre spécialité ?', 'Oui, nous appliquons vos critères pour ne vous transmettre que les demandes pertinentes.'],
                    ['Comment sont transmises les urgences ?', 'Selon la procédure définie ensemble : appel direct, SMS ou email.'],
                ],
            ],
            [
                'nom' => 'Immobilier',
                'icone' => 'building-2',
                'courte' => 'Réponse aux demandes, qualification des acheteurs et organisation des visites.',
                'description' => 'Agences et promoteurs reçoivent des appels à toute heure. Nous répondons rapidement, qualifions l’intérêt du prospect et planifions les visites.',
                'services' => ['Réponse aux demandes de biens', 'Qualification des prospects', 'Organisation des visites', 'Relance des contacts'],
                'defis' => [
                    ['Prospects qui n’attendent pas', 'Un acheteur rappelle souvent la première agence qui répond.'],
                    ['Visites mal organisées', 'Les agents perdent du temps sur des contacts peu sérieux.'],
                    ['Suivi irrégulier', 'Les leads ne sont pas relancés faute de temps.'],
                ],
                'faq' => [
                    ['Pouvez-vous présenter nos biens au téléphone ?', 'Oui, à partir des fiches et informations que vous nous fournissez.'],
                    ['Prenez-vous les rendez-vous de visite ?', 'Oui, directement dans votre agenda selon vos disponibilités.'],
                ],
            ],
            [
                'nom' => 'Assurance',
                'icone' => 'shield-check',
                'courte' => 'Service client, gestion des demandes et téléprospection.',
                'description' => 'Agents généraux et courtiers doivent répondre vite aux assurés et développer leur portefeuille. Nous prenons en charge l’accueil, le suivi et la prospection.',
                'services' => ['Service client assurés', 'Prise en charge des déclarations', 'Téléprospection', 'Prise de rendez-vous commerciaux'],
                'defis' => [
                    ['Volume d’appels élevé', 'Renouvellements et sinistres saturent la ligne.'],
                    ['Prospection difficile', 'Peu de temps pour développer de nouveaux contrats.'],
                    ['Réactivité attendue', 'L’assuré attend une réponse rapide et claire.'],
                ],
                'faq' => [
                    ['Vos agents peuvent-ils prospecter pour nos produits ?', 'Oui, avec un script validé par vos soins.'],
                    ['Pouvez-vous gérer le débordement d’appels ?', 'Oui, nous absorbons les pics pour éviter les appels perdus.'],
                ],
            ],
            [
                'nom' => 'Banque & Finance',
                'icone' => 'landmark',
                'courte' => 'Relation client, relances et génération de leads qualifiés.',
                'description' => 'Sociétés de financement et de services financiers ont besoin d’une relation client rigoureuse. Nos équipes suivent des scripts stricts et remontent des informations fiables.',
                'services' => ['Relation client', 'Relances de paiement', 'Génération de leads', 'Enquêtes de satisfaction'],
                'defis' => [
                    ['Relances chronophages', 'Les suivis prennent beaucoup de temps aux équipes internes.'],
                    ['Exigence de rigueur', 'Chaque échange doit respecter un script précis.'],
                    ['Acquisition de clients', 'Trouver des prospects qualifiés reste coûteux.'],
                ],
                'faq' => [
                    ['Respectez-vous nos scripts et procédures ?', 'Oui, les agents sont formés à vos process avant le lancement.'],
                    ['Pouvez-vous nous fournir des rapports ?', 'Oui, avec des indicateurs adaptés à votre suivi.'],
                ],
            ],
            [
                'nom' => 'Hôtellerie & Restauration',
                'icone' => 'concierge-bell',
                'courte' => 'Réservations, accueil téléphonique et support client 7j/7.',
                'description' => 'Hôtels et restaurants reçoivent des demandes en continu, souvent en plusieurs langues. Nous gérons les réservations et l’information pour ne perdre aucune réservation.',
                'services' => ['Prise de réservations', 'Accueil multilingue', 'Information clients', 'Gestion des annulations'],
                'defis' => [
                    ['Appels en plein service', 'Le personnel ne peut pas décrocher pendant le rush.'],
                    ['Clientèle internationale', 'Les demandes arrivent en plusieurs langues.'],
                    ['Réservations perdues', 'Un appel manqué est souvent une réservation perdue.'],
                ],
                'faq' => [
                    ['Gérez-vous plusieurs langues ?', 'Nous proposons des agents en français, arabe et anglais.'],
                    ['Travaillez-vous le week-end et les jours fériés ?', 'Oui, la couverture est définie selon vos besoins.'],
                ],
            ],
            [
                'nom' => 'E-commerce',
                'icone' => 'shopping-cart',
                'courte' => 'Confirmation des commandes, suivi de livraison et service après-vente.',
                'description' => 'Une boutique en ligne repose sur la confiance. Nous confirmons les commandes, suivons les livraisons et répondons aux clients pour réduire les retours et les annulations.',
                'services' => ['Confirmation de commandes', 'Suivi de livraison', 'Service après-vente', 'Relance des paniers'],
                'defis' => [
                    ['Commandes non confirmées', 'Des commandes sont annulées faute de contact client.'],
                    ['Questions sur la livraison', 'Les clients appellent pour savoir où est leur colis.'],
                    ['SAV débordé', 'Les demandes s’accumulent après les périodes de promotions.'],
                ],
                'faq' => [
                    ['Pouvez-vous confirmer les commandes par téléphone ?', 'Oui, dès réception de la commande selon votre procédure.'],
                    ['Vous connectez-vous à notre outil de gestion ?', 'Nous nous adaptons à votre outil ou à un fichier de suivi partagé.'],
                ],
            ],
            [
                'nom' => 'Télécoms & Énergie',
                'icone' => 'zap',
                'courte' => 'Support technique, assistance abonnés et campagnes commerciales.',
                'description' => 'Les opérateurs et fournisseurs d’énergie gèrent un grand volume de demandes. Nous assurons un premier niveau de support et des campagnes d’appels ciblées.',
                'services' => ['Support de premier niveau', 'Assistance aux abonnés', 'Campagnes commerciales', 'Enquêtes clients'],
                'defis' => [
                    ['Gros volumes d’appels', 'Les pics saturent rapidement le support.'],
                    ['Demandes répétitives', 'Les mêmes questions mobilisent vos équipes techniques.'],
                    ['Fidélisation', 'Il faut contacter les abonnés avant qu’ils ne partent.'],
                ],
                'faq' => [
                    ['Pouvez-vous traiter le support de niveau 1 ?', 'Oui, avec une base de connaissances que nous préparons avec vous.'],
                    ['Faites-vous des campagnes sortantes ?', 'Oui, selon des objectifs et scripts définis ensemble.'],
                ],
            ],
            [
                'nom' => 'Éducation',
                'icone' => 'graduation-cap',
                'courte' => 'Inscriptions, information des candidats et suivi des prospects.',
                'description' => 'Écoles et centres de formation reçoivent beaucoup de demandes avant les rentrées. Nous informons les candidats et relançons chaque contact pour maximiser les inscriptions.',
                'services' => ['Information des candidats', 'Suivi des inscriptions', 'Relance des prospects', 'Organisation de journées portes ouvertes'],
                'defis' => [
                    ['Pics avant la rentrée', 'Les appels explosent sur une courte période.'],
                    ['Candidats non relancés', 'Beaucoup de contacts restent sans suite.'],
                    ['Informations répétitives', 'Le secrétariat répète les mêmes réponses toute la journée.'],
                ],
                'faq' => [
                    ['Pouvez-vous renforcer notre équipe à la rentrée ?', 'Oui, nous adaptons le nombre d’agents à la période.'],
                    ['Relancez-vous les candidats ?', 'Oui, avec un suivi régulier jusqu’à la décision.'],
                ],
            ],
            [
                'nom' => 'Construction & Industrie',
                'icone' => 'hard-hat',
                'courte' => 'Réception des demandes de devis et gestion des urgences.',
                'description' => 'Les équipes terrain sont rarement disponibles au téléphone. Nous recevons les demandes de devis et transmettons les urgences pour que vous restiez joignable.',
                'services' => ['Réception des demandes de devis', 'Gestion des urgences', 'Planification d’interventions', 'Suivi des demandes'],
                'defis' => [
                    ['Équipes sur le terrain', 'Impossible de décrocher pendant les chantiers.'],
                    ['Devis perdus', 'Un prospect non rappelé va chez un concurrent.'],
                    ['Urgences à transmettre', 'Une urgence mal relayée peut coûter cher.'],
                ],
                'faq' => [
                    ['Pouvez-vous planifier des interventions ?', 'Oui, selon vos créneaux et vos règles.'],
                    ['Comment recevons-nous les demandes ?', 'Par email, SMS ou outil partagé, selon votre choix.'],
                ],
            ],
            [
                'nom' => 'PME & Startups',
                'icone' => 'rocket',
                'courte' => 'Un standard externalisé flexible pour ne jamais rater un appel.',
                'description' => 'Une petite structure ne peut pas recruter une équipe complète. Nous offrons un service souple qui grandit avec vous, sans engagement lourd.',
                'services' => ['Standard téléphonique externalisé', 'Service client', 'Prise de rendez-vous', 'Téléprospection'],
                'defis' => [
                    ['Ressources limitées', 'Recruter et former coûte cher pour une petite équipe.'],
                    ['Fondateurs surchargés', 'Le dirigeant répond lui-même à tous les appels.'],
                    ['Besoin de flexibilité', 'L’activité varie, les coûts fixes pèsent.'],
                ],
                'faq' => [
                    ['Puis-je commencer avec un petit volume ?', 'Oui, l’offre s’ajuste à votre activité.'],
                    ['Y a-t-il un engagement de durée ?', 'Les conditions sont définies dans le devis, adaptées à votre besoin.'],
                ],
            ],
        ];

        foreach ($secteurs as $i => $s) {
            Secteur::updateOrCreate(
                ['slug' => Str::slug($s['nom'])],
                [
                    'nom'                => $s['nom'],
                    'icone'              => $s['icone'],
                    'description_courte' => $s['courte'],
                    'description'        => $s['description'],
                    'services'           => $s['services'],
                    'defis'              => array_map(fn ($d) => ['titre' => $d[0], 'texte' => $d[1]], $s['defis']),
                    'avantages'          => $avantages,
                    'faq'                => array_map(fn ($f) => ['q' => $f[0], 'a' => $f[1]], $s['faq']),
                    'ordre'              => $i + 1,
                    'is_active'          => true,
                ]
            );
        }
    }
}