<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    
    public function index(){
        
        $titolo = 'MY BLOG';
        $articles = Article::all();
        return view('pages.articoli',['articoli' => $articles],['titolo'=>$titolo]);
        
    }
    
    public function show($id){
        $titolo = 'MY BLOG';
        $articles = Article::all();
        return view('pages.dettaglio',['articoli'=>$articles[$id]],['titolo'=>$titolo]);
    }
    
    public function create(){
        
        $titolo = 'MY BlOG';
        return view('createArticle',['titolo'=>$titolo]);
    }
    
    
    public function store(StoreArticleRequest $request){
        
        $validated = $request->validated();
        
        $article = Article::create($validated);
        
        if($request->hasFile('image')){
            
            $path = 'public/images';
            $name = $article['id'].'copertina'.'.'.$request->file('image')->extension();
            $file = $request->file('image')->storeAs($path,$name);
            $image = $path . '/' . $name;
            $article->image= $image;
            $article->save(); 
        }
        
        return redirect()->back()->with('success','Articolo inserito correttamente');
    }
}

