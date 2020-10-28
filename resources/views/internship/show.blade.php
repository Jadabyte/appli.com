@extends('layouts/detailpage')

@section('title')
    Internship
@endsection

@section('content')
<section id="sectionDetail">
    <h1 id="h1" class="nameStudent">Internship</h1>
    <div class="card-group">
        <div class="card">
            <div class="card-body" id="card-body">
                @if($company->user_id)
                <h4 class="card-title" id="card-title">Title</h4>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Description</h4>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Category</h4>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
            </div>
        </div>
        <div class="card" id="card-title">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Requirements</h4>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
            </div>
        </div>
        <div class="card" id="card-title">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Period</h4>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
            </div>
        </div>
    </div>
    <!-- Start: User Information Panel - Lite + Secondary User (Pa -->
    <div class="card">
        <div class="card-body" id="contactContainer">
            <div class="media">
                <div class="media-body">
                    <ul class="list-unstyled fa-ul" id="contactinfo">
                        <li><i class="fa fa-user fa-li"></i><a id="contactinfo" href="#">Company</a></li>
                        <li><i class="fa fa-envelope fa-li"></i><a id="contactinfo" href="#">james.doe@gmail.com </a></li>
                        <li><i class="fa fa-phone fa-li" id="contactinfo"></i>(555) 555-5555</li>
                        <li><i class="fa fa-phone fa-li" id="contactinfo"></i>Location</li>
                    </ul>
                </div>
            </div>
            <div></div>
        </div>
    </div>
    <!-- End: User Information Panel - Lite + Secondary User (Pa -->
</section>
@endsection
