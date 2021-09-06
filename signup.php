<?php
session_start();

// Database connection
$con = mysqli_connect('localhost','root','');


if(!$con)
{
	echo 'Not connected to the server.';
}

if(!mysqli_select_db($con, 'denver'))
{
	echo 'Database not selected.';
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "insert into signup(username, email, password) values('$username', '$email', '$password')";


if(!mysqli_query($con, $sql))
{
	echo 'Not inserted.';
}

else {
	echo '<script>
	window.location = "index.php";
	alert("Sign In successfully.");
	
	 </script>';	
}


// header("refresh:2; url=tarpaulin.php");


?>

<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br><br>
	<center><button onclick = "window.location.href = 'login.php';">Log-in?</button></center>
</body>
</html>
-->
