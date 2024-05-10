<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicationController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('login',LoginController::class);

//Route::resource('publications',PublicationController::class);

Route::get('/publications', [PublicationController::class , 'index']);
Route::get('/manager', [PublicationController::class , 'index']);
Route::get('/publicationReport', [PublicationController::class , 'ReportViewer']);