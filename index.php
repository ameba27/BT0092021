<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-right: 0px">
    <div class="x3-display-container w3-purple entete">
       
            <div class="header" style="height: 40px">
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
     <div class="w3-display-container  w3-text-white">
         <img src="jolie.jpg" alt="" style="width: 100%; height: 250px">
          <div class="w3-padding w3-display-middle w3-animate-fading">
              <h2 style="font-size: 3.5rem;">Bienvenue sur notre site</h2>
          </div>
    </div>
    <div class="w3-display-container " style="width: 100%; margin-left: 50px; display: flex">
        <div class="w3-container " style="width: 75%; margin-top: 30px">
            <h2 class="w3-bottombar w3-border-purple"style="font-size: 2.5rem; margin-bottom: 40px; margin-left: 6px; font-family: Georgia, serif;"><strong> VOUS VERREZ QUELQUES IMAGES POUR ILLUSTRER NOTRE PAGE D'ACCEUIL</strong></h2>
            <img src="passio.jpg" alt="" style="width: 80%; Height: 500px; margin-bottom: 50px">
            <img src="nature.jpeg" alt="" style="width: 80%; height: 500px">
            <p class="w3-text-grey" style="margin-bottom: 50px">La nature: ici nous avons une image modifiée</p>
            <img src="montage.jpg" alt="" style="width: 80%; height: 500px; margin-bottom: 50px">
            <img src="lion.jpg" alt="" style="width: 80%; height: 500px; margin-bottom: 50px">
            
        </div>
        <div class="w3-container" style="margin-top: 200px">
            <a href="" class="w3-bar-item w3-button w3-small w3-hover-text-white w3-purple" style="margin-bottom: 5px">Communiquer</a><br>
            <a href="" class="w3-bar-item w3-button w3-small w3-hover-text-white w3-purple" style="margin-bottom: 5px">Répertoire</a><br>
            <a href="afficheTab.php" class="w3-bar-item w3-button w3-small w3-hover-text-white w3-purple" style="margin-bottom: 5px">Gestion des profils</a><br>
            <a href="" class="w3-bar-item w3-button w3-small w3-hover-text-white w3-purple">Informations</a><br><br>
            <a href="https://www.facebook.com/"><i class="fa fa-facebook w3-xxlarge w3-text-blue"></i></a><br>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram w3-xxlarge w3-text-pink"></i></a><br>
                <a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp w3-xxlarge w3-text-green"></i></a>
        </div>
        
    </div>
    <div class="w3-display-container bottom">
        <div class="w3-container-bottom w3-display-bottom w3-black" style="display: flex; justify-content: space-between; padding: 50px">
            <div class="w3-container ">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook w3-xxlarge w3-text-blue"></i></a><br>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram w3-xxlarge w3-text-pink"></i></a><br>
                <a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp w3-xxlarge w3-text-green"></i></a>
            </div>
            <div class="w3-container">
                <a href="index.php"><i class="fa fa-home"></i>Home</a><br>
                <a href=""><i class="fa fa-book"></i> A propos</a><br>
                <a href=""><i class="fa fa-globe"></i> Informations</a><br>
                <a href=""><i class="fas fa-envelope"></i> Contact</a><br>
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
        
                &copy Souleymane & Amadou BootCamp 2021
       </div>
    </div>
</body>
</html>