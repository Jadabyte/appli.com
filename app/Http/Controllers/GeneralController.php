<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function header(){
        return view('components/header');
    }

    public function navigation(){
        return view('components/navigation');
    }

    public function index(){
        return view('index');
    }

    public function footer(){
        return view('components/footer');
    }

    public function login(){

        return view('login');
    }

    public function logout(){
        return view ('logout');
    }
}
