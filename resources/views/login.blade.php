<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>

    <div class="nav">
        <button class="btn button"> <a href="register">Signup</a></button>
    </div>
    <div class="container">

        <div class="login_box box">
            <h2>User Login</h2>
            <form action="login" method="POST">
                @csrf
                <p>Email</p>
                <input type="email" name="email" id="email" placeholder="Enter Email" autocomplete="off"><br>
                @error('email')
                <div class="error">{{$message}}</div>
                @enderror

                <p>Password</p>
                <input type="password" name="password" id="password" placeholder="Enter password">
                @error('password')
                <div class="error">{{$message}}</div>
                @enderror



                <button type="login" class="btn" id="login">Log In</button>
            </form>
        </div>
    </div>



</body>

</html>