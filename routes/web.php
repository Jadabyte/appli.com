<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\CompanyController;

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
Route::get('/login', [GeneralController::class, 'login']);
Route::post('/login', [GeneralController::class, 'handleLogin']);

Route::get('/register', [GeneralController::class, 'register']);
Route::post('/register', [GeneralController::class, 'handleRegister']);

Route::get('/logout', [GeneralController::class, 'logout']);


/* STUDENTS*/
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);
//nog toe te voegen: student update (Wannes)


/* COMPANIES*/
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/{id}', [CompanyController::class, 'show']);
Route::post('/company/create', [CompanyController::class, 'create']);

//nog toe te voegen: company update (Wannes)

Route::get('/components/showApplicationsFromStudents', [CompanyController::class, 'show']);


/* INTERNSHIPS*/
Route::get('/internship', [InternshipController::class, 'index']);
Route::get('/internship/create', [InternshipController::class, 'create']);
Route::post('/internship/create', [InternshipController::class, 'store']);
Route::get('/internship/{id}', [InternshipController::class, 'show']);

//nog toe te voegen: apply for internship
//nog toe te voegen: remove apply
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
