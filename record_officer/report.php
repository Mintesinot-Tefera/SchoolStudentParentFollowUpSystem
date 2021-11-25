<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
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
                                <div class="alert alert-info"  style="color: 0000;font-family: all;"><i class="icon-info-sign"></i>  <?php echo Htmlspecialchars($lang['Add_Report_Form']); ?> </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                    <form method="post" class="form-horizontal" autocomplete="off">
                  <strong><b><i><h4 style="color: black;font-family: all;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><strong> <?php echo Htmlspecialchars($lang['Report_Form']); ?> </strong></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </i></b></strong></h4><hr>   
                            <div class="control-group">
                  <label class="control-label" for="inputPassword"  
                  style="color: black;font-family: all;">
                    <b><strong>Title :</strong></b> </label>
                        <div class="controls">
                        <input class="input focused" name="title" id="focusedInput" type="text" placeholder = "  <?php echo Htmlspecialchars($lang['report_title']);?>" style="color: black;font-family: all;" required pattern="[a-zA-Z0-9_]{1,}"//>
                                          </div>
                                        </div>                                                     
				         <div class="control-group">
                  <label class="control-label" for="inputPassword"  
                  style="color: black;font-family: all;">
                    <b><strong>  <?php echo Htmlspecialchars($lang['Report']); ?>  :</strong></b> </label>
                          <div class="controls">
                        <textarea name="report" cols="50" rows="10" id="comment" style="border: double;color: black;font-family: all;" placeholder=" <?php echo Htmlspecialchars($lang['please_write_your_report_here']); ?>  " required pattern="[a-zA-Z0-9_]{3,}"></textarea>
                                          </div>
                                        </div>                
                                      <hr>
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="give" class="btn btn-info" style="color: black;font-family: all;"><i class="icon-plus-sign"></i><b> <?php echo Htmlspecialchars($lang['Add']); ?> </b></button>
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
            swal("Successfully Registered!", " Congratulation! ", "success")
        }
        function delno() {
            swal("no data","warnning")
        }
        function nosuccess() {
            swal(" Report Not Valid !!", "Please Try Again! ", "error")
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

$uname = $teacher;
$title = $_POST['title'];
$report = $_POST['report'];
    $Today = date('y:m:d');

   $query = mysqli_query($link,"select * from report where title = '$title' and date = '$Today'")
    or die(mysqli_error());
    $count = mysqli_num_rows($query);
  if ($count > 0) {
          ?>
  <script>
   //alert('Age Not Valid');
    nosuccess();
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