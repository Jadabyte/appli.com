@extends('layouts/appli')

@section('title')
    Create new internship
@endsection
@section('content')
        <div class="card-group">
            <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Name</h3>
                        <input type="text">Enter name for internship
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Location</h3>
                        <input type="text">Enter location for internship
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Company</h3>
                        <input type="text">Enter name of company for internship
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Category</h3>
                        <input type="text">Enter category for internship
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Requirements</h3>
                        <input type="text">Enter requirements for internship
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Description</h3>
                        <input type="text">Enter description for internship
                    </div>
                    <div class="card-body">
                        <input type="button">Post to Appli so students can see it
                    </div>
            </div>
@endsection

