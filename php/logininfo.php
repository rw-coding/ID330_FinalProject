<?php
    error_reporting(E_ERROR);

    $loggedIn = false;

    mysqli_connect();

    $host = "localhost";
    $user = "root";
    $pass = "root";

    $connection = mysqli_connect($host,$user,$pass,"users");

    $connectionCheck = "";

    $email = mysqli_query($connection,"SELECT email,email FROM users");
    $result = mysqli_query($connection, $email);
?>