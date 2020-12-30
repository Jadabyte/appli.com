<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        if (Gate::denies('isStudent')) {
            return redirect('company');
        }

        //$user= $this->user();
        //dd($user);

        $data['internships'] = \DB::table('internships')->get();
        return view('student/index', $data);
    }

    public function show($id)
    {
        return view('student.show', ['student' => User::findOrFail($id)]);
    }

    public function profile()
    {
        if (Gate::denies('isStudent')) {
            return redirect('company');
        }

        return view('student.profile');
    }

    public function update($id)
    {
        return view('student.profile', ['users' => User::findOrFail($id)]);
    }

    public function user()
    {
        if (Gate::allows('isStudent')) {
            return User::where('id', Auth::user()->id)->with('student')->first();
        }
        return User::where('id', Auth::user()->id)->with('company')->first();
    }
}
