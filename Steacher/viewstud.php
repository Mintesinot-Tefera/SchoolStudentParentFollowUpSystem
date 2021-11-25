<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('viewstud_sidebar.php'); ?> 
				<div class="pull-right">
						</diV>  
                <div class="span9" id=""> 
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="font-family: all;font-size: 16px;"><i class="icon-info-sign"></i><b><strong> <?php echo Htmlspecialchars($lang['Students_List']); ?>  </strong></b> </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span16">
								<form action="delete_users.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
								<!--	<a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a> -->
										<thead style="font-family: all;font-style: bold;">
										  <tr>
											<th></th>
											<th>Stud_ID</th>
											<th>FName</th>
											<th>MName</th>
											<th>LName</th>
											<th>Sex</th>
											<th>Grade</th>
											<th>Section</th>
											<th>Date</th>
											
										   </tr>
										</thead>
										<tbody style="font-family: all;font-style: bold;">
										<?php
        $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                  $row1 = mysqli_fetch_array($query); 
                  $teacher1 = $row1['firstname'];
                  $teacher2 =  $row1['lastname']; 
                  $teacher = $teacher1." ".$teacher2;
										
           $sql = mysqli_query($link,"SELECT *From teacher_to_course where teacher = '$teacher' ");
                     $row1 = mysqli_fetch_array($sql);
                     $row2 = $row1['grade'];
     
										
										$user_query = mysqli_query($link,"select * from students where grade = '$row2' ")
										   or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['stud_id'];
													?>
									
												<tr>
												<td width="30">
											<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['stud_id']; ?></td>
												<td><?php echo $row['fname']; ?></td> 
												<td><?php echo $row['mname']; ?> </td>
											    <td><?php echo $row['lname']; ?> </td>
											    <td><?php echo $row['sex']; ?> </td>
												<td><?php echo $row['grade']; ?></td>
												<td><?php echo $row['section']; ?></td>
											<td width="70">
											<?php  $today = date('y/m/d'); 
                                              echo $today;
											 ?>
												</td>
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div></div>
                        <!-- /block -->
                    </div>
                </div></div></div>
      	<?php include('..//footer.php'); ?>
		<?php include('script.php'); ?>
    </body>
</html>