@extends('layouts/appli')

@section('title')
    Login
@endsection

@section('content')

<!-- Start: Login Form Dark -->
<div class="login-dark">
    <img class="img-fluid logo" src="/applibranding/logoAppli.svg?h=60d8998b2af02b7c83c7ce77b565694b" loading="lazy">

    <form method="post" style="height: 550;">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration">
            <i class="icon ion-ios-locked-outline"></i>
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group" id="form-button-group">
            <button class="btn btn-primary btn-block btn" id="button" type="submit">Log In</button>
        </div>

        <a class="forgot" href="#">Forgot your email or password?</a>

        <a class="forgot studentreg" href="registerStudent">New student? Go to register for students</a>
        <a class="forgot" href="registerCompany" style="width: 251px;text-align: center;">New company? Go to register for companies</a>
    </form>
</div>
<!-- End: Login Form Dark -->
@endsection
