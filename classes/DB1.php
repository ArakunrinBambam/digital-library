<?php

class DB {

	private $rs;

	public function __construct()
	{
		$this->connect();
	}
	public function connect(){
		if(mysqli_connect("localhost","root","dotman")) {

			mysqli_select_db("assignment") or die("Error selecting database");
				
		}else {
			echo "Cannot Connect to database due to this error:".mysqli_error();
		}
	}

	public function execute($q)
	{
		$this->rs = mysqli_query($q) or die("The Following Error Occured While Executing the Query".mysqli_error());

		if ($this->nofrows($this->rs)>0) {

			return $this->rs; 
		
		}else {
			return 0;	
		}
	}
	public function nofrows($r)
	{
		return mysqli_num_rows($r);
	}
	

}


?>