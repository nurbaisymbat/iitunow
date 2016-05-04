<?php
	include 'db.php';
	session_start();
	$query = $connection->query("select * from video_table where user_id=".$_SESSION['user_id']);
	while($row=$query->fetch_object()){
		if($_GET['video_id'] == $row->video_id){
			$connection->query("delete from video_table where video_id=".$_GET['video_id']);
			//$connection->query("delete from likes where img_id=".$_GET['img_id']);
			$connection->query("delete from comment_table where video_id=".$_GET['video_id']);
		}
	}
	header("Location:home.php");
?>