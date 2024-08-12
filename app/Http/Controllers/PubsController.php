<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pubs;

class PubsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pubs= Pubs::orderBy('created_at', 'DESC')->get();
        return view('pubs.index', compact('pubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'title' => 'required',
            'lien' => 'required',
            'contact' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

            $filename = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('pubImages', $filename, 'public');
            $validatedData['image'] = '/storage/' . $path;
            
            Pubs::create($validatedData);
            // dd($validatedData);
            return redirect()->route('pub.index')->with('success', 'publication ajouté avec succès !');

    }

    /**
     * Display the specified resource.
     */
    public function show($pubs)
    {
        $pubs = Pubs::findOrFail($pubs);
        return view('pubs.show', compact('pubs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($pubs)
    {
        $pubs = Pubs::findOrFail($pubs);
        // dd($pubs);
        return view('pubs.edit', compact('pubs'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $pubs)
    {
        $pubs = Pubs::findOrFail($pubs);

        $validatedData= $request->validate([
            'title' => 'required',
            'lien' => 'required',
            'contact' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

            $filename = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('pubImages', $filename, 'public');
            $validatedData['image'] = '/storage/' . $path;

            $pubs->update($validatedData);
            // dd($pubs);
            return redirect()->route('pub.index')->with('success', 'publication modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pubs)
    {
        $pubs = Pubs::findOrFail($pubs);

        $pubs->delete();
        return redirect()->route('pub.index')->with('success', 'publication supprimé avec succès !');
    }

    public function activate($pubs)
    {
        $pubs= Pubs::findOrFail($pubs);
        $pubs->update(['status' => true]);

        return redirect()->route('pub.index')->with('success', 'publication désactivé !');

    }

    public function deactivate($pubs)
    {
        $pubs= Pubs::findOrFail($pubs);
        $pubs->update(['status' => false]);

        return redirect()->route('pub.index')->with('success', 'publication activé !');
    }
}
