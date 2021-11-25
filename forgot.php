


<?php include('header.php'); ?>
<?php // include('session.php'); ?>
<?php 
include'Language/lang.php';
 ?>
<?php include('navbar.php'); ?>
    <body>
		
        
         <script language="javascript">
  function check()
  {
   if(document.getElementById("email1").value =="")
   {
    alert('first fill the each textfields !!'); 
    document.getElementById("email1").focus();
    return false;
   }
    if(document.getElementById("firstname").value =="")
   {
    alert('first fill the each textfields!!'); 
    document.getElementById("firstname").focus();
    return false;
   }
    if(document.getElementById("lastname").value =="")
   {
    alert('first fill the each textfields !!'); 
    document.getElementById("lastname").focus();
    return false;
   }
    if(document.getElementById("phone").value =="")
   {
    alert('first fill the each textfields !!'); 
    document.getElementById("phone").focus();
    return false;
   }
    if(document.getElementById("username").value =="")
   {
    alert('first fill the each textfields !!'); 
    document.getElementById("username").focus();
    return false;
   }
   }
   </script>
        
        
        <div class="container-fluid">
            <div class="row-fluid">
				<?php //include('sidebar_dashboard_teacher.php'); ?>
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>




                <div class="span12" id="content">
                     <div class="row-fluid">
					    
					     <ul class="breadcrumb"  >
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<li><a href="#"><b style="font-family: all;font-style: normal;font-weight: normal;font-size: 25px;color: black;"><?php echo Htmlspecialchars($lang['forgo']); ?></b></a><span class="divider"></span></li>
								
						</ul>
						
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                            	<div id="" class="muted pull-right"><a href="index.php"><i class="icon-arrow-left"></i><b style="font-family: all;font-style: normal;font-weight: normal;font-size: 18px;"><?php echo Htmlspecialchars($lang['back']); ?></b></a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<div class="alert alert-info" style="font-family: all;font-style: normal;font-weight: normal;font-size: 20px;">
  									<i class="icon-info-sign"></i> <?php echo Htmlspecialchars($lang['pl']); ?></div>
								
                                    
                                    
                                    
                                    
                                    
                                    
                                    
							   <form  method="post"  onsubmit="return validateForm()" class="form-horizontal" autocomplete="off" action="forgot.php">
                                      
                                    <div class="control-group">
                                   
                                        <label class="control-label" for="username" style="font-family: all;color: black;"><b>User Name</b></label>
                                   <div class="controls">
                                   <input id="username" name="username" onkeypress="" required="required" type="text" style="font-family: all;color: black;" onkeypress="return alpha(event,letters)">
                                     </div>
                               
                                   
                                   
                
                                   </div>
                                      <div class="control-group">
                                   
                                        <label class="control-label" for="lostt" style="font-family: all;color: black;"><b>Backup Id</b></label>
                                   <div class="controls">
                                   <input id="lostt" name="lostt" onkeypress="" required="required" type="text" style="font-family: all;color: black;" onkeypress="return alpha(event,letters)">
                                     </div>
                               
                                   
                                   
                
                                   </div>
                                    
                                   
                                   
                                   
									
										<div class="control-group">
											<div class="controls">
											<button type="submit" name="forgetpassword" class="btn btn-info"><i class="icon-save"></i> show me</button>
											</div>
										</div>
									</form>
			
										<?php
 if(isset($_POST['forgetpassword']))
  {
								include('dbcon.php');
								if (isset($_POST['forgetpassword'])){
								
								$username = $_POST['username'];
								$lostt = $_POST['lostt'];
 	$query = "SELECT * FROM users where username='$username' AND signature='$lostt'";
    $result_set=mysqli_query($link,$query);
   if(!$result_set)
   {
   die("Query faill".mysqli_error($link));
   }
if(mysqli_num_rows($result_set)>0)
{
$num=mysqli_num_rows($result_set);
while($row=mysqli_fetch_array($result_set))
{
 									$passwords =$row["password"];
									
								
									$usernam =$row["username"];
									$losttt =$row["signature"];
									$f_name =$row["firstname"];
									$l_name =$row["lastname"];
    	
    
    
    echo '<div class="alert alert-dismissable alert-success fade in">';
								echo '<div class="alert alert-dismissable alert-success fade in">';
								echo '<strong>'." Dear"."&nbsp; &nbsp;"."<font face='monotype corsiva' color='red' size='2'>".$f_name."</font>"." &nbsp;"."<font face='monotype corsiva' color='red' size='2'>".$l_name."</font>"."&nbsp; &nbsp;"." Your password is "."<font color='green' size='2'>".$passwords."</font>".'</strong>';
                               
							
								echo '</div>';	
    
    
                           echo'<meta content="10,login_form.php" http-equiv="refresh" />';
								}
                                    
    
    



  }
  else
{
echo"<center><br>";
echo" <b style='color:red'>Sorry You Entered Incorrect Information !!!!</b>";
}
                                
                                
                                }
 }
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php include('footer.php'); ?>   
		<?php include('script.php'); ?>
  