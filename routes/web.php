<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\SecteurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/secteurs', [SecteurController::class, 'index'])->name('secteurs.index');
Route::get('/secteurs/{secteur}', [SecteurController::class, 'show'])->name('secteurs.show');
Route::view('/services', 'services')->name('services');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
