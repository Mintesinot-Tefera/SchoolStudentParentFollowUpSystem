<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
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
                  <?php 
                  $grade = $_SESSION['grade']; 
                  $subject = $_SESSION['subject'];
                  $ass_name = $_SESSION['ass_type'];

                  ?> 
<?php    
   if (isset($_POST['insert'])){  
                      
          $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
          or die(mysqli_error());
          /*..............record by..................*/
                  $row1 = mysqli_fetch_array($query); 
                  $teacher = $row1['firstname'];
             /*..............to chack assementt..................*/
              $user_query1 = mysqli_query($link,"select * from assessment1 where grade = '$grade'
                          AND Subject = '$subject' AND ass_name = '$ass_name'")
                          or die(mysqli_error());
                          $row1 = mysqli_fetch_array($user_query1);
                          $count1 = mysqli_num_rows($user_query1);
             /*..............to chack assementt..................*/
            $user_query2 = mysqli_query($link,"select * from assessment11 where 
                           Subject = '$subject' AND Ass_Name = '$ass_name' 
                           AND grade = '$grade' ")
                           or die(mysqli_error());
                           $count2 = mysqli_num_rows($user_query2); 

           /*..............to chack student..................*/
       $user_query = mysqli_query($link,"select * from students where grade = '$grade' ")
               or die(mysqli_error());
          $count = mysqli_num_rows($user_query);
           $grade = mysqli_fetch_array($user_query);
              $subject = $row1['Subject'];
              $ass_name = $row1['ass_name'];            
              $Max_Mark = $row1['Max_Mark'];
 
        if ($count2 > 0) {
              ?>
             <script>
         alert('Assesment Alredy Exist');
        window.location = "assesmentind1.php";
         </script>
           <?php
         } 
          elseif ($count1 == 0) {
              ?>
             <script>
         alert('Please First Set Assesment');
        window.location = "assesmentind1.php";
         </script>
           <?php
         }
         else{

              $id = $_POST['id'];
              $grade = $_POST['grade'];
              $result = $_POST['result'];
              $row = mysqli_fetch_array($user_query);
              for ($i=0; $i < $count; $i++) { 
               
               $insertid = $id[$i];
               $insertgrade = $grade[$i];
               $Insertresult = $result[$i];
      
              if ($Insertresult >= $Max_Mark) {
              ?>
             <script> 
         alert('Result Must Less then or Equal to Max_Mark');
        window.location = "assesmentind1.php";
         </script>
           <?php  
              }
         else{
      mysqli_query($link,"insert into assessment11 (Stud_Id ,grade,Subject,Ass_Name, Max_Mark, 
          Result ,Teacher,date ) values
        ('$insertid','$insertgrade','$subject','$ass_name','$Max_Mark','$Insertresult','$teacher',NOW())")
      or die(mysqli_error());
}
}
?>
<script>
  alert('Recorded Succesfully');
 window.location = "assesmentind1.php"; 
</script>
<?php
}
}
?>