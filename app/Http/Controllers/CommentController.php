<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function create(){
        return view('commenti');
    }

    public function store(CommentRequest $request){
        $commento = Comment::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'date' => $request->date,
            'comment' => $request->comment,
            'img' => $request->file('img')->store('img')
        ]);

        return redirect()->route('squadra')->with('successMessage', 'Hai correttamente inserito il tuo messaggio');

    }
}
