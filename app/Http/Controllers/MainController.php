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
}
