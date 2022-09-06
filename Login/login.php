<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>

<?php
	include("../connection.php");
	include("../functions.php");
	include("../loginhandler.php");

	
	if(isset($_POST['Login'])){
		loginhandler();
	}
	
?>
	<div class="text">
		<h1>Register</h1>
	</div>
	<div class="login">
		<form method="post">
			<input type="text" name="username" placeholder="Username"> <BR> <BR>
			<input type="text" name="password" placeholder="Password"> <BR> <BR>
			<input type="submit" name="Login" value="Login" />
		</form>
	</div>
	


</body>
</html>