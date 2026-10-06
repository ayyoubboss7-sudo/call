<?php
// app/Mail/NouveauMessageContact.php

namespace App\Mail;

use App\Models\MessageContact;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class NouveauMessageContact extends Mailable
{   
    public function __construct(public MessageContact $contact)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            // "Répondre" dans ta boîte mail écrit directement au client
            replyTo: [new Address($this->contact->email, $this->contact->nom)],
            subject: 'Nouveau message de contact - ' . $this->contact->nom,
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.contact');
    }
}