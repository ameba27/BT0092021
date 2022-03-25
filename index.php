<?php 
require_once('connex.php'); 
if($_POST){
    $recevoir="INSERT INTO avis (nom, commentaire) VALUES (?,?)";
    $lien->prepare($recevoir)->execute(array($_POST['nom'], $_POST['commentaire']));
    $nom=$_POST['nom'];
    $comment=$_POST['commentaire'];
}
$obtenir ="SELECT * FROM avis";
$tenir= $lien->prepare($obtenir);
$tenir->execute();
$new=$tenir->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .art{
            display: none;
        }
    
        .tof {
            display: none;
        }
    </style>
</head>
<body style="margin-right: 0px">
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
                    <li><a href="admin.php" class="w3-bar-item w3-button w3-small w3-hover-text-white">Espace Admin</a></li> 
                    <li><a href="afficheTab.php" class="w3-bar-item w3-button w3-small w3-hover-text-white">Gestion des profils</a></li>
                    <li><a href="contact.php" class="w3-bar-item w3-button w3-small w3-hover-text-white">Contact</a></li>
                </ul>
                 <ul class="inscription">
                    <li><a href="formulaire.php" class="w3-animate-right w3-bar-item w3-button w3-small w3-hover-text-white ">Inscription</a></li>
                    <li><a href="login.php" class="w3-animate-right w3-bar-item w3-button w3-small w3-hover-text-white">Connexion</a></li>
                 </ul>
            </div>
     </div>
     <div class="w3-display-container  w3-text-white">
         <img src="jolie.jpg" alt="" style="width: 100%; height: 250px">
          <div class="w3-padding w3-display-middle w3-animate-fading">
              <h2 style="font-size: 3.5rem;">Bienvenue sur notre site</h2>
          </div>
    </div>
    <div class="w3-display-container " style="width: 100%; margin-left: 50px; display: flex">
        <div class="w3-container " style="width: 80%; margin-top: 30px">
            <h2 class="w3-bottombar w3-border-purple"style="font-size: 2.5rem; margin-bottom: 40px; margin-left: 6px; font-family: Georgia, serif;"><strong> VOUS VERREZ QUELQUES IMAGES POUR ILLUSTRER NOTRE PAGE D'ACCUEIL</strong></h2>
            <img src="passio.jpg" alt="" style="width: 80%; Height: 500px">
            <p class="w3-text-grey" style="margin-bottom: 10px">Le lac et les montagnes</p>
            <h2 style="margin-bottom: 50px; width: 80%; font-family: Arial">Disons que rien n'est plus belle que la nature, rien n'est plus inspirante qu'elle. Le fait de simplement voir cette image nous apaise et nous pousse à vouloir aller à cet endroit magnifique.</h2>
            <img src="nature.jpeg" alt="" style="width: 80%; height: 500px">
            <p class="w3-text-grey" style="margin-bottom: 10px">La nature: ici nous avons une image modifiée</p>
            <h2 style="margin-bottom: 50px; width: 80%; font-family: Arial">Au fin fond de la forêt classique nous avons de belles vues sauf que dans notre illustration l'image a été retapée</h2>
            <img src="montage.jpg" alt="" style="width: 80%; height: 500px;">
            <p class="w3-text-grey" style="margin-bottom: 10px">Une belle image présentée sous forme de dessin</p>
            <h2 style="margin-bottom: 50px; width: 80%; font-family: Arial">Là, nous voyons des montagnes vertes on peut dire, car elles sont garnies d'arbres et d'herbes au-dessous desquelles se trouve une rivière qui rend plus belle l'image et fait ressortir l'aspect naturel de cette dernière.</h2>
            <img src="lion.jpg" alt="" style="width: 80%; height: 500px;">
            <p class="w3-text-grey" style="margin-bottom: 10px">Papa et enfant Lion :) </p>
            <h2 style="margin-bottom: 50px; width: 80%; font-family: Arial">Un pére doit être une référence pour son fils, et aussi une source d'aspiration. L'amour entre un père et son enfant tel est la description de cette image.</h2>
             <img src="conseil.jpg" alt="" style="width: 80%; height: 500px;">
             <p class="w3-text-grey" style="margin-bottom: 10px">Le conseil d'un père à son fils pour gagner un combat</p>
            <h2 style="margin-bottom: 50px; width: 80%; font-family: Arial">"Ton honneur doit être plus fort que tes émotions". C'est un bon conseil pour faire face aux aléas de la vie.</h2>

            
        </div>
        <div class="w3-container" style="margin-top: 200px; margin-left: 50px">
        
            <a href="" class="w3-bar-item w3-button w3-small w3-hover-text-white w3-purple" style="margin-bottom: 5px">Répertoire</a><br>
            <a href="afficheTab.php" class="w3-bar-item w3-button w3-small w3-hover-text-white w3-purple" style="margin-bottom: 5px">Gestion des profils</a><br>
            <a href="" class="w3-bar-item w3-button w3-small w3-hover-text-white w3-purple">Informations</a><br><br>
            <a href="https://www.facebook.com/" class="w3-border w3-xxlarge w3-blue w3-padding w3-round-xlarge"><i class="fa fa-facebook w3-xxlarge w3-text-white " style="margin-top: 17px"></i></a><br>
                <a href="https://www.instagram.com/" class="w3-border w3-xxlarge w3-pink w3-padding w3-round-xlarge" ><i class="fa fa-instagram w3-xxlarge w3-text-white " style="margin-top: 17px"></i></a><br>
                <a href="https://www.whatsapp.com/" class="w3-border w3-xxlarge w3-green w3-padding w3-round-xlarge" ><i class="fa fa-whatsapp w3-xxlarge w3-text-white " style="margin-top: 17px"></i></a><br>
                <form action="" method="POST" class="w3-purple w3-padding" style="margin-top: 20px; margin-right: 50px">
                    <legend>Vos appréciations en quelques mots:</legend>
                    <input type="text" name="nom" class=" w3-round-xlarge w3-margin w3-hover-light-gray " style="width: 85%; margin-top: 50px;" placeholder="Nom complet"><br>
                    <input type="text" name="commentaire" class=" w3-round-xlarge w3-margin w3-hover-light-gray" style="width: 85%; margin-bottom: 40px" placeholder="Quelques mots SVP!">
                    <input type="submit" class="w3-btn w3-black ">
                </form> 
            <div class="w3-topbar w3-border-orange" style="margin-top: 200px; margin-right: 20px">
            <h2 class="w3-text-purple "style="margin-left: 110px; font-size: 2.5rem; margin-bottom: 10px;  font-family: Georgia, serif;"><strong><span class="w3-text-orange">P'</span> ART</strong></h2>
            </div>    
            <div class="w3-display-content w3-card-4 w3-animate-right" style="margin-bottom: 50px;width: 70% ; margin-left: 10px">
                <div class="w3-display-container w3-middle  w3-hover-opacity" style="width: 100%;">
                    <img class="art" src="./art/bela.jpg" alt="" style="width: 100%; height: 500px">
                    <img class="art" src="./art/masque.jpg" alt="" style="width: 100%; height: 500px">
                    <img class="art" src="./art/soufr.jpg" alt="" style="width: 100%; height: 500px">
                
                
                    <a href="arts.php" class="w3-btn w3-purple w3-display-middle w3-hover-orange">Visiter</a>
                </div>

            </div>
            <div class="w3-topbar w3-border-orange" style="margin-top: 200px; margin-right: 20px">
            <h2 class="w3-text-purple "style="margin-left: 70px; font-size: 2.5rem; margin-bottom: 10px;  font-family: Georgia, serif;"><strong><span class="w3-text-orange">P'</span> NATURE</strong></h2>
            </div>
            <div class="w3-display-content w3-card-4 w3-animate-right" style="width: 70% ; margin-left: 10px">
                <div class="w3-display-container w3-middle  w3-hover-opacity" style="width: 100%;">
                    
                    <img class="nature" src="./nature/jolie.jpg" alt="" style="width: 100%; height: 500px">
                   
                     <a href="natur.php" class="w3-btn w3-purple w3-display-middle w3-hover-orange">Visiter</a>
                </div>
            </div>
            <div class="w3-topbar w3-border-orange" style="margin-top: 200px; margin-right: 20px">
            <h2 class="w3-text-purple "style="margin-left: 70px; font-size: 2.5rem; margin-bottom: 10px;  font-family: Georgia, serif;"><strong><span class="w3-text-orange">P'</span> ANIMAL</strong></h2>
            </div>
            <div class="w3-display-content w3-card-4 w3-animate-right" style="width: 70% ; margin-left: 10px">
                <div class="w3-display-container w3-middle  w3-hover-opacity" style="width: 100%;">
                    
                    <img class="nature" src="./animaux/zebre.jpg" alt="" style="width: 100%; height: 500px">
                   
                     <a href="animal.php" class="w3-btn w3-purple w3-display-middle w3-hover-orange">Visiter</a>
                </div>
            </div>

           
            <div class="w3-topbar w3-border-orange" style="margin-top: 200px; margin-right: 20px">
                <h2 class="w3-text-purple "style="margin-left: 70px; font-size: 2.5rem; margin-bottom: 50px;  font-family: Georgia, serif; "><strong><span class="w3-text-orange">P'</span> PAROLE</strong></h2>
            </div>
            <div id="auto" class="carousel slide w3-hover-opacity " data-bs-ride="carousel" style="margin-right: 70px">
                
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#auto" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#auto" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#auto" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#auto" data-bs-slide-to="3"></button>
                </div>
                <div class="carousel-inner w3-display-container ">
                    
                    <div class="carousel-item active">
                        <img src="./société/reussite.jpg" alt="" style="width: 100%; height: 350px" class="d-block">
                    </div>
                    <div class="carousel-item ">
                        <img src="./société/force.jpg" alt="" style="width: 100%; height: 350px" class="d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="./société/resistant.jpg" alt="" style="width: 100%; height: 350px" class="d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="./société/vré.jpg" alt="" style="width: 100%; height: 350px" class="d-block">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#auto" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#auto" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                <div class="w3-display-middle ">
                    <a href="conseils.php" class="w3-btn w3-purple w3-display-middle w3-hover-orange w3-opacity">Visiter</a>
                </div>
            </div>
        </div>

  
    </div>
         
         <div class="w3-container-bottom w3-light-gray" style="width: 100%; height: 300px; display: flex">
             <div class="w3-display-container"  style="width: 50%">
                 <div class=" w3-container w3-border w3-border-black " style="width: 100%; height: 300px">
                 <h4 style="font-size: 1.5rem; margin-bottom: 40px; margin-left: 170px; font-family: Georgia, serif; color: purple;"><strong> COMMENTAIRES</strong></h4>
                     <?php foreach(array_reverse($new) as $row){ ?>
                     <strong class="w3-text-orange"><i class="fa fa-user w3-large w3-text-purple"></i><?= $row['nom']; ?></strong>:&nbsp; 
                     <?= $row['commentaire']; ?><br>
                     <?php } ?>
                 </div>

             </div>
             <div class="w3-content  w3-border w3-border-black" style="width: 50%; height: 300px; ">
                 <img class="tof w3-animate-right"src="parole.jpg" alt="" style="width: 100%; height: 300px">
                 <img class="tof w3-animate-right"src="chat1.jpg" alt="" style="width: 100%; height: 300px">
                 <img class="tof w3-animate-right"src="chat2.jpg" alt="" style="width: 100%; height: 300px">

             </div>

         </div>    
         <div class="w3-display-container bottom" style="">
            <div class="w3-container-bottom w3-display-bottom w3-black" style="display: flex; justify-content: space-between; padding: 50px">
                 <div class="w3-container ">
                 <a href="https://www.facebook.com/" class="w3-border w3-xlarge w3-blue w3-padding w3-round-xlarge"><i class="fa fa-facebook w3-xlarge w3-text-white " style="margin-top: 17px"></i></a>
                     <a href="https://www.instagram.com/" class="w3-border w3-xlarge w3-pink w3-padding w3-round-xlarge" ><i class="fa fa-instagram w3-xlarge w3-text-white " style="margin-top: 17px"></i></a>
                     <a href="https://www.whatsapp.com/" class="w3-border w3-xlarge w3-green w3-padding w3-round-xlarge" ><i class="fa fa-whatsapp w3-xlarge w3-text-white " style="margin-top: 17px"></i></a>
                     <a href="https://www.linkedin.com/" class="w3-border w3-xlarge w3-blue w3-padding w3-round-xlarge" ><i class="fa fa-linkedin w3-xlarge w3-text-white " style="margin-top: 17px"></i></a><br>
                 </div>
                 <div class="w3-container">
                     <a href="index.php"><i class="fa fa-home"></i>Home</a><br>
                     <a href=""><i class="fa fa-book"></i> A propos</a><br>
                     <a href=""><i class="fa fa-globe"></i> Informations</a><br>
                     <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a><br>
                     <a href=""><i class="fa fa-cog"></i> Paramètre</a>
                 </div>
                 <div class="w3-container" style="display: flex; justify-content: flex-end">
                     <form action="" method="POST" style="margin-bottom: 5px" >
                        <input type="email" class="w3-input " placeholder="Entrer votre email" style="width: 200px; height: 15px">
                         <button class="w3-indigo w3-button w3-round w3-tiny" style="width:200px ">Abonner</button>
                     </form>
                 </div>
             </div><br>
             <div class="w3-container-bottom w3-purple w3-center w3-display-bottommiddle  " style="width: 100%; margin: 0 auto; padding: 10px">
        
                &copy Amadou & Souleymane BootCamp 2021
            </div>
         </div>









         
    
    <script src="./jS/commentaire.js"></script>
    <script src="./jS/art.js"></script>
    
  
</body>
</html>