					<?php
						$school_year_query = mysqli_query($link,"select * from school_year order by school_year DESC")or die(mysqli_error());
						$school_year_query_row = mysqli_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
	 				<?php $query_yes = mysqli_query($link,"select * from teachers
					where stuff_id = '$session_id' 
					")or die(mysqli_error()); 
					$count_no = mysqli_num_rows($query_yes);
		            ?>
					<?php $query_no = mysqli_query($link,"select * from notification 
					LEFT JOIN notification_read ON notification_read.notification_id = notification.notification_id
					where notification_read.student_id  = '$session_id'
					")or die(mysqli_error());
					$count_yes = mysqli_num_rows($query_no);
		            ?>
					<?php $not_read = $count_no -  $count_yes; ?>