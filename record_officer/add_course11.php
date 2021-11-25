<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
		<?php include('sidebar_school.php'); ?>
				<div class="span6" id="adduser"> 
			   <div class="row-fluid"> 
			   <div class="pull-right">
						</diV>
                   <br><br>
                   <br><br>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family:all;color: white;"><i class="icon-info-sign"></i><b><?php echo Htmlspecialchars($lang['Add Course']); ?>  </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" class="form-horizontal" action="add_course111.php">   
                                  <div class="control-group">
                        <label class="control-label" for="inputPassword" 
                        style="font-family:all;color: black;"> <b>  <?php echo Htmlspecialchars($lang['Course_Name ']); ?> Type :</b></label>
                                <div class="controls">
                       <select class="chzn-select" name="type" id="focusedInput" type="text" placeholder ="-select-" required style="font-family:all;color: black;">
                           <option></option>
                           <option value="Natural" style="font-family:all;color: black;">Natural
                           </option>
                           <option value="Social" style="font-family:all;color: black;">Social
                           </option>          
                                              </select> 
                                          </div>
                                        </div>
                                      </br><hr>
										<input class="input focused" name="signature" id="focusedInput" type="hidden">
										               	<div class="control-group">
                                          <div class="controls">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="add" class="btn btn-info" style="font-family:all;color: white;"><i class="icon-plus-sign"></i>
                        <b> Register </b> </button>

                                          </div>
                                      </div>
                                   </form>
								              </div>
                            </div>
                        </div>
                        <!-- /block -->
                </div>
				</div>
    <?php include('..//footer.php'); ?>    
		<?php include('..//script.php'); ?>
    </body>
</html>
