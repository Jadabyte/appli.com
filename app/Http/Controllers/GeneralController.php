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

        $validation = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $request->flash();

        $user = new \App\Models\User();
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->password = \Hash::make($request->input('password'));
           
        //dd($user);
        if (empty($request->input('isStudent'))) {
            $user->isStudent = 0;
            $user->save();
            return redirect('company');
        }else{
            $user->isStudent = 1;
            $user->save();
            return redirect('student');
        }

        $request->session()->flash('error', 'Something went wrong 🤔');
        return redirect('register');
    }

    public function login(){

        return view('login');
    }
    
    public function handleLogin(Request $request){
        $credentials = $request->only(['email', 'password']);
        $request->flash();

        if( \Auth::attempt($credentials) ){
            //dd(\Auth::user()->isStudent);
            if (\Auth::user()->isStudent) {
                return redirect('student');
            }else{
                return redirect('company');
            }  
        } //foutmelding genereren
        $request->session()->flash('error', 'Something went wrong 🤔');
        return view('login');
    }

    public function logout(){
        return view ('logout');
    }
}
