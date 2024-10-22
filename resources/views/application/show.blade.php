@extends('layouts/appli')

@section('title')
     Application detail
@endsection
@section('content')

    @component('components/general/navigation')@endcomponent

    <section style="margin-bottom: 20%" id="sectionDetail">
        <h1 class="headerOne">Details application</h1>
        <div class="card-group">
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    <h4 class="card-title" id="headerFour">Internship</h4>
                    <p class="card-text" id="cardTextCompany">
                    @isset($user->company)
                    {{$info->internshipTitle}}
                    @endisset
                    @isset($user->student)
                    {{$info->internship->title}}
                    @endisset
                    </p>
                    <p class="card-text" id="cardTextCompany"><strong>Period:</strong>
                    @isset($user->company)
                    {{$info->internshipPeriodTitle}}
                    @endisset
                    @isset($user->student)
                    {{$info->internship->internshipPeriod->title}}
                    @endisset</p>
                    <p class="card-text" id="cardTextCompany">
                    @isset($user->company)
                    {{$info->description}}
                    @endisset
                    @isset($user->student)
                    {{$info->internship->description}}
                    @endisset
                    </p>
                    @isset($user->company)
                    <a class="btn btn-primary" style="text-transform:capitalize" href="/internship/{{$info->internshipsId}}">More info</a>
                    @endisset
                    @isset($user->student)
                    <a class="btn btn-primary" style="text-transform:capitalize" href="/internship/{{$info->internship->id}}">More info</a>
                    @endisset
                </div>
            </div>
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    @isset($user->company)
                    <h4 class="card-title" id="headerFour">Student Info</h4>
                    <p class="card-text" id="cardTextCompany">{{$info->firstName}} {{$info->lastName}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>Mobile:</strong> {{$info->mobile}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>LinkedIn:</strong> {{$info->LinkedIn}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>Portfolio:</strong> {{$info->portfolio}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>BIO:</strong> {{$info->biography}}</p>
                    <a class="btn btn-primary" style="text-transform: capitalize" href="/student/{{$info->studentsId}}">More info</a>
                    @endisset

                    @isset($user->student)
                    <h4 class="card-title" id="headerFour">Company Info</h4>
                    <p class="card-text" id="cardTextCompany">{{$info->internship->company->name}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>Mobile:</strong> {{$info->internship->company->telephone}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>LinkedIn:</strong> {{$info->internship->company->LinkedIn}}</p>
                    <p class="card-text" id="cardTextCompany"><strong>Website:</strong> {{$info->internship->company->website}}</p>
                    <p class="card-text" id="cardTextCompany">{{$info->internship->company->description}}</p>
                    <a class="btn btn-primary" href="/company/{{$info->internship->company->id}}">More info</a>
                    @endisset
                </div>
            </div>
            <div class="card" id="cardCompany">
                <div class="card-body" id="card-body">
                    <h4 class="card-title" id="headerFour">Extra</h4>
                    @isset($user->company)
                    <p class="card-text" id="cardTextCompany"><strong>Category:</strong> {{$info->categoryTitle}}</p>
                    @endisset
                    @isset($user->student)
                    <p class="card-text" id="cardTextCompany"><strong>Category:</strong> {{$info->internship->company->category->title}}</p>
                    @endisset
                    <p class="card-text" id="cardTextCompany"><strong>Motivation:</strong> {!!nl2br(e($info->motivation))!!}</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Label</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$info->label}}</td>
                                    <td>
                                        <form class="form-inline" method="POST">
                                        @csrf
                                            @isset($user->company)
                                            <div class="form-group">
                                                <select id="label" name="label" class="form-control" >
                                                    <option value="Starred">Starred</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="Declined">Declined</option>
                                                </select>
                                            </div>
                                            <button class="btn btn-primary btnSave" style="text-transform:capitalize" id="labelButton" type="submit">Save</button>
                                            @endisset
                                            @isset($user->student)
                                            <button class="btn btn-primary btnDeclined" style="text-transform:capitalize" id="labelButton" type="submit">Delete</button>
                                            @endisset
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="headerTwo">Comments</h2>
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
            @foreach ($comments as $comment)
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                            <div class="media-body">
                                @isset($comment->user)
                                <h6>{{$comment->user->firstName . ' ' . $comment->user->lastName}}</h6>
                                @endisset
                                <p class="text-secondary">{{ $comment->text }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if($info->label === 'Starred')
            <form action="comment/{{ $info->id }}" method="post">
                @csrf
                @if( $errors->any())
                    <ul class="alert alert-danger">
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                    </ul>
                @endif
                <input class="form-control" type="text" name="comment" placeholder="Comment">
                <button class="btn btn-primary btnSave" style="text-transform:capitalize" id="labelButton" type="submit">Send</button>
            </form>
            @else
            <p>You can only send messages if the application is starred.</p>
            @endif
        </div>
    </section>
    @component('components/general/footer')@endcomponent
@endsection
