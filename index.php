<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JOOOO Play</title>
	<script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
	session_start();
	include("connection.php");
	include("functions.php");
	
	
?>



<div class="header">
	<head>JOOOO Play</head>
</div>
<div class="logo">
	<img src="logo.png" width="100" height="60">
</div>
<div class="login">
	<form action="Login/login.php">
    <input type="submit" value="Login" />
</form>
</div>
<div class="register">
	<form action="Register/register.php">
		<input type="submit" name="Register">
	</form>
</div>


</body>
</html>