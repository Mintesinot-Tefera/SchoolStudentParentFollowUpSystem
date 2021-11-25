<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
		<?php include('sidebar_tran.php'); ?>
				<div class="span6" id="adduser">
			   <div class="row-fluid"> 
			   <div class="pull-right">
						</diV>
            <br><br>
                   <br><br>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family:all;color: white;"><i class="icon-info-sign"></i><b><?php echo Htmlspecialchars($lang['Add_Section']); ?>  </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" class="form-horizontal">
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family:all;color: black;"> <b><?php echo Htmlspecialchars($lang['Grade']); ?> </b></label>
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
                                     <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"><b><?php echo Htmlspecialchars($lang['Number']); ?> </b></label>
                                          <div class="controls">
                                            <input class="input focused" name="num" id="focusedInput" type="number" placeholder = "<?php echo Htmlspecialchars($lang['No_of_Student']); ?> " required style="font-family:all;color: black;">
                                          </div>
                                        </div>                                               
                                      </br><hr>
										<input class="input focused" name="signature" id="focusedInput" type="hidden">
											<div class="control-group">
                                          <div class="controls">
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="save" class="btn btn-info" style="font-family:all;color: white;"><i class="icon-plus-sign"></i><b><?php echo Htmlspecialchars($lang['Register']); ?>  </b> </button>

                                          </div>
                                      </div>
                                   </form>
								              </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                    <?php
					if (isset($_POST['save'])){

  $grade = $_POST['grade'];
  $number = $_POST['num'];

  $mysql_query = mysqli_query($link,"select *from time1 ")
    or die(mysqli_error());
    $row1 = mysqli_fetch_array($mysql_query);

   $start = $row1['rs'];
   $end = $row1['re'];
   $current= date('Y-m-d');

   $query = mysqli_query($link,"select * from section where grade = '$grade'")
    or die(mysqli_error());
    $count = mysqli_num_rows($query);

 if($count > 0){ ?>
<script>
alert('Section Already Exist in this Grade');
window.location = "section.php";
//nosuccess();
</script>
<?php
}elseif ($current < $start) {
          ?>
  <script>
    //alert('Age Not Valid');
   // nosuccess();
    //window.location = 'add_stud.php';
   alert('Registeration Date Does Not Reached');
   window.location = "section.php"; 
  </script>
  <?php
  }
  elseif ($current > $end) {
          ?>
  <script>
    //alert('Age Not Valid');
    //nosuccess();
    //window.location = 'add_stud.php';
    alert('Sorry The Registeration Date is Passed');
    window.location = "section.php";
  </script>
  <?php
  } elseif ($number < 0) {
          ?>
  <script>
    //alert('Age Not Valid');
    //nosuccess();
    //window.location = 'add_stud.php';
    alert('you entered invalid value');
    window.location = "section.php";
  </script>
     <?php
  }                   
else{
 
mysqli_query($link,"insert into section (grade,number,Date) 
  values('$grade','$number',NOW())")or die(mysqli_error());
 
?>
<script>
  alert('Section Sucessusfully Added');
window.location = "section.php";
</script> 
<?php
}
}
?>    
				</div>
    <?php include('..//footer.php'); ?>    
		<?php include('..//script.php'); ?>
    </body>
</html>