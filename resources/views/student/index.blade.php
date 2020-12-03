@extends('layouts/detailpage')

@section('title')
    Internship
@endsection

@section('content')
<section>
    <h1>Overview of companies offering an internship</h1>
    <p>Filter thru our companies based on category, number of employees, required skills, hours and/ or location.</p>
    <div class='dropdown'>
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
    <a href="#">Reset filters</a>

    @foreach ($internships as $i)
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="..." alt="logo company image">
                    <div class="card-body">
                        <h3 class="card-title">{{$i->title}}</h3>
                        <h4 class="card-title">company id:{{$i->company_id}} (eigenlijk moet hier naam van bedrijf komen)</h4>
                        <p class="card-text">{{$i->description}}</p>
                        <a href="/internship/{{$i->id}}">More</a>
                    </div>
            </div>
        </div>
    @endforeach
</section>
@endsection
