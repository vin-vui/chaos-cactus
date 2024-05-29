<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Controller;
use App\http\Controllers\HomeController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/////////////////////////////////////////////////////

Route::get('/debug', function () {
    return view('welcome');
});


Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::get('/Game',[HomeController::class,'game'])->name('game.index');

Route::get('/Presse',[HomeController::class,'presse'])->name('presse.index');

Route::get('/Contact',[HomeController::class,'contact'])->name('contact.index');