@extends('layouts/appli')

@section('title')
    Internship
@endsection

@section('content')

    @component('components/general/navigation')@endcomponent

<section>
    <h1 class="headerOne">Overview of companies offering an internship</h1>
    <p class="headerThree" style="text-align: center; margin: 0; margin-bottom: 2.5%">Filter through our internships based on category, required skills, and/ or internship period.</p>
    <section class="filter">
        <form class="form-group" action="" method="GET">

        <div class="col">
        <select class="custom-select fieldInformation" name="internshipPeriod_id" id="input">
            <option value="0">Select Internship Period</option>
            @foreach ($internshipPeriod as $ip)
                <option value="{{ $ip->id }}">
                {{ $ip['title'] }}
                </option>
            @endforeach
        </select>
        </div>
        <div class="col">
        <select class="custom-select fieldInformation" name="category_id" id="input">
            <option value="0">Select Category</option>
            @foreach ($category as $c)
                <option value="{{ $c->id }}">
                {{ $c['title'] }}
                </option>
            @endforeach
        </select>
        </div>
        <div class="col">
        <select class="custom-select fieldInformation" name="skills_id" id="input">
            <option value="0">Select Skills</option>
            @foreach ($skill as $sk)
                <option value="{{ $sk->id }}">
                {{ $sk['title'] }}
                </option>
            @endforeach
        </select>
        </div>
        <div class="col">
            <input class="btn btn-info searchButton" style="text-transform: capitalize" type="submit" value="Filter">
        </div>
        </form>
    </section>
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
