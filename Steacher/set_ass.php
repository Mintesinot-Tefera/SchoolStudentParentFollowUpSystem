 <?php include('header.php'); ?>
<?php include('session.php'); ?>

<?php include('..//Language/lang.php'); ?>
    <body> 
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_ass.php'); ?>
        <div class="span6" id="adduser">
         <div class="row-fluid"> 
         <div class="pull-right"> 
            </diV>  
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family: all;font-size: 18px; color: white;"><i class="icon-info-sign"></i><strong> <?php echo Htmlspecialchars($lang['Set_Student_Assesment']); ?> 
                                </strong></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                  
                   <h3 style="font-family: all;font-size: 23px; color: black;"> <b><STRONG><?php echo Htmlspecialchars($lang['Set_Student_Assesment']); ?>  </STRONG></b></h3><hr>
                    <form name="form1" method="post" class="form-horizontal" autocomplete="off">

                     <?php 
                  $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                  $row1 = mysqli_fetch_array($query); 
                  $teacher1 = $row1['firstname'];
                  $teacher2 =  $row1['lastname']; 
                  $teacher = $teacher1." ".$teacher2;
                     ?>
                                  <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family: all;font-size: 17px; color: black;"><strong><b> Grade :</b></strong></label>
                                          <div class="controls">
                             <select class="chzn-select" name="grade" id="focusedInput" type="text" placeholder =" <?php echo Htmlspecialchars($lang['select']); ?> " required 
                              style="font-family: all;font-size: 16px; color: black;">
                          <option style="font-family: all;font-size: 16px; color: black;">
                            <?php
                    $sql = mysqli_query($link,"SELECT *From teacher_to_course where teacher = '$teacher' ");
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['grade'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row['grade'] ."</option>" ;
                                }
                               ?>
                             </option>
                                              </select> 
                                          </div>
                                        </div>
                      <div class="control-group"> 
                      <label class="control-label" for="inputPassword" style="font-family: all;font-size: 17px; color: black;"><strong> Subjects :</strong></label>
                                 <div class="controls">
                       <select class="chzn-select" name="subject" id="focusedInput" type="text" placeholder ="<?php echo Htmlspecialchars($lang['select']); ?> " required 
                       style="font-family: all;font-size: 16px; color: black;">
                           <option>
                          <?php
                    $sql = mysqli_query($link,"SELECT *From teacher_to_course where teacher = '$teacher' ");
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['subject'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row['subject'] ."</option>" ;
                                }
                               ?>
                                      </option>
                                      </select> 
                                        </div>
                                      </div>
                         <div class="control-group">
                      <label class="control-label" for="inputPassword" style="font-family: all;font-size: 17px; color: black;"><strong> <?php echo Htmlspecialchars($lang['Ass_Type']); ?>   :</strong></label>
                                 <div class="controls">
                       <select class="chzn-select" name="assessment" id="focusedInput" type="text" placeholder ="<?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family: all;font-size: 16px; color: black;">
                           <option></option>
                           <option value="Contineus" style="font-family: all;font-size: 16px; color: black;" >Contineus</option>
                           <option value="Final" style="font-family: all;font-size: 16px; color: black;" >Final</option>                          
                                              </select> 
                                          </div>
                                        </div>                                       
                                 <div class="control-group">
                      <label class="control-label" for="inputPassword" style="font-family: all;font-size: 17px; color: black;"><strong> Ass_Name :</strong></label>
                                 <div class="controls">
                           <input class="input focused"  name="ass_name" id="focusedInput" type="text" placeholder = " <?php echo Htmlspecialchars($lang['ass_name']); ?>" required style="font-family: all;font-size: 16px; color: black;" pattern="[a-zA-Z0-9]{3,}">
                                          </div>
                                        </div>                                                  
                      <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family: all;font-size: 16px; color: black;"><strong><?php echo Htmlspecialchars($lang['Max_Mark']); ?>  </strong></label>
                                          <div class="controls">
                                            <input class="input focused"  name="maxmark" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Max_Mark']); ?>" required style="font-family: all;font-size: 16px; color: black;" pattern="[0-9]{1,}">
                                          </div>
                                        </div>                                    
                                      </br><hr>
                      <div class="control-group"> 
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="add" class="btn btn-info" style="font-family: all; color: black;"><i class="icon-plus-sign"></i><strong> <?php echo Htmlspecialchars($lang['Set']); ?>  </strong></button>
                                    </div>
                                  </div>
                                </form>
                              </div>        

          <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sweetalert.css">
    <script type="text/javascript">
        function f() {
            swal("ተሰርዞወል!", "በተኑን ይጨኑ!", "success")
        }
        function fun() {
            swal("በትክክል ተመዝግቦወል!", " በተኑን ይጨኑ! ", "success")
        }
        function delno() {
            swal("no data")
        }
        function nosuccess() {
            swal("እበክዎን", "አልተሰከም እንደገና ይሞክሩ!","error")

        }
        function nocon() {
            swal("ኮኔክሽን  ዬለም ")
        }
</script> 

<?php
   if (isset($_POST['add'])){

  $grade = $_POST['grade'];
  $sub = $_POST['subject'];
  $ass_type = $_POST['assessment'];
  $maxmark = $_POST['maxmark'];

  if ($ass_type == "Final") {
      
      $ass_name = "FinalExam";

    }  
    else
    $ass_name = $_POST['ass_name'];

   $query1 = mysqli_query($link,"select * from assessment1 where grade = '$grade' AND Subject = 
    '$sub' AND ass_name = '$ass_name'")or die(mysqli_error());
    $count1 = mysqli_num_rows($query1);
    
    $query2 = mysqli_query($link,"select * from assessment1 where grade = '$grade' 
        AND Subject = '$sub' ")or die(mysqli_error());
     
                     $maxm = 0;
                         while ($row1 = mysqli_fetch_array($query2)) {
                    $max = $row1['Max_Mark'];     
                    
                   $max1 = $max+$maxm;
                    $maxm = $max1;  
     
          }
$query = mysqli_query($link,"select * from students where grade = '$grade' ")or die(mysqli_error());
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);
$grade1 = $row['grade']; 

/* $query1 = mysql_query("select * from assessment where Subject = '$sub' 
         AND Ass_Type = '$ass_type' AND Stud_Id = '$id'")or
 die(mysql_error());
$count1 = mysql_num_rows($query1); */
    if($count1 > 0) {
      ?>
      <script>
     //alert('Assesment Already Exist in the Way....!!');
    nosuccess();
      </script>
     <?php 
       }
elseif($grade != $grade1){ ?>
<script>
alert('Student Does Not Exist');
window.location = "set_ass.php";
</script>
<?php
}
elseif($maxm >= 100){ ?>
<script>
//alert('Assesment Out of Range');
nosuccess();
//window.location = "set_ass.php";
</script>
<?php
}
else{
mysqli_query($link,"insert into assessment1 (grade,Subject,Ass_Type,ass_name,Max_Mark,date )
 values('$grade','$sub','$ass_type','$ass_name','$maxmark',NOW())")or die(mysql_error());
?>
<script>
  fun();
 // alert('Set Assesment Succesfully');
//window.location = "set_ass.php";
</script>
<?php
}
}
?>    
    </div></div>
    <?php include('..//footer.php'); ?>
    <?php include('..//script.php'); ?>
    </body>
</html>      
