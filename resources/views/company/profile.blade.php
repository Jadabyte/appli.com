@extends('layouts/appli')

@section('title')
    Profile
@endsection

@section('content')

    @component('components/general/navigation')@endcomponent

{{-- <div class="container profile profile-view" id="profile"> --}}
    <h1 class="headerOne" style="text-align:center; margin:2%;">My profile</h1>
        <section>
            <h3 class="headerThree" style="margin-top:2%">Information</h3>
            <div class="profileForm" style="margin-top:40%">

                <form class="profileContainer" method="post" action="/company/create" enctype="multipart/form-data">
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

                    <div class="form-row" style="margin-top:-5%">
                        <div class="col">
                            <div class="avatar">
                                <div class="avatar-bg center" style="margin-left:35%;"></div>
                                    <div style="margin-top:1%; color: #011C3A;">
                                        <label class="profileFieldLabel">Company Logo</label>
                                        <p class="form-text text-muted infoSearch" id="fileHelp">Please upload a valid image file. Size of image should not be more than 2MB.</p>
                                    </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group" style="color:#011C3A;">
                                <label class="profileFieldLabel">Companyname</label>
                                <input class="form-control profileGroup" type="text" name="companyName" placeholder="Companyname" value="@isset($user->company->name){{ $user->company->name }}@else{{ old('companyName') }}@endisset">
                                <button class="btn btn-primary searchButton" type="submit" formaction="/company/match">Search</button>
                                <p class="infoSearch">Please enter the name of your company and we will automically try to determine the rest of your information.</p>
                                <p class="infoSearch">Please fill in any information that was not automatically found.</p>
                            </div>

                        <div class="form-group" style="color: #011C3A;">
                            <label class="profileFieldLabel">Company email</label>
                            <input class="form-control profileGroup" type="email" name="companyEmail" placeholder="Company email" value="@isset($user->company->mail){{ $user->company->mail }}@else{{ old('companyEmail') }}@endisset">
                        </div>

                        <div class="form-group" style="color: #011C3A;">
                            <label class="profileFieldLabel">Company phone</label>
                            <input class="form-control profileGroup" type="tel" name="phone" placeholder="Company telephone" value="@isset($user->company->telephone){{ $user->company->telephone }}@else{{ old('phone') }}@endisset">
                        </div>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label class="profileFieldLabel">Description of company</label>
                            <textarea class="form-control profileGroup" name="description" placeholder="Description">@isset($user->company->description){{ $user->company->description }}@else{{ old('description') }}@endisset</textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label class="profileFieldLabel">Company website</label>
                                <input class="form-control profileGroup" type="url" name="website" placeholder="Website" value="@isset($user->company->website){{ $user->company->website }}@else{{ old('website') }}@endisset">
                        </div>
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label class="profileFieldLabel">Company LinkedIn</label>
                                <input class="form-control profileGroup" type="url" name="linkedin" placeholder="LinkedIn" value="@isset($user->company->LinkedIn){{ $user->company->LinkedIn }}@else{{ old('linkedin') }}@endisset">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label for="category" class="profileFieldLabel">Category</label>
                                <select class="form-control" name="category">
                                    @foreach ($categories as $category)
                                            <option @if(!empty($user->company->category_id) && $category->id === $user->company->category_id){{ 'selected' }}@endif value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label class="profileFieldLabel">Street</label>
                            <input class="form-control profileGroup" type="text" name="street" placeholder="Street" value="@isset($user->company->street){{ $user->company->street }}@else{{ old('street') }}@endisset">
                        </div>

                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label class="profileFieldLabel">House number</label>
                            <input class="form-control" type="number" name="houseNumber" placeholder="House number" value="@isset($user->company->houseNumber){{ $user->company->houseNumber }}@else{{ old('houseNumber') }}@endisset">
                        </div>
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label class="profileFieldLabel">P.O. Box</label>
                            <input class="form-control" type="number" name="pobox" placeholder="P.O. box" value="@isset($user->company->pobox){{ $user->company->pobox }}@else{{ old('pobox') }}@endisset">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label class="profileFieldLabel">Postal Code</label>
                            <input class="form-control" type="number" name="postalCode" placeholder="Postal code" value="@isset($user->company->postalCode){{ $user->company->postalCode }}@else{{ old('postalCode') }}@endisset">
                        </div>
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label class="profileFieldLabel">City</label>
                            <input class="form-control" type="text" name="city" placeholder="City" value="@isset($user->company->city){{ $user->company->city }}@else{{ old('city') }}@endisset">
                        </div>
                    </div>
                    <button class="btn btn-primary btnApproved" type="submit">Save</button>
                </form>
            </div>
        </section>

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
</div>
    @component('components/general/footer')@endcomponent
    @endsection
