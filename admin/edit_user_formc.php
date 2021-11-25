   <div class="row-fluid">
   <a href="teacher_class.php" class="btn btn-info" style="font-family: all;color: black;"><i class="icon-plus-sign "></i><b><strong>  <?php echo Htmlspecialchars($lang['Assign_Teachers']); ?> </strong></b> </a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="font-family: all;"><i class="icon-info-sign"></i><b><strong> <?php echo Htmlspecialchars($lang['Edit_Teachers_To']); ?> </strong></b></div>
                            </div> 
                            <div class="block-content collapse in"> 
                                <div class="span12">

								<form method="post" autocomplete="off">
										<div class="control-group">
                                          <div class="controls">
                      <select class="chzn-select" name="tname" id="focusedInput" type="text" placeholder ="-<?php echo Htmlspecialchars($lang['select']); ?>-" required style="font-family:all;color: black;">
                           <option></option>
                           <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                    $sql = mysqli_query($link,"SELECT *From users where type = 'subject_teacher' 
                          or type = 'home_room_teacher' order by user_id asc ");
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['firstname'] ." ". $row['lastname'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row['firstname'] ." ". $row['lastname'] ."</option>" ; 
                                }
                               ?>
                             </option>         
                                  </select> 
                                          </div>
                                        </div>
										                <?php
                $query = mysqli_query($link,"select * from teacher_to_course where id = '$get_id'")or die(mysqli_error());
                $row = mysqli_fetch_array($query);
                ?>
									     	<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['grade']; ?>"  name="grade" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['l_name']); ?>" required style="font-family:all;color: black;">
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['subject']; ?>"  name="subject" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['username']); ?>" required style="font-family:all;color: black;">
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

$tname = $_POST['tname'];
$grade = $_POST['grade'];
$subject = $_POST['subject'];

mysqli_query($link,"update teacher_to_course set teacher = '$tname'  , grade = '$grade' ,
   subject = '$subject'  where id = '$get_id' ")or die(mysql_error());

?>
<script>
  window.location = "teacher_course.php"; 
</script>
<?php
}
?>