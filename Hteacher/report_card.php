 <?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_report.php'); ?>
        <div class="span6" id="adduser">
         <div class="row-fluid"> 
         <div class="pull-right">  
            </diV>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->  
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info"  style="color: 0000;font-family: all;"><i class="icon-info-sign"></i> <?php echo Htmlspecialchars($lang['Prepare_Student_Report_Card']); ?></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12"> 
                   <h3  style="color: black;font-family: all;"> <b>
                    <STRONG>!!!<?php echo Htmlspecialchars($lang['Student_Report_card_Form']); ?> </STRONG></b></h3><hr>
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
                    $user_query = mysqli_query($link,"select * from students where grade = '$grade'
                                          AND section = '$section' ")or die(mysqli_error());
                    
                      ?>
                    <form method="post" class="form-horizontal" action="report_card1.php">
                                  <div class="control-group">
                        <label class="control-label" for="inputPassword"  
                          style="color: black;font-family: all;">
                          <b><strong>Stud_ID :</strong></b> </label>
                                  <div class="controls">
                       <select class="" name="id" id="focusedInput" type="text" placeholder ="<?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family:all;color: black;">
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
                   <!--         -->                                                 
                                      </br><hr> 
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="prepare" class="btn btn-info" style="color: black;font-family: all;"><i class="icon-plus-sign "></i><b>  <?php echo Htmlspecialchars($lang['Send ']); ?> </b></button>
                                          </div>
                                        </div>
                                </form> 
                                </div>
                            </div> 
                        </div>
    </div><br><br>
    <?php include('..//footer.php'); ?>
    <?php include('..//script.php'); ?>
    </body>
</html>                   