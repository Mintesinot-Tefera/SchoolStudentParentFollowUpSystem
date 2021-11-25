<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid"> 
            <div class="row-fluid">
				<?php include('sidebar_teacher.php'); ?>
				<div class="pull-right"></diV> 
                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="color: white;font-family: all;font-style: normal;font-size: 17px;"><i class="icon-info-sign"></i><strong>  <?php echo Htmlspecialchars($lang['Teachers_Listadmin']); ?></strong> </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span16">
								<form action="delete_userst.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
										<thead style="font-family: all;color: black;">
										  <tr>
											<th></th>
											<th><?php echo Htmlspecialchars($lang['f_name']); ?></th>
											<th><?php echo Htmlspecialchars($lang['l_name']); ?></th>
											<th><?php echo Htmlspecialchars($lang['Sex']); ?></th>
											<th><?php echo Htmlspecialchars($lang['Age']); ?></th>
											<th><?php echo Htmlspecialchars($lang['Grade']); ?></th>
											<th><?php echo Htmlspecialchars($lang['update']); ?></th>
										   </tr>
										</thead>
										<tbody style="font-family: all;color: black;">
										<?php
										$user_query = mysqli_query($link,"select * from teachers")or die(mysqli_error());
										while($row = mysqli_fetch_array($user_query)){
													$id = $row['stuff_id'];
										?>
										       <tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['fname']; ?></td> 
											    <td><?php echo $row['lname']; ?> </td>
											    <td><?php echo $row['sex']; ?> </td>
											    <td><?php echo $row['age']; ?></td>
												<td><?php echo $row['grade']; ?></td>
											<td width="70">
												<a href="record_teacher.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
												</td>
												</tr>
												<?php } ?>
									    </tbody></table>
									</form>
                                </div></div></div>
                        <!-- /block -->
                    </div>
                </div>
		<?php include('script.php'); ?>
    </body>
</html>