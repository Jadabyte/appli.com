<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){
        $data['users'] = \DB::table('users')->get();
        return view('/company/index', $data);
    }

    public function register(){

        return view('registerCompany');
    }

    public function login(){

        return view('login');
    }

    public function create(){
        return view('/company/create');
    }

    public function detail($id){
        return view('company.detail', ['companies' => Company::findOrFail($id)]);
    }


    // list all companies
    // add new internship
    // detailspage (view for students)
    // applications(view, label, reply)

    // add new company profile
    // view ratings
    // view internships in company
    // connect public transport to location company
}
