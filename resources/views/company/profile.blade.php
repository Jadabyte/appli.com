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
                    <input class="form-control" type="file" name="logo" aria-describedby="fileHelp" value="{{ old('logo') }}">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="companyName">Company name</label>
                    <input class="form-control" type="text" name="companyName" placeholder="Company name" value="{{ old('companyName') }}">
                    <small class="form-text text-muted">Please enter the name of your company and we will automically try to determine the rest of your information.</small>
                    <small class="form-text text-muted">Please fill in any information that was not automatically found.</small>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="companyEmail">Company email</label>
                    <input class="form-control" type="email" name="companyEmail" placeholder="Company email" value="{{ old('companyEmail') }}">
                </div>
                <div class="col">
                    <label for="phone">Company telephone</label>
                    <input class="form-control" type="tel" name="phone" placeholder="Company telephone" value="{{ old('phone') }}">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" placeholder="Description" value="{{ old('description') }}"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="website">Website</label>
                    <input class="form-control" type="url" name="website" placeholder="Website" value="{{ old('website') }}">
                </div>
                <div class="col">
                    <label for="linkedin">LinkedIn</label>
                    <input class="form-control" type="url" name="linkedin" placeholder="LinkedIn" value="{{ old('linkedin') }}">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="category">Category</label>
                    <input class="form-control" type="text" name="category" placeholder="Category" value="{{ old('category') }}">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="street">Street</label>
                    <input class="form-control" type="text" name="street" placeholder="Street" value="{{ old('street') }}">
                </div>
                <div class="col">
                    <label for="houseNumber">House number</label>
                    <input class="form-control" type="number" name="houseNumber" placeholder="House number" value="{{ old('houseNumber') }}">
                </div>
                <div class="col">
                    <label for="pobox">P.O. box</label>
                    <input class="form-control" type="number" name="pobox" placeholder="P.O. box" value="{{ old('pobox') }}">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="postalCode">Postal code</label>
                    <input class="form-control" type="number" name="postalCode" placeholder="Postal code" value="{{ old('postalCode') }}">
                </div>
                <div class="col">
                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" placeholder="City" value="{{ old('city') }}">
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
