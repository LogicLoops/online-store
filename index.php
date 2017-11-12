<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Store</title>
    </head>
 
    <body>
        <a href="index.php">Home</a>
        <h2>Login</h2>
        <form action="login.do.php" method="POST">
            <input type="email" name="email" placeholder="Email" required autofocus>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
            <a href="register.php">Register</a>
        </form>
    </body> 
</html>