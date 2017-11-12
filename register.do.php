<?php
    session_start();
    include 'connection.php';

    if (isset($_POST['first_name']) && 
        isset($_POST['last_name']) && 
        isset($_POST['phone_number']) && 
        isset($_POST['email']) && 
        isset($_POST['city']) && 
        isset($_POST['address']) && 
        isset($_POST['zip_code']) && 
        isset($_POST['password']) && 
        isset($_POST['repeat_password']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $zip_code = $_POST['zip_code'];
        $password = $_POST['password'];
        $repeat_password = $_POST['repeat_password'];

        if ($repeat_password != $password) 
        {
            echo "Passwords not matching";
        }
        else
        {
            $ecrypted_password = hash("sha512", $password, false);

            $cmd = "SELECT * FROM `table_customers` WHERE `email`='$email'";
            $rows = mysqli_query($connect, $cmd) or die(mysqli_error($connect));

            $number_of_rows = mysqli_num_rows($rows);

            if ($number_of_rows > 0) 
            {
                echo "User with this email already exists";
            }
            else
            {
                $cmd = "INSERT INTO `table_customers`(`first_name`, `last_name`, `phone_number`, `email`, `password`, `country`, `city`, `address`, `zip_code`, `phone_number`) VALUES('$first_name', '$last_name', '$ecrypted_password', '$email', '$country', '$city', '$address', '$zip_code', '$phone_number')";
                mysqli_query($connect, $cmd) or die(mysqli_error($connect));

                header("location: index.php");
            }   
        }
    }

    mysqli_close($connect);	
?>