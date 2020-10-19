{{-- LONG DETAILPAGE STUDENT--}}

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

    <h1>{{$firstname}}</h1>

    <h2>{{$category}}</h2>

    <p>{{$description}}</p>

    <ul>
        @foreach ($qualities as $quality)
            <li>{{$quality}}</li>
        @endforeach
    </ul>

    <p>{{$motivation}}</p>

    <footer>Copyright Appli</footer>
</body>
</html>
