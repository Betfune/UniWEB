<?php

//fichiers de fonctions qui va etre utilisé partout !!!

include_once("config.php");

//SELECT tps_total FROM `observations` WHERE id_commentaire<90 GROUP BY id_programme

function connectDB(){

	$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASS,DB_NAME);
// Check connection_aborted()
	if (mysqli_connect_errno())
	  {
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
    //var_dump($con);
  	mysqli_set_charset($con,"utf8");
  	return $con;
}

function listAllCategories()  {

	$connexion = connectDB();
	$sql="SELECT id_categorie,nom_categorie from categories";
	$result = mysqli_query($connexion,$sql);
	$i=0;
	$tabAllCategories[]="";
	while($categorie=mysqli_fetch_array($result)){
		$tabAllCategories[$i]=$categorie;
		$i++;
	}
	//echo $categorie['nom_categorie'];
	return $tabAllCategories;
}

function addCategory($nomCatToAdd){
	$connexion = connectDB();
	$sql="INSERT INTO categories(nom_categorie) VALUES('$nomCatToAdd')";
	$result = mysqli_query($connexion,$sql);
}

function removeCategory($idCatToDelete){
	$connexion = connectDB();
	$sql="DELETE FROM categories WHERE id_categorie=$idCatToDelete";
	$result = mysqli_query($connexion,$sql);
}

function listAllMedias(){

}


function removeMedias(){

}

function addMedia(){

}

function listAllMediasTypes(){

}

?>
