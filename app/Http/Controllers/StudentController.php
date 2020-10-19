<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    public function index(){
        $data['internships'] = \DB::table('internships')->get();
        return view('student/index', $data);
    }

    public function register(){

        return view('registerStudent');
       
    }

    public function login(){

        return view('login');
    }

    public function detail($id){
        return view('student.detail', ['users' => User::findOrFail($id)]);
    }

}
