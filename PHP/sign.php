<?php
include_once('connect.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['Password'];

    $options = ['cost' => 12,];
    $passhash = password_hash($password, PASSWORD_BCRYPT, $options);
    $sql = ("insert into users (name, email, password) values ('".$name."','".$email."', '".$passhash."')");
    if($con->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Your details has been registered. Continue shopping or checkout")';
        echo '</script>';
        }
        else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
}

