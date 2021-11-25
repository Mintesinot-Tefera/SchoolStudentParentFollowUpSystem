<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
 
        <div class="container-fluid">
        <div class="row-fluid">

		<?php include('sidebar_teacher.php'); ?>

				<div class="span6" id="adduser">
			   <div class="row-fluid"> 
			   <div class="pull-right">
						</diV>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family:all;color: white;"><i class="icon-info-sign"></i><b> Add Parent </b></div>
                            </div>
                            <div class="block-content collapse in"> 
                                <div class="span12">
								<form method="post" class="form-horizontal" enctype="multipart/form-data" autocomplete="off">
                     <?php 
                    $user_query = mysqli_query($link,"select * from students")
                    or die(mysqli_error());
                      ?>
                                  <div class="control-group">
                        <label class="control-label" for="inputPassword"  
                          style="color: black;font-family: all;">
                          <b><strong>Stud_ID :</strong></b> </label> 
                                  <div class="controls">
                          <select class="chzn-select" name="id" id="focusedInput" type="text" placeholder ="-select-" required style="font-family:all;color: black;">
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
                  <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"><b><strong> Parent_Id :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" name="pid" id="focusedInput" type="text" placeholder = "Parent_Id" required style="font-family:all;color: black;" title="the name must four letter or greate !!" pattern="[0-9]{4,}">
                                          </div>
                                        </div>                                         
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family:all;color: black;"><b> First Name :</b></label>
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required style="font-family:all;color: black;" pattern="[A-Za-z]{3,}" title="the name must four letter or greate !!">
                                          </div>
                                        </div>
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family:all;color: black;"> <b> Last Name :</b></label>
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required style="font-family:all;color: black;" pattern="[A-Za-z]{3,}" title="the name must four letter or greate !!">
                                          </div>
                                        </div>
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family:all;color: black;"> <b> Sex :</b></label>
                                          <div class="controls">
											 <select class="chzn-select" name="sex" id="focusedInput" type="text" placeholder ="-select-" required style="font-family:all;color: black;" pattern="[A-Za-z]{1}" title="the name must four letter or greate !!" >
                           <option style="font-family:all;color: black;"></option>
													 <option style="font-family:all;color: black;" value="M">M</option>
                           <option style="font-family:all;color: black;" value="F">F</option>
                                              </select> 
                                          </div>
                                        </div>
                                              <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family:all;color: black;"><b> Age :</b></label>
                                          <div class="controls">
                                            <input class="input focused" name="age" id="focusedInput" type="text" placeholder = "your age" required style="font-family:all;color: black;" pattern="[1-9]{1}[0-9]{1}" title="age must greater then 10 and less then 100 !!">
                                          </div>
                                        </div>                                       
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="font-family:all;color: black;" ><b><strong> M_Phone :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" name="phone" id="focusedInput" type="text" placeholder = "Phone" required style="font-family:all;color: black;" pattern=
                                            "[+]{1}[2]{1}[5]{1}[1]{1}[9]{1}[0-9]{8}" title="the Phone must be an ethiopian form !!">
                                          </div>
                                        </div>
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="font-family: all;color: black;"><b><strong>Profile :</strong></b> </label>
                                          <div class="controls">
                                            <input class="input focused" name="image" id="file" 
                                            type="file" placeholder = " " required style="font-family: all;" onchange="return fileValidation()">
                                          </div>
                                        </div>                                        
                                      </br><hr>
										<input class="input focused" name="signature" id="focusedInput" type="hidden">
											<div class="control-group">
                                          <div class="controls">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="save" class="btn btn-info" style="font-family:all;color: white;"><i class="icon-plus-sign"></i><b> Register </b> </button>
                                          </div>
                                      </div>
                                   </form>
								              </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
    <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sweetalert.css">
    <script type="text/javascript">
        function f() {
            swal("Deleted!", "!", "success")
        }
        function fun() {
            swal("Successfully Registered!", " Congratulation! ", "success")
        }
        function delno() {
            swal("no data","warnning")
        }
        function nosuccess() {
            swal("Try again!", "! ", "error")
        }
        function nocon() {
            swal("No Connection")
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
					 function generate_signature( $length = 4) {
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
  $idpr = $_POST['pid'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $sex = $_POST['sex'];
  $age = $_POST['age'];
  $phone = $_POST['phone'];
    if ($_FILES['image']['name']){
        
        move_uploaded_file($_FILES['image']['tmp_name'],"..//upload/".$_FILES['image']['name']);
        $picture="..//upload/".$_FILES['image']['name'];
        
    }
  //$picture = $_POST['image'];
  $status = 'Activated';

  $id2 = "dhp/".$idpr;

  $query111 = mysqli_query($link,"SELECT * FROM time1") or die(mysqli_error());
   $row = mysqli_fetch_array($query111);

   $start = $row['rs'];
   $end = $row['re'];
   $current= date('Y-m-d'); 

    $query12 = mysqli_query($link,"select * from student_to_parent where stud_id = '$id'")
       or die(mysqli_error());       
     $count = mysqli_num_rows($query12);

    $query = mysqli_query($link,"select * from teachers where stud_id = '$id' ")
    or die(mysqli_error());
    $row = mysqli_fetch_array($query);
    $count = mysqli_num_rows($query);

 if ($age < 18) {
      ?>
  <script>
   //alert('Age Not Valid');
    swal(" Age Not Valid !!", "Please Try Again! ", "error");
    //window.location = 'add_stud.php';
  </script>
  <?php
  }
  elseif ($count > 0) {
          ?>
  <script>
    //alert('Age Not Valid');
    swal(" Duplication of Data !!", "Please Try Again! ", "error");
    //window.location = 'add_stud.php';
  </script>
  <?php
}
  elseif ($age > 75) {
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
  else{
 
mysqli_query($link,"insert into teachers (stud_id,stuff_id,fname,lname,sex,age,phone,profile,Date) 
  values('$id','$id2','$firstname','$lastname','$sex','$age','$phone','$picture',NOW())")
   or die(mysqli_error());

 mysqli_query($link,"insert into student_to_parent (stud_id,stuff_id,date) 
  values('$id','$id2',NOW())")
   or die(mysqli_error());  

   $username = $id2;
   //$password1 = $id2;
   $password =generate_password(4);
   $sign = generate_signature(4);

$query = mysqli_query($link,"select * from users where username = '$username' ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
//alert('users Already Existed');
//nosuccess();
</script>
<?php
}
else {
$resultt=mysqli_query($link,"insert into users (username,password,firstname,lastname,type,location,signature,status,date) 
  values('$username','$password','$firstname','$lastname','parent','$picture','$sign','$status',NOW())")
  or die(mysqli_error());
    
    	if( $resultt==1){
								
														
								echo '<div class="alert alert-dismissable alert-primary">';
								echo '<div class="alert alert-dismissable alert-primary">';
										echo '<strong>'." Parent"."&nbsp; &nbsp;"."<font face='monotype ' color='black' size='3'>".$firstname."</font>"." &nbsp;"."<font face='monotype ' color='black' size='2'>".$lastname."</font>"."&nbsp; &nbsp;"."  is successfully registerd in the system and"."<br>". "The Parent Username is "."<font color='black' size='3'>"." &nbsp;".$username ."&nbsp; &nbsp;"."</font>"."<br>"."The Parent password is "." &nbsp;"."<font color='black' size='3'>".$password ."</font>"."&nbsp; &nbsp;"."<br>"."And The Parent backup id is   "."<font color='black' size='3'>"."$sign "."</font>"."Parent should get these information and use  username and password to sign in to our system".'</strong>';
                               
								echo '</div>';						
								}
								else{
							    echo '<center>';
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."Error in sending message.".'</strong>';
								echo '</div>';
								echo '</center>';}
    
}
?>
<script>
  fun();
//window.location = "record_teacher.php";
</script>
<?php
}
}
?>	   			
				</div>
		<?php include('..//script.php'); ?>
    </body>
</html>