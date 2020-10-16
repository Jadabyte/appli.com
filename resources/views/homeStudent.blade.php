<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Student</title>
</head>
<body>
<div>
    <nav>
        <ul>
            <li><a href="#"><img src="" alt="logo"></a></li>
            <li><a href ="#">Home</a></li>
            <li><a href ="#">About</a></li>
            <li><a href ="#">Contact</a></li>
        </ul>
    </nav>
    <nav>
        <ul>
            <li><a href="#"><img src="" alt="profile icon"></a></li>
            <li><input type="text" placeholder="Search.."></li>
        </ul>
    </nav>
</div>
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

<div>
    <img src="" alt="company profile picture">
    <h3>title</h3>
    <p>description</p>
</div>

</body>
</html>