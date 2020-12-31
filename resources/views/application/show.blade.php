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
                    <p class="card-text" id="cardTextCompany">
                    @isset($user->company)
                    {{$info->internshipTitle}}
                    @endisset
                    @isset($user->student)
                    {{$info->internship->title}}
                    @endisset
                    </p>
                    <p class="card-text" id="cardTextCompany"><strong>Period:</strong>
                    @isset($user->company)
                    {{$info->internshipPeriodTitle}}
                    @endisset
                    @isset($user->student)
                    {{$info->internship->internshipPeriod->title}}
                    @endisset</p>
                    <p class="card-text" id="cardTextCompany">
                    @isset($user->company)
                    {{$info->description}}
                    @endisset
                    @isset($user->student)
                    {{$info->internship->description}}
                    @endisset
                    </p>
                    @isset($user->company)
                    <a class="btn btn-primary" href="/internship/{{$info->internshipsId}}">More info</a>
                    @endisset
                    @isset($user->student)
                    <a class="btn btn-primary" href="/internship/{{$info->internship->id}}">More info</a>
                    @endisset
                </div>
            </div>
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    <h4 class="card-title" id="headerFour">Student Info</h4>
                    <p class="card-text" id="cardTextCompany">{{$info->firstName}} {{$info->lastName}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>Mobile:</strong> {{$info->mobile}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>LinkedIn:</strong> {{$info->LinkedIn}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>Portfolio:</strong> {{$info->portfolio}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>BIO:</strong> {{$info->biography}}</p>
                    <a class="btn btn-primary" href="/student/{{$info->studentsId}}">More info</a>
                </div>
            </div>
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    <h4 class="card-title" id="headerFour">Extra</h4>
                    <p class="card-text" id="cardTextCompany"><strong>Category:</strong> {{$info->categoryTitle}}</p>

                    <p class="card-text" id="cardTextCompany"><strong>Motivation:</strong> {{$info->motivation}}</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Label</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$info->label}}</td>
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
                </div>
            </div>
        </div>
    @component('components/footer')@endcomponent
@endsection
