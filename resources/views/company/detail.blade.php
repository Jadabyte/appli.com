{{-- LONG DETAILPAGE COMPANY + OUTSTANDING INTERNSHIPS--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li><a href ="#">Home</a></li>
                <li><a href ="#">About</a></li>
                <li><a href ="#">Contact</a></li>
                <li><a href ="#">Account</a></li>
            </ul>
        </nav>
    </div>

    <h1>{{$name}}</h1>

    <img src="#" alt="">Image company

    <h2>{{$location}}</h2>

    <p>{{$description}}</p>

    <ul>
        @foreach ($internships as $internship)
        <li>{{$internship}} <a href ="#">More</a></li>
        @endforeach

    </ul>

    <footer>Copyright Appli</footer>
</body>
</html>
