<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_assesment.php'); ?> 
				<div class="span8" id="adduser">	   			
				</div> 
                <div class="span8" id=""> 
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="font-family: all;"><i class="icon-info-sign"></i> <?php echo Htmlspecialchars($lang['Students_Assesment_Result']); ?></div> 
                            </div>
                            <div class="block-content collapse in">
                                <div class="span16">
								<form method="post" action="viewassesment.php">
  									<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
										<thead style="font-family: all;color: black;">
										  <tr>
											<th></th>
					            <th><?php echo Htmlspecialchars($lang['Stud_ID']); ?></th> 
                      <th><?php echo Htmlspecialchars($lang['Sabject']); ?></th>
                      <th><?php echo Htmlspecialchars($lang['Ass_Name']); ?></th> 
                      <th><?php echo Htmlspecialchars($lang['Result']); ?></th>
                      <th><?php echo Htmlspecialchars($lang['Max_Mark']); ?></th>
                      <th><?php echo Htmlspecialchars($lang['Date']); ?></th>
										   </tr>
										</thead>
										<tbody style="font-family: all;color: black;">
								     <?php

                    $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                       $row1 = mysqli_fetch_array($query); 
                       $teacher = $row1['username'];
                    
                    $query = mysqli_query($link,"select * from students where stud_id = '$teacher' ")
                      or die(mysqli_error());
                      $count = mysqli_num_rows($query);
                        $row = mysqli_fetch_array($query);
                           $id1 = $row['stud_id'];

                 $query111 = mysqli_query($link,"SELECT * FROM time1") or die(mysqli_error());
                 $row12 = mysqli_fetch_array($query111);

                  $start = $row12['aas']; 
                  $end = $row12['aae']; 
                  $current= date('Y-m-d');       
  
                        if ($teacher!=$id1){ ?>
                             <script>
                      alert('Student Does Not Exist');
                      window.location = "viewassesment.php";
                         </script>
                          <?php
                               }
                    elseif ($current < $start) {
                      ?>
                       <script>
                         alert('Student Assessment Date Not Reached');
                         window.location = "viewassesment.php";
                       </script>
                       <?php
                     }
                    elseif ($current > $end) {
                      ?>
                       <script>
                         alert('Sorry, Student Assessment Date Passed');
                         window.location = "viewassesment.php";
                       </script>
                       <?php
                     }
                             else{
                      $user_query = mysqli_query($link,"select * from assessment where Stud_Id = '$teacher'")or die(mysqli_error());
                          while($row = mysqli_fetch_array($user_query)){
                          $id = $row['id'];
                          ?>
									
												<tr> 
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												
												  <td><?php echo $row['Stud_Id']; ?></td> 
                          <td><?php echo $row['Subject']; ?> </td>
                          <td><?php echo $row['Ass_Name']; ?> </td>
                          <td><?php echo $row['Result']; ?></td>
                          <td><?php echo $row['Max_Mark']; ?></td>
                          <td><?php echo $row['date']; ?></td>
												</tr>
												<?php } }?>
										</tbody>
									</table>
                  <center> <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="back" class="btn btn-info" style="color: blue;font-family: all;"><i class="icon-plus-sign" ></i><b> <?php echo Htmlspecialchars($lang['back']); ?> </b></button>
                                          </div>
                                        </div></center>
                                     </form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div></div>
              </div></body>
    <?php include('..//footer.php'); ?>          
		<?php include('script.php'); ?>
    </body>

</html>