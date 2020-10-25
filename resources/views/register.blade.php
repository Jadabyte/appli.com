<form action="" method="post">
    @csrf
    <h1>Register</h1>
    <div>
        <label for="firstName">First name</label>
        <input class="form-control" name="firstName" type="text" placeholder="First name" id="firstName">
    </div>
    <div>
        <label for="lastName">Last name</label>
        <input name="lastName" type="text" placeholder="Last name" id="lastName">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="email@test.be" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password">
    </div>
    <div>
        <p>Check if you are a student:</p>
        <input type="checkbox" id="isStudent" name="isStudent" value="isStudent">
        <label for="isStudent">I am a student</label><br>
    </div>
    <button type="submit">Register</button>
    <div>
        <p class="acc">Already have an account?</p>
        <div>
            <a href = 'login'>Login</a>
        </div>
    </div>
</form>
