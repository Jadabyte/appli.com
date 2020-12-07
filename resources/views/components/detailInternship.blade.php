<section id="sectionDetail">
    <h1 id="h1" class="nameStudent">Internship</h1>
    <div class="card-group">
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Title</h4>
                    <a href="{{url('internships/')}}/{{$internship->title}}"></a>
            </div>
            <div class="card__body">
                {{$title}}
            </div>
        </div>
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Description</h4>
                    <a href="{{url('internships/')}}/{{$internship->description}}"></a>
            </div>
            <div class="card__body">
                {{$description}}
            </div>
        </div>
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Category</h4>
                    <a href="{{url('internships/')}}/{{$internship->category_id}}"></a>
            </div>
            <div class="card__body">
                {{$category}}
            </div>
        </div>
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Skills</h4>
                    <a href="{{url('internships/')}}/{{$internship->skills_id}}"></a>
            </div>
            <div class="card__body">
                {{$skills}}
            </div>
        </div>
        <div class="card">
            <div class="card-body" id="card-body">
                <h4 class="card-title" id="card-title">Timeperiod</h4>
                    <a href="{{url('internships/')}}/{{$internship->internshipPeriod_id}}"></a>
            </div>
            <div class="card__body">
                {{$internshipPeriod}}
            </div>
        </div>

    <div class="card">
        <div class="card-body" id="contactContainer">
            <div class="media">
                <div class="media-body">
                    <ul class="list-unstyled fa-ul" id="contactinfo">
                        <li>
                            <i class="fa fa-user fa-li"></i>
                            <div id="contactinfo">
                                    <a href="{{url('companies/')}}/{{$company->name}}"></a>
                            </div>
                            <div class="card__body">
                                {{$name}}
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-li"></i>
                            <div id="contactinfo">
                                    <a href="{{url('companies/')}}/{{$company->email}}"></a>
                            </div>
                            <div class="card__body">
                                {{$email}}
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-li"></i>
                            <div id="contactinfo">
                                    <a href="{{url('companies/')}}/{{$company->telephone}}"></a>
                            </div>
                            <div class="card__body">
                                {{$telephone}}
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user fa-li"></i>
                            <div id="contactinfo">
                                    <a href="{{url('companies/')}}/{{$internship->location}}"></a>
                            </div>
                            <div class="card__body">
                                {{$location}}
                            </div>
                        </li>
{{--                         <li><i class="fa fa-envelope fa-li"></i><a id="contactinfo" href="#">james.doe@gmail.com </a></li>
                        <li><i class="fa fa-phone fa-li" id="contactinfo"></i>(555) 555-5555</li>
                        <li><i class="fa fa-phone fa-li" id="contactinfo"></i>Location</li> --}}
                    </ul>
                </div>
            </div>
            <div></div>
        </div>
    </div>
    <!-- End: User Information Panel - Lite + Secondary User (Pa -->
</section>
