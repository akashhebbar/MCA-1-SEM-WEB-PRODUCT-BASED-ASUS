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

<title></title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />



</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">ASUS</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="active"><a href="index.html"  title="">Homepage</a></li>
				<li><a href="products.html"  title="">Our Products</a></li>
				<li><a href="login.php"  title="">Login</a></li>
				<li><a href="about.html"  title="">About Us</a></li>
				<li><a href="#"  title="">Contact Us</a></li>
			</ul>
		</div>
	
	<div id="banner" class="container">
		<div class="title">
			<h2>ASUS</h2>

	
	<link rel="stylesheet" type="text/css" href="style.css">
	

<body>
	<div id="three-column" class="container">
		
	
</div>
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
			<p><B><font size=6>Welcome to ASUS Account</font></b><br><b><font size=6><br>User Name=<?php echo $_SESSION['username']; ?></font></p>
			<p><b><font size=6><br>Your Product </font></p><br><br><center>
			<img src="m1.jpg"height=200 width=400><br><br>
			<center><font size=6>ASUS X754<br>
			<p> <a href="index.php?logout='1'" style="color:white;"><font size=6>logout</a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>