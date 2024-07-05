<header>
	<div class="navbar navbar-default" role="navigator">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#mob-navbar">
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>                    
                </button>
            </div>
            <div class="collapse navbar-collapse" id="mob-navbar">
        	<ul class="nav navbar-nav">
            	
            </ul>
            </div>
            
    			
     		 	 <button type="button" class="btn btn-success navbar-btn navbar-right dropdown-toggle" style="margin-right:0px;" data-toggle="dropdown">
			      <span class="caret"></span>
			      <span class="sr-only">Toggle Dropdown</span>
			   </button>
               <button type="button" class="btn btn-success navbar-btn navbar-right" style="margin-right:0px;">Signed as <i class="fa fa-user"></i> <?php 
             
               echo $_SESSION['admin_id']; ?> </button>
			   <ul class="dropdown-menu pull-right nc" role="menu">
			     
			      <li><a href="logout.php"  style="color:#333;">Log Out</a></li>
			   </ul>
			   






     		
    </div>

</header>