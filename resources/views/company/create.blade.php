{{-- Create a new company profile --}}
@extends('../layouts/appli')

@section('title')
    New Company
@endsection

@section('content')
    @component('components/navigation') @endcomponent

    @component('components/createCompany') @endcomponent
    <?php
        if (isset($company)){
            echo('yes');
        }
    ?>

    @component('components/footer') @endcomponent
@endsection
