<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = DB::table('companies')->get();
        $users = DB::table('users')->get();
        return view('company.index', ['companies' => $companies, 'users' => $users]);
    }

    public function show($company)
    {
        $data['companies'] = \DB::table('companies')->get();
        return view('company/show', $data);
    }

    public function detail($id)
    {
        $company = DB::table('companies')->where('id', $id)->first();

        $street = $company->street;
        $city = $company->city;
        $houseNumber = $company->houseNumber;
        $postalCode = $company->postalCode;

        $key = 'Aa6XPt7SzdZddf6M10R84qaH2VQDn2iIvDlFZQniJqs';

        $location = Http::get('https://geocode.search.hereapi.com/v1/geocode?q=' . $street . '+' . $houseNumber . '%2C+' . $postalCode . '+' . $city . '&apiKey=' . $key);

        if (!($location->ok() && isset($location->json()['items'][0]))) {
            return view('company.show', ['company' => Company::findOrFail($id), 'score' => 'Not found']);
        }

        $lat = $location->json()['items'][0]['position']['lat'];
        $lng = $location->json()['items'][0]['position']['lng'];

        $stations = Http::get('https://transit.hereapi.com/v8/stations?in=' . $lat. ',' . $lng . ';r=2000&maxPlaces=10' . '&apiKey=' . $key);

        if (!($stations->ok() && isset($stations->json()['stations']))) {
            return view('company.show', ['company' => Company::findOrFail($id), 'score' => 'Not found']);
        }

        $score = count($stations->json()['stations']);
        return view('company.show', ['company' => Company::findOrFail($id), 'score' => $score]);
    }
}
