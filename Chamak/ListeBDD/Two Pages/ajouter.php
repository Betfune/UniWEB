<!-- Ne pas oublier cette ligne, elle permet de charger le fichier contenant les fonctions -->
<?php include_once("fonctions/functions.php");

  //Verifie si la variable "Nom" existe, celle ci existe seulement si vous avez appuié sur OK dans le form.
  if(isset($_POST['nom'])){

    //Si la variable nom existe, cette fonction permet de creer une nouvelle catégorie avec le nom spécifié
    addCategory("categories", $_POST['nom']);
  }
?>

<html>
	<head>
		<title>Ajouter</title>
	</head>


	<body>
    <!-- Lien vers la page menu -->
		<a href="menu.php">Retour au menu</a><br>

    <!-- Le fameux FORM permettant de recuperer le nom de la catégorie a creer -->
    <form action="#" method="post">
      <p>Ajouter une catégorie</p>

      <!-- Input name="nom" -> ceci veut dire que ce que vous ecrirez dans cette case sera stoqué dans la variable post "nom", soit : $_POST['nom'] -->
      <p>Nom de la catégorie : <input type="text" name="nom" required/></p>

      <!-- et ça.... c'est un bouton qui dis ok :) -->
      <button type="submit">Ok</button>
    </form>


	</body>
</html>
