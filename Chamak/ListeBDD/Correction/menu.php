<?php include_once("fonctions/functions.php"); ?>

<html>
	<body>
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
