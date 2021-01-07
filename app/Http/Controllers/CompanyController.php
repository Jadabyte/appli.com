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

use App\Models\Company;
use App\Models\User;
use App\Models\Category;

class CompanyController extends Controller
{
    public function index()
    {
        if (Gate::allows('isStudent')) {
            return redirect('student');
        }
        if (Gate::denies('hasCompany')) {
            session()->flash('error', 'First add your company details.');
            return redirect('company/profile');
        }

        $companies = Company::all();
        $users = User::all();
        return view('company.index', ['companies' => $companies, 'users' => $users]);
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

        $company = Company::where('id', $id)->first();

        $street = $company->street;
        $city = $company->city;
        $houseNumber = $company->houseNumber;
        $postalCode = $company->postalCode;

        $location = Http::get('https://geocode.search.hereapi.com/v1/geocode?q=' . $street . '+' . $houseNumber . '%2C+' . $postalCode . '+' . $city . '&apiKey=' . env('HERE_API'));

        if (!($location->ok() && isset($location->json()['items'][0]))) {
            return view('company.show', ['company' => Company::findOrFail($id), 'score' => 'Not found']);
        }

        $lat = $location->json()['items'][0]['position']['lat'];
        $lng = $location->json()['items'][0]['position']['lng'];

        $stations = Http::get('https://transit.hereapi.com/v8/stations?in=' . $lat. ',' . $lng . ';r=2000&maxPlaces=10' . '&apiKey=' . env('HERE_API'));

        if (!($stations->ok() && isset($stations->json()['stations']))) {
            return view('company.show', ['company' => Company::findOrFail($id), 'score' => 'Not found']);
        }

        $score = count($stations->json()['stations']);
        return view('company.show', ['company' => Company::findOrFail($id), 'score' => $score]);
    }

    public function match(Request $request)
    {
        $validation = $request->validate([
            'companyName' => 'required|string',
        ]);
        $name = $request->input('companyName');

        $url = 'https://discover.search.hereapi.com/v1/discover?at=42.36346,-71.05444&q=' . $name . '&in=countryCode:BEL&apiKey=' . env('HERE_API');

        $companies = Http::get($url);

        if (!($companies->ok() && isset($companies->json()['items'][0]))) {
            $request->session()->flash('error', 'Company not found...');
            return back();
        }

        $company = $companies['items'][0];

        return redirect('company/profile')->with(['company' => $company]);
    }

    public function create(Request $request)
    {
        $validation = $request->validate([
            'logo' => 'required|image|max:2048',
            'companyName' => 'required|string',
            'companyEmail' => 'required|email',
            'phone' => 'required|numeric',
            'description' => 'required',
            'website' => 'required|url',
            'linkedin' => 'required|url|regex:/^(?:https?:\/\/)?(?:[^@\/\n]+)?(?:www\.)?(linkedin\.com\/.+)/i',
            'category' => 'required',
            'street' => 'required|string',
            'houseNumber' => 'required|numeric',
            'city' => 'required|string',
            'postalCode' => 'required|numeric',
            'pobox' => 'nullable|numeric',
        ]);

        $user = $this->user();

        if (!$user->company) {
            $user->company = new Company;
            $user->company->user_id = $user->id;
        }

        $logoName = $user->company->user_id.'_logo'.time().'.'.request()->logo->getClientOriginalExtension();

        Storage::putFileAs('companylogos', $request->file('logo'), $logoName);

        $user->company->logo = $logoName;

        $user->company->name = $request->input('companyName');
        $user->company->description = $request->input('description');
        $user->company->category_id = $request->input('category');

        $user->company->website = $request->input('website');
        $user->company->LinkedIn = $request->input('linkedin');
        $user->company->mail = $request->input('companyEmail');
        $user->company->telephone = $request->input('phone');

        $user->company->street = $request->input('street');
        $user->company->houseNumber = $request->input('houseNumber');
        $user->company->city = $request->input('city');
        $user->company->postalCode = $request->input('postalCode');
        $user->company->pobox = $request->input('pobox') ? $request->input('pobox') : 0;

        $user->company->save();

        $request->session()->flash('message', 'Your company information has been added successfully!');
        return redirect('company/profile');
    }

    public function profile()
    {
        if (Gate::allows('isStudent')) {
            return redirect('student');
        }

        $user = $this->user();

        $categories = Category::All();

        if (session()->has('company')) {
            $user->company = new Company;
            if (isset(session('company')['title'])) {
                $user->company->name = session('company')['title'];
            }
            if (isset(session('company')['address']['postalCode'])) {
                $user->company->postalCode = session('company')['address']['postalCode'];
            }
            if (isset(session('company')['address']['houseNumber'])) {
                $user->company->houseNumber = session('company')['address']['houseNumber'];
            }
            if (isset(session('company')['address']['street'])) {
                $user->company->street = session('company')['address']['street'];
            }
            if (isset(session('company')['address']['city'])) {
                $user->company->city = session('company')['address']['city'];
            }
            if (isset(session('company')['contacts'][0]['email'][0]['value'])) {
                $user->company->mail = session('company')['contacts'][0]['email'][0]['value'];
            }
            if (isset(session('company')['contacts'][0]['phone'][0]['value'])) {
                $user->company->telephone = session('company')['contacts'][0]['phone'][0]['value'];
            }
            if (isset(session('company')['contacts'][0]['www'][0]['value'])) {
                $user->company->website = session('company')['contacts'][0]['www'][0]['value'];
            }
        }

        return view('company.profile', ['user'=> $user, 'categories' => $categories]);
    }

    public function user()
    {
        if (Gate::allows('isStudent')) {
            return User::where('id', Auth::user()->id)->with('student')->first();
        }
        return User::where('id', Auth::user()->id)->with('company')->first();
    }
}
