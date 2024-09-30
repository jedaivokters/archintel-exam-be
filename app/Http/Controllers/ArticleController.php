<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $articlesQ = Article::with(['writer', 'editor', 'company']);

        if ($request->has('status')) {
            $articlesQ->where('status', $request->get('status'));
        }

        $articlesRes = $articlesQ->get();

        return response()->json($articlesRes);
    }

    public function store(ArticleRequest $request): JsonResponse
    {
        $article = Article::create($request->validated());
        return response()->json($article, 201);
    }

    public function show(Article $article): JsonResponse
    {
        return response()->json($article->load(['writer', 'editor', 'company']));
    }

    public function update(ArticleRequest $request, Article $article): JsonResponse
    {
        $article->update($request->validated());
        return response()->json($article);
    }

    public function destroy(Article $article): JsonResponse
    {
        $article->delete();
        return response()->json(null, 204);
    }
}
