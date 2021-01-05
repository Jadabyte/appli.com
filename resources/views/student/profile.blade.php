@extends('layouts/appli')
@section('title')
    Profile
@endsection

@section('content')

    @component('components/general/navigation')@endcomponent

<div class="container profile profile-view" id="profile">
    <h1 class="headerOne">Profile</h1>
    <h2 class="headerTwo">Student</h2>
    <form method="post" action="/student/create" enctype="multipart/form-data">
        @csrf
        @if( $flash = session('message') )
            <div class="alert alert-success">{{ $flash }}</div>
        @endif

        @if( $flash = session('error') )
            <div class="alert alert-danger">{{ $flash }}</div>
        @endif

        @if( $errors->any())
            <ul class="alert alert-danger">
            @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
            </ul>
        @endif

        @isset($user->student->picture)
        <div class="profile-header-container">
            <div class="profile-header-img">
                <img class="rounded mx-auto d-block" style="width:30%" src="{{ asset('storage/studentPictures/' . $user->student->picture) }}" />
            </div>
        </div>
        @endisset

        @component('components/student/information')@endcomponent
    </form>

    <section style="margin-top:65%;">
    <h3 class="headerThree">Accountdetails</h3>
    <form class="profileContainer" method="post" action="" style="margin-top:0%;">
        @csrf

        @component('components/student/accountdetails')@endcomponent
    </form>
</div>
</section>

@isset($user->student)
    <section style="margin-top:40%;">
        <h3 class="headerThree">Github Repository</h3>
            <div class="profileForm" style="margin-top:12.5%">
                <form class="profileContainer" method="post" action="/student/github" style="margin-top:0%;" enctype="multipart/form-data">
                    @csrf
                    @component('components/student/github')@endcomponent
                </form>
            </div>
    </section>

    @isset($repositories)
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
    @endisset
@endisset
@component('components/general/footer')@endcomponent
@endsection
