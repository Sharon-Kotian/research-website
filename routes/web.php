<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/login', function () {
    //return view('login');
//});
//Route::get('/register', function () {
  //  return view('register');
//});

Route::get('/try_test', function () {
    return view('try');
});

Route::group(['prefix' => '/'], function()
{
    Route::get('login', [UserController::class, 'login_view']);
    Route::post('login', [UserController::class, 'loginAttempt']);
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('register', [UserController::class, 'register_view']);
    Route::post('register', [UserController::class, 'register']);

    Route::get('forgot',[UserController::class,'forgot']);
    Route::post('forgotPassword',[UserController::class,'forgotPassword']);
    Route::post('otpPassword/{id}',[UserController::class,'otpPassword']);
    Route::post('changePassword/{id}', [UserController::class, 'changePassword']);
    //Route::get('dashboard', [UserController::class, 'dashboard']);
});

Route::group(['prefix' => '/admin'], function()
{
    Route::get('basicSearchView', [AdminController::class, 'basicSearchView']);
    //Route::post('login', [UserController::class, 'loginAttempt']);
    
    //Route::get('dashboard', [UserController::class, 'dashboard']);
});

Route::group(['prefix' => '/user'], function()
{
    Route::get('dashboard', [UserController::class, 'dashboard']);
    Route::get('profile/{id}',[UserController::class,'getProfileEdit']);
    Route::post('editProfile/{id}',[UserController::class,'postProfileEdit']);
    

    Route::get('education', [EducationController::class, 'education_view']);
    Route::post('addEducation/{id}', [EducationController::class, 'addEducation']);
    Route::get('editEducation/{id}',[EducationController::class,'getEducationEdit']);
    Route::post('editEducation/{id}',[EducationController::class,'postEducationEdit']);
    Route::get('deleteEducation/{id}',[EducationController::class,'deleteEducation']);

    Route::get('project', [ProjectsController::class, 'project_view']);
    Route::post('addProject/{id}', [ProjectsController::class, 'addProject']);
    Route::get('editProject/{id}',[ProjectsController::class,'getProjectEdit']);
    Route::post('editProject/{id}',[ProjectsController::class,'postProjectEdit']);
    Route::get('deleteProject/{id}',[ProjectsController::class,'deleteProject']);

    Route::get('membership', [MembershipController::class, 'membership_view']);
    Route::post('addMembership/{id}', [MembershipController::class, 'addMembership']);
    Route::get('editMembership/{id}',[MembershipController::class,'getMembershipEdit']);
    Route::post('editMembership/{id}',[MembershipController::class,'postMembershipEdit']);
    Route::get('deleteMembership/{id}',[MembershipController::class,'deleteMembership']);

    Route::get('fdp', [FDPController::class, 'fdp_view']);
    Route::post('addFdp/{id}', [FDPController::class, 'addFdp']);
    Route::get('editFdp/{id}',[FDPController::class,'getFdpEdit']);
    Route::post('editFdp/{id}',[FDPController::class,'postFdpEdit']);
    Route::get('deleteFdp/{id}',[FDPController::class,'deleteFdp']);

    Route::get('paper', [PaperController::class, 'paper_view']);
    Route::post('addPaper/{id}', [PaperController::class, 'addPaper']);
    Route::get('editPaper/{id}',[PaperController::class,'getPaperEdit']);
    Route::post('editPaper/{id}',[PaperController::class,'postPaperEdit']);
    Route::get('deletePaper/{id}',[PaperController::class,'deletePaper']);

    Route::get('book', [BookController::class, 'book_view']);
    Route::post('addBook/{id}', [BookController::class, 'addBook']);
    Route::get('editBook/{id}',[BookController::class,'getBookEdit']);
    Route::post('editBook/{id}',[BookController::class,'postBookEdit']);
    Route::get('deleteBook/{id}',[BookController::class,'deleteBook']);


    Route::get('patent', [PatentController::class, 'patent_view']);
    Route::post('addPatent/{id}', [PatentController::class, 'addPatent']);
    Route::get('editPatent/{id}',[PatentController::class,'getPatentEdit']);
    Route::post('editPatent/{id}',[PatentController::class,'postPatentEdit']);
    Route::get('deletePatent/{id}',[PatentController::class,'deletePatent']);

    Route::get('consultancy', [ConsultancyController::class, 'consultancy_view']);
    Route::post('addConsultancy/{id}', [ConsultancyController::class, 'addConsultancy']);
    Route::get('editConsultancy/{id}',[ConsultancyController::class,'getConsultancyEdit']);
    Route::post('editConsultancy/{id}',[ConsultancyController::class,'postConsultancyEdit']);
    Route::get('deleteConsultancy/{id}',[ConsultancyController::class,'deleteConsultancy']);
});