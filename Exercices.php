<html>

<title> Hello world </title>

<body>
<?php 
$date = date("l d F");
$hour = date("G\hi");
// Version "
echo "Nous somme le $date et il est $hour <br>"; 
// Version ' et concat�nation
echo 'Nous somme le '.$date." et il est ".$hour;

echo 'rempli le formulaire pour des heures de fun !';
?>

<form method="post" action="verif.php">
Nom : <input type="text" name ="nom"><br>
Pr�nom : <input type="text" name="pr�nom"><br>
Titre : <input type="text" name="titre"><br>
url : <input type="text" name="url"><br>
<input type="submit" value="OK">
</form>

</body>

</html>