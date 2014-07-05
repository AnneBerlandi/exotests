<html>

<title> Hello world </title>

<body>
<?php 
$date = date("l d F");
$hour = date("G\hi");
// Version "
echo "Nous somme le $date et il est $hour <br>"; 
// Version ' et concaténation
echo 'Nous somme le '.$date." et il est ".$hour;

echo 'rempli le formulaire pour des heures de fun !';
?>

<form method="post" action="verif.php">
Nom : <input type="text" name ="nom"><br>
Prénom : <input type="text" name="prénom"><br>
Titre : <input type="text" name="titre"><br>
url : <input type="text" name="url"><br>
<input type="submit" value="OK">
</form>

</body>

</html>