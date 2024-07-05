// JavaScript Document
$(document).ready(function(e) {
    $(function() {

    	/*function centerModals(){
		  $('.modal').each(function(i){
		    var $clone = $(this).clone().css('display', 'block').appendTo('body');
		    var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
		    top = top > 0 ? top : 0;
		    $clone.remove();
		    $(this).find('.modal-content').css("margin-top", top);
		  });
		}
		$('.modal').on('show.bs.modal', centerModals);
		$(window).on('resize', centerModals);*/
    	//when admin button is clicked
    	
		/*$("#myModal").load("adminlogin.php");
		$("#myModal").modal();
		$("#myModal").center();
		//$("#myModal").modal({ keyboard: false })
		//$("#myModal").modal('show')	*/
	

		$.fn.center = function() {
			this.css("position","absolute");
			this.css("display","block");
			this.css("top",($(window).height()- this.height())/2 + $(window).scrollTop()+ "px");
			this.css("left",($(window).width()- this.width())/2 + $(window).scrollLeft()+ "px"); 
			return this;
		}


    	$("#regfrm").ajaxForm(function(data){
    		if (data=="success"){
    			$("#im").slideUp();
    			$("#msg").html("Registration Successful");
    			clear2();
    		}else if(data=="exist") {
    			$("#im").slideUp();
    			$("#msg").html("Record Already Exist in Our Database");

    		}else {
    			$("#im").slideUp();
    			$("#msg").html(data);
    		}
    	});

    	$("#frmlg").ajaxForm(function(data){
    		if(data=="fail") {
				$("#err").html("Wrong MatricNo/Email or Password");
				clear();
			}else if (data=="success") {
				window.location="s_dashboard.php";								
			}else if(data=="admin"){
				window.location="admin_page.php";
			}else {
				alert(data);
			}

    	});
//ACTION THAT IS TRIGGER WHEN THE REGISTER BUTTON IS CLICKED
    	$("#btnreg").click(function(e){
    		$("#notify").slideDown();
    		$("#im").slideDown();
    		$("#msg").html("Registering...");
    		var msg = "";
    		var sname = $("#sname").val();
    		var oname = $("#oname").val();
    		var sex = $('input:radio[name=sex]:checked').val()
    		var phoneno = $("#phoneno").val();
    		var email = $("#email").val();
    		var matric = $("#matricno").val();
    		var pass = $("#spass").val();
    		var cpass = $("#cspass").val();
    		var sq = $("#squest").val();
    		var sa = $("#sansw").val();

    		if (sname==""){
    			msg +="Surname Missing,";
    		} 
    		if (oname==""){
    			msg +="Othername Missing,";
    		}
    		if (sex==""){
    			msg +="Sex Missing,";
    		}
    		if (phoneno=""){
    			msg +="Phone Number Missing,";
    		}
    		if (email==""){
    			msg +="Email Missing,";
    		}
    		if (matric==""){
    			msg +="Matric Number Missing,";
    		}
    		if (pass==""){
    			msg += "Password cannot be blank,";
    		}
    		if (cpass==""){
    			msg += "Confirm Password,";
    		}
    		if (sq==""){
    			msg += "Security Question missing,";
    		}
    		if (sa==""){
    			msg += "Security Answer missing,";
    		}

    		

    		if (msg!=""){
    			msg = msg.substring(0,msg.length - 1)
    			$("#im").slideUp();
    			$("#msg").html(msg);
    			
    		}else {
    			if (cpass!=pass){
    				$("#im").slideUp();
    				$("#msg").html("Password does not match");
    				
    				$("#spass").val("");
    				$("#cspass").val("");
    			}else {
    				var prefix = matric.substring(0,2);
    				if (prefix=="CS" || prefix=="MS" || prefix=="GE" || prefix=="ST" || prefix=="ND" || prefix=="CH" || prefix=="HC"){
    					$("#regfrm").submit();
    				}else {
    					$("#im").slideUp();
    					$("#msg").html("You are not ELIGBLE");
    				}
    				
    			}
    		}
    		
    		e.preventDefault();	
    		

    	});



//ACTION THAT IS TRIGGERED WHEN THE LOGIN BUTTON IS CLICKED
		$("#lgbt").click(function(e) {
				var matno = $("#matno").val();
				var pass = $("#pass").val();
				
				if ((matno=="") && (pass=="")) {
					$("#matno").addClass("blank");
					$("#pass").addClass("blank");
					$("#err").html("MatricNo/Email and Password Missing");
				}else if (matno=="") {
					$("#matno").addClass("blank");
					$("#err").html("MatricNo/Email Missing");
				}else if (pass=="") {
					$("#pass").addClass("blank");
					$("#err").html("Password Missing");
				}else {
					$("#err").html("");
					$("#matno").removeClass("blank");
					$("#pass").removeClass("blank");
					/*$.post("processlogin.php",{matno:matno,pass:pass},function(data){
						
						if(data=="fail") {
							$("#err").html("Wrong MatricNo/Email or Password");
							clear();
						}else if (data=="success") {
								window.location="s_dashboard.php";								
						}else if(data=="admin"){
								window.location="admin_page.php";
						}else {
							alert(data);
						}*/

						$("#frmlg").submit();

						//window.location = "processlogin.php";
										
						
					//});
				}
				
				e.preventDefault();	
    		
		});
//the action that is trigger when admin login button is clicked  
	

		//clear login 
	function clear()  {
		$("#matno").val("");
		$("#pass").val("");
	}


	function clear2() {
			$("#sname").val("");
    		$("#oname").val("");
    		$('input:radio[name=sex]:checked').val()
    		$("#phoneno").val("");
    		$("#email").val("");
    		$("#matricno").val("");
    		$("#spass").val("");
    		$("#cspass").val("");
    		$("#squest").val("");
    		$("#sansw").val("");


	}
		
	
	

	
	$('#cssmenu > ul > li > a').click(function() {
	  $('#cssmenu li').removeClass('active');
	  $(this).closest('li').addClass('active');	
	  var checkElement = $(this).next();
	  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
	    $(this).closest('li').removeClass('active');
	    checkElement.slideUp('normal');
	  }
	  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
	    $('#cssmenu ul ul:visible').slideUp('normal');
	    checkElement.slideDown('normal');
	  }
	  if($(this).closest('li').find('ul').children().length == 0) {
	    return true;
	  } else {
	    return false;	
	  }		
	});


//form data return s
		

	//side bar navigations

	$('#usd').click(function() {
		$('#hme').load('admin/upload_studfile.php');
	});

	$("#anc").click(function() {
		$('#hme').load('admin/addnewcat.php');
	});

	$("#vac").click(function() {
			$('#hme').load('admin/v_allcat.php');
	});
	$("#vas").click(function() {
			$('#hme').load('admin/v_allstd.php');
	});

	$("#anb").click(function() {
			$('#hme').load('admin/addbook.php');
	});

	$("#vab").click(function() {
			$('#hme').load('admin/V_allbk.php');
	});

	$("#hm").click(function(e) {
	
		window.location.href='s_dashboard.php';
	});

	$("#sbtn").click(function(e){
		var val = $("#q").val();

		if (val==""){
			alert("Please Supply Search Term");
			return false;
		}else {
			return true;
		}

		
	});

		
	});
});

