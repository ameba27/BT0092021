<?php
require('connex.php');

try {
    $sql="INSERT INTO clients (nom, prenom, sexe, date_de_naissance, lieu_de_naissance, adresse, telephone, pseudo, email, passwords) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $lien->prepare($sql)->execute(array($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['date_de_naissance'],$_POST['lieu_de_naissance'],$_POST['adresse'],$_POST['telephone'], $_POST['pseudo'],$_POST['email'],md5($_POST['passwords'])));
   // echo " Enregistrement effectué avec succès";
} catch (\throwable $ba) {
    echo "erreur est : ".$ba->getmessage();
}
?>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-panel w3-green">
        <h1>INSCRIPTION REUSSIE!!!</h1>
        <p>Vous pouvez vous connecter à votre compte avec vos identifiants</p>
    </div>
    <?php
     include('login.php');
    ?>
</body>
</html>