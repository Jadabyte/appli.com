@extends('layouts/appli')
@section('title')
    Profile
@endsection

@section('content')

    @component('components/navigation')@endcomponent

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

        <div class="form-row">
            <div class="col">
                <label for="picture">Picture</label>
                <input class="form-control" type="file" name="picture" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                <label for="mobile">Mobile</label>
                <input class="form-control" type="tel" name="mobile" placeholder="Mobile" value="@isset($user->student->mobile){{ $user->student->mobile }}@else{{ old('mobile') }}@endisset">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="biography">Biography</label>
                <textarea class="form-control" name="biography" placeholder="Biography">@isset($user->student->biography){{ $user->student->biography }}@else{{ old('biography') }}@endisset</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="portfolio">Portfolio</label>
                <input class="form-control" type="url" name="portfolio" placeholder="Portfolio link" value="@isset($user->student->portfolio){{ $user->student->portfolio }}@else{{ old('portfolio') }}@endisset">
            </div>
            <div class="col">
                <label for="linkedin">LinkedIn</label>
                <input class="form-control" type="url" name="linkedin" placeholder="LinkedIn" value="@isset($user->student->LinkedIn){{ $user->student->LinkedIn }}@else{{ old('linkedin') }}@endisset">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="category">Category</label>
                <select class="form-control" name="category">
                @foreach ($categories as $category)
                        <option @if(!empty($user->student->category_id) && $category->id === $user->student->category_id){{ 'selected' }}@endif value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
    <h2 class="headerTwo">User</h2>
    <form method="post" action="">
        @csrf

        <div class="form-row">
            <div class="col">
                <label for="firstName">First name</label>
                <input class="form-control" type="text" name="firstName" placeholder="First name" value="{{ $user->firstName }}">
            </div>
            <div class="col">
                <label for="lastName">Last name</label>
                <input class="form-control" type="text" name="lastName" placeholder="Last name" value="{{ $user->lastName }}">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Email" value="{{ $user->email }}">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="col">
                <label for="password_confirmation">Confirm password</label>
                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</div>

@component('components/footer')@endcomponent
@endsection