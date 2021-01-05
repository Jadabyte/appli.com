@extends('layouts/appli')
@section('title')
    Profile
@endsection

@section('content')

    @component('components/general/navigation')@endcomponent



<div class="container profile profile-view" id="profile">
    <h3 class="headerThree" style="margin-top:2%">Information</h3>
        <div class="profileForm" style="margin-top:30%">
    <form class="profileContainer" method="post" action="/student/create" enctype="multipart/form-data">
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
                <div class="form-row" style="margin-top:-5%">
                    <div class="col">
                        <div class="form-group" style="color:#011C3A;">
                            <label for="firstName" class="profileFieldLabel">Firstname</label>
                            <input class="form-control profileGroup" type="text" name="firstName" placeholder="Firstname" value="{{ $user->firstName }}">
                        </div>
                        <div class="form-group" style="color: #011C3A;">
                            <label for="lastName" class="profileFieldLabel">Lastname</label>
                            <input class="form-control profileGroup" type="text" name="lastName" placeholder="Lastname" value="{{ $user->lastName }}">
                        </div>
                        <div class="form-group" style="color: #011C3A;">
                            <label for="mobile" class="profileFieldLabel">Mobile phone</label>
                            <input class="form-control profileGroup" type="tel" name="mobile" placeholder="Mobile phone" value="@isset($user->student->mobile){{ $user->student->mobile }}@else{{ old('mobile') }}@endisset">
                        </div>
                    </div>

                    <div class="col">
                        <div class="avatar">
                            <div class="avatar-bg center" style="margin-left:35%;"></div>
                                <div style="margin-top:1%; color: #011C3A;">
                                    <label for="picture" class="profileFieldLabel">Profile picture</label>
                                    <input type="file" class="form-control" name="picture" style="color: #011C3A;" aria-describedby="fileHelp">
                                    <p class="infoSearch" id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label for="biography" class="profileFieldLabel">Biography</label>
                                <input class="form-control profileGroup" type="text" name="biography" placeholder="Biography"@isset($user->student->biography){{ $user->student->biography }}@else{{ old('biography') }}@endisset>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label for="portfolio" class="profileFieldLabel">Portfolio website</label>
                                <input class="form-control profileGroup" type="url" name="portfolio" placeholder="Portfolio link" value="@isset($user->student->portfolio){{ $user->student->portfolio }}@else{{ old('portfolio') }}@endisset">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label for="linkedin" class="profileFieldLabel">LinkedIn</label>
                                <input class="form-control profileGroup" type="url" name="linkedin" placeholder="LinkedIn" value="@isset($user->student->LinkedIn){{ $user->student->LinkedIn }}@else{{ old('linkedin') }}@endisset">
                            </div>
                        </div>
                    </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group" style="color: #011C3A;">
                            <label for="category" class="profileFieldLabel">Category</label>
                            <form class="form-inline">
                                <div class="form-group">
                                @foreach ($categories as $category)
                                    <option @if(!empty($user->student->category_id) && $category->id === $user->student->category_id){{ 'selected' }}@endif value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                                    <select class="form-control descInput" >
                                        <option>Choose</option>
                                        <option>Designer</option>
                                        <option>Developer</option>
                                        <option>Hybrid</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <div class="form-row" style="text-align:right;">
                <div class="col offset-xl-0">
                    <button class="btn btn-primary btnDeclined" type="button" style="margin-right:-6%;">Cancel</button>
                    <button class="btn btn-primary btnApproved" type="button" style="margin-right:5%;">Save</button>
                </div>
            </div>
        </form>
        </div>

    {{-- <h3 class="headerThree">Accountdetails</h3>
        <div class="profileForm" style="margin-top:17.5%">
            <form class="profileContainer" method="post" action="" style="margin-top:0%;">
        @csrf

        <div class="form-row" style="margin-top:-10%">
            <div class="col">
                <div class="form-group" style="color: #011C3A;">
                    <label for="firstName" class="profileFieldLabel">Firstname</label>
                    <input class="form-control profileGroup" type="text" name="firstName" placeholder="Firstname" value="{{ $user->firstName }}">
                </div>
            </div>

            <div class="col">
                <div class="form-group" style="color: #011C3A;">
                    <label for="lastName" class="profileFieldLabel">Lastname</label>
                    <input class="form-control profileGroup" type="text" name="lastName" placeholder="Lastname" value="{{ $user->lastName }}">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                <div class="form-group" style="color: #011C3A;">
                    <label for="email" class="profileFieldLabel">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Email" value="{{ $user->email }}">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                <div class="form-group" style="color: #011C3A;">
                    <label for="password" class="profileFieldLabel">Password</label>
                    <input class="form-control profileGroup" type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="col">
                <div class="form-group" style="color: #011C3A;">
                    <label for="password_confirmation" class="profileFieldLabel">Confirm Password</label>
                    <input class="form-control profileGroup" type="password" name="password_confirmation" placeholder="Confirm password">
                </div>
            </div>
        </div>
        <div class="form-row" style="text-align:right;">
            <div class="col offset-xl-0">
                <button class="btn btn-primary btnDeclined" type="button" style="margin-right:-6%;">Cancel</button>
                <button class="btn btn-primary btnApproved" type="submit" style="margin-right:5%;">Save</button>
            </div>
        </div>
    </form>
</div>
@isset($user->student)
    <h3 class="headerThree">Github Repository</h3>
    <form class="profileContainer" method="post" action="/student/github" enctype="multipart/form-data">
        @csrf
        <div class="form-row" style="margi-top:-10%">
        <div class="col">
            <label for="github">Github username</label>
            <input class="form-control" type="text" name="github" placeholder="Github username" value="@isset($user->student->github){{ $user->student->github }}@else{{ old('github') }}@endisset">
        </div>
        </div>
        <button class="btn btn-primary" type="submit">Show repo's</button>
    </form>

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
@endisset --}}
@endsection
