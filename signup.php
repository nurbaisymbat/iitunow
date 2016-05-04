<?php
	
	include 'db.php';

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Registration</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<style>
	   body {
		background-image: url(images/indexbg.jpg); /* Путь к фоновому изображению */
		
	   }
  </style>
</head>

<body>
<!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
		<header id="header">
			<div class="inner">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">iitunow</span>
				</a>
		</div>
		</header>	
	
	<center>
	<font color="red"><?php 
		if(isset($_GET['error'])&&$_GET['error']==1){
		echo "Passwords mismatch!!";
		}?>
	</font>
	<form method="post" action="save_user.php">	
		<div class="6u 12u$(xsmall)">
				<input type="text" name="user_name" id="user_name" value="" placeholder="Name" />
		</div>
		<div class="6u 12u$(xsmall)">
				<input type="email" name="user_email" id="user_email" value="" placeholder="Email" />
		</div>
		<div class="6u$ 12u$(xsmall)">
			<input type="password" name="password" id="password" value="" placeholder="Password" />
		</div>
		<div class="6u$ 12u$(xsmall)">
			<input type="password" name="password2" id="password2" value="" placeholder="Confirm Password" />
		</div>
		<section>
			<ul class="actions">
				<li><input type="submit" name="submit" class="button special" value="Sign up"></li>
				<li><a href="index.php"><input type="button" name="index" class="button" value="Go To Login Page"></a></li>
			</ul>
		</section>
	</form>
	</center>
	</div>
	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
</body>
</html>
