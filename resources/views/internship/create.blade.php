@extends('layouts/appli')

@section('title')
    Create new internship
@endsection

@section('stylesheet')
	{{ asset('css/styles.min.css') }}
@endsection

@section('content')

    <section id="create">
        <div class="container" id="containerCreate">
            <div id="createExplain" class="block-heading">
                <h1 id="h1" class="nameStudent">Company</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
            </div>
        @component('components/createInternship')@endcomponent
        </div>
    </section>
@endsection

