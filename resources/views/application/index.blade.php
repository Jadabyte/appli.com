@extends('layouts/appli')

@section('title')
    Profile
@endsection

@section('content')

    @component('components/navigation')@endcomponent

    <div class="container">
    <h1 class="headerOne">All applications made by students</h1>
    <p>You can label the applications.</p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Student</th>
                        <th scope="col">Internship</th>
                        <th scope="col">Label</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($applications as $a)
                    <tr>
                        <td>{{$a->firstName . ' ' . $a->lastName}}</td>
                        <td>{{$a->title}}</td>
                        <td>{{$a->label}}</td>
                        <td>
                            <form class="form-inline" method="POST" action="application/{{ $a->id }}">
                            @csrf
                                <div class="form-group">
                                    <select id="label" name="label" class="form-control" >
                                        <option value="Starred">Starred</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Declined">Declined</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary btnSave" id="labelButton" type="submit">Save</button>
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
