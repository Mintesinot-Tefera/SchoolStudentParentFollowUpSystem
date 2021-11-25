<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid"> 
    <?php include('comment_sidebar.php'); ?>
        <div class="span6" id="adduser"> 
         <div class="row-fluid">
         <div class="pull-right"> 
            </diV>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info"  style="color: 0000;font-family: all;"><i class="icon-info-sign"></i> <?php echo Htmlspecialchars($lang['Comment_Form']); ?>  </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                    <form method="post" class="form-horizontal">
                  <?php 
                  $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                  $row1 = mysqli_fetch_array($query); 
                  $teacher1 = $row1['firstname'];
                  $teacher2 =  $row1['lastname']; 
                  $teacher = $teacher1." ".$teacher2; 
                     
                    $sql = mysqli_query($link,"SELECT *From teacher_to_course where teacher = '$teacher' ");
                    $row = mysqli_fetch_array($sql);
                    $grade = $row['grade'];

                    $user_query = mysqli_query($link,"select * from students where grade = '$grade'
                                          ")or die(mysqli_error());
                    
                      ?>                      
                  <strong><b><b><h4 style="color: black;font-family: all;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><strong> <?php echo Htmlspecialchars($lang['Add_Your_Commentt']); ?>   </strong></b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></b></strong></h4><hr>
                                  <div class="control-group">
                  <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                    <b><strong> <?php echo Htmlspecialchars($lang['Stud_ID']); ?>  :</strong></b> </label>
                                          <div class="controls">
                         <select class="chzn-select" name="id" id="focusedInput" type="text" placeholder =" <?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family:all;color: black;">
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
                    <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"> <b> For :</b></label>
                              <div class="controls">
                       <select class="chzn-select" name="for" id="focusedInput" type="text" placeholder =" <?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family:all;color: black;">
                           <option style="font-family: all;font-size: 16px; color: black;"></option>
                           <option style="font-family: all;font-size: 16px; color: black;"> <?php echo Htmlspecialchars($lang['student']); ?>
                            
                             </option>  
                           <option style="font-family: all;font-size: 16px; color: black;"> <?php echo Htmlspecialchars($lang['Parents']); ?>
                            
                             </option>                                    
                                  </select>  
                                      </div>
                                    </div>                                                                      
                      <div class="control-group">
                    <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                     <b><strong> <?php echo Htmlspecialchars($lang['Comment']); ?>  :</strong></b> </label>
                                        <div class="controls">
                                  <textarea name="comment" cols="40" rows="8" id="comment" style="border: double;color: black;
                                  font-family: all;" placeholder="<?php echo Htmlspecialchars($lang['please_write_your_comments_here']); ?> " required ></textarea>
                                          </div>
                                        </div>                
                                      </br><hr>
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="give" class="btn btn-info" style="color: black;font-family: all;"><i class="icon-plus-sign
                          "></i><b> <?php echo Htmlspecialchars($lang['Add']); ?>  </b></button>
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
            swal("በትክክል ተመዝግቦወል!", " በተኑን ይጨኑ! ", "success")
        }
        function delno() {
            swal("no data","warnning")
        }
        function nosuccess() {
            swal("እበክዎን", "አልተሰከም እንደገና ይሞክሩ!","error")
        }
        function nocon() {
            swal("ኮኔክሽን  ዬለም ")
        }
</script>
<?php
   if (isset($_POST['give'])){

          $id = $_POST['id'];

                    $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                  $row1 = mysqli_fetch_array($query); 
                  $teacher1 = $row1['firstname'];
                  $teacher2 =  $row1['lastname']; 
                  $teacher = $teacher1." ".$teacher2; 
                    $sql = mysqli_query($link,"SELECT *From teacher_to_course where teacher = '$teacher' ");
                    $row = mysqli_fetch_array($sql);
                    $grade = $row['grade'];
                 //   $section = $row['section'];

        $for = $_POST['for'];
       $comment = $_POST['comment'];

  $query1 = mysqli_query($link,"select * from students where stud_id = '$id'
    AND grade = '$grade' ")
  or die(mysqli_error());
  $count = mysqli_num_rows($query1);
  $row = mysqli_fetch_array($query1);

$id1 = $row['stud_id'];

if ($count <= 0){ ?>
<script>
//alert('Student Does Not Exist in this Class ');
 swal("አልተሰከም እንደገና ይሞክሩ!","warnning");

//window.location.href = "comment.php";
</script>
<?php
}

else{
mysqli_query($link,"insert into comments (stud_id,username,viewer,comment,date) values('$id','$teacher',
  '$for','$comment',NOW())")or die(mysqli_error());
?>
<script>
  fun();
 // alert('Succesfully Added');
//window.location = "comment.php";
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