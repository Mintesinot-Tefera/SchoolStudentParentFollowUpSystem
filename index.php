

<?php 
include'Language/lang.php';
 ?>
<?php include('header.php'); ?>
<?php include('navbar.php'); ?><br><br>
<?php include('link.php'); ?>



<body id="login">

		<div class="row-fluid">
		  	<br>
			<div class="span7">
           <?php //include('slideshow.php'); ?>
           <iframe src="rotation.php" name="g" 
           style="border:0px; margin-left:30px; dotted red; height: 400px;width: 890px;"></iframe>
		    </div>
			





			<?php
//If the user is logged, we log him out 
if(isset($_SESSION['username']))
{
	//We log him out by deleting the username and userid sessions
	unset($_SESSION['username'], $_SESSION['userid']);
?>

<?php
}
else
{
	$ousername = '';
	//We check if the form has been sent
	if(isset($_POST['username'], $_POST['password']))
	{
		//We remove slashes depending on the configuration
		if(get_magic_quotes_gpc())
		{
			$ousername = stripslashes($_POST['username']);
			$username = mysqli_real_escape_string(stripslashes($_POST['username']));
			$password = stripslashes($_POST['password']);
		}
		else
		{
			$username = mysqli_real_escape_string($_POST['username']);
			$password = $_POST['password'];
		}
		//We get the password of the user
		$req = mysqli_query($link,'select password,id from users where username="'.$username.'"');
		$dn = mysqli_fetch_array($req);
		//We compare the submited password and the real one, and we check if the user exists
		if($dn['password']==$password and mysqli_num_rows($req)>0)
		{
			//If the password is good, we dont show the form
			$form = false;
			//We save the user name in the session username and the user Id in the session userid
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['userid'] = $dn['id'];
?>

<?php
		}
		else
		{
			//Otherwise, we say the password is incorrect.
			$form = true;
			$message = 'The username or password is incorrect.';
		}
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		//We display a message if necessary
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
	//We display the form
?>
<?php
	}
}
?>

			<div class="span4" style="display: inline-block; margin-bottom:50px; text-align: center;">
				<div>
                      <div class="box box-danger">
			  <div class="box box-header with-border">
                  <h3 class="jumbotron-heading" style="color:#ffffff"> <span class="logo"><?php echo Htmlspecialchars($lang['Our_Mission']); ?></span></h3>
		  </div>
		  
		  <div class="box-body">
		  <p class="jumbotron-heading" style="font-family:all;color: #00007d; font-size:20px;">  <?php echo Htmlspecialchars($lang['Durame_Generalho']); ?>
		  </p>
		  </div>
			</div>
                        <div class="box box-danger">
			  <div class="box box-header with-border">
                  <h3 class="jumbotron-heading"><span class="logo" style="color:#ffffff"> <?php echo Htmlspecialchars($lang['Our_Vision']); ?></span></h3>
		  </div>
		  
		  <div class="box-body">
		  <p class="jumbotron-heading" style="font-family:all;color: #00007d; font-size:20px;">  <?php echo Htmlspecialchars($lang['General_Senior']); ?>
		  </p>
		  </div>
			</div>
                    
                    
                    
                    <?php //include('login_form.php'); ?></div></div>
		   </div>
			
<?php include('script.php'); ?>
    <?php include('footer.php'); ?>
