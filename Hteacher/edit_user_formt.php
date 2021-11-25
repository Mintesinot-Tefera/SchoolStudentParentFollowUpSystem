   <div class="row-fluid">
   <a href="view_attendance.php" class="btn btn-info" style="color: black; font-family: all;font-style: bold;"><i class="icon-plus-sign icon-large"></i><b>  <?php echo Htmlspecialchars($lang['View_Attendance']); ?>  </b></a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color: black; font-family: all;font-style: bold;"><b> <?php echo Htmlspecialchars($lang['Edit _Attendance_Only']); ?> </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                <?php 
                $query = mysqli_query($link,"select * from attendance where no = '$get_id'")or die(mysqli_error());
                $row = mysqli_fetch_array($query);
                ?>
                <form method="post">
                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['fname']; ?>" name="fname" id="focusedInput" type="text" placeholder = " <?php echo Htmlspecialchars($lang['First_name']); ?>" required pattern="[A-Za-z]{4,}" title="the name must four letter or greate !!" style="font-family:all;color: black;" readonly>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                          <input class="input focused" value="<?php echo $row['lname']; ?>" name="lname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Last_name']); ?>" required pattern="[A-Za-z]{4,}" title="the name must four letter or greate !!" style="font-family:all;color: black;" readonly>
                                          </div>
                                        </div>
                               <div class="control-group">
                                    <div class="controls">
                                  <input class="input focused" value="<?php echo $row['Sex']; ?>"  name="phone" id="focusedInput" type="text" placeholder = "phone" required style="font-family:all;color: black;" readonly>
                                          </div>
                                        </div>         
                               <div class="control-group">
                                    <div class="controls">
                                  <input class="input focused" value="<?php echo $row['grade']; ?>"  name="phone" id="focusedInput" type="text" placeholder = " <?php echo Htmlspecialchars($lang['Phone']); ?> " required style="font-family:all;color: black;" readonly>
                                          </div>
                                        </div>

                                       <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['section']; ?>" name="age" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Last_name']); ?>" style="font-family:all;color: black;" readonly>
                                          </div>
                                        </div>                                        
                                        <div class="control-group">
                                          <div class="controls">                            
                       <select class="input focused" id="focusedInput" value="<?php echo $row['Atten_Status']; ?>"  name="attendance" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['type']); ?>" style="font-family:all;color: black;" required > 
                           <option value="P" style="font-family:all;color: black;">P</option>
                           <option value="A" style="font-family:all;color: black;">A</option>
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

$Status = $_POST['attendance'];

mysqli_query($link,"update attendance set Atten_Status = '$Status'  where no = '$get_id' ")
            or die(mysqli_error());

?>
<script>
  window.location = "view_attendance.php"; 
</script>
<?php
}
?>