@extends('layouts/appli')

@section('title')
    Login
@endsection

@section('content')

<!-- Start: Login Form Dark -->
<div class="login-dark">
    <img class="img-fluid logo" src="/applibranding/logoAppli.svg?h=60d8998b2af02b7c83c7ce77b565694b" loading="lazy">

    <h2 class="headerTwo" style="margin-left:45%; margin-top:5%;">Login here</h2>

    <form method="post">
    @csrf
        <h2 class="sr-only">Login Form</h2>
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
        <div class="illustration">
            <i class="icon ion-ios-locked-outline"></i>
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group" id="form-button-group">
            <button class="btn btn-primary btn-block btn" id="button" type="submit">Log In</button>
        </div>

        <a class="forgot" href="register">New here? Go to register page.</a>
    </form>
</div>
<!-- End: Login Form Dark -->
@endsection
