
<div class="row">
	<section class="col-lg-6 col-md-offset-3">
		<br>
		<br>
		<div class="panel panel-default" style="border:solid 1px #000033;">
			<div class="panel-heading" style="background-color:#ffa000; color:#FFF;">
				<h3 class="panel-title">Registration</h3>
			</div>
			<div class="panel-body">
			<form name="regfrm" id="regfrm" method="post" action="servers/regserver.php" role="form">
				<div class="row details" id="notify" style="color:#ff0000;font-weight:bold; padding-bottom:0px;">
					<div class="col-lg-12" >
						<img src="images/loading.gif" id="im" style="display:none"><span id="msg"></span> 
					</div>
				</div>
				<div class="row details">
					<div class="col-lg-2">
						<label for="sname"> Surname:</label>
					</div>
					<div class="col-lg-3">
						<input type="text" id="sname" name="sname" placeholder="Surname" maxlength="30">
					</div>	
					<div class="col-lg-3">
						<label for="oname"> Other Names:</label>
					</div>
					<div class="col-lg-3">
						<input type="text" id="oname" name="oname" placeholder="Other Names" maxlength="50">
					</div>	
				</div>
				<div class="row details">
					<div class="col-lg-2">
						<label for="sex"> Sex:</label>
					</div>
					<div id="rad" class="col-lg-3">
						<label>Male</label>	<input type="radio" name="sex" id="sex" value="Male" > 
						<label>Female</label>	<input type="radio" name="sex" id="sex" value="Female" > 
					</div>	
					<div class="col-lg-3">
						<label for="phoneno"> Phone No:</label>
					</div>
					<div class="col-lg-3">
						<input type="text" id="phoneno" name="phoneno" placeholder="080" maxlength="11">
					</div>	
				</div>
				<div class="row details">
					<div class="col-lg-2">
						<label for="email"> Email:</label>
					</div>
					<div class="col-lg-3">
						<input type="email" id="email" name="email" placeholder="example@example.com" maxlength="60">
					</div>	
					<div class="col-lg-3">
						<label for="matricno"> Matric No:</label>
					</div>
					<div class="col-lg-3">
						<input type="text" id="matricno" name="matricno" placeholder="Matric No" maxlength="13">
					</div>	
				</div>
				<div class="row details">
					<div class="col-lg-2">
						<label for="spass"> Password:</label>
					</div>
					<div class="col-lg-3">
						<input type="password" id="spass" name="spass" placeholder="********">
					</div>	
					<div class="col-lg-3">
						<label for="cspass" style="font-size:95%"> Confirm Password:</label>
					</div>
					<div class="col-lg-3">
						<input type="password" id="cspass" name="cspass" placeholder="********">
					</div>	
				</div>
				<div class="row details">
					<div class="col-lg-2">
						<label for="squest" style="font-size:95%"> Secret Question:</label>
					</div>
					<div class="col-lg-3">
						<input type="text" id="squest" name="squest" placeholder="Security Question">
					</div>	
					<div class="col-lg-3">
						<label for="sansw" > Answer:</label>
					</div>
					<div class="col-lg-3">
						<input type="text" id="sansw" name="sansw" placeholder="Answer">
					</div>	
				</div>
				<div class="row details">
					<div class="col-lg-12">
						<button name="btnreg" class="btn btn-warning" value="Submit" id="btnreg">Register</button>
					</div>
				
				</div>
			</form>
			</div>
		</div>
		
	
	</section>
	
	
</div>