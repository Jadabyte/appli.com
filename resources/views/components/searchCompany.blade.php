{{-- Search for a company using the API --}}
<section>
    <form id="createCompany" method="POST" action="/company/match">
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

        <div class="container" id="containerCreate">
            <div class="block-heading" id="createExplain">
                <h1 class="nameStudent headerOne">Create Company</h1>
                <p>Please enter the name of your company and we will automically try to determine the rest of your information.</p>
            </div>

            <form id="createForm">
                <div class="form-group" id="createFormGroup">
                    <label for="name">Company Name</label>
                    <input type="text" name="name" id="name" class="form-control item" placeholder="Name">
                </div>
            </form>
            <button class="btn btn-primary btn-block" id="createBtn" type="submit">Create Company</button>
        </div>
</section>
