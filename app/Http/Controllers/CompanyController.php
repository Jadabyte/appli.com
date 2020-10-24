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
        $users = DB::table('users')->get();
        return view('company.index', ['companies' => $companies, 'users' => $users]);
    }

    public function register(){

        return view('registerCompany');
    }

    public function login(){

    }

    public function detail($id){

        $company = DB::table('companies')->where('id', $id)->first();

        $street = $company->street;
        $city = $company->city;
        $houseNumber = $company->house_number;
        $postalCode = $company->postal_code;

        $location = Http::withToken('eyJhbGciOiJSUzUxMiIsImN0eSI6IkpXVCIsImlzcyI6IkhFUkUiLCJhaWQiOiJzOW5uNzg3eW1pdUgwR0d5Rm50cSIsImlhdCI6MTYwMzU2NTg2MiwiZXhwIjoxNjAzNjUyMjYyLCJraWQiOiJqMSJ9.ZXlKaGJHY2lPaUprYVhJaUxDSmxibU1pT2lKQk1qVTJRMEpETFVoVE5URXlJbjAuLnZHQWl2SHIwd0xla3JDQ0M0RWJEWUEuQUJPYkhNMlZUUmljRkdXOHVka1pnc3ZjU1J2WlhtcHA2N25uYXZHM21zYW9tM0dtaXB0UEx3UExpOFFQRnRIYVRqT2ZLVTFkRG12RTctYzMtNHh3cmg5cWxPWGFhQ1lUc283c0VmRHVpemVxT0xSMFJYdk0yajlvb25Ob0pmNWRic0RlOVlRSHJ6ajBPeXhENENiUHNRLm10VDBCb1RjVkd3ZnVjWWNrMDNFX0Q1NlpvWXhnMC1QTzN6czlTREdXX2c.Q3FrJ409krQxOUmXy3vblQ1QhUVxPWsJOgDBt6FF3jVlr3ahGQqyfY63xHiWZf3cbw4wcdUA9lvq-0eHlpfDJUNc60o2FUND2z0V0Fa70PRKk9ia6HMoOzR2ONCYysal92H4r_UYXduBq8e4EniDGngibJV41jzNWWDtvMemfvVa4mf2wcaKUSOkRMbZaGqoSiVMs4HK0_ip3mGTSafIVBeNDyxR13A7C3KHfaWgvm1kB-yRFX1oJprY_4K_sj0zUqbxd73pJJ6Oey5CToVmqASHMC7-E1NEI3wkw0tKAvTyvDErxYXypotA2ikuE6ftiF08wHLNFNjbFtzt-iAWug')->get('https://geocode.search.hereapi.com/v1/geocode?q=' . $street . '+' . $houseNumber . '%2C+' . $postalCode . '+' . $city);
        $lat = $location->json()['items'][0]['position']['lat'];
        $lng = $location->json()['items'][0]['position']['lng'];

        $stations = Http::withToken('eyJhbGciOiJSUzUxMiIsImN0eSI6IkpXVCIsImlzcyI6IkhFUkUiLCJhaWQiOiJzOW5uNzg3eW1pdUgwR0d5Rm50cSIsImlhdCI6MTYwMzU2NTg2MiwiZXhwIjoxNjAzNjUyMjYyLCJraWQiOiJqMSJ9.ZXlKaGJHY2lPaUprYVhJaUxDSmxibU1pT2lKQk1qVTJRMEpETFVoVE5URXlJbjAuLnZHQWl2SHIwd0xla3JDQ0M0RWJEWUEuQUJPYkhNMlZUUmljRkdXOHVka1pnc3ZjU1J2WlhtcHA2N25uYXZHM21zYW9tM0dtaXB0UEx3UExpOFFQRnRIYVRqT2ZLVTFkRG12RTctYzMtNHh3cmg5cWxPWGFhQ1lUc283c0VmRHVpemVxT0xSMFJYdk0yajlvb25Ob0pmNWRic0RlOVlRSHJ6ajBPeXhENENiUHNRLm10VDBCb1RjVkd3ZnVjWWNrMDNFX0Q1NlpvWXhnMC1QTzN6czlTREdXX2c.Q3FrJ409krQxOUmXy3vblQ1QhUVxPWsJOgDBt6FF3jVlr3ahGQqyfY63xHiWZf3cbw4wcdUA9lvq-0eHlpfDJUNc60o2FUND2z0V0Fa70PRKk9ia6HMoOzR2ONCYysal92H4r_UYXduBq8e4EniDGngibJV41jzNWWDtvMemfvVa4mf2wcaKUSOkRMbZaGqoSiVMs4HK0_ip3mGTSafIVBeNDyxR13A7C3KHfaWgvm1kB-yRFX1oJprY_4K_sj0zUqbxd73pJJ6Oey5CToVmqASHMC7-E1NEI3wkw0tKAvTyvDErxYXypotA2ikuE6ftiF08wHLNFNjbFtzt-iAWug')->get('https://transit.hereapi.com/v8/stations?in=' . $lat. ',' . $lng . ';r=2000&maxPlaces=10');

        $score = count($stations->json()['stations']);

        return view('company.detail', ['companies' => Company::findOrFail($id), 'score' => $score]);
    }

    public function create(){
        return view('company/create');
    }

    public function detail($id){
        return view('company/show', ['companies' => Company::findOrFail($id)]);
    }

    public function show(){
        return view('components/showApplicationsFromStudents');
    }
}
