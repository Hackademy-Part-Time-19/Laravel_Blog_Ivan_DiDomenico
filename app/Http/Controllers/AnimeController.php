<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function index(){
        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        $generi= $response['data'];
        return view('generiAnime',['dati'=>$generi]);
    }

    public function animeByGenre($id){
       $uri = 'https://api.jikan.moe/v4/anime?genres='. $id;
        $anime = Http::get($uri)->json()['data'];
        //dd($anime);
    return view('genereAnime',compact('anime'));
    }
}
