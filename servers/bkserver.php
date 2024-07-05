<?php 
include ("../classes/db.php");
ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '64M');
$targetdir = "../Resources/";

$title = sanitize($_POST['bktitle']);
$author = sanitize($_POST['bkauthor']);
$optype = sanitize($_POST['optype']);
$catid = sanitize($_POST['bkcat']);
$filetype = $_FILES['bkfile']['type'];
$size = $_FILES['bkfile']['size']/1024;
$error= $_FILES['bkfile']['error'];
$filename  = $title."-".$author;
$filename = preg_replace("/[^A-Za-z0-9_-]/", "", $filename).".pdf";


	if ($optype=="add") {
		if (!$file || !$title || !$author || !$catid) {

			switch ($filetype) {
				case 'application/x-download': $ext = "pdf";	break;
				case 'application/pdf': $ext = "pdf"; break;
				default: $ext = "";	break;
			}
			if ($ext) {
				
				if ($size <= 40000){
					if (!file_exists($targetdir.$filename)) {
						$b_rul = $targetdir.$filename;
						$qry = "Select * from tblbooks where b_url='$b_url'";

						$rs = $db->query($qry);
						if (($rs->num_rows) > 0) {
							echo "exist";
						}else {

							if(move_uploaded_file($_FILES['bkfile']['tmp_name'], $targetdir.$filename)) {

								$qry = "INSERT INTO tblbooks values(null,'$catid','$title','$author','$filename',now())";

								$rs = $db->query($qry);

								if ($rs) {
									echo "success";
								}else  {
									echo "failed";
								}
							}

						}

					}else {echo "exist";}
				}else { echo "toomuch";}
				
			}else { echo "invalid";}
		}

	}else if($optype=="edit"){
		if (!$title || !$author || !$catid){
			echo "blank";

		}else {
			$bid = sanitize($_POST['b_id']);

			$qry ="UPDATE tblbooks SET b_title='$title',  b_author='$author', cid='$catid' WHERE bid='$bid'";

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