<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
<link rel="stylesheet" href="style.css">
<style>

.form
{
    background-color: chocolate;
    width: 50%;
    height: fit-content;
    margin: auto;
}

</style>
</head>
<body>
<div class = "form">
    <form method = "POST" action = "sign.php">
        <div ><label for="name"><b>Name</b></label>
        <input type="text" name = "name" placeholder= "Enter your name" required></div>
       <div> <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required></div>
       <div> <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="Password" required></div>
        <div><label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required></div>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
    <button type = "Submit" action = "submit" name = "submit" class = "button">
    </form>
</div>
</body>
</html>