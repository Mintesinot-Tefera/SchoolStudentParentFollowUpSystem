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

   $id = $_POST['name'];
 $query = mysqli_query($link,"select * from students where stud_id = '$id'")
 or die(mysqli_error());
 $count = mysqli_num_rows($query);
 $row = mysqli_fetch_array($query);

   $id1 = $row['stud_id'];

/*......................identity information......................*/
$fname = $row['fname'];
$mname = $row['mname'];
$lname = $row['lname'];
$sex = $row['sex'];
$age = $row['age']; 

$year = $_POST['year'];

$query = mysqli_query($link,"select * from reportcard1 where stud_id = '$id'")
  or die(mysqli_error());
$count = mysqli_num_rows($query);
$row1 = mysqli_fetch_array($query);

/*......................First Semester Result......................*/
$amh = $row1['amharic1'];
$eng = $row1['english1'];
$mat = $row1['maths1'];
$phy = $row1['physics1'];
$bio = $row1['biology1'];
$che = $row1['chemistry1'];
$geo = $row1['geography1'];
$his = $row1['history1'];
$civ = $row1['civics1'];
$HPE = $row1['hpe1'];
$IT  = $row1['it1'];
$tot = $row1['total1'];
$ave = $row1['avarage1'];
$ran = $row1['rank1'];

/*.......................Second Semester Result......................*/
$grade1 = $_POST['grade'];
$amh1 = $_POST['amharic'];
$eng1 = $_POST['english'];
$mat1 = $_POST['maths'];
$phy1 = $_POST['physics'];
$bio1 = $_POST['biology'];
$che1 = $_POST['chemistry'];
$geo1 = $_POST['geography'];
$his1 = $_POST['history'];
$civ1 = $_POST['civics'];
$HPE1 = $_POST['hpe'];
$IT1  = $_POST['it'];

$tot1 = $amh+$eng+$mat+$phy+$bio+$che+$geo+$his+$civ+$HPE+$IT;
$ave1 = $tot/11;

function rank(){  
              $query = "SELECT stud_id,avarage2 FROM reportcard ORDER BY avarage2 DESC"; 
              $result = mysqli_query($link,$query); 
              $num = mysqli_numrows($result); 

                $i = 0; 
                while ($i < $num) { 
                $userid = mysqli_result($result,$i,"stud_id"); 
                $rank = $i + 1; 
                mysqli_query($link,"UPDATE reportcard SET rank2 = '$rank' where stud_id = '$userid'"); 
                $i++; 
                }
              }

$ran1 = rank();


/*...................Average Total...................*/

$am = $amh+$amh1;
$en = $eng1+$eng;
$mt = $mat1+$mat;
$ph = $phy1+$phy;
$bi = $bio1+$bio;
$ch = $che1+$che;
$ge = $geo1+$geo;
$hi = $his1+$his;
$ci = $civ1+$civ;
$HP = $HPE1+$HPE;
$IT = $IT1+$IT;
$to = $tot1+$tot;
$av = $ave1+$ave;

/*...................Average...................*/

$amh2 = $am/2;
$eng2 = $en/2;
$mat2 = $mt/2;
$phy2 = $ph/2;
$bio2 = $bi/2;
$che2 = $ch/2;
$geo2 = $ge/2;
$his2 = $hi/2;
$civ2 = $ci/2;
$HPE2 = $HP/2;
$IT2  = $IT/2;
$tot2 = $to/2;
$ave2 = $av/2;

if ($ave2 >= '49.5' && $grade = '9') {
  $remark = 'Promotted';
  $promot = '10';
}
elseif($ave2 >= '49.5' && $grade = '10') {
  $remark = 'Promotted';
  $promot = '10';
}
elseif($ave2 >= '49.5' && $grade = '11') {
  $remark = 'Promotted';
  $promot = '12';
}
elseif($ave2 >= '49.5' && $grade = '12') {
  $remark = 'Promotted';
  $promot = '12';
}
elseif ($ave2 <= '49.5' && $grade = '9') {
  $remark = 'Failed';
  $promot = '9';
}
else
{
 $remark = 'Failed';
 $promot = '11';
}

   $query = mysqli_query($link,"select * from attendance where id = '$id' and Atten_Status = 'A' ")
    or die(mysqli_error());
   $count = mysqli_num_rows($query);

   if ($count = 0 || $count < 1) {
     $conduct = "A";
     $absent = 0;
   }
   elseif ($count >= 1 || $count <= 3) {
     $conduct = "B";
     $absent = 1;
   }
   elseif ($count > 3 || $count < 6) {
     $conduct = "C";
     $absent = 2;
   }
   else {
      $conduct = "D";
      $absent = 3;
   }

 function rank1(){  
              $query = "SELECT stud_id,avarage3 FROM reportcard ORDER BY avarage3 DESC"; 
              $result = mysqli_query($link,$query); 
              $num = mysqli_numrows($result); 
                $i = 0; 
                while ($i < $num) { 
                $userid = mysqli_result($result,$i,"stud_id"); 
                $rank = $i + 1; 
                mysqli_query($link,"UPDATE reportcard SET rank3 = '$rank' where stud_id = '$userid'"); 
                $i++; 
                }
              }

$ran2 = rank1(); 

  $query = mysqli_query($link,"select * from reportcard where stud_id = '$id' and grade 
                  = '$grade' and year = '$year' ")or die(mysqli_error());
                $count = mysqli_num_rows($query);

   $query2 = mysqli_query($link,"select * from reportcard1 where stud_id = '$id'")
                  or die(mysqli_error());
                $count2 = mysqli_num_rows($query2);               

if ($count > 0){ ?>
<script>
alert('አልተሰከም እንደገና ይሞክሩ!');
window.location = "report_card11.php";
</script>
<?php
}
elseif ($count2 <= 0){ ?>
<script>
alert('አልተሰከም እንደገና ይሞክሩ!');
window.location = "report_card11.php";
</script>
<?php
}
else{
mysqli_query("insert into reportcard (stud_id ,fname,mname,lname, sex, age,grade,year,amharic1,amharic2,  amharic3,english1,english2,english3,maths1,maths2,maths3,physics1,physics2,physics3,biology1,  biology2,biology3,chemistry1,chemistry2,chemistry3,geography1,geography2,geography3,history1, history2,history3,civics1,civics2,civics3,hpe1,hpe2,hpe3,it1,it2,it3,total1,total2,total3,avarage1,avarage2,avarage3,rank1,rank2,rank3,conduct,absence_day,Remark,Promotted_To,teacher_name,date) values('$id','$fname','$mname','$lname','$sex','$age','$grade1','$year','$amh','$amh1','$amh2','$eng','$eng1','$eng2','$mat','$mat1','$mat2','$phy','$phy1','$phy2','$bio','$bio1','$bio2','$che','$che1','$che2','$geo','$geo1','$geo2','$his','$his1','$his2','$civ','$civ1','$civ2','$HPE','$HPE1','$HPE2','$IT','$IT1','$IT2','$tot','$tot1','$tot2','$ave','$ave1','$ave2','$ran','$ran1','$ran2',
  '$conduct','$absent','$remark','$promot','$teacher',NOW())")or die(mysqli_error());
?>
<script>
  alert('በትክክል ተመዝግቦወል!');
window.location = "report_card11.php";
</script>
<?php
}
} 
?>          