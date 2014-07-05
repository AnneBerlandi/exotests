<?php 
Require("Fonctions.php");
?>

<html>

<title> Hello world </title>

<body>
<?php 
$date = date("l d F");
$hour = date("G\hi");
// Version "
echo "Nous somme le $date et il est $hour <br>"; 
// Version ' et concaténation
echo 'Nous somme le '.$date." et il est ".$hour.'<br>';

echo 'rempli le formulaire pour des heures de fun !';
?>

<form method="post" action="verif.php">
Nom : <input type="text" name ="nom"><br>
Prénom : <input type="text" name="prénom"><br>
Titre : <input type="text" name="titre"><br>
url : <input type="text" name="url"><br>
Votre email : <input type="text" name="email"> <br>
<input type="submit" value="OK">
</form>

<?php
$file = fopen("Essai.txt","r");
$ligne = fgets($file,255);
fclose($file);
echo "vous savez quoi ?<br> $ligne <br>";

$file = fopen("Visiteur.txt","r+");
$ligne = fgets($file,11);
$ligne = $ligne + 1;
Arial("5","red","Il y a eu : $ligne visiteurs depuis le début de cet exercice !");
fseek($file,0);
fputs($file,$ligne);
fclose($file);

?>

</body>

</html>