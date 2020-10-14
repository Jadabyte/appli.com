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

Route::get('/registerStudent',  'App\Http\Controllers\RegisterStudentController@index');

Route::get('/registerCompany',  'App\Http\Controllers\RegisterCompanyController@index');

Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/homeStudent', 'App\Http\Controllers\HomeStudentController@index');

Route::get('/homeCompany', 'App\Http\Controllers\HomeCompanyController@index');