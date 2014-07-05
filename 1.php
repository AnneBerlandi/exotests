<html> 
<title> My fuckin' page </title>
<body> hop 
<?php 

for($i = 0; $i <= 100 ; $i = $i + 1){
	if($i%5 == 0 && $i%3 == 0) echo "$i fizz buzz <br>";
	elseif ($i%5 == 0) echo "$i buzz <br>";
	elseif($i%3 == 0) echo "$i fizz <br>";
}

?> 
</body>
</html>