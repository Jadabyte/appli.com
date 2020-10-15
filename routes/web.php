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

<<<<<<< Updated upstream
Route::get('/internshipdetail', function() {
    $data = [
        "company" => "Capgemini",
        "subtitle" => "Intern as UX designer at Idean",
        "location" => "Brussels",
        "explanation" => "At Idean we believe and know that great UX can change the world. It all starts with awesome people, challenging projects and crafting a work environment that supports thoughtful work and growth.
        You’ve experienced first-hand how to drive a user-centered design process to develop new products and services, and your track record and/or portfolio proves that. Not only do you understand the importance of user experience, but you can also communicate it to our clients.
        You are passionate about solving design challenges together in a team of other creatives, designers, and developers, and strive to deliver useful, user friendly and magnificent work.",
        "summaries" => ["Plan and drive design research activities and co-creation workshops", "Plan and execute evaluative research with end-users and/or clients (usability testing, expert evaluations etc.)", "Be a handson specialist in UX design and digital product development", "Craft design research outputs in the shape of design principles, personas, scenarios, journeys, requirements and user stories"]
    ];
    return view('internshipdetail', $data);
});

Route::get('/studentdetail', function() {
    $data = [
        "firstname" => "Anonymous",
        "category" => "Devigner",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        "qualities" => ["Social", "Flexible", "Teamplayer"],
        "motivation" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",

    ];
    return view('studentdetail', $data);
});

Route::get('/companydetail', function() {
    $data = [
        "name" => "Capgemini",
        "location" => "Diegem",
        "description" => "Our creative environment will push you to learn, grow and share your knowledge. We have a diverse culture and mindset, and we appreciate people with different backgrounds. You’ll be working in inspiring projects, with multidisciplinary teams and diverse clients, who range from start-ups to Fortune 500 companies.",
        "internships" => ["Intern UX Designer", "Intern UI Designer", "Intern Front - End Developer", "Intern Fullstack Developer", "Intern Back - End Developer"]
    ];
    return view('companydetail', $data);
});
=======

/* GENERAL*/






/* STUDENTS*/
Route::get('/student', 'StudentController@index');




/* COMPANIES*/
Route::get('/company', 'CompanyController@index');




/* INTERNSHIPS*/
Route::get('/internship', 'InternshipController@index');
>>>>>>> Stashed changes
