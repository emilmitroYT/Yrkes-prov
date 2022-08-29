<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>player</title>
</head>
<body>

<?php 
	$user = $_POST["Username"];
	$name = $_POST["Name"];
	$Epost = $_POST["E-post"];
	$Phone = $_POST["Phone"];
	$Password = $_POST["Password"];
	echo $user. " ". $name. " ". $Epost. " ".$Phone. " ". $Password ;
?>
</body>
</html>