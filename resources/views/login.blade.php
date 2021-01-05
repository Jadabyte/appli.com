@extends('layouts/appli')

@section('title')
    Login
@endsection

@section('content')

    <div class="login-dark">
        <img class="img-fluid logo" src="/applibranding/logoAppli.svg?h=60d8998b2af02b7c83c7ce77b565694b" loading="lazy">
        <form method="post" action="" class="formRegister" style="margin-top:12.5%">
            <h1 class="text-center headerTwo">Login</h1>

            @csrf
                @if( $flash = session('message') )
                    <div class="alert alert-success">{{ $flash }}</div>
                @endif

                @if( $flash = session('error') )
                    <div class="alert alert-danger">{{ $flash }}</div>
                @endif

                @if( $errors->any())
                    <ul class="alert alert-danger">
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                    </ul>
                @endif

            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" aria-describedby="emailHelp" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group" id="form-button-group" style="margin-top:12.5%;">
                <button class="btn btn-primary btn-block btn" id="registerbutton" type="submit">Log in</button>
            </div>
            <div style="margin-top:10%;">
                <a id="already" class="forgot" href="register">New here? Go to register page.</a>
            </div>

        </form>
    </div>
<footer id="footerpad" class="footerCreate" style="margin-top:40%;">
    <div class="container" id="containerFooter">
        <div class="row">
            <div class="col-md-6 col-lg-8 mx-auto">
                <ul class="list-inline text-center">
                    <li id="social-icons-1" class="list-inline-item"><a href="#"><span class="fa-stack fa-lg" id="facebook"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                    <li id="social-icons-2" class="list-inline-item"><a href="#"><span class="fa-stack fa-lg" id="twitter"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
                    <li id="social-icons-3" class="list-inline-item"><a href="#"><span class="fa-stack fa-lg" id="instagram"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                    <li id="social-icons-4" class="list-inline-item"><a href="#"><span class="fa-stack fa-lg" id="pinterest"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x fa-inverse"></i></span></a></li>
                </ul><p class="copyright text-muted text-center" id="copyright">Copyright &copy; Appli 2020</p></div>
        </div>
    </div>
</footer>
@endsection
