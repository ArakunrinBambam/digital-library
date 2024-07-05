<?php 
include ("../classes/db.php");

$username = $_POST['auser'];
$password = $_POST['apass'];

if (!$username || !$password) {
		echo "blank";
		exit;
}	

$query = "Select * from tbladmin where a_username='$username' and a_password='$password'";

	$rs = $db->query($query) or die($db->error);

	if ($rs->num_rows){

		$data = $rs->fetch_object();

		session_start();
		$_SESSION['admin_id']='Administrator';
		echo "success";

			
	}else {
		echo "fail";
	}


	$rs->free();
	


?>