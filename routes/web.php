<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('user.tickets.index', ['user' => 4]);
});


Route::resource('user.tickets',UserController::class)->only(['index']);
// Route::resource('',TicketController::class);