@extends('layouts/appli')

@section('title')
    Register
@endsection

@section('content')
<div class="registerDiv">
    <div class="login-dark">
        <img class="img-fluid logo" src="/applibranding/logoAppli.svg?h=60d8998b2af02b7c83c7ce77b565694b" loading="lazy" id="logoRegister">
        <div class="form-container">
            <form class="formRegister" method="post" action="">
                <h2 class="text-center headerTwo">Create a new account</h2>

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

            <div class="form-group">
                <label for="firstName">Firstname</label>
                <input class="form-control" type="text" name="firstName" placeholder="Firstname" value="{{ old('firstName') }}">
            </div>
            <div class="form-group">
                <label for="lastName">Lastname</label>
                <input class="form-control" type="text" name="lastName" placeholder="Lastname" value="{{ old('lastName') }}">
            </div>
            <div class="form-group">
                <label for="email" aria-describedby="emailHelp">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                <small id="emailHelp" class="form-text text-muted">You can only use an email address from Thomas More.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="isStudent" value="1" id="isStudent">
                    <span>I am a student.</span>
                </label>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" id="registerbutton" type="submit">Register</button>
            </div>

            <a id="already" class="already" href="login">You already have an account? Login here.</a>
        </form>
    </div>
</div>
@component('components/general/footer')@endcomponent
@endsection
