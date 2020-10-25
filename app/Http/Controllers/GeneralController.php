<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function appli(){
        return view('layouts/appli');
    }

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
        //$user->isStudent = $request->input('isStudent');
        
        //dd($user);
        $data = $request->input('isStudent');
        if (empty($request->input('isStudent'))) {
            $user->isStudent = 0;
            $user->save();
            return redirect('company');
        }else{
            $user->isStudent = 1;
            $user->save();
            return redirect('student');
        }        
    }

    public function login(){

        return view('login');
    }
    
    public function handleLogin(Request $request, $user){
        $credentials = $request->only(['email', 'password']);
        if( \Auth::attempt($credentials) ){
            if ($user->isStudent === 0) {
                return redirect('company');
            }else{
                return redirect('student');
            }  
        } //foutmelding genereren

        //dd($result);
        return view('users/login');
    }

    public function logout(){
        return view ('logout');
    }
}
