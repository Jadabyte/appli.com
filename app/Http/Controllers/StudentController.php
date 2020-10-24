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

        $data['students'] = \DB::table('students')->get();
        return view('student/index', $data);
    }

    public function show($student){
        $data['students'] = \DB::table('students')->get();
        return view('student/show', $data);
    }

    public function register(){

        return view('registerStudent');
    }

    public function handleRegister(Request $request){
        $user = new \App\Models\User();
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->password = \Hash::make($request->input('password'));
        $user->save();
        //dd($user);
        return redirect('student');
    }


    public function detail($id){
        return view('student.detail', ['users' => User::findOrFail($id)]);
    }

}
