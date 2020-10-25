<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Internship;

class InternshipController extends Controller
{
    public function index(){

        return view('internship/index');
    }

    public function detail($id){
        return view('internship.detail', ['internships' => Internship::findOrFail($id)]);
    }
}
