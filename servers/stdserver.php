<?php
/*if (is_dir("../uploads/dol")){
	echo "directory exits";
}else {
	if (mkdir("../uploads/dol",0777)){
		echo "Directory created successfuly";
	}
}
*/
$dept  = $_POST['dept'];
$lvl  = $_POST['lvl'];

if (isset($_FILE['file']['stdfile'])){
	$status = "Upload Successful";
}else {
	$status= "Failed Upload";
}

if($dept != "Please Select"){
	$status = $dept."\n".$lvl;
}else {
	$status = "You fucked Up!!!!";
}

echo $status;

?>