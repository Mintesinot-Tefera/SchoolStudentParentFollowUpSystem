<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body> 
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_commentv.php'); ?>
                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="color: white;font-family: all;"><i class="icon-info-sign"></i><strong>  <?php echo Htmlspecialchars($lang['Comments_List']); ?> </strong></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span16">
								<form action="delete_users.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
  										<a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead style="color: black;font-family: all;">
										  <tr>
											<th></th>
											<th>Stud_Id</th> 
											<th>User_Name</th> 
											<th>Comment</th>
											<th>Date</th>
										   </tr>
										</thead>
										<tbody style="color: black;font-family: all;">
													<?php
                     $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                       $row1 = mysqli_fetch_array($query); 
                       $teacher1 = $row1['firstname'];
                       $teacher2 = $row1['lastname'];
                       $teacher = $teacher1." ".$teacher2;

                    $sql = mysqli_query($link,"SELECT *From teacher_to_class where teacher = '$teacher' ");
                    $row = mysqli_fetch_array($sql);
                    $grade = $row['grade'];
                    $section = $row['section'];
                    $user_query1 = mysqli_query($link,"select * from students where grade = '$grade'
                                          AND section = '$section' ")or die(mysqli_error());

                           while ($row1 = mysqli_fetch_array($user_query1)){
                            	$id = $row1['stud_id'];
										  $user_query = mysqli_query($link,"select * from comments where stud_id = '$id' AND viewer = 'Home Teacher' ")or die(mysqli_error());
												while($row = mysqli_fetch_array($user_query)){
													$id = $row['stud_id'];
													?>
												<tr>
												<td width="30">
											<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['stud_id']; ?></td> 
											    <td><?php echo $row['username']; ?> </td>
											    <td><?php echo $row['comment']; ?> </td>
												<td><?php echo $row['date']; ?></td>
												</tr>
												<?php } } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div></div>
                </div><br>
        <?php include('..//footer.php'); ?>        
		<?php include('script.php'); ?>
    </body>
</html>