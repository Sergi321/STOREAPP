<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Storeapp</title>
    <link rel="stylesheet" href="../style.css"/>
</head>
<body>
<?php
    require('../db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Te has registrado correctamente.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registrarse</h1>
        <input type="text" class="login-input" name="username" placeholder="Usuario" required />
        <input type="email" class="login-input" name="email" placeholder="Email" required>
        <input type="password" class="login-input" name="password" placeholder="Contraseña" required>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="../index.php">¿Ya tienes una cuenta?</a></p>
    </form>
<?php
    }
?>
</body>
</html>