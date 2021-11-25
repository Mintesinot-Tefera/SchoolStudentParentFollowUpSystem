 <?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('result_sidebar.php'); ?>
        <div class="span6" id="adduser"> 
         <div class="row-fluid">
         <div class="pull-right">
            </diV>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family: all;font-size: 18px; color: white;"><i class="icon-info-sign"></i><strong> <?php echo Htmlspecialchars($lang['Student_Result_Card']); ?> 
                                </strong></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                  
                   <h3 style="font-family: all;font-size: 25px; color: black;"> <i><STRONG><?php echo Htmlspecialchars($lang['Student_Result_Card']); ?></STRONG></i></h3><hr>
                    <form method="post" class="form-horizontal" action="resultview.php">
                                  <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family: all;font-size: 17px; color: black;"><strong><b> <?php echo Htmlspecialchars($lang['Stud_Id']); ?> </b></strong></label>
                                          <div class="controls">
                                            <input class="input focused" name="id" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Stud_Id']); ?>" required style="font-family: all;font-size: 16px; color: black;" pattern="[0-9]{1,}">
                                          </div>
                                        </div>
             <h4 style="font-family: all;font-size: 18px; color: black;"> <strong><b><i><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp; <?php echo Htmlspecialchars($lang['first_semester']); ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></b></strong></h4>
             <hr>
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="font-family: all;font-size: 17px; color: black;"><strong> <?php echo Htmlspecialchars($lang['Sabject']); ?> </strong></label>
                                 <div class="controls">
                       <select class="chzn-select" name="subject" id="focusedInput" type="text" placeholder =" <?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family: all;font-size: 16px; color: black;">
                           <option></option> 
                           <option value="Amharic">Amharic</option>
                           <option value="English">English</option> 
                           <option value="Mathematics">Mathematics</option>
                           <option value="Physics">Physics</option>   
                           <option value="Biology">Biology</option>
                           <option value="Chemistry">Chemistry</option> 
                           <option value="Geography">Geography</option>
                           <option value="History">History</option>
                           <option value="Civics">Civics</option>
                           <option value="HPE">HPE</option>
                           <option value="IT">IT</option> 
                                              </select> 
                                          </div>
                                          </div>                    
                                      </br><hr>
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="add" class="btn btn-info" style="font-family: all;font-size: 18px; color: black;"><i class="icon-plus-sign icon-large"></i><strong> <?php echo Htmlspecialchars($lang['View']); ?>  </strong></button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
         
    </div>
    <?php include('..//script.php'); ?>
     <?php include('..//footer.php'); ?>
    </body>
</html>                                      