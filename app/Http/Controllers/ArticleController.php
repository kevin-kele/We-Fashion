<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(5);
        return view('product.index',[
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ArticleRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        
        // $validated = $request->validated(); 


         Article::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' =>$request->input('price'),
            'size' =>$request->input('size'),
            'availabilty' =>$request->input('availabilty'),
            'reference' =>$request->input('reference'),
            
        ]);
      return  redirect()->route('product.index')->with('success',"l'article à bien été sauvegarder");
    }
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('product.edit',[
            'article'=>$article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Article $article)
    {
        $article->name = $request->input('name');
        $article->description = $request->input('description');
        $article->price = $request->input('price');
        $article->size = $request->input('size');
        $article->availabilty = $request->input('availabilty');
        $article->reference = $request->input('reference');
        $article->save();

        return  redirect()->route('product.index')->with('success',"l'article à bien été modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Article $article)
    {
        $article->delete();

        return redirect()->route('product.index')->with('success',"l'article à bien été suprimer");
    }
}
