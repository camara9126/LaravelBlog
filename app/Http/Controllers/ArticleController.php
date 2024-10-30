<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Categorie;
use App\Models\commentaire;
use App\Models\Pubs;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = Categorie::all();
        // $articles = $category->articles;

        $article= article::orderBy('created_at', 'DESC')->get();
        return view('article.index',compact('article','categorie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie = Categorie::all();
        return view('article.create',compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'title' => 'required|unique:articles',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',
            'auteur' => 'required'
            ]);

            $filename = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $filename, 'public');
            $validatedData['image'] = '/storage/' . $path;
            
            $validatedData['content'] = $request->input('content');

            article::create($validatedData);
            // dd($validatedData);
            return redirect()->route('article.index')->with('success', 'article ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        $categorie = Categorie::all();
        // dd($article);
        return view('article.edit', compact('article','categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, article $article)
    {
        $validatedData= $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',
            'auteur' => 'required'
            ]);

            $filename = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $filename, 'public');
            $validatedData['image'] = '/storage/' . $path;

            $validatedData['content'] = $request->input('content');

            $article->update($validatedData);
            // dd($validatedData);
            return redirect()->route('article.index')->with('success', 'article modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('success', 'article supprimé avec succès');
    }

    /**
     * activer un article 
     */  
    public function activate(article $article)
    {
        $article->update(['status' => true]);
        return redirect()->back()->with('success', 'Article desactivé avec succès.');
    }
    /**
     * desactiver un article
     */
    public function deactivate(article $article)
    {
        $article->update(['status' => false]);
        return redirect()->back()->with('success', 'Article activé avec succès.');
    }
    
    // fonction view article pour l'user
    public function view(article $article)
    {
        $article->increment('click_count');
        $recentArticles = Article::orderBy('click_count', 'desc')->take(5)->get(); // Limite à 5 articles récents
        // dd($recentArticles);
        $comment= commentaire::all();
        $youtube= Pubs::all();
        $categorie = Categorie::all();
        return view('blog.view', compact('article','categorie','youtube','comment','recentArticles'));
    }

   
}

