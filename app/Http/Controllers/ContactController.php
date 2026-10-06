<?php
// app/Http/Controllers/ContactController.php



namespace App\Http\Controllers;

use App\Mail\NouveauMessageContact;
use App\Models\MessageContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Anti-spam : champ piège que seuls les robots remplissent
        if ($request->filled('website')) {
            return redirect()->route('contact');
        }

        $data = $request->validate([
            'nom'       => ['required', 'string', 'max:120'],
            'email'     => ['required', 'email', 'max:150'],
            'telephone' => ['nullable', 'string', 'min:8', 'max:30', 'regex:/^[0-9+\s().-]+$/'],
            'societe'   => ['nullable', 'string', 'max:150'],
            'service'   => ['nullable', 'in:inbound,outbound,teleprospection,service-client,leads,autre'],
            'message'   => ['required', 'string', 'min:10', 'max:3000'],
        ], [
            'required'        => 'Ce champ est obligatoire.',
            'email'           => 'Veuillez saisir une adresse email valide.',
            'telephone.regex' => 'Numéro de téléphone invalide.',
            'telephone.min'   => 'Numéro de téléphone trop court.',
            'message.min'     => 'Votre message est un peu court (10 caractères minimum).',
            'max'             => 'Ce champ est trop long.',
            'in'              => 'Choix invalide.',
        ]);

$contact = \App\Models\MessageContact::create($data + ['ip' => $request->ip()]);
        // Si l'envoi échoue, le message reste enregistré et le client voit quand même le succès
        try {
            Mail::to(config('mail.devis_receiver', env('DEVIS_RECEIVER')))
                ->send(new NouveauMessageContact($contact));
        } catch (\Throwable $e) {
            Log::error('Envoi mail contact échoué : ' . $e->getMessage());
        }

        return redirect()
            ->to(route('contact') . '#formulaire')
            ->with('success', 'Merci ! Votre message a bien été envoyé. Nous vous répondons très bientôt.');
    }
}