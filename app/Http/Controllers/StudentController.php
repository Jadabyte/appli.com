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

    public function show($student){
        $data['students'] = \DB::table('students')->get();
        return view('student/show', $data);
    }

    public function detail($id){
        return view('student.show', ['users' => User::findOrFail($id)]);
    }

    public function update($id){
        return view('student.update', ['users' => User::findOrFail($id)]);
    }

}
