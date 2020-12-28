@extends('layouts/appli')

@section('title')
    Profile
@endsection
@section('content')

    @component('components/navigation')@endcomponent

    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
        </div>
        <form>
            <div class="form-row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div><input type="file" class="form-control" name="avatar-file"></div>
                <div class="col-md-8">
                    <h1 class="headerOne">Profile </h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label class="headerTwo">Companyname&nbsp;</label><input class="form-control" type="text" name="firstname" style="margin-top:-8%"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label class="headerTwo">Email </label><input class="form-control" type="email" autocomplete="off" required="" name="email" style="margin-top:-8%"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label class="headerTwo">Password </label><input class="form-control" type="password" name="password" autocomplete="off" required="" style="margin-top:-8%"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label class="headerTwo">Confirm Password</label><input class="form-control" type="password" name="confirmpass" autocomplete="off" required="" style="margin-top:-8%"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label class="headerTwo">Company description&nbsp;</label><input class="form-control" type="text" style="height:400px; margin-top:-8%;"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">SAVE </button><button class="btn btn-danger form-btn btnDeclined" type="reset" style="background-color:darkred;">CANCEL </button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
    <h1 class="headerOne">All applications made by students</h1>
    <p>You can label the applications.</p>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>id?</th>
                    <th>Student</th>
                    <th>Internship</th>
                    <th>Label</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($applications as $a)
                <tr data-applicationId="{{$a->id}}">
                    <td>{{$a->id}}</td>
                    <td>{{$a->firstName}}</td>
                    <td>{{$a->title}}</td>
                    <td>{{$a->label}}</td>
                    <td>
                        <form class="form-inline" method="POST">
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
                    <td><a class="btnDetails" href="/company/profile/{{$a->company_id}}/application/{{$a->id}}">Details</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
    @component('components/footer')@endcomponent
    @endsection
   