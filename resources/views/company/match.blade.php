{{-- Create a new company profile --}}
@extends('../layouts/appli')

@section('title')
    New Company
@endsection

@section('content')
    @component('components/navigation') @endcomponent

    @component('components/searchCompany') @endcomponent

    @component('components/footer') @endcomponent
@endsection
