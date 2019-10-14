<?php include_once("fonctions/functions.php");
  if(isset($_POST['nom'])){
      addCategory("categories", $_POST['nom']);
    }
?>

<html>
	<head>
		<title>Ajouter</title>
	</head>


	<body>
		<a href="menu.php">Retour au menu</a><br>
    <form action="ajouter.php" method="post">
      <p>Ajouter une catégorie</p>
      <p>Nom de la catégorie : <input type="text" name="nom" required/></p>
      <button type="submit">Ok</button>
    </form>
	</body>
</html>
