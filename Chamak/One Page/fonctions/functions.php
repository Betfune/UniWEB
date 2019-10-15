<?php //fichiers de fonctions qui va etre utilisé partout !!!
	include_once("config.php");
	$GLOBALS['debug'] = false;

	function connectDB(){
		$con = new mysqli(DB_SERVER,DB_USERNAME,DB_PASS,DB_NAME);
		if (!$con && $GLOBALS['debug']) {
		    echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
		    echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
		    echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}
		if($GLOBALS['debug']){
			echo "Succès : Une connexion correcte à MySQL a été faite!". PHP_EOL . "<br>";
			echo "Information d'hôte : " . mysqli_get_host_info($con) . PHP_EOL . "<br><br>";
		}

	  mysqli_set_charset($con,"utf8");
	  return $con;
	}

	function listAllCategories()  {

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

	function addCategory($nomTable, $nomColonne, $valeur)  {
		$connexion = connectDB();
		$sql="INSERT INTO `$nomTable` (`$nomColonne`) VALUES ('$valeur')";
		mysqli_query($connexion,$sql);
	}

	function removeCategory($nomTable, $idCat, $id)  { //Utilise l'id de la categorie
		$connexion = connectDB();
		$sql="DELETE FROM `$nomTable` WHERE $idCat = $id";
		mysqli_query($connexion, $sql);
	}

?>
