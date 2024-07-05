
<div class="row">
	<section class="col-lg-12" style="color:black">
		<br>
		<br>
		<div class="panel panel-default" style="border:solid 1px #000033;">
			<div class="panel-heading" style="background-color:#ffa000; color:#FFF;">
				<h3 class="panel-title">Add New Catalogue</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6 col-md-offset-3">
						<div class="form-group" >
							<form role="form" action="../servers/catserver.php" enctype="multipart/form-data" name="cataform" id="cataform" > 
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
											<td><label>Catalogue Name:</label></td>
											<td align="left"> 
												<input type="text" name="catname" id="catname" maxlength="50"> 
											</td>
										</tr>
										<tr class="details">
											<td><label>Catalogue Description</label></td>
											<td align="left"> 
												<textarea  name="catdesc" id="catdesc" rows="2" cols="20"></textarea>
											</td>
										</tr>
										<tr>
											<td colspan="2" align="center"><button  value="Add Catalogue" class="btn btn-success" id="btncata">Add Catalogue</button></td>
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