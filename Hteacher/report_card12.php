 <?php include('header.php'); ?>
<?php include('session.php'); ?> 
<?php include('..//Language/lang.php'); ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_report1.php'); ?>
        <div class="span6" id="adduser"> 
         <div class="row-fluid">
         <div class="pull-right">
            </diV>  
                        <?php
                   $id = $_POST['id']; 
                        ?>

                        <!-- block -->
                           <div class="row-fluid"> 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info"  style="color: 0000;font-family: all;"><i class="icon-info-sign"></i> <?php echo Htmlspecialchars($lang['Prepare_Student_Report_Card']); ?></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
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

                 $query111 = mysqli_query($link,"SELECT * FROM time1") or die(mysqli_error());
                 $row = mysqli_fetch_array($query111);

                  $start = $row['rpcs']; 
                  $end = $row['rpce'];
                  $current= date('Y-m-d');

                     $query = mysqli_query("select * from students where stud_id = '$id' AND grade = '$grade' AND section = '$section' ")
                     or die(mysqli_error());
                     $count = mysqli_num_rows($query);
                     $row = mysqli_fetch_array($query);
                     $grade = $row['grade'];
                      if ($count <= 0) {?>
                       <script>
                         alert('Student Does Not Exist in this Class');
                         window.location = "report_card11.php";
                       </script>
                       <?php
                     }
                   elseif ($current < $start) {
                      ?>
                       <script>
                         alert('Student Report Card Date Not Reached');
                         window.location = "report_card.php";
                       </script>
                       <?php
                     }
                    elseif ($current > $end) {
                      ?>
                       <script>
                         alert('Sorry, Student Report Card Date Passed');
                         window.location = "report_card.php";
                       </script>
                       <?php
                     }
                     else{
                     ?>
                   <h3  style="color: black;font-family: all;"> <b><STRONG>!!! <?php echo Htmlspecialchars($lang['Grade']); ? <?php echo $row['grade'] ?>  <?php echo Htmlspecialchars($lang['Student_Report_card_Form']); ?></STRONG></b></h3><hr>
                    <form method="post" class="form-horizontal" action="report_cad101.php">
                          <div class="control-group">
                  <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                    <b><strong> <?php echo Htmlspecialchars($lang['School_Name']); ?></strong></b> </label>
                        <div class="controls">
                        <input class="input focused" name="name" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Stud_Id']); ?" required value="Aba Fransua Markose School" 
                          style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div>
                                             <div class="control-group">
                     <label class="control-label" for="inputPassword"  
                      style="color: black;font-family: all;">
                    <b><strong>Stud Id :</strong></b> </label>
                                          <div class="controls">
                                            <input class="input focused" name="name" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Stud_Id']); ?" value="<?php echo $row['stud_id'];?> " required  style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div>                                        
                        <div class="control-group">
                     <label class="control-label" for="inputPassword"  
                      style="color: black;font-family: all;">
                    <b><strong><?php echo Htmlspecialchars($lang['Stud_FName']); ?></strong></b> </label>
                                          <div class="controls">
                                            <input class="input focused" name="fname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Stud_Id']); ?" value="<?php echo $row['fname'];?>" required  style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div>
                        <div class="control-group">
                     <label class="control-label" for="inputPassword"  
                      style="color: black;font-family: all;">
                    <b><strong> <?php echo Htmlspecialchars($lang['vStud_MName']); ?</strong></b> </label>
                                          <div class="controls">
                                            <input class="input focused" name="mname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Stud_Id']); ?" value="<?php echo $row['mname']; ?>" required  style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div>
                        <div class="control-group">
                     <label class="control-label" for="inputPassword"  
                      style="color: black;font-family: all;">
                    <b><strong>Stud LName :</strong></b> </label>
                                          <div class="controls">
                                            <input class="input focused" name="lname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Stud_Id']); ?" value=" <?php echo $row['lname']; ?>" required  style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div>                                                                                
                     <div class="control-group">
                    <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b>Sex :</b></label>
                        <div class="controls">
                        <input class="input focused" name="sex" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Absence_Day']); ?" required value="<?php echo $row['sex']; ?>" 
                        style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div>
                      <div class="control-group">
                    <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b> Age :</b></label>
                        <div class="controls">
                        <input class="input focused" name="age" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Absence_Day']); ?" required value="<?php echo $row['age']; ?>" 
                        style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div>                                                                              
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b><strong><?php echo Htmlspecialchars($lang['Grade']); ? ></strong></b> </label>
                                          <div class="controls">
                                            <input class="input focused" name="grade" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Absence_Day']); ?>" required value="<?php echo $row['grade']; ?>" 
                                            style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div> 
                      <?php   
                    $querys = mysql_query("select * from school_year")
                     or die(mysql_error());
                     $row = mysql_fetch_array($querys); 
                     ?>                                                               
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b><?php echo Htmlspecialchars($lang['Year']); ?> </b></label>
                                <div class="controls">
                                <input class="input focused" name="year" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['acadamic_year']); ?>" value="<?php echo $row['school_year'] ?>" required style="color: black;font-family: all;" readonly>
                                        </div>
                                        </div>
                   <h4> <strong><b><i><h4 style="color: black;font-family: all;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; Second Semester &nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; </i></b>
                   </strong></h4></br><hr>             

            <?php      
                    $user_query1 = mysqli_query($link,"select Max_Mark,Result from assessment11 where 
                      Stud_Id = '$id' AND Subject = 'Amharic' ")or die(mysqli_error());
                          $total = 0;
                          $maxm = 0;
                         while ($row1 = mysqli_fetch_array($user_query1)) {
                    $max = $row1['Max_Mark'];     
                   $row2 = $row1['Result'];
                    
                   $max1 = $max+$maxm;
                    $maxm = $max1;

                    $total1 = $total+$row2;
                    $total = $total1;
                    }

                      ?>
                             <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><strong><b>Amharic :</b></strong></label>
                                          <div class="controls">
                                          <input class="input focused" value="<?php echo $total;?>" name="amharic" id="focusedInput" type="text" placeholder = "Amharic" required style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div>
               <?php 
              $user_query2 = mysqli_query($link,"select Max_Mark,Result from assessment11 where 
                      Stud_Id = '$id' AND Subject = 'English' ")or die(mysqli_error());
                          $total = 0;
                          $maxm = 0;
                         while ($row1 = mysqli_fetch_array($user_query2)) {
                    $max = $row1['Max_Mark'];     
                    $row2 = $row1['Result'];
                    
                    $max1 = $max+$maxm;
                    $maxm = $max1;

                    $total1 = $total+$row2;
                    $total = $total1;
                    }
                    ?>                                           
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b><strong> English :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $total;?>"  name="english" id="focusedInput" type="text" placeholder = "English" required style="color: black;font-family: all;" readonly >
                                          </div>
                                        </div>
               <?php 
              $user_query3 = mysqli_query($link,"select Max_Mark,Result from assessment11 where 
                      Stud_Id = '$id' AND Subject = 'Mathematics' ")or die(mysqli_error());
                          $total = 0;
                          $maxm = 0;
                         while ($row1 = mysqli_fetch_array($user_query3)) {
                    $max = $row1['Max_Mark'];     
                    $row2 = $row1['Result'];
                    
                    $max1 = $max+$maxm;
                    $maxm = $max1;

                    $total1 = $total+$row2;
                    $total = $total1;
                    }
                    ?>
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b><strong> Mathematics :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $total;?>" name="maths" id="focusedInput" type="text" placeholder = "Maths" required style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div> 
               <?php 
              $user_query4 = mysqli_query($link,"select Max_Mark,Result from assessment11 where 
                      Stud_Id = '$id' AND Subject = 'Physics' ")or die(mysqli_error());
                          $total = 0;
                          $maxm = 0;
                         while ($row1 = mysqli_fetch_array($user_query4)) {
                    $max = $row1['Max_Mark'];     
                    $row2 = $row1['Result'];
                    
                    $max1 = $max+$maxm;
                    $maxm = $max1;

                    $total1 = $total+$row2;
                    $total = $total1;
                    }
                    ?>                           
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><strong><b> Physics :</b></strong></label>
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $total;?>" name="physics" id="focusedInput" type="text" placeholder = "Physics" required style="color: black;font-family: all;" readonly >
                                          </div>
                                        </div>
               <?php 
              $user_query5 = mysql_query("select Max_Mark,Result from assessment11 where 
                      Stud_Id = '$id' AND Subject = 'Biology' ")or die(mysqli_error());
                          $total = 0;
                          $maxm = 0;
                         while ($row1 = mysqli_fetch_array($user_query5)) {
                    $max = $row1['Max_Mark'];     
                    $row2 = $row1['Result'];
                    
                    $max1 = $max+$maxm;
                    $maxm = $max1;

                    $total1 = $total+$row2;
                    $total = $total1;
                    }
                    ?>
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b><strong> Biology :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $total;?>" name="biology" id="focusedInput" type="text" placeholder = "Biology" required style="color: black;font-family: all;" readonly >
                                          </div>
                                        </div> 
               <?php 
              $user_query6 = mysqli_query($link,"select Max_Mark,Result from assessment11 where 
                      Stud_Id = '$id' AND Subject = 'Chemistry' ")or die(mysqli_error());
                          $total = 0;
                          $maxm = 0;
                         while ($row1 = mysqli_fetch_array($user_query6)) {
                    $max = $row1['Max_Mark'];     
                    $row2 = $row1['Result'];
                    
                    $max1 = $max+$maxm;
                    $maxm = $max1;

                    $total1 = $total+$row2;
                    $total = $total1;
                    }
                    ?>
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b><strong> Chemistry :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $total;?>" name="chemistry" id="focusedInput" type="text" placeholder = "Chemistry" required style="color: black;font-family: all;" readonly >
                                          </div>
                                        </div>
               <?php 
              $user_query7 = mysqli_query($link,"select Max_Mark,Result from assessment11 where 
                      Stud_Id = '$id' AND Subject = 'Geography' ")or die(mysqli_error());
                          $total = 0;
                          $maxm = 0;
                         while ($row1 = mysqli_fetch_array($user_query7)) {
                    $max = $row1['Max_Mark'];     
                    $row2 = $row1['Result'];
                    
                    $max1 = $max+$maxm;
                    $maxm = $max1;

                    $total1 = $total+$row2;
                    $total = $total1;
                    }
                    ?>
                       <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b><strong> Geography :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $total;?>" name="geography" id="focusedInput" type="text" placeholder = "Geography" required style="color: black;font-family: all;" readonly >
                                          </div>
                                        </div> 
               <?php 
              $user_query8 = mysqli_query($link,"select Max_Mark,Result from assessment11 where 
                      Stud_Id = '$id' AND Subject = 'History' ")or die(mysqli_error());
                          $total = 0;
                          $maxm = 0;
                         while ($row1 = mysqli_fetch_array($user_query8)) {
                    $max = $row1['Max_Mark'];     
                    $row2 = $row1['Result'];
                    
                    $max1 = $max+$maxm;
                    $maxm = $max1;

                    $total1 = $total+$row2;
                    $total = $total1;
                    }
                    ?>
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b><strong> History :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $total;?>" name="history" id="focusedInput" type="text" placeholder = "History" required style="color: black;font-family: all;" readonly >
                                          </div>
                                        </div> 

               <?php 
              $user_query9 = mysqli_query("select Max_Mark,Result from assessment11 where 
                      Stud_Id = '$id' AND Subject = 'Civics' ")or die(mysqli_error());
                          $total = 0;
                          $maxm = 0;
                         while ($row1 = mysqli_fetch_array($user_query9)) {
                    $max = $row1['Max_Mark'];     
                    $row2 = $row1['Result'];
                    
                    $max1 = $max+$maxm;
                    $maxm = $max1;

                    $total1 = $total+$row2;
                    $total = $total1;
                    }
                    ?>

                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b><strong> Civics :</strong></b></label>
                                          <div class="controls">
                                          <input class="input focused" value="<?php echo $total;?>" name="civics" id="focusedInput" type="text" placeholder = "Civics" required style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div> 

               <?php 
              $user_query10 = mysqli_query($link,"select Max_Mark,Result from assessment11 where 
                      Stud_Id = '$id' AND Subject = 'HPE' ")or die(mysqli_error());
                          $total = 0;
                          $maxm = 0;
                         while ($row1 = mysqli_fetch_array($user_query10)) {
                    $max = $row1['Max_Mark'];     
                    $row2 = $row1['Result'];
                    
                    $max1 = $max+$maxm;
                    $maxm = $max1;

                    $total1 = $total+$row2;
                    $total = $total1;
                    }
                    ?>
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b><strong> HPE :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $total;?>" name="hpe" id="focusedInput" type="text" placeholder = "HPE" required style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div>
               <?php 
              $user_query10 = mysqli_query($link,"select Max_Mark,Result from assessment11 where 
                      Stud_Id = '$id' AND Subject = 'IT' ")or die(mysqli_error());
                          $total = 0;
                          $maxm = 0;
                         while ($row1 = mysqli_fetch_array($user_query10)) {
                    $max = $row1['Max_Mark'];     
                    $row2 = $row1['Result'];
                    
                    $max1 = $max+$maxm;
                    $maxm = $max1;

                    $total1 = $total+$row2;
                    $total = $total1;
                    }
                    ?>

                                 <div class="control-group">
                      <label class="control-label" for="inputPassword" style="color: black;font-family: all;"><b><strong> IT :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $total;?>" name="it" id="focusedInput" type="text" placeholder = "IT" required style="color: black;font-family: all;" readonly>
                                          </div>
                                        </div>                                
                                      </br><hr>
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="add" class="btn btn-info" style="color: black;font-family: all;">
                          <i class="icon-plus-sign"></i> Add </button>
                                          </div>
                                        </div>
                                        <?php
                                      }
                                      ?>
                                   </form>
                                </div>
                            </div>
                        </div>
    </div>
    <?php include('..//script.php'); ?>
    </body>
</html>                     