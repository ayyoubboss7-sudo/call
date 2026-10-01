<?php

// app/Http/Controllers/DevisController.php

namespace App\Http\Controllers;

use App\Models\DemandeDevis;
use App\Models\Secteur;
use Illuminate\Http\Request;
use App\Mail\NouvelleDemandeDevis;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class DevisController extends Controller
{
    public function create(Request $request)
    {
        $secteurs = Secteur::actif()->get();

        // /devis?secteur=sante  →  présélectionne le secteur
        $selected = old('secteur_id')
            ?? $secteurs->firstWhere('slug', $request->query('secteur'))?->id;

        return view('devis', compact('secteurs', 'selected'));
    }

    public function store(Request $request)
    {
        // Anti-spam : champ "piège" que seuls les robots remplissent
        if ($request->filled('website')) {
            return redirect()->route('devis');
        }

        $data = $request->validate([
            'nom'        => ['required', 'string', 'max:120'],
            'entreprise' => ['nullable', 'string', 'max:150'],
            'email'      => ['required', 'email', 'max:150'],
            'telephone'  => ['required', 'string', 'min:8', 'max:30', 'regex:/^[0-9+\s().-]+$/'],
            'secteur_id' => ['nullable', 'exists:secteurs,id'],
            'service'    => ['required', 'in:inbound,outbound,les-deux,autre'],
            'volume'     => ['nullable', 'in:moins-500,500-2000,2000-5000,plus-5000'],
            'message'    => ['nullable', 'string', 'max:2000'],
            'consent'    => ['accepted'],
        ], [
            'required'         => 'Ce champ est obligatoire.',
            'email'            => 'Veuillez saisir une adresse email valide.',
            'telephone.regex'  => 'Numéro de téléphone invalide.',
            'telephone.min'    => 'Numéro de téléphone trop court.',
            'max'              => 'Ce champ est trop long.',
            'consent.accepted' => 'Veuillez accepter d’être recontacté.',
            'in'               => 'Choix invalide.',
        ]);

        unset($data['consent']);

        $demande = DemandeDevis::create($data + ['ip' => $request->ip()]);

// Envoi du mail : si ça échoue, la demande reste enregistrée et le client voit quand même le succès
try {
    Mail::to(config('mail.devis_receiver', env('DEVIS_RECEIVER')))
        ->send(new NouvelleDemandeDevis($demande->load('secteur')));
} catch (\Throwable $e) {
    Log::error('Envoi mail devis échoué : ' . $e->getMessage());
}

        return redirect()
            ->to(route('devis') . '#formulaire')
            ->with('success', 'Merci ! Votre demande a bien été envoyée. Notre équipe vous répond sous 24h.');
    }
}
