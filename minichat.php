<title> minichat </title>

<html>
<body>

<form method="post" action="minichat_form.php">
Pseudo : <input type="text" name ="pseudo"><br>
Message : <input type="text" name="message"><br>
<input type="submit" value="envoyer !">
</form>

<?php
$bdd = new PDO("mysql:host=localhost;dbname=exos","root","");
$rq = "SELECT Pseudo, Message FROM minichat ORDER BY id DESC LIMIT 10";
$resultat = $bdd->query($rq);
while($donnees = $resultat->fetch() ){
	echo $donnees['Pseudo'].' : '.$donnees['Message'].'<br>';
}
?>

</body>
</html>