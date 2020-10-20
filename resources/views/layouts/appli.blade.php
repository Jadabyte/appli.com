<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appli</title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

</head>
<body>
    @component('components/header')@endcomponent
    @component('components/navigation')@endcomponent
    <section class="container">
        <div class="content">
            @yield('content')
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src=""></script>
    <script></script>
    @component('components/footer')@endcomponent

</body>
</html>
