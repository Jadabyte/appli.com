@extends('layouts/appli')

@section('title')
    Company :name
@endsection
@section('content')
    @component('components/general/navigation')@endcomponent

    <section id="sectionDetail">
        <h1 class="headerOne">{{$company->name}}</h1>
        @empty(!$company->logo)
            <div class="profile-header-container">
                <div class="profile-header-img">
                    <img class="rounded mx-auto d-block" style="width:10%" src="{{ asset('storage/companylogos/' . $company->logo) }}" />
                </div>
            </div>
        @endempty
        <div class="card-group">
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    <h4 class="card-title" id="headerFour">Bio</h4>
                    <p class="card-text" id="cardTextCompany">{{$company->description}}</p>
                </div>
            </div>
        </div>
        <div class="card" id="cardContactCompany">
            <div class="card-body" id="contactContainer">
                <div class="media">
                    <div class="media-body">
                        <ul class="list-unstyled fa-ul" id="contactinfo">
                            <li><i class="fa fa-link fa-li"></i><a id="contactinfo" href='{{$company->website}}'>{{$company->website}}</a></li>
                            <li><i class="fa fa-linkedin-square fa-li"></i><a id="contactinfo" href='{{$company->LinkedIn}}'>{{$company->LinkedIn}}</a></li>
                            <li><i class="fa fa-envelope fa-li"></i><a id="contactinfo" href='mailto:{{$company->mail}}'>{{$company->mail}}</a></li>
                            <li><i class="fa fa-phone fa-li"></i><a id="contactinfo" href='tel:{{$company->telephone}}'>{{$company->telephone}}</a></li>
                            <li><i class="fa fa-location-arrow  fa-li"></i><a id="contactinfo" href='https://maps.google.com/maps?q={{$company->street}}+{{$company->houseNumber}}+{{$company->postalCode}}+{{$company->city}}'>{{$company->street}} {{$company->houseNumber}}, @if($company->pobox > 0)PO Box {{$company->pobox}},@endif {{$company->postalCode}} {{$company->city}}</a></li>
                            <li><i class="fa fa-train fa-li" id="contactinfo"></i>Public transport score: {{ $score }}/10</li>
                        </ul>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </section>

    @component('components/general/footer')@endcomponent
@endsection
