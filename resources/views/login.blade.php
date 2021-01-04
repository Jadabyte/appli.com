@extends('layouts/appli')

@section('title')
    Login
@endsection

@section('content')

    <div class="login-dark">
        <img class="img-fluid logo" src="/applibranding/logoAppli.svg?h=60d8998b2af02b7c83c7ce77b565694b" loading="lazy">
        <form method="post" action="">
            <h2 class="text-center headerTwo">Login</h2>

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
                <input class="form-control" type="email" name="email" placeholder="Email" aria-describedby="emailHelp" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <button class="btn btn-primary btn-block" id="loginbutton" type="submit">Log in</button>
            <a id="already" class="already" href="register">New here? Go to register page.</a>
        </form>
    </div>
@component('components/general/footer')@endcomponent
@endsection
