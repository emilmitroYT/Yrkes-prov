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
				$query = "INSERT INTO users VALUES ('$id',$namet','$username','$password','$phone','$email')";
				$result = mysql_query($query);
				mysqli_query($con, $query);
				header("Location: ../Login/login.php");
			}
			else
			{
				echo ("not valid info");
			}
		
		
		}
	?>
	<div class="text">
		<h1>Register</h1>
	</div>
	<div class="">
		
	</div>

	<div class="register">
		<form action="../player/player.php" method="post">
			<input method="post" type="text" name="Name" placeholder="Name" id="Name"> <BR> <BR>
			<input method="post" type="email" name="E-post" placeholder="E-post" id="E-post"> <BR> <BR>
			<input method="post" type="tel" name="Phone" placeholder="Phone" id="Phone"> <BR> <BR>
			<input method="post" type="text" name="Username" placeholder="Username" id="Username"> <BR> <BR>
			<input method="post" type="text" name="Password" placeholder="Password" id="Password"> <BR> <BR>
			<input type="submit" value="Register" />
		</form>
	</div>
</body>
</html>