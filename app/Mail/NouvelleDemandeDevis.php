<?php
// app/Mail/NouvelleDemandeDevis.php

namespace App\Mail;

use App\Models\DemandeDevis;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class NouvelleDemandeDevis extends Mailable
{
    public function __construct(public DemandeDevis $demande)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            // Reply-To = email du client : tu cliques "Répondre" et ça lui écrit direct
            replyTo: [new Address($this->demande->email, $this->demande->nom)],
            subject: 'Nouvelle demande de devis - ' . $this->demande->nom
                . ($this->demande->entreprise ? ' (' . $this->demande->entreprise . ')' : ''),
        );
    }

    public function content(): Content
    {
        return new Content(markdown: 'emails.devis');
    }
}