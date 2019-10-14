<!doctype html> 
<html>
	<head>
		<meta charset="utf-8">
		<title>Chamak1</title>
	</head>

	<body>

		<?php
			 function superspam($nombre, $nom){
				 $chaine="";
				 for($i=0; $i < $nombre; $i++)
					 $chaine.=$nom."<br>";
				 return $chaine;
			 }

			if($_POST){
				echo superspam($_POST['nombre'], $_POST['texte']);
			}

		?>
		<form action="Chamak1.php" method="post">
			<p>Texte : <input type="text" name="texte" required/></p>
			<p>Nombre : <input type="text" name="nombre" required/></p>
			<button type="submit">Ok</button>
		</form>
	</body>
</html>
