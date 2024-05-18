<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
      <form action="register.php" method="POST">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" placeholder="Username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" required>
            <i class='bx bxs-lock-'></i>
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
      <form action="index.php" method="post">
        <h1>Registration</h1>
        <div class="input-box">
           <div class="input-field">
            <input type="text" placeholder="First Name" required>
            <i class='bx bxs-user'></i>
        </div>
</div>

        <div class="input-box">
           <div class="input-field">
            <input type="text" placeholder="Last Name" required>
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
</body>
</html>