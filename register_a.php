<?php

include("dbcon.php");





function generate_signature( $length = 10 ) {
                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $signature = substr( str_shuffle( $chars ), 0, $length );
                   return $signature;
                         }
$error = false;
if (isset($_POST['save'])){
$firstname = $_POST['firstname'];
//$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
//$email = $_POST['email'];
$username = $_POST['username'];
$password = MD5($_POST['password']);

$type = $_POST['type'];
$status = 'Activated';

$location = $_FILES['image'];
$sign = MD5(generate_signature(10));


$sql=mysqli_query($link,"SELECT * FROM users where username='$username'");
if(mysqli_num_rows($sql)>0)
{
    $error = true;
    $username_error="this acount i is  Already Exists"; 
	exit;
}
		if(!$error){
            
           
                 if($query = "insert into users (username,password,firstname,lastname,type,location,signature,status,date) values('$username','$password','$firstname','$lastname','$type','$location','$sign','$status',NOW())"){	
			mysqli_query($link,$query) or die("Can't Execute Query...");
			$successmsg = "You have been successfully registered.Please wait for the your Director approval.";
			//echo "<script>setTimeout(\"location.href = 'index.php';\",5000);</script>";
                
			}
            else
		{
			 $errormsg = "Error in registering...Please try again later!";
		}
            }
            
           
        

}
?>