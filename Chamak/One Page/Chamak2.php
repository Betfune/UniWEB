<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Chamak2</title>
	</head>

	<body>
		<form action="Chamak2.php" method="post">

			<p>Texte : <input type="text" name="texte" required/></p>

			<p>Texte Area : <textarea type="textarea" name="textearea" required></textarea></p>

			<p>Radio : <input type="radio" id="valeur1"
				name="radio" value="radiovaleur1">
				<label for="valeur1">Valeur1</label>
			<input type="radio" id="valeur2"
				name="radio" value="radiovaleur2">
				<label for="valeur2">Valeur2</label></p>

			<p>Select :
				<select id="select">
				<option value="valeur1">Valeur 1</option>
				<option value="valeur2" selected>Valeur 2</option>
				<option value="valeur3">Valeur 3</option>
			</select></p>


			<button type="submit">Ok</button>
		</form>

		<?php
			if(isset($_POST)){
				var_dump($_POST);
			}
		?>
	</body>
</html>
