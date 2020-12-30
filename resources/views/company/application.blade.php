@extends('layouts/appli')

@section('title')
    Company :name
@endsection
@section('content')

    @component('components/navigation')@endcomponent

    <section id="sectionDetail">
        <h1 class="headerOne">Details application</h1>
        <div class="card-group">
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    <h4 class="card-title" id="headerFour">Internship</h4>
                    <p class="card-text" id="cardTextCompany">{{$info[0]->internshipTitle}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>Period:</strong> {{$info[0]->internshipPeriodTitle}}</p>
                    <p class="card-text" id="cardTextCompany">{{$info[0]->description}}</p>
                </div>
            </div>
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    <h4 class="card-title" id="headerFour">Student Info</h4>
                    <p class="card-text" id="cardTextCompany">{{$info[0]->firstName}} {{$info[0]->lastName}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>Mobile:</strong> {{$info[0]->mobile}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>LinkedIn:</strong> {{$info[0]->LinkedIn}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>Portfolio:</strong> {{$info[0]->portfolio}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>BIO:</strong> {{$info[0]->biography}}</p>
                    
                </div>
            </div>
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    <h4 class="card-title" id="headerFour">Extra</h4>
                    <p class="card-text" id="cardTextCompany"><strong>Category:</strong> {{$info[0]->categoryTitle}}</p>
           
                    <p class="card-text" id="cardTextCompany"><strong>Motivation:</strong> {{$info[0]->motivation}}</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Label</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-applicationId="{{$info[0]->applicationId}}">
                        <td>{{$info[0]->label}}</td>
                        <td>
                            <form class="form-inline" method="POST">
                            @csrf
                                <div class="form-group">
                                    <select id="label" name="label" class="form-control" >
                                        <option value="Starred">Starred</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Declined">Declined</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary btnSave" id="labelButton" type="submit">Save</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @component('components/footer')@endcomponent
@endsection