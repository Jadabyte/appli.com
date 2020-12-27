@extends('../layouts/appli')

@section('title')
    New Company
@endsection

@section('content')
    @component('components/navigation') @endcomponent

    {{-- Create a new company profile --}}
    <section>
    <form id="createCompany" method="POST" action="/company/create">
        @csrf
        @if ($flash = session('message'))
            <div class="alert alert-success">{{ $flash }}</div>
        @endif

        @if ($flash = session('error'))
            <div class="alert alert-danger">{{ $flash }}</div>
        @endif

        @if($errors->any())
            <ul class="alert alert-danger">
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
            </ul>
        @endif

        <?php
        if(array_key_exists(0, $company['items'])){
            $company = $company['items'][0];
            $contact = $company['contacts'][0];
            $address = $company['address'];
        }
        else{
            $contact = $company;
            $address = $company;
        }
        ?>

        <div class="container" id="containerCreate">
            <div class="block-heading" id="createExplain">
                <h1 class="nameStudent headerOne">Create Company</h1>
                <p>Please fill in any information that was not automatically found.</p>
            </div>

            <form id="createForm">
                <h2>Company Information</h2>
                <div class="form-group" id="createFormGroup">
                    <label for="name">Company Name</label>
                    <input type="text" name="name" id="name" class="form-control item" placeholder="Name"
                    value="<?php
                        if(array_key_exists('title', $company)){
                            echo($company['title']);
                        }
                    ?>">
                </div>

                <div class="form-group" id="createFormGroup">
                    <label for="description">Description of company</label>
                    <textarea class="form-control descInput" name="description" id="description" rows="5"></textarea>
                </div>

                <div class="form-group" id="createFormGroup">
                    <label for="category">Type of company</label>
                    <textarea name="category" id="category" rows="1" class="form-control descInput"><?php
                        if(array_key_exists('categories', $company)){
                            echo($company['categories'][0]['name']);
                        }
                    ?></textarea>
                </div>

                {{-- add image upload for logo --}}

                <h2>Contact Information</h3>
                <div class="form-group" id="createFormGroup">
                    <label for="website">Company Website</label>
                    <input type="text" name="website" id="website" class="form-control item" placeholder="Website"
                    value="<?php
                        if(array_key_exists('www', $contact)){
                            echo($contact['www'][0]['value']);
                        }
                    ?>">
                </div>

                <div class="form-group" id="createFormGroup">
                    <label for="linkedin">LinkedIn Profile</label>
                    <input type="text" name="linkedin" id="linkedin" class="form-control item" placeholder="LinkedIn">
                </div>

                <div class="form-group" id="createFormGroup">
                    <label for="email">Contact Email</label>
                    <input type="text" name="email" id="email" class="form-control item" placeholder="Contact Email"
                    value="<?php
                    if(array_key_exists('email', $contact)){
                        echo($contact['email'][0]['value']);
                    }
                    ?>">
                </div>

                <div class="form-group" id="createFormGroup">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="form-control item" placeholder="Phone Number"
                    value="<?php
                    if(array_key_exists('phone', $contact)){
                        echo($contact['phone'][0]['value']);
                    }
                    ?>">
                </div>

                <h2>Office Address</h2>
                <div class="form-group" id="createFormGroup">
                    <label for="street">Street Name</label>
                    <input type="text" name="street" id="street" class="form-control item" placeholder="Street Name"
                    value="<?php
                    if(array_key_exists('street', $address)){
                        echo($address['street']);
                    }
                    ?>">
                </div>

                <div class="form-group" id="createFormGroup">
                    <label for="streetNum">Street Number</label>
                    <input type="text" name="streetNum" id="streetNum" class="form-control item" placeholder="Street Number"
                    value="<?php
                    if(array_key_exists('houseNumber', $address)){
                        echo($address['houseNumber']);
                    }
                    ?>">
                </div>

                <div class="form-group" id="createFormGroup">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control item" placeholder="City"
                    value="<?php
                    if(array_key_exists('city', $address)){
                        echo($address['city']);
                    }
                    ?>">
                </div>

                <div class="form-group" id="createFormGroup">
                    <label for="postCode">Postal Code</label>
                    <input type="text" name="postCode" id="postCode" class="form-control item" placeholder="Postal Code"
                    value="<?php
                    if(array_key_exists('postalCode', $address)){
                        echo($address['postalCode']);
                    }
                    ?>">
                </div>

                <div class="form-group" id="createFormGroup">
                    <label for="poBox">PO Box</label>
                    <input type="text" name="poBox" id="poBox" class="form-control item" placeholder="PO Box">
                </div>
                <button class="btn btn-primary btn-block" id="createBtn" type="submit">Create Company</button>
            </form>
        </div>
    </form>
    </section>

    @component('components/footer') @endcomponent
@endsection
