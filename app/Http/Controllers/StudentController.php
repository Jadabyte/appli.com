<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class StudentController extends Controller
{
    public function index()
    {
        if (Gate::denies('isStudent')) {
            return redirect('company');
        }

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
}
