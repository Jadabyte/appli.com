<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        return view('student/index');
    }

    public function register(){

        return view('registerStudent');
       
    }

    public function login(){

        return view('login');
    }

}
