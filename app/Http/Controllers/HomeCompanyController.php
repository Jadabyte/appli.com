<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCompanyController extends Controller
{
    public function index(){
        
        return view('homeCompany');
    }
}
