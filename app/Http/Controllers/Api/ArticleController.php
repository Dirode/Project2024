<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return response()->json([
            'status' => true,
            'articles' => $articles
        ]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return response()->json([
            'status' => true,
            'article' => $article
        ]);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json([
            'status' => true,
            'article' => $article
        ]);
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return response()->json([
            'status' => true,
            'article' => $article
        ]);
    }

    public function destroy($id)
    {
        Article::find($id)->delete();
        return response()->json([
            'status' => true
        ]);
    }
}