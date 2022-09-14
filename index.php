<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JOOOO Play</title>
	<script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<style>
body {
	background-image: url("jade.jpg");
	background-color: #cccccc;
}
.header{
  text-align: center;
}
.logo{
	position:center;
}
a.button3{
  
  display:inline-block;
  padding:0.3em 1.2em;
  margin:0 0.3em 0.3em 0;
  border-radius:2em;
  box-sizing: border-box;
  text-decoration:none;
  font-family:'Roboto',sans-serif;
  font-weight:300;
  color:#FFFFFF;
  background-color:#4eb5f1;
  text-align:center;
  transition: all 0.2s;
  text-align: center;
}
a.button3:hover{
  background-color:#4095c6;
}


</style>

<?php
	session_start();
	include("connection.php");
	include("functions.php");
	
	
?>
<div class="d">


<div class="header">
	<head>JOOOO Play</head>
</div>
<div class="logo">
	<img src="logo.png" width="100" height="60">
</div>
<div class="register">
	<a href="register/register.php" class="button3">Register</a>
</form>
</div>
<div class="login">
	<a href="login/login.php" class="button3">login</a>
</div>


</div>
</body>
</html>