<?php include_once("fonctions/functions.php"); ?>

<html>
	<head>
		<title>Menu</title>
	</head>


	<body>
		<a href="ajouter.php">Ajouter une catégorie</a>
		<a href="supprimer.php">Supprimer une catégorie</a>
		<ul>
			<?php
				$Categories = listAllCategories();
				foreach ($Categories as $uneCategorie) {
				    echo '<li><a href="page.php?id='.$uneCategorie['id_categorie'].' ">'.$uneCategorie['nom_categorie'].'</a></li>';
				}
			?>
		</ul>
	</body>

</html>
