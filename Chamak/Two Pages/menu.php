<!-- Ne pas oublier cette ligne, elle permet de charger le fichier contenant les fonctions -->
<?php include_once("fonctions/functions.php"); ?>

<html>
	<head>
		<title>Menu</title>
	</head>


	<body>
		<!-- Deux liens qui permettent d'acceder a la page ajouter et supprimer -->
		<a href="ajouter.php">Ajouter une catégorie</a>
		<a href="supprimer.php">Supprimer une catégorie</a>

		<!-- L'affichage des catégories, code venant du prof -->
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

<!--           A LIRE AVANT TOUT           -->

<!-- Qu'on soit clair, j'ai pris du temps à vous faire ce code, alors je vous demande seulement une chose : -->
<!-- Interdiction FORMELLE de copier coller sans comprendre ou juste en modifiant deux trois noms par ci par la -->
<!-- Je ne vous ferai plus de cadeau si j'aprends que le code a fuité... -->


<!-- Sur ce, j'espere que ça vous servira :) -->
