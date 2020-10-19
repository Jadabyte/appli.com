<?php

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

/* GENERAL*/

Route::get('/index', 'App\Http\Controllers\GeneralController@index');
Route::get('/login', 'App\Http\Controllers\LoginController@login');
Route::get('/logout', 'App\Http\Controllers\LogoutController@logout');
Route::get('/components/header', 'App\Http\Controllers\GeneralController@header');
Route::get('/components/navigation', 'App\Http\Controllers\GeneralController@navigation');
Route::get('/components/footer', 'App\Http\Controllers\GeneralController@footer');


/* STUDENTS*/
Route::get('/registerStudent',  'App\Http\Controllers\StudentController@index');
Route::get('/student', 'App\Http\Controllers\StudentController@index');


/* COMPANIES*/
Route::get('/registerCompany',  'App\Http\Controllers\CompanyController@index');
Route::get('/company', 'App\Http\Controllers\CompanyController@index');
Route::get('/company/create', 'App\Http\Controllers\CompanyController@create');
Route::get('/company/detail', 'App\Http\Controllers\CompanyController@detail');


/* INTERNSHIPS*/
Route::get('/internship', 'App\Http\Controllers\InternshipController@index');
Route::get('/internship/detail', 'App\Http\Controllers\InternshipController@detail');
