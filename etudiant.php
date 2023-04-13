<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>ESPACE D'INSCRIPTION</title>
</head>
<body>
	<form action="recuperation/recup_db.php" method="POST">
		<label>
			INE
		</label>
		<input type="texte" name="INE" style="width:94%";>

		<label>
			Pr&eacute;nom
		</label>
		<input type="texte" name="prenom" style="width:94%";>

		<label>
			Nom
		</label>
		<input type="texte" name="nom" style="width: 94%;">

		<label>
			E-mail
		</label>
		<input type="texte" name="e-mail" style="width:94;">

		<label>
			Telephone
		</label>
		<input type="texte" name="telephone" style="width:94%;">

		<label>
			Genre
		</label>
		<select id="genre" name="genre_name">
			<option value="masculin">Masculin</option>
			<option value="feminin">Feminin</option>
		</select>
		<div class="submit">
			<input type="submit" value="inscription" class="submit">
			
		</div>
	</form>

</body>
</html>