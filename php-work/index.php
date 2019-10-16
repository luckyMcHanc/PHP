<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class = "header">
    <nav class = "nav">
    <div><a href = "#header">Home</a> </div>   
    <div><a href = "#man">Men</a> </div>
    <div> <a href = "#Woman">Women</a></div>
    <div><a href = "#kids">Kids</a></div>
    </nav>
    <nav class = "sign-in">
    <?php

      session_start();

      $mySession = $_SESSION["user"];


      if (empty($mySession))
      {
        echo 
        "
        <div><a href = 'Login.php'>Login</a> </div> 
        <div><a href = 'Signup.php'>Signup</a> </div> 
        ";
      } else {
        echo "<div><a href = 'logout.php'>Logout</a> </div> ";

        include('connect.php');
        $query = mysqli_query($con,"SELECT * FROM `users` WHERE Email= '$mySession'");
        $result = $con->query($query);
        $row = $result->fetch_assoc();
        $name = $row['Name'];
        echo "<b>$name</b>";
        
        
      }

    ?>
    </nav>
    </section>
    <section class = "main">
        <img src = "resource/banner_img.png" atl = "main">
    </section>
    <section class = "selling">
            <h2>Browse our Productts</h2>

            <div id="myBtnContainer">
              <button class="btn active" onclick="filterSelection('all')"> Show all</button>
              <button class="btn" onclick="filterSelection('cars')"> Cars</button>
              <button class="btn" onclick="filterSelection('animals')"> Animals</button>
              <button class="btn" onclick="filterSelection('fruits')"> Fruits</button>
              <button class="btn" onclick="filterSelection('colors')"> Colors</button>
            </div>
            
            <div class="container">
              <div class="filterDiv cars">BMW</div>
              <div class="filterDiv colors fruits">Orange</div>
              <div class="filterDiv cars">Volvo</div>
              <div class="filterDiv colors">Red</div>
              <div class="filterDiv cars animals">Mustang</div>
              <div class="filterDiv colors">Blue</div>
              <div class="filterDiv animals">Cat</div>
              <div class="filterDiv animals">Dog</div>
              <div class="filterDiv fruits">Melon</div>
              <div class="filterDiv fruits animals">Kiwi</div>
              <div class="filterDiv fruits">Banana</div>
              <div class="filterDiv fruits">Lemon</div>
              <div class="filterDiv animals">Cow</div>
            </div>
            
            <script>
            filterSelection("all")
            function filterSelection(c) {
              var x, i;
              x = document.getElementsByClassName("filterDiv");
              if (c == "all") c = "";
              for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
              }
            }
            
            function w3AddClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
              }
            }
            
            function w3RemoveClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                  arr1.splice(arr1.indexOf(arr2[i]), 1);     
                }
              }
              element.className = arr1.join(" ");
            }
            
            // Add active class to the current button (highlight it)
            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function(){
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
              });
            }
            </script>
    </section>
</body>
</html>
