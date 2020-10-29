@extends('layouts/detailpage')

@section('title')
    {{$internships->title}}
@endsection

@section('content')
<section id="sectionDetail">
    <h1 id="h1" class="nameStudent">Internship</h1>
    <div class="card-group">
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Title</h4>
                    <p><a href="/internship/{{$internships->id}}">{{$internships->title}}</a></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Description</h4>
                    <p><a href="/internship/{{$internships->id}}">{{$internships->description}}</a></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Category</h4>
                    <p><a href="/internship/{{$internships->id}}">{{$internships->category_id}}</a></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Skills</h4>
                    <p><a href="/internship/{{$internships->id}}">{{$internships->skills_id}}</a></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Timeperiod</h4>
                    <p><a href="/internship/{{$internships->id}}">{{$internships->internshipPeriod_id}}</a></p>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" id="buttonCreate" type="submit">Apply</button>
        </div>

{{-- <div class="card">
        <div class="card-body" id="contactContainer">
            <div class="media">
                <div class="media-body">
                    <ul class="list-unstyled fa-ul" id="contactinfo">
                        <li>
                            <i class="fa fa-user fa-li"></i>
                            <div id="contactinfo">
                                <p><a href="/company/{{$companies->id}}">{{$companies->name}}</a></p>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-li"></i>
                            <div id="contactinfo">
                                <p><a href="/company/{{$companies->id}}">{{$companies->mail}}</a></p>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-phone fa-li"></i>
                            <div id="contactinfo">
                                <p><a href="/company/{{$companies->id}}">{{$companies->telephone}}</a></p>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-map fa-li"></i>
                            <div id="contactinfo">
                                <p><a href="/company/{{$companies->id}}">{{$companies->city}}</a></p>
                            </div>
                        </li>
                </div>
            </div>
        </div> --}}
</div>

</section>

@endsection
