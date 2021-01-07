@extends('layouts/appli')

@section('title')
    Company :name
@endsection
@section('content')

    @component('components/general/navigation')@endcomponent

    <h1 class="headerOne">Overview of students looking for an internship</h1>
    <p class="explainP">Filter thru our students based on category (designer, developer or hybrid) and/ or location.</p>

    @component('components/company/filters')@endcomponent

    @foreach ($users as $u)
    <div class="row d-flex d-sm-flex justify-content-center justify-content-sm-center">
        <div class="col-md-3">
            <div class="card border rounded shadow">
                <div class="card-body text-center">
                    <h3 class="card-title">{{$u->student->firstName}}{{$u->student->lastName}}</h3>
                    <p class="explanationParagraph">{{$u->student->biography}}</p>
                    <button class="btn btn-light btn-block moreButton" type="button">
                        <a href="/student/{{$u->student->id}}">More</a></button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @component('components/general/footer')@endcomponent
@endsection

