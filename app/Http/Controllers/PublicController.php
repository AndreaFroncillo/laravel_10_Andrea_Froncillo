<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Comment;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PublicController extends Controller
{   
    public $users = [
        ['name'=> 'Beppe', 'surname'=> 'Marotta', 'role'=>'Presidente'],
        ['name'=> 'Piero', 'surname'=> 'Ausilio', 'role'=>'Direttore Sportivo'],
        ['name'=> 'Simone', 'surname'=> 'Inzaghi', 'role'=>'Allenatore'],
    ];

    public function homepage() {
        return view('welcome');
    }

    public function team() {
        $comments = Comment::all();
        
        return view('squadra', ['users'=>$this->users, 'comments'=>$comments]);
    }

    public function squadraDetail($name){
        foreach ($this->users as $user) {
            if ($name == $user['name']) {
                return view('squadra-detail', ['user'=>$user]);
            };
        };
    }

    public function contacts() {
        return view('contatti');
    
    }

    public function contactUs(Request $request){
        $user = $request->input('user');
        $email = $request->input('email');
        $message = $request->input('message');
        $userData = compact('user', 'email', 'message');
        
        try{
            Mail::to($email)->send(new ContactMail($userData));

        }catch(Exception $e){
            return redirect()->route('homepage')->with('emailError', "C'è stato un problema con l'invio della mail, per favore riprova più tardi");
        }
        return redirect(route('homepage'))->with('emailSent', 'Hai correttamente inviato una mail');
    }
}

