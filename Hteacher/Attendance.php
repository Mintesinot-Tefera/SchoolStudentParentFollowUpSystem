 <?php include('header.php'); ?>
 <?php include('session.php'); ?> 
<?php include('..//Language/lang.php'); ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_att.php'); ?> 
        <div class="span6" id="adduser">
         <div class="row-fluid"> 
         <div class="pull-right"> 
            </diV> 
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <br>
                        <br><br>
                        <br>
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="color: white;font-family: all;font-size: 18px"><i class="icon-info-sign"></i><b><strong> <?php echo Htmlspecialchars($lang['Add_Student _Attendance_Status']); ?></strong></b> </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

                    <form method="post" class="form-horizontal" action="record_att1.php">

                    <?php 
                  $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                  $row1 = mysqli_fetch_array($query); 
                  $teacher1 = $row1['firstname'];
                  $teacher2 =  $row1['lastname']; 
                  $teacher = $teacher1." ".$teacher2; 
                     ?>
                    <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"> <b><?php echo Htmlspecialchars($lang['Grade']); ?> </b></label>
                              <div class="controls">
                       <select class="chzn-select" name="grade" id="focusedInput" type="text" placeholder ="-<b><?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family:all;color: black;">
                           <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                    $sql = mysqli_query($link,"SELECT *From teacher_to_class where teacher = '$teacher' ");
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['grade'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row['grade'] ."</option>" ;
                                } 
                               ?>
                             </option>         
                                  </select>  
                                      </div>
                                    </div>
                   <div class="control-group">
                    <label class="control-label" for="inputPassword"  style="color: black;font-family: all;"><strong><b> <?php echo Htmlspecialchars($lang['Section']); ?></b></strong> </label>
                              <div class="controls">
                       <select class="chzn-select" name="section" id="focusedInput" type="text" placeholder ="<?php echo Htmlspecialchars($lang['select']); ?>" required>
                           <option  style="color: black;font-family: all;">
                                   <?php
                    $sql = mysqli_query($link,"SELECT *From teacher_to_class where teacher = '$teacher' ");
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['section'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row['section'] ."</option>" ;
                                }
                               ?>
                               </option>
                                   </select> 
                                          </div>
                                        </div>                
                                      </br></br>
                      <div class="control-group">
                        <div class="controls">      
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="record" class="btn btn-info" style="color: black;font-family: all;"><i class="icon-plus-sign" ></i><b> <?php echo Htmlspecialchars($lang['select']); ?> </b></button>
                                          </div>
                                        </div>     
                                   </form>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                          </div></div>
    <?php include('..//footer.php'); ?>
    <?php include('..//script.php'); ?>
    </body>