<html>
<Title> Essai MySQL </title>
<body>
<?php
try{
	$DB = new PDO('mysql:host=localhost;dbname=exos', 'root', '');
}
catch(Exception $e){
	die('Erreur : '.$e->getMessage());
}
	$reponse = $DB->query('SELECT * FROM jeux_video WHERE possesseur LIKE \'P%\' ORDER BY nom');
	
	while( $donnees = $reponse->fetch() ){
		echo $donnees['nom'].'<br>';
	}
?>
<?php $reponse->closeCursor(); ?>

</body>
</html>