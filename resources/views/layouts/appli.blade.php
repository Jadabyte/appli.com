<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Appli | @yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/styles.min.css?h=cc9a1893dbf3188131c984392cbbd32c">



</head>

<body>
    {{-- @component('components/header')@endcomponent
    @component('components/navigation')@endcomponent --}}
    <section>
        <div>
            @yield('content')
        </div>
    </section>

    @component('components/footer')@endcomponent

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>



    @yield('script')
</body>
</html>
