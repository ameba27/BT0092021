<?php
session_start();

// On inclut la connexion à la base
require_once('connex.php');

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    // On écrit notre requête
    $sql = 'SELECT * FROM `clients` WHERE `id`=:id';

    // On prépare la requête
    $query = $lien->prepare($sql);

    // On attache les valeurs
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    // On exécute la requête
    $query->execute();

    // On stocke le résultat dans un tableau associatif
    $attitude = $query->fetch();

    if(!$attitude){
        header('Location: afficheTab.php');
    }
}else{
    header('Location: afficheTab.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        
        <h2><marquee><i class="fa fa-eye w3-text-orange w3-xlarge"></i> Voici Les Informations Sur <strong class="w3-text-large"><?= $attitude['prenom'] ?>&nbsp; <?= $attitude['nom'] ?></strong> &nbsp;&nbsp;<i class="fas fa-book-reader w3-text-orange w3-xlarge"></i></marquee></h2>
     </div>
     <div class="w3-card w3-display-middle" style="width: 90%;">
        <div class="w3-container w3-purple">
        <h2 class="w3-center w3-text-orange w3-purple" style="font-weight: bold;"> <?= $attitude['prenom'] ?>&nbsp; <?= $attitude['nom'] ?>&nbsp;<i class="fa fa-user w3-animate-zoom"></i></h2>
        </div>
        
       <div CLass="w3-container" style="height: 200px; display: flex;">
           <ul style="list-style: none; margin-left: 50px; margin-top: 10px">
            
               <li><p class="w3-text-purple"><strong class="w3-text-orange">GENRE:&nbsp;</strong><strong><?= $attitude['sexe'] ?></strong></p></li><br>
               <li><p class="w3-text-purple"><strong class="w3-text-orange">DATE DE NAISSANCE:&nbsp;</strong><strong><?= $attitude['date_de_naissance'] ?></strong></p></li><br>
               <li><p class="w3-text-purple"><strong class="w3-text-orange">LIEU DE NAISSANCE:&nbsp;</strong><strong><?= $attitude['lieu_de_naissance'] ?></strong></p></li><br>
               <li><p class="w3-text-purple"><strong class="w3-text-orange">ADRESSE:&nbsp;</strong><strong><?= $attitude['adresse'] ?></strong></p></li><br>
        </ul> 
         <ul style="list-style: none; margin-left: 350px; margin-top: 10px">
             <li><p class="w3-text-purple"><strong class="w3-text-orange">TELEPHONE:&nbsp;</strong><strong><?= $attitude['telephone'] ?></strong></p></li><br>
            <li><p class="w3-text-purple"><strong class="w3-text-orange">PSEUDO:&nbsp;</strong><strong><?= $attitude['pseudo'] ?></strong></p></li><br>
             <li><p class="w3-text-purple"><strong class="w3-text-orange">EMAIL:&nbsp;</strong><strong><?= $attitude['email'] ?></strong></p></li><br>
            <li> <p class="w3-text-purple"><strong class="w3-text-orange">PASSWORD:&nbsp;</strong><strong><?= $attitude['passwords'] ?></strong></p></li> 
        </ul>

      
      </div>
   </div>











    <div class="w3-container-bottom w3-purple w3-center w3-display-bottommiddle  " style="width: 100%; margin: 0 auto; padding: 10px">
        
                &copy Souleymane & Amadou BootCamp 2021

    </div>
</body>
</html>