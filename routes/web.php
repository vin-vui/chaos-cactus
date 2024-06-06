<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/debug', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/Game', [HomeController::class, 'game'])->name('game.index');

Route::get('/Presse', [HomeController::class, 'presse'])->name('presse.index');

Route::get('/Contact', [HomeController::class, 'contact'])->name('contact.index');

Route::get('/admin2', [HomeController::class, 'admin2'])->name('admin2.index');