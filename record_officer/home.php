<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>
    <body style="background-color: currentColor no-repeat center center fixed;">
		<?php include('navbar.php') ?>
        <div class="container-fluid"> 
            <div class="row-fluid">
					<?php include('sidebar_dashboard_officer.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"style="font-family: all;font-size: 19px;color: black" ><b><?php echo Htmlspecialchars($lang['Data_Numbers']); ?></b></div><br>
                                <div class="muted pull-left" style="font-family: all;font-size: 19px;color: black;"><b><?php echo Htmlspecialchars($lang['Grade_9']); ?> <sup><?php echo Htmlspecialchars($lang['th']); ?></sup> - 10<sup><?php echo Htmlspecialchars($lang['th']); ?></sup> <?php echo Htmlspecialchars($lang['Students_and_Teachers_List']); ?> 
                                </b></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
			              <?php 
								$query_reg_student = mysqli_query($link,"select * from students where grade = 9  ")or die(mysqli_error());
								$count_reg_student = mysqli_num_rows($query_reg_student);
								?>
								
                                <div class="span3"> 
                                    <div class="chart" data-percent="<?php echo $count_reg_student; ?>"><?php echo $count_reg_student; ?></div>
                                    <div class="chart-bottom-heading" style="font-family: all;color:#08367f"><strong><?php echo Htmlspecialchars($lang['Grade_9']); ?><sup><?php echo Htmlspecialchars($lang['th']); ?></sup><?php echo Htmlspecialchars($lang['Students']); ?> </strong>

                                    </div>
                                </div>
								<?php 
								$query_reg_student = mysqli_query($link,"select * from students where grade = 10 ")or die(mysqli_error());
								$count_reg_student = mysqli_num_rows($query_reg_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_student; ?>"><?php echo $count_reg_student; ?></div>
                                    <div class="chart-bottom-heading" style="font-family: all;color:#08367f"><strong><?php echo Htmlspecialchars($lang['Grade_10']); ?><sup><?php echo Htmlspecialchars($lang['th']); ?></sup> <?php echo Htmlspecialchars($lang['Students']); ?> </strong>

                                    </div>
                                </div>
									
                                <?php 
								$query_reg_student = mysqli_query($link,"select * from students where grade =9 ")or die(mysqli_error());
								$count_reg_student = mysqli_num_rows($query_reg_student);
								?>
								
                              
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_student; ?>"><?php echo $count_reg_student; ?></div>
                                    <div class="chart-bottom-heading" style="font-family: all;color:#08367f"><strong><?php echo Htmlspecialchars($lang['Grade_9']); ?><sup><?php echo Htmlspecialchars($lang['th']); ?></sup> <?php echo Htmlspecialchars($lang['Teachers']); ?>  </strong>
                                    </div>
                                </div>				
								 <?php 
								$query_reg_student = mysqli_query($link,"select * from teacher_to_class where
                                     grade = 10 ")or die(mysqli_error());
								$count_reg_student = mysqli_num_rows($query_reg_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_student; ?>"><?php echo $count_reg_student; ?></div>
                                    <div class="chart-bottom-heading" style="font-family: all;color:#08367f"><strong><?php echo Htmlspecialchars($lang['Grade_10']); ?><sup><?php echo Htmlspecialchars($lang['th']); ?></sup><?php echo Htmlspecialchars($lang['Teachers']); ?> </strong>

                                    </div>
                                </div>
								
								
        </div>
	<?php include('script.php'); ?>
</div>
</div>
</div>
        <?php include('footer.php'); ?>
    </body>
</html>