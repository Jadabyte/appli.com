@extends('layouts/detailpage')

@section('title')
    {{$internship->title}}
@endsection

@section('content')
@component('components/general/navigation')@endcomponent

<section id="sectionDetail">
        <h1 class="nameStudent headerOne">Internship</h1>
    <div>
        <div class="container">
            <div class="row">
                <div class="col">
                    @isset($internship->description)
                    <div class="card">
                        <div class="card-body" id="card-body">
                            <h4 class="card-title headerTwo" id="card-title">Description</h4>
                            <p class="card-text explanationParagraph">{{$internship->description}}</p>
                        </div>
                    </div>
                    @endisset
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @isset($internship->category->title)
                    <div class="card">
                        <div class="card-body" id="card-body">
                            <h4 class="card-title headerTwo" id="card-title">Category</h4>
                            <p class="card-text explanationParagraph">{{$internship->category->title}}</p>
                        </div>
                    </div>
                    @endisset
                </div>
                <div class="col-md-4">
                    @isset($internship->internshipsSkill->title)
                    <div class="card" id="card-title">
                        <div class="card-body" id="card-body">
                            <h4 class="card-title headerTwo" id="card-title">Requirements</h4>
                            <p class="card-text explanationParagraph">{{$internship->internshipsSkill->title}}</p>
                        </div>
                    </div>
                    @endisset
                </div>
                <div class="col-md-4">
                    @isset($internship->internshipPeriod->title)
                    <div class="card" id="card-title">
                        <div class="card-body" id="card-body">
                            <h4 class="card-title headerTwo" id="card-title">Timeperiod</h4>
                            <p class="card-text explanationParagraph">{{$internship->internshipPeriod->title}}</p>
                        </div>
                    </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
    @isset($user->student)
    <div class="col offset-xl-0" style="text-align:right; margin-top:5%;">
        <button class="btn btn-primary btnApproved" id="createBtn" href="/application/create/{{$internship->id}}" style="margin-right:5%;">Apply for this internship</button>
    </div>
    @endisset

@component('components/general/footer')@endcomponent

@endsection
