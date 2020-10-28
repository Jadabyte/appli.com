<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Internship;

class InternshipController extends Controller
{
    public function index(){
        $data['internships'] = \DB::table('internships')->get();
        return view('internship/index', $data);
    }

    public function show($internship){
        /* $data['internships'] = \DB::table('internships')->get();
        return view('internship/show', $data); */
        /* $data['internship'] = \App\Models\Internship::find($internship)->where('id', $internship)->first();

        $data['company'] = \App\Models\Company::where('id', $data['internship']->company_id)->first();

        return view('internship/show', $data); */
    }

    public function create(){
        return view('internship/create');
    }

    public function handleCreate (Request $request){
        $request->flash();

        $internship = new \App\Models\Internship();
        $internship->title = $request->input('title');
        $internship->description = $request->input('description');
        $internship->category = $request->input('category');
        $internship->requirements = $request->input('requirements');
        $internship->internshipPeriod_id = $request->input('period');
        $internship->availability = 1;

        $internship->save();

        $request->session()->flash('error', 'Something went wrong 🤔');
        return redirect("/internships/$internship->id")->with('success', 'Internship has been added!');

        return view('internship/create');
    }

    public function detail($id){
        return view('internship/show', ['users' => User::findOrFail($id)]);
    }

}
