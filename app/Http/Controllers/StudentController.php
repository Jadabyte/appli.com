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
use App\Models\Category;

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

        $user = $this->user();

        $categories = Category::All();

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

    

}
