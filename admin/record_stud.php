<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_stud.php'); ?>
				<div class="pull-right">
						</diV> 
                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info"><i class="icon-info-sign"></i><b style="color: white;font-family: all;font-style: normal;font-size: 17px;"><?php echo Htmlspecialchars($lang['Students_Listadmin']); ?>  </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span16">
								<form action="delete_users.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
										<thead style="font-family: all;color: black;">
										  <tr>
											<th></th>
											<th><?php echo Htmlspecialchars($lang['f_name']); ?></th>
											<th><?php echo Htmlspecialchars($lang['l_name']); ?></th>
											<th><?php echo Htmlspecialchars($lang['Sex']); ?></th>
											<th><?php echo Htmlspecialchars($lang['Grade']); ?></th>
											<th><?php echo Htmlspecialchars($lang['sectionadmin']); ?></th>
											<th><?php echo Htmlspecialchars($lang['Date']); ?></th>
										   </tr>
										</thead>
										<tbody style="font-family: all; ">
										
										
										
										
					
										
										
										
										
													<?php
													$user_query = mysqli_query($link,"select * from Students order by grade asc")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['stud_id'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												
												<td><?php echo $row['fname']; ?></td> 
											    <td><?php echo $row['lname']; ?> </td>
											    <td><?php echo $row['sex']; ?> </td>
												<td><?php echo $row['grade']; ?></td>
												<td><?php echo $row['section']; ?></td>
												<td><?php echo $row['Date']; ?></td>
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div></div></div>
        <?php include('footer.php'); ?>        
		<?php include('script.php'); ?>
    </body>
</html>