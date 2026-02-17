<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjecteController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index_clients',[ClientController::class,'index'])->name('clients.index');
Route::get('/create_clients',[ClientController::class,'create'])->name('clients.create');
Route::post('/create_clients',[ClientController::class,'store'])->name('clients.store');

Route::get('/index_projectes',[ProjecteController::class,'index'])->name('projectes.index');
Route::get('/create_projectes',[ProjecteController::class,'create'])->name('projectes.create');
Route::post('/create_projectes',[ProjecteController::class,'store'])->name('projectes.store');
Route::get('/show_projectes/{idProjecte}',[ProjecteController::class,'show'])->name('projectes.show');
Route::get('/edit_projectes/{idProjecte}',[ProjecteController::class,'edit'])->name('projectes.edit');
Route::post('/update_projectes/{idProjecte}',[ProjecteController::class,'update'])->name('projectes.update');
Route::get('/edit_projectes/{idProjecte}/estat',[ProjecteController::class,'canviarEstat'])->name('projectes.editEstat');
Route::post('/edit_projectes/{idProjecte}/updateestat',[ProjecteController::class,'updateEstat'])->name('projectes.updateEstat');

Route::get('/index_tickets',[TicketsController::class,'index'])->name('tickets.index');
Route::get('/create_tickets',[TicketsController::class,'create'])->name('tickets.create');
Route::post('/create_tickets',[TicketsController::class,'store'])->name('tickets.store');
Route::get('/show_tickets/{idTickets}',[TicketsController::class,'show'])->name('tickets.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
