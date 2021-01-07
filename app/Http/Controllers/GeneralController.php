<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

use App\Models\User;
use App\Models\InternshipsSkill;

class GeneralController extends Controller
{
    public function appli()
    {
        return view('layouts/appli');
    }

    public function detailpage()
    {
        return view('layouts/detailpage');
    }

    public function navigation()
    {
        return view('components/general/navigation');
    }

    public function index()
    {
        return view('index');
    }

    public function footer()
    {
        return view('components/general/footer');
    }

    public function register()
    {
        return view('register');
    }

    public function filter()
    {
        return view('components/student/filters');
    }

    public function createInternship()
    {
        return view('components/internship/createInternship');
    }

    public function showInternships()
    {
        return view('components/internship/showInternships');
    }

    public function handleRegister(Request $request)
    {
        $validation = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users|exclude_if:isStudent,null|regex:/(.*)student\.thomasmore\.be$/i',
            'password' => 'required|min:8'
        ]);

        $request->flash();

        $user = new User();
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        if ($request->input('isStudent')) {
            $user->isStudent = $request->input('isStudent');
            $user->save();
            Auth::login($user);
            return redirect('student/profile');
        }

        $user->isStudent = 0;
        $user->save();
        Auth::login($user);
        return redirect('company/profile');
    }

    public function login()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $credentials = $request->only(['email', 'password']);
        $request->flash();

        if (Auth::attempt($credentials)) {
            if (Auth::user()->isStudent) {
                return redirect('student');
            }
            return redirect('company');
        }

        $request->session()->flash('error', 'Something went wrong 🤔');
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function handleProfile(Request $request)
    {
        $user = $this->user();

        if ($user->isStudent === 1) {
            $validation = $request->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => ['required','email','regex:/(.*)student\.thomasmore\.be$/i', Rule::unique('users')->ignore($user)],
                'password' => 'required|min:8|confirmed'
            ]);
        }

        $validation = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => ['required','email', Rule::unique('users')->ignore($user)],
            'password' => 'required|min:8|confirmed'
        ]);

        $request->flash();

        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $request->session()->flash('message', 'Your information has been successfully updated!');

        if ($user->isStudent) {
            return redirect('student');
        }

        return redirect('company');
    }

    public function user()
    {
        if (Gate::allows('isStudent')) {
            return User::where('id', Auth::user()->id)->with('student')->first();
        }
        return User::where('id', Auth::user()->id)->with('company')->first();
    }
}
