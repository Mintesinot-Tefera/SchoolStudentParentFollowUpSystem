 <?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid"> 
        <div class="row-fluid"> 
    <?php include('sidebar_teacher.php'); ?> 
        <div class="span8" id="adduser"> 
         <div class="row-fluid"> 
         <div class="pull-right">  
            </diV>  
                        <!-- block -->  
                           <div class="row-fluid"> 
                        <!-- block -->
                        <br>
                        <br><br>
                        <br>
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info" style="font-family: all;font-size: 18px; color: white;"><i class="icon-info-sign"></i><strong><?php echo Htmlspecialchars($lang['Select_Registration_Type']); ?>  
                                </strong></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

                  <center>  <a href="parent1.php"><h5 style="font-family: all;font-size: 25px; color: black;"><STRONG><?php echo Htmlspecialchars($lang['Existing']); ?>  </STRONG></h5></a></center>
                     <hr>
                   <center>  <a href="add_teacher.php"><h5 style="font-family: all;font-size: 25px; color: black;"><STRONG><?php echo Htmlspecialchars($lang['New']); ?> </STRONG></h5></a></center>
                     <hr>
                              </div>
                            </div>
                          </div>         
    </div></div></div></div>
    <?php include('..//script.php'); ?>
    <?php include('..//footer.php'); ?>
    </body>
</html>                                    