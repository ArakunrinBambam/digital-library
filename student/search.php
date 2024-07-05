<?php
 include ("classes/db.php");

 

 	$param = $_GET['q'];

 	$qry = "SELECT * FROM `tblbooks` WHERE `b_title`  LIKE '%$param%' ";

 	$rs = $db->query($qry);
 	
 	$num = $rs->num_rows;


?>

<div class="row lib" style="background-color:#ffffff; margin:10px;">
	<div class="col-lg-12" >
		<div class="row" >
			<div class="col-lg-12" style="background-color:#ffa000;">
				<div class="row">
					<div class="col-lg-9">
						<h4>Search Result:: <span style="color:green; font-weight:bold"> (<?php echo $num; ?>) </span> found for keyword <span style="color:green; font-weight:bold"><?php echo $param; ?></span></h4>
					</div>
					<div class="col-lg-3">
						<form role="form" id="sp" name="sp" action="../s_dashboard.php" >
							<div class="input-group" style="padding-top:3px;">
			                    <input type="text" id="q" name="q" value="<?php echo $param; ?>" placeholder="find a book"class="form-control">
			                    <span class="input-group-btn">
			                        <button class="btn btn-success" id="sbtn">
			                            Search
			                        </button>
			                    </span>
			                </div>
						</form>
					</div>
			
				</div>
			</div>	
			</div>
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
							
						}else {
						?>
							<div class="alert alert-danger">
								<h5> No Result found </h5>
							</div>
						<?php	
						}
					 	?>	

					 	</ul>	


		</div>

	</div>

</div>
<!--<script type="text/javascript" src="script/js/script.js"></script>-->



