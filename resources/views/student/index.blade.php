@extends('layouts/detailpage')

@section('title')
    Internship
@endsection

@section('content')
    @component('components/student/filters')@endcomponent

    @foreach ($internships as $i)
        <div class="row d-flex d-sm-flex justify-content-center justify-content-sm-center">
            <div class="col-md-3">
                <div class="card border rounded shadow">
                    {{-- <div class="border rounded shadow">
                        <img class="img-fluid" src="{{ asset('storage/companylogos/' . $user->company->logo) }}">
                    </div> --}}
                    <div class="card-body text-center">
                        <h3 class="card-title">{{$i->title}}</h3>
                        <h4 class="card-title headerThree">{{$i->company->name}}</h4>
                        <p class="explanationParagraph">{{$i->description}}</p>
                        <button class="btn btn-light active btn-block moreButton" type="button">
                            <a href="/internship/{{$i->id}}">More</a>
                        </button>
                    </div>
                </div>
            </div>
    @endforeach

    @component('components/general/footer')@endcomponent
@endsection
