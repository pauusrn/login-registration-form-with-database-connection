<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
       <div class="wrapper">
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
</body>
</html>