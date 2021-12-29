<?php
require('connex.php');

if(isset($_GET['email']) && !empty($_GET['email'])) {
    $email= htmlspecialchars(base64_decode($_GET['email']));
    $confirm = $lien->prepare('SELECT * FROM initialisation_mp WHERE email');
    $confirm->execute($email);
    $row= $confirm->rowCount();

    if($row == 0) {
        echo "lien non valide";
        die();
    }
}
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
        <h2 class="W3-large">Réinitialisation du Mot de passe</h2>
            <form action="modpaceli.php" method="POST" class="w3-middle w3-padding">
                <input type="hidden" name="email" value="<?php echo base64_decode(htmlspecialchars($_GET['email'])); ?>"/>
                <input class="w3-input w3-hover-light-grey w3-border" type="password" name="passwords" placeholder="Taper votre nouveau mot de passe"><br>
                <input class="w3-input w3-hover-light-grey w3-border" type="password" name="passwords_req" placeholder="Confirmer votre nouveau mot de passe"> <br><br>
                <input class="w3-btn w3-sand" type="submit" name="submit">
            </form>
        </div>  
    </div>
</body>
</html>