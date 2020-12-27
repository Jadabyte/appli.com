<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Gate;

use App\Models\Company;
use App\Models\User;

class CompanyController extends Controller
{
    public function index()
    {
        if (Gate::allows('isStudent')) {
            return redirect('student');
        }

        $companies = Company::all();
        $users = User::all();
        return view('company.index', ['companies' => $companies, 'users' => $users]);
    }

    public function show($id)
    {
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

    public function profile()
    {
        if (Gate::allows('isStudent')) {
            return redirect('student');
        }

        return view('company.profile');
    }
}
