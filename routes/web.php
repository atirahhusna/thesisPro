<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PlatinumController;
use App\Http\Controllers\WeeklyFocusController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\platinumTemplateController;


Route::get('/', function () {
    return view('welcome');
});


//Route module 1

Route::get('/PlatinumPage', [PlatinumController::class, 'platinumPage']);
Route::get('/Login', [LoginController::class, 'Login']);
Route::get('/ForgotPassword', [LoginController::class, 'ForgotPassword']);
Route::get('/StaffPage', [StaffController::class, 'StaffPage']);


//Route Publication
Route::get('/publicationManager', [PublicationController::class , 'index']);
Route::get('/publicationReport', [PublicationController::class , 'ReportViewer']);

//Route Progress Monitoring
Route::get('/WeeklyFocus', [WeeklyFocusController::class , 'weeklyPage']);
Route::get('/test', [PublicationController::class , 'create']);

Route::get('/temp', [platinumTemplateController::class , 'Template']);