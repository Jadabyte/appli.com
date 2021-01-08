@extends('layouts/appli')

@section('title')
    Login
@endsection

@section('content')

    <div class="login-dark" style="margin-bottom:10%">
        <img class="img-fluid logo" src="/applibranding/logoAppli.svg?h=60d8998b2af02b7c83c7ce77b565694b" loading="lazy">
        <form method="post" action="" class="formLogin">
            <h1 class="text-center headerTwo">Login</h1>

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
            <div class="form-group" id="form-button-group" style="margin-top:12.5%;">
                <button class="btn btn-primary btn-block btn" style="text-transform:capitalize" id="registerbutton" type="submit">Log in</button>
            </div>
            <div style="margin-top:10%;">
                <a id="already" class="forgot" href="register">New here? Go to register page.</a>
            </div>

        </form>
    </div>
    @component('components/general/footer')@endcomponent
@endsection
