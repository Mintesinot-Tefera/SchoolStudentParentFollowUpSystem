 <?php include('header.php'); ?>
<?php 
include'Language/lang.php';
 ?>
    <body id="class_div" style="background-color: currentColor no-repeat center center fixed;">
		<div class="navbar navbar-fixed-top navbar-inverse">
           <div class="navbar-inner">
               <div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
                  <a class="brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-family: all;font-size: 25px;"><?php echo Htmlspecialchars($lang['abouttile']); ?></b> </a>
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
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a href="index.php"><i class="icon-arrow-left"></i> <?php echo Htmlspecialchars($lang['back']); ?></a></div>
								</div>
                <div class="block-content collapse in">
							<center> <h3 style="font-family: all; color: black;"><b><strong> <?php echo Htmlspecialchars($lang['About_Our_System']); ?> </strong></b></h3></center>
							<hr>
              <div class="span10">
							<h4 style="font-family: all;font-size: 17px;color: black;">
						        <em>
                <p> <h4><?php echo Htmlspecialchars($lang['Users_of_The_System']); ?></h4></p> <hr>
<p><?php echo Htmlspecialchars($lang['Majorly']); ?>,<br>
   <?php echo Htmlspecialchars($lang['Directo']); ?>, <?php echo Htmlspecialchars($lang['record']); ?>,<?php echo Htmlspecialchars($lang['student']); ?>, <?php echo Htmlspecialchars($lang['parent']); ?> ,<?php echo Htmlspecialchars($lang['homeroom']); ?>and <?php echo Htmlspecialchars($lang['subject']); ?>.<br/>
1. <?php echo Htmlspecialchars($lang['first_page']); ?><br/>
2. <?php echo Htmlspecialchars($lang['details_about']); ?><br/>
3. <?php echo Htmlspecialchars($lang['see_information']); ?><br/>
4. <?php echo Htmlspecialchars($lang['need_to_fill']); ?><br/>
5. <?php echo Htmlspecialchars($lang['should_be_click']); ?><br/> 
6.  <?php echo Htmlspecialchars($lang['create_account_but']); ?><br/>
    
 <?php echo Htmlspecialchars($lang['can_access_easily']); ?>
                      </p>			
                    </em>
									</h4>
								</div>
               </div>
              </div></div>
          <!-- /block -->
          </div></div><br><br><br>
    <?php include('footer.php'); ?>
		<?php include('script.php'); ?>
    </body> 
</html>