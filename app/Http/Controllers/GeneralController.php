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

     public function register(){

        return view('register');
       
    }

    public function handleRegister(Request $request){
        $user = new \App\Models\User();
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->password = \Hash::make($request->input('password'));
        $user->isStudent = $request->input('isStudent');
        $user->save();
        //dd($user);
        if($user->isStudent){
            return redirect('student');
        }
        if(!$user->isStudent){
            return redirect('company');
        }
        
    }

    public function login(){

        return view('login');
    }

    public function logout(){
        return view ('logout');
    }
}
