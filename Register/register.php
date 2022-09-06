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
		/*
		$name = $_POST["name"];
		$user = $_POST["username"];
		$password = $_POST["password"];
		$phone = $_POST["phone"];
		$epost = $_POST["e-post"];
		if (isset($name)) {
			echo "Fill in all.<br>";
		if (isset($user)) {
			echo "Fill in all.<br>";
		
		if (isset($password)) {
			echo "Fill in all.<br>";
		
		if (isset($phone)) {
			echo "Fill in all.<br>";
		
		if (isset($epost)) {
			echo "Fill in all.<br>";
			header("Location: ../player/player.php");
		}
		}
		}
		}
		}
		*/
		
		
		
		
		/*
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$user = $_POST["Username"];
			$name = $_POST["Name"];
			$epost = $_POST["E-post"];
			$phone = $_POST["Phone"];
			$password = $_POST["Password"];
			if(!empty($username) || !empty($password) || !is_numeric($username)){
				//save
				$id = random_num(20);
				$query = "INSERT INTO users VALUES ('$id',$name','$username','$password','$phone','$email')";
				$result = mysql_query($query);
				mysqli_query($con, $query);
				header("Location: ../Login/login.php");
			}
			else
			{
				echo ("not valid info");
			}
		
		
		}
		*/
	?>
	<div class="text">
		<h1>Register</h1>
	</div>
	<div class="">
		
	</div>

	<div class="register">
		<form action="../player/player.php" method="post">
			<input type="text" name="name" placeholder="Name" > <BR> <BR>
			<input  type="email" name="e-post" placeholder="E-post" > <BR> <BR>
			<input  type="tel" name="phone" placeholder="Phone" > <BR> <BR>
			<input  type="text" name="username" placeholder="Username" > <BR> <BR>
			<input  type="text" name="password" placeholder="Password" > <BR> <BR>
			<input  type="text" name="password" placeholder="Password" > <BR> <BR>
			<input type="submit" value="Register" />
		
		
		
		
		
		
		</form>
	</div>
	


</body>
</html>