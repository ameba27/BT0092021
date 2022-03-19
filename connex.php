<?php
$user='root';
$password='';

try {
    $lien = new PDO('mysql:host=localhost; dbname=sunuprojet', $user ,$password);
    //echo "connexion établie ";
} catch (\throwable $ba) {
    echo "erreur est:".$ba->getmessage();
}
?>