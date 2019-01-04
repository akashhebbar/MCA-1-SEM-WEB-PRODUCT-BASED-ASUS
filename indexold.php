<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	p{
		color:black;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p><B>Welcome to ASUS Account</b><br><b>User Name=&nbsp<strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><b>Your Product </p><br><br><center>
			<img src="lap1.jpg"height=100 width=200><br><br>
			<center>ASUS X754<br>
			<p> <a href="index.php?logout='1'" style="color: black;">logout</a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>