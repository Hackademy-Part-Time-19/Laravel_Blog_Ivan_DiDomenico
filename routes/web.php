<?php

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

Route::get('/', function () {

    $titolo = 'TITOLO_BLOG';

    return view('homepage',['titolo'=>$titolo]);
})->name('home');

Route::get('/articoli', function () {

    $articoli = [
        ['titolo'=>'Articolo 1','descrizione'=>'descrizione articolo','categoria'=>'Sport'],
        ['titolo'=>'Articolo 2','descrizione'=>'descrizione articolo','categoria'=>'Cronaca'],
        ['titolo'=>'Articolo 3','descrizione'=>'descrizione articolo','categoria'=>'Politica'],
        ['titolo'=>'Articolo 4','descrizione'=>'descrizione articolo','categoria'=>'Meteo']
    ];

    return view('pages.articoli',['articoli' => $articoli]);
})->name('articoli');


Route::get('articoli/dettaglio/{id}', function($id){

    $articoli = [
        ['titolo'=>'Articolo 1','descrizione'=>'descrizione articolo','categoria'=>'Sport'],
        ['titolo'=>'Articolo 2','descrizione'=>'descrizione articolo','categoria'=>'Cronaca'],
        ['titolo'=>'Articolo 3','descrizione'=>'descrizione articolo','categoria'=>'Politica'],
        ['titolo'=>'Articolo 4','descrizione'=>'descrizione articolo','categoria'=>'Meteo']
    ];

    return view('pages.dettaglio',['articoli'=>$articoli[$id]]);
})->name('dettaglio');;


Route::get('/chi-sono', function () {
    return view('pages.ChiSono');
})->name('contatti');

