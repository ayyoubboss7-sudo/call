<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/secteurs', [SecteurController::class, 'index'])->name('secteurs.index');
Route::get('/secteurs/{secteur}', [SecteurController::class, 'show'])->name('secteurs.show');
Route::get('/services', function () {
    return view('services.services');
})->name('services');

Route::get('/services/{slug}', [ServiceController::class, 'show'])
    ->name('services.show');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');;
Route::get('/devis', [DevisController::class, 'create'])->name('devis');
Route::post('/devis', [DevisController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('devis.store');

