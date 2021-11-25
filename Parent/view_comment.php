<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_comment1.php'); ?> 
                <div class="span8" id=""> 
                     <div class="row-fluid"> 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="color: white;font-family: all;"><i class="icon-info-sign"></i><strong> <?php echo Htmlspecialchars($lang['Comments_List']); ?></strong></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span16">
								<form action="delete_users.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
										<thead style="color: black;font-family: all;">
										  <tr>
											<th></th>
											<th><?php echo Htmlspecialchars($lang['Stud_ID']); ?></th>
											<th><?php echo Htmlspecialchars($lang['username']); ?></th>
											<th><?php echo Htmlspecialchars($lang['Comment']); ?></th>
											<th><?php echo Htmlspecialchars($lang['Date']); ?></th>
											
										   </tr>
										</thead>
										<tbody style="color: black;font-family: all;">
													<?php
                      $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                       $row1 = mysqli_fetch_array($query); 
                       $teacher = $row1['username'];

                     $query = mysqli_query($link,"select * from teachers where stuff_id = '$teacher'")
                       or die(mysqli_error());
                     $query = mysqli_query($link,"select * from student_to_parent where stuff_id = '$teacher'")or die(mysqli_error()); 
                     while($row1 = mysqli_fetch_array($query)){
                     	
                       $stud_id = $row1['stud_id'];

					 $user_query = mysqli_query($link,"select * from comments where stud_id = '$stud_id' and viewer = 'Parent' ")
					  or die(mysqli_error());
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
                    </div>
                </div></div></div><br><br><br><br>
        <?php include('..//footer.php'); ?>        
		<?php include('script.php'); ?>
    </body>
</html>