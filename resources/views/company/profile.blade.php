@extends('layouts/appli')

@section('title')
    Profile
@endsection

@section('content')

    @component('components/navigation')@endcomponent

    <div class="container profile profile-view" id="profile">
        <h1 class="headerOne">Profile</h1>
        <h2 class="headerTwo">Company</h2>
        <form method="post" action="/company/create" enctype="multipart/form-data">
            @csrf
            @if( $flash = session('message') )
                <div class="alert alert-success">{{ $flash }}</div>
            @endif

            @if( $flash = session('error') )
                <div class="alert alert-danger">{{ $flash }}</div>
            @endif

            @if( $errors->any())
                <ul class="alert alert-danger">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
                </ul>
            @endif

            @isset($user->company->logo)
            <div class="profile-header-container">
                <div class="profile-header-img">
                    <img class="rounded mx-auto d-block" style="width:30%" src="{{ asset('storage/companylogos/' . $user->company->logo) }}" />
                </div>
            </div>
            @endisset

            <div class="form-row">
                <div class="col">
                    <label for="logo">Logo</label>
                    <input class="form-control" type="file" name="logo" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="companyName">Company name</label>
                    <input class="form-control" type="text" name="companyName" placeholder="Company name" value="@isset($user->company->name){{ $user->company->name }}@else{{ old('companyName') }}@endisset">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" formaction="/company/match">Search</button>
                    <small class="form-text text-muted">Please enter the name of your company and we will automically try to determine the rest of your information.</small>
                    <small class="form-text text-muted">Please fill in any information that was not automatically found.</small>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="companyEmail">Company email</label>
                    <input class="form-control" type="email" name="companyEmail" placeholder="Company email" value="@isset($user->company->mail){{ $user->company->mail }}@else{{ old('companyEmail') }}@endisset">
                </div>
                <div class="col">
                    <label for="phone">Company telephone</label>
                    <input class="form-control" type="tel" name="phone" placeholder="Company telephone" value="@isset($user->company->telephone){{ $user->company->telephone }}@else{{ old('phone') }}@endisset">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" placeholder="Description">@isset($user->company->description){{ $user->company->description }}@else{{ old('description') }}@endisset</textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="website">Website</label>
                    <input class="form-control" type="url" name="website" placeholder="Website" value="@isset($user->company->website){{ $user->company->website }}@else{{ old('website') }}@endisset">
                </div>
                <div class="col">
                    <label for="linkedin">LinkedIn</label>
                    <input class="form-control" type="url" name="linkedin" placeholder="LinkedIn" value="@isset($user->company->LinkedIn){{ $user->company->LinkedIn }}@else{{ old('linkedin') }}@endisset">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="category">Category</label>
                    <select class="form-control" name="category">
                    @foreach ($categories as $category)
                            <option @if(!empty($user->company->category_id) && $category->id === $user->company->category_id){{ 'selected' }}@endif value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="street">Street</label>
                    <input class="form-control" type="text" name="street" placeholder="Street" value="@isset($user->company->street){{ $user->company->street }}@else{{ old('street') }}@endisset">
                </div>
                <div class="col">
                    <label for="houseNumber">House number</label>
                    <input class="form-control" type="number" name="houseNumber" placeholder="House number" value="@isset($user->company->houseNumber){{ $user->company->houseNumber }}@else{{ old('houseNumber') }}@endisset">
                </div>
                <div class="col">
                    <label for="pobox">P.O. box</label>
                    <input class="form-control" type="number" name="pobox" placeholder="P.O. box" value="@isset($user->company->pobox){{ $user->company->pobox }}@else{{ old('pobox') }}@endisset">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="postalCode">Postal code</label>
                    <input class="form-control" type="number" name="postalCode" placeholder="Postal code" value="@isset($user->company->postalCode){{ $user->company->postalCode }}@else{{ old('postalCode') }}@endisset">
                </div>
                <div class="col">
                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" placeholder="City" value="@isset($user->company->city){{ $user->company->city }}@else{{ old('city') }}@endisset">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
        <h2 class="headerTwo">User</h2>
        <form method="post" action="">
            @csrf

            <div class="form-row">
                <div class="col">
                    <label for="firstName">First name</label>
                    <input class="form-control" type="text" name="firstName" placeholder="First name" value="{{ $user->firstName }}">
                </div>
                <div class="col">
                    <label for="lastName">Last name</label>
                    <input class="form-control" type="text" name="lastName" placeholder="Last name" value="{{ $user->lastName }}">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Email" value="{{ $user->email }}">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="col">
                    <label for="password_confirmation">Confirm password</label>
                    <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>

    @isset($applications)
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
                        <form class="form-inline" method="POST" action="label/{{ $a->id }}">
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
                    <td><a class="btn btn-info btnDetails" href="/company/application/{{$a->id}}">Details</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endisset
</div>
    @component('components/footer')@endcomponent
    @endsection
