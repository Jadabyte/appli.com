<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

    public function create(){
        return view('company/create');
    }

    public function show($id)
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
        return view('company.create', ['company' => Company::findOrFail($id), 'score' => $score]);
    }

    public function search(Request $request){
        $name = $request->input('name');

        $key = 'ep5OXA-SxjdH7qSS1tFjtlQ4g51Zj3Ee_wZFPhokWV0';
        $url = 'https://discover.search.hereapi.com/v1/discover?at=42.36346,-71.05444&q=' . $name . '&in=countryCode:BEL&apiKey=' . $key;

        $company = Http::get($url)->json();
        return view('company.filled', ['company' => $company]);
    }

    public function store (Request $request){
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
}
