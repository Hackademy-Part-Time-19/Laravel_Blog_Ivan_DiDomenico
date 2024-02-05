<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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


