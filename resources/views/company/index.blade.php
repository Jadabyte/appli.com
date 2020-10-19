{{-- LIST OF ALL COMPANIES  --}}

<h1>Overview of students looking for an internship</h1>
<p>Filter thru our students based on category (designer, developer or hybrid) and/ or location.</p>
<div class='dropdown'>
    <button onclick="myFunction()" class="dropbtn">Category</button>
    <div id="myDropdown" class="dropdown-content">
        <a href="#">Designer</a>
        <a href="#">Developer</a>
        <a href="#">Hybrid</a>
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
<a href="#">reset filters</a>

@foreach ($users as $u)
    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="..." alt="logo company image">
                <div class="card-body">
                    <h3 class="card-title">{{$u->name}}</h3>
                    <h4 class="card-title">{{$u->category}}</h4>
                    <a href="{{$u->portfolio}}}">Porfolio</a>
                    <a href="/student/{{$u->id}}">More</a>
                </div>
        </div>
    </div>
@endforeach
