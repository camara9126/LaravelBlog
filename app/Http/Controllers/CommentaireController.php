<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{

    public function index()
    {
        $article= article::all();
        $comment= commentaire::orderBy('created_at','DESC')->get();
        return view('article.comment', compact('comment','article'));
    }
    
    public function store(Request $request, article $article)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $comment = new commentaire();
        $comment->article_id = $article->id;
        $comment->content = $request->content;
        $comment->save();

        return redirect()->back()->with('success', 'Commentaire ajouté avec success !');
    }

    public function destroy($c)
    {
        // if (auth()->id == $comment->article_id) {
            $comment= commentaire::findOrFail($c);
            $comment->delete();

            return redirect()->back()->with('success', 'Commentaire supprimée!');
        // }

        // return redirect()->back()->with('error', 'You can only delete your own comments.');
    }
}

