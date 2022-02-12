<?php
require_once('connex.php');

if(isset($_POST)){
    if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST[`nom`]) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['sexe']) && !empty($_POST['sexe']) && isset($_POST['date_de_naissance']) && !empty($_POST['date_de_naissance']) && isset($_POST['lieu_de_naissance']) && !empty($_POST['lieu_de_naissance']) && isset($_POST['adresse']) && !empty($_POST['adresse']) && isset($_POST['telephone']) && !empty($_POST['telephone']) && isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['passwords']) && !empty($_POST['passwords'])){
        $id = strip_tags($_GET['id']);
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $genre = strip_tags($_POST['sexe']);
        $date = strip_tags($_POST['date_de_naissance']);
        $lieu = strip_tags($_POST['lieu_de_naissance']);
        $adresse = strip_tags($_POST['adresse']);
        $telephone = strip_tags($_POST['telephone']);
        $pseudo = strip_tags($_POST['pseudo']);
        $email = strip_tags($_POST['email']);
        $pass = strip_tags($_POST['passwords']);
        $sql='UPDATE `clients` SET `nom`=:nom, `prenom`=:prenom, `sexe`=:sexe,  `date_de_naissance`=:date_de_naissance, `lieu_de_naissance`=:lieu_de_naissance, `adresse`=:adresse, `telephone`=:telephone, `pseudo`=:pseudo, `email`=:email, `passwords`=:passwords;';
        $avoir= $lien->prepare($sql);

        $avoir->bindValue('nom', $nom, PDO::PARAM_STR); 
        $avoir->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $avoir->bindValue(':sexe', $genre, PDO::PARAM_STR);
        $avoir->bindValue(':date_de_naissance', $date, PDO::PARAM_INT);
        $avoir->bindValue(':lieu_de_naissance', $lieu, PDO::PARAM_STR);
        $avoir->bindValue(':adresse', $adresse, PDO::PARAM_STR);
        $avoir->bindValue(':telephone', $telephone, PDO::PARAM_INT);
        $avoir->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $avoir->bindValue(':email', $email, PDO::PARAM_STR);
        $avoir->bindValue(':passwords', $pass, PDO::PARAM_STR);
        $avoir->bindValue(':id', $id, PDO::PARAM_INT);

        $avoir->execute();

        header('Location: afficheTab.php');
    }
}

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id= strip_tags($_GET['id']);
    $sql='SELECT * FROM `clients` WHERE `id`=:id;';

    $avoir= $lien->prepare($sql);
    $avoir->bindValue(':id', $id, PDO::PARAM_INT);
    $avoir->execute();
    $base= $avoir->fetch();
}
   
    ?>
     <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="x3-display-container w3-purple fixed-top">
       
            <div class="header" style="height: 40px">
                <ul class="menu">
                    <li><a href="index.php" class="w3-bar-item w3-button w3-purple w3-small"><i class="fas fa-home"></i>Home</a></li>
                    <li class="w3-dropdown-hover">
                        <a href="" class="w3-bar-item w3-button w3-small w3-hover-text-white ">Répertoire</a>
                        <div class="collapse w3-border w3-dropdown-content w3-bar-block w3-purple " style="list-style: none" >       
                                <a href="arts.php"  class=" w3-button  w3-bar-item w3-hover-text-white w3-border-bottom">art</a>
                                <a href="natur.php"  class=" w3-bar-item w3-button w3-hover-text-white w3-border-bottom">nature</a>
                                <a href="animal.php"  class=" w3-bar-item w3-button w3-hover-text-white w3-border-bottom">animal</a>
                                <a href="conseils.php"  class=" w3-bar-item w3-button w3-hover-text-white ">parole</a>
                       </div> 
                    </li> 
                    <li><a href="" class="w3-bar-item w3-button w3-small w3-hover-text-white">Informations</a></li> 
                    <li><a href="afficheTab.php" class="w3-bar-item w3-button w3-small w3-hover-text-white">Gestion des profils</a></li>
                    <li><a href="contact.php" class="w3-bar-item w3-button w3-small w3-hover-text-white">Contact</a></li>
                </ul>
                 <ul class="inscription">
                    <li><a href="formulaire.php" class="w3-animate-right w3-bar-item w3-button w3-small w3-hover-text-white ">Inscription</a></li>
                    <li><a href="login.php" class="w3-animate-right w3-bar-item w3-button w3-small w3-hover-text-white">Connexion</a></li>
                 </ul>
            </div>
        </div>
<div class="w3-text-purple w3-animate-top">
    
    <h2 class= "w3-text-xlarge"><marquee> Vous pouvez modifier les données des&nbsp; <i class="fa fa-users w3-text-orange"></i>&nbsp;comme vous le voulez</marquee></h2>
 </div>
 <div class="w3-card w3-display-middle " style="width: 90%">
     <div class="w3-container w3-orange">
     <h2 class="w3-center w3-text-purple" style="font-weight: bold">Modification des données <i class="fa fa-pencil w3-text-purple"></i></h2>
     </div>
     <div class="w3-container  ">
     <form  method="POST"  style="display: flex; height: 340px;">
         <ul style="list-style: none; margin-top: 10px; margin-left: 50px">
             <li>Nom</li><input  type="text" name="nom"  value="<?= $base['nom'] ?>"><br><br>
             <li>Prénom</li><input  type="text" name="prenom"  value="<?= $base['prenom'] ?>"><br><br><br>
             <li>Genre</li><select  name="sexe" id="" style="width: 200px"  value="<?= $base['sexe'] ?>">
                 <option value=""disabled selected>Genre</option>
                 <option value="Femme">Femme</option>
                 <option value="Homme">Homme</option>
             </select><br>
         </ul>
         <ul style="list-style: none; margin-top: 10px; margin-left: 150px">
             <li>Date de naissance</li><input  type="date" name="date_de_naissance"  value="<?= $base['date_de_naissance'] ?>"><br><br>
             <li>Lieu de naissance</li><input  type="text" name="lieu_de_naissance"  value="<?= $base['lieu_de_naissance'] ?>"><br><br>
             <li>Adresse</li><input type="text" name="adresse"  value="<?= $base['adresse'] ?>"><br><br>
         </ul>
         <ul style="list-style: none; margin-top: 10px; margin-left: 150px">
             
             <li>Téléphone</li><input type="tel" name="telephone"  value="<?= $base['telephone'] ?>"><br><br>
             <li>Pseudo</li><input type="text" name="pseudo"  value="<?= $base['pseudo'] ?>"><br><br>
             <li>Email</li><input type="email" name="email"  value="<?= $base['email'] ?>"><br><br>
             <li>Password</li><input type="password" name="passwords"  value="<?= $base['passwords'] ?>">
         </ul>
         <input type="submit" class="w3-btn w3-purple w3-tiny w3-display-bottommiddle" style="height: 35px; margin-bottom: 20px">
         <input type="hidden" name='id'  value="<?= $base['id'] ?>">
     </form>
     </div>
 </div>
        





 <div class="w3-container-bottom w3-purple w3-center w3-display-bottommiddle  " style="width: 100%; margin: 0 auto; padding: 10px">
        
        &copy Souleymane & Amadou BootCamp 2021
 </div>
    </body>
    </html>