@extends('layouts/detailpage')

@section('title')
    {{$internships->title}}
@endsection

@section('content')
<section id="sectionDetail">
    <h1 class="headerOne">Internship</h1>
    <div class="internGroup">
        <div class="card" id="internshipCard">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Title</h4>
                    <p class="card-text"><a href="/internship/{{$internships->id}}">{{$internships->title}}</a></p>
            </div>
        </div>
        <div class="card" id="internshipCard">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Description</h4>
                    <p class="card-text"><a href="/internship/{{$internships->id}}">{{$internships->description}}</a></p>
            </div>
        </div>
        <div class="card" id="internshipCard">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Category</h4>
                    <p class="card-text"><a href="/internship/{{$internships->id}}">{{$internships->category_id}}</a></p>
            </div>
        </div>
        <div class="card" id="internshipCard">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Skills</h4>
                    <p class="card-text"><a href="/internship/{{$internships->id}}">{{$internships->skills_id}}</a></p>
            </div>
        </div>
        <div class="card" id="internshipCard">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Timeperiod</h4>
                    <p class="card-text"><a href="/internship/{{$internships->id}}">{{$internships->internshipPeriod_id}}</a></p>
            </div>
        </div>

        <div class="card" id="internshipCard">
            <div class="card-body" id="contactContainer">
                <div class="media">
                    <div class="media-body">
                        <ul class="list-unstyled fa-ul" id="contactinfo-1">
                            <li><i class="fa fa-user fa-li"></i><a id="contactinfo-2" href="#">Company</a></li>
                            <li><i class="fa fa-envelope fa-li"></i><a id="contactinfo-3" href="#">james.doe@gmail.com </a></li>
                            <li><i class="fa fa-phone fa-li" id="contactinfo-4"></i>(555) 555-5555</li>
                            <li><i class="fa fa-phone fa-li" id="contactinfo-5"></i>Location</li>
                        </ul>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    <button class="btn btn-primary btn" id="createBtn" type="button">Apply</button>
</section>

@endsection
