@extends('layouts/detailpage')

@section('title')
    Internship
@endsection

@section('content')
    @component('components/navigation')@endcomponent
    @component('components/student/filters')@endcomponent
    @component('components/internship/showInternships')@endcomponent
@endsection
