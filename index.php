<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Login</title>
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
		echo "Login or password is incorrect!";
		}?>
	</font>
	<font color="green"><?php 
		if(isset($_GET['new_password'])&&$_GET['new_password']==1){
		echo "New password was sent to your e-mail!";
		}?>
	</font>
	<form method="post" action="to_login.php">	
		<div class="6u 12u$(xsmall)">
				<input type="text" name="user_name" id="user_name" value="" placeholder="Name" />
		</div>
		<div class="6u$ 12u$(xsmall)">
			<input type="password" name="password" id="password" value="" placeholder="Password" />
		</div>
		<section>
			<ul class="actions">
				<li><a href="forgot.php">Forgot your password?</a></li><p>
				<li><input type="submit" name="submit" class="button special" value="Login"></li>
				<li><a href="signup.php"><input type="button" name="signup" class="button" value="Sign up"></a></li>
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
