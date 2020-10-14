<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterStudentController extends Controller
{
    public function index(){
        
        return view('registerStudent');
    }
}
