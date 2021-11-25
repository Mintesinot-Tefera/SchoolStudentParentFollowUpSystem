<?php  include('header.php'); ?>
<?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>
<script type="text/javascript">

function preventBack(){
    window.history.forward();
}
    setTimeout("preventBack()",0);
    window.onunload=function(){null};



</script>



    <body>
     
		<?php include('navbar.php') ?>  
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                    
                <!--/span--> 
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
						
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><b style="font-family: all;font-size: 18px;color: black;"><strong><?php echo Htmlspecialchars($lang['datamember']); ?></strong></b></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
			              <?php 
								$query_reg_student = mysqli_query($link,"select * from users where type = 'student' ")or die(mysqli_error());
								$count_reg_student = mysqli_num_rows($query_reg_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_student; ?>"><?php echo $count_reg_student; ?></div>
                                    <div class="chart-bottom-heading" style="color:#08367f"><strong><?php echo Htmlspecialchars($lang['student']); ?></strong>

                                    </div>
                                </div>
								<?php 
								$query_reg_student = mysqli_query($link,"select * from users where type = 'administrator' ")or die(mysqli_error());
								$count_reg_student = mysqli_num_rows($query_reg_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_student; ?>"><?php echo $count_reg_student; ?></div>
                                    <div class="chart-bottom-heading" style="color:#08367f"><strong><?php echo Htmlspecialchars($lang['Directo']); ?></strong>

                                    </div>
                                </div>
									
                              
								 <?php 
								$query_reg_student = mysqli_query($link,"select * from users where type = 'record_officer' ")or die(mysqli_error());
								$count_reg_student = mysqli_num_rows($query_reg_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_student; ?>"><?php echo $count_reg_student; ?></div>
                                    <div class="chart-bottom-heading" style="color:#08367f"><strong><?php echo Htmlspecialchars($lang['record']); ?></strong>

                                    </div>
                                </div>
								
						
							<?php 
								$query_reg_student = mysqli_query($link,"select * from users where type = 'parent' ")or die(mysqli_error());
								$count_reg_student = mysqli_num_rows($query_reg_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_student; ?>"><?php echo $count_reg_student; ?></div>
                                    <div class="chart-bottom-heading" style="color:#08367f"><strong><?php echo Htmlspecialchars($lang['parent']); ?></strong>

                                    </div>
                                </div>
								 <?php 
								$query_reg_student = mysqli_query($link,"select * from users where type = 'subject_teacher' ")or die(mysqli_error());
								$count_reg_student = mysqli_num_rows($query_reg_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_student; ?>"><?php echo $count_reg_student; ?></div>
                                    <div class="chart-bottom-heading" style="color:#08367f"><strong><?php echo Htmlspecialchars($lang['subject']); ?></strong>

                                    </div>
                                </div>
								
								<?php 
								$query_reg_student = mysqli_query($link,"select * from users where type = 'home_room_teacher' ")or die(mysqli_error());
								$count_reg_student = mysqli_num_rows($query_reg_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_student; ?>"><?php echo $count_reg_student; ?></div>
                                    <div class="chart-bottom-heading" style="color:#08367f"><strong><?php echo Htmlspecialchars($lang['homeroom']); ?></strong>
                                    </div>
                                </div>                       
                                </div>								
								
        </div>
	<?php include('script.php'); ?>
</div>
</div>
</div>
   
        <?php include('footer.php'); ?>
</html>