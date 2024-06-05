<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController;

// Middleware pour les routes nécessitant une authentification
// Middleware pour les routes nécessitant une authentification
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

// Route de débogage
// Route de débogage
Route::get('/debug', function () {
    return view('welcome');
});

// Routes principales
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/Game', [HomeController::class, 'game'])->name('game.index');
Route::get('/Presse', [HomeController::class, 'presse'])->name('presse.index');
Route::get('/Contact', [HomeController::class, 'contact'])->name('contact.index');
