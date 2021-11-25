 <?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_teacher.php'); ?>
        <div class="span6" id="adduser"> 
         <div class="row-fluid">
         <div class="pull-right">   
            </diV>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block --> 
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info"  style="color: 0000;font-family: all;"><i class="icon-info-sign"></i><?php echo Htmlspecialchars($lang['Add_Existing_Parent ']); ?>   </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12"><hr>
                    <form method="post" class="form-horizontal" autocomplete="off">
                      <?php 
                    $user_query = mysqli_query($link,"select * from students")
                    or die(mysqli_error());
                      ?>
                                  <div class="control-group">
                        <label class="control-label" for="inputPassword"  
                          style="color: black;font-family: all;">
                          <b><strong>Stud_ID :</strong></b> </label>
                                  <div class="controls">
                          <select class="chzn-select" name="idp" id="focusedInput" type="text" placeholder ="<?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family:all;color: black;">
                           <option></option>
                           <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                    while ($row1 = mysqli_fetch_array($user_query)){
                            echo "<option value='". $row1['stud_id'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row1['stud_id']."</option>" ; 
                                }
                               ?>
                             </option>         
                                  </select> 
                                    </div>
                                  </div>
                       <?php 
                    $user_query1 = mysqli_query($link,"select * from teachers")
                    or die(mysqli_error());
                      ?>            
                         <div class="control-group">
                         <label class="control-label" for="inputPassword"  
                          style="color: black;font-family: all;">
                          <b><strong>Parent_ID :</strong></b> </label>
                                  <div class="controls">
                          <select class="chzn-select" name="idpr" id="focusedInput" type="text" placeholder ="<?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family:all;color: black;">
                           <option></option>
                           <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                    while ($row1 = mysqli_fetch_array($user_query1)){
                    echo "<option value='". $row1['stuff_id'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row1['stuff_id']."</option>" ; 
                                }
                               ?>
                             </option>         
                                  </select> 
                                    </div>
                                  </div>                                                      
                                </br><hr> 
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="add" class="btn btn-info" style="color: black;font-family: all;"><i class="icon-plus-sign "></i><b> <?php echo Htmlspecialchars($lang['Register']); ?>  </b></button>
                                          </div>
                                        </div>
                                </form> 
                                </div>
                            </div>
                        </div>
    </div><br><br>
    <?php include('..//footer.php'); ?>
    <?php include('..//script.php'); ?>
    </body>
</html>         

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
            swal(" Duplication of Data !!", "Please Try Again! ", "error")
        }
        function nocon() {
            swal("ኮኔክሽን  ዬለም ")
        }
</script>
          <?php
                         
if (isset($_POST['add'])){

  $id = $_POST['idp'];
  $idpr = $_POST['idpr'];

    $query11 = mysqli_query($link,"select * from teachers where stud_id = '$id'")
       or die(mysqli_error());
            $count = mysqli_num_rows($query11);
            
    $query12 = mysqli_query($link,"select * from student_to_parent where stud_id = '$id'")
       or die(mysqli_error());       
     $count1 = mysqli_num_rows($query12);

 if ($count > 0) {
      ?>
  <script> 
   //alert('Age Not Valid');
    nosuccess();
    //window.location = 'add_stud.php';
  </script>
  <?php
  }
  elseif($count1 > 0) {
      ?>
  <script>
   //alert('Age Not Valid');
    nosuccess();
    //window.location = 'add_stud.php';
  </script>
  <?php
  }
else{
mysqli_query($link,"insert into student_to_parent (stud_id,stuff_id,date) 
  values('$id','$idpr',NOW())")
   or die(mysqli_error());
?>
<script>
  fun();
//window.location = "record_teacher.php";
</script>
<?php
}
}
?>                   