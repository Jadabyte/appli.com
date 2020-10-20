<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        return view('registerStudent');
        return view('student/index');
    }

    public function detail(){
        return view('student/detail');
    }



}
