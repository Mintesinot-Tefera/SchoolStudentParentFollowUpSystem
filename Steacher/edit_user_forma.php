   <div class="row-fluid">
   <a href="view_ass1.php" class="btn btn-info" style="font-family: all;color: black;"><i class="icon-plus-sign "></i><b><strong> <?php echo Htmlspecialchars($lang['View_Result']); ?> </strong></b> </a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="font-family: all;"><i class="icon-info-sign"></i><b><strong> <?php echo Htmlspecialchars($lang['Edit_Result']); ?>  </strong></b></div>
                            </div> 
                            <div class="block-content collapse in"> 
                                <div class="span12">
                <?php
                $query = mysqli_query($link,"select * from assessment where id = '$get_id'")or die(mysqli_error());
                $row = mysqli_fetch_array($query); 
                ?>
                <form method="post" autocomplete="off">
                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['Result']; ?>" name="Result" id="focusedInput" type="text" placeholder = " <?php echo Htmlspecialchars($lang['Result']); ?> " required>
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

$Result = $_POST['Result'];

mysqli_query($link,"update assessment set Result = '$Result' where id = '$get_id' ")
or die(mysqli_error());

?>
<script>
  window.location = "view_ass1.php"; 
</script>
<?php
}
?>