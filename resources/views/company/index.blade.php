@extends('layouts/appli')

@section('title')
    Company
@endsection
@section('content')

    @component('components/general/navigation')@endcomponent

    <h1 class="headerOne">Overview of students looking for an internship</h1>
<section>
    @foreach ($users as $u)
    <div class="row d-flex d-sm-flex justify-content-center justify-content-sm-center">
        <div class="col-md-3">
            <div class="card border rounded shadow">
                <div class="card-body text-center">
                    <h3 class="card-title">{{$u->firstName}}{{$u->lastName}}</h3>
                    <button class="btn btn-light btn-block moreButton" style="text-transform:capitalize" type="button">
                        <a href="/student/{{$u->id}}">More</a></button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
    @component('components/general/footer')@endcomponent
@endsection

