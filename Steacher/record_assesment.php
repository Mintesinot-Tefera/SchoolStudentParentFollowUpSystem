 <?php include('header.php'); ?>
 <?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>

    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_dashboard_teacher.php'); ?>
        <div class="span6" id="adduser">
         <div class="row-fluid">
         <div class="pull-right">
            </diV>
            <?php

   if (isset($_POST['add'])){
              
              $grade = $_POST['grade'];
              $_SESSION['grade'] = $grade;

          $user_query = mysqli_query($link,"select * from assessment1 where grade = '$grade'
                            ")or die(mysqli_error());
                    $row = mysqli_fetch_array($user_query));

              ?>
              
              

                        <div class="row-fluid">
                            <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info"><i class="icon-info-sign"></i><b style="color: white;font-family: all;font-size: 18px;"> <?php echo Htmlspecialchars($lang['Grade']); ?>  <?php echo "$grade";  ?> <?php echo Htmlspecialchars($lang['Students_List']); ?>  </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span10">
                <form method="post" action="record_att.php">
                    <table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
                    <thead>
                      <tr>
                      <th>Stud_Id</th>
                      <th>F_Name</th>
                      <th>L_Name</th>
                      <th>Sex</th>
                      <th>Grade</th>
                      <th>Section</th>
                       </tr>
                    </thead>
                    <tbody>
                          <?php
                          $user_query = mysqli_query($link,"select * from students where grade = '$grade'
                            ")or die(mysqli_error());
                          while($row = mysqli_fetch_array($user_query)){
                          $id = $row['id'];
                          
                          ?>
                
                        <tr>
                        <td ><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fname']; ?></td> 
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['sex']; ?> </td>
                        <td><?php echo $row['grade']; ?></td>
                        <td><?php echo $row['section']; ?></td>                    
                        </tr>
                        <?php }} ?>
                    </tbody>
                         </table> 
                            <center> <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="insert" class="btn btn-info" style="color: blue;font-family: all;"><i class="icon-plus-sign icon-large" ></i><b>  <?php echo Htmlspecialchars($lang['Record']); ?>  </b></button>
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

