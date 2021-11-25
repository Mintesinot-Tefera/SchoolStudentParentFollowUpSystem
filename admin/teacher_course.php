<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>
    <body>
        <?php include('navbar.php'); ?> 
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include('sidebar_teacher.php'); ?>
                <div class="pull-right">
                <a href="add_course.php" id="print" class="btn btn-success" style="font-family:all;color: white;"><i class="icon-plus">
                </i><b>  <?php echo Htmlspecialchars($lang['assigncourse']); ?> </b></a>
                        </diV>  
                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="font-family:all;color: white;"><i class="icon-info-sign"></i><b>  <?php echo Htmlspecialchars($lang['Teachers_To_Course']); ?> </b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span16">
                                <form action="delete_userc.php" method="post">
                                    <table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
                                    <a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>

                                    <?php include('modal_delete.php'); ?>
                                        <thead style="color: black;font-family: all;">
                                          <tr>
                                            <th></th>
                                            <th> <?php echo Htmlspecialchars($lang['nameadmin']); ?></th>
                                            <th><?php echo Htmlspecialchars($lang['Grade']); ?></th>
                                            <th><?php echo Htmlspecialchars($lang['Sabject']); ?></th>
                                            <th><?php echo Htmlspecialchars($lang['Date']); ?></th>
                                            <th><?php echo Htmlspecialchars($lang['update']); ?></th>
                                           </tr>
                                        </thead>
                                        <tbody style="font-family: all;">
                                                    <?php
                                                    $user_query = mysqli_query($link,"select * from teacher_to_course")or die(mysqli_error());
                                                    while($row = mysqli_fetch_array($user_query)){
                                                    $id = $row['id'];
                                                    ?> 
                                                <tr>
                                                <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                </td>
                                                <td><?php echo $row['teacher']; ?> </td> 
                                                <td><?php echo $row['grade']; ?></td> 
                                                <td><?php echo $row['subject']; ?></td>
                                                <td><?php echo $row['Date']; ?> </td>                                          
                                               <td width="70">
                                                <a href="edit_userc.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                                </td>
                                                </tr>
                                                <?php } ?>
                                        </tbody>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div></div></div>
         <?php include('..//footer.php'); ?>         
        <?php include('script.php'); ?>
    </body>
</html>