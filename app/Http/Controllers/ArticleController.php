<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create (){
        return view('article/create');
    }
    
    public function store(ArticleRequest $request){

        $articles = Article::create(
            [
                'title'=>$request->input('title'),
                'author'=>$request->input('author'),
                'body'=>$request->input('body'),
                'img'=>$request->has('img') ? $request->file('img')->store('public') : '/img/default.png'
            ]
            );

        // dd($articles);
        return redirect()->route('homepage')->with('message', ' Il tuo articolo è stato pubblicato');
    }
    public function details($title){
        $article = Article::where('title', $title)->first();
        return view('article/detail', compact('article'));
    }

    public function update(Article $article){
        return view ('article/update', compact('article'));
    }
    public function edit(Request $request, Article $article){
        $article->title = $request->title;
        $article->author = $request->author;
        $article->body = $request->body;
        $article->save();
        return redirect(route ('homepage', compact('article')));
    }

    public function destroy(Article $article){
        $article->delete();
        return redirect(route('homepage'));
    }
}
