 <?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid"> 
        <div class="row-fluid"> 
    <?php include('sidebar_addass1.php'); ?>
        <div class="span6" id="adduser"> 
         <div class="row-fluid">
         <div class="pull-right">   
            </diV>  
                        <!-- block -->  
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family: all;font-size: 18px; color: white;"><i class="icon-info-sign"></i><strong> <?php echo Htmlspecialchars($lang['Add_Student_Assesment']); ?>
                                </strong></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                  
                   <h3 style="font-family: all;font-size: 22px; color: black;"> <b><STRONG> <?php echo Htmlspecialchars($lang['Second_Semester_Student_Assesment_Form']); ?>  </STRONG></b></h3><hr>
                    <form method="post" class="form-horizontal" action="ass1.php">
                                      <?php 
                  $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                  $row1 = mysqli_fetch_array($query); 
                  $teacher1 = $row1['firstname'];
                  $teacher2 =  $row1['lastname']; 
                  $teacher = $teacher1." ".$teacher2;
                     ?>
                                  <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family: all;font-size: 17px; color: black;"><strong><b>  <?php echo Htmlspecialchars($lang['Grade']); ?> </b></strong></label>
                                          <div class="controls">
                             <select class="chzn-select" name="grade" id="focusedInput" type="text" placeholder =" <?php echo Htmlspecialchars($lang['select']); ?>" required 
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
                      <label class="control-label" for="inputPassword" style="font-family: all;font-size: 17px; color: black;"><strong>  <?php echo Htmlspecialchars($lang['Sabject']); ?> </strong></label>
                                 <div class="controls">
                       <select class="chzn-select" name="subject" id="focusedInput" type="text" placeholder =" <?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family: all;font-size: 16px; color: black;">
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
                                <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                                 <b><strong>Ass_Name :</strong></b> </label>
                                          <div class="controls">
                            <select class="chzn-select" name="assessment" id="focusedInput" type="text" placeholder =" <?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family: all;font-size: 16px; color: black;">
                             <option></option>
                             <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                    $sql = mysqli_query($link,"SELECT *From teacher_to_course where teacher = '$teacher' ");          $row1 = mysqli_fetch_array($sql);
                                $row2 = $row1['grade'];
                                $row3 = $row1['subject'];
                    $sql = mysqli_query($link,"SELECT *From assessment1 where 
                            grade = '$row2' AND Subject = '$row3' order by id asc ");
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['ass_name'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row['ass_name'] ."</option>" ;
                                }
                               ?>
                             </option>
                                </select>
                                          </div>
                                        </div>

                                      </br><hr>
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="add" class="btn btn-info" style="font-family: all;color: black;"><i class="icon-plus-sign"></i><strong>  <?php echo Htmlspecialchars($lang['Add']); ?>  </strong></button>
                                    </div>
                                  </div>

                                </form>
                              </div>
                            </div>
                          </div>         
    </div></div></div></div>
    <?php include('..//script.php'); ?>
    <?php include('..//footer.php'); ?>
    </body>
</html> 

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