<?php

// app/Http/Controllers/SecteurController.php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Secteur;

class SecteurController extends Controller
{
    public function index()
    {
        $secteurs = Secteur::actif()->get();

        return view('secteurs.index', compact('secteurs'));
    }

    public function show(Secteur $secteur)
    {
        abort_unless($secteur->is_active, 404);

        $autres = Secteur::actif()->where('id', '!=', $secteur->id)->take(4)->get();

        return view('secteurs.show', compact('secteur', 'autres'));
    }
}