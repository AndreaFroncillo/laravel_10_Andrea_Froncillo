<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        ;
        return view('squadra', ['users'=>$this->users]);
    }

    public function squadraDetail($name){
        foreach ($this->users as $user) {
            if ($name == $user['name']) {
                return view('squadra-detail', ['user'=>$user]);
            };
        };
    }
}

