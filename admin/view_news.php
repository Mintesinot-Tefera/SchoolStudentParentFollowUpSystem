<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>
    <body> 
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_news.php'); ?>
                <div class="span8" id="">
                     <div class="row-fluid"> 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="color: white;font-family: all;"><i class="icon-info-sign"></i><strong> News List </strong></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span16">
								<form method="post">
  								<table cellpadding="0" cellspacing="0" border="1" 
  								  class="table" id="example">
										<thead style="color: black;font-family: all;">
										  <tr>
											<th></th>
											<th>Title</th>
											<th>News</th>
											<th>Date</th>
										   </tr>
										</thead> 
										<tbody style="color: black;font-family: all;">
										<?php
                                                $Today = date('y:m:d');    		
									$user_query = mysqli_query($link,"select * from news where 
										date = '$Today' ")
											or die(mysql_error());

										  while($row = mysqli_fetch_array($user_query)){
													$id = $row['id'];
													?>
												<tr>
												<td width="30">
											<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td> 
											    <td><?php echo $row['title']; ?> </td>
											    <td><?php echo $row['news']; ?> </td>
												<td><?php echo $row['date']; ?></td>
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