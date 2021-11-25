   <div class="row-fluid">
   <a href="admin_user.php" class="btn btn-info" style="font-family: all;color: black;"><i class="icon-plus-sign "></i><b><strong> <?php echo Htmlspecialchars($lang['Add_Useradmin']); ?> </strong></b> </a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="font-family: all;"><i class="icon-info-sign"></i><b><strong> <?php echo Htmlspecialchars($lang['Edit_Useradmin']); ?> </strong></b></div>
                            </div> 
                            <div class="block-content collapse in"> 
                                <div class="span12">
								<?php
								$query = mysqli_query($link,"select * from users where user_id = '$get_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);  
								?>
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['f_name']); ?>" required style="font-family: all;color: black;">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['l_name']); ?>" required style="font-family: all;color: black;">
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['username']; ?>"  name="username" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['username']); ?>" style="font-family: all;color: black;" required>
                                          </div>
                                        </div>
										
								    <div class="control-group">
                                          <div class="controls">
                                            
										<select class="input focused" id="focusedInput" value="<?php echo $row['type']; ?>"  name="type" id="focusedInput" type="text" placeholder = "type" required style="font-family: all;color: black;"> 
                                            <option style="font-family: all;color: black;">---<?php echo Htmlspecialchars($lang['select']); ?>---</option>
                                                
                           <option style="font-family: all;color: black;" value="administrator"><?php echo Htmlspecialchars($lang['Directo']); ?></option>
                           <option style="font-family: all;color: black;"  value="home_room_teacher"><?php echo Htmlspecialchars($lang['homeroom']); ?></option>
                           <option style="font-family: all;color: black;"  value="subject_teacher"><?php echo Htmlspecialchars($lang['subject']); ?></option>
                           <option style="font-family: all;color: black;"  value="record_officer"><?php echo Htmlspecialchars($lang['record']); ?></option>
                           <option style="font-family: all;color: black;"  value="student"><?php echo Htmlspecialchars($lang['student']); ?></option>
                           <option style="font-family: all;color: black;"  value="parent">
                            <?php echo Htmlspecialchars($lang['parent']); ?></option>    
                         
                                                </select>                                   
                                          </div>
                                        </div>
                    <div class="control-group">
                   <div class="controls">
                                            
                        <select class="input focused" id="focusedInput" value="<?php echo $row['status']; ?>"  name="status" id="focusedInput" type="text" placeholder = "type" required style="font-family: all;color: black;"> 
                           <option style="font-family: all;color: black;" value="Activated">Activated</option>
                           <option style="font-family: all;color: black;"  value="DeActivated">DeActivated</option>
                           <option style="font-family: all;color: black;">---<?php echo Htmlspecialchars($lang['select']); ?>---</option>
                                                </select>                                   
                                          </div>
                                        </div>                                        
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                <script src="sweetalert.min.js"></script>
                <link rel="stylesheet" type="text/css" href="sweetalert.css">
                    </script>
			<?php		
if (isset($_POST['update'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$type = $_POST['type'];
$status = $_POST['status'];

$query = mysqli_query($link,"select * from users where username = '$username' ")
  or die(mysqli_error());
$count = mysqli_num_rows($query);

$query1 = mysqli_query($link,"select * from users where type = 'administrator' or type = 'director'")
  or die(mysqli_error());
$count1 = mysqli_num_rows($query1);

if ($count > 1){ ?>
<script>
swal("UserName Already Existed!", " Please Try Again! ", "error");
//nosuccess();
</script>
<?php
}
else{
mysqli_query($link,"update users set username = '$username'  , firstname = '$firstname' , lastname = '$lastname' , type = '$type', status = '$status' where user_id = '$get_id' ")or die(mysqli_error());
?>
<script>
  swal("User Successfully Updated!", "Congratulation!", "success")
</script>
<?php
}
}
?>