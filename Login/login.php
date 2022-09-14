<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" href="../login/login.css">
</head>
<body>

<?php
	include("../connection.php");
	//include("../functions.php");
	//include("../loginhandler.php");


	
	if(isset($_POST['Login'])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		if(!empty($username) || !empty($password) || !is_numeric($username)){
			//loggin system
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
			$result = mysqli_query($con, $query);
			if ($result) {
				if ($result || mysqli_num_rows($result) > 0) {
					$user_data = mysqli_fetch_assoc($result);
					if ($user_data['password'] === $password) {
						$_SESSION['id'] = $user_data['id'];
						header("Location: ../main.php");
						die;
					}
				}
			}echo ("not valid info");
		
		}
		else
		{
			echo ("not valid info");
		}
	}
	
?>
	<div class="text">
		<h1>Login</h1>
	</div>
	<div class="login">
		<form method="post">
			<input type="text" name="username" placeholder="Username"> <BR> <BR>
			<input type="password" name="password" placeholder="Password"> <BR> <BR>
			<input type="submit" name="Login" value="Login" />
		</form>
	</div>
	


</body>
</html>