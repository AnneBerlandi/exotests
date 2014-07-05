<html>
<?php 
$nom = $_POST['nom'];
$pseudo = $_POST['pseudo'];
$console = $_POST['console'];
$prix = $_POST['prix'];
$nmax = $_POST['nmax'];
$coms = $_POST['coms'];
?>

<title> 
<?php echo 'salut '.$pseudo.' !'; ?>
</title>

<body>
<?php
if(empty($nom)||empty($pseudo)||empty($console)||empty($prix)||empty($nmax)||empty($coms)){
	echo "Tu as mal rempli le formulaire, ton jeu ne sera pas ajouté !<br>";
}

else { 
	$BD = new PDO('mysql:host=localhost;dbname=exos','root','');

	$req = $BD->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
	$req->execute(array(
	'nom' => $nom,
	'possesseur' => $pseudo,
	'console' => $console,
	'prix' => $prix,
	'nbre_joueurs_max' => $nmax,
	'commentaires' => $coms
	));

	echo 'Le jeu a bien été ajoute !';
}
?>
</body>
</html>