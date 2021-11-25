<?php
include('dbcon.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector']; 
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($link,"DELETE FROM assessment where id='$id[$i]'");
}
header("location: view_ass1.php"); 
}
?>