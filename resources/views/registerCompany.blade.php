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
