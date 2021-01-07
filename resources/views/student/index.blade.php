@extends('layouts/appli')

@section('title')
    Internship
@endsection

@section('content')

    @component('components/general/navigation')@endcomponent

<section>
    <h1>Overview of companies offering an internship</h1>
        <form action="" method="GET">
        <p>Filter through our internships based on category, required skills, and/ or internship period.</p>
        <select class="custom-select" name="internshipPeriod_id" id="input">
            <option value="0">Select Internship Period</option>
            @foreach ($internshipPeriod as $ip)
                <option value="{{ $ip->id }}">
                {{ $ip['title'] }}
                </option>
            @endforeach
        </select>
        <select class="custom-select" name="category_id" id="input">
            <option value="0">Select Category</option>
            @foreach ($category as $c)
                <option value="{{ $c->id }}">
                {{ $c['title'] }}
                </option>
            @endforeach
        </select>
        <select class="custom-select" name="skills_id" id="input">
            <option value="0">Select Skills</option>
            @foreach ($skill as $sk)
                <option value="{{ $sk->id }}">
                {{ $sk['title'] }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Filter">
        </form>

    <section class="gridView">
    @foreach ($internship as $i)
        <div class="row d-flex d-sm-flex justify-content-center justify-content-sm-center">
            <div class="col-md-3">
                <div class="card border rounded shadow">
                    <div class="card-body text-center">
                        <h3 class="card-title">{{$i->title}}</h3>
                        <h4 class="card-title headerThree">{{$i->company->name}}</h4>
                        <p class="explanationParagraph">{{$i->description}}</p>
                        <button class="btn btn-light btn-block moreButton" style="text-transform:capitalize" type="button">
                            <a href="/internship/{{$i->id}}" style="color:#EAEAEA">More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </section>

    @component('components/general/footer')@endcomponent
@endsection
