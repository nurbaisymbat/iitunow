<?php

	include 'db.php';
	$user_name = $_POST['user_name'];
	$password1 = $_POST['password'];
	$password2 = $_POST['password2'];
	$user_email = $_POST['user_email'];
	
	if($password1==$password2){

		$sql_query = "INSERT INTO user_table VALUES (null,'".$user_name."','".$user_email."','".sha1($password1)."',1,'pic0".rand(1,9).".jpg')";
		$connection->query($sql_query);
		header("Location:index.php");

	}else{

		header("Location:signup.php?error=1");

	}
?>