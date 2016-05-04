<?php

	include 'db.php';
	
	$user_name = $_POST['user_name'];
	$result = $connection->query("SELECT * FROM user_table where user_active = 1");
	
	while($row = $result->fetch_object()){

		if(($user_name == $row->user_name) && (sha1($_POST['password']) == $row->password)){
			session_start();
				//echo $row->user_name;
	//echo $row->password;
			$_SESSION['user_name'] = $user_name;
			$_SESSION['user_id'] = $row->id;
			$_SESSION['user_email'] = $row->user_email;
			$_SESSION['user_photo'] = $row->user_photo;
			//$connection->query("UPDATE users SET active=1 WHERE login=\"".$username."\"");
			header('Location:home.php');
			//echo $_SESSION['user_login'];

		}
		else{
			//header('Location:index.php?error=1');
		}
	}

?>