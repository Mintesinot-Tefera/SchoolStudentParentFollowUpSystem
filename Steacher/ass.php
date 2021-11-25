 <?php include('header.php'); ?>
 <?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>

    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_addass.php'); ?>
        <div class="span8" id="adduser">
         <div class="row-fluid">
         <div class="pull-right"> 
            </diV> 
            <?php  
   if (isset($_POST['add'])){ 
              
              $grade = $_POST['grade'];
              $_SESSION['grade']=$grade; 
 
              $subject = $_POST['subject'];  
              $_SESSION['subject']=$subject;
              
              $ass_type = $_POST['assessment'];
              $_SESSION['ass_type']=$ass_type;
            } 
              ?>
                        <div class="row-fluid">
                            <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                            <div class="alert alert-info"><i class="icon-info-sign"></i><b style="color: white;font-family: all;font-size: 18px;"> <?php echo Htmlspecialchars($lang['Grade']); ?>  <?php echo "$grade";  ?> <?php echo Htmlspecialchars($lang['Students_Result_Form']); ?>  </b></div>
                            </div>
                            <div class="alert alert-info"><i class="icon-info-sign"></i><b style="color: white;font-family: all;"> <?php echo "$subject"; ?> <?php echo "$ass_type"; ?></b></div>
                            <div class="block-content collapse in">
                                <div class="span10">
                <form method="post" action="record_ass.php" autocomplete="off">
                    <table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
                    <thead style="color: black;font-family: all;">
                      <tr>
                        <?php
                     $user_query1 = mysqli_query($link,"select * from assessment1 where grade = '$grade' AND Subject = '$subject' AND ass_name = '$ass_type' ")or die(mysqli_error());
                          $count = mysqli_num_rows($user_query1);  
                          ?>
                      <th>Stud_Id</th>
                      <th>FName</th>
                      <th>LName</th> 
                      <th>Sex</th>
                      <th>grade</th>
                      <?php
                     while($row2 = mysqli_fetch_array($user_query1)){
                      ?>
                      <th><?php echo $row2['ass_name'];  ?></th>
                    <?php
                    }
                    ?>
                    <th>Max Mark</th>
                      <th>Date</th>
                       </tr>
                    </thead>
                    <tbody style="color: black;font-family: all;">
                          <?php
                  $user_query = mysqli_query($link,"select * from students where grade = '$grade'")or die(mysqli_error());
                    $count1 = mysqli_num_rows($user_query);
                          while($row = mysqli_fetch_array($user_query)){
                          $id = $row['stud_id'];

                $query111 = mysqli_query($link,"SELECT * FROM time1") or die(mysqli_error());
                 $row12 = mysqli_fetch_array($query111);

                  $start = $row12['aas']; 
                  $end = $row12['aae'];
                  $current= date('Y-m-d');


                    if ($count1 == 0 || $count == 0) {
                              ?>
                        <script>
                   alert('There is No Data in this Selection');
                    window.location = "assesmentind.php";
                    </script>
                     <?php
                       }
                  elseif ($current < $start) {
                      ?>
                       <script>
                         alert('Student Assessment Date Not Reached');
                         window.location = "assesmentind.php";
                       </script>
                       <?php
                     }
                    elseif ($current > $end) {
                      ?>
                       <script>
                         alert('Sorry, Student Assessment Date Passed');
                         window.location = "assesmentind.php";
                       </script>
                       <?php
                     }
                       else{                 
                          ?>
                        <tr>
                        <td><input type="text" name='id[]' value="<?php echo $row['stud_id']; ?>" readonly  style="font-family: all;color: black;width: 60px;"></td>
                        <td><input type="text" name='fname[]' value="<?php echo $row['fname']; ?>"readonly  style="font-family: all;color: black;width: 50px;"></td>
                        <td><input type="text" name='lname[]' value="<?php echo $row['lname'];?>" readonly  style="font-family: all;color: black;width: 50px;" > </td>
                        <td><input type="text" name='sex[]' value="<?php echo $row['sex']; ?>" readonly  style="font-family: all;color: black;width: 50px;"></td>
                        <td><input type="text" name='grade[]' value="<?php echo $row['grade']; ?>" readonly  style="font-family: all;color: black;width: 50px;"></td>
                        <td> <input class="input focused" name='result[]' id="focusedInput" type="text" placeholder = "result" required style="font-family: all;color: black;width: 65px;" pattern="[0-9]{1,}"></td> 
                        <td><?php   $user_query2 = mysqli_query($link,"select * from assessment1 where grade = '$grade' AND Subject = '$subject' AND ass_name = '$ass_type' ")or die(mysqli_error());
                         $row2 = mysqli_fetch_array($user_query2);
                          echo $row2['Max_Mark']; ?></td>                       
                        <td><?php $Today = date('y:m:d'); echo $Today; ?></td>           
                        </tr>
                        <?php }} ?>
                    </tbody>
                         </table> 
                            <center> <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="insert" class="btn btn-info" style="color: blue;font-family: all;"><i class="icon-plus-sign" ></i><b> Record </b></button>
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