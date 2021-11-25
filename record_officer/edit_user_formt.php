   <div class="row-fluid">
   <a href="add_teacher.php" class="btn btn-info" style="color: black; font-family: all;font-style: bold;"><i class="icon-plus-sign "></i><b><?php echo Htmlspecialchars($lang['Add_Parents']); ?>  </b></a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color: black; font-family: all;font-style: bold;"><b><?php echo Htmlspecialchars($lang['Edit_Parent']); ?> </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php 
								$query = mysqli_query($link,"select * from teachers where stud_id = '$get_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query); 
								?> 
								<form method="post" autocomplete="off">
                                      <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['stuff_id']; ?>" name="pid" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['First_name']); ?>" required pattern="[A-Za-z]{4,}" title="the name must four letter or greate !!" readonly style="font-family:all;color: black;">
                                          </div>
                                        </div>
                                                  
                      <?php 
                    $user_query = mysqli_query($link,"select * from students ")
                    or die(mysqli_error());
                      ?>
                                      <div class="control-group">
                                          <div class="controls">
                            <input class="input focused" value="<?php echo $row['stud_id']; ?>" name="id" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['First_name']); ?>" required pattern="[A-Za-z0-9]{3,}" title="the name must four letter or greate !!" style="font-family:all;color: black;"> 
                         <!-- <select class="chzn-select" name="id" id="focusedInput" type="text" placeholder ="-select-" required style="font-family:all;color: black;">
                           <option></option>
                           <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                /*    while ($row1 = mysql_fetch_array($user_query)){
                            echo "<option value='". $row1['stud_id'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row1['stud_id']."</option>" ; 
                                }*/
                               ?> 
                             </option>         
                                  </select>  -->
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['fname']; ?>" name="fname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['First_name']); ?>" required pattern="[A-Za-z]{3,}" title="the name must four letter or greate !!" style="font-family:all;color: black;">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['lname']; ?>" name="lname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Last_name']); ?>"required pattern="[A-Za-z]{4,}" title="the name must four letter or greate !!" style="font-family:all;color: black;">
                                          </div>
                                        </div>

										                      <div class="control-group">
                                          <div class="controls">
                       <select class="input focused" id="focusedInput" value="<?php echo $row['sex']; ?>"  name="sex" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['type']); ?>" required pattern="[A-Za-z]{1}" title="the name must four letter or greate !!" style="font-family:all;color: black;"> 
                           <option value="M" >M</option>
                           <option value="F">F</option>
                                                </select>                                   
                                          </div>
                                        </div>
                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['age']; ?>" name="age" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Last_name']); ?>" required pattern="[1-9]{1}[0-9]{1}" title="age must greater then 10 and less then 100 !!" style="font-family:all;color: black;">
                                          </div>
                                        </div>
                               <div class="control-group">
                                    <div class="controls">
                                  <input class="input focused" value="<?php echo $row['phone']; ?>"  name="phone" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Phone']); ?>" required style="font-family:all;color: black;" pattern="[+]{1}[2]{1}[5]{1}[1]{1}[9]{1}[0-9]{8}" title="the Phone must be an ethiopian form !!" style="font-family:all;color: black;">
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

$stud_id = $_POST['id'];
$p_id = $_POST['pid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$phone = $_POST['phone'];

    $query = mysqli_query($link,"select * from student_to_parent where stud_id = '$stud_id'")
       or die(mysqli_error());       
     $count = mysqli_num_rows($query);

   $query1 = mysqli_query($link,"select * from teachers where stud_id = '$stud_id' ")
    or die(mysqli_error());
    $count1 = mysqli_num_rows($query);

   $query2 = mysqli_query($link,"select * from students where stud_id = '$stud_id'")
    or die(mysqli_error());
    $count2 = mysqli_num_rows($query2);

 if ($age < 18) {
      ?>
  <script>
   //alert('Age Not Valid');
    nosuccess();
    //window.location = 'add_stud.php';
  </script>
  <?php
  } 
  elseif ($age > 75) {
          ?>
  <script>
    //alert('Age Not Valid');
    nosuccess();
    //window.location = 'add_stud.php';
  </script>
  <?php
}
  elseif ($count2 < 0) {
          ?>
  <script>
    //alert('Age Not Valid');
    nosuccess();
    //window.location = 'add_stud.php';
  </script>
  <?php
}
else{

mysqli_query($link,"update teachers set stud_id = '$stud_id', fname = '$fname' , lname = '$lname' , sex = '$sex' , age = '$age' , phone = '$phone'  where stud_id = '$get_id' ")or die(mysqli_error());

   if ($count > 0) {
          ?>
  <script>
    //alert('Age Not Valid');
   // nosuccess();
    //window.location = 'add_stud.php';
  </script>
  <?php
}
else{
mysqli_query($link,"insert into student_to_parent (stud_id,stuff_id,date) 
  values('$stud_id','$p_id',NOW())")
   or die(mysqli_error());
}
?>
<script>
  fun();
 // window.location = "record_teacher.php"; 
</script>
<?php
}
}
?>