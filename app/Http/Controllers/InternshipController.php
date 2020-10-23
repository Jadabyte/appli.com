<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Internship;

class InternshipController extends Controller
{
    public function index(){
        $data['internships'] = \DB::table('internships')->get();
        return view('internship/index', $data);
    }

    public function show(\App\Models\Internship $internship){
        $internship = $internship;
       // dd($internship);

        return view('internship/show');
    }

    public function detail($id){
        return view('internship.detail', ['internships' => Internship::findOrFail($id)]);
    }

    public function create(){

        return view('internship/createInternship');
    }
}
