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

Route::get('/internship', function() {
    $data = [
        "title" => "Capgemini is searching for student UX/UI",
        "informations" => {"We are looking for a talented UX Designer to join our studio in Brussels.", "At Idean we believe and know that great UX can change the world.", "It all starts with awesome people and challenging projects and crafting a work environment that supports thoughtful work and growth."}
    ];
    return view('internship', $data);
});

Route::get('/studentdetail', function() {
    $data = [
        "title" => "Filter thru the internships using these filters below",
        "filters" => {"category", "employees", "skills", "hours", "location"}
    ];
    return view('studentdetail', $data);
});

Route::get('/companydetail', function() {
    $data = [
        "title" => "Filter thru the students searching for an intership using these filters below",
        "filters" => {"category", "location"}
    ];
    return view('companydetail', $data);
});