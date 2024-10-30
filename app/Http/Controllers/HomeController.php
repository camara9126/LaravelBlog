<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Categorie;
use App\Models\Pubs;
use App\Models\commentaire;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie= Categorie::all();
        $articles= article::all();
        $youtube= Pubs::all();
        $comment= commentaire::all();
        $recentArticles = Article::orderBy('click_count', 'desc')->take(5)->get(); // Limite à 5 articles récents
        // dd($recentArticles);
        // dd($articles);
    return view('blog.home', compact('articles','youtube','categorie','comment','recentArticles'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
   
    
}
