<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ApplicationController;

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

/* GENERAL*/
Route::get('/', [GeneralController::class, 'index']);


/* USERS */
Route::get('/login', [GeneralController::class, 'login'])->name('login');
Route::post('/login', [GeneralController::class, 'handleLogin']);
Route::get('/register', [GeneralController::class, 'register']);
Route::post('/register', [GeneralController::class, 'handleRegister']);
Route::get('/logout', [GeneralController::class, 'logout']);
Route::post('/company/profile', [GeneralController::class, 'handleProfile'])->middleware('auth');
Route::post('/student/profile', [GeneralController::class, 'handleProfile'])->middleware('auth');


/* STUDENTS*/
Route::get('/student/profile', [StudentController::class, 'profile'])->middleware('auth');
Route::get('/student', [StudentController::class, 'index'])->middleware('auth');
Route::post('/student/create', [StudentController::class, 'create'])->middleware('auth');
Route::get('/student/{id}', [StudentController::class, 'show'])->middleware('auth');
Route::post('/student/github', [StudentController::class, 'github'])->middleware('auth');

/* COMPANIES*/
Route::get('/company/profile', [CompanyController::class, 'profile'])->middleware('auth');
Route::get('/company', [CompanyController::class, 'index'])->middleware('auth');
Route::post('/company/create', [CompanyController::class, 'create'])->middleware('auth');
Route::post('/company/match', [CompanyController::class, 'match'])->middleware('auth');
Route::get('/company/{id}', [CompanyController::class, 'show'])->middleware('auth');


/* INTERNSHIPS*/
Route::get('/internship', [InternshipController::class, 'index'])->middleware('auth');
Route::get('/internship/create', [InternshipController::class, 'create'])->middleware('auth');
Route::post('/internship/create', [InternshipController::class, 'store'])->middleware('auth');
Route::get('/internship/{id}', [InternshipController::class, 'show'])->middleware('auth');


/* APPLICATIONS*/
Route::get('/application', [ApplicationController::class, 'index'])->middleware('auth');
Route::get('/application/create/{id}', [ApplicationController::class, 'create'])->middleware('auth');
Route::post('/application/create/{id}', [ApplicationController::class, 'handelCreate'])->middleware('auth');
Route::get('/application/{id}', [ApplicationController::class, 'show'])->middleware('auth');
Route::post('/application/{id}', [ApplicationController::class, 'handleLabel'])->middleware('auth');
Route::post('/application/comment/{id}', [ApplicationController::class, 'comment'])->middleware('auth');

//nog toe te voegen: tags voor filtering
//nog toe te voegen: status application


//nog toe te voegen: update internship
//nog toe te voegen: delete internship

//Dribbble portfolio routes
//Afstand API routes

//Zoekroutes

Route::get('/layouts/appli', [GeneralController::class, 'appli']);
Route::get('/layouts/detailpage', [GeneralController::class, 'detailpage']);
Route::get('/components/header', [GeneralController::class, 'header']);
Route::get('/components/navigation', [GeneralController::class, 'navigation']);
Route::get('/components/footer', [GeneralController::class, 'footer']);
Route::get('/components/pagination', [GeneralController::class,'pages']);
Route::get('/components/filterCompany', [GeneralController::class,'filterCompany']);
