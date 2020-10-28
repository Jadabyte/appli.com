@extends('layouts/appli')
<form id="createForm" method="POST" action="">
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
    <div class="form-group" id="createFormGroup">
        <label for="title">Internship title</label>
        <input class="form-control item" type="text" id="title" placeholder="Title internship" value="{{old('title')}}">
    </div>

    <div class="form-group" id="createFormGroup">
        <label for="description">Description of internship</label>
        <textarea class="form-control descInput" rows="10" placeholder="Description of internship" value="{{old('description')}}"></textarea>
    </div>

    <div class="form-group dropdown" id="createFormGroup">
        <form class="form-inline">
            <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control descInput" placeholder="Category" value="{{old('category')}}">
                <option>Choose</option>
                <option>Design</option>
                <option>Development</option>
                <option>Hybrid</option>
            </select>
            </div>
        </form>
    </div>
    <div class="form-group dropdown" id="createFormGroup">
        <form class="form-inline">
            <div class="form-group">
            <label for="internshipPeriod_id">Timeperiod</label>
            <select class="form-control descInput" placeholder="Timeperiod" value="{{old('internshipPeriod_id')}}">
                <option>Choose</option>
                <option>First trimester</option>
                <option>Second trimester</option>
                <option>One year</option>
            </select>
            </div>
        </form>
    </div>
    <div class="form-group dropdown" id="createFormGroup">
        <form class="form-inline">
            <div class="form-group">
            <label for="skills">Required skills for internship</label>
            <select multiple class="form-control descInput" id="multipleDrop" placeholder="Skills" value="{{old('requirements')}}">
                <option>Skills</option>
                <option>Laravel</option>
                <option>Linux</option>
                <option>PHP</option>
                <option>CSS</option>
                <option>HTML</option>
                <option>Javascript</option>
                <option>NodeJS</option>
                <option>Sass</option>
                <option>ASP.NET Core</option>
                <option>React</option>
                <option>JSON</option>
                <option>API's</option>
                <option>Git</option>
                <option>GitHub</option>
                <option>VueJS</option>
                <option>Websockets</option>
                <option>Gulp</option>
                <option>Parcel</option>
                <option>Babel</option>
                <option>Java</option>
                <option>MongoDB</option>
                <option>CMS</option>
                <option>Drupal</option>
                <option>Arduino</option>
                <option>Information Architecture</option>
                <option>User Interface Design</option>
                <option>User Experience</option>
                <option>Sketch</option>
                <option>Procreate</option>
                <option>Adobe Illustrator</option>
                <option>Adobe Photoshop</option>
                <option>Adobe Indesign</option>
                <option>Adobe Premiere Pro</option>
                <option>Adobe XD</option>
                <option>Wonda</option>
                <option>Kanban</option>
                <option>SCRUM</option>
                <option>Agile</option>
                <option>Trello</option>
            </select>
            </div>
        </form>
    </div>

    <div class="form-group dropdown" id="createFormGroup">
        <form class="form-inline">
            <div class="form-group">
            <label for="availability">Internship is available</label>
            <select  class="form-control descInput" placeholder="Availability" value="{{old('availability')}}">
                <option value="available" selected>Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
            </div>
        </form>
    <button class="btn btn-primary btn-block" id="buttonCreate" type="submit" style="margin-left:10%">Add internship</button></div>
</form>

<script src="js/script.min.js"></script>
