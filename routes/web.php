<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Login',LoginController::class);

Route::resource('publication',PublicationController::class);