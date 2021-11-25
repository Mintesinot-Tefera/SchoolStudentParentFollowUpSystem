   <div class="row-fluid">
   <a href="view_ass.php" class="btn btn-info" style="font-family: all;color: black;"><i class="icon-plus-sign "></i><b><strong> <?php echo Htmlspecialchars($lang['View_Assesment']); ?></strong></b> </a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="font-family: all;"><i class="icon-info-sign"></i><b><strong> <?php echo Htmlspecialchars($lang['Edit_Assesment']); ?> </strong></b></div>
                            </div> 
                            <div class="block-content collapse in"> 
                                <div class="span12">
                <?php
                $query = mysqli_query($link,"select * from assessment1 where id = '$get_id'")or die(mysqli_error());
                $row = mysqli_fetch_array($query); 
                ?>
                <form method="post">
                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['Ass_Type']; ?>" name="Ass_Type" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Ass_Type']); ?>" required>
                                          </div>
                                        </div>
                    
                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['ass_name']; ?>"  name="ass_name" id="focusedInput" type="text" placeholder = " <?php echo Htmlspecialchars($lang['ass_name']); ?> ass_name" required>
                                          </div>
                                        </div>
                    
                      <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['Max_Mark']; ?>"  name="Max_Mark" id="focusedInput" type="text" placeholder = " <?php echo Htmlspecialchars($lang['Max_Mark']); ?> " required>
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

$Ass_Type = $_POST['Ass_Type'];
$ass_name = $_POST['ass_name'];
$Max_Mark = $_POST['Max_Mark'];

mysqli_query($link,"update assessment1 set Ass_Type = '$Ass_Type'  , ass_name = '$ass_name' , Max_Mark = '$Max_Mark'  where id = '$get_id' ")or die(mysqli_error());


?>
<script>
  window.location = "view_ass.php"; 
</script>
<?php
}
?>