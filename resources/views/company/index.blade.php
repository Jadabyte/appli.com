@extends('layouts/appli')

@section('title')
    Company
@endsection
@section('content')

    @component('components/general/navigation')@endcomponent


    <h1 class="headerOne">Overview of students looking for an internship</h1>
<section class="gridView" style="margin-bottom:20%;">
    @foreach ($users as $u)
    <div class="row d-flex d-sm-flex justify-content-center justify-content-sm-center">
        <div class="col-md-3">
            <div class="card border rounded shadow">
                <div class="card-body text-center">
                    <h3 class="card-title">{{$u->firstName}} {{$u->lastName}}</h3>
                    @isset($u->student)
                    <button class="btn btn-light btn-block moreButton" style="text-transform:capitalize" type="button">
                        <a href="/student/{{$u->student->id}}" style="color:#EAEAEA;">More</a></button>
                    @endisset
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
    @component('components/general/footer')@endcomponent
@endsection

