<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PubsController;
use GuzzleHttp\Middleware;

// page d'accueil blog
Route::resource('/', HomeController::class);

// retourne '/' sur la route 'home'
// Route::get('/', function () {
//     return redirect()->intended(route('home.index', absolute: false));
// });


// barre de recherche 
Route::resource('/search', SearchController::class);


//page de profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//page article de admin
Route::resource('/article', ArticleController::class)->middleware(['auth', 'verified']);
Route::get('/article/{article}', [ArticleController::class, 'view'])->name('article.view');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');

// route pour les pubs
Route::group(['middleware'=>'auth','verified'],
    function () {
        Route::resource('/pub', PubsController::class);
        Route::patch('/pub/{pub}/activate', [PubsController::class, 'activate'])->name('pub.activate');
        Route::patch('/pub/{pub}/deactivate', [PubsController::class, 'deactivate'])->name('pub.deactivate');
    }
);

// route pour les categories 

        Route::resource('/categorie', CategorieController::class);


// activer/desactiver un article 
Route::patch('/article/{article}/activate', [ArticleController::class, 'activate'])->name('article.activate');
Route::patch('/article/{article}/desactivate', [ArticleController::class, 'deactivate'])->name('article.deactivate');


// route pour les commentaires 
Route::post('/article/{article}/commentaire', [CommentaireController::class, 'store']);
Route::delete('/commentaire/{commentaire}', [CommentaireController::class, 'destroy']);
Route::get('/commentaire', [CommentaireController::class, 'index'])->name('commentaire');


// route dashboard 
Route::middleware('auth')->group(function(){
    Route::resource('/dashboard', DashboardController::class);
});

require __DIR__.'/auth.php';
