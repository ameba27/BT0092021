<?php
require('connex.php');

$sql="SELECT * FROM clients";
$query = $lien->prepare($sql);
$query->execute();
$base=$query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w3-orange">
    <div class="x3-display-container w3-purple ">
       
           <div class="header" style="height: 40px; margin-bottom: 20px">
               <ul class="menu">
                   <li><a href="index.php" class="w3-bar-item w3-button w3-purple w3-small"><i class="fas fa-home"></i>Home</a></li>
                   <li><a href="" class="w3-bar-item w3-button w3-small w3-hover-text-white" >Formation</a></li>
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
        
        <h2><marquee> Voici la liste des utilisateurs </marquee></h2>
     </div>
    <div class="w3-card w3-white w3-display-middle" style="width: 90%">
        <h2 class="w3-center w3-text-orange" style="font-weight: bold">La liste des utilisateurs</h2>
        <table class="w3-table-all w3-centered w3-hoverable ">
            <thead>
                <tr class="w3-purple ">
                    <th>iD</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Date de naissance</th>
                    <th>Lieu de naissance</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Password</th>
                
                </tr>
            </thead>
        
            <tbody>
                 <?php
                 foreach($base as $nas) {
                 ?>
                <tr class="w3-small w3-hover-purple ">
                <td><?= $nas['id']?></td>
                <td><?= $nas['nom']?></td>
                <td><?= $nas['prenom']?></td>
                <td><?= $nas['sexe']?></td>
                <td><?= $nas['date_de_naissance']?></td>
                <td><?= $nas['lieu_de_naissance']?></td>
                <td><?= $nas['adresse']?></td>
                <td><?= $nas['telephone']?></td>
                <td><?= $nas['pseudo']?></td>
                <td><?= $nas['email']?></td>
                <td><?= $nas['passwords']?></td>
                    <td class="w3-row-padding w3-bar-items  w3-purple"><a href="suppression.php?id=<?=$nas['id']?>"><i class="fa fa-trash w3-large  w3-text-red"></i></a></td>
                    <td class="w3-row-padding w3-bar-items  w3-purple"><a href="modif.php?id=<?=$nas['id']?>"><i class='fa fa-edit w3-large  w3-text-green'></i></a></td>
                    <td class="w3-row-padding w3-bar-item  w3-purple"><a href="detail.php?id=<?=$nas['id']?>"><i class="fa fa-eye w3-large  w3-text-yellow"></i></a></td>
                </tr>
                <?php
                  }
                 ?>
            </tbody>
        </table>
    </div>
    <div class="w3-container-bottom w3-purple w3-center w3-display-bottommiddle  " style="width: 100%; margin: 0 auto; padding: 10px">
        
           &copy Souleymane & Amadou BootCamp 2021
    </div>
</body>
</html>