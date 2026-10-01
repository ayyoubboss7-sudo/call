<x-mail::message>
# Nouvelle demande de devis

Une nouvelle demande vient d'arriver depuis le site **ARTI CALL**.

<x-mail::table>
| | |
|:--|:--|
| **Nom** | {{ $demande->nom }} |
| **Entreprise** | {{ $demande->entreprise ?: '—' }} |
| **Email** | {{ $demande->email }} |
| **Téléphone** | {{ $demande->telephone }} |
| **Secteur** | {{ $demande->secteur?->nom ?? '—' }} |
| **Service** | {{ ucfirst(str_replace('-', ' ', $demande->service)) }} |
| **Volume d'appels** | {{ $demande->volume ?: '—' }} |
</x-mail::table>

**Message :**

{{ $demande->message ?: 'Aucun message.' }}

<x-mail::button :url="'mailto:' . $demande->email">
Répondre au client
</x-mail::button>

Reçue le {{ $demande->created_at->format('d/m/Y à H:i') }}
</x-mail::message>