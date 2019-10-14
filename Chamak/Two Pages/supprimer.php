<?php include_once("fonctions/functions.php");
  if(isset($_POST['id'])){
    removeCategory("categories", $_POST['id']);
  }
?>

<html>
	<head>
		<title>Supprimer</title>
	</head>


	<body>
    <a href="menu.php">Retour au menu</a><br>

    <form action="supprimer.php" method="post">
      <p>Supprimer une catégorie</p>
      <p>Catégorie : <select name="id">
        <?php
          $Categories = listAllCategories();
            foreach ($Categories as $uneCategorie) {
              echo '<option value="'.$uneCategorie['id_categorie'].'">'.$uneCategorie['nom_categorie'].'</option>';
          }
          echo '</select></p>';
        ?>
      <button type="submit">Ok</button>
    </form>
	</body>
</html>
