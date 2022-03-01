<?php
require('connex.php');

if(isset($_POST['nom']) && !empty($_POST['nom'])
  && isset($_POST['prenom']) && !empty($_POST['prenom'])
  && isset($_POST['sexe']) && !empty($_POST['sexe'])
  && isset($_POST['date_de_naissance']) && !empty($_POST['date_de_naissance'])
  && isset($_POST['lieu_de_naissance']) && !empty($_POST['lieu_de_naissance'])
  && isset($_POST['adresse']) && !empty($_POST['adresse'])
  && isset($_POST['telephone']) && !empty($_POST['telephone'])
  && isset($_POST['pseudo']) && !empty($_POST['pseudo'])
  && isset($_POST['email']) && !empty($_POST['email'])
  && isset($_POST['passwords']) && !empty($_POST['passwords'])){
      $nom= strip_tags($_POST['nom']);
      $prenom= strip_tags($_POST['prenom']);
      $genre= strip_tags($_POST['sexe']);
      $date= strip_tags($_POST['date_de_naissance']);
      $lieu= strip_tags($_POST['lieu_de_naissance']);
      $adresse= strip_tags($_POST['adresse']);
      $telephone= strip_tags($_POST['telephone']);
      $pseudo= strip_tags($_POST['pseudo']);
      $email= strip_tags($_POST['email']);
      $pass= strip_tags($_POST['passwords']);
try {
    $sql="INSERT INTO clients (nom, prenom, sexe, date_de_naissance, lieu_de_naissance, adresse, telephone, pseudo, email, passwords) VALUES (:nom, :prenom, :sexe, :date_de_naissance, :lieu_de_naissance, :adresse, :telephone, :pseudo, :email, :passwords)";
    $requete= $lien->prepare($sql);
    $requete->bindValue('nom', $nom, PDO::PARAM_STR);
    $requete->bindValue('prenom', $prenom, PDO::PARAM_STR);
    $requete->bindValue('sexe', $genre, PDO::PARAM_STR);
    $requete->bindValue('date_de_naissance', $date, PDO::PARAM_INT);
    $requete->bindValue('lieu_de_naissance', $lieu, PDO::PARAM_STR);
    $requete->bindValue('adresse', $adresse, PDO::PARAM_STR);
    $requete->bindValue('telephone', $telephone, PDO::PARAM_INT);
    $requete->bindValue('pseudo', $pseudo, PDO::PARAM_STR);
    $requete->bindValue('email', $email, PDO::PARAM_STR);
    $requete->bindValue('passwords', $pass, PDO::PARAM_STR);

    $requete->execute();
    $_SESSION['message'] = 'Utilisateur ajouté avec succès !';
    header('Location: login.php');
   
} catch (\throwable $ba) {
    echo "erreur est : ".$ba->getmessage();
}

}

?>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    
    </div>
    <?php
     include('login.php');
    ?>
</body>
</html>