<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicationController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/login',LoginController::class);

Route::resource('publications',PublicationController::class);