<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function index(){

        return view('internship/index');
    }

    public function detail(){
        return view('internship/detail');
    }

    public function create(){
        return view('internship/createInternship');
    }
}
