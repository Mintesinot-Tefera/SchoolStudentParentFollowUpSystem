<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
       <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid"> 
        <div class="row-fluid"> 
		<?php include('sidebar_stud.php'); ?>
				<div class="span6" id="adduser"> 
			   <div class="row-fluid">  
			   <div class="pull-right">
						</diV>  
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family:all;font-size: 20px;"><i class="icon-info-sign"></i><b><strong> Add Student</strong></b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" class="form-horizontal" name="form1" enctype="multipart/form-data" autocomplete="off">
                    <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"><b><strong> Stud_Id :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" name="id" id="focusedInput" type="text" placeholder = "Stud_Id" required style="font-family:all;color: black;" pattern="[0-9]{3,}">
                                          </div>
                                        </div>								
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family:all;color: black;"><b><strong> F_Name :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required style="font-family:all;color: black;" pattern="[A-Za-z]{3,}" title="the name must four letter or greate !!">
                                          </div>
                                        </div>
                    <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"><b><strong> M_name :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" name="middlename" id="focusedInput" type="text" placeholder = "middlename" required style="font-family:all;color: black;" pattern="[A-Za-z]{4,}" title="the name must four letter or greate !!">
                                          </div>
                                        </div>										
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family:all;color: black;"><b><strong> L_name :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required style="font-family:all;color: black;" pattern="[A-Za-z]{4,}" title="the name must four letter or greate !!">
                                          </div>
                                        </div>
                    <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"><b><strong> Age :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" name="age" id="focusedInput" type="text" placeholder = "Age" required style="font-family:all;color: black;" pattern="[0-9]{2}" 
                                                minlength="2" maxlength="2">
                                          </div>
                                        </div>                                       
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family:all;color: black;"><b><strong> Sex :</strong></b></label>
                                          <div class="controls">
                       
											 <select class="chzn-select" name="sex" id="focusedInput" type="text" placeholder ="-select-" required style="font-family:all;color: black;" pattern="[A-Za-z]{1}" title="the name must four letter or greate !!">
                                    <option style="font-family:all;color: black;"></option>
													 <option style="font-family:all;color: black;" value="M">M</option>
                           <option style="font-family:all;color: black;" value="F">F</option>
                                              </select> 
                                          </div>
                                        </div>
                    <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"><b><strong> Grade :</strong></b></label>
                                          <div class="controls">
                       
                       <select class="chzn-select" name="grade" id="focusedInput" type="text" placeholder ="-select-" required style="font-family:all;color: black;" pattern="[0-9]{1}" title="the name must four letter or greate !!">
                           <option style="font-family:all;color: black;"></option>
                           <option style="font-family:all;color: black;" value="9">9</option>
                           <option style="font-family:all;color: black;" value="10">10</option> 
                          
                                              </select> 
                                          </div>
                                        </div>
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="font-family: all;color: black;"><b><strong>Profile :</strong></b> </label>
                                           <div class="controls">
                                  <input class="input focused" name="image" id="file" 
                                   type="file" placeholder = " " required style="font-family: all;color: black;" onchange="return fileValidation()">
                                          </div>
                                        </div>                                                      
                                      </br><hr>
										<input class="input focused" name="signature" id="focusedInput" type="hidden">
											<div class="control-group">
                                          <div class="controls">
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="save" class="btn btn-info" style="font-family:all;color: black;" onclick="return func1()"><i class="icon-plus-sign"></i><b><strong> Register </strong></b> </button>
                                          </div>
                                        </div>
                                </form>
								               </div>
                            </div>
                        </div>
                        <!--  var check_phone =  /^\(?([0&9]{2}[0-9]{8}||[+&2&5&1&9]{5}[0-9]{8}||[0&3]{2}[0-9]{10})$/; -->
                        <!-- /block -->
                    </div>
    <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sweetalert.css">
    <script type="text/javascript">
        function f() {
            swal("ተሰርዞወል!", "በተኑን ይጨኑ!", "success")
        }
        function fun() {
            swal("Successfully Registered!", " Congratulation! ", "success")
        }
        function delno() {
            swal("no data","warnning")
        }
        function nosuccess() {
            swal("አልተሰከም እንደገና ይሞክሩ !!", "በተኑን ይጨኑ! ", "error")
        }
        function nocon() {
            swal("ኮኔክሽን  ዬለም ")
        }
</script>

    <script type="text/javascript">
  function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
</script>
				<?php

           function generate_signature( $length = 4 ) {
                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $signature = substr( str_shuffle( $chars ), 0, $length );
                   return $signature;
                         }  
                    function generate_password( $passss = 4 ) {
                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $signature = substr( str_shuffle( $chars ), 0, $passss );
                   return $signature;
                         } 

if (isset($_POST['save'])){
  $id = $_POST['id'];
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  $grade = $_POST['grade'];
    
    if ($_FILES['image']['name']){
        
        move_uploaded_file($_FILES['image']['tmp_name'],"..//upload/".$_FILES['image']['name']);
        $profile="..//upload/".$_FILES['image']['name'];
        
    }
  //$profile = $_POST['image'];

  $id1 = "dhs/".$id;

   $query111 = mysqli_query($link,"SELECT * FROM time1") or die(mysqli_error());
   $row = mysqli_fetch_array($query111);

   $start = $row['rs']; 
   $end = $row['re'];
  $current= date('Y-m-d'); 

    $query = mysqli_query($link,"select * from section where grade = '$grade'")
    or die(mysqli_error());
    $row = mysqli_fetch_array($query);

   $num = $row['number'];
   $num1 = $num+$num;
   $num2 = $num+$num+$num;
   $num3 = $num+$num+$num+$num;
   $num4 = $num+$num+$num+$num+$num;
   $num5 = $num+$num+$num+$num+$num+$num;
   $num6 = $num+$num+$num+$num+$num+$num+$num;
   $num7 = $num+$num+$num+$num+$num+$num+$num+$num;
   $num8 = $num+$num+$num+$num+$num+$num+$num+$num+$num;
   $num9 = $num+$num+$num+$num+$num+$num+$num+$num+$num+$num;
  $num10 = $num+$num+$num+$num+$num+$num+$num+$num+$num+$num+$num;

   $query = mysqli_query($link,"select * from students where grade = '$grade'")
    or die(mysqli_error());
    $count = mysqli_num_rows($query);

    if ($num > $count) {
      $section = 'A';
     } 
     elseif($num1 > $count) {
       $section = 'B';
     }
     elseif($num2 > $count) {
       $section = 'C';
     }
     elseif($num3 > $count) {
       $section = 'D';
     }
     elseif($num4 > $count) {
       $section = 'E';
     }
     elseif($num5 > $count) {
       $section = 'F';
     }
     elseif($num6 > $count) {
       $section = 'G';
     }
     elseif($num7 > $count) {
       $section = 'H';
     }
     elseif($num8 > $count) {
       $section = 'I';
     }
     elseif($num9 > $count) {
       $section = 'J';
     } 
     elseif($num10 > $count) {
       $section = 'K';
     }   
     else {
       $section = 'A';
     }

 $username = $id1;
 //$password1 = $id1;
 $password =generate_password(4);
 $sign = generate_signature(4);
 $status = 'Activated';

  if ($age < 14) {
      ?>
  <script>
   //alert('Age Not Valid');
   swal(" Age Not Valid !!", "Please Try Again! ", "error");
   // nosuccess();
    //window.location = 'add_stud.php';
  </script>
  <?php
  }
  elseif ($age > 60) {
          ?>
  <script>
    //alert('Age Not Valid');
    swal(" Age Not Valid !!", "Please Try Again! ", "error");
    //window.location = 'add_stud.php';
  </script>
  <?php
  }
    elseif ($current < $start) {
          ?>
  <script>
    //alert('Age Not Valid');
    swal("Registeration Date Not Reched !!", "Please Try Again! ", "error");
    //window.location = 'add_stud.php';
  </script>
  <?php
  }
  elseif ($current > $end) {
          ?>
  <script>
    //alert('Age Not Valid');
    swal(" Sorry, Registeration Date Passed !!", "Please Try Again! ", "error");
    //window.location = 'add_stud.php';
  </script>
  <?php
  }
  else {
mysqli_query($link," insert into students (stud_id,fname,mname,lname,age,sex,grade,section,profile,Date) values('$id1','$firstname','$middlename','$lastname','$age','$sex','$grade','$section'
     ,'$profile',NOW())")or die(mysqli_error());
  
  $query = mysqli_query($link,"select * from users where username = '$username' ")or die(mysqli_error());
  $count = mysqli_num_rows($query);
       if ($count > 0) {
          ?>
  <script>
   // alert('Not Valid');
  //  window.location = 'record_stud.php';
  </script>
  <?php
       }
       else {
$resultt=mysqli_query($link,"insert into users (username,password,firstname,lastname,type,location,signature,status,date) values('$username','$password','$firstname','$lastname','student','$profile','$sign','$status',NOW())")
  or die(mysqli_error());
           
           	if( $resultt==1){
								
														
                
                  echo '<div class="alert alert-dismissable alert-success fade in">';
								echo '<div class="alert alert-dismissable alert-success fade in">';
            
                              
                             
								echo '<strong>'." Student"."&nbsp; &nbsp;"."<font face='monotype ' color='black' size='3'>".$firstname."</font>"." &nbsp;"."<font face='monotype ' color='black' size='2'>".$lastname."</font>"."&nbsp; &nbsp;"."  is successfully registerd in the system and"."<br>". "The Student Username is "."<font color='black' size='3'>"." &nbsp;".$username ."</font>"."&nbsp; &nbsp;"."<br>"."The Student password is "." &nbsp;"."<font color='black' size='3'>".$password ."</font>"."&nbsp; &nbsp;"."and The Student backup id is   "."<font color='black' size='3'>"."$sign "."</font>"."Student should take these information and use  username and password to sign in to our system".'</strong>';
                               
							
								echo '</div>';	
        
								}
								else{
							    echo '<center>';
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."Error in sending message.".'</strong>';
								echo '</div>';
								echo '</center>';}
           
           
           
           
           
           
           
           
           
    }
$query = mysqli_query($link,"select * from section1 where grade = '$grade' AND name = '$section'")
or die(mysqli_error());
$count = mysqli_num_rows($query);
if ($count > 0) {
  ?>
  <script>
   // alert('Not Valid');
  //  window.location = 'record_stud.php';
  </script>
  <?php
}
else{
  mysqli_query($link,"insert into section1 (grade,name,date) values('$grade','$section',NOW())")
  or die(mysqli_error());
}
?>
<script>
  fun();
//window.location = "record_stud.php";
</script>
<?php
}
}
?>	   			
		</div>
		<?php include('script.php'); ?>
    </body>
</html>