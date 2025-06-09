<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TicketController;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/squadra', [PublicController::class, 'team'])->name('squadra');

Route::get('/squadra/detail/{name}', [PublicController::class, 'squadraDetail'])->name('squadraDetail');

Route::get('/contatti', [PublicController::class, 'contacts'])->name('contacts');

Route::get('/tickets', [TicketController::class, 'ticketList'])->name('ticket.list');

Route::get('/ticket/detail/{id}', [TicketController::class, 'ticketDetail'])->name('ticket.detail');

// Invio mail

Route::post('/contact-us', [PublicController::class, 'contactUs'])->name('contactUs')->middleware('auth');

// Comment

Route::get('/squadra/commenti', [CommentController::class, 'create'])->name('squadra.commenti')->middleware('auth');
Route::post('/commenti/aggiungi', [CommentController::class, 'store'])->name('commenti.aggiungi');




