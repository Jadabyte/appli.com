<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

use App\Models\Company;
use App\Models\User;

class CompanyController extends Controller
{
    public function index()
    {
        if (Gate::allows('isStudent')) {
            return redirect('student');
        }
        if (Gate::allows('hasCompany')) {
            return redirect('company/profile');
        }

        //$user= $this->user();
        //dd($user);

        $companies = Company::all();
        $users = User::all();
        return view('company.index', ['companies' => $companies, 'users' => $users]);
    }

    public function create()
    {
        return view('company/create');
    }

    public function match()
    {
        return view('company/match');
    }

    public function show($id)
    {
        if (Gate::allows('hasCompany')) {
            return redirect('company/profile');
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
        return view('company.create', ['company' => Company::findOrFail($id), 'score' => $score]);
    }

    public function search(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required'
        ]);
        $name = $request->input('name');

        $key = 'lAnDiA8K464qMD8g13YsDef_fNPIyUQjcS6SlCLZum4';
        $url = 'https://discover.search.hereapi.com/v1/discover?at=42.36346,-71.05444&q=' . $name . '&in=countryCode:BEL&apiKey=' . $key;

        $company = Http::get($url)->json();

        return view('company.create', ['company' => $company]);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'website' => 'required',
            'linkedin' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'street' => 'required',
            'streetNum' => 'required',
            'city' => 'required',
            'postCode' => 'required',
            'poBox' => 'required'
        ]);

        $company = new \App\Models\Company();

        $company->name = $request->input('name');
        $company->description = $request->input('description');
        $company->category = $request->input('category');

        $company->website = $request->input('website');
        $company->LinkedIn = $request->input('linkedin');
        $company->mail = $request->input('email');
        $company->telephone = $request->input('phone');

        $company->street = $request->input('street');
        $company->houseNumber = $request->input('streetNum');
        $company->city = $request->input('city');
        $company->postalCode = $request->input('postCode');
        $company->pobox = $request->input('poBox');

        /* these are just for testing, change for production */
        $company->user_id = rand(1, 50);
        $company->logo = ('insert image link here');
        /*---------------------------------------------------*/

        $company->save();
        return redirect('/company');
    }

    public function profile()
    {
        if (Gate::allows('isStudent')) {
            return redirect('student');
        }

        return view('company.profile');
    }

    public function user()
    {
        if (Gate::allows('isStudent')) {
            return User::where('id', Auth::user()->id)->with('student')->first();
        }
        return User::where('id', Auth::user()->id)->with('company')->first();
    }
}
