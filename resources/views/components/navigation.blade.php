<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button">
            <div class="container-fluid"><a class="navbar-brand" href="#"><img src="/applibranding/logoAppli.svg"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link active" style="color:#EDBD16;" href="#">&nbsp;Home</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#EDBD16;" href="#">&nbsp;About</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#EDBD16;" href="/@if(Gate::allows('isStudent')){{ 'student' }}@else{{ 'company' }}@endif/profile">&nbsp;Profile</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#EDBD16;" href="/logout"><i class="fa fa-sign-in"></i>&nbsp; Log out</a></li>
                    </ul>
            </div>
    </div>
    </nav>
    </div>
</body>
