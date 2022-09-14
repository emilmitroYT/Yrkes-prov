<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>player</title>
</head>
<body>

<?php 
	include_once '../functions.php';
	include_once '../connection.php';
	$name = $_POST["name"];
	$user = $_POST["username"];
	$password = $_POST["password"];
	$phone = $_POST["phone"];
	$epost = $_POST["e-post"];
	$rpassword = $_POST["rpassword"]
	$password = md5($password);
	$sql = "INSERT INTO users (name,username,password,phone,email) VALUES ('$name','$user','$password','$phone','$epost')";



if ($password !== $rpassword){
	
	if (mysqli_query($con,$sql)) {
		echo "New record created";
		sleep(5);
		header("Location: ../main.php");
	}
	else {
	echo "error" . $sql . " " . mysqli_error($con);
}
}
else {
	header("Location: ../index.php")
}
mysqli_close($con);


?>
</body>
</html>