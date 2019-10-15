<?php //fichiers de fonctions qui va etre utilisé partout !!!
	include_once("config.php");

	function connectDB(){ //Fonction du prof...
		$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASS,DB_NAME);
	  mysqli_set_charset($con,"utf8");
	  return $con;
	}


	function listAllCategories()  { //Fonction du prof...
		$connexion = connectDB();
		$sql="SELECT id_categorie,nom_categorie from categories";
		$result = mysqli_query($connexion,$sql);

		$i=0; $tabAllCategories[]="";
		while($categorie=mysqli_fetch_array($result)){
			$tabAllCategories[$i]=$categorie;
			$i++;
		}
		//echo $categorie['nom_categorie'];
		return $tabAllCategories;
	}


	function addCategory($nomTable, $nomRow)  {
		$connexion = connectDB(); //Connection a la base de donnée
		$sql="INSERT INTO `$nomTable` (`Nom_Categorie`) VALUES ('$nomRow')";
		//Ligne sql a envoyer a la base : Inserer dans la table 'nom', et dans la colonne 'nom_catégorie', la valeur spécifiée dans $nomRow


		mysqli_query($connexion,$sql); //Envoie la requete a la base
	}


	function removeCategory($nomTable, $id)  { //Utilise l'id de la categorie
		$connexion = connectDB(); //Connection a la base de donnée
		$sql="DELETE FROM `$nomTable` WHERE id_categorie = $id";
		//Ligne sql a envoyer a la base : Supprime de la table 'nom', la catégorie dont l'id est 'id'

		mysqli_query($connexion, $sql); //Envoie la requete a la base
	}

?>
