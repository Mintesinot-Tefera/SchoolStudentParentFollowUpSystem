 <?php include('header.php'); ?>
 <?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>

    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_atten.php'); ?>
        <div class="span8" id="adduser"> 
         <div class="row-fluid">  
         <div class="pull-right">
            </diV> 
                        <div class="row-fluid">
                            <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info"><i class="icon-info-sign"></i><b style="color: white;font-family: all;font-size: 18px;"> <?php echo Htmlspecialchars($lang['Students_Attendance_List']); ?>  </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span11">
                <form method="post" action="view_attendance.php">
                    <table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
                    <thead style="color: black;font-family: all;">
                      <tr>
                      <th><?php echo Htmlspecialchars($lang['Stud_Id']); ?></th>
                     <th><?php echo Htmlspecialchars($lang['f_name']); ?></th>
                      <th><?php echo Htmlspecialchars($lang['l_name']); ?></th>
                      <th><?php echo Htmlspecialchars($lang['Sex']); ?></th>
                      <th><?php echo Htmlspecialchars($lang['Sabject']); ?> </th>
                      <th><?php echo Htmlspecialchars($lang['Atten_Status']); ?></th>
                      <th><?php echo Htmlspecialchars($lang['Date']); ?></th>
                       </tr>
                    </thead>
                    <tbody style="color: black;font-family: all;">
                          <?php
                      $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                       $row1 = mysqli_fetch_array($query); 
                       $teacher = $row1['username'];

                   $query = mysqli_query($link,"select * from teachers where stuff_id = '$teacher'")
                       or die(mysqli_error());
                       $row1 = mysqli_fetch_array($query); 
                       $id = $row1['stud_id'];    

                    $query = mysqli_query($link,"select * from students where stud_id = '$id' ")
                         or die(mysqli_error());
                      $count = mysqli_num_rows($query);
                        $row = mysqli_fetch_array($query);
                           $id1 = $row['stud_id']; 
  
                        if ($id!=$id1){ ?>
                             <script>
                      alert('Student Does Not Exist');
                      window.location = "view_attendance.php"; 
                         </script>
                          <?php
                               }
                 else{ 

                  $user_query = mysqli_query($link,"select * from teachers where stuff_id = '$teacher'")
                       or die(mysqli_error());

                  $user_query = mysqli_query($link,"select * from student_to_parent where stuff_id = '$teacher'")or die(mysqli_error()); 
                  
                      while ($row1 = mysqli_fetch_array($user_query)) {

                           $id = $row1['stud_id'];
                           $Today = date('y:m:d');
                          $user_query1 = mysqli_query($link,"select * from attendance1 where id = '$id'
                            AND Date = '$Today'")or die(mysqli_error());
                          while($row = mysqli_fetch_array($user_query1)){
                          
                          ?>
                        <tr>
                        <td><?php echo $row['id']; ?></td>  
                        <td><?php echo $row['fname']; ?></td> 
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['sex']; ?> </td>   
                        <td><?php echo $row['Subject'];?></td> 
                        <td><?php echo $row['Atten_Status'];?></td>
                        <td><?php echo $row['Date'];?></td>                              
                        </tr>
                        <?php } } } ?>
                    </tbody>
                         </table> 
                            <center> <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="insert" class="btn btn-info" style="color: blue;font-family: all;"><i class="icon-plus-sign" ></i><b> <?php echo Htmlspecialchars($lang['back']); ?></b></button>
                                          </div>
                                        </div></center>
                                    
                                     </form>
                        </div>
    </div></div>    </div>
    </div></div>   </div>
    </div></div>
    <?php include('..//footer.php'); ?>
    <?php include('..//script.php'); ?>
  </body>


