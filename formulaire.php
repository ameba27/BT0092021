<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
   <style>
       span {
           color: red;
       }
       ul li {
           list-style: none;
       }
       input {
           width: 40%;
       }

   </style>
</head>
<body>
    <div class="w3-container">
        <form action="liaison.php" method="POST" class="w3-container">
            <ul>
                <li classe="w3-text-teal">Nom<span>*</span></li>
                <input class="w3-input w3-border w3-light-grey " type="text" name="nom" required>
                <br><br>
                <li classe="w3-text-teal">Prénom<span>*</span></li>
                <input class="w3-input w3-border w3-light-grey " type="text" name="prenom" required>
                <br><br>
                <li classe="w3-text-teal">Sexe <span>*</span></li>
                <select class="w3-select " name="sexe" id="" required>
                    <option value=""disabled selected>Faites votre choix</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
                <br><br>
                <li classe="w3-text-teal">Date de naissance <span>*</span></li>
                <input class="w3-input w3-border w3-light-grey " type="date" name="date_de_naissance" required>
                <br><br>
                <li classe="w3-text-teal">Lieu de naissance</li>
                <input class="w3-input w3-border w3-light-grey " type="text" name="lieu_de_naissance">
                <br><br>
                <li classe="w3-text-teal">Adresse</li>
                <input class="w3-input w3-border w3-light-grey " type="text" name="adresse">
                <br><br>
                <li classe="w3-text-teal">Téléphone <span>*</span></li>
                <input class="w3-input w3-border w3-light-grey " type="tel" name="telephone" required>
                <br><br>
                <li classe="w3-text-teal">Pseudo</li>
                <input class="w3-input w3-border w3-light-grey " type="text" name="pseudo">
                <br>
                <li classe="w3-text-teal">Email <span>*</span></li>
                <input class="w3-input w3-border w3-light-grey " type="email" name="email" required>
                <br>
                <li classe="w3-text-teal">Mot de passe <span>*</span></li>
                <input class="w3-input w3-border w3-light-grey " type="password" name="passwords" required><br>
                <br><br><br>
                <button class="w3-btn w3-blue">VALIDER</button>
            </ul>
       </form>
    </div>
</body>
</html>