<?php 
	session_start();
	if(is_null($_SESSION['sname'])){
		header("location:errorpage.php");
		die();
	}
?>