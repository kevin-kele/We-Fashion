<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $articles = Article::paginate(4);
        // dd($articles);
        return view('home',[
            'articles' =>$articles,
        ]);
    }

    public function show($slug)
    {
        // dd($article);
        $article = Article::where('slug',$slug)->firstOrFail();
        return view('product',[
            'article' =>$article
        ]);
    }
}
