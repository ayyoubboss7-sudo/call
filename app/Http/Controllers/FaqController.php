<?php

namespace App\Http\Controllers;

class FaqController extends Controller
{
    public function index()
    {
        // Réponses volontairement sans chiffres ni engagements précis :
        // adaptez-les aux prestations réellement proposées par ARTI CALL.
        $categories = [
            [
                'id'    => 'general',
                'title' => 'Présentation',
                'icon'  => 'building-2',
                'items' => [
                    [
                        'q' => 'Quels services propose ARTI CALL ?',
                        'a' => 'ARTI CALL accompagne les entreprises sur deux axes : les services Inbound (réception d\'appels, service client, assistance, prise de rendez-vous) et les services Outbound (téléprospection, télémarketing, télévente, génération et qualification de leads). Chaque prestation est adaptée aux objectifs et aux contraintes de votre activité.',
                    ],
                    [
                        'q' => 'Où se situe ARTI CALL ?',
                        'a' => 'ARTI CALL est un centre d\'appel implanté à Fès, au Maroc. Nos équipes sont regroupées sur un même site, ce qui facilite l\'encadrement des agents, le suivi des campagnes et la communication avec nos clients.',
                    ],
                    [
                        'q' => 'Quels types d\'entreprises accompagnez-vous ?',
                        'a' => 'Nous travaillons avec des startups, des PME et des structures plus importantes, dans des secteurs variés : e-commerce, immobilier, assurance, finance, télécommunications, santé, éducation ou services. Le dispositif est dimensionné selon la taille et les besoins de chaque client.',
                    ],
                    [
                        'q' => 'Dans quelles langues vos équipes peuvent-elles intervenir ?',
                        'a' => 'Les langues de travail sont définies lors de l\'analyse de votre besoin. Le site est conçu pour s\'adresser aux entreprises francophones, anglophones et arabophones ; les langues couvertes par une campagne sont confirmées dans le devis.',
                    ],
                    [
                        'q' => 'Qu\'est-ce que l\'externalisation d\'un centre d\'appel ?',
                        'a' => 'Externaliser, c\'est confier tout ou partie de votre relation client ou de votre prospection téléphonique à un prestataire spécialisé. Vous vous concentrez sur votre cœur de métier, pendant que des équipes dédiées prennent en charge les appels selon vos consignes.',
                    ],
                    [
                        'q' => 'Quels sont les avantages de travailler avec un centre d\'appel au Maroc ?',
                        'a' => 'Le Maroc est une destination reconnue pour la relation client, notamment auprès des entreprises francophones. Travailler avec ARTI CALL à Fès vous permet de bénéficier d\'équipes formées, d\'une proximité linguistique et culturelle avec de nombreux marchés, et d\'un dispositif adapté à votre budget.',
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
                        'a' => 'Oui. Nous définissons avec vous le périmètre (types de demandes, canaux, horaires), les procédures de traitement et les règles d\'escalade vers vos équipes. Nos agents répondent ensuite à vos clients au nom de votre entreprise, dans le respect de votre ton et de vos consignes.',
                    ],
                    [
                        'q' => 'Pouvez-vous prendre des rendez-vous ou enregistrer des commandes ?',
                        'a' => 'Oui. Après qualification de la demande, nos agents planifient le rendez-vous ou saisissent la commande selon la procédure convenue, puis vous transmettent les informations de façon structurée.',
                    ],
                    [
                        'q' => 'Comment sont traitées les demandes que vos agents ne peuvent pas résoudre ?',
                        'a' => 'Les cas complexes suivent un circuit d\'escalade défini en amont : transmission à un interlocuteur désigné chez vous, avec un résumé clair de la demande, afin que le client n\'ait pas à se répéter.',
                    ],
                    [
                        'q' => 'Assurez-vous le support après-vente ?',
                        'a' => 'Oui, si ce service correspond à votre besoin. Nos agents peuvent prendre en charge les questions de suivi de commande, les réclamations et les demandes d\'assistance, selon les procédures que vous validez.',
                    ],
                    [
                        'q' => 'Mes clients sauront-ils qu\'ils parlent à un prestataire ?',
                        'a' => 'Cela dépend de votre choix. Les agents peuvent se présenter au nom de votre entreprise ou d\'une manière convenue avec vous. Le message d\'accueil et le discours sont définis ensemble avant le lancement.',
                    ],
                    [
                        'q' => 'Puis-je conserver mon numéro de téléphone actuel ?',
                        'a' => 'Dans la plupart des cas, une solution de redirection ou de connexion à votre ligne existante peut être étudiée. Les modalités techniques sont précisées lors de l\'analyse de votre besoin.',
                    ],
                ],
            ],
            [
                'id'    => 'outbound',
                'title' => 'Services Outbound',
                'icon'  => 'phone-outgoing',
                'items' => [
                    [
                        'q' => 'Comment se déroule une campagne de téléprospection ?',
                        'a' => 'Nous partons de vos objectifs et de votre cible, puis nous préparons le scénario d\'appel et les arguments commerciaux. Les agents sont formés avant le lancement, et les résultats sont suivis pendant toute la campagne pour ajuster le discours et les priorités si nécessaire.',
                    ],
                    [
                        'q' => 'Comment qualifiez-vous les prospects ?',
                        'a' => 'Les critères de qualification (besoin, budget, décideur, échéance, etc.) sont définis avec vous avant le lancement. Chaque contact est évalué selon ces critères, puis les prospects retenus vous sont transmis avec les informations recueillies pendant l\'échange.',
                    ],
                    [
                        'q' => 'Pouvez-vous fournir un suivi des résultats ?',
                        'a' => 'Oui. Un suivi de la campagne est prévu avec vous : indicateurs à suivre, fréquence des points d\'étape et retours sur les appels. Le format exact est défini au démarrage selon vos besoins.',
                    ],
                    [
                        'q' => 'Quelle est la différence entre téléprospection, télémarketing et télévente ?',
                        'a' => 'La téléprospection vise à identifier de nouveaux prospects et à ouvrir des opportunités. Le télémarketing regroupe les actions de promotion et de communication par téléphone. La télévente a pour objectif de conclure directement une vente par téléphone.',
                    ],
                    [
                        'q' => 'Pouvez-vous réaliser des enquêtes ou des sondages téléphoniques ?',
                        'a' => 'Oui, si ce besoin fait partie de votre projet. Nous pouvons mener des enquêtes de satisfaction ou des études auprès de vos clients ou d\'un panel défini, puis vous transmettre les réponses collectées.',
                    ],
                    [
                        'q' => 'Puis-je fournir mon propre fichier de contacts ?',
                        'a' => 'Oui. Vous pouvez nous confier votre base de contacts, à condition qu\'elle ait été constituée dans le respect de la réglementation en vigueur. Nous pouvons aussi en discuter avec vous si vous cherchez à constituer une cible.',
                    ],
                    [
                        'q' => 'Pouvez-vous relancer mes clients existants ?',
                        'a' => 'Oui. Les actions de relance commerciale et de fidélisation (rappel de devis, suivi après achat, réactivation de clients inactifs) peuvent être intégrées à votre campagne.',
                    ],
                ],
            ],
            [
                'id'    => 'collaboration',
                'title' => 'Devis et collaboration',
                'icon'  => 'file-text',
                'items' => [
                    [
                        'q' => 'Comment demander un devis ?',
                        'a' => 'Renseignez le formulaire de la page Contact en précisant votre secteur, le service recherché et vos objectifs. Notre équipe vous recontacte pour comprendre votre besoin et vous proposer une offre adaptée.',
                    ],
                    [
                        'q' => 'Quelles sont les étapes pour démarrer avec ARTI CALL ?',
                        'a' => 'Le démarrage se fait en six étapes : analyse de vos objectifs, préparation des scripts et procédures, formation des agents, lancement de la campagne, suivi des performances, puis optimisation continue selon les résultats.',
                    ],
                    [
                        'q' => 'Puis-je adapter ou faire évoluer ma campagne en cours de route ?',
                        'a' => 'Oui. Nos solutions sont flexibles : le volume, le discours ou les priorités peuvent être ajustés en fonction des résultats observés et de l\'évolution de votre activité.',
                    ],
                    [
                        'q' => 'Comment est établi le tarif d\'une prestation ?',
                        'a' => 'Le tarif dépend de la nature de la prestation (Inbound ou Outbound), du volume attendu, des horaires de couverture, des langues et de la durée de la collaboration. Chaque devis est établi sur mesure après étude de votre besoin.',
                    ],
                    [
                        'q' => 'Puis-je lancer un test avant de m\'engager sur la durée ?',
                        'a' => 'Selon la nature du projet, il est possible d\'envisager une phase de démarrage limitée pour valider l\'approche avant d\'étendre le dispositif. Nous en discutons avec vous au moment du devis.',
                    ],
                    [
                        'q' => 'Qui sera mon interlocuteur chez ARTI CALL ?',
                        'a' => 'Un interlocuteur est désigné pour votre projet. Il assure le lien entre vos équipes et les nôtres, suit l\'avancement de la campagne et reste disponible pour toute question ou ajustement.',
                    ],
                    [
                        'q' => 'Quel est le délai pour lancer une campagne ?',
                        'a' => 'Le délai dépend de la complexité du projet : rédaction des scripts, formation des agents, mise en place des outils. Il est précisé dans le devis, une fois vos besoins bien cadrés.',
                    ],
                ],
            ],
            [
                'id'    => 'confidentialite',
                'title' => 'Qualité et confidentialité',
                'icon'  => 'shield-check',
                'items' => [
                    [
                        'q' => 'Comment garantissez-vous la qualité des échanges ?',
                        'a' => 'La qualité repose sur des agents formés à votre activité, des scripts validés avec vous et un suivi régulier des appels. Les retours issus de ce suivi servent à améliorer en continu la manière dont vos clients et prospects sont accueillis.',
                    ],
                    [
                        'q' => 'Mes données et celles de mes clients sont-elles protégées ?',
                        'a' => 'Les informations que vous nous confiez sont traitées de manière confidentielle, uniquement pour les besoins de la mission, et dans le respect de la réglementation applicable en matière de protection des données personnelles.',
                    ],
                    [
                        'q' => 'Comment vos agents sont-ils formés à mon activité ?',
                        'a' => 'Avant le lancement, les agents affectés à votre campagne sont briefés sur votre offre, votre discours et vos procédures. Des points de suivi permettent ensuite de compléter cette formation selon les retours du terrain.',
                    ],
                    [
                        'q' => 'Les appels peuvent-ils être écoutés ou enregistrés ?',
                        'a' => 'L\'écoute qualité et l\'enregistrement des appels peuvent être mis en place selon votre projet et dans le respect de la réglementation applicable, notamment l\'information des personnes concernées.',
                    ],
                    [
                        'q' => 'Comment suivez-vous les performances de la campagne ?',
                        'a' => 'Nous définissons avec vous des indicateurs adaptés à vos objectifs (volume de contacts traités, rendez-vous obtenus, leads qualifiés, etc.) et nous en faisons le point régulièrement pour améliorer la campagne.',
                    ],
                ],
            ],
        ];

        return view('faq', compact('categories'));
    }
}