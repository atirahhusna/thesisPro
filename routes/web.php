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
Route::get('/PlatinumPage', [PlatinumController::class, 'platinumPage'])->name('PlatinumPage');
Route::get('/Login', [AccountController::class, 'Login'])->name('Login');
Route::post('/Login', [AccountController::class, 'LoginPost'])->name('LoginPost');
Route::get('/ForgotPassword', [AccountController::class, 'ForgotPassword']);
Route::get('/StaffPage', [StaffController::class, 'StaffPage'])->name('StaffPage');
Route::get('/MentorPage', [MentorController::class, 'MentorPage'])->name('MentorPage');
Route::get('/logout', [AccountController::class, 'logout'])->name('logout');
//registration
Route::get('/Registration', [AccountController::class, 'registerForm'])->name('registerForm');
Route::post('/Registration', [AccountController::class, 'registerPost'])->name('registerPost');
Route::get('/staffRegister', [AccountController::class, 'user'])->name('user');
Route::post('/staffRegister', [AccountController::class, 'userPost'])->name('userPost');
Route::get('/RegisterList', [AccountController::class, 'RegisterList'])->name('RegisterList');
Route::get('/RegisterList/{id}/edit', [AccountController::class, 'edit'])->name('edit');
Route::delete('/RegisterList/{id}', [AccountController::class, 'destroy'])->name('destroy');
Route::put('/RegisterList/{id}', [AccountController::class, 'update']);
Route::get('/mentorRegister', [AccountController::class, 'mentorForm'])->name('mentorForm');
Route::post('/mentorRegister', [AccountController::class, 'mentorPost'])->name('mentorPost');
//profile staff
Route::get('/Staff.PlatinumList', [StaffController::class, 'profileView'])->name('profileView');
Route::get('/Staff.PlatinumList/{id}/show', [StaffController::class, 'show'])->name('show');
Route::get('/Staff.PlatinumList/search', [StaffController::class, 'profileView'])->name('profileView');
Route::get('/Staff.MentorProfile', [StaffController::class, 'mentorProfile'])->name('mentorProfile');
//profile mentor
Route::get('/Mentor.PlatinumList', [MentorController::class, 'profileView'])->name('profileView');
Route::get('/Mentor.PlatinumList/{id}/show', [MentorController::class, 'show'])->name('show');
Route::get('/Mentor.PlatinumList/search', [MentorController::class, 'profileView'])->name('profileView');
Route::get('/MentorRegisterList', [MentorController::class, 'registerList'])->name('MentorRegisterList');
Route::get('/Mentor.StaffList', [MentorController::class, 'staffList'])->name('staffList');
Route::get('/Mentor.StaffList/{id}/show', [MentorController::class, 'staffProfile'])->name('staffProfile');
Route::get('/Mentor.StaffList/search', [MentorController::class, 'staffList'])->name('staffList');
//edit and update profile platinum
Route::get('/platinumProfile', [PlatinumController::class, 'show'])->name('platinumProfile');
Route::put('/platinumProfile/update', [PlatinumController::class, 'update'])->name('update');
Route::get('/platinumProfile/{id}/edit', [PlatinumController::class, 'edit'])->name('PlatEditProfile');
Route::get('/Platinum.PlatinumList', [PlatinumController::class, 'profileView'])->name('platinumList');
Route::get('/Platinum.PlatinumList/{id}/show', [PlatinumController::class, 'showPlatinum'])->name('ViewPlatinum');
Route::get('/Platinum.PlatinumList/search', [PlatinumController::class, 'profileView'])->name('platinumList');
Route::get('/platinum.MentorProfile', [PlatinumController::class, 'mentorProfile'])->name('platinumViewMentor');
//edit and update staff profile
Route::get('/StaffProfile', [StaffController::class, 'showProfile'])->name('StaffProfile');
Route::put('/StaffProfile/update', [StaffController::class, 'update'])->name('StaffUpdateProfile');
Route::get('/StaffProfile/{id}/edit', [StaffController::class, 'edit'])->name('StaffEditProfile');
//edit and update mentor profile
Route::get('/MentorProfile', [MentorController::class, 'showProfile'])->name('MentorProfile');
Route::put('/MentorProfile/update', [MentorController::class, 'update'])->name('MentorUpdateProfile');
Route::get('/MentorProfile/{id}/edit', [MentorController::class, 'edit'])->name('MentorEditProfile');



//Route Publication module 3
Route::resource('publication',PublicationController::class ); /* call controller*/
Route::get('/publicationManager', [PublicationController::class , 'PublicationManager'])->name('publication.publicationManager');
Route::get('/publicationReport', [PublicationController::class , 'ReportViewer'])->name('publication.publicationReport'); /*route name*/
Route::get('/publicationViewer', [PublicationController::class , 'PublicationViewer'])->name('publication.publicationViewer');
Route::get('/publication/{id}/edit', [PublicationController::class, 'edit'])->name('publication.edit');
Route::get('/publication/{id}/show', [PublicationController::class, 'show'])->name('publication.show');
Route::post('/generatePdf', [PublicationController::class, 'generatePublicationPdf']);




//Assign Platinum As CRMP
Route::get('/assignPlatinum', [StaffController::class, 'assignPlatinum'])->name('assignPlatinum');
Route::get('/storePlatinum/{id}', [StaffController::class, 'storePlatinum'])->name('storePlatinum');
Route::post('/storePlatinum/{id}', [StaffController::class, 'storePlatinum'])->name('storePlatinum');
//Assign Platinum As CRMP
Route::get('/assignCRMP', [StaffController::class, 'assignCRMP'])->name('assignCRMP');
Route::post('/storeCRMP', [StaffController::class, 'storeCRMP'])->name('storeCRMP');

//view Platinum Profile
Route::get('/CRMPViewPlatinum', [PlatinumController::class, 'ListPlatinum'])->name('ListPlatinum');

//Route Progress Monitoring weekly focus
Route::resource('WeeklyFocus', WeeklyController::class);
Route::get('/WeeklyFocusManager', [WeeklyController::class, 'index'])->name('WeeklyFocus.index');
Route::get('/WeeklyAdd', [WeeklyController::class , 'addBlock']);
Route::get('/WeeklyViewerMentor', [WeeklyController::class , 'viewerMentor'])->name('WeeklyFocus.viewerMentor');
Route::get('/WeeklyViewerCRMP', [WeeklyController::class , 'viewerCRMP'])->name('WeeklyFocus.viewerCRMP');
Route::get('/WeeklyAddItem', [WeeklyController::class , 'addItem']);
Route::post('WeeklyFocus/storeItem', [WeeklyController::class, 'storeItem']);
Route::post('WeeklyFocus/showWeeklyFocus', [WeeklyController::class, 'showWeeklyFocus']);
Route::get('WeeklyFocus/{id}/viewP', [WeeklyController::class, 'viewP'])->name('WeeklyFocus.viewP');
Route::get('WeeklyFocus/{id}/edit', [WeeklyController::class, 'edit'])->name('WeeklyFocus.edit');
Route::put('WeeklyFocus/{id}', [WeeklyController::class, 'update'])->name('WeeklyFocus.update');
//Route Progress Monitoring draft thesis
Route::resource('DraftThesis', DraftController::class);
Route::get('/DraftThesisManager', [DraftController::class, 'index'])->name('DraftThesis.index');
Route::get('/DraftNewTitle', [DraftController::class , 'createThesis']);
Route::get('/DraftWork', [DraftController::class , 'showDratfList']);
Route::get('/DraftViewerMentor', [DraftController::class , 'DraftViewerMentor'])->name('DraftThesis.DraftViewerMentor');
Route::get('/DraftViewerCRMP', [DraftController::class , 'DraftViewerCRMP'])->name('DraftThesis.DraftViewerCRMP');
Route::get('/DraftWorkViewer', [DraftController::class , 'DraftWorkViewer']);
Route::get('/test', [PublicationController::class , 'create']);

Route::get('/temp', [platinumTemplateController::class , 'Template']);


//RouteExpert Domain module 2
Route::get('ViewExpert', [ExpertController::class, 'index'])->name('ViewExpert');
Route::get('AddExpert', [ExpertController::class, 'AddExpert']);
Route::post('SaveExpert', [ExpertController::class, 'SaveExpert']);
Route::get('EditExpert/{e_ID}', [ExpertController::class, 'EditExpert']);
Route::post('UpdateExpert', [ExpertController::class, 'UpdateExpert']);
Route::get('DeleteExpert/{e_ID}', [ExpertController::class, 'DeleteExpert']);
Route::get('ExpertDetail/{e_ID}', [ExpertController::class, 'ExpertDetail']);
Route::get('SearchExpert', [ExpertController::class, 'SearchExpert'])->name('SearchExpert');
Route::get('List', [ExpertController::class, 'List'])->name('List');
Route::get('View/{e_ID}', [ExpertController::class, 'View']);
Route::get('Search', [ExpertController::class, 'Search'])->name('Search');
Route::get('Export', [ExpertController::class, 'Export'])->name('Export');
