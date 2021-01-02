@extends('layouts/appli')


@section('content')
{{-- update profile maar kan rechtstreeks op profiel (apart component) --}}
    <h1>Update your profile</h1>
    <form method="post" action="/student/update/{{ $users->id }}"> 
    {{ csrf_field() }}
    
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" name="_method" value="PUT" />
        

        <div class="form-group">
            <label for="mobile">Mobile phone number</label>
            <input value="{{ old('mobile') }}" type="tel" class="form-control" id="name" name="mobile" >
        </div>

        <button type="submit" class="btn btn-primary">Update profile</button>

    </form>
@endsection