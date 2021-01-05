@extends('layouts/detailpage')

@section('title')
    Internship
@endsection

@section('content')
    @component('components/general/navigation')@endcomponent
    @component('components/student/filters')@endcomponent
    @component('components/internship/showInternships')@endcomponent
    @component('components/general/footer')@endcomponent
@endsection
