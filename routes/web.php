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






/* STUDENTS*/
Route::get('/student', 'StudentController@index');




/* COMPANIES*/
Route::get('/company', 'CompanyController@index');
Route::get('/company/create', 'CompanyController@getCompanyData');




/* INTERNSHIPS*/
Route::get('/internship', 'InternshipController@index');
Route::get('/internship/create', 'InternshipController@getInternshipData');
