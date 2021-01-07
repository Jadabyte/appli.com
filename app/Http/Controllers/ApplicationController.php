<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

use App\Models\Application;
use App\Models\User;
use App\Models\Comment;
use App\Models\Internship;
use App\Models\InternshipsSkill;

class ApplicationController extends Controller
{
    public function index(Request $request)
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
        $search = $request->get('search');
        $label = $request->get('label');
        if (!empty($search)) {
        }
        if (Gate::denies('isStudent')) {
            if ($label == null) {
                $applications = DB::table('internships')
                                ->join('applications', 'applications.internship_id', '=', 'internships.id')
                                ->join('students', 'applications.student_id', '=', 'students.id')
                                ->join('users', 'students.user_id', '=', 'users.id')
                                ->where('internships.company_id', $user->company->id)
                                ->where('users.firstName', 'LIKE', '%' . $search . '%')
                                ->select('applications.id', 'users.firstName', 'users.lastName', 'internships.title', 'applications.label', 'internships.company_id')
                                ->orderBy('label', 'DESC')
                                ->get();
            }
            if ($search == null) {
                $applications = DB::table('internships')
                                ->join('applications', 'applications.internship_id', '=', 'internships.id')
                                ->join('students', 'applications.student_id', '=', 'students.id')
                                ->join('users', 'students.user_id', '=', 'users.id')
                                ->where('internships.company_id', $user->company->id)
                                ->where('applications.label', 'LIKE', '%' . $label . '%')
                                ->select('applications.id', 'users.firstName', 'users.lastName', 'internships.title', 'applications.label', 'internships.company_id')
                                ->orderBy('label', 'DESC')
                                ->get();
            }
        }
        //dd($applications);
        //dd($label);
        if (Gate::allows('isStudent')) {
            $applications = Application::where('student_id', $user->student->id)->with('internship.company')->get();
        }

        return view('application.index', ['user'=> $user, 'applications' => $applications, 'search' => $search]);
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
            return redirect('application');
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
                ->select('applications.id', 'internships.title as internshipTitle', 'internships.description', 'users.firstName', 'users.lastName', 'students.mobile', 'students.LinkedIn', 'students.portfolio', 'students.biography', 'applications.motivation', 'applications.label', 'applications.id as applicationId', 'categories.title as categoryTitle', 'internshipPeriods.title as internshipPeriodTitle', 'students.id as studentsId', 'internships.id as internshipsId')
                ->first();
        }

        if (Gate::allows('isStudent')) {
            $info = Application::where('id', $id)->where('student_id', $user->student->id)->with('internship.company', 'internship.internshipPeriod', 'internship.company.category')->first();
        }

        if (!$info) {
            return back();
        }

        $comments = Comment::where('application_id', $id)->with('user')->get();

        return view('application.show', ['info' => $info, 'user' => $user, 'comments' => $comments]);
    }

    public function comment(Request $request, $id)
    {
        $validation = $request->validate([
            'comment' => 'required|string',
        ]);

        $user = $this->user();

        $comment = new Comment;
        $comment->text = $request->comment;
        $comment->application_id = $id;
        $comment->user_id = $user->id;

        $comment->save();

        return back();
    }

    public function create($id)
    {
        if (Gate::denies('isStudent')) {
            return redirect('company');
        }

        if (Gate::allows('isStudent') && Gate::denies('hasStudent')) {
            session()->flash('error', 'First add your student details.');
            return redirect('student/profile');
        }

        $user = $this->user();

        $application = Application::where('internship_id', $id)->where('student_id', $user->student->id)->first();
        $internship = Internship::where('id', $id)->with('company')->first();

        if (isset($application)) {
            return view('application.create', ['internship' => $internship, 'application' => $application]);
        }

        return view('application.create', ['internship' => $internship]);
    }

    public function handelCreate(Request $request, $id)
    {
        $validation = $request->validate([
            'motivation' => 'required|string',
        ]);

        $user = $this->user();

        $application = Application::where('internship_id', $id)->where('student_id', $user->student->id)->first();

        if (!$application) {
            $application = new Application;
            $application->label = "New";
            $application->internship_id = $id;
            $application->student_id = $user->student->id;
        }

        $application->motivation = $request->motivation;

        $application->save();

        return redirect('application/' . $application->id);
    }

    public function user()
    {
        if (Gate::allows('isStudent')) {
            return User::where('id', Auth::user()->id)->with('student')->first();
        }
        return User::where('id', Auth::user()->id)->with('company')->first();
    }
}
