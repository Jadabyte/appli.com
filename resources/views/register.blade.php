@extends('layouts/appli')

@section('title')
    Register
@endsection

@section('content')

    <div class="login-dark">
        <img class="image-fluid logo" src="/applibranding/logoAppli.svg?h=60d8998b2af02b7c83c7ce77b565694b">
        <div class="form-container">
            <form method="post" action="">
                @csrf
                <h2 class="text-center headerTwo"><strong>Register</strong></h2>
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
                <div class="form-group">
                    <label for="firstName">First name</label>
                    <input class="form-control" type="text" name="firstName" placeholder="Firstname" value="{{ old('firstName') }}">
                </div>
                <div class="form-group">
                    <label for="lastName">Last name</label>
                    <input class="form-control" type="text" name="lastName" placeholder="Lastname" value="{{ old('lastName') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Email" aria-describedby="emailHelp" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="isStudent" name="isStudent" value="isStudent">I am a student.</label>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" id="registerbutton" type="submit">Register</button>
                </div>
                <a id="already" class="already" href="login">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
@endsection
