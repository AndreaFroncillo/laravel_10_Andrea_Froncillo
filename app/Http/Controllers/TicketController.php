<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public $tickets =[
        ['id'=>1, 'settore'=>232, 'posto'=>50, 'img'=>'/media/settori.png'],
        ['id'=>2, 'settore'=>272, 'posto'=>39, 'img'=>'/media/settori.png'],
        ['id'=>3, 'settore'=>167, 'posto'=>45, 'img'=>'/media/settori.png'],
        ['id'=>4, 'settore'=>246, 'posto'=>67, 'img'=>'/media/settori.png'],
        ['id'=>5, 'settore'=>144, 'posto'=>44, 'img'=>'/media/settori.png']
    ];

    public function ticketList(){
        
        return view('ticket.tickets', ['tickets'=>$this->tickets]);
    }

    public function ticketDetail($id){
        foreach ($this->tickets as $ticket) {
            if ($id == $ticket['id']) {
                return view('ticket.ticket-detail', ['ticket'=>$ticket]);
            };
        }
    }
}

