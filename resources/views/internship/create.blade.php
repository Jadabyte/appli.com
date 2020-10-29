@extends('layouts/appli')

@section('title')
    Create new internship
@endsection

@section('content')

    @component('components/navigation')@endcomponent
    <section id="create">
        <div class="container" id="containerCreate">
            <div id="createExplain" class="block-heading">
                <h1 id="h1" class="nameStudent" style="font-size: 30px;">Create a new internship</h1>
                <p>To create a new internship for your company, fill in this form and press "add internship".</p>
            </div>
        @component('components/createInternship')@endcomponent
        </div>
    </section>

    @component('components/footer')@endcomponent
@endsection

