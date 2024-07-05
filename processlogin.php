<?php 
	include("classes/DB.php");

	$username = $_POST['matno'];
	$password = md5(sha1($_POST['pass']));
	

	if (!$username || !$password) {
		echo "blank";
		exit;
	}	

	if (!get_magic_quotes_gpc()){

		$username = addslashes($username);
		$password = $password;
	}

	$query = "Select * from tblstudents where matricno='$username' and password='$password'";

	$rs = $db->query($query) or die($db->error);

	if ($rs->num_rows){

		$data = $rs->fetch_object();

		session_start();
		$name = "$data->sname $data->oname";
		$_SESSION['fname'] = $name;
		$_SESSION['sname']= $data->sname;
		$_SESSION['oname']= $data->oname;
		$_SESSION['matno']= $data->matno;
		$_SESSION['email']= $data->email;
		echo "success";


		
	}else {
		echo "fail";
	}


	$rs->free();
	
		





	
?>