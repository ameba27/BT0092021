<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'sunuprojet');

// Obtenez le nombre total d'enregistrements de notre table "étudiants".
$total_pages = $mysqli->query('SELECT * FROM clients')->num_rows;

// Vérifiez si le numéro de page est spécifié et vérifiez s'il s'agit d'un numéro, sinon retournez le numéro de page par défaut qui est 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

//Nombre de résultats à afficher sur chaque page.
$num_results_on_page = 5;

if ($stmt = $mysqli->prepare('SELECT * FROM clients ORDER BY id LIMIT ?,?')) {
	// Ici on a calculé la page pour obtenir les résultats dont nous avons besoin à partir de notre tableau
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Pour obtenir les résultats...
	$result = $stmt->get_result();
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Liste des clients</title>
			<meta charset="utf-8">
			<style>
			html {
				font-family: Tahoma, Geneva, sans-serif;
				padding: 20px;
				background-color: #F8F9F9;
			}
			table {
				border-collapse: collapse;
				width: 500px;
			}
			td, th {
				padding: 10px;
			}
			th {
				background-color: #54585d;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
			.pagination {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box;
			}
			.pagination li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination li a:hover {
				background-color: #d4dada;
			}
			.pagination .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination .currentpage a:hover {
				background-color: #518acb;
			}
			</style>
			
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
<div class="w3-text-purple w3-animate-top" style="margin-top: 50px">
	
	
 </div>
 
<div class="w3-card  w3-display-middle " style="width: 90%">
	<h2 class="w3-center w3-text-purple" style="font-weight: bold">La liste des utilisateurs <i class="fa fa-users w3-text-purple"></i></h2>
	<table class="w3-table-all w3-centered w3-hoverable ">
			<table>
				<tr>
				<th>iD</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Genre</th>
                    <th>Date de naissance</th>
                    <th>Lieu de naissance</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Pseudo</th>
                    <th>Email</th>
					<th colspan="3">Action</th>
				</tr>
				<?php foreach ($result as $row ){ ?>
				<tr>
				    <td><?php echo $row['id']; ?></td>
					<td><?php echo $row['nom']; ?></td>
					<td><?php echo $row['prenom']; ?></td>
					<td><?php echo $row['sexe']; ?></td>
					<td><?php echo $row['date_de_naissance']; ?></td>
					<td><?php echo $row['lieu_de_naissance']; ?></td>
					<td><?php echo $row['adresse']; ?></td>
					<td><?php echo $row['telephone']; ?></td>
					<td><?php echo $row['pseudo']; ?></td>
					<td><?php echo $row['email']; ?></td>

					<td class="w3-row-padding w3-bar-items  w3-purple"><a href="suppression.php?id=<?=$row['id']?>"><i class="fa fa-trash w3-large  w3-text-red"></i></a></td>
                    <td class="w3-row-padding w3-bar-items  w3-purple"><a href="modif.php?id=<?=$row['id']?>"><i class='fa fa-edit w3-large  w3-text-green'></i></a></td>
                    <td class="w3-row-padding w3-bar-item  w3-purple"><a href="detail.php?id=<?=$row['id']?>"><i class="fa fa-eye w3-large  w3-text-yellow"></i></a></td>
				</tr>
				<?php  } ?>
			</table>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="pagin.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="pagin.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="pagin.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="pagin.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="pagin.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="pagin.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="pagin.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="pagin.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="pagin.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			<?php endif; ?>
			<?php
	$stmt->close();
}

?>
				</div>
			
<div class="w3-container-bottom w3-purple w3-center w3-display-bottommiddle  " style="width: 100%; margin: 0 auto; padding: 10px">
        
		&copy Amadou & Souleymane BootCamp 2021
 </div>
		</body>
	</html>
