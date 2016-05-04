<?php
	include 'db.php';
	session_start();
	
	//$log_out = $_POST['logout'];
	//if($log_out == "Log out"){
		//$connection->query("UPDATE users SET active=0 WHERE login=\"".$_SESSION['username']."\"");
		session_destroy();
		header("Location:index.php");
	//}
	
?>