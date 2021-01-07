@extends('layouts/appli')

@section('title')
    Application
@endsection

@section('content')

    @component('components/general/navigation')@endcomponent

    <div class="container">
    <h1 class="headerOne">Applications</h1>
    @unless($user->isStudent)
    <form action="" method="GET">
        <input type="text" name="search" placeholder="Search by applicant name" id="search editLabel">
        <button class="btn btn-info searchButton" type="submit" title="Search">Search</button>
    </form>
    <form action="" method="GET">
        <select class="custom-select fieldInformation" name="label">
            <option value="0">Filter by status of the application</option>
            <option value="New">New</option>
            <option value="Approved">Approved</option>
            <option value="Declined">Declined</option>
        </select>
        <button class="btn btn-info searchButton" type="submit" title="Filter">Filter</button>
    </form>
    @endunless

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        @isset($user->company)
                        <th scope="col">Student</th>
                        @endisset
                        @isset($user->student)
                        <th scope="col">Company</th>
                        @endisset
                        <th scope="col">Internship</th>
                        <th scope="col">Label</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($applications as $a)
                    <tr>
                        @isset($user->company)
                        <td>{{$a->firstName . ' ' . $a->lastName}}</td>
                        @endisset
                        @isset($user->student)
                        <td>{{$a->internship->company->name}}</td>
                        @endisset
                        @isset($user->company)
                        <td>{{$a->title}}</td>
                        @endisset
                        @isset($user->student)
                        <td>{{$a->internship->title}}</td>
                        @endisset
                        <td>{{$a->label}}</td>
                        <td>
                            <form class="form-inline" method="POST" action="application/{{ $a->id }}">
                            @csrf
                            @isset($user->company)
                                <div class="form-group">
                                    <select id="label" name="label" class="form-control fieldInformation" >
                                        <option value="Starred">Starred</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Declined">Declined</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary btnSave btnApproved" style="text-transform:capitalize" id="labelButton" type="submit">Save</button>
                            @endisset
                            @isset($user->student)
                                <button class="btn btn-primary btnDeclined" style="text-transform:capitalize" id="labelButton" type="submit">Delete</button>
                            @endisset
                            </form>
                        </td>
                        <td><a class="btn btn-info btnDetails btnApproved" href="/application/{{$a->id}}">Details</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @component('components/general/footer')@endcomponent
    @endsection
