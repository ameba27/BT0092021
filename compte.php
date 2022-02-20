<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
    <div class="w3-display-container">
        <header class="w3-display-top w3-purple " style="width: 1OO%; height: 90px;">
        <div class="w3-dropdown-click w3-right w3-purple" style="margin-right: 60px; margin-top: 20px;">
             <i onclick="myFunction()" class="fa fa-user w3-text-purple w3-xxlarge w3-circle w3-btn w3-yellow"></i>
             <div id="fair" class="w3-dropdown-content w3-bar-block w3-border w3-circle" >
                  <a href="deconnex.php" class="w3-yellow w3-bar-item w3-btn">Déconnexion</a>
             </div>
       </div>
        </header>
        <img src="trav.jpg" style="width: 100%;" alt="" class="w3-hidden">
        
        <footer class="w3-display-top w3-purple w3-center w3-padding" style="width: 1OO%; height: 40px;">
        &copy Amadou & Souleymane BootCamp 2021
     </footer>
    </div>

    <script>
        function myFunction() {
             var x = document.getElementById("fair");
             if (x.className.indexOf("w3-show") == -1) {
                 x.className += " w3-show";
                 } else { 
                      x.className = x.className.replace(" w3-show", "");
                      }
              }
    </script>
</body>
</html>