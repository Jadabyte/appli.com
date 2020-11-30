@extends('layouts/appli')

@section('title')
    Company :name
@endsection
@section('content')
    @component('components/navigation')@endcomponent
    <section id="sectionDetail">
        <h1 class="headerOne">Company</h1>
        <div class="card-group">
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    <h4 class="card-title" id="headerFour">Bio</h4>
                    <p class="card-text" id="cardTextCompany">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    <h4 class="card-title" id="headerFour">Description</h4>
                    <p class="card-text" id="cardTextCompany">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
        <div class="card" id="cardContactCompany">
            <div class="card-body" id="contactContainer">
                <div class="media">
                    <div class="media-body">
                        <ul class="list-unstyled fa-ul" id="contactinfo">
                            <li><i class="fa fa-user fa-li"></i><a id="contactinfo" href="#">Company</a></li>
                            <li><i class="fa fa-envelope fa-li"></i><a id="contactinfo" href="#">james.doe@gmail.com </a></li>
                            <li><i class="fa fa-phone fa-li" id="contactinfo"></i>(555) 555-5555</li>
                            <li><i class="fa fa-location-arrow fa-li" id="contactinfo"></i>Location</li>
                        </ul>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </section>
    @component('components/footer')@endcomponent
@endsection
