<?php
	include 'db.php';
	session_start();
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Home</title>
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
						<h2>Menu / <?php echo $_SESSION['user_name']; ?></h2>
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
							<header>
								<h1>Here you can share interesting videos <br/> with all other students</h1>
							</header>
							<section class="tiles">
							<?php
								$query = $connection->query("SELECT * FROM video_table ORDER BY add_date DESC ");
							?>
							<?php $i=0; $j=1;
								while(($row=$query->fetch_object()) && ($i<3)){ 
									$query2 = $connection->query("SELECT * FROM user_table WHERE id=".$row->user_id." ");
									if($row2 = $query2->fetch_object()){
								?>													
								<article class="style<?php echo $j;?>">
									<span class="image">
									<video width="353" height="326" controls>
										<source src="videos/<?php echo $row->video_link;?>" type="video/mp4"/>
									</video>
									</span>
									<a href="watch_video.php?video_id=<?php echo $row->video_id;?>">
										<h2><?php echo $row2->user_name; ?></h2>
										<div class="content">
											<p><?php echo $row->video_desc;?></p>
										</div>
									</a>
								</article>
								<?php }
									$i++; $j++;
									if($i == 3){
										$i =0;
									}
									if($j == 6){
										$j =1;
									}
								} ?>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; IITUNow. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>