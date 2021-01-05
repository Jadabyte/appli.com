<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Appli | @yield('title')</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/css/beautiful-danger-alert.css">
    <link rel="stylesheet" href="/css/Dark-NavBar.css">
    <link rel="stylesheet" href="/css/Edit-Form.css">
    <link rel="stylesheet" href="/css/Filter.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<section>
    @component('components/general/navigation')@endcomponent
    <div>
        @yield('content')
    </div>
</section>

@component('components/general/footer')@endcomponent

@yield('script')
</body>

</html>
