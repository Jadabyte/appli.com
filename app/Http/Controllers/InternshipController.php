<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

use App\Models\Internship;
use App\Models\User;
use App\Models\InternshipsSkill;

class InternshipController extends Controller
{
    public function index()
    {
        $data['internships'] = \DB::table('internships')->get();
        return view('student/index', $data);
    }

    public function create()
    {
        return view('internship/create');
    }

    public function store(Request $request)
    {

        //dd($request->all());

        $internship = new \App\Models\Internship();
        $internship->title = $request->input('title');
        $internship->description = $request->input('description');
        $internship->category_id = $request->input('category_id');
        $internship->skills_id = $request->input('skills_id');
        $internship->internshipPeriod_id = $request->input('internshipPeriod_id');
        $internship->company_id = $request->input('company_id');
        $internship->availability = 1;
        $internship->save();
        return redirect('/internship');
    }

    public function show($id)
    {
        if (Gate::denies('isStudent') && Gate::denies('hasCompany')) {
            session()->flash('error', 'First add your company details.');
            return redirect('company/profile');
        }

        if (Gate::allows('isStudent') && Gate::denies('hasStudent')) {
            session()->flash('error', 'First add your student details.');
            return redirect('student/profile');
        }

        $user = $this->user();

        $internship = Internship::where('id', $id)->with('company', 'category', 'internshipPeriod', 'internshipsSkill')->first();
        return view('internship.show', ['internship' => $internship, 'user' => $user]);
    }

    public function detail($id)
    {
        return view('internship/show', ['users' => User::findOrFail($id)]);
    }

    public function user()
    {
        if (Gate::allows('isStudent')) {
            return User::where('id', Auth::user()->id)->with('student')->first();
        }
        return User::where('id', Auth::user()->id)->with('company')->first();
    }
}
