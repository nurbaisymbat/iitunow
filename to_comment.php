<?php

	include 'db.php';
	session_start();
	$text = $_POST['text'];
	$video = $_POST['test'];
	foreach($video as $i=>$value){
		$connection->query("INSERT INTO comment_table
								VALUES(NULL, ".$_SESSION['user_id'].", ".$i.", '".$text."', NOW())");
								header("Location:watch_video.php?video_id=".$i);
	}
	


?>