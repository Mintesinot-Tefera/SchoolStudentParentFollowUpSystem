
<?php 
include'Language/lang.php';
 ?>
 <?php include('header.php'); ?>
<script type="text/javascript">
window.history.forward();
    function noBack(){
        window.history.forward();
    }


</script>



    <body id="class_div" style="background-color: currentColor no-repeat center center fixed;">
		<div class="navbar navbar-fixed-top navbar-inverse">
           <div class="navbar-inner">
               <div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
                  <a class="brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-family: all;font-size: 25px;"><?php echo Htmlspecialchars($lang['abouttile']); ?></b> </a>
						    	<div class="nav-collapse collapse">
							  	<ul class="nav pull-right">
							  	</ul>
						    	</div>
                   <!--/.nav-collapse -->
                   </div>
                   </div>
	                   </div>
                     <div class="container-fluid">
                     <div class="row-fluid">
                     <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block "  style=" margin-left:489px; margin-top:67px; width:40%; " >
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a href="index.php"><i class="icon-arrow-left"></i> <?php echo Htmlspecialchars($lang['back']); ?></a></div>
								</div>

                            
                            
   



    
    
    
         <div class="container col-lg-12">
     <div class="" style="  margin-left:-21%;   display: inline-block; text-align: center;">
				<div><?php //include('login_form.php'); ?></div>
    <form id="login_form1" class="form-signin"  autocomplete="off" method="POST" action="login.php">
				<h3 class="form-signin-heading">
				<i class="icon-lock"> <b style="color:black;font-family: all;"><?php echo Htmlspecialchars($lang['ples']); ?> </b></i> 
				</h3>
				<input type="text"    style=" width:23%; "   class="input-block-level"   id="username" 
				name="username" placeholder="<?php echo Htmlspecialchars($lang['username']); ?>" minlength="04" required style="color:black;font-family: Times;"><br>
				<input type="password" style=" width:23%; " oncopy="return false"  onpaste="return false" class="input-block-level" 
				 id="password" name="password" placeholder="<?php echo Htmlspecialchars($lang['pass']); ?>" minlength ="04" required style="color:black;font-family: all;">
				<center><a href="forgot.php"><i class=""></i><i class=""></i>
				<h4 style="color:black;font-family: all;"> <?php echo Htmlspecialchars($lang['forgo']); ?></h4></a></center><br>
                    
                    
                
				
                    
				<button data-placement="right" title="Click Here to Log In" id="signin" 
				name="login" class="btn btn-info" type="submit" style="color:black;font-family: all;">
				<i class="icon-signin icon-large"> <?php echo Htmlspecialchars($lang['login']); ?></i> </button>
                    
        
        <div class="container">
        <h3 class="jumbotron-heading"><span class="logo"></span> <a href="register.php"></a></h3>
        
      </div>
        <label></label>
				<script type="text/javascript">
				$(document).ready(function(){
				$('#signin').tooltip('show');
				$('#signin').tooltip('hide');
				}); 
				</script>		
			 </form>
            </div>
                            </div>
             
                            
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true_admin')
							       {
				                     $.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to Automated Parent Student Follow-Up System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'admin/home.php'  }, delay);  
									}else if (html == 'true_home_room_teacher'){
										$.jGrowl("Loading File Please Wait......", { sticky: true });
										$.jGrowl("Welcome to Automated Parent Student Follow-Up System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'Hteacher/teacher_index.php'  }, delay);  
									}else if (html == 'true_director'){
										$.jGrowl("Loading File Please Wait......", { sticky: true });
										$.jGrowl("Welcome to Automated Parent Student Follow-Up System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'director/home.php'  }, delay);  
									}else if (html == 'true_record_officer'){
										$.jGrowl("Loading File Please Wait......", { sticky: true });
										$.jGrowl("Welcome to Automated Parent Student Follow-Up System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'record_officer/home.php'  }, delay);  
									}else if (html =='true_subject_teacher'){
										$.jGrowl("Loading File Please Wait......", { sticky: true });
										$.jGrowl("Welcome to Automated Parent Student Follow-Up System", { header: 'Access Granted' });
									var delay = 1000;
								        setTimeout(function(){ window.location = 'Steacher/home.php'  }, delay);  
									}else if (html == 'true_student'){
										$.jGrowl("Loading File Please Wait......", { sticky: true });
										$.jGrowl("Welcome to Automated Parent Student Follow-Up System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'Studnet/home.php'  }, delay);  
									}else if (html == 'true_parent'){
										$.jGrowl("Loading File Please Wait......", { sticky: true });
										$.jGrowl("Welcome to Automated Parent Student Follow-Up System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'Parent/home.php'  }, delay);  
									}
									else
									{
									$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
									    var delay = 2000;
									setTimeout(function(){ window.location = 'index.php'  }, delay);
									}
									}
								});
								return false;
							});
						});
						</script>	
    
    
    
    
                            </div>



                            
                             </div></div>
          <!-- /block -->
          </div></div><br><br><br>
    <?php include('footer.php'); ?>
		<?php include('script.php'); ?>
    </body> 
</html>