<?php

include_once('connect.php');

    $user = $_POST['email'];
    $password = $_POST['Password'];
    
    echo "$user <br> $password";
    $sql = "SELECT * FROM `users` WHERE email = '$user'";
    $result = $con->query($sql);
    if ($result->num_rows === 1)
    {
        while ($row = $result->fetch_assoc())
            $hash = $row['password'];
        if (password_verify($password, $hash))
            header("location: index.php");
        else
            echo "Incorrect user name or password";
    }
    else
        echo "error. $con->error";
?>