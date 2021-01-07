@extends('layouts/detailpage')

@section('title')
    Internship
@endsection

@section('content')
<section>
    <h1>Overview of companies offering an internship</h1>
        <form action="" method="GET">
        <p>Filter through our internships based on category, required skills, and/ or internship period.</p>
        <select name="internshipPeriod_id" id="input">
            <option value="0">Select Internship Period</option>
            @foreach ($internshipPeriod as $ip)
                <option value="{{ $ip->id }}">
                {{ $ip['title'] }}
                </option>
            @endforeach
        </select>
        <select name="category_id" id="input">
            <option value="0">Select Category</option>
            @foreach ($category as $c)
                <option value="{{ $c->id }}">
                {{ $c['title'] }}
                </option>
            @endforeach
        </select>
        <select name="skills_id" id="input">
            <option value="0">Select Skills</option>
            @foreach ($skill as $sk)
                <option value="{{ $sk->id }}">
                {{ $sk['title'] }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Filter">
        </form>

    @foreach ($internship as $i)
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="..." alt="logo company image">
                    <div class="card-body">
                        <h3 class="card-title">{{$i->title}}</h3>
                        <h4 class="card-title">{{$i->company->name}}</h4>
                        <p class="card-text">{{$i->description}}</p>
                        <a href="/internship/{{$i->id}}">More</a>
                    </div>
            </div>
        </div>
    @endforeach
</section>
@endsection
