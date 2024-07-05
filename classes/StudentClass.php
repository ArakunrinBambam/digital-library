<?php 

include("Db.php");


class StudentClass {


	
	public function registerStudent($sname, $oname, $matno, $password, $email, $s_quest, $s_ans){

		$insert = "Insert into tblStudent values(null, '$sname', '$oname','$matno', '$password', '$email', '$s_quest', '$s_ans')";
		$db = new DB();
		if($db->execute($insert)) {

			return true;
		}else {
			return false;
		}	 
	}

	public function deleteStudent($matno) {

	}

	public function updateStudent($sname, $fname, $mname, $sex, $matno, $email, $password) {

	}

	public function  checkMat($matno){
		

	}


}


?>