<?php
require('connex.php');
    if($_POST){
    
            $receiv="INSERT INTO contact (nom, prenom, email, message) VALUES (?,?,?,?)";
            $lien->prepare($receiv)->execute(array($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message']));
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $email=$_POST['email'];
            $message=$_POST['message'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-display-container bodi ">
    <div class="x3-display-container w3-purple fixed-top" >
       
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
            <div class="w3-text-purple w3-animate-top "style="margin-top: 60px">
        
       <h2><marquee> N'hésitez pas à nous envoyer des messages ou à nous contacter </marquee></h2>
    </div>
     </div><br>
    <div class="w3-card w3-orange" style="width: 70%; margin-left: 200px; margin-bottom: 90px; heigth: 100px">
        <div class="w3-container  w3-purple">
            <h2 ><legend><strong class="w3-center w3-center  w3-text-white" style="margin-left: 400px; font-weight: bold">CONTACT:</strong></legend></h2>
        </div>
        
        <div class="w3-cell-row">
             <div class="w3-container w3-cell">
                  <h4><legend><strong style="text-decoration: underline; color: purple;">Amadou Ba:</strong></legend></h4>
                  <h4><i class="fas fa-envelope"> : amadou.ba2@uvs.edu.sn</i></h4>
                  <h4><i class="fas fa-phone"> : +221 77 183 85 32</i></h4>
                  <br><br>
                  <h4><legend><strong style="text-decoration: underline; color: purple">Souleymane Mbaye:</strong></legend></h4>
                  <h4><i class="fas fa-envelope"> : julesreal87@gmail.com</i></h4>
                  <h4><i class="fas fa-phone"> : +221 78 121 64 55</i></h4>
             </div>
             <div class="w3-container W3-cell-right" style="margin-bottom: 20px">
                 
                 <form action="" method="POST" >
                         
                         <input type="text" name="nom" placeholder="Nom" class=" w3-border  w3-margin" style="width: 400px; height: 40px"><br>
                         <input type="text" name="prenom" placeholder="Prénom" class=" w3-border  w3-margin" style="width: 400px; height: 40px"><br>
                         <input type="email" name="email" placeholder="Email" class=" w3-border  w3-margin" style="width: 400px; height: 40px"><br>
                         <textarea name="message" id="" cols="30" rows="10" placeholder="Entrer votre message" class="w3-margin" style="width: 500px"></textarea><br>
                         <input type="submit" value="Envoyer" class="w3-btn w3-purple" style="margin-left: 100px; width: 300px">
                 </form>
             </div>
        </div>
    </div>
    <div class="w3-display-container w3-botommiddle w3-purple w3-center w3-padding " style="width: 100%; height: 30px margin-top: 100px">
       &copy Amadou & Souleymane BootCamp 2021
    </div>
</body>
</html>