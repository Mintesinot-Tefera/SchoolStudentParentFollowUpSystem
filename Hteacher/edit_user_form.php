            <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><?php echo Htmlspecialchars($lang['Edit_Student']); ?>  </div> 
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
                $id1 = $_SESSION['id'];
								$query = mysqli_query($link,"select * from attendance where  id = '$id1'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['fname']; ?>" name="fname" id="focusedInput" type="text" placeholder = " <?php echo Htmlspecialchars($lang['First_name']); ?> " required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['lname']; ?>" name="lname" id="focusedInput" type="text" placeholder = " <?php echo Htmlspecialchars($lang['Last_name']); ?> " required>
                                          </div>
                                        </div>

										                      <div class="control-group">
                                          <div class="controls">
                       <select class="input focused" id="focusedInput" value="<?php echo $row['sex']; ?>"  name="sex" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['type']); ?> " required> 
                           <option value="M" >M</option>
                           <option value="F">F</option>
                            <option value="M" selected>select</option>
                                                </select>                                   
                                          </div>
                                        </div>
										                    <div class="control-group">
                                          <div class="controls">
                                            
                       <select class="input focused" id="focusedInput" value="<?php echo $row['grade']; ?>"  name="grade" id="focusedInput" type="text" placeholder = " <?php echo Htmlspecialchars($lang['type']); ?> " required> 
                           <option value="9">9</option>
                           <option value="10">10</option>
                            <option value="9" selected>select</option>
                                                </select>                                   
                                          </div>
                                        </div>
								    <div class="control-group">
                                          <div class="controls">
                                            
											 <select class="input focused" id="focusedInput" value="<?php echo $row['section']; ?>"  name="section" id="focusedInput" type="text" placeholder = " <?php echo Htmlspecialchars($lang['type']); ?>" required> 
                           <option value="A">A</option>
                           <option value="B">B</option>
                           <option value="C">C</option>                          
                            <option value="A" selected>select</option>
                                                </select>                                   
                                          </div>
                                        </div>
                    <div class="control-group">
                                          <div class="controls">
                                            
                       <select class="input focused" id="focusedInput" value="<?php echo $row['Atten_Status']; ?>"  name="attendance" id="focusedInput" type="text" placeholder = " <?php echo Htmlspecialchars($lang['type']); ?> " required> 
                           <option value="A">A</option>
                           <option value="P">P</option>                         
                            <option value="A" selected>select</option>
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
			<?php		
if (isset($_POST['update'])){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sex = $_POST['sex'];
$grade = $_POST['grade'];
$section = $_POST['section'];
$attendance = $_POST['attendance'];


mysqli_query("update attendance set fname = '$fname' , lname = '$lname' , sex = '$sex' , grade = '$grade' , section = '$section' , Atten_Status = '$attendance'  where Stud_Id = '$get_id' ")or die( mysqli_error());


?>
<script>
  window.location = "edit_atten.php"; 
</script>
<?php
}
?>