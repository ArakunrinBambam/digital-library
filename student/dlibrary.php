<?php
 include ("classes/db.php");


 $qry = "SELECT * from tblcategories ORDER BY c_name ";

 $rs = $db->query($qry);

 


?>

<div class="row lib" style="background-color:#ffffff; margin:10px;">
	<div class="col-lg-12" >
		<div class="row" >
			<div class="col-lg-12" style="background-color:#ffa000;">
				<div class="row">
					<div class="col-lg-9">
						<h4>Catalogues</h4>
					</div>
					<div class="col-lg-3">
						<form role="form" id="sp" name="sp" action="../s_dashboard.php" >
							<div class="input-group" style="padding-top:3px;">
			                    <input type="text" id="q" name="q" placeholder="find a book"class="form-control">
			                    <span class="input-group-btn">
			                        <button class="btn btn-success" id="sbtn" >
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
							echo '<a title="allbook" href="s_dashboard.php?page=library&cat=all" class="cat-link">';
							echo "<li>";
							echo'<div><img src="images/cat.png" align="center"></div>'
								."<div><b>All Books</b></div>"
								.'<div><i>contains all books</i></div>';
								
							echo "</li>";
							echo "</a>";
						while($row = $rs->fetch_array()){
							$descr = $row[2];

							$descr = substr($descr, 0, 20)."...";
							echo "<a title='$row[1]' href='s_dashboard.php?page=library&cat=$row[0]'' class='cat-link'>";
							echo "<li>";
							echo'<div><img src="images/cat.png" align="center"></div>'
								."<div><b>$row[1]</b></div>"
								.'<div><i>'.$descr."</i></div>";
								
							echo "</li>";
							echo "</a>";
						
						}
							
						}else {
						?>
							<div class="alert alert-danger">
								<h5> No product in the Store </h5>
							</div>
						<?php	
						}
					 	?>	

					 	</ul>	


		</div>

	</div>

</div>
<!--<script type="text/javascript" src="script/js/script.js"></script>-->



