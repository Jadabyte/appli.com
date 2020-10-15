<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // list all companies --> LISA

    public function index(){

        $data['companies'] = \DB::table('companies')->get();
        return view('company/index', $data);
    }

    // add new internship --> LISA
    // detailspage (view for students) --> LISA
    // applications(view, label, reply) --> LISA

    // add new company profile
    // view ratings
    // view internships in company
    // connect public transport to location company
}
