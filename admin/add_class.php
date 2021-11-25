<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
		<?php include('sidebar_class.php'); ?>
				<div class="span6" id="adduser">
			   <div class="row-fluid">  
			   <div class="pull-right"> 
						</diV>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family:all;color: white;"><i class="icon-info-sign"></i><b> <?php echo Htmlspecialchars($lang['Add_Teachers']); ?> </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"> <b> <?php echo Htmlspecialchars($lang['Teacheradmin']); ?> </b></label>
                              <div class="controls">
                       <select class="chzn-select" name="teacher" id="focusedInput" type="text" placeholder ="-select-" required style="font-family:all;color: black;">
                           <option></option>
                           <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                    $sql = mysqli_query($link,"SELECT *From users where type = 'home_room_teacher' 
                           order by user_id asc ");
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['firstname'] ." ". $row['lastname'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row['firstname'] ." ". $row['lastname'] ."</option>" ; 
                                }
                               ?>
                             </option>         
                                  </select>    
                                      </div>
                                    </div>
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family:all;color: black;"> <b> <?php echo Htmlspecialchars($lang['Grade']); ?>:</b></label>
                              <div class="controls">
											 <select class="chzn-select" name="grade" id="focusedInput" type="text" placeholder ="-select-" required style="font-family:all;color: black;" pattern="[A-Za-z]{1}" title="the name must four letter or greate !!" >
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
                    <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"> <b> <?php echo Htmlspecialchars($lang['Sectionadmin']); ?> </b></label>
                              <div class="controls">
                       <select class="chzn-select" name="section" id="focusedInput" type="text" placeholder ="-select-" required style="font-family:all;color: black;">
                           <option></option>
                           <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                    $sql = mysqli_query($link,"SELECT *From grade order by id asc "); 

                               $row = mysqli_fetch_array($sql);    
                               $row2 = $row['name'];
                    $sql1 = mysqli_query($link,"SELECT *From section1 where grade = '$row2'
                       order by id asc ");
                    while ($row = mysqli_fetch_array($sql1)){
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
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="save" class="btn btn-info" style="font-family:all;color: white;"><i class="icon-plus-sign"></i><b> <?php echo Htmlspecialchars($lang['Registeradmin']); ?> </b> </button>
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
            swal("Successfully Registered!", " Congratulation! ", "success")
        }
        function delno() {
            swal("no data")
        }
        function nosuccess() {
            swal("አልተሰከም እንደገና ይሞክሩ!","በተኑን ይጨኑ!",'error')
        }
        function nocon() {
            swal("ኮኔክሽን  ዬለም ")
        }
</script>
					<?php
                         
if (isset($_POST['save'])){

  $teacher = $_POST['teacher'];
  $grade = $_POST['grade'];
  $section = $_POST['section'];

   $query = mysqli_query($link,"select * from teacher_to_class where teacher = '$teacher' ")
    or die(mysqli_error());
    $count = mysqli_num_rows($query);
    
   $query1 = mysqli_query($link,"select * from teacher_to_class where grade = '$grade' 
      AND section =  '$section' ")
    or die(mysqli_error());
    $count1 = mysqli_num_rows($query1);

 if($count > 0 || $count1 > 0){ ?>
<script>
  swal("Teacher or Class Already Existed!", " Please Try Again! ", "error");
</script>
<?php
} 
else{
mysqli_query($link,"insert into teacher_to_class (teacher,grade,section,Date) 
  values('$teacher','$grade','$section',NOW())")or die(mysqli_error());
?>
<script>
 fun();
</script>
<?php
}
}
?>	   			
		</div></div></div>
    <?php include('..//footer.php'); ?>    
	<?php include('..//script.php'); ?>
  </body>
</html>