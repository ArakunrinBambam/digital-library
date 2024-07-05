$(function() {
	//action event for upload student data button

	
	$(".edit").click(function(e){
		var link = $(this).attr('href');
		
		$('#hme').load('admin/'+link);
		return false;
	});
	$(".delete").click(function(e){

		var id = $(this).attr('href');
		var optype = "delete";
		$.post("servers/catserver.php",{cid:id,optype:optype}, function(data){
			if (data=="success"){
				$('#hme').load('admin/v_allcat.php');	
			}else {
				alert("Cannot Delete at the moment, please try again later");
			}
		});
		//$('#hme').load('admin/'+link);
		return false;
	});

	$('#btncata').click(function(e){
		$("#notify").slideDown();
    	$("#im").slideDown();
    	$("#msg").html("Adding Catalogue...");
		msg = "";
		var cname = $("#catname").val();
		var catdesc = $("#catdesc").val();

		if (cname=="")
			msg +="Catalogue Name Missing,";
		if (catdesc=="")
			msg += "Catalogue Description Missing,";

		if (msg!=""){
			msg = msg.substring(0,msg.length - 1);
			$("#im").slideUp();
    		$("#msg").html(msg);
		}else {
			$("#cataform").submit();
		}


		e.preventDefault();
	});

	$('#btncate').click(function(e){
		$("#notify").slideDown();
    	$("#im").slideDown();
    	$("#msg").html("Updating Catalogue...");
		msg = "";
		var cname = $("#catname").val();
		var catdesc = $("#catdesc").val();

		if (cname=="")
			msg +="Catalogue Name Missing,";
		if (catdesc=="")
			msg += "Catalogue Description Missing,";

		if (msg!=""){
			msg = msg.substring(0,msg.length - 1);
			$("#im").slideUp();
    		$("#msg").html(msg);
		}else {
			$("#cateform").submit();
		}


		e.preventDefault();
	});

	$('#btnbka').click(function(e){
		$("#notify").slideDown();
    	$("#im").slideDown();
    	$("#msg").html("Adding Book...");
		msg = "";
		var bktitle = $("#bktitle").val();
		var bkauthor = $("#bkauthor").val();
		var bkfile = $("#bkfile").val();
		var bkcat = $("#bkcat").val();

		if (bktitle=="")
			msg +="Book Title Missing,";
		if (bkauthor=="")
			msg += "Book Author Missing,";
		if (bkcat=="Please Select")
			msg += "BooK Catalogue Not Selected,";
		if (bkfile=="")
			msg +="Choose the book to upload,";


		if (msg!=""){
			msg = msg.substring(0,msg.length - 1);
			$("#im").slideUp();
    		$("#msg").html(msg);
		}else {
			$("#bkaform").submit();
		}


		e.preventDefault();
	});

	$('#btnbke').click(function(e){
		$("#notify").slideDown();
    	$("#im").slideDown();
    	$("#msg").html("Updating Book...");
		msg = "";
		var bktitle = $("#bktitle").val();
		var bkauthor = $("#bkauthor").val();
		var bkcat = $("#bkcat").val();

		if (bktitle=="")
			msg +="Book Title Missing,";
		if (bkauthor=="")
			msg += "Book Author Missing,";
		if (bkcat=="Please Select")
			msg += "BooK Catalogue Not Selected,";
		

		if (msg!=""){
			msg = msg.substring(0,msg.length - 1);
			$("#im").slideUp();
    		$("#msg").html(msg);
		}else {
			$("#bkeform").submit();
		}


		e.preventDefault();
	});


	$("#cataform").ajaxForm(function(data){
		if (data=="success") {
			$("#im").slideUp();
    		$("#msg").html("Catalogue Added Successfully");
    		$("#catname").val("");
    		$("#catdesc").val("");
		}else if(data=="exist"){
			$("#im").slideUp();
    		$("#msg").html("Record Already Exist");
		}else if(data=="failed"){
			$("#im").slideUp();
    		$("#msg").html("Catalogue Cannot be add now, please try again later");
		}
	});

	$("#cateform").ajaxForm(function(data){
		if (data=="success") {
			$("#im").slideUp();
    		$("#msg").html("Catalogue Updated Successfully");
    		$('#hme').load('admin/v_allcat.php');
		}else if(data=="failed"){
			$("#im").slideUp();
    		$("#msg").html("Catalogue Cannot be update now, please try again later");
		}else {
			$("#msg").html(data);
		}	
	});

	$("#bkaform").ajaxForm(function(data){
		if (data=="success") {
			$("#im").slideUp();
    		$("#msg").html("Book Added Successfully");
    		$("#bktitle").val("");
    		$("#bkauthor").val("");
    		$("#bkcat").val("Please Select");
    		$("#bkfile").val("");
		}else if(data=="exist"){
			$("#im").slideUp();
    		$("#msg").html("Book Already Exist");
		}else if(data=="failed"){
			$("#im").slideUp();
    		$("#msg").html("Book Cannot be add now, please try again later");
		}else if(data=="invalid"){
			$("#im").slideUp();
    		$("#msg").html("Choose a valid pdf document");
    		$("#bkfile").val("");
		}else if(data=="toomuch"){
			$("#im").slideUp();
    		$("#msg").html("File too big to be uploaded");
    		$("#bkfile").val("");
		}else {
			alert(data);
		}
	});

	$("#bkeform").ajaxForm(function(data){
		if (data=="success") {
			$("#im").slideUp();
    		$("#msg").html("Book Updated Successfully");
    		$("#bktitle").val("");
    		$("#bkauthor").val("");
    		$("#bkcat").val("Please Select");
    		$("#bkfile").val("");
		}else if(data=="exist"){
			$("#im").slideUp();
    		$("#msg").html("Book Already Exist");
		}else if(data=="failed"){
			$("#im").slideUp();
    		$("#msg").html("Book Cannot be add now, please try again later");
		}else if(data=="invalid"){
			$("#im").slideUp();
    		$("#msg").html("Choose a valid pdf document");
    		$("#bkfile").val("");
		}else {
			alert(data);
		}
	});


	$(".cat-link").click(function(e) {
		alert("You clicked One of the Categories");

		return false;
	});

});	