 <?php
 include('dbcon.php');
 include('session.php');
 $uname = $_POST['password'];

 $new_password  = $_POST['new_password'];
 mysqli_query($link,"update users set password = '$new_password' where signature = '$userid'")
   or die(mysqli_error());
 ?> 