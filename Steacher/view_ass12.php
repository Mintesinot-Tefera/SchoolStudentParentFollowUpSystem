<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid"> 
        <?php include('sidebar_view_ass1.php'); ?>
        <div class="span8" id="adduser">            
        </div> 
                <div class="span9" id="">  
                                    <?php 
                  $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                  $row1 = mysqli_fetch_array($query); 
                  $teacher1 = $row1['firstname'];
                  $teacher2 =  $row1['lastname']; 
                  $teacher = $teacher1." ".$teacher2;
                   ?>
                  <?php
                    $sql = mysqli_query($link,"SELECT *From teacher_to_course where teacher = '$teacher' ");
                    $row = mysqli_fetch_array($sql);
                    $grade = $row['grade'];
                    $subject = $row['subject'];
                               ?>

                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info"><i class="icon-info-sign"></i> 
                             <b style="color: white;font-family: all;font-size: 16px;"><?php echo Htmlspecialchars($lang['Grade']); ?> <?php echo $grade; ?>  <?php echo Htmlspecialchars($lang['Students']); ?>  <?php echo $subject; ?> Result </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span16">
                <form action="delete_users12.php" method="post">
                    <table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
                      <a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
                  <?php include('modal_delete.php'); ?>
                    <thead style="color: black;font-family: all;">
                      <tr>
                      <th></th>
                      <th>Stud_Id</th>
                      <th>Grade</th>
                      <th>Subject</th> 
                      <th>Ass_Name</th> 
                      <th>Max_Mark</th>
                      <th>Result</th>
                      <th>Date</th>
                      <th>Update</th>
                       </tr>
                    </thead>
                    <tbody style="color: black;font-family: all;">
                      <?php 
                          $user_query = mysqli_query($link,"select * from assessment11 where grade
                             = '$grade' AND Subject = '$subject' ")or die(mysqli_error());
                          while($row = mysqli_fetch_array($user_query)){
                            $id = $row['id'];
                          ?>
                        <tr> 
                        <td width="30">
                        <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                        </td>
                          <td><?php echo $row['Stud_Id']; ?></td>
                          <td><?php echo $row['grade']; ?></td> 
                          <td><?php echo $row['Subject']; ?> </td> 
                          <td><?php echo $row['Ass_Name']; ?> </td>
                          <td><?php echo $row['Max_Mark']; ?> </td>
                          <td><?php echo $row['Result']; ?> </td>
                          <td><?php echo $row['date']; ?> </td>
                      <td width="70">
                        <a href="edit_userv.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                        </td>
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
                    </div></div>
    <?php include('..//footer.php'); ?>
    <?php include('script.php'); ?>
    </body>
</html>