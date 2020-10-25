@extends('layouts/appli')

@section('title')
    Login
@endsection

@section('content')
    <!-- Start: Registration Form with Photo -->
    <div class="register-photo">
        <img id="logoregisterpage" class="image-fluid logo" src="/applibranding/logoAppli.svg?h=60d8998b2af02b7c83c7ce77b565694b">
        <!-- Start: Form Container -->
        <div class="form-container">
            <form method="post" action="">
                @csrf
                <h2 class="text-center"><strong>Register</strong></h2>
                <div class="form-group">
                    <label for="firstName">First name</label>
                    <input class="form-control" type="password" name="firstName" placeholder="Firstname">
                </div>
                <div class="form-group">
                    <label for="lastName">Last name</label>
                    <input class="form-control" type="password" name="lastName" placeholder="Lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Email" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="isStudent" name="isStudent" value="isStudent">I am a student.</label>
                        </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" id="registerbutton" type="submit">Register</button>
                </div>
                <a id="already" class="already" href="login">You already have an account? Login here.</a>
            </form>
        </div>
        <!-- End: Form Container -->
    </div>
    <!-- End: Registration Form with Photo -->
@endsection

