<?php include_once("../fonctions/functions.php"); ?>

<html>
  <body>
    <?php
    if(isset($_POST["nouvelleCat"])){
      addCategory($_POST["nouvelleCat"]);
    }
    if(isset($_GET["id_cat"])){
      removeCategory($_GET["id_cat"]);
    }

    $Categories = listAllCategories();
    foreach ($Categories as $uneCategorie) {
    	echo $uneCategorie['nom_categorie']."<a href='?id_cat=".$uneCategorie['id_categorie']."'> Suppr</a>"."<br>";
    }
    ?>

    <form action="#" method="post">
      <h2>Ajouter une catégorie</h2>
      <p>Nom de la catégorie : <input type="text" name="nouvelleCat" required/>
      <button type="submit">Envoyer</button></p>
    </form>

  </body>
</html>
