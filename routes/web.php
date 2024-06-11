<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/log', [ LoginController::class, 'log']);

Route::get('/profile', function () {
    return view('user.profile');
});
