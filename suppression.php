<?php
require('connex.php');
    $car = $lien->prepare('DELETE FROM clients WHERE id=:num LIMIT 1');
    $car->bindValue(':num', $_GET['id'], PDO::PARAM_INT);
    $executeIsOk = $car->execute();
    if($executeIsOk){
        echo 'le contact a été supprimé';
    }
    else{
        echo 'Echec de la suppression';
    }


?>