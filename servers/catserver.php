<?php 
include ("../classes/db.php");

$cname = sanitize($_POST['catname']);
$catdescr = sanitize($_POST['catdesc']);
$optype = sanitize($_POST['optype']);


	if ($optype=="add") {
		if (!$cname || !$catdescr || !$optype){
			echo "blank";

		}else {

			$qry = "Select * from tblcategories where c_name='$cname'";

			$rs = $db->query($qry);

			$num = $rs->num_rows;

			if ($num > 0 ){
				echo "exist";
				exit;
			}else {
				$qry = "Insert into tblcategories values(null,'$cname', '$catdescr', now())";

				$rs = $db->query($qry);

				if ($rs) {
					echo "success";
				}else {
					echo "failed";
				}
			}
		}
	}else if($optype=="edit"){
		if (!$cname || !$catdescr || !$optype){
			echo "blank";

		}else {
			$cid = sanitize($_POST['c_id']);

			$qry ="UPDATE tblcategories SET c_name='$cname', c_description='$catdescr' WHERE cid='$cid'";

			$rs = $db->query($qry);

			if ($rs){
				echo "success";
			}else {
				echo "failed";
			}
		}

	}else if($optype=="delete"){
		$cid = sanitize($_POST['cid']);
		
		$qry = "DELETE from tblcategories where cid='$cid'";

		$rs = $db->query($qry);

		if ($rs){
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