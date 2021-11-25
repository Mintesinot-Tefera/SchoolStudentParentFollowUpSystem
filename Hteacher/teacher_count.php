					<?php
						$school_year_query = mysqli_query($link,"select * from school_year order by school_year DESC")or die(mysqli_error());
						$school_year_query_row = mysqli_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
				
					<?php $query_yes = mysqli_query($link,"select * from teacher_notification
					LEFT JOIN notification_read_teacher on teacher_notification.teacher_notification_id =  notification_read_teacher.notification_id
					where teacher_id = '$session_id' 
					")or die(mysqli_error());
					$count_no = mysqli_num_rows($query_yes);
		            ?>
					<?php $query = mysqli_query($link,"select * from teacher_notification
					LEFT JOIN students on students.id = teacher_notification.student_id
					 = teacher_notification.assignment_id 
					
					where id = '$session_id' 
					")or die(mysqli_error());
					$count = mysqli_num_rows($query);
		            ?>
					
					<?php $not_read = $count -  $count_no; ?>