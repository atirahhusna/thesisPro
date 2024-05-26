<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PlatinumController;
use App\Http\Controllers\WeeklyFocusController;
use App\Http\Controllers\DraftController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\platinumTemplateController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\AccountController;



Route::get('/', function () {
    return view('welcome');
});


//Route module 1

Route::get('/PlatinumPage', [PlatinumController::class, 'platinumPage']);
Route::get('/Login', [AccountController::class, 'Login'])->name('Login');
Route::post('/Login', [AccountController::class, 'LoginPost'])->name('LoginPost');
Route::get('/ForgotPassword', [AccountController::class, 'ForgotPassword']);
Route::get('/StaffPage', [StaffController::class, 'StaffPage']);
Route::get('/MentorPage', [MentorController::class, 'MentorPage']);
Route::get('/Registration', [AccountController::class, 'registerForm'])->name('registerForm');
Route::post('/Registration', [AccountController::class, 'registerPost'])->name('registerPost');
Route::get('/userRegister', [AccountController::class, 'user'])->name('user');
Route::post('/userRegister', [AccountController::class, 'userPost'])->name('userPost');
Route::get('/PlatinumProfile', [PlatinumController::class, 'ProfileShow']);
Route::get('/RegisterList', [AccountController::class, 'RegisterList'])->name('RegisterList');
Route::get('/RegisterList/{users}/edit', [AccountController::class, 'edit'])->name('edit');
Route::delete('/RegisterList/{users}', [AccountController::class, 'destroy'])->name('destroy');


//Route Publication
Route::resource('publication',PublicationController::class ); /* call controller*/
Route::get('/publicationManager', [PublicationController::class , 'PublicationManager'])->name('publication.publicationManager');
Route::get('/publicationReport', [PublicationController::class , 'ReportViewer'])->name('publication.publicationReport');
Route::get('/publicationViewer', [PublicationController::class , 'PublicationViewer'])->name('publication.publicationViewer');
Route::get('/publication/{id}/edit', [PublicationController::class, 'edit'])->name('publication.edit');
Route::get('/publication/{id}/show', [PublicationController::class, 'show'])->name('publication.show');




//CRMP

//Route Progress Monitoring
Route::resource('WeeklyFocus', WeeklyController::class);
Route::get('/WeeklyAdd', [WeeklyControllerr::class , 'create']);

Route::resource('DraftThesis', DraftController::class);
Route::get('/DraftNewTitle', [DraftController::class , 'createThesis']);
Route::get('/test', [PublicationController::class , 'create']);

Route::get('/temp', [platinumTemplateController::class , 'Template']);