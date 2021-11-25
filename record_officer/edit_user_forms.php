   <div class="row-fluid">
   <a href="course.php" class="btn btn-info" style="color: black; font-family: all;font-style: bold;"><i class="icon-plus-sign icon-large"></i><b> Add Course</b></a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color: black; font-family: all;font-style: bold;"><b><?php echo Htmlspecialchars($lang['Edit_Section']); ?> </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php 
								$query = mysqli_query($link,"select * from courses where id = '$get_id'")
                or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>
								<form method="post" autocomplete="off">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['grade']; ?>" name="grade" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['First_name']); ?> " required maxlength="2" minlength="1">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['name']; ?>" name="name" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Last_name']); ?>" required maxlength="20" minlength="1" >
                                          </div>
                                        </div>
                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['type']; ?>" name="type" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Last_name']); ?>" maxlength="22">
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

$grade = $_POST['grade'];
$name = $_POST['name'];
$type = $_POST['type'];

mysqli_query($link,"update courses set grade = '$grade' , name = '$name',type = '$type' where id = '$get_id' ")or die(mysqli_error());

?>
<script>
  alert('Successfully Updated!');
  window.location = "course.php"; 
</script>
<?php
}
?>