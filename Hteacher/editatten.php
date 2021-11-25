<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
<?php $get_id = $_GET['no']; ?>
                  <?php 
                  $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                  $row1 = mysqli_fetch_array($query); 
                  $teacher1 = $row1['firstname'];
                  $teacher2 =  $row1['lastname']; 
                  $teacher = $teacher1." ".$teacher2; 
                     
                    $sql = mysqli_query($link,"SELECT *From teacher_to_class where teacher = '$teacher' ");
                    $row = mysqli_fetch_array($sql);
                    $grade = $row['grade'];
                    $section = $row['section'];
                      ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid"> 
        <?php include('sidebar_atteview.php'); ?>
        <div class="span3" id="adduser">
        <?php include('edit_user_formt.php'); ?>            
        </div>
                <div class="span6" id=""> 
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="color: white; font-family: all;font-style: bold;"><i class="icon-info-sign"></i><b><strong>
                                  <?php echo Htmlspecialchars($lang['Grade']); ?>  <?php echo "$grade"; ?> Section <?php echo "$section"; ?> <?php echo Htmlspecialchars($lang['Students_Attendance_List']); ?>  
                              </strong></b></div>
                            </div> 
                            <div class="block-content collapse in">
                                <div class="span16">
                <form action="delete_userst.php" method="post">
                    <table cellpadding="0" cellspacing="0" border="1" solid class="table" id="example">
                    <thead style="font-family: all;color: black;">
                      <tr>
                        <th></th>
                      <th>F_Name</th>
                      <th>L_Name</th>
                      <th>Sex</th>
                      <th>Grade</th>
                      <th>Section</th>
                      <th>Atten_Status</th>
                      <th>Date</th>
                       </tr>
                    </thead>
                    <tbody style="font-family: all;color: black;">
                          <?php
                          $Today = date('y:m:d');
                          $user_query = mysqli_query($link,"select * from attendance  where 
                            grade = '$grade' AND section = '$section' AND Date='$Today' ")or die(mysqli_error());
                          while($row = mysqli_fetch_array($user_query)){
                          $id = $row['no'];
                          ?>
                        <tr>
                        <td width="30">
                      <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                        </td>
                        <td><?php echo $row['fname']; ?></td> 
                          <td><?php echo $row['lname']; ?> </td>
                          <td><?php echo $row['Sex']; ?> </td>
                          <td> <?php echo $row['grade']; ?> </td>
                          <td> <?php echo $row['section']; ?> </td>
                        <td><?php echo $row['Atten_Status']; ?></td>
                          <td><?php echo $row['Date']; ?></td>
                        </tr> 
                        <?php } ?>
                    </tbody>
                  </table>
                  </form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
    <?php include('script.php'); ?>
    <?php include('..//footer.php'); ?>
    </body>
</html>