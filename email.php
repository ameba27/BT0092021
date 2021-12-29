<?php
require('connex.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
</head>
<body>
    <div class="w3-container">
        
        <div class="W3-container w3-topmiddle w3-center w3-card w3-blue" style="width: 500px; margin-left: 400px"> 
            <h2 class="W3-large">Mot de passe oublié</h2>
            <form action="emaili.php" method="POST" class="w3-middle w3-padding">
                <input class="w3-input w3-hover-light-grey w3-border  " type="email" name="email" placeholder="Taper votre email"><br>
                <input class="w3-btn w3-sand" type="submit" name="soumis">

            </form>
        </div>
    </div>
</body>
</html>