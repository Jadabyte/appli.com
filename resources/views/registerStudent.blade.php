<form action="" method="post">
    @csrf
    <h1>Create Student account</h1>

    <div>
        <label for="email">Email address</label>
        <input type="email" name="email" placeholder="Email address" id="email">
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
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password">
    </div>
    <button type="submit">Submit</button>
    <div>
        <p class="acc">Already have an account?</p>
        <div>
            <a href = 'login'>Login</a>
        </div>
    </div>
    <div>
        <p class="acc">Are you a Company?</p>
        <div>
            <a href = 'registerCompany'>Register here</a>
        </div>
    </div>
</form>
