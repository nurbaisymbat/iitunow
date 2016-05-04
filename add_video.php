<!DOCTYPE HTML>

<html>
	<head>
		<title>Add new video</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<style>
	   body {
		background-image: url(images/bg.jpg); /* Путь к фоновому изображению */
		
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
								<a href="home.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">IITUNow</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="home.php">Home</a></li>
							<li><a href="add_video.php">Add new video</a></li>
							<li><a href="my_videos.php">My videos</a></li>
							<li><a href="log_out.php">Log out</a></li>
						</ul>
					</nav>
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Add new Video</h1>
							<h4>The size of the Video must be <font color="blue">under the 20MB</font></h4>
							<font color="green"><?php	
								if(isset($_GET['added'])&&$_GET['added']==1){
									echo "Video was added!";
								}?>
							</font>
							<p>
							<form action="to_add_video.php" method="post"  enctype="multipart/form-data">
								<input type="file" name = "video">
								<div class="6u 12u$(xsmall)">
									<input type="text" name="video_desc" id="video_desc" value="" placeholder="Video Description" />
								</div>
								<ul class="actions">
									<li><a href="#" class="button special icon fa-upload"><input type="submit" class="button special icon fa-upload" value = "Upload"></a></li>
								</ul>
							</form>
						</div>
					</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>