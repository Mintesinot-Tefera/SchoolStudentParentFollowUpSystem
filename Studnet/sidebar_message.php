<div class="span3" id="sidebar">
    <img id="avatar" class="img-circle" src="<?php echo $row['location']; ?>">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li> <a href="home.php" style="font-size: 17px;font-family: all;"><i class="icon-chevron-right"></i><i class="icon-home" ></i><b><strong>
                         <?php echo Htmlspecialchars($lang['home']); ?>
                        </strong></b></a> </li> 
                         <li>
                            <a href="view_attendance.php"style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-file"></i><b><strong> <?php echo Htmlspecialchars($lang['View_Attendance']); ?></strong></b></a>  
                        </li>                                                  
                        <li>  
                            <a href="viewassesment.php"style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i><b><strong><?php echo Htmlspecialchars($lang['View_Assesment']); ?></strong></b></a>  
                         </li>                        
                         <li>
                            <a href="card.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-book"></i><b><strong> <?php echo Htmlspecialchars($lang['View_Report_Card']); ?></strong></b></a>
                        </li> 
                        <li>
                            <a href="view_comment.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-comment"></i><b><strong>   <?php echo Htmlspecialchars($lang['View_Comment']); ?> </strong></b></a>
                        </li> 
                        
                        
                   
             <?php
       $message_query = mysqli_query($link,"select * from message where 
        reciever_id = '$session_id' and message_status != 'read' ")
       or die(mysqli_error());
      $count_message = mysqli_num_rows($message_query);
      ?>                        
                        <li  class="active">
            <a href="student_message.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-envelope"></i><b>
                          <strong><?php echo Htmlspecialchars($lang['Send_messages']); ?></strong></b> 
             <?php if($count_message == '0'){
               }
               else{ ?>
          <span class="badge badge-important"><?php echo $count_message; ?></span>
             <?php } ?>
                  </a>
                  </a>
                  </li>  
                  </ul>
                  </div>