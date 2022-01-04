<?php
include('connex.php');

try {
    $sql="INSERT INTO contact (nom, prenom, email, message ) VALUES (?,?,?,?)";
    $lien->prepare($sql)->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['message']));
   echo " Message envoyé avec succès";
} catch (\throwable $ba) {
    echo "erreur est : ".$ba->getmessage();
    
}
include('contact.php');
?>
