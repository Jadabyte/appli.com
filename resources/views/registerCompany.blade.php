<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Company</title>
</head>
<body>
    <form action="" method="post">
        <h1>Create Company account</h1>
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
</body>
</html>