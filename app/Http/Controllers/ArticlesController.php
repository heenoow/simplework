<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }
    public function show($id)
    {
        $article = Article::where('id', '=', $id)->first();

        return view('articles.show', ['article' => $article]);
    }


    public function create()

    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $article = array('title' => $request->title, 'slug' => $request->slug, 'body' => $request->body);
        Article::create($article);
        return redirect()->route('articles');
    }
}
