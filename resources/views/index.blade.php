@extends('layouts/appli')

@section('title')
    Homepagina
@endsection

@section('content')
<img class="indexImage" src="/applibranding/logoAppli.svg">
    <h1 class="headerOne">Welcome to Appli</h1>
    <div class="indexContainer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="indexLogin">
                        <a class="indexLoginLink" href="login">
                            <p class="indexLoginLinkP">Login here</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="indexRegister">
                        <a class="indexRegisterLink" href="register">
                            <p class="indexRegisterLinkP">Register here</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@component('components/footer')@endcomponent

@endsection
