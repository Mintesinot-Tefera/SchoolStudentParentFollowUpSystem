<?php
       include('dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($link,"SELECT * FROM users WHERE username='$username' AND password='$password' AND type='administrator' AND status = 'Activated'")or die(mysqli_error());
		$count = mysqli_num_rows($query);
		$row = mysqli_fetch_array($query);
		/*...................................................home_room_teacher ..............................................*/
	    $query_client = mysqli_query($link,"SELECT * FROM users WHERE username='$username' AND password='$password' AND type='home_room_teacher' AND status = 'Activated'")or die(mysqli_error());
		$num_row_client = mysqli_num_rows($query_client);
		$row_client = mysqli_fetch_array($query_client);
		/*...................................................director ..............................................*/
		$query_client1 = mysqli_query($link,"SELECT * FROM users WHERE username='$username' AND password='$password' AND type='director' AND status = 'Activated'")or die(mysqli_error());
		$num_row_client1 = mysqli_num_rows($query_client1);
		$row_client1 = mysqli_fetch_array($query_client1);
                 /*...................................................record_officer ..............................................*/
		$query_client2 = mysqli_query($link,"SELECT * FROM users WHERE username='$username' AND password='$password' AND type='record_officer' AND status = 'Activated'")or die(mysqli_error());
		$num_row_client2 = mysqli_num_rows($query_client2);
		$row_client2 = mysqli_fetch_array($query_client2);
      /*...................................................subject_teacher ..............................................*/
		$query_client3 = mysqli_query($link,"SELECT * FROM users WHERE username='$username' AND password='$password' AND type='subject_teacher' AND status = 'Activated'")or die(mysqli_error());
		$num_row_client3 = mysqli_num_rows($query_client3);
		$row_client3 = mysqli_fetch_array($query_client3);
	  /*...................................................student..............................................*/
		$query_client4 = mysqli_query($link,"SELECT * FROM users WHERE username='$username' AND password='$password' AND type='student' AND status = 'Activated'")or die(mysqli_error());
		$num_row_client4 = mysqli_num_rows($query_client4);
		$row_client4 = mysqli_fetch_array($query_client4);
	  /*...................................................parent..............................................*/
		$query_client5 = mysqli_query($link,"SELECT * FROM users WHERE username='$username' AND password='$password' AND type='parent' AND status = 'Activated'")or die(mysqli_error());
		$num_row_client5 = mysqli_num_rows($query_client5);
		$row_client5 = mysqli_fetch_array($query_client5);
		/*...................................................others ..............................................*/
		if($count > 0 ) { 
		$_SESSION['id']=$row['user_id'];
		echo 'true_admin';
		
		}else if ($num_row_client > 0){
		$_SESSION['id']=$row_client['user_id'];
		echo 'true_home_room_teacher';
		
		 }else if ($num_row_client1 > 0){
		$_SESSION['id']=$row_client1['user_id'];
		echo 'true_director';
		
		 }else if ($num_row_client2 > 0){
		$_SESSION['id']=$row_client2['user_id'];
		echo 'true_record_officer';
		
		 }else if ($num_row_client3 > 0){
		$_SESSION['id']=$row_client3['user_id'];
		echo 'true_subject_teacher';
		
		 }else if ($num_row_client4 > 0){
		$_SESSION['id']=$row_client4['user_id'];
		echo 'true_student';
	
		 }else if ($num_row_client5 > 0){
		$_SESSION['id']=$row_client5['user_id'];
		echo 'true_parent';
		 }

         else{ 
				echo 'false';
		}			
		?>