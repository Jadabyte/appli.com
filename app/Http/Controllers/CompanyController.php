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

    public function profile($id){
        $data['applications'] = DB::table('internships')
                                    ->join('applications', 'applications.internship_id', '=', 'internships.id')
                                    ->join('students', 'applications.student_id', '=', 'students.id')
                                    ->join('users', 'students.user_id', '=', 'users.id')
                                    ->where('internships.company_id', $id)
                                    ->select('applications.id', 'users.firstName', 'internships.title', 'applications.label', 'internships.company_id')
                                    ->get();
        //dd($data);
        return view('company.profile', $data);
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
        return view('company.show', ['company' => Company::findOrFail($id), 'score' => $score]);
    }

    public function handleLabel(Request $request, $id) {
       
        // $data['applications'] = DB::table('internships')
        //                             ->join('applications', 'applications.internship_id', '=', 'internships.id')
        //                             ->join('students', 'applications.student_id', '=', 'students.id')
        //                             ->join('users', 'students.user_id', '=', 'users.id')
        //                             ->where('internships.company_id', $id)
        //                             ->select('applications.id', 'users.firstName', 'internships.title', 'applications.label', 'internships.company_id')
        //                             ->get();

        $application = \App\Models\Application::where('id', 2)
                                        ->first();
        $application->label = $request->input('label');
        $application->save();
       //dd($application);
        return back();
    }
    
    public function application($id, $application) {

        $data['info'] = DB::table('internships')
                                    ->join('applications', 'applications.internship_id', '=', 'internships.id')
                                    ->join('students', 'applications.student_id', '=', 'students.id')
                                    ->join('users', 'students.user_id', '=', 'users.id')
                                    ->join('categories', 'internships.category_id', '=', 'categories.id')
                                    ->join('internshipperiods', 'internships.internshipPeriod_id', '=', 'internshipperiods.id')
                                    ->where('internships.company_id', $id)
                                    ->where('applications.id', $application)
                                    ->select('internships.title as internshipTitle', 'internships.description', 'users.firstName', 'users.lastName', 'students.mobile', 'students.LinkedIn', 'students.portfolio', 'students.biography', 'applications.motivation', 'applications.label', 'applications.id as applicationId', 'categories.title as categoryTitle', 'internshipperiods.title as internshipPeriodTitle')
                                    ->get();
        //dd($data);                            
        return view('company.application', $data);
    }
    
}
