{{-- LOGINPAGE --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="" method="post">
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
            <a href = 'registerStudent'>Create student account</a>
            <a href = 'registerCompany'>Create company account</a>
        </div>
    </form>
</body>
</html>
