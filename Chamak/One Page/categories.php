<?php include_once("fonctions/functions.php");?>

<html>
	<head>
		<title>Categories</title>
	</head>

	<body>
		<a href="menu.php">Retour au menu</a><br>

    <?php //Ajoute Ou supprime les Categories
      if(isset($_POST['id_categorie']) || isset($_POST['nom_categorie'])){
        switch($_GET["action"]){
          case "add":
            addCategory("categories", $_POST['nom_categorie']);
            echo "Catégorie " .$_POST['nom_categorie']. " créée <br>";
            $_GET["action"]="done";
          break;

          case "remove":
            removeCategory("categories", $_POST['id_categorie']);
            $_GET["action"]="done";
            echo "Catégorie supprimée <br>";
          break;

          default:
          break;
        }
      }
    ?>

    <?php //Form
      echo '<form action="categories.php?action='.$_GET["action"].'" method="post">';

      switch($_GET["action"]){ //Switch determinant si on doit supprimer ou creer la categorie
        case "add": //Ajouter une categorie
          echo 'Ajouter une catégorie';
          echo '<p>Nom de la catégorie : <input type="text" name="nom_categorie" required/></p>';
        break;

        case "remove": //Supprimer une categorie
          echo "Supprimer une catégorie";
      		echo '<p>Catégorie : <select name="id_categorie">';
          $Categories = listAllCategories();
          foreach ($Categories as $uneCategorie) {
              echo '<option value="'.$uneCategorie['id_categorie'].'">'.$uneCategorie['nom_categorie'].'</option>';
          }
      		echo '</select></p>';
        break;

        case "done": //C'est TRES moche, mais ça permet d'utiliser le bouton ok du form pour retourner a la page menu...
          echo '</form>';
          echo '<form action="menu.php" method="post">';
        break;

        default: //En cas de mauvaise valeur dans GET
          echo "TOUCHEZ PAS A L'URL WLH";
        break;
      }

      echo '<button type="submit">Ok</button>';
      echo '</form>';
    ?>
	</body>
</html>
