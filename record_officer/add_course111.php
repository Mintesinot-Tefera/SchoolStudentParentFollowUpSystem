<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
		<?php include('sidebar_school.php'); ?>
				<div class="span6" id="adduser"> 
			   <div class="row-fluid"> 
			   <div class="pull-right">
						</diV>
            <?php              
if (isset($_POST['add'])){
  $type = $_POST['type'];
  $_SESSION['type']=$type;
}
?>
                        <!-- block -->
                   <br><br>
                   <br><br>
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family:all;color: white;"><i class="icon-info-sign"></i><b><?php echo Htmlspecialchars($lang['Add_Course']); ?> </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" class="form-horizontal">                   
                                        <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"> <b><?php echo Htmlspecialchars($lang['Course_Name']); ?> </b></label>
                              <div class="controls">
                       <select class="chzn-select" name="course" id="focusedInput" type="text" placeholder ="-select-" required style="font-family:all;color: black;" pattern="[A-Za-z]{1}" title="the name must four letter or greate !!" >
                           <option></option>
                           <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                         $grade1 = $_SESSION['grade'];      
                          $type1 = $_SESSION['type'];     
                    $sql = mysqli_query($link,"SELECT *From subjects where grade = '11'
                          AND type = '$type1'  order by id asc ");
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['subject'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row['subject'] ."</option>" ;
                                }
                               ?>
                             </option>         
                                  </select> 
                                      </div>
                                    </div>
                                      </br><hr>
										<input class="input focused" name="signature" id="focusedInput" type="hidden">
										               	<div class="control-group">
                                          <div class="controls">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="add1" class="btn btn-info" style="font-family:all;color: white;"><i class="icon-plus-sign"></i>
                        <b> Register </b> </button>

                                          </div>
                                      </div>
                                   </form>
								              </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					<?php
                         
if (isset($_POST['add1'])){

    $grade1 = $_SESSION['grade'];      
    $type1 = $_SESSION['type'];
    $name = $_POST['course'];

  $query111 = mysqli_query($link,"SELECT * FROM time1") or die(mysqli_error());
   $row = mysqli_fetch_array($query111);

   $start = $row['rs'];
   $end = $row['re'];
   $current= date('Y-m-d');
 
   $query = mysqli_query($link,"select * from courses where grade = '$grade1' AND name = '$name' AND type = '$type1' ")or die(mysqli_error());
    
    $count = mysqli_num_rows($query);

 if($count > 0){ ?>
<script>
alert('Course Already Exist in this Grade');
window.location = "course.php";
//nosuccess();
</script>
<?php
}
elseif ($current < $start) {
          ?>
  <script>
    alert('Course Registeration Date Not Valid'); 
    //nosuccess();
    window.location = "course.php";
  </script>
  <?php
  }
  elseif ($current > $end) {
          ?>
  <script>
    alert('Course Registeration Date Not Valid'); 
    //nosuccess();
    window.location = "course.php";
  </script>
  <?php
  }
else{
 
mysqli_query("insert into courses (grade,name,type,Date) 
  values('$grade1','$name','$type1',NOW())")or die(mysqli_error());
?>
<script>
  alert('Course Sucessusfully Registered');
window.location = "course.php";
</script>
<?php
}
}
?>	   			
				</div>
		<?php include('..//script.php'); ?>
    </body>
</html>