<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style>
       span {
           color: red;
       }
       ul li {
           list-style: none;
       }
       input {
           width: 80%;
           height: 40px;
       }

   </style>
</head>
<body>
    
    <div class="w3-display-container">
    <a href="index.php" class="w3-display-topright w3-text-white w3-btn " style="text-decoration: none;"><strong><i class="fa fa-home"></i> HOME</strong></a> 
        <img src="image.jpeg" alt=""  style="width: 100%; height: 1000px">
          <div class="w3-display-topmiddle w3-hover-white w3-margin w3-opacity-min" style="width: 50%; height: 95%;">
              <form action="liaison.php" method="POST" class=" w3-container  w3-padding">
                  <ul>
                      <li classe="w3-text-teal">Nom<span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="text" name="nom" required>
                      <br><br>
                      <li classe="w3-text-teal">Prénom<span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="text" name="prenom" required>
                      <br><br>
                      <label classe="w3-text-teal">Genre<span>*</span></label><br>
                      <select class="w3-section" style="width:80%; height: 40px" name="sexe" id="" required>
                    
                          <option value=""disabled selected>Genre</option>
                          <option value="Homme">Homme</option>
                          <option value="Femme">Femme</option>
                      </select>
                      <br><br>
                      <li classe="w3-text-teal">Date de naissance <span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="date" name="date_de_naissance" required>
                      <br><br>
                      <li classe="w3-text-teal">Lieu de naissance</li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="text" name="lieu_de_naissance">
                      <br><br>
                      <li classe="w3-text-teal">Adresse</li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="text" name="adresse">
                      <br><br>
                      <li classe="w3-text-teal">Téléphone <span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="tel" name="telephone" required>
                      <br><br>
                      <li classe="w3-text-teal">Pseudo</li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="text" name="pseudo">
                      <br><br>
                      <li classe="w3-text-teal">Email <span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="email" name="email" required>
                      <br><br>
                      <li classe="w3-text-teal">Mot de passe <span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="password" name="passwords" required><br>
                      <br>
                      <button class="w3-btn w3-blue">VALIDER</button>
                  </ul>
              </form>
         </div>
   </div>
</body>
</html>