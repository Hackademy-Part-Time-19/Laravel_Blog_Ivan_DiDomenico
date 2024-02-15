<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PageController::class,'homepage'])->name('home');

Route::get('/chi-sono', [PageController::class,'chisono'])->name('contatti');

Route::get('/articoli', [ArticleController::class,'index'])->name('articoli');

Route::get('articoli/dettaglio/{id}', [ArticleController::class,'show'])->name('dettaglio');;

Route::post('/chi-sono/invio', [ContactController::class,'sendContact'])->name('contact.send');

Route::get('/anime-generi',[AnimeController::class,'index'])->name('generi.anime');

Route::get('/anime-genere/{id}',[AnimeController::class,'animeByGenre'])->name('genere.anime');

Route::get('/manga-generi',[MangaController::class,'index'])->name('generi.manga');

Route::get('/manga-genere/{id}',[MangaController::class,'mangaByGenre'])->name('genere.manga');

Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');

Route::post('/article/store',[ArticleController::class,'store'])->name('article.store');