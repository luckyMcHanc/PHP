<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="body">
    <section class = "sign">
    <div class = "head">
        <h1>Create a new account</h1>
        <p>it's quick and easy</p>
    </div>
    <div class = "img">
    <img src="https://img.icons8.com/cute-clipart/50/000000/login-rounded-right.png">
    </div>
    <div class = "form">
    <form method = "POST" action = "sign.php">
        <div ><label for="name"><b>Name</b></label>
        <input type="text" class = "name" name = "name" placeholder= "Enter your name" required></div>
       <div> <label for="email"><b>Email</b></label>
        <input type="email" class = "name" placeholder="Enter Email" name="email" required></div>
       <div> <label for="psw"><b>Password</b></label>
        <input type="password" class = "name" placeholder="Enter Password" name="Password" required></div>
        <div><label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" class = "name" placeholder="Repeat Password" name="psw-repeat" required></div>
    <button type = "submit" action = "submit" value = "submit" class = "button"><b>Register</b></button>
    </form>
</div>
</section>
</body>
</html>