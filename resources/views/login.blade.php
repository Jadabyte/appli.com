{{-- LOGINPAGE --}}

<form action="" method="post">
    @csrf
    <h1>Login</h1>
    <div>
        <label for="email">Email</label>
        <input type="email" placeholder="Enter email" name="email" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">
    </div>
    <input type="submit" value="Sign in">
    <p>Want to register?</p>
    <div>
        <a href = 'register'>Create an account</a>
    </div>
</form>
