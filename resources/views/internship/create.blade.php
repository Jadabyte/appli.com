@extends('layouts/appli')

@section('title')
    Create new internship
@endsection

@section('content')

    @component('components/general/navigation')@endcomponent

    @component('components/internship/createInternship')@endcomponent

    @component('components/general/footer')@endcomponent
@endsection

