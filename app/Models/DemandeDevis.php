<?php

// app/Models/DemandeDevis.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DemandeDevis extends Model
{
    protected $table = 'demandes_devis';

    protected $fillable = [
        'nom', 'entreprise', 'email', 'telephone', 'secteur_id',
        'service', 'volume', 'message', 'statut', 'ip',
    ];

    public function secteur(): BelongsTo
    {
        return $this->belongsTo(Secteur::class);
    }
}