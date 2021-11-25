 <?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_dashboard_teacher.php'); ?>
        <div class="span6" id="adduser">
         <div class="row-fluid">
         <div class="pull-right"> 
            </diV>
                        <!-- block --> 
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family: all;font-size: 18px; color: white;"><i class="icon-info-sign"></i><strong> <?php echo Htmlspecialchars($lang['Add_Result_Assesment']); ?> 
                                </strong></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                  
                   <h3 style="font-family: all;font-size: 25px; color: black;"> <i><STRONG><?php echo Htmlspecialchars($lang['Student_Result_Form']); ?></STRONG></i></h3><hr>
                    <form method="post" class="form-horizontal" action="result1.php">
                                  <div class="control-group">
                    <label class="control-label" for="inputPassword" style="font-family: all;font-size: 17px; color: black;"><strong><b> <?php echo Htmlspecialchars($lang['Stud_Id']); ?> </b></strong></label>
                                          <div class="controls">
                                            <input class="input focused" name="id" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Stud_Id']); ?>" required style="font-family: all;font-size: 16px; color: black;" pattern="[0-9]{1,}">
                                          </div>
                                        </div>
           <!--  <h4 style="font-family: all;font-size: 18px; color: black;"> <strong><b><i><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;Second Semester &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></b></strong></h4>
             <hr> -->
                      <div class="control-group">
                      <label class="control-label" for="inputPassword" style="font-family: all;font-size: 17px; color: black;"><strong> <?php echo Htmlspecialchars($lang['Sabject']); ?> </strong></label>
                                 <div class="controls">
                       <select class="chzn-select" name="subject" id="focusedInput" type="text" placeholder ="<?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family: all;font-size: 16px; color: black;">
                           <option></option> 
                           <option value="Amharic"> <?php echo Htmlspecialchars($lang['Amharic']); ?> </option>
                           <option value="English"> <?php echo Htmlspecialchars($lang['English']); ?> </option> 
                           <option value="Mathematics"> <?php echo Htmlspecialchars($lang['Mathematics']); ?> </option>
                           <option value="Physics"><?php echo Htmlspecialchars($lang['Physics']); ?> </option> 
                           <option value="Biology"> <?php echo Htmlspecialchars($lang['Biology']); ?> </option>
                           <option value="Chemistry"> <?php echo Htmlspecialchars($lang['Chemistry']); ?> </option> 
                           <option value="Geography"> <?php echo Htmlspecialchars($lang['Geography']); ?> </option>
                           <option value="History"> <?php echo Htmlspecialchars($lang['History']); ?> </option>
                           <option value="Civics"> <?php echo Htmlspecialchars($lang['Civics']); ?> </option>
                           <option value="HPE"> <?php echo Htmlspecialchars($lang['HPE']); ?> </option>
                           <option value="IT"> <?php echo Htmlspecialchars($lang['IT']); ?> </option> 
                                              </select> 
                                          </div>
                                        </div>                     
                                      </br><hr>
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="add" class="btn btn-info" style="font-family: all;font-size: 18px; color: black;"><i class="icon-plus-sign"></i><strong> <?php echo Htmlspecialchars($lang['select']); ?> </strong></button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                   <?php
            if (isset($_POST['add'])){
              
              $id = $_POST['id'];
              $_SESSION['id']=$id; 

              $subject = $_POST['subject']; 
              $_SESSION['subject']=$subject;
              
            }
              ?>                 
    </div></div></div></div>
    <?php include('..//footer.php'); ?>
    <?php include('..//script.php'); ?>
    </body>
</html>                                      