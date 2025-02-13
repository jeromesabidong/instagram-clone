<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->controller(GuestController::class)->group(function() {

    Route::get('/', 'index');
    Route::get('/register', 'create');
    Route::post('/register', 'store');
    Route::get('/login', 'login')->name('login');

    Route::get('test', function() {
        return new App\Mail\UserRegistration(
            App\Models\User::first()
        );
    });

});

Route::middleware('auth')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index']);


});
