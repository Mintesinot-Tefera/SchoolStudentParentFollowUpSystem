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
						</diV><br><br>
                   <br><br>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family:all;color: white;"><i class="icon-info-sign"></i><b><?php echo Htmlspecialchars($lang['Add_Course']); ?>  </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" class="form-horizontal">
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family:all;color: black;"> <b> <?php echo Htmlspecialchars($lang['Grade']); ?></b></label>
                              <div class="controls">
											 <select class="chzn-select" name="grade" id="focusedInput" type="text" placeholder ="<?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family:all;color: black;" pattern="[A-Za-z]{1}" title="the name must four letter or greate !!" >
                           <option></option>
                           <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                               
                    $sql = mysqli_query($link,"SELECT *From grade order by id asc ");
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['name'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row['name'] ."</option>" ;
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
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="save1" class="btn btn-info" style="font-family:all;color: white;"><i class="icon-plus-sign"></i><b><?php echo Htmlspecialchars($lang['Register']); ?>  </b> </button>

                                          </div>
                                      </div>
                                   </form>
								              </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					<?php              
if (isset($_POST['save1'])){

  $grade = $_POST['grade'];
  $_SESSION['grade']=$grade;

 if($grade == 9 || $grade ==10){ ?> 
<script>
window.location = "add_course1.php";
</script>
<?php
}
elseif ($grade == 11 || $grade == 12) {?>
<script>
window.location = "add_course11.php";
</script>
<?php  
}
else{
echo "Incorrect Grade";
?>
<script>
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