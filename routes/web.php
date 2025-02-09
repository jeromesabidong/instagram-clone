<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->controller(GuestController::class)->group(function() {

    Route::get('/', 'index');
    Route::get('/register', 'create');
    Route::post('/register', 'store');
    Route::get('/login', 'login')->name('login');

});
