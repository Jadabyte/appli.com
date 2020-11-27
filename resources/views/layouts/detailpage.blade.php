<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Appli | @yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/styles.min.css">
</head>



<section>
    @component('components/navigation')@endcomponent
    <div>
        @yield('content')
    </div>
</section>

<footer id="footerpad">
    <div class="container" id="containerFooter">
        <div class="row">
            <div class="col-md-6 col-lg-8 mx-auto">
                <ul class="list-inline text-center">
                    <li id="social-icons" class="list-inline-item"><a href="#"><span class="fa-stack fa-lg" id="facebook"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                    <li id="social-icons" class="list-inline-item"><a href="#"><span class="fa-stack fa-lg" id="twitter"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
                    <li id="social-icons" class="list-inline-item"><a href="#"><span class="fa-stack fa-lg" id="instagram"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                    <li id="social-icons" class="list-inline-item"><a href="#"><span class="fa-stack fa-lg" id="pinterest"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x fa-inverse"></i></span></a></li>
                </ul>
                <!-- Start: paragraph --><p class="copyright text-muted text-center" id="copyright">Copyright &copy; Appli 2020</p>
                <!-- End: paragraph -->
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer with social media icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

@yield('script')
</body>

</html>
