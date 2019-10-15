<?php

include_once('connect.php');

    $user = $_POST['email'];
    $password = $_POST['Password'];
    
    echo "$user <br> $password";
    $sql = "SELECT * FROM `users` WHERE email = '$user' AND password = '$password'";
    $result = $con->query($sql);
    if ($result->num_rows === 1)
    {
        session_start();
        header("location: index.php");
    }
    else
    {
        echo "error. $con->error";
    }
?>