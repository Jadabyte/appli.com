@extends('layouts/appli')

@section('title')
    Possible Internships
@endsection

@section('content')
<h2 style="font-size: 24px; color:#ffffff;">Here you can find all the internships you can image. </h2>
{{-- <h5>Use the filters to find your perfect match! </h5>
@component('components/filterStudent')@endcomponent --}}

@foreach ($internships as $internship)
<h3><a href="/internship/{{$internship->id}}">{{$internship->title}}</a></h3>

@endforeach

{{-- <div class="container" style="margin-top:2.5%;">
    <div class="row">
      <div class="col-sm card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">UX/UI Designer</h5>
            <h6 class="card-subtitle mb-2 text-muted">Intracto</h6>
            <p class="card-text">We’re e looking for students who want to learn, grow, and take a giant step early in their career, all while making a giant impact. Additionally, interns will have access to LinkedIn Learning online to further grow their careers with us!</p>
            <a href="#" class="card-link">Explore</a>
        </div>
    </div>
    <div class="col-sm card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Fullstack Developer</h5>
            <h6 class="card-subtitle mb-2 text-muted">Capgemini N.V./S.A.</h6>
            <p class="card-text">You are data-driven and like to base discussions on the merits of data as opposed to personal bias. You like to coach individuals and help them accomplish their own career goals. Fluent in English is a plus.</p>
            <a href="#" class="card-link">Explore</a>
        </div>
    </div>
    <div class="col-sm card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">PHP / Laravel developer</h5>
            <h6 class="card-subtitle mb-2 text-muted">Springbok</h6>
            <p class="card-text"> The person we are looking for should be fluent in English, hard-working, have a strong willingness to be proficient with PHP, SQL, and have the ability to communicate within a team environment. Experience with Laravel is a plus.</p>
            <a href="#" class="card-link">Explore</a>
        </div>
    </div>
</div> --}}
@endsection
