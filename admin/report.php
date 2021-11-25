<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_report.php'); ?>
        <div class="span6" id="adduser">
         <div class="row-fluid">
         <div class="pull-right">
            </diV>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info"  style="color: 0000;font-family: all;"><i class="icon-info-sign"></i> <?php echo Htmlspecialchars($lang['Add_Report_Form']); ?></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                    <form method="post" class="form-horizontal" autocomplete="off">
                  <strong><b><i><h4 style="color: black;font-family: all;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><strong><?php echo Htmlspecialchars($lang['Report Formadmin']); ?></strong></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </i></b></strong></h4><hr>   
                            <div class="control-group">
							
							<select class="chzn-select" name="teacher" id="focusedInput" type="text" placeholder ="-<?php echo Htmlspecialchars($lang['select']); ?>-" required style="font-family:all;color: black;">
                           <option></option>
                           <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                    $sql = mysqli_query($link,"SELECT *From users order by user_id asc ");
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['firstname'] ." ". $row['lastname'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row['firstname'] ." ". $row['lastname'] ."</option>" ; 
                                }
                               ?>
                             </option>         
                                  </select>    
							
                  <label class="control-label" for="inputPassword"  
                  style="color: black;font-family: all;">
                    <b><strong> <?php echo Htmlspecialchars($lang['Titleadmin']); ?>:</strong></b> </label>
                        <div class="controls">
                        <input class="input focused" name="title" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['report_titleadmin']); ?>" style="color: black;font-family: all;" required pattern="[a-zA-Z0-9_]{3,}"//>
                                          </div>
                                        </div>                                                     
				         <div class="control-group">
                  <label class="control-label" for="inputPassword"  
                  style="color: black;font-family: all;">
                    <b><strong> Report :</strong></b> </label>
                          <div class="controls">
                        <textarea name="report" cols="50" rows="10" id="comment" style="border: double;color: black;font-family: all;" placeholder="  <?php echo Htmlspecialchars($lang['report_hereadmin']); ?>" required pattern="[a-zA-Z0-9_]{3,}"></textarea>
                                          </div>
                                        </div>                
                                      <hr>
									  			  
<div class="controls">
                       <input class="input focused" name="acadamic" id="focusedInput" 
                       type="text" style="color: black;font-family: all;">
                                          </div>
									  
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="give" class="btn btn-info" style="color: black;font-family: all;"><i class="icon-plus-sign"></i><b><?php echo Htmlspecialchars($lang['Addadmin']); ?></b></button>
                                          </div>
                                        </div>
                                </form>
                                </div>
                            </div>
                        </div>

     <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sweetalert.css">
    <script type="text/javascript">
        function f() {
            swal("ተሰርዞወል!", "በተኑን ይጨኑ!", "success")
        }
        function fun() {
            swal("User Successfully Added!", "Congratulation!", "success")
        }
        function delno() {
            swal("no data","warnning")
        }
        function nosuccess() {
            swal("አልተሰከም እንደገና ይሞክሩ !!", "በተኑን ይጨኑ ! ", "error")
        }
        function nocon() {
            swal("ኮኔክሽን  ዬለም ") 
        }
</script>
<?php
   if (isset($_POST['give'])){
   
        $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
          or die(mysqli_error());
          /*..............record by..................*/
                  $row1 = mysqli_fetch_array($query); 
                  $teacher = $row1['firstname'];

$uname = $_POST['teacher'];
$title = $_POST['title'];
$report = $_POST['report'];
    $Today = $_POST['acadamic'];
    
   $query = mysqli_query($link,"select * from report where title = '$title' and date = '$Today'")
    or die(mysqli_error());
    $count = mysqli_num_rows($query);
  if ($count > 0) {
          ?>
  <script>
   //alert('Age Not Valid');
   swal("Report Already Existed!", "Please Try Again! ", "error");
    //nosuccess();
    //window.location = 'add_stud.php';
  </script>
  <?php
  }
  else{
mysqli_query($link,"insert into report (uname,title,report,date) values
        ('$uname','$title','$report','$Today')")
or die(mysqli_error());
?>
<script>
  fun();
//window.location = "report.php";
</script>
<?php
} }
?>          
    </div></div>
    <?php include('..//footer.php'); ?>
    <?php include('..//script.php'); ?>
    </body>
</html>                     