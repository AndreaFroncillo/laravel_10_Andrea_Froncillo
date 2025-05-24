<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TicketController;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/squadra', [PublicController::class, 'team'])->name('squadra');

Route::get('/squadra/detail/{name}', [PublicController::class, 'squadraDetail'])->name('squadraDetail');

Route::get('/contatti', function () {
    return view('contatti');

})->name('contacts');

Route::get('/tickets', [TicketController::class, 'ticketList'])->name('ticket.list');

Route::get('/ticket/detail/{id}', [TicketController::class, 'ticketDetail'])->name('ticket.detail');

