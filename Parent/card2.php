<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid"> 
    <?php include('sidebar_report.php'); ?>
        <div class="span6" id="adduser">
         <div class="row-fluid">
         <div class="pull-right"> 
            </diV>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info"  style="color: 0000;font-family: all;"><i class="icon-info-sign"></i>  <?php echo Htmlspecialchars($lang['Stud_ID']); ?> </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                    <form method="post" class="form-horizontal" autocomplete="off" action="view_report_card.php">
                  <strong><b><b><h4 style="color: black;font-family: all;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><strong>  <?php echo Htmlspecialchars($lang['select_student']); ?> </strong></b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b></b></strong></h4><hr>
                                  <div class="control-group">
                  <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                    <b><strong>Stud_ID :</strong></b> </label>
                                         <?php
                    $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                       $row1 = mysqli_fetch_array($query); 
                       $teacher = $row1['username'];

                    $query = mysqli_query($link,"select * from teachers where stuff_id = '$teacher'")
                       or die(mysqli_error());
                    $query = mysqli_query($link,"select * from student_to_parent where stuff_id = '$teacher'")or die(mysqli_error()); 
                  /*  $query = mysqli_query("select * from students where stud_id = '$id' ")
                      or die(mysqli_error());
                      $count = mysqli_num_rows($query);
                        $row = mysqli_fetch_array($query);
                           $id1 = $row['stud_id']; */
                           ?>
                             <div class="controls">
                       <select class="chzn-select" name="id" id="focusedInput" type="text" placeholder ="<?php echo Htmlspecialchars($lang['select']); ?>" required style="font-family:all;color: black;">
                           <option></option>
                           <option style="font-family: all;font-size: 16px; color: black;">
                               <?php
                    while ($row1 = mysqli_fetch_array($query)){
                    echo "<option value='". $row1['stud_id'] ."' style = 'font-family:all;font-size16px;color:black;'>".$row1['stud_id']."</option>" ; 
                                }
                               ?>
                             </option>         
                                  </select>
                                        </div> 
                                        </div>                                                     
                                      <hr>
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="select" class="btn btn-info" style="color: black;font-family: all;">
                          <i class="icon-plus-sign"></i><b>  Select </b></button>
                                          </div>
                                        </div>
                                </form>
                              </div>
                        </div>
</script>         
    </div>
    <?php include('..//footer.php'); ?>
    <?php include('..//script.php'); ?>
    </body>
</html>                     