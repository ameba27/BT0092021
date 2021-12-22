<?php
include('connex.php');

try {
    $sql="INSERT INTO clients (nom, prenom, sexe, date_de_naissance, lieu_de_naissance, adresse, telephone, pseudo, email, passwords) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $lien->prepare($sql)->execute(array($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['date_de_naissance'],$_POST['lieu_de_naissance'],$_POST['adresse'],$_POST['telephone'], $_POST['pseudo'],$_POST['email'],$_POST['passwords']));
   // echo " Enregistrement effectué avec succès";
} catch (\throwable $ba) {
    echo "erreur est : ".$ba->getmessage();
}
?>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./font/css/all.css">
    
</head>
<body>
    <div class="w3-panel w3-green">
        <h1>INSCRIPTION REUSSIE!!!</h1>
        <p>Vous pouvez accéder à votre compte ou retourner sur la page d'accueil</p>
    </div>
    <?php
     include('formulaire.php');
    ?>
</body>
</html>