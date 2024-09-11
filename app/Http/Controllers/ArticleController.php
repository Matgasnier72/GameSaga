<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();

        // On retourne les informations des utilisateurs en format JSON
        return response()->json($article);
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'titre' => 'required|string',
            'contenu' => 'required|text',
            'note_auteur' => 'required|int',
            'user_id' => 'required|int',
        ]);
        $article = Article::create($request->all());
            // On retourne les informations du nouvel utilisateur en JSON
            return response()->json([
            'status' => 'Success',
            'data' => $article,
            ]);
        
    }
    public function show(Article $article)
    {
        return response()->json($article);
    }
    public function update(Request $request)
    {
        $credentials = $request->validate([
            'titre' => 'required|string',
            'contenu' => 'required|text',
            'note_auteur' => 'required|int',
            'user_id' => 'required|int',
        ]);

        $article = Article::update($request->all());
            // On retourne les informations du nouvel utilisateur en JSON
            return response()->json([
            'status' => 'Success',
            'data' => $article,
            ]);
        
    }
    public function destroy(Article $article)
    {
        $article->delete();

        // On retourne la réponse au format JSON
        return response()->json([
            'status' => "Suppression effectuée avec succès !"
        ]);
    }
}
