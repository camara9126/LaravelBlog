<?php

namespace App\Http\Controllers;

use index;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->route('contact.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie= Categorie::all();
        return view('blog.contact', compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        
        // dd($validatedData);
        contact::create($validatedData);
        
        return redirect()->route('contact.create')->with('success', 'Message envoyé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show()
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
    public function destroy($c)
    {
        $contact= contact::findOrFail($c);
        $contact->delete();

        return redirect()->route('message',compact('contact'))->with('success', 'message supprimé avec succès');
    }
}
