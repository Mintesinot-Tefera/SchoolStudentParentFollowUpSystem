<div class="span3" id="sidebar">
    <img id="avatar" class="img-circle" src="<?php echo $row['location']; ?>">
            <?php include('count.php'); ?>
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li> <a href="teacher_index.php" style="font-size: 17px;font-family: all;"><i class="icon-chevron-right"></i><i class="icon-home" ></i><b><strong>
                          <?php echo Htmlspecialchars($lang['home']); ?>  
                        </strong></b></a> </li>
                           <li> 
                            <a href="record_stud.php"style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-user"></i><b><strong>Students</strong></b></a>  
                        </li>
                           <li>
                            <a href="Attendance.php"style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-file"></i><b><strong><?php echo Htmlspecialchars($lang['Add_Attendance']); ?></strong></b></a>  
                        </li>   
                        <li class="active">
                            <a href="view_attendance.php"style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-file"></i><b><strong><?php echo Htmlspecialchars($lang['View_Attendance']); ?></strong></b></a>  
                          </li>
                    <li>
                    <a href="card.php"style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-book"></i><b><strong><?php echo Htmlspecialchars($lang['Report_Card']); ?></strong>
                    </b></a>  
                    </li>
                    <li>                  
                   <li>
                        <a href="comment.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-comments"></i><b><strong><?php echo Htmlspecialchars($lang['Give_Comment']); ?></strong></b> </a>  
                        </li> 
                                                <li>
                        <a href="view_comment.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-comments"></i><b><strong><?php echo Htmlspecialchars($lang['View_Comment']); ?></strong></b> </a>  
                        </li>
                              <?php
      $message_query = mysqli_query($link,"select * from message where reciever_id = '$session_id' and message_status != 'read' ")or die(mysqli_error());
      $count_message = mysqli_num_rows($message_query);
      ?> 
                        <li>
                        <a href="teacher_message.php" style="font-family: all;font-size: 17px;"><i class="icon-chevron-right"></i><i class="icon-envelope"></i><b>
                          <strong><?php echo Htmlspecialchars($lang['Message']); ?></strong></b> 
 <?php if($count_message == '0'){
        }else{ ?>
          <span class="badge badge-important"><?php echo $count_message; ?></span>
        <?php } ?>
      </a>
                        </a>  
                        </li>   
                    </ul>
                </div>