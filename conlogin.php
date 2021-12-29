<?php
session_start();
require('connex.php');

if(isset($_POST['email']) && isset($_POST['passwords'])) {

    $email = htmlspecialchars($_POST['email']);
    $passe = htmlspecialchars($_POST['passwords']);

    $confirm = $lien->prepare('SELECT email, passwords FROM clients WHERE email=?');
    $confirm->execute(array($email));
    //Pour rechercher//
    $data = $confirm->fetch();
    //Pour vérifier//
    $row= $confirm->rowCount();

    if($row == 1) {

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

            //$passe= hash('sha256', $passe);

            if($data['passwords'] === $passe) {
                $_SESSION['user'] = $data['email'];
                header('location: compte.php');

            }else header('location: login.php?login_err_passwords');

        }else header('location: login.php?login_err_email');

    }else header('location: login.php?erreur_veuillez_entrer_les_bons_identifiants_oubien_vous_inscrire');

} else header('location: login.php');
?>