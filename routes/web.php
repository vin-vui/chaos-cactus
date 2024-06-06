<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/debug', function () {
    return view('welcome');
});

// Routes principales
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/Game', [HomeController::class, 'game'])->name('game.index');
Route::get('/Presse', [HomeController::class, 'presse'])->name('presse.index');
Route::get('/Contact', [HomeController::class, 'contact'])->name('contact.index');

Route::get('/adminlogin',[HomeController::class,'admin'])->name('admin.index');

Route::get('/adminmainedit',[HomeController::class,'adminmainedit'])->name('adminmainedit.index');

Route::get('/adminmanager',[HomeController::class,'adminmanager'])->name('adminmanager.index');

Route::get('/admingamelist',[HomeController::class,'admingamelist'])->name('admingamelist.index');

Route::post('/image-upload',[HomeController::class,'upload'])->name('HomeController.upload');
