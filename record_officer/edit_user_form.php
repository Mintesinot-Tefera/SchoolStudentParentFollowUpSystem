   <div class="row-fluid">
   <a href="add_stud.php" class="btn btn-info"  style="font-family:all;color: black;"><i class="icon-plus-sign "></i><b><?php echo Htmlspecialchars($lang['Add_Studen']); ?> </b> </a>
                        <!-- block --> 
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"  style="font-family:all;color: black;"><b>
                                   Edit Student
                                </b></div> 
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($link,"select * from students where stud_id = '$get_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>
								<form method="post" autocomplete="off">
                                      <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['stud_id']; ?>" name="fname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['First_name']); ?>" style="font-family:all;color: black;" required pattern="[A-Za-z]{4,}" title="the name must four letter or greate !!" readonly>
                                          </div>
                                        </div>
									                  	<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['fname']; ?>" name="fname" id="focusedInput" type="text" placeholder = <?php echo Htmlspecialchars($lang['First_name']); ?>" style="font-family:all;color: black;" required pattern="[A-Za-z]{4,}" title="the name must four letter or greate !!">
                                          </div>
                                        </div>
										            <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['mname']; ?>" name="mname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['middle_name']); ?>" style="font-family:all;color: black;" required pattern="[A-Za-z]{4,}" title="the name must four letter or greate !!">
                                          </div>
                                        </div>
									                  	<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['lname']; ?>" name="<?php echo Htmlspecialchars($lang['Last_name']); ?>" style="font-family:all;color: black;" id="focusedInput" type="text" placeholder = "Lname" required pattern="[A-Za-z]{4,}" title="the name must four letter or greate !!">
                                          </div>
                                        </div>
                                  <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['age']; ?>" style="font-family:all;color: black;" name="age" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Age']); ?>" required pattern="[1-9]{1}[0-9]{1}" >
                                          </div>
                                        </div>
										                      <div class="control-group">
                                          <div class="controls">
                       <select class="input focused" id="focusedInput" value="<?php echo $row['sex']; ?>"  name="sex" style="font-family:all;color: black;" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['type']); ?>" required pattern="[A-Za-z]{1}" title="the name must four letter or greate !!"> 
                           <option style="font-family:all;color: black;" value="M" >M</option>
                           <option style="font-family:all;color: black;" value="F">F</option>
                                                </select>                                   
                                          </div>
                                        </div>
										                    <div class="control-group">
                                          <div class="controls">
                       <select class="input focused" id="focusedInput" value="<?php echo $row['grade']; ?>"  name="grade" id="focusedInput" style="font-family:all;color: black;" type="text" placeholder = "<?php echo Htmlspecialchars($lang['type']); ?>" required pattern="[0-9]{1}" title="the name must four letter or greate !!"> 
                           <option style="font-family:all;color: black;" value="9">9</option>
                           <option style="font-family:all;color: black;" value="10">10</option> 
                           <option style="font-family:all;color: black;" value="11">11</option> 
                           <option style="font-family:all;color: black;" value="12">12</option>
                                                </select>                                   
                                          </div>
                                        </div>
                                      <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['section']; ?>" name="class" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Class']); ?>" style="font-family:all;color: black;" required pattern="[A-Za-z]{1,}" title="the name must four letter or greate !!">
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
    <script type="text/javascript">
        function f() {
            swal("ተሰርዞወል!", "በተኑን ይጨኑ!", "success")
        }
        function fun() {
            swal("Successfully Updated!", " Congratulation! ", "success")
        }
        function delno() {
            swal("no data","warnning")
        }
        function nosuccess() {
            swal("Please Try Again Latter !!", "Thank You! ", "error")
        }
        function nocon() {
            swal("ኮኔክሽን  ዬለም ")
        }
</script>
			<?php		
if (isset($_POST['update'])){

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$grade = $_POST['grade'];
$section = $_POST['class'];
       
 if ($age < 14) {
      ?>
  <script>
   //alert('Age Not Valid');
    nosuccess();
    //window.location = 'add_stud.php';
  </script>
  <?php
  }
  elseif ($age > 60) {
          ?>
  <script>
    //alert('Age Not Valid');
    nosuccess();
    //window.location = 'add_stud.php';
  </script>
  <?php
  }
  else {

mysqli_query($link,"update students set fname = '$fname' ,mname = '$mname', lname = '$lname' , sex = '$sex' , grade = '$grade', section = '$section' where stud_id = '$get_id' ")or die(mysqli_error());

?>
<script>
  fun(); 
</script>
<?php
}
}
?>