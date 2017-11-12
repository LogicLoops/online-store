<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Store</title>
    </head>
 
    <body>
        <a href="index.php">Home</a>
        <h2>Register</h2>
        <form action="register.do.php" method="POST">
            <input placeholder="First name" name="first_name" type="text" required autofocus>
            <br/>
            <input placeholder="Last name" name="last_name" type="text" required>
            <br/>
            <input placeholder="Phone number" name="phone_number" type="text" required>
            <br/>
            <input placeholder="Email" name="email" type="email" required>
            <br/>
            <input placeholder="Address" name="address" type="text" required>
            <br/>
            <input placeholder="City" name="city" type="text" required>
            <br/>
            <input placeholder="Zip code" name="zip_code" type="text" required>
            <br/>
            <input placeholder="Password" name="password" type="password" id="password" required>
            <br/>
            <input placeholder="Repeat password" name="repeat_password" type="password" id="repeat" required>
            <br/>
            <input type="submit" value="Register">
        </form> 
    </body> 
</html>