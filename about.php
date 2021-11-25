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
                  <a class="brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-family: all;font-size: 25px;"><span class="lang" key="wellcome"><?php include('navbar.php'); ?></span></b> </a>
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
									<div id="" class="muted pull-right"><a href="index.php"><i class="icon-arrow-left"></i> <span class="lang" key="back"><?php echo Htmlspecialchars($lang['back']); ?></span></a></div>
								</div>
                            <div class="block-content collapse in">
							<center> <h4 style="font-family: all; color: black;"><b><strong><span class="logo" style=""> <?php echo Htmlspecialchars($lang['Sile']); ?></span> </strong></b></h4></center>
							<hr>
                                <div class="span10">
							<h4 style="font-family:all;color: #000; font-size:20px;">
						<em>
	<span class="lang" key="p"><?php echo Htmlspecialchars($lang['durame']); ?>	
                                   </span></em>
										</h4>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div><br><br><br><br><br>
                    <?php include('footer.php'); ?>
                </div>
		<?php include('script.php'); ?>
    </body> 
</html>