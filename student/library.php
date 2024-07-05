<?php
 include ("classes/db.php");

if (isset($_GET['cat'])){

	$param = $_GET['cat'];

	if ($param=="all") {
		
		$qry = "SELECT * from tblbooks ORDER BY b_title ";

		$title = "All";
	}else {

		$qry = "SELECT * from tblbooks where cid='$param' ORDER BY b_title ";
		
		$quey = "Select * from tblcategories where cid='$param'";

		$r = $db->query($quey);

		$rw = $r->fetch_array();

		$title = $rw[1];
	}

	$rs = $db->query($qry);

?>

<div class="row lib" style="background-color:#ffffff; margin:10px;">
	<div class="col-lg-12" >
		<div class="row">
			<div class="col-lg-12" style="background-color:#ffa000;"><h4 style="">Catalogue::<?php  echo $title;?></h4></div>
			<ul class="plist">
						<?php
						if (($rs->num_rows) > 0) {
							
						while($row = $rs->fetch_array()){
							$descr = $row[3];

							$descr = substr($descr, 0, 20)."...";
							echo "<a title='$row[2]' href='resources/$row[4]' class='cat-link'>";
							echo "<li>";
							echo"<div id='bk'><img src='images/pdf1.png' align='center'><div><b style='color:black;'>$row[2]</b></div></div>";
								
							echo "</li>";
							echo "</a>";
						
						}
							
						
						?>
						</ul>	
					 	



		</div>

	</div>



</div>
<?php

						}else {	
						?>

							<div class="col-lg-6" style="color:red;">
								<h5> No Book Available for this Catalogue</h5>
							</div>

						<?php
						}
					 	?>	
<!--<script type="text/javascript" src="script/js/script.js"></script>-->

<?php 
	}else {
		echo '<div class="alert alert-danger">
								<h5> No Book Available </h5>
							</div>';
	}
?>

