<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        $titolo = 'MY BLOG';

        return view('homepage',['titolo'=>$titolo]);
    }

    public function chisono(){
       
    $titolo = 'MY BLOG';
    
    return view('pages.ChiSono',['titolo'=>$titolo]);
    }

}
