<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOG IN</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="body">
        <section class = "sign">
        <div class = "head">
            <h1>Log in to your account account</h1>
        </div>
        <div class = "img">
        <img src="https://img.icons8.com/cute-clipart/50/000000/login-rounded-right.png">
        </div>
        <div class = "form">
        <form method = "POST" action = "log.php">
           <div> <label for="email"><b>Email</b></label>
            <input type="email" class = "name" placeholder="Enter Email" name="email" required></div>
           <div> <label for="psw"><b>Password</b></label>
            <input type="password" class = "name" placeholder="Enter Password" name="Password" required></div>
        <button type = "Submit" action = "submit" value = "submit" class = "button"><b>Log in</b></button>
        </form>
    </div>
    </section>
    </body>
</html>