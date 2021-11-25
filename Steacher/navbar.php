    <div class="navbar navbar-fixed-top navbar-inverse">
           <div class="navbar-inner">
               <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                   <a class="brand" href="#">&nbsp;&nbsp;&nbsp;<b style="font-family: all;font-size: 25px;"> <?php echo Htmlspecialchars($lang['Welcome_To']); ?></b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="font-family: all;font-size: 25px;">Parent Student Follow-Up System</i> </a>
                   
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
						<?php $query= mysqli_query($link,"select * from users where user_id = '$session_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
						?>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['firstname']." ".$row['lastname'];  ?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
							 <li class="divider"></li>
                            <li>
                           <a href="change_password_teacher.php"><i class="icon-circle"></i><b style="font-family: all;color: black;"><?php echo Htmlspecialchars($lang['Change_Password']); ?> </b></a>
                           <a tabindex="-1" href="#myModal" data-toggle="modal"><i class="icon-picture"></i><b style="font-family: all;color: black;"><?php echo Htmlspecialchars($lang['Change_Profile']); ?> </b> 
                            </a></li>
                                      <li>
                            <a href="home.php?lang=en"><i class="icon-circle"></i><b style="font-family: all;color: black;"> English</b> </a>
                            </li>
                                     <li>
                            <a href="home.php?lang=it"><i class="icon-circle"></i><b style="font-family: all;color: black;"> አማርኛ</b> </a>
                                    </li>
                                    
                                    
                                    <li>
                                    
                                    
                                    
                                    <li>
                                    
                    
                              <a tabindex="-1" href="..//logout.php"><i class="icon-signout"></i>&nbsp;<b style="font-family: all;color: black;"><?php echo Htmlspecialchars($lang['logout']); ?></b></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
           
                </div>
            </div>
        </div>
       <?php include('profile_modal_teacher.php'); ?> 