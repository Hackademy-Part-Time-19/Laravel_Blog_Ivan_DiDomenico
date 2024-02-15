<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MangaController extends Controller
{
    public function index(){
        $response = Http::get('https://api.jikan.moe/v4/genres/manga')->json();
        $generi = $response['data'];
        return view('generiManga',['dati'=>$generi]);
    }

    public function mangaByGenre($id){
        $uri = 'https://api.jikan.moe/v4/manga?genres='.$id;
        $manga = Http::get($uri)->json()['data'];
        //dd($manga);
        return view('genereManga',compact('manga'));
    }
}
