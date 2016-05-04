<?php

	include 'db.php';
	
	$user_email = $_POST['user_email'];
	$result = $connection->query("SELECT * FROM user_table where user_active =1");
	$new_password = '12345678';
	$msg = 'Hello!\nYour new password is <b>12345678</b>!';
	while($row = $result->fetch_object()){
		if(($user_email == $row->user_email)){
		
			$q = "UPDATE user_table SET password='".sha1($new_password)."' WHERE user_email='".$user_email."'";
			$connection->query($q);
			mail($user_email, "New Password", $msg);
			header('Location: index.php?new_password=1');
			//echo $_SESSION['user_login'];

		}
		else{
			//header('Location: forgot.php?error=1');
		}
	}

?>