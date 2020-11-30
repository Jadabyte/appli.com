@extends('layouts/appli')

@section('title')
    Create new internship
@endsection

@section('content')

    @component('components/navigation')@endcomponent

    @component('components/createInternship')@endcomponent

    @component('components/footer')@endcomponent
@endsection

