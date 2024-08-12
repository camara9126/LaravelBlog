<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie= Categorie::orderBy('created_at', 'DESC')->get();
        return view('categorie.index', compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'nom' => 'required',
            'description' => 'required',
            ]);

            Categorie::create($validatedData);
            // dd($validatedData);
            return redirect()->route('categorie.index')->with('success', 'categorie ajouté avec succès !');
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
    public function edit($categorie)
    {
        $categorie= Categorie::findOrFail($categorie);
        
        return view('categorie.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $categorie)
    {
        $categorie= Categorie::findOrFail($categorie);
        
        $validatedData= $request->validate([
            'nom' => 'required',
            'description' => 'required',
            ]);

            $categorie->update($validatedData);
            return redirect()->route('categorie.index')->with('success', 'categorie modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $categorie)
    {
        $categorie= Categorie::findOrFail($categorie);

        $categorie->delete();
        return redirect()->route('categorie.index')->with('success', 'categorie supprimé avec succès');
    }
}
