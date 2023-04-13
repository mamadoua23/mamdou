<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recupération de Donner</title>
</head>
<body>
  <?php
echo "VOTRE <b>INE</b> EST//: " . $_POST['INE'];
echo "<br/>";
echo "VOTRE <b>Prénom</b> EST//: " . $_POST['prenom'];
echo "<br/>";
echo "VOTRE <b>Nom</b> EST//: " . $_POST['nom'];
echo "<br/>";
echo "VOTRE <b> Numéro de Telephone</b> EST//: " . $_POST['telephone'];
echo "<br/>";
echo "VOTRE <b>Email</b> EST//: " . $_POST['email'];
echo "VOTRE <b>genre</b> EST//: " . $_POST['genre'];




while($row=mysqli_fetch_array($result))
{


echo "<tr>";
echo "<td>" . $row['INE'] . "</td>";
echo "<td>" . $row['PRENOM'] . "</td>";
echo "<td>" . $row['NOM'] . "</td>";
echo "<td>" . $row['EMAIL'] . "</td>";
echo "<td>" . $row['TELEPHONE'] . "</td>";
echo "<td>" . $row['GENRE'] . "</td>";
echo "</tr>";

}
echo"<table>";




 ?>
</body>
</html>