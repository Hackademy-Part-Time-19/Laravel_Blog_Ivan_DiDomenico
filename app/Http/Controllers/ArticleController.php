<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articoli = [
        ['titolo'=>'Articolo 1','descrizione'=>'descrizione articolo','categoria'=>'Sport'],
        ['titolo'=>'Articolo 2','descrizione'=>'descrizione articolo','categoria'=>'Cronaca'],
        ['titolo'=>'Articolo 3','descrizione'=>'descrizione articolo','categoria'=>'Politica'],
        ['titolo'=>'Articolo 4','descrizione'=>'descrizione articolo','categoria'=>'Meteo']
    ];

    public function index(){
        
        $titolo = 'MY BLOG';

        return view('pages.articoli',['articoli' => $this->articoli],['titolo'=>$titolo]);
        
    }

    public function show($id){
        $titolo = 'MY BLOG';

    return view('pages.dettaglio',['articoli'=>$this->articoli[$id]],['titolo'=>$titolo]);
    }
}
