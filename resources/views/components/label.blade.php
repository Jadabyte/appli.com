@extends('layouts/appli')

@section('title')
    Create new internship
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
                            <th>ID</th>
                            <th>Student</th>
                            <th>Internship</th>
                            <th>Label</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td><button class="btn btn-primary btnDeclined" type="button">Declined</button><button class="btn btn-primary btnApproved" type="button">Approved</button></td>
                        </tr>
                        <tr>
                            <td>Cell 3</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                            <td>Cell 1</td>
                            <td><button class="btn btn-primary btnDeclined" type="button">Declined</button><button class="btn btn-primary btnApproved" type="button">Approved</button></td>
                        </tr>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td><button class="btn btn-primary btnDeclined" type="button">Declined</button><button class="btn btn-primary btnApproved" type="button">Approved</button></td>
                        </tr>
                        <tr>
                            <td>Cell 3</td>
                            <td>Cell 2</td>
                            <td>Cell 2</td>
                            <td>Cell 1</td>
                            <td><button class="btn btn-primary btnDeclined" type="button">Declined</button><button class="btn btn-primary btnApproved" type="button">Approved</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    @component('components/footer')@endcomponent
@endsection

