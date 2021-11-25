<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>

<?php
   if (isset($_POST['add'])){  

          $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                       
                  $row1 = mysqli_fetch_array($query); 
                  $teacher1 = $row1['firstname'];
                  $teacher2 =  $row1['lastname']; 
                  $teacher = $teacher1." ".$teacher2;

/*......................identity information......................*/

$id1 = $_POST['name'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$sex = $_POST['sex'];
$age = $_POST['age']; 
$grade = $_POST['grade'];
$year = $_POST['year'];

/*......................First Semester Result......................*/

$amh = $_POST['amharic'];
$eng = $_POST['english'];
$mat = $_POST['maths'];
$phy = $_POST['physics'];
$bio = $_POST['biology'];
$che = $_POST['chemistry'];
$geo = $_POST['geography'];
$his = $_POST['history'];
$civ = $_POST['civics'];
$HPE = $_POST['hpe'];
$IT  = $_POST['it'];

$tot = $amh+$eng+$mat+$phy+$bio+$che+$geo+$his+$civ+$HPE+$IT;
$ave = $tot/11;

 function rank(){  
              $query = "SELECT stud_id,avarage1 FROM reportcard1 ORDER BY avarage1 DESC"; 
              $result = mysqli_query($link,$query); 
              $num = mysqli_num_rows($result); 

                $i = 0; 
                while ($i < $num) { 
                $userid = mysqli_result($result,$i,"stud_id"); 
                $rank = $i + 1; 
                mysqli_query($link,"UPDATE reportcard1 SET rank1 = '$rank' where stud_id = '$userid'"); 
                $i++; 
                }
              }

$ran = rank();

          $query = mysqli_query($link,"select * from reportcard1 where stud_id = '$id1' and year = '$year' ")or die(mysqli_error());
                $count = mysqli_num_rows($query);
                       
if ($count > 0){ ?>
<script>
  alert('try again!');
  window.location = "report_card.php"; 
</script>
<?php
}
else{
mysqli_query($link,"insert into reportcard1 (stud_id ,fname,mname,lname, sex, age, grade, year, amharic1,english1,maths1,physics1,biology1,chemistry1,geography1,history1,civics1,hpe1,it1,total1,
  avarage1,rank1,teacher_name,date) values('$id1','$fname','$mname','$lname','$sex','$age','$grade',
  '$year','$amh','$eng','$mat','$phy','$bio','$che','$geo','$his','$civ','$HPE','$IT',
   '$tot','$ave','$ran','$teacher',NOW())")or die(mysqli_error());
?>
<script>
  alert('succesfully registered!');
  window.location = "report_card.php";
</script>
<?php
}
} 
?>          