{{-- LONG DETAILPAGE STUDENT--}}

@extends('layouts/appli')

@section('title')
    Company :name
@endsection
@section('content')
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Company :name</h3>
                    </div>
            </div>
@endsection

    <p>public transport score: {{ $score }}</p>
