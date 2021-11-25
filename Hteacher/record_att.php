<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
                  <?php
                  $grade1 = $_SESSION['grade']; 
                  $section1 = $_SESSION['section'];   
                  ?>
   <?php    
   if (isset($_POST['insert'])){ 
                     
                  $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                    or die(mysqli_error());

                  $row1 = mysqli_fetch_array($query);  
                  $teacher = $row1['firstname'];

          $user_query = mysqli_query($link,"select * from students where grade = '$grade1' 
            AND section = '$section1' ")or die(mysqli_error());
            $count = mysqli_num_rows($user_query);

                        $Today = date('y:m:d');
                      //  $new = date('l, F d, Y', strtotime($Today));

          $user_query1 = mysqli_query($link," select * from attendance where grade = '$grade1' 
            AND section = '$section1' AND Date = '$Today' ")or die(mysqli_error());
            $count1 = mysqli_num_rows($user_query1);

          if($count1 > 0) {
              ?>
             <script>
         alert('not secessful!');
            window.location = "Attendance.php";
         </script>
           <?php
         }
         else{   
           $id = $_POST['id1'];
           $fname = $_POST['fname'];
           $lname = $_POST['lname'];
           $sex = $_POST['sex'];
           $grade = $_POST['grade'];
           $section = $_POST['section'];
           $atte = $_POST['attendance']; 
           
            for ($i=0; $i < $count; $i++) { 
            
                $Insertid = $id[$i];
                $Insertfname = $fname[$i];
                $Insertlname = $lname[$i];
                $Insertsex = $sex[$i];
                $Insertgrade = $grade[$i];
                $Insertsection = $section[$i];
                $Insertatte = $atte[$i];
       
mysqli_query($link,"insert into attendance (id ,fname, lname, Sex, grade ,section,
   Atten_Status ,Record_By ,Date ) values
('$Insertid','$Insertfname','$Insertlname','$Insertsex','$Insertgrade','$Insertsection','$Insertatte','$teacher','$Today')")or die(mysqli_error());
}

?>
<script>
  alert('Succesefully recorded!');
 window.location = "Attendance.php";
</script>
<?php
}
}
?>