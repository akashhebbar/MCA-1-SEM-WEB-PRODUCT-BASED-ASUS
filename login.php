<?php include('server.php') ?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />

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
				<li class="active"><a href="index.html" title="">Homepage</a></li>
				<li><a href="products.html"  title="">Our Products</a></li>
				<li><a href="login.php"  title="">Login</a></li>
				<li><a href="about.html"  title="">About Us</a></li>
				<li><a href="contact.html"  title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<div id="banner" class="container">
		<div class="title">
			<h1>LOGIN</h1><br><br>
			<span class="byline">
			<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" ><br><br>
		</div>
		<div class="input-group">
			&nbsp<label>Password</label>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="signup.php">Sign up</a>
		</p>
	</form>

			
			
			
			
			</span>
		</div>
		<ul class="actions">
			
		</ul>
	</div>
</div>
<div id="wrapper">
	<div id="three-column" class="container">
		<div class="title">
			<h2>Innovative. Informative. Inspiring.</h2>
			
		</div>
		<div class="boxA">
			<p>Products</p>
			<ol>
			<li>1.Phones</li><br>
			<li>2.Laptops</li><br>
			<li>3.Display</li><br>
			
			</ol>
			<a href="products.html" class="button button-alt">More Info</a>
		</div>
		<div class="boxB">
			<p>Who We Are?</p>
			<ol>
			<li>1.About Us</li><br>
			<li>2.News&nbsp&nbsp&nbsp&nbsp&nbsp</li><br>
			<li>3.Careers&nbsp&nbsp</li><br>
			</ol>
			<a href="about.html" class="button button-alt">More Info</a>
		</div>
		<div class="boxC">
			<p> Need Help?</p>
			<ol>
			<li>1.Check Repair Status</li><br>
			<li>2.Product Registration</li><br>
			<li>2.TollFree 18002090365</li><br>
			</ol>
			<a href="#" class="button button-alt">More Info</a>
		</div>
	</div>
</div>
<div id="welcome">
	<div class="container">
		<div class="title">
			<h2>Connect with us at Asus  events</h2>
			<span class="byline">Asus Summit </span>
		</div>
		<p>Innovative. Informative. Inspiring.</p>
		<ul class="actions">
			<li><a href="#" class="button">Learn more</a></li>
		</ul>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy;Asus All rights reserved</p>
</div>
</body>
</html>
