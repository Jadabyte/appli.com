@extends('layouts/appli')

@section('title')
    Company :name
@endsection
@section('content')

    @component('components/navigation')@endcomponent

    <h1 class="headerOne">Overview of students looking for an internship</h1>
    <p class="explainP">Filter thru our students based on category (designer, developer or hybrid) and/ or location.</p>

    @component('components/filterCompany')@endcomponent

    <div class="row d-flex d-sm-flex justify-content-center justify-content-sm-center">
        <div class="col-md-3" style="max-width: 300px;min-width:100px;">
            <div class="card border rounded shadow">
                <div class="border rounded shadow" style="background-color: #f97242;">
                    <img class="img-fluid" src="appliBranding/html.svg">
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title" id="headerFour">Student 1</h4>
                    <h6 class="text-muted card-subtitle mb-2">Title&nbsp;</h6>
                    <button class="btn active btn-block" type="button" >More</button>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="max-width: 300px;min-width:100px;">
            <div class="card border rounded shadow">
                <div class="border rounded shadow" style="background-color: #0080ff;">
                    <img class="img-fluid" src="appliBranding/css.svg">
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title" id="headerFour">Student 2</h4>
                    <h6 class="text-muted card-subtitle mb-2">Title</h6>
                    <button class="btn active btn-block" type="button">More</button>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="max-width: 300px;min-width:100px;">
            <div class="card border rounded shadow">
                <div class="border rounded shadow" style="background-color: #f9dd16;">
                    <img class="img-fluid" src="appliBranding/js.svg">
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title" id="headerFour">Student 3</h4>
                    <h6 class="text-muted card-subtitle mb-2">Title</h6>
                    <button class="btn active btn-block" type="button">More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex d-sm-flex justify-content-center justify-content-sm-center">
        <div class="col-md-3" style="max-width: 300px;min-width:100px;">
            <div class="card border rounded shadow">
                <div class="border rounded shadow" style="background-color: #f97242;">
                    <img class="img-fluid" src="appliBranding/html.svg">
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title" id="headerFour">Student 4</h4>
                    <h6 class="text-muted card-subtitle mb-2">Title&nbsp;</h6>
                    <button class="btn active btn-block" type="button">More</button>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="max-width: 300px;min-width:100px;">
            <div class="card border rounded shadow">
                <div class="border rounded shadow" style="background-color: #0080ff;">
                    <img class="img-fluid" src="appliBranding/css.svg">
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title" id="headerFour">Student 5</h4>
                    <h6 class="text-muted card-subtitle mb-2">Title</h6>
                    <button class="btn active btn-block" type="button">More</button>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="max-width: 300px;min-width:100px;">
            <div class="card border rounded shadow">
                <div class="border rounded shadow" style="background-color: #f9dd16;">
                    <img class="img-fluid" src="appliBranding/js.svg">
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title" id="headerFour">Student 6</h4>
                    <h6 class="text-muted card-subtitle mb-2">Title</h6>
                    <button class="btn active btn-block" type="button">More</button>
                </div>
            </div>
        </div>
    </div>
    @component('components/pagination')@endcomponent
    @component('components/footer')@endcomponent
@endsection


{{--
@foreach ($users as $u)
    @if ($u->isStudent)
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="..." alt="logo company image">
                    <div class="card-body">
                        <h3 class="card-title">{{$u->firstName}} {{$u->lastName}}</h3>
                        <a href="/student/{{$u->id}}">More</a>
                    </div>
            </div>
        </div>
    @endif
@endforeach

<!-- temporary list of all companies -->
@foreach( $companies as $company )
    <a href="/company/{{ $company->id }}">{{ $company->name }}</a>
@endforeach
 --}}
