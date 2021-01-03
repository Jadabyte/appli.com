@extends('layouts/appli')

@section('title')
    Application
@endsection

@section('content')

    @component('components/navigation')@endcomponent

    <div class="container">
    <h1 class="headerOne">Applications</h1>
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
                                    <select id="label" name="label" class="form-control" >
                                        <option value="Starred">Starred</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Declined">Declined</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary btnSave" id="labelButton" type="submit">Save</button>
                            @endisset
                            @isset($user->student)
                                <button class="btn btn-primary btnDeclined" id="labelButton" type="submit">Delete</button>
                            @endisset
                            </form>
                        </td>
                        <td><a class="btn btn-info btnDetails" href="/application/{{$a->id}}">Details</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @component('components/footer')@endcomponent
    @endsection