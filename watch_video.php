<?php
	include 'db.php';
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Watch video</title>
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
						<?php if(isset($_GET['video_id'])&&is_numeric($_GET['video_id'])){
								$query = $connection->query("SELECT * FROM video_table WHERE video_id = ".$_GET['video_id']." ");
								if($row = $query->fetch_object()){
									$query2 = $connection->query("SELECT * FROM user_table WHERE id = ".$row->user_id." ");
									$u = $query2->fetch_object(); ?>
									<center>
									<h2>Video uploaded by <font color="blue"><?php echo $u->user_name;?></font></h2>
									<video width="640" height="360" controls>
										<source src="videos/<?php echo $row->video_link;?>" type="video/mp4"/>
									</video>
									<h4><?php echo $row->video_desc; ?></h4>
									<?php if($_SESSION['user_id'] == $row->id){?>
									<a href="to_delete_video.php?video_id=<?php echo $row->video_id;?>" class="button">Delete video</a>
										<?php } 		
									?>
									</center>
									<?php $comment_query = $connection->query("SELECT * FROM comment_table WHERE video_id=".$row->video_id);?>
									<h2>Comments:</h2>
									<?php 
										if($comment_query->num_rows === 0){
											echo "<h4> There is no comment. Be first, leave a comment!</h4>";
										}
										while($com = $comment_query->fetch_object()){ 
											$query_user = $connection->query("SELECT * FROM user_table WHERE id = ".$com->user_id." AND user_active = 1 ");
											$u_name = $query_user->fetch_object();
											?>
											<img src="images/<?php echo $u_name->user_photo;?>" alt="<?php echo $u_name->user_name;?>" width="70" height="70" align="left">
											<?php echo "<b>".$u_name->user_name."</b> <br>";
											echo $com->comment_text."<br> <hr>";
																	
									} ?>
									<h2>Write a comment:</h2>
										<form action="to_comment.php" method="post">			
											<textarea style="width:70%; height:50px;" name = "text"></textarea>
											<ul class="actions">
												<li><input type="submit" name="test[<?php echo $row->video_id;?>]" value="Send" class="special" /></li>
											</ul>
										</form>	
						  <?php }	 
						} ?>
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