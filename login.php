<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <style>
        li {
            list-style: none;
        }
        
        form {
            border: 2px solid black;
            width: 300px;
            height: 300px;
        }

    </style>
</head>
<body>
    <div class="w3-dysplay-container">
        <a href="formulaire.php" class="w3-display-topright w3-text-white w3-btn " style="text-decoration: none;"><strong>INSCRIRE</strong></a> 
        <img src="image.jpeg" alt="" style="width:100%; height:100%">
        <form class="w3-margin w3-display-middle w3-center w3-lime w3-hover-yellow w3-opacity-min w3-card" action="conlogin.php" method="POST">
            
            <i class="fas fa-users w3-xxxlarge"></i><br><br>
             <li class="w3-serif w3-text-teal " style="font-size:20px">Email</li>
             <input class="w3-light-grey" type="email" name="email" required>
             <li class="w3-serif w3-text-teal " style="font-size:20px">MOT DE PASSE</li>
             <input class="w3-light-grey w3-text-teal" type="password" name="passwords" required><br><br>
             <button class="w3-btn w3-dark-grey w3-center">Login</button><br><br>
             <a href=""class="w3-text-blue">Mot de passe oublié?</a>
        </form>
    </div>
    




    </form>
</body>
</html>
