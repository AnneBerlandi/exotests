<html>
<?php 
$nom = $_POST['nom'];
$prenom = $_POST['prénom'];
$titre = $_POST['titre'];
$url = $_POST['url'];
?>

<title> <?php 
echo 'salut '.$prenom.' !'; ?>
</title

<body>
<?php
if(empty($titre)||empty($url)||empty($nom)||empty($prenom)){
	echo "reviens quand tu sauras remplir un formulaire !<br>";
}

else {
	$verif_nom = strtolower($nom);
	if($verif_nom=="bussiere"){
		echo 'Ah non ! pas de BDSM ici !<br>';
	}
	else {
		echo 'tu t\'appelles '.$prenom.' '.$nom.'<br>';
	}
	
	$verif_url = strtolower($url);
	$verif_url = substr("$verif_url",0,7);
	
	if($verif_url!="http://"){
		echo "c'est pas un url ! <br>";
	}
	
	else{
		echo $titre.'<br>';
		echo $url.'<br>';
		}
}
?>
</body>
</html>
