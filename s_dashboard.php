<?php include("lchecker.php");
if (isset($_GET['q'])){
	$page = 'search';
}else {

	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else {
		$page = 'dlibrary';
	}


}


?>
<!DOCTYPE html>
 <html> 
  	<head> 
 		<title>NAASS D-LIBRARY | Libraray</title> 
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<!-- Bootstrap --> 
 		<link href="script/css/bootstrap.css" rel="stylesheet">
        <link href="script/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <link href="script/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet">
        <link href="mystyle.css" rel="stylesheet">
 	</head>
 	<body id="Home" style="background-color:#ffffff;"> 
 		<section class="container-fluid">
 			<div class="row">
            	<?php include("banner.php"); ?>
            	<?php include("student/header.php");?>
	            <div class="col-lg-12">
					<section class="center row" >
						<!--Side Bar-->
							<div class="col-lg-2 side">
								<?php include("student/portalsidebar.php"); ?>							
							</div>		
						<!--end of side bar	-->
						<!--portal-->
							<div class="col-lg-10 toomuch" id="shme">
								<?php include("student/".$page.".php") ?>
							</div>	
						<!--end of portal-->			
					</section>
				</div>
				<?php include("footer.php"); ?>
			</div><!--content-->
 		</section><!--container-->
 		
 		<script src="script/js/jquery-1.7.1.js"></script>
 		<script src="script/js/jquery.form.js"></script>
 		<script src="script/js/bootstrap.js"></script>
 		<script src="script/metisMenu/src/metisMenu.js"></script>
        <script src="script/js/myjs.js"></script>
        
 	</body>
 	
 </html>