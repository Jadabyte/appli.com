<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

use App\Models\Application;
use App\Models\User;

/*
/application/{id}
    1) als je geen account hebt ga je naar profile ✔
    2) als de application niet van of voor jouw is kan je het niet zien ✔
    3) een overzicht van de application, je kan doorklikken naar de internship
    4) als student kan je doorklikken naar de company, als company kan je doorklikken naar de stunent
    5) als company kan je approven, als student kan je deleten en status zien
    6) Als status starred is, kunnnen student en bedrijf commenten onder de application

?) students via een knop op een internship een application aanmaken en verzenden
*/

class ApplicationController extends Controller
{
    public function index()
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

        if (Gate::denies('isStudent')) {
            $applications = DB::table('internships')
                                ->join('applications', 'applications.internship_id', '=', 'internships.id')
                                ->join('students', 'applications.student_id', '=', 'students.id')
                                ->join('users', 'students.user_id', '=', 'users.id')
                                ->where('internships.company_id', $user->company->id)
                                ->select('applications.id', 'users.firstName', 'users.lastName', 'internships.title', 'applications.label', 'internships.company_id')
                                ->get();
        }

        if (Gate::allows('isStudent')) {
            $applications = Application::where('student_id', $user->student->id)->with('internship.company')->get();
        }

        return view('application.index', ['user'=> $user, 'applications' => $applications]);
    }

    public function handleLabel(Request $request, $id)
    {
        $application = Application::find($id);

        if (Gate::denies('isStudent')) {
            $application->label = $request->input('label');
            $application->save();
        }

        if (Gate::allows('isStudent')) {
            $application->delete();
        }

        return back();
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

        if (Gate::denies('isStudent')) {
            $info = DB::table('internships')
                                    ->join('applications', 'applications.internship_id', '=', 'internships.id')
                                    ->join('students', 'applications.student_id', '=', 'students.id')
                                    ->join('users', 'students.user_id', '=', 'users.id')
                                    ->join('categories', 'internships.category_id', '=', 'categories.id')
                                    ->join('internshipPeriods', 'internships.internshipPeriod_id', '=', 'internshipPeriods.id')
                                    ->where('internships.company_id', $user->company->id)
                                    ->where('applications.id', $id)
                                    ->select('internships.title as internshipTitle', 'internships.description', 'users.firstName', 'users.lastName', 'students.mobile', 'students.LinkedIn', 'students.portfolio', 'students.biography', 'applications.motivation', 'applications.label', 'applications.id as applicationId', 'categories.title as categoryTitle', 'internshipPeriods.title as internshipPeriodTitle', 'students.id as studentsId', 'internships.id as internshipsId')
                                    ->first();
        }

        if (Gate::allows('isStudent')) {
            $info = 0;
        }

        if (!$info) {
            return back();
        }

        return view('application.show', ['info' => $info]);
    }

    public function user()
    {
        if (Gate::allows('isStudent')) {
            return User::where('id', Auth::user()->id)->with('student')->first();
        }
        return User::where('id', Auth::user()->id)->with('company')->first();
    }
}
