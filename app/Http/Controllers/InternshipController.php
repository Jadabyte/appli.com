<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Internship;

class InternshipController extends Controller
{
    public function index(){

        $data['internships'] = \DB::table('internships')->get();
        return view('internship/index', $data);
    }

    public function create(){
        return view('internship/create');
    }

    public function store (Request $request){

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

    public function show($internship){
        $data['internships'] = \DB::table('internships')->where('id', $internship)->first();
        //$data['companies'] = \DB::table('companies')->where('id', $company)->first();

        return view('internship/show', $data);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function detail($id){
        return view('internship/show', ['users' => User::findOrFail($id)]);
    }

    public function destroy($id)
    {
        //
    }

}
