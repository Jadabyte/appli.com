@extends('layouts/detailpage')

@section('title')
    Internship
@endsection

@section('content')
    @component('components/student/filters')@endcomponent

    <section class="gridView">
    @foreach ($internships as $i)
        <div class="row d-flex d-sm-flex justify-content-center justify-content-sm-center">
            <div class="col-md-3">
                <div class="card border rounded shadow">
                    <div class="card-body text-center">
                        <h3 class="card-title">{{$i->title}}</h3>
                        <h4 class="card-title headerThree">{{$i->company_id->name}}</h4>
                        <p class="explanationParagraph">{{$i->description}}</p>
                        <button class="btn btn-light btn-block moreButton" style="text-transform:capitalize" type="button">
                            <a href="/internship/{{$i->id}}">More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </section>

    @component('components/general/footer')@endcomponent
@endsection
