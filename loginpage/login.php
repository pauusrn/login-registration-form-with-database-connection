<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
      <form action="login.php" method="POST">
        <h1>Login</h1>
        <div class="input-box">
            <input type="email" placeholder="Username" required>
            <i class='bx bxs-user' ></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" required>
            <i class='bx bxs-lock' ></i>
        </div>

        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password?</a>
        </div>
        <button type="submit" class="btn">Login</button>

        <div class="registration-text">
      Don't have an account? <a href="registration.php">Register</a>
    </div>

    <div class="wrapper" style="display:none">
      <form action="register.php" method="post">
        <h1>Registration</h1>
        <div class="input-box">
           <div class="input-field">
            <input type="text" placeholder="First Name" required>
            <i class='bx bxs-user'></i>
        </div>
</div>

        <div class="input-box">
           <div class="input-field">
            <input type="text" placeholder="Last name" required>
            <i class='bx bxs-user'></i>
        </div>
    </div>

        <div class="input-box">
           <div class="input-field">
            <input type="email" placeholder="Email" required>
            <i class='bx bxs-envelope' ></i>
        </div>
</div>

        <div class="input-box">
           <div class="input-field">
            <input type="password" placeholder="Password" required>
            <i class='bx bxs-lock' ></i>
        </div>
</div>

    <label><input type="checkbox">I hereby declare that the above information provided is true and correct.</label>

    <button type="submit" class="btn"> Register</button>

    <div class="Login-text">
      Already have an account? <a href="login.php">Login</a>
    </div>
</form>
</form>

</body>
</html>