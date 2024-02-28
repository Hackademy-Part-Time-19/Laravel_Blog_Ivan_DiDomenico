<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index',['articoli'=>$articles]);
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        $categories=Category::all();
        return view('articles.create',compact('categories'));
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(StoreArticleRequest $request)
    { 
        $validated = $request->validated();
        
        $article = Article::create($validated);
        $article->categories()->attach($request->categories);
        $article->save();
        return redirect()->back()->with('success','Articolo inserito correttamente');
    }
    
    /**
    * Display the specified resource.
    */
    public function show(string $id)
    {
        $articles = Article::find($id);
        return view('articles.show',compact('articles'));
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(string $id)
    {
        $articles = Article::find($id); 
        $categories = Category::all();
        return view('articles.edit',compact('articles','categories'));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(StoreArticleRequest $request, string $id)
    {
        $validated = $request->validated();
        $article = Article::find($id);
        $article->categories()->detach();
        $article->categories()->attach($request->categories);
        $article->update($validated);
        
        return redirect()->back()->with('success','Articolo modificato correttamente');
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->categories()->detach();
        $article->delete();
        return redirect()->back()->with('success','Articolo eliminato correttamente');;
    }
}
