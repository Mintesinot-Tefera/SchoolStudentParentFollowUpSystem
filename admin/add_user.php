<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>

<body>
	<script type="text/javascript">
    $(function () {
        $("#new_password").bind("keyup", function () {
            //TextBox left blank.
            if ($(this).val().length == 0) {
                $("#password_strength").html("");
                return;
            }
 
            //Regular Expressions. 
            var regex = new Array(); 
            regex.push("[A-Z]"); //Uppercase Alphabet.
            regex.push("[a-z]"); //Lowercase Alphabet.
            regex.push("[0-9]"); //Digit.
            regex.push("[$@$!%*#?&]"); //Special Character.
 
            var passed = 0;
 
            //Validate for each Regular Expression.
            for (var i = 0; i < regex.length; i++) {
                if (new RegExp(regex[i]).test($(this).val())) {
                    passed++;
                }
            }
            //Validate for length of Password.
            if (passed > 2 && $(this).val().length > 8) {
                passed++;
            }
            //Display status.
            var color = "";
            var strength = "";
            switch (passed) {
                case 0:
                case 1:
                    strength = "Weak";
                    color = "red";
                    break;
                case 2:
                    strength = "Good"; 
                    color = "darkorange";
                    break;
                case 3:
                case 4: 
                    strength = "Strong";
                    color = "green";
                    break;
                case 5:
                    strength = "Very Strong";
                    color = "darkgreen";
                    break;
            }
            $("#password_strength").html(strength);
            $("#password_strength").css("color", color);
        });
    });
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
    <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sweetalert.css">
    <script type="text/javascript">
        function f() {
            swal("User Successfully Created!", "Congratulation!", "success")
        }
        function fun() {
            swal("User Successfully Created!", "Congratulation!", "success")
        }
        function delno() {
            swal("no data")
        }
        function nosuccess() {
            swal("አልተሰከም እንደገና ይሞክሩ!", " በተኑን ይጨኑ! ", "error")
        }
        function nocon() {
            swal("ኮኔክሽን  ዬለም ")
        }
</script>

		<?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
		<?php include('sidebar_user.php'); ?>
				<div class="span6" id="adduser">
			   <div class="row-fluid">
			   <div class="pull-right">
						
						
						</diV>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                            <div class="alert alert-info" style="font-family: all;font-size: 16px;"><i class="icon-info-sign"></i><b><strong> <?php echo Htmlspecialchars($lang['Add_Useradmin']); ?> </strong></b> </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" class="form-horizontal" enctype="multipart/form-data" autocomplete="off">
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family: all;color: black;" ><b><?php echo Htmlspecialchars($lang['f_name']); ?>:</b></label>
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['f_name']); ?>" required style="font-family: all;color: black;" pattern="[A-Za-z]{3,}">
                                          </div>
                                        </div>
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family: all;color: black;"><b><strong> <?php echo Htmlspecialchars($lang['l_name']); ?> :</strong></b></label>
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['l_name']); ?>" required style="font-family: all;color: black;" pattern="[A-Za-z]{3,}">
                                          </div>
                                        </div>
											<div class="control-group">
											<label class="control-label" for="inputPassword" style="font-family: all;color: black;"><b><strong><?php echo Htmlspecialchars($lang['username']); ?> :</strong></b> </label>
                                          <div class="controls">
                                            <input class="input focused" name="username" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['username']); ?>" required style="font-family: all;color: black;" pattern="[A-Za-z0-9]{3,}">
                                          <i class="icon-user icon-larg"></i>
                                          </div>
                                        </div>
										
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family: all;color: black;"><b><strong><?php echo Htmlspecialchars($lang['pass']); ?> :</strong></b> </label>
                                          <div class="controls">
                                            <input class="input focused" name="password" id="new_password" type="password" placeholder = "<?php echo Htmlspecialchars($lang['pass']); ?>" required style="font-family: all;color: black;" >
                                          <span id="password_strength">
                                          <i class="icon-lock icon-larg"></i></span>
										                     </div>
                                        </div>         
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="font-family: all;color: black;"><b><strong> <?php echo Htmlspecialchars($lang['Profileadmin']); ?>:</strong></b> </label>
                                          <div class="controls">
                                  <input class="input focused" name="image" id="file" 
                                   type="file" placeholder = " " required style="font-family: all;color: black;" onchange="return fileValidation()">
                                          </div>
                                        </div>
										<div class="control-group">
										<label class="control-label" for="inputPassword" style="font-family: all;color: black;"><b><strong><?php echo Htmlspecialchars($lang['Typeadmin']); ?>:</strong></b> </label>
                                          <div class="controls">
                       
											 <select class="chzn-select" name="type" id="focusedInput" type="text" placeholder ="-<?php echo Htmlspecialchars($lang['select']); ?>-" required style="font-family: all;">
                                                     <option></option>
													 <option style="font-family: all;color: black;"  value="administrator"><?php echo Htmlspecialchars($lang['Directo']); ?></option>
                           <option style="font-family: all;color: black;"  value="home_room_teacher"><?php echo Htmlspecialchars($lang['homeroom']); ?></option>
                           <option style="font-family: all;color: black;"  value="subject_teacher"><?php echo Htmlspecialchars($lang['subject']); ?></option>  
                           <option style="font-family: all;color: black;"  value="record_officer"><?php echo Htmlspecialchars($lang['record']); ?></option>
													 
 
                                              </select> 
                                          </div>
                                        </div>
                                      </br>
                                      <hr>
										<input class="input focused" name="signature" id="focusedInput" type="hidden">
											<div class="control-group">
                            <div class="controls" style="font-family: all;color: black;">
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="save" class="btn btn-info"><i class="icon-plus-sign"></i><b style="font-family: all;">
                          <strong><?php echo Htmlspecialchars($lang['Create_acount']); ?></strong></b> </button>

                                          </div>
                                        </div>
                                      </br>
                                  </form>
								               </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					<?php
					 function generate_signature( $length = 4 ) {
                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $signature = substr( str_shuffle( $chars ), 0, $length );
                   return $signature;
                         }
if (isset($_POST['save'])){
$firstname = $_POST['firstname'];
//$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
//$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$type = $_POST['type'];
$status = 'Activated';
//code for image uploading
    if ($_FILES['image']['name']){
        
        move_uploaded_file($_FILES['image']['tmp_name'],"..//upload/".$_FILES['image']['name']);
        $location="..//upload/".$_FILES['image']['name'];
        
    }
    
    
//$location = $_POST['image'];
$sign =generate_signature(4);

$query = mysqli_query($link,"select * from users where username = '$username' ")
  or die(mysqli_error());
$count = mysqli_num_rows($query);

$query1 = mysqli_query($link,"select * from users where type = 'administrator'")
  or die(mysqli_error());
$count1 = mysqli_num_rows($query1);

if ($count > 0){ ?>
<script>
//alert('users Already Existed');
//nosuccess();
swal("UserName Already Existed!", " Please Try Again! ", "error");
</script>
<?php
}
else{
  $resultt=mysqli_query($link,"insert into users (username,password,firstname,lastname,type,location,signature,status,date) values('$username','$password','$firstname','$lastname','$type','$location','$sign','$status',NOW())")
  or die(mysqli_error());
    
    	if( $resultt==1){
								$message = "Dear $firstname $lastname your account is now created and your password is  $password and             your backup id is $sign          take these information or user id and password to sing in to our system";
														
								echo '<div class="alert alert-dismissable alert-primary">';
								echo '<div class="alert alert-dismissable alert-primary">';
								echo '<div class="alert alert-dismissable alert-primary">';
										echo '<strong>'." Dear"."&nbsp; &nbsp;"."<font face='monotype ' color='black' size='3'>".$firstname."</font>"." &nbsp;"."<font face='monotype ' color='black' size='2'>".$lastname."</font>"."&nbsp; &nbsp;"."  is successfully registerd in the system and"."<br>". " Username is "."<font color='black' size='3'>"." &nbsp;".$username."&nbsp; &nbsp;"."</font>"."<br>"." Password is "." &nbsp;"."<font color='black' size='3'>".$password ."</font>"."&nbsp; &nbsp;"."<br>"." backup id is   "."<font color='black' size='3'>"."$sign "."</font>"."$firstname &nbsp; $lastname &nbsp; should get these information and use  username and password to sign in to our system".'</strong>';
								echo '</div>';						
								}
								else{
							    echo '<center>';
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."Error in sending message.".'</strong>';
								echo '</div>';
								echo '</center>';}
    
?>
<script>
  fun();
</script>
<?php
}
}
?>	   			
		</div>
		<?php include('..//script.php'); ?>
    </body>
</html>