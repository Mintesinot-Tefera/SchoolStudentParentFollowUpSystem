<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_teacher.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_user_formt.php'); ?>		   			
				</div>
                <div class="span6" id="">  
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="color: white; font-family: all;font-style: bold;"><i class="icon-info-sign"></i><b><strong>
                              	 Parents List
                              </strong></b></div>
                            </div> 
                            <div class="block-content collapse in">
                                <div class="span16">
								<form action="delete_userst.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
									<a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>

									<?php include('modal_delete.php'); ?>
										<thead style="font-family: all;color: black;">
										  <tr>
											<th></th>
										    <th>Stud_Id</th>
											<th>p_Id</th>
											<th>F_Name</th>
											<th>L_Name</th>
											<th>Sex</th>
											<th>Age</th>
											<th>phone</th>
											<th>Update</th>
											
										   </tr>
										</thead>
										<tbody style="font-family: all;color: black;">
													<?php
													$user_query = mysqli_query($link,"select * from teachers")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['stud_id'];
													?>
									
												<tr>
												<td width="30">
											<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
											    <td><?php echo $row['stud_id']; ?></td>           
                                                <td><?php echo $row['stuff_id']; ?></td>
												<td><?php echo $row['fname']; ?></td> 
											    <td><?php echo $row['lname']; ?> </td>
											    <td><?php echo $row['sex']; ?> </td>
												<td><?php echo $row['age']; ?></td>					
												<td><?php echo $row['phone']; ?></td>
												<td width="40">
												<a href="edit_usert.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
												</td>
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
                </div></div>
                <?php include('..//footer.php'); ?>
		<?php include('script.php'); ?>
    </body>
</html>