<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){

        $companies = DB::table('companies')->get();
        return view('company.index', ['companies' => $companies]);
    }

    public function register(){

        return view('registerCompany');
    }

    public function create(){
        return view('/company/create');
    }

    public function detail($id){

        $company = DB::table('companies')->where('id', $id)->first();

        $street = $company->street;
        $city = $company->city;
        $houseNumber = $company->house_number;
        $postalCode = $company->postal_code;

        $location = Http::withToken('eyJhbGciOiJSUzUxMiIsImN0eSI6IkpXVCIsImlzcyI6IkhFUkUiLCJhaWQiOiJzOW5uNzg3eW1pdUgwR0d5Rm50cSIsImlhdCI6MTYwMzA5MTc4NSwiZXhwIjoxNjAzMTc4MTg1LCJraWQiOiJqMSJ9.ZXlKaGJHY2lPaUprYVhJaUxDSmxibU1pT2lKQk1qVTJRMEpETFVoVE5URXlJbjAuLmxRS1VnWmFTV21ya3dSNEtsV21qTGcudzNseHpPYkVmWWNzZmFzSlRwU0VhRV9PZ0lOc25iZ2NGZHdMTnZ5cy1EOTRldFVCeEE2TU1HYU1uNTlrSVRzZE5KdnJhNUpLSHJqM0xlU2FOT3BfQTBibTRoMW5pcnJ3TkNHSlpEaU1YVC15OW9MY1c2Mk1lR2dSMVJ0YjlXQXBsWTVidDNQVEZVWDR3QUxkM25EUkh3LkhQU2RJbExTb1dGQzJheUEzcjZVZUl0Zm04MGFUOWc3bXRuY2tSaDl5WG8.KBLGheNTDtGxWAiy2diTh5wP3wJI7kz0_Q7SkNy4ug347If2d-L9zOoXkUxes5HH7T4Jnx1f2W0hfkpX4ysEVDmzos1m_aePfC3nwXIp1oGt9x_fidj1lwE0cbepZ5O7msnGOzkc9DejT6mmPnIqGwTrnfyMSZZSmbP0uWdRllSEJ1zdIKsXUZDu3zcLBtDsGYSdxIEP7hjig6PEZcur2N89mOYYY7FTiGKbURA5G6kNW-U2tJ3DmpekpnW8PpAcIOINspg0_n25G4-uiRVnX6wFHq1jVsDdkrFbQqjvVsvqwUogH162a1fQVmXuX28ct09rt35unWGcVlPe1hOzbQ')->get('https://geocode.search.hereapi.com/v1/geocode?q=' . $street . '+' . $houseNumber . '%2C+' . $postalCode . '+' . $city);
        $lat = $location->json()['items'][0]['position']['lat'];
        $lng = $location->json()['items'][0]['position']['lng'];

        $stations = Http::withToken('eyJhbGciOiJSUzUxMiIsImN0eSI6IkpXVCIsImlzcyI6IkhFUkUiLCJhaWQiOiJzOW5uNzg3eW1pdUgwR0d5Rm50cSIsImlhdCI6MTYwMzA5MTc4NSwiZXhwIjoxNjAzMTc4MTg1LCJraWQiOiJqMSJ9.ZXlKaGJHY2lPaUprYVhJaUxDSmxibU1pT2lKQk1qVTJRMEpETFVoVE5URXlJbjAuLmxRS1VnWmFTV21ya3dSNEtsV21qTGcudzNseHpPYkVmWWNzZmFzSlRwU0VhRV9PZ0lOc25iZ2NGZHdMTnZ5cy1EOTRldFVCeEE2TU1HYU1uNTlrSVRzZE5KdnJhNUpLSHJqM0xlU2FOT3BfQTBibTRoMW5pcnJ3TkNHSlpEaU1YVC15OW9MY1c2Mk1lR2dSMVJ0YjlXQXBsWTVidDNQVEZVWDR3QUxkM25EUkh3LkhQU2RJbExTb1dGQzJheUEzcjZVZUl0Zm04MGFUOWc3bXRuY2tSaDl5WG8.KBLGheNTDtGxWAiy2diTh5wP3wJI7kz0_Q7SkNy4ug347If2d-L9zOoXkUxes5HH7T4Jnx1f2W0hfkpX4ysEVDmzos1m_aePfC3nwXIp1oGt9x_fidj1lwE0cbepZ5O7msnGOzkc9DejT6mmPnIqGwTrnfyMSZZSmbP0uWdRllSEJ1zdIKsXUZDu3zcLBtDsGYSdxIEP7hjig6PEZcur2N89mOYYY7FTiGKbURA5G6kNW-U2tJ3DmpekpnW8PpAcIOINspg0_n25G4-uiRVnX6wFHq1jVsDdkrFbQqjvVsvqwUogH162a1fQVmXuX28ct09rt35unWGcVlPe1hOzbQ')->get('https://transit.hereapi.com/v8/stations?in=' . $lat. ',' . $lng . ';r=2000&maxPlaces=10');

        $score = count($stations->json()['stations']);

        return view('company.detail', ['companies' => Company::findOrFail($id), 'score' => $score]);
    }


    // list all companies
    // add new internship
    // detailspage (view for students)
    // applications(view, label, reply)

    // add new company profile
    // view ratings
    // view internships in company
    // connect public transport to location company
}
