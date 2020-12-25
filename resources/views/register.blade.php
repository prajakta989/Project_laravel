<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Signup Page</title>
</head>

<body>
    <div class="container">
        <div class="login_box">
            <h2>User Signup</h2>
            <form action="register" method="POST">
                @csrf

                <p>Username</p>
                <input type="text" name="username" id="username" placeholder="Enter username" autocomplete="off" class="@error('username') is_invalid @enderror"><br>
                @error('username')
                <div class="error">{{$message}}</div>
                @enderror


                <p>Email</p>
                <input type="email" name="email" id="email" placeholder="Enter Email" autocomplete="off" class="@error('email') is_invalid @enderror"><br>
                @error('email')
                <div class="error">{{$message}}</div>
                @enderror



                <p>Password</p>
                <input type="password" name="password" id="password" placeholder="Enter password" class="@error('email') is_invalid @enderror">

                @error('password')
                <div class="error">{{$message}}</div>
                @enderror
                <button type="submit" class="btn" id="submit">Sign Up</button>
            </form>
        </div>
    </div>

</body>

</html>