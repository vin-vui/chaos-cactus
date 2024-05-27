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