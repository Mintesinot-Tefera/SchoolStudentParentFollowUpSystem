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
                        <div class="block" >
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a href="index.php"><i class="icon-arrow-left"></i> <?php echo Htmlspecialchars($lang['back']); ?></a></div>
								</div>
                            <div class="block-content collapse in">
							<h3 style="font-family: all; color: black;"> <?php echo Htmlspecialchars($lang['t']); ?> </h3>
							<hr>
                              
                                <div class="span2">
									<center>
								<img id="developers" src="image/wule.jpg" class="img-circle"><hr>
							<p style="font-family: all; color: black;"><b> <?php echo Htmlspecialchars($lang['name1']); ?></b></p> 
							<p style="font-family: all; color: black;"><b> <?php echo Htmlspecialchars($lang['address']); ?></b></p>
							<p style="font-family: all; color: black;"><b> <?php echo Htmlspecialchars($lang['email']); ?>
							</b></p>
							<p style="font-family: all; color: black;"><b> <?php echo Htmlspecialchars($lang['phone']); ?>
							</b></p>
									</center>
								</div>
                              
                                <div class="span3">
										<center>
								<img id="developers" src="image/dani.jpg" class="img-circle">
								<hr>
							<p style="font-family: all; color: black;"><b> <?php echo Htmlspecialchars($lang['name2']);?></b></p>
							<p style="font-family: all; color: black;"><b> <?php echo Htmlspecialchars($lang['address2']);?></b></p>
							<p style="font-family: all; color: black;"><b> <?php echo Htmlspecialchars($lang['email2']);?>
							 </b></p>
						   <p style="font-family: all; color: black;"><b> <?php echo Htmlspecialchars($lang['phone2']);?></b></p>
								        </center>
								</div>
                          
                                <div class="span4">
									<center>
								<img id="developers" src="image/dani.jpg" class="img-circle"> <hr>
								<p style="font-family: all; color: black;"><b> <?php echo Htmlspecialchars($lang['name3']);?></b></p>
								<p style="font-family: all; color: black;"><b> <?php echo Htmlspecialchars($lang['address3']);?></b></p>
								<p style="font-family: all; color: black;"><b> <?php echo Htmlspecialchars($lang['email3']);?></b></p>
						        <p style="font-family: all; color: black;"><b><?php echo Htmlspecialchars($lang['phone3']);?>
						        </b></p>
								</center>
								</div>
                            
                            </div>
                        </div>
                        <!-- /block -->
                    </div><br>
        <?php include('footer.php'); ?>
                </div>
		<?php include('script.php'); ?>
    </body>
</html>