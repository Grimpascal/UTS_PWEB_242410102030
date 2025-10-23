<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('login', [
        'title' => 'Login'
    ]);
});

Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
Route::get('/profil', [PageController::class, 'profil']);