 <?php include('header.php'); ?>
 <?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>

    <body> 
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_atten.php'); ?>
        <div class="span9" id="adduser">
         <div class="row-fluid"> 
         <div class="pull-right">
            </diV> 
            <?php 
 
   if (isset($_POST['record'])){ 
               
              $grade = $_POST['grade'];
              $_SESSION['grade']=$grade;
              $section = $_POST['section']; 
             $_SESSION['section']=$section; 
             $subject = $_POST['subject'];
             $_SESSION['subject'] = $subject;
              ?>
                        <div class="row-fluid">
                            <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info"><i class="icon-info-sign"></i><b style="color: white;font-family: all;font-size: 18px;"> Grade <?php echo "$grade";  ?>  Section <?php echo "$section"; ?> <?php echo Htmlspecialchars($lang['Students_Attendance_List']); ?>  </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span11">
                <form method="post" >
                    <table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
                    <thead style="color: black;font-family: all;">
                      <tr>
                      <th> <?php echo Htmlspecialchars($lang['Stud_Id']); ?> </th>
                      <th> <?php echo Htmlspecialchars($lang['f_name']); ?> </th>
                      <th> <?php echo Htmlspecialchars($lang['f_name']); ?> </th>
                      <th> <?php echo Htmlspecialchars($lang['Sex']); ?> </th>
                      <th> <?php echo Htmlspecialchars($lang['Grade']); ?> </th>
                      <th> <?php echo Htmlspecialchars($lang['Section']); ?> </th>
                      <th> <?php echo Htmlspecialchars($lang['Sabject']); ?> </th>
                      <th> <?php echo Htmlspecialchars($lang['Att_Status']); ?> </th>
                       </tr>
                    </thead>
                    <tbody style="color: black;font-family: all;">
                          <?php
                          $user_query = mysqli_query($link,"select * from students where grade = '$grade'
                            AND section = '$section'")or die(mysqli_error());
                               
                          while($row = mysqli_fetch_array($user_query)){
                          $id = $row['stud_id'];
                          
                          ?>
                
                        <tr>
                    <td ><input type="text" name='id[]' value="<?php echo $row['stud_id']; ?>" readonly requerid style="font-family: all;color: black;width: 80px;"></td> 
                        <td><input type="text" name='fname[]' value="<?php echo $row['fname'];?>"requerid style="font-family: all;color: black;width: 80px;"></td> 
                        <td><input type="text" name='lname[]' value="<?php echo $row['lname']; ?>"requerid style="font-family: all;color: black;width: 80px;"> </td>
                        <td><input type="text" name='sex[]' value="<?php echo $row['sex']; ?>" requerid style="font-family: all;color: black;width: 40px;"> </td>
                        <td><input type="text" name='grade[]' value="<?php echo $row['grade'];?>" requerid style="font-family: all;color: black;width: 40px;"> </td>
                        <td><input type="text" name='section[]' value="<?php echo $row['section']; ?>" requerid style="font-family: all;color: black;width: 40px;"> </td>     
                        <td><input type="text" name='subject[]' value="<?php echo $subject; ?>" requerid style="font-family: all;color: black;width: 80px;"></td>
                        <td>
                          
                       <select class="chzn-select" name='attendance[]' id="focusedInput" type="text" placeholder =" <?php echo Htmlspecialchars($lang['select']); ?> " required style="font-family: all;color: black;width: 85px;">
                           <option></option>
                           <option value="P"  style="color: black;font-family: all;">P</option>
                           <option value="A"  style="color: black;font-family: all;">A<option>  
                            </select>  
                        </td>                  
                        </tr> 
                        <?php }} ?>
                    </tbody>
                         </table> 
                            <center> <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="insert" class="btn btn-info" style="color: blue;font-family: all;"><i class="icon-plus-sign" ></i><b> <?php echo Htmlspecialchars($lang['Record']); ?>  </b></button>
                                          </div>
                                        </div></center>
                                    
                                     </form>
     </div>                   
    </div></div>    
    </div></div>   

                  <?php
                  $grade1 = $_SESSION['grade']; 
                  $section1 = $_SESSION['section'];  
                  $subject1 = $_SESSION['subject'];
                  ?>

<?php    
   if (isset($_POST['insert'])){ 
                     
                  $query = mysqli_query($link,"select * from users where user_id = '$session_id'")or die(mysqli_error());

                  $row1 = mysqli_fetch_array($query); 
                  $teacher = $row1['firstname'];

          $user_query = mysqli_query($link,"select * from students where grade = '$grade1' 
            AND section = '$section1' ")or die(mysqli_error());
            $count = mysqli_num_rows($user_query);

                        $Today = date('y:m:d');
                      //  $new = date('l, F d, Y', strtotime($Today));

          $user_query1 = mysqli_query($link,"select * from attendance1 where grade = '$grade1' 
            AND section = '$section1' AND Date = '$Today' AND Subject = '$subject1' ")
             or die(mysqli_error());
            $count1 = mysqli_num_rows($user_query1);

          if ($count1 > 0) {
              ?>
             <script>
         alert('Attendance Already Exist');
          window.location = "attendance.php";
         </script>
           <?php
         }
         else{
           $id = $_POST['id'];
           $fname = $_POST['fname'];
           $lname = $_POST['lname'];
           $sex = $_POST['sex'];
           $grade = $_POST['grade'];
           $section = $_POST['section'];
           $subject = $_POST['subject'];
           $atte = $_POST['attendance']; 
           
            for ($i=0; $i < $count; $i++) { 
            
                $Insertid = $id[$i];
                $Insertfname = $fname[$i];
                $Insertlname = $lname[$i];
                $Insertsex = $sex[$i];
                $Insertgrade = $grade[$i];
                $Insertsection = $section[$i];
                $Insertsubject = $subject[$i];
                $Insertatte = $atte[$i];
       
      //    $row = mysql_fetch_array($user_query); 
  mysqli_query($link,"insert into attendance1 (id ,fname, lname, Sex, grade ,section,Subject,
   Atten_Status ,Record_By ,Date ) values('$Insertid','$Insertfname','$Insertlname','$Insertsex','$Insertgrade','$Insertsection','$Insertsubject','$Insertatte','$teacher','$Today')")or die(mysqli_error());

            }
?>
<script>
 // fun();
  alert('Recorded Succesfully');
  window.location = "attendance.php";
</script>
<?php
}
}
?>
    </div><br><br><br>
    <?php include('..//footer.php'); ?>
    <?php include('..//script.php'); ?>
  </body>