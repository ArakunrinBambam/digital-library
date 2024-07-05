
<div class="row">
	<section class="col-lg-12" style="color:black">
		<br>
		<br>
		<div class="panel panel-default" style="border:solid 1px #000033;">
			<div class="panel-heading" style="background-color:#ffa000; color:#FFF;">
				<h3 class="panel-title">Add New Book</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6 col-md-offset-3">
						<div class="form-group" >
							<form role="form" action="../servers/bkserver.php" enctype="multipart/form-data" name="bkaform" id="bkaform" > 
								<input type="hidden" name="optype" value="add" id="optype">
									<table class="table editable" align="center">
										<tr>
											<td colspan="2" align="center"> <p style="color:#09a149;"> Please Supply the Details below </p> </td>
										</tr>
										<div class="row details" id="notify" style="color:#ff0000;font-weight:bold; padding-bottom:5px;">
											<div class="col-lg-12" >
												<img src="images/loading.gif" id="im" style="display:none"><span id="msg"></span> 
											</div>
										</div>
										<tr class="details"c>
											<td><label>Book Title:</label></td>
											<td align="left"> 
												<input type="text" name="bktitle" id="bktitle" maxlength="50"> 
											</td>
										</tr>
										<tr class="details"c>
											<td><label>Book Author:</label></td>
											<td align="left"> 
												<input type="text" name="bkauthor" id="bkauthor" maxlength="50"> 
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
														echo "<option value='Please Select'>Please Select</option>";
														while ($row = $rs->fetch_array()){
															echo "<option value=$row[0]>$row[1]</option>";
														}

													 ?>
												</select>
											</td>
										</tr>
										<tr class="details">
											<td align="center" colspan="2"> 
												<input type="file" name="bkfile" id="bkfile" size="20">
											</td>
										</tr>
										<tr>
											<td colspan="2" align="center"><button  value="Add Book" class="btn btn-success" id="btnbka">Add Book</button></td>
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