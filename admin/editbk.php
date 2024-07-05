<?php 
include ("../classes/db.php");
if (!isset($_GET['n'])){
	echo '<script type="text/javascript"> alert("Access Denied");</script>';
	header("Location: ../admin_page.php");

}else {
	$name = $_GET['n'];
	
	$qry = "SELECT * FROM tblbooks INNER JOIN tblcategories on tblbooks.cid = tblcategories.cid where bid ='$name'";
	$rs = $db->query($qry);
	$num = $rs->num_rows;

	
	$row = $rs->fetch_array();
?>
<div class="row">
	<section class="col-lg-12" style="color:black">
		<br>
		<br>
		<div class="panel panel-default" style="border:solid 1px #000033;">
			<div class="panel-heading" style="background-color:#ffa000; color:#FFF;">
				<h3 class="panel-title">Edit Book::<?php echo $row[2];   ?></h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6 col-md-offset-3">
						<div class="form-group" >
							<form role="form" action="../servers/bkserver.php" enctype="multipart/form-data" name="bkeform" id="bkeform" > 
								<input type="hidden" name="optype" value="edit" id="optype">
								<input type="hidden" name="b_id" id="b_id" value="<?php echo $row[0]; ?>">
									<table class="table editable" align="center">
										<tr>
											<td colspan="2" align="center"> <p style="color:#09a149;"> Edit the Details below </p> </td>
										</tr>
										<div class="row details" id="notify" style="color:#ff0000;font-weight:bold; padding-bottom:5px;">
											<div class="col-lg-12" >
												<img src="images/loading.gif" id="im" style="display:none"><span id="msg"></span> 
											</div>
										</div>
										<tr class="details"c>
											<td><label>Book Title:</label></td>
											<td align="left"> 
												<input type="text" name="bktitle" id="bktitle" maxlength="50" value="<?php echo $row[2];   ?>"> 
											</td>
										</tr>
										<tr class="details"c>
											<td><label>Book Author:</label></td>
											<td align="left"> 
												<input type="text" name="bkauthor" id="bkauthor" maxlength="50" value="<?php echo $row[3];   ?>"> 
											</td>
										</tr>
										<tr class="details"c>
											<td><label>Book Category:</label></td>
											<td align="left"> 
												<select name="bkcat" id="bkcat">
													<?php 
														include ('../classes/db.php');

														$qry = "Select cid, c_name from tblcategories order by c_name";

														$rs = $db->query($qry);
														echo "<option value='$row[6]'>$row[7]</option>";
														echo "<option value='Please Select'>Please Select</option>";
														while ($rows = $rs->fetch_array()){
															echo "<option value=$rows[0]>$rows[1]</option>";
														}

													 ?>
												</select>
											</td>
										</tr>
										
										<tr>
											<td colspan="2" align="center"><button  value="Update Book" class="btn btn-success" id="btnbke">Update Book</button></td>
										</tr>

									</table>
							</form>
							
						</div>			
					</div>
				</div>

			</div>
				
			</div>
		</div>
		
	
	
	</section>
</div>
<script type="text/javascript" src="script/js/script.js"></script>
<?php } ?>