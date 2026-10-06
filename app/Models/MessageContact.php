<?php

// app/Models/MessageContact.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageContact extends Model
{
    protected $fillable = [
        'nom', 'email', 'telephone', 'societe',
        'service', 'message', 'lu', 'ip',
    ];
}
