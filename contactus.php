 <?php include('admin/header.php'); ?>
<?php 
include'Language/lang.php';
 ?>
    <body id="class_div">
    <div class="navbar navbar-fixed-top navbar-inverse">
           <div class="navbar-inner">
               <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
               <a class="brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-family: all;font-size: 25px;"><?php include('navbar.php'); ?></b> </a>
              <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                </ul>
              </div>
                   <!--/.nav-collapse -->
               </div>
           </div>
   </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block" style="width:55%; margin-top:60px;margin-left:340px;">
                <div class="navbar navbar-inner block-header">
                  <div id="" class="muted pull-right"><a href="index.php"><i class="icon-arrow-left"></i><?php echo Htmlspecialchars($lang['back']); ?></a></div>
                </div>
                            <div class="block-content collapse in">
       <center>  <h3 style="font-family: all;color: black;"><b><strong> <?php echo Htmlspecialchars($lang['contactt']); ?> </strong></b></h3></center>                     
              <h4 style="font-family: all;color: black;"><b><strong> <?php echo Htmlspecialchars($lang['co']); ?></strong></b></h4>
                          <hr>
                          <div class="span10">
                            <form method="post" class="form-horizontal">
                   <div class="control-group">
                  <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                    <b><strong><p style="font-family: all; color: black;font-size: 18px;"><i class="icon-home icon-large"></i><strong> <?php echo Htmlspecialchars($lang['addd']); ?></strong></p></strong></b> </label>
                                          <div class="controls">
                     <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                    <b><p style="font-family: all; color: black;font-size: 18px;"><i class="icon-home icon-large"></i><strong><?php echo Htmlspecialchars($lang['addk']); ?> </p></strong></b> </label>
                                          </div>
                                        </div> <hr>                              
                                  <div class="control-group">
                  <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                    <b><strong><p style="font-family: all; color: black;font-size: 18px;"><i class="icon-user icon-large"></i>
                    <strong><?php echo Htmlspecialchars($lang['adk']); ?> </strong></p></strong></b> </label>
                                          <div class="controls">
                                      <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                    <b><strong><p style="font-family: all; color: black;font-size: 18px;"><i class="icon-user icon-large"></i>
                    <strong> 0922596235 </strong></p></strong></b> </label>                        
                                          </div>
                                        </div><hr>
                    <div class="control-group">
                  <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                  <b><strong><p style="font-family: all; color: black;font-size: 18px;"><i class="icon-phone icon-large"></i><strong> <?php echo Htmlspecialchars($lang['lnag']); ?></strong></p></strong></b> </label>
                                          <div class="controls">
                                            <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                    <b><strong><p style="font-family: all; color: black;font-size: 18px;"><i class="icon-phone icon-large"></i><strong> 0465551647 </strong></p></strong></b> </label>
                                          </div>
                                      </div> <hr>                                                    
                                </form>
                          </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div></div><br>
              </div></div>
      <?php include('footer.php'); ?>      
    <?php include('script.php'); ?>
    </body>
</html>