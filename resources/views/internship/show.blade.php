@extends('layouts/detailpage')

@section('title')
    {{$internship->title}}
@endsection

@section('content')
<section id="sectionDetail">
    <h1 class="headerOne">Internship</h1>
    <div class="internGroup">
        <div class="card" id="internshipCard">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Title</h4>
                    <p class="card-text"><a href="/internship/{{$internship->id}}">{{$internship->title}}</a></p>
            </div>
        </div>
        <div class="card" id="internshipCard">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Description</h4>
                    <p class="card-text"><a href="/internship/{{$internship->id}}">{{$internship->description}}</a></p>
            </div>
        </div>
        <!--
        <div class="card" id="internshipCard">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Category</h4>
                    <p class="card-text"><a href="/internship/{{$internship->id}}">{{$internship->category_id}}</a></p>
            </div>
        </div>
        <div class="card" id="internshipCard">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Skills</h4>
                    <p class="card-text"><a href="/internship/{{$internship->id}}">{{$internship->skills_id}}</a></p>
            </div>
        </div>
        <div class="card" id="internshipCard">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Timeperiod</h4>
                    <p class="card-text"><a href="/internship/{{$internship->id}}">{{$internship->internshipPeriod_id}}</a></p>
            </div>
        </div>-->

        <div class="card" id="internshipCard">
            <div class="card-body" id="contactContainer">
                <div class="media">
                    <div class="media-body">
                        <ul class="list-unstyled fa-ul" id="contactinfo-1">
                            <li><i class="fa fa-user fa-li"></i><a id="contactinfo-2" href="/company/{{ $internship->company->id }}">{{ $internship->company->name }}</a></li>
                            <li><i class="fa fa-envelope fa-li"></i><a id="contactinfo-3" href="#">{{ $internship->company->mail }}</a></li>
                            <li><i class="fa fa-phone fa-li" id="contactinfo-4"></i>{{ $internship->company->telephone }}</li>
                            <li><i class="fa fa-phone fa-li" id="contactinfo-5"></i>{{$internship->company->street}} {{$internship->company->houseNumber}}, @if($internship->company->pobox > 0)PO Box {{$internship->company->pobox}},@endif {{$internship->company->postalCode}} {{$internship->company->city}}</li>
                        </ul>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    <button class="btn btn-primary btn" id="createBtn" type="button">Apply</button>
</section>

@endsection
