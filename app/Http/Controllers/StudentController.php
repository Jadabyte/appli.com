<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

use App\Models\Student;
use App\Models\User;
use App\Models\Internship;
use App\Models\InternshipPeriod;
use App\Models\Category;
use App\Models\Company;
use App\Models\Skills;

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

    public function profile()
    {
        if (Gate::denies('isStudent')) {
            return redirect('company');
        }

        $user = $this->user();

        $categories = Category::All();

        if (isset($user->student->github)) {
            $githubName = $user->student->github;

            $url = 'https://api.github.com/users/' . $githubName . '/repos';

            $repositories = Http::withToken(env('GITHUB_ACCESS_TOKEN'))->get($url)->json();
            return view('student.profile', ['user'=> $user, 'categories' => $categories, 'repositories' => $repositories]);
        }

        return view('student.profile', ['user'=> $user, 'categories' => $categories]);
    }

    public function user()
    {
        if (Gate::allows('isStudent')) {
            return User::where('id', Auth::user()->id)->with('student')->first();
        }
        return User::where('id', Auth::user()->id)->with('company')->first();
    }

    public function create(Request $request)
    {
        $validation = $request->validate([
            'picture' => 'required|image|max:2048',
            'mobile' => 'required|numeric',
            'biography' => 'required',
            'portfolio' => 'required|url',
            'linkedin' => 'required|url|regex:/http(?:s):\/\/(?:www\.)linkedin\.com\/.+/i',
            'category' => 'required'
        ]);

        $user = $this->user();

        if (!$user->student) {
            $user->student = new Student;
            $user->student->user_id = $user->id;
        }

        $pictureName = $user->student->user_id.'_picture'.time().'.'.request()->picture->getClientOriginalExtension();

        Storage::putFileAs('studentPictures', $request->file('picture'), $pictureName);

        $user->student->picture = $pictureName;

        $user->student->biography = $request->input('biography');
        $user->student->category_id = $request->input('category');

        $user->student->portfolio = $request->input('portfolio');
        $user->student->LinkedIn = $request->input('linkedin');
        $user->student->mobile = $request->input('mobile');

        $user->student->save();

        $request->session()->flash('message', 'Your information has been added successfully!');
        return redirect('student/profile');
    }

    function github(Request $request){

        $validation = $request->validate([
            'github' => 'required|unique:students',
        ]);
        $githubName = $request->input('github');

        $url = 'https://api.github.com/users/' . $githubName . '/repos';

        $repositories = Http::withToken(env('GITHUB_ACCESS_TOKEN'))->get($url)->json();

        if (isset($repositories['message'])) {
            $request->session()->flash('error', $repositories['message']);
            return back();
        }

        $user = $this->user();
        $user->student->github = $githubName;
        $user->student->save();
        $categories = Category::All();
        //dd($repositories);
        return redirect('student/profile');
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

        $student = Student::where('id', $id)->first();
        $user_id = $student->user_id;
        //dd($user_id);
        $user = User::where('id', $user_id)->first();
        //dd($user);
        $categories = Category::All();
        $githubName = $student->github;
        $url = 'https://api.github.com/users/' . $githubName . '/repos';
        $repositories = Http::withToken(env('GITHUB_ACCESS_TOKEN'))->get($url)->json();

        if (!isset($repositories['message'])) {
            $data['repositories'] = $repositories;
            return view('student.show', $data, ['student' => Student::findOrFail($id), 'user' => $user, 'categories' => $categories]);
        }

        return view('student.show', ['student' => Student::findOrFail($id), 'user' => $user, 'categories' => $categories]);
    }

    public function filter(Request $request){
        $internshipPeriod = InternshipPeriod::get();
        $category = Category::get();
        $company = Company::get();
        $internshipsSkill = Skills::get();

        $ip = $request->get('internshipPeriod_id');
        $c = $request->get('category_id');
        $sk = $request->get('internshipsSkill_id');

        $internship = Internship::where('internshipPeriod_id', '=', $ip)->orWhere('category_id', '=', $c)->orWhere('skills_id', '=', $sk)->with('internshipPeriod', 'category', 'company', 'internshipsSkill')->get();

        if($internship->isEmpty()){
            $internship = Internship::with('internshipPeriod', 'category', 'company', 'internshipsSkill')->get();
        }
        return view('student.index', ['internship'=>$internship, 'internshipPeriod'=>$internshipPeriod, 'category'=>$category, 'company'=>$company, 'internshipsSkill'=>$internshipsSkill]);
    }
}
