
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
				
				
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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

                <div class="span9" id="content">
                     <div class="row-fluid">
					    
					     <ul class="breadcrumb">
								
								<li><a href="#"><b><?php echo Htmlspecialchars($lang['changepassword']); ?></b></a><span class="divider"></span></li>
								
						</ul>
						
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<div class="alert alert-info"><i class="icon-info-sign"></i> <?php echo Htmlspecialchars($lang['Please_Fill']); ?> </div>
								<?php
								$query = mysqli_query($link,"select * from users where user_id = '$session_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>								
										
								    <form  method="post" id="change_password" class="form-horizontal">
										<div class="control-group">
											<label class="control-label" for="inputEmail"><b style="font-family: all;color: black;">
												 <?php echo Htmlspecialchars($lang['Current_Password']); ?>:
											</b></label>
											<div class="controls">
											<input type="hidden" id="password" name="password" value="<?php echo $row['password']; ?>"  placeholder="Current Password">
											<input type="password" id="current_password" name="current_password"  placeholder="<?php echo Htmlspecialchars($lang['Current_Password']); ?>" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword"><b style="font-family: all;color: black;">
												<?php echo Htmlspecialchars($lang['new']); ?> :
											</b>
											 </label>
											<div class="controls">
											<input type="password" id="new_password" name="new_password" placeholder="<?php echo Htmlspecialchars($lang['new']); ?>" required>
											<span id="password_strength"></span>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword"><b style="font-family: all;color: black;">
												<?php echo Htmlspecialchars($lang['re']); ?>:
											</b></label>
											<div class="controls">
											<input type="password" id="retype_password" name="retype_password" placeholder="<?php echo Htmlspecialchars($lang['re']); ?>" required>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
											<button type="submit" class="btn btn-info"><i class="icon-save"></i> <?php echo Htmlspecialchars($lang['Changeadmin']); ?></button>
											</div>
										</div>
									</form>
									
												<script>
			jQuery(document).ready(function(){
			jQuery("#change_password").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var current_password = jQuery('#current_password').val();
						var new_password = jQuery('#new_password').val();
						var retype_password = jQuery('#retype_password').val();
						if (password != current_password)
						{
						$.jGrowl("Password does not match with your current password  ", { header: 'Change Password Failed' });
						}else if  (new_password != retype_password){
						$.jGrowl("Password does not match with your new password  ", { header: 'Change Password Failed' });
						}else if ((password == current_password) && (new_password == retype_password)){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_password_admin.php",
						data: formData,
						success: function(html){
					
						$.jGrowl("Your password is successfully change", { header: 'Change Password Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'home.php'  }, delay);  
						}
					});
					}
				});
			});
			</script>		
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		<?php include('script.php'); ?>
    </body>
</html>