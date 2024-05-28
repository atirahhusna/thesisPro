<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PlatinumController;
use App\Http\Controllers\WeeklyController;
use App\Http\Controllers\DraftController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\platinumTemplateController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ExpertController;

use App\Http\Controllers\PdfController;



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
//registration
Route::get('/Registration', [AccountController::class, 'registerForm'])->name('registerForm');
Route::post('/Registration', [AccountController::class, 'registerPost'])->name('registerPost');
Route::get('/userRegister', [AccountController::class, 'user'])->name('user');
Route::post('/userRegister', [AccountController::class, 'userPost'])->name('userPost');
Route::get('/RegisterList', [AccountController::class, 'RegisterList'])->name('RegisterList');
Route::get('/RegisterList/{id}/edit', [AccountController::class, 'edit'])->name('edit');
Route::delete('/RegisterList/{id}', [AccountController::class, 'destroy'])->name('destroy');
Route::put('/RegisterList/{id}', [AccountController::class, 'update']);
//profile
Route::get('/Staff.PlatinumList', [StaffController::class, 'profileView'])->name('profileView');
Route::get('/Staff.PlatinumList/{id}/show', [StaffController::class, 'show'])->name('show');
Route::get('/Staff.PlatinumList/search', [StaffController::class, 'profileView'])->name('profileView');



//Route Publication
Route::resource('publication',PublicationController::class ); /* call controller*/
Route::get('/publicationManager', [PublicationController::class , 'PublicationManager'])->name('publication.publicationManager');
Route::get('/publicationReport', [PublicationController::class , 'ReportViewer'])->name('publication.publicationReport'); /*route name*/
Route::get('/publicationViewer', [PublicationController::class , 'PublicationViewer'])->name('publication.publicationViewer');
Route::get('/publication/{id}/edit', [PublicationController::class, 'edit'])->name('publication.edit');
Route::get('/publication/{id}/show', [PublicationController::class, 'show'])->name('publication.show');
Route::post('/generatePdf', [PublicationController::class, 'generatePublicationPdf']);




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


//RouteExpert Domain
Route::get('/AddExpert', function () {return view('ExpertDomain.AddExpert');});
Route::get('/SearchExpert', function () {return view('ExpertDomain.SearchExpert');});
Route::get('/EditExpert', [ExpertController::class, 'edit'])->name('ExpertDomain.EditExpert');
Route::get('/test', function () {return view('ExpertDomain.test');});
Route::get('/SearchExpert', function () {return view('ExpertDomain.SearchExpert');})->name('search.expert');
Route::get('/AddExpert', function () {return view('ExpertDomain.AddExpert');})->name('add.expert');
Route::get('/EditExpert', function () {return view('ExpertDomain.EditExpert');})->name('edit.expert');
