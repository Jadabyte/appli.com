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
Route::get('/logout', [GeneralController::class, 'logout']);
Route::get('/layouts/appli', [GeneralController::class, 'appli']);
Route::get('/components/header', [GeneralController::class, 'header']);
Route::get('/components/navigation', [GeneralController::class, 'navigation']);
Route::get('/components/footer', [GeneralController::class, 'footer']);

/* USERS */
Route::get('/register', [GeneralController::class, 'register']);
Route::post('/register', [GeneralController::class, 'handleRegister']);
Route::get('/login', [GeneralController::class, 'login']);
Route::post('/login', [GeneralController::class, 'handleLogin']);

/* STUDENTS*/
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'detail']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);

/* COMPANIES*/
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/create', [CompanyController::class, 'create']);
Route::get('/company/{id}', [CompanyController::class, 'detail']);
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/{id}', [CompanyController::class, 'show']);
Route::get('/company/create', [CompanyController::class, 'create']);
Route::get('/components/showApplicationsFromStudents', [CompanyController::class, 'show']);

/* INTERNSHIPS*/
Route::get('/internship', [InternshipController::class, 'index']);
Route::get('/internship/{id}', [InternshipController::class, 'detail']);
Route::get('/internship/{internship}', [InternshipController::class, 'show']);
Route::get('/internship/createInternship', [InternshipController::class, 'create']);
