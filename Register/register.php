<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<?php
		session_start();
		include("../connection.php");
		include("../functions.php");
		
	?>
	<div class="text">
		<h1>Register</h1>
	</div>
	<div class="">
		
	</div>
<!--register system-->
	<div class="register">
		<form action="../player/player.php" method="post">
			<input type="text" name="name" placeholder="Name" > <BR> <BR>
			<input  type="email" name="e-post" placeholder="E-post" > <BR> <BR>
			<input  type="tel" name="phone" placeholder="Phone" > <BR> <BR>
			<input  type="text" name="username" placeholder="Username" > <BR> <BR>
			<input  type="password" name="password" placeholder="Password" > <BR> <BR>
			<input  type="password" name="rpassword" placeholder="Repeat Password" > <BR> <BR>
			<input type="submit" value="Register" />
		</form>
	</div>
	<div class="accont">
	<form action="../login/login.php">
			<h5>Have a accont?</h5> <input type="submit" value="Login">
			
		</form>
	</div>
	


</body>
</html>