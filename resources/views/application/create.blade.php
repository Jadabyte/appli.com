@extends('layouts/appli')

@section('title')
    Create application
@endsection

@section('content')

    @component('components/general/navigation')@endcomponent

    <div class="container" style="margin-bottom: 10%">
        <h1 class="headerOne">Create application</h1>
        <h2 class="headerTwo">{{ $internship->title . ' of ' . $internship->company->name}}</h2>
        <form method="post">
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
                <label for="motivation">Motivation</label>
                <textarea class="form-control" name="motivation" placeholder="Write an extensive motivation letter here" rows="30">@isset($application){{ $application->motivation }}@else{{ old('motivation') }}@endisset</textarea>
            </div>
            <button class="btn btn-primary btnApproved" style="text-transform:capitalize" type="submit">Send</button>
        </form>
    </div>
</div>
    @component('components/general/footer')@endcomponent
    @endsection
