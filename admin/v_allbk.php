
<div class="row">
	<section class="col-lg-12" style="color:black">
		<br>
		<br>
		<div class="panel panel-default" style="border:solid 1px #000033;">
			<div class="panel-heading" style="background-color:#ffa000; color:#FFF;">
				<h3 class="panel-title">All Books</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group" >
							<form role="form" action="../servers/catserver.php" enctype="multipart/form-data" name="cataform" id="cataform" > 
									<table class="table table-striped table-hover" align="center">
										<?php 

												include ("../classes/db.php");

												$qry = "SELECT * FROM tblbooks INNER JOIN tblcategories on tblbooks.cid = tblcategories.cid ORDER BY b_title ASC";

												$rs = $db->query($qry);

												$num = $rs->num_rows;

												if ($num > 0 ){
													

										?>
										<thead>
											<tr align="center">
												<th> S/N </th>
												<th> Book Title </th>
												<th> Book Author </th>
												<th> Book Catalogue </th>
												<th> Edit </th>
												<th> Delete </th>
											</tr>
										</thead>

										<tbody style="max-height:90px; overflow-y:auto; overflow-x:hidden;">
											<?php 
												for( $i=0; $i<$num; $i++) {

													$row = $rs->fetch_array();
													$sn = $i + 1;
													echo "<tr>";
													echo "<td> $sn </td>";
													echo "<td>$row[2]</td>";
													echo "<td>$row[3]</td>";
													echo "<td>$row[7]</td>";
													echo '<td>&nbsp; <a href="editbk.php?n='.$row['bid'].'"style="color:#09a149;" class="edit"> <span class="fa fa-edit"></span></a> </td>';
													echo '<td>&nbsp;&nbsp;&nbsp;<a href="'.$row['bid'].'"style="color:red;" class="delete"> <span class="fa fa-close"></span></a> </td>';
													
													echo "</tr>";
												}

											?>

										</tbody>
										<?php 
											}else {
												echo "<tr class=danger><td>No Books Available</td></tr>";
											}
												

										?>

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