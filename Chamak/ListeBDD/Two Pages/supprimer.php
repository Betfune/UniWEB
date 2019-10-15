<!-- Ne pas oublier cette ligne, elle permet de charger le fichier contenant les fonctions -->
<?php include_once("fonctions/functions.php");

  //Verifie si la variable "id" existe, celle ci existe seulement si vous avez appuié sur OK dans le form.
  if(isset($_POST['id'])){

    //Si la variable id existe, cette fonction permet de supprimer la catégorie dont l'id est spécifié.
    removeCategory("categories", $_POST['id']);
  }
?>

<html>
	<head>
		<title>Supprimer</title>
	</head>


	<body>
    <!-- Lien vers la page menu -->
    <a href="menu.php">Retour au menu</a><br>


    <!-- Le fameux FORM permettant de recuperer le nom de la catégorie a creer -->
    <form action="supprimer.php" method="post">
      <p>Supprimer une catégorie</p>

      <!-- Ici on commence a faire une liste avec le tag <select> </select> -->
      <p>Catégorie : <select name="id">

        <!-- La partie un peu dure commence ici -->
        <?php
          $Categories = listAllCategories(); //On appelle la fonction du prof qui permet de lister toutes nos catégories dans la variable $Categories
            foreach ($Categories as $uneCategorie) { //Tant qu'il reste des catégories dans notre base de données, on ... :
              //Affiche un element <option> (ce qui rajoute un choix dans la liste déroulante)
              //la ligne ci dessous s'ecrit comme ça sans le php compliqué : <option value="id_categorie"> nom_catégorie </option>
              //Essentiellement, cela rajoute des elements tant qu'il y a d'autres catégories dans la liste
              //Du coup 
              echo '<option value="'.$uneCategorie['id_categorie'].'">'.$uneCategorie['nom_categorie'].'</option>';
          }
        ?>

      <!-- Et la ferme le tag <select>, affichant ainsi la liste de nos catégories -->
      </select></p>

      <!-- et ça.... c'est un bouton qui dis ok :) -->
      <button type="submit">Ok</button>
    </form>
	</body>
</html>
