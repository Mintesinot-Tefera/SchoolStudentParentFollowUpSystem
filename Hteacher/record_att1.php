 <?php include('header.php'); ?>
 <?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>

    <body> 
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_att.php'); ?>
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
              ?>
                        <div class="row-fluid">
                            <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info"><i class="icon-info-sign"></i><b style="color: white;font-family: all;font-size: 18px;"><?php echo Htmlspecialchars($lang['Grade']); ?>  <?php echo "$grade";  ?>  <?php echo Htmlspecialchars($lang['sectionadmin']); ?> <?php echo "$section"; ?> <?php echo Htmlspecialchars($lang['Students_Attendance_List']); ?>  </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span11">
                <form method="post" action="record_att.php">
                    <table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
                    <thead style="color: black;font-family: all;">
                      <tr>
                      <th>Stud_Id</th>
                      <th>F_Name</th>
                      <th>L_Name</th>
                      <th>Sex</th>
                      <th>Grade</th>
                      <th>Section</th>
                      <th>Att_Status</th>
                      <th>Date</th>
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
                        <td ><input type="text" name='id1[]' value="<?php echo $row['stud_id']; ?>" readonly requerid style="font-family: all;color: black;width: 100px;"></td> 
                        <td><input type="text" name='fname[]' value="<?php echo $row['fname'];?>"requerid style="font-family: all;color: black;width: 80px;"></td> 
                        <td><input type="text" name='lname[]' value="<?php echo $row['lname']; ?>"requerid style="font-family: all;color: black;width: 80px;"> </td>
                        <td><input type="text" name='sex[]' value="<?php echo $row['sex']; ?>" requerid style="font-family: all;color: black;width: 80px;"> </td>
                        <td><input type="text" name='grade[]' value="<?php echo $row['grade'];?>" requerid style="font-family: all;color: black;width: 80px;"> </td>
                        <td><input type="text" name='section[]' value="<?php echo $row['section']; ?>" requerid style="font-family: all;color: black;width: 80px;"> </td>     
                        <td>
                       <select class="chzn-select" name='attendance[]' id="focusedInput" type="text" placeholder ="-select-" required style="font-family: all;color: black;width: 90px;">
                           <option></option>
                           <option value="P"  style="color: black;font-family: all;">P</option>
                           <option value="A"  style="color: black;font-family: all;">A<option>  
                            </select>  
                        </td>
                        <td>
                        <?php $Today = date('y:m:d');
                          echo $Today;
                         ?>
                        </td>                   
                        </tr> 
                        <?php }} ?>
                    </tbody>
                         </table> 
                            <center> <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="insert" class="btn btn-info" style="color: blue;font-family: all;"><i class="icon-plus-sign" ></i><b>  <?php echo Htmlspecialchars($lang['Record']); ?>  </b></button>
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


