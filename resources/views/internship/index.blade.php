@extends('layouts/appli')

@section('title')
    Possible Internships
@endsection

@section('content')
<section style="background-color: #EDEFF0;">
    <h2 style="color:#EDBD16; text-align:center; padding-top:5%; font-size:28px;">Here you can find all the internships you can image. </h2>
    <h5>Use the filters to find your perfect match! </h5>
    @component('components/filterStudent')@endcomponent

    @foreach ($internships as $internship)
    <h3 style="margin-left:25%; font-size:20px;" margin-top="1%;"><a href="/internship/{{$internship->id}}" style="color:#011C3A; ">{{$internship->title}}</a></h3>
    @endforeach

</section>
@endsection
