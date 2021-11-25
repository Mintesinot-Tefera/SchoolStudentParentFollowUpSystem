     <div class="span3" id="sidebar">
        <img id="avatar" class="img-circle" src="<?php echo $row['location']; ?>">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li > <a href="home.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-home"></i><b><strong>   <?php echo Htmlspecialchars($lang['home']); ?></strong></b></a> </li> 
						<li>
                        <a href="admin_user.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-user "></i><b><strong>  <?php echo Htmlspecialchars($lang['userr']); ?></strong></b></a></li>
						
                        <li>
                        <a href="time.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-calendar "></i><b><strong>  <?php echo Htmlspecialchars($lang['addcalandar']); ?> </strong></b> </a>
                        </li>                        
                        <li>
                        <a href="teacher_class.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-star "></i><b><strong>   <?php echo Htmlspecialchars($lang['assignteacher']); ?> </strong></b> </a>
                        </li>
                        <li> 
                        <a href="teacher_course.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-star-empty "></i><b><strong>   <?php echo Htmlspecialchars($lang['assigncourse']); ?></strong></b> </a>
                        </li>
                         <li>
                            <a href="reportnews.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-plus"></i><b>	<?php echo Htmlspecialchars($lang['postnews']); ?></b> </a>
                        </li>
						
						
                       
                    </ul>
                </div>