<?php
include_once('connect.php');

$queryItems = mysqli_query($link, "CREATE TABLE IF NOT EXISTS `items` (
    `email` varchar(100) NOT NULL,
    `Password` varchar(16) NOT NULL,
  ) ENGINE = DEFAULT CHARSET=utf8");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['Password'];
    $passcon = $_POST['psw-repeat'];

    if (!strcmp($passcon, $password))
    {
        $options = ['cost' => 12,];
        $passhash = password_hash($password, PASSWORD_BCRYPT, $options);
    
        $sql = ("insert into users (name, email, password) values ('".$name."','".$email."', '".$passhash."')");
        if($con->query($sql) === TRUE) {
            echo '<script language="javascript">';
            echo 'alert("Your details has been registered. Continue shopping or checkout")';
            echo '</script>';
            header("location: index.php");
        }
        else
        {
            echo '<script language="javascript">';
            echo 'alert("Email already exist. Please try a new one")';
            echo '</script>';
            header("location: Signup.php");
        }
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Password do not match")';
        echo '</script>';
        header("location: Signup.php"); 
    }

