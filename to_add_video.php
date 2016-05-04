<?php

	include 'db.php';
	session_start();
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$desc = $_POST['video_desc'];
		$temp = $_FILES["video"]["name"];//explode(".",$_FILES["photo"]["name"]);
		//$img = array();
		//$new_file = implode(" ", $text);
		//echo $temp;
		move_uploaded_file($_FILES['video']['tmp_name'],"videos/".$_FILES["video"]["name"]);
		/*$myfile = fopen("images/users/".$_FILES["photo"]["name"], "r");
		$i = 0;
		while(!feof($myfile)){
			$img[$i] = fgets($myfile);
			$i++;
		}
		fclose($myfile);
		$str = implode(" ", $text);
		$connection->query("INSERT INTO blogs(id, uid, title, content, post_date,active)
								VALUES(NULL, ".$_SESSION['user_id'].", \"".$temp[0]."\", \"".$str."\", NOW(), 1 )");*/
		$connection->query("INSERT INTO video_table VALUES (NULL,".$_SESSION['user_id'].", '".$desc."', '".$temp."', NOW())");						
//echo "INSERT INTO photos VALUES (NULL, \"".$temp."\", ".$_SESSION['user_id'].", 0, NULL,NOW())";
		header("Location:add_video.php?added=1");

	}

?>