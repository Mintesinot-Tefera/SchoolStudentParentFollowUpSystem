<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_teacher.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_user_formc.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family: all;"><i class="icon-info-sign"></i><b><strong>  <?php echo Htmlspecialchars($lang['Teachers_To_Course']); ?> </strong></b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_userc.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead style="font-family: all;color: black;">
										  <tr>
											<th></th>
                                            <th><?php echo Htmlspecialchars($lang['nameadmin']); ?> </th>
                                            <th><?php echo Htmlspecialchars($lang['Grade']); ?> </th>
                                            <th><?php echo Htmlspecialchars($lang['Sabject']); ?> </th>
                                            <th><?php echo Htmlspecialchars($lang['Date']); ?></th>
                                            <th><?php echo Htmlspecialchars($lang['update']); ?> </th>
										   </tr>
										</thead>
										<tbody style="font-family: all;color: black;">
                                                    <?php
                                          $user_query = mysqli_query($link,"select * from teacher_to_course")or die(mysqli_error());
                                             while($row = mysqli_fetch_array($user_query)){
                                                  $id = $row['id'];
                                                    ?>
												<tr>
												<td width="30">
											<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
											    <td><?php echo $row['teacher']; ?> </td> 
                                                <td><?php echo $row['grade']; ?></td> 
                                                <td><?php echo $row['subject']; ?></td>
                                                <td><?php echo $row['Date']; ?> </td>
												<td width="40">
												<a href="edit_userc.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
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
                </div>
		<?php include('..//footer.php'); ?>
        <?php include('script.php'); ?>
    </body>
</html>