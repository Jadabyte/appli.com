<<<<<<< HEAD
@extends('layouts/appli')

@section('title')
    Login
@endsection

@section('content')
<!-- Start: Registration Form with Photo -->
<div class="register-photo" style="height: auto;width: 100%;">
    <img id="logoregisterpage" class="image-fluid logo" src="/applibranding/logoAppli.svg?h=60d8998b2af02b7c83c7ce77b565694b">
    <!-- Start: Form Container -->
    <div class="form-container">
        <form method="post" action="">
            <h2 class="text-center"><strong>Create a company account</strong></h2>
            <?php if (isset($error)): ?>
                <div role="alert">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>
            <?php if (isset($success)): ?>
                <div role="alert">
                    <?php echo $success ?>
                    <p>You can now log in!</p>
                    <a href="login">Go to log In</a>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label for="email">Email address</label>
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="firstName">First name</label>
                <input class="form-control" type="password" name="lastName" placeholder="Lastname">
            </div>
            <div class="form-group">
                <label for="lastName">Last name</label>
                <input class="form-control" type="password" name="firstName" placeholder="Firstname">
            </div>
            <div class="form-group">
                <label for="companyName">Company Name</label>
                <input class="form-control" type="password" name="companyName" placeholder="Company Name">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" id="password">
                <small id="passwordHelp">Password must include at least 1 uppercase, 1 lowercase and a number.</small>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label"><input class="form-check-input" type="checkbox" style="color: #011C3E;">I agree to the license terms.</label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" id="registerbutton" type="submit">Register</button>
            </div>
            <a id="aldready" class="already" href="login">You already have an account? Login here.</a></form>
    </div>
    <!-- End: Form Container -->
</div>
<!-- End: Registration Form with Photo -->
@endsection
=======
{{-- REGISTERPAGE STUDENTS AND COMPANIES --}}

<form action="" method="post">
    @csrf
    <h1>Create Company account</h1>
    <div>
        <label for="email">Email address</label>
        <input type="email" name="email" placeholder="Email address" id="email" aria-describedby="emailHelp">
        <span id="available"></span>
    </div>
    <div>
        <label for="firstName">First name</label>
        <input class="form-control" name="firstName" type="text" placeholder="First name" id="firstName">
    </div>
    <div>
        <label for="lastName">Last name</label>
        <input name="lastName" type="text" placeholder="Last name" id="lastName">
    </div>
    <div>
        <label for="companyName">Company Name</label>
        <input name="companyName" type="text" placeholder="Company name" id="companyName">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password">
        <small id="passwordHelp">Password must include at least 1 uppercase, 1 lowercase and a number.</small>
    </div>
    <button type="submit">Submit</button>
    <div>
        <p class="acc">Already have an account?</p>
        <div>
            <a href = 'login'>Login</a>
        </div>
    </div>
    <div>
        <p class="acc">Are you a student?</p>
        <div>
            <a href = 'registerStudent'>Register here</a>
        </div>
    </div>
</form>
>>>>>>> master
