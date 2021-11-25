<div class="span3" id="sidebar">
    <img id="avatar" class="img-circle" src="<?php echo $row['location']; ?>">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li> <a href="home.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-home"></i><b><?php echo Htmlspecialchars($lang['home']); ?></b> </a> </li>
                        <li>
                            <a href="section.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-ok"></i><b><?php echo Htmlspecialchars($lang['Set_Section']); ?></b> </a>
                        </li>
						<li>
                            <a href="record_stud.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-user"></i><b> <?php echo Htmlspecialchars($lang['Students']); ?></b> </a>  
                        </li>
                        <li>
                        <a href="record_teacher.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-user"></i><b><?php echo Htmlspecialchars($lang['Parents']); ?></b> </a>
                        </li>
                        <li>
                            <a href="course.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-plus"></i><b><?php echo Htmlspecialchars($lang['Add_Course']); ?></b> </a>
                        </li>                        
                       
                        <li>
                            <a href="report_view.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-book"></i><b><?php echo Htmlspecialchars($lang['View_News']); ?></b></a>
                        </li>
                        </li>
                       </ul>
                    </li> 	
                    </ul>
                </div>