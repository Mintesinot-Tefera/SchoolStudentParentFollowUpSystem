<?php
include('dbcon.php');
include('session.php');
<?php include('..//Language/lang.php'); ?>
if (isset($_POST['read'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	mysqli_query($link,"insert into notification_read (student_id,student_read,notification_id) values('$session_id','yes','$id[$i]')")or die(mysqli_error());
}
?>
<script>
window.location = 'teacher_index.php';
</script>
<?php
}
?>