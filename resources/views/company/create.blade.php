{{-- Create a new company profile --}}
@extends('../layouts/appli')

@section('title')
    New Company
@endsection

@section('content')

    <!-- Start: Registration Form with Photo -->
    <div class="register-photo">
        <img id="logoregisterpage" class="image-fluid logo" src="/applibranding/logoAppli.svg?h=60d8998b2af02b7c83c7ce77b565694b">
        <!-- Start: Form Container -->
        <div class="form-container">
            <form method="post" action="">
                @csrf
                <h2 class="text-center"><strong>Create a new Company</strong></h2>
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

                {{--1. Company Name
                    2. Logo
                    3. Category
                    4. Street
                    5. House number
                    6. PO Box
                    7. Postal Code
                    8. City
                    9. Mail
                    10. Telephone
                    11. Description
                    12. LinkedIn
                    13. Website --}}

                <div class="form-group">
                    <label for="firstName">Company Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Company Name" value="{{ old('name') }}">
                </div>


                <div class="form-group">
                    <button class="btn btn-primary btn-block" id="registerbutton" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <!-- End: Form Container -->
    </div>
    <!-- End: Registration Form with Photo -->
@endsection
