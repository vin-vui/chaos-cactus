<?php


use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\VideoController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/Game', [HomeController::class, 'game'])->name('game.index');

Route::get('/game',[HomeController::class,'game'])->name('game.index');

Route::get('/game/golfslinger',[HomeController::class,'golfslinger'])->name('golfslinger.index');

Route::get('/presse',[HomeController::class,'presse'])->name('presse.index');

Route::get('/contact',[HomeController::class,'contact'])->name('contact.index');

Route::get('/adminlogin',[HomeController::class,'admin'])->name('admin.index');

Route::get('/adminmainedit',[HomeController::class,'adminmainedit'])->name('adminmainedit.index');

Route::get('/adminmanager',[HomeController::class,'adminmanager'])->name('adminmanager.index');

Route::get('/admingamelist',[HomeController::class,'admingamelist'])->name('admingamelist.index');

Route::post('/image-upload',[HomeController::class,'upload'])->name('HomeController.upload');

Route::get('/admin2', [HomeController::class, 'admin2'])->name('admin2.index');



// ROUTES FOR VIDEO


Route::resource('dashboard/videos', VideoController::class)
->names([
    'index' => 'dashboard.videos.index',
    'create' => 'dashboard.videos.create',
    'store' => 'dashboard.videos.store',
    'show' => 'dashboard.videos.show',
    'edit' => 'dashboard.videos.edit',
    'update' => 'dashboard.videos.update',
    'destroy' => 'dashboard.videos.destroy',
]);
Route::get('/home', [WelcomeController::class, 'index'])->name('home');