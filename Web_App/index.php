<?php
session_start();
	
	$_SESSION;
?>


<!DOCTYPE html>
<html>
<head>
<title>City Guide of Pateros</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<header>
	<div class="nav">
		<div class="logo">
			<img src="images/Seal_of_Pateros.png" alt="logo">
		</div>
		<div>
		<a href="login.php"class="btn">User Login</a>
		<a href="admin_login.php"class="btn">Admin Login</a>
	</div>
	<div class="main">
		<div class="text">
			<h1><span>City Guide of</span> Pateros</h1>
			<p>Explore the city with us</p><br>
			<div class="active">
				<a href="learn_more.html"class="btn">Learn more</a>
				<a href="signup.php"class="btn">Signup Here</a>
			</div>
		</div>
	</div>
</header>
</body>
</html>