<div class="panel panel-success adm" style="margin-bottom:0px;">
	<div class="panel-heading">
		Admin Login Form  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
	</div>
	<div class="panel-body">
		<form method="post" action="servers/admserver.php" name="admlg" id="admlg">
			<div class="row details" id="notify1" style="color:#ff0000;font-weight:bold; padding-bottom:0px;">
					<div class="col-lg-12" >
						<img src="images/loading.gif" id="im1" style="display:none"><span id="msg1"></span> 
					</div>
				</div>
			<div class="row form-group">
				<div class="col-lg-4">
					<label for="auser"> Username: </label>
				</div>

				<div class="col-lg-8">
					<input type="text" class="form-control" name="auser" id="auser" maxlength="20">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-lg-4">
					<label for="apass"> Password: </label>
				</div>

				<div class="col-lg-8">
					<input type="password" class="form-control" name="apass" id="apass" maxlength="20">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-lg-12">
					<button class="form-control btn btn-success" name="btnadm" id="btnadm" value="login">Login</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$(function() {

			$("#admlg").ajaxForm(function(data){
				if (data=="success"){
					$("#im1").slideUp();
    				$("#msg1").html("Successful Login");
    				window.location.href = "admin_page.php";
				}else if(data=="fail"){
					$("#im1").slideUp();
    				$("#msg1").html("Incorrect Login Credentials");
    				$("#auser").val("");
    				$("#apass").val("");
				}
			});

			$("#btnadm").click(function(e) {
				$("#notify1").slideDown();
	    		$("#im1").slideDown();
	    		$("#msg1").html("Loggin in...");
				var msg = "";
				var username = $("#auser").val();
				var password = $("#apass").val();

				if (username=="") {
					msg += "Username Missing,";
				}
				if (password=="") {
					msg += "Password Missing,";
				}

				if (msg!=""){
					msg = msg.substring(0,msg.length-1);
					$("#im1").slideUp();
    				$("#msg1").html(msg);
				}else {
					$("#admlg").submit();
				}				

				e.preventDefault();
			});

	});

</script>