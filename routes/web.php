<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PlatinumController;
use App\Http\Controllers\WeeklyController;
use App\Http\Controllers\DraftController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\platinumTemplateController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\RegisterController;



Route::get('/', function () {
    return view('welcome');
});


//Route module 1

Route::get('/PlatinumPage', [PlatinumController::class, 'platinumPage']);
Route::get('/Login', [LoginController::class, 'Login']);
Route::post('/Login', [LoginController::class, 'Login']);
Route::get('/ForgotPassword', [LoginController::class, 'ForgotPassword']);
Route::get('/StaffPage', [StaffController::class, 'StaffPage']);
Route::get('/MentorPage', [MentorController::class, 'MentorPage']);
Route::get('/Registration', [RegisterController::class, 'registerForm'])->name('register');
Route::post('/Registration', [RegisterController::class, 'registerPost'])->name('registerPost');



//Route Publication
Route::resource('publication',PublicationController::class ); /* call controller*/
Route::get('/publicationManager', [PublicationController::class , 'PublicationManager'])->name('publication.publicationManager');
Route::get('/publicationReport', [PublicationController::class , 'ReportViewer'])->name('publication.publicationReport');
Route::get('/publicationViewer', [PublicationController::class , 'PublicationViewer'])->name('publication.publicationViewer');
Route::get('/publication/{id}/edit', [PublicationController::class, 'edit'])->name('publication.edit');




//CRMP

//Route Progress Monitoring weekly focus
Route::resource('WeeklyFocus', WeeklyController::class);
Route::get('/WeeklyAdd', [WeeklyControllerr::class , 'create']);
Route::get('/WeeklyViewer', [WeeklyController::class , 'viewer']);

//Route Progress Monitoring draft thesis
Route::resource('DraftThesis', DraftController::class);
Route::get('/DraftNewTitle', [DraftController::class , 'createThesis']);
Route::get('/DraftWork', [DraftController::class , 'showDratfList']);
Route::get('/DraftViewer', [DraftController::class , 'DraftViewer']);
Route::get('/DraftWorkViewer', [DraftController::class , 'DraftWorkViewer']);
Route::get('/test', [PublicationController::class , 'create']);

Route::get('/temp', [platinumTemplateController::class , 'Template']);