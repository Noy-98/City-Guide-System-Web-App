<?php

$host="localhost";
$user="root";
$password="";
$db="auth_db";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from users where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["admin_type"]=="admin")
	{	

		$_SESSION["username"]=$username;

		header("location:admin_page.php");
	}
    else
	{
		echo "username or password incorrect";
	}

}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/login_style.css">
</head>
<body>

<center>

	
	<br><br><br><br>
	<div style="background-color: green; width: 500px;">
		<br><br>


		<form action="#" method="POST">

	<div>
		<label>username</label>
		<input type="text" name="username" required>
	</div>
	<br><br>

	<div>
		<label>password</label>
		<input type="password" name="password" required>
	</div>
	<br><br>

	<div>
		
		<input type="submit" value="Login">
	</div>


	</form>


	<br><br>
 </div>
</center>

</body>
</html>