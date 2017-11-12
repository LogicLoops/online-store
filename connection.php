<?php 
    $db_host = "127.0.0.1";
    $db_username = "root";
    $db_password = "p455word123";
    $db_name = "market";

    $connect = mysqli_connect($db_host, $db_username, $db_password) or die(mysqli_error($connect)); 
    mysqli_select_db($connect, $db_name) or die(mysqli_error($connect));   
?>