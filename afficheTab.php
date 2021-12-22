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
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
</head>
<body>
    <table class="w3-table-all w3-centered w3-hoverable ">
        <thead>
            <tr class="w3-blue ">
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
            <tr class="w3-small w3-hover-blue ">
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
                <td class="w3-row-padding w3-bar-items w3-red w3-button"><a href="suppression.php?id="<?= $nas['id']?>><i>Supprimer</i></a></td>
                <td class="w3-row-padding w3-bar-items w3-green w3-button"><a href="modif.php?id="<?= $nas['id']?>><i>modifier</i></a></td>
            </tr>
            <?php
              }
             ?>
        </tbody>
    </table>
</body>
</html>