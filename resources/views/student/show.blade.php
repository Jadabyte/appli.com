@extends('layouts/appli')

@section('title')
    Student {{$user['firstName']}}
@endsection
@section('content')
    @component('components/navigation')@endcomponent
    <section id="sectionDetail">
        <h1 class="headerOne">{{$user->firstName}} {{$user->lastName}}</h1>
        @empty(!$student->picture)
            <div class="profile-header-container">
                <div class="profile-header-img">
                    <img class="rounded mx-auto d-block" style="width:30%" src="{{ asset('storage/studentPictures/' . $student->picture) }}" />
                </div>
            </div>
        @endempty
        <div class="card-group">
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    <h4 class="card-title" id="headerFour">Biography</h4>
                    <p class="card-text" id="cardTextCompany">{{$student->biography}}</p>
                </div>
            </div>
        </div>
        <div class="card" id="cardContactCompany">
            <div class="card-body" id="contactContainer">
                <div class="media">
                    <div class="media-body">
                        <ul class="list-unstyled fa-ul" id="contactinfo">
                            <li><i class="fa fa-link fa-li"></i><a id="contactinfo" href='{{$student->portfolio}}'>{{$student->portfolio}}</a></li>
                            <li><i class="fa fa-linkedin-square fa-li"></i><a id="contactinfo" href='{{$student->LinkedIn}}'>{{$student->LinkedIn}}</a></li>
                            <li><i class="fa fa-envelope fa-li"></i><a id="contactinfo" href='mailto:{{$user->email}}'>{{$user->email}}</a></li>
                            <li><i class="fa fa-phone fa-li"></i><a id="contactinfo" href='tel:{{$student->mobile}}'>{{$student->mobile}}</a></li>
                        </ul>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
        @if(isset($repositories))
            <h2 class="headerTwo">Repositories of {{$user->firstName}}</h2>
            @foreach($repositories as $repo)
            <div class="card-group">
                        <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">{{$repo['name']}}</h3>
                                    <h4 class="card-title">{{$repo['description']}}</h4>
                                    <a href="{{$repo['svn_url']}}">Ga naar repository</a>
                                </div>
                        </div>
            </div>
            @endforeach
        @endif
    </section>

    @component('components/footer')@endcomponent
@endsection