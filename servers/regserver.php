<?php 
include ('../classes/db.php');


$sname = sanitize($_POST['sname']);
$oname = sanitize($_POST['oname']);
$sex = sanitize($_POST['sex']);
$phoneno = sanitize($_POST['phoneno']);
$email = sanitize($_POST['email']);
$matricno = sanitize($_POST['matricno']);
$pass = md5(sha1(sanitize($_POST['spass'])));
$cpass = sanitize($_POST['cspass']);
$squest = sanitize($_POST['squest']);
$sanswr = sanitize($_POST['sansw']);

//perform a check wether the matric number already exist

$qry = "SELECT * from tblstudents where matricno='$matricno'";
$rs1 = $db->query($qry) or die($db->error);
$num = $rs1->num_rows;

if ($num > 0 ) {
	echo "exist";
}else {

	$query = "INSERT into tblstudents values(null,'$sname','$oname','$sex','$phoneno','$email','$matricno','$pass','$squest','$sanswr',now())";
	$rs = $db->query($query) or die($db->error);
	if ($rs) {
		echo "success";
	}else {
		echo "failed";
	}

}


function sanitize($element) {

	$element = addslashes(htmlspecialchars(htmlentities(stripslashes($element))));

	return $element;
}


?>