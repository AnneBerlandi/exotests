<?php
$pseudo = $_POST['pseudo'];
$message = htmlspecialchars($_POST['message']);
?>

<html>
<body>
<?php 
if(empty($pseudo) || empty($message)) header('Location: minichat.php');

$bdd = new PDO('mysql:host=localhost;dbname=exos','root','');
$rq = $bdd->prepare('INSERT INTO minichat(Pseudo, Message) VALUES(:pseudo,:message)');
$rq->execute(array(
	'pseudo' => $pseudo,
	'message' => $message));
header('Location: minichat.php');
?>

</body>
</html>