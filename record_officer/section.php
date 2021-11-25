<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
        <?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include('sidebar_tran.php'); ?>
                <div class="pull-right">
                <a href="add_section.php" id="print" class="btn btn-success" style="font-family:all;color: white;"><i class="icon-plus">
                </i><b> <?php echo Htmlspecialchars($lang['Set_Section']); ?>  </b></a>
                        </diV>  
                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div class="alert alert-info" style="font-family:all;color: white;"><i class="icon-info-sign"></i><b> <?php echo Htmlspecialchars($lang['Section_List']); ?>  </b></div>
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
                                            <th>grade</th>
                                            <th>Student/Section</th>
                                            <th>date</th>
                                            <th>Update</th>
                                           </tr>
                                        </thead>
                                        <tbody style="color: black;font-family: all;">
                                                    <?php
                                                    $user_query = mysqli_query($link,"select * from section")or die(mysqli_error());
                                                    while($row = mysqli_fetch_array($user_query)){
                                                    $id = $row['id'];
                                                    ?>
                                                <tr>
                                                <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                </td>
                                                <td><?php echo $row['grade']; ?></td> 
                                                <td><?php echo $row['number']; ?> </td>  
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
                </div></div></div><br><br><br>
        <?php include('..//footer.php'); ?>         
        <?php include('script.php'); ?>
    </body>
</html>