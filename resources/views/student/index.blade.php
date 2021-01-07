@extends('layouts/detailpage')

@section('title')
    Internship
@endsection

@section('content')
<section>
    <h1>Overview of companies offering an internship</h1>
        <form action="" method="GET">
        <p>Filter through our companies based on category, number of employees, required skills, hours and/ or location.</p>
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
        <select name="internshipsSkill_id" id="input">
            <option value="0">Select Skills</option>
            @foreach ($internshipsSkill as $sk)
                <option value="{{ $sk->id }}">
                {{ $sk['title'] }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Filter">
        <!--<div class='dropdown'>
            <button onclick="myFunction()" class="dropbtn">Category</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">Designer</a>
                <a href="#">Developer</a>
                <a href="#">Hybrid</a>
            </div>
        </div>
        <div class='dropdown'>
            <button onclick="myFunction()" class="dropbtn">Employees</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">&lt;10</a>
                <a href="#">&gt;10 - &lt;50</a>
                <a href="#">&gt;50</a>
            </div>
        </div>
        <div class='dropdown'>
            <button onclick="myFunction()" class="dropbtn">Skills</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">skill 1</a>
                <a href="#">skill 2</a>
                <a href="#">skill 3</a>
                <a href="#">skill 4</a>
                <a href="#">skill 5</a>
            </div>
        </div>
        <div class='dropdown'>
            <button onclick="myFunction()" class="dropbtn">Location</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">&lt;5km</a>
                <a href="#">&gt;5km - &lt;10km</a>
                <a href="#">&gt;10km</a>
            </div>
        </div>
        <a href="#">Reset filters</a>-->
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
