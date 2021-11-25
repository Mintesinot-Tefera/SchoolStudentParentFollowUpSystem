<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_comment.php'); ?>
        <div class="span6" id="adduser">
         <div class="row-fluid">
         <div class="pull-right"> 
            </diV>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info"  style="color: 0000;font-family: all;"><i class="icon-info-sign"></i> <?php echo Htmlspecialchars($lang['Comment_Form']); ?></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                    <form method="post" class="form-horizontal">
                  <strong><b><i><h4 style="color: black;font-family: all;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><strong><?php echo Htmlspecialchars($lang['Add_Comment_Form']); ?></strong></b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </i></b></strong></h4><hr>
                                  <div class="control-group">
                  <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                    <b><strong><?php echo Htmlspecialchars($lang['Stud_ID']); ?></strong></b> </label>
                                          <div class="controls">
                                            <input class="input focused" name="id" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['Stud_ID']); ?>" style="color: black;font-family: all;" maxlength="04" required pattern="[a-zA-Z0-9_]{1,16}"//>
                                          </div>
                                        </div>
                                         <div class="control-group">
                  <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                    <b><strong><?php echo Htmlspecialchars($lang['username']); ?></strong></b> </label>
                                          <div class="controls">
                                            <input class="input focused" name="uname" id="focusedInput" type="text" placeholder = "<?php echo Htmlspecialchars($lang['username']); ?>" style="color: black;font-family: all;" maxlength="10" required pattern="[a-zA-Z0-9_]{3,16}"//>
                                          </div>
                                        </div>                                
				           <div class="control-group">
                  <label class="control-label" for="inputPassword"  style="color: black;font-family: all;">
                    <b><strong><?php echo Htmlspecialchars($lang['Comment']); ?></strong></b> </label>
                                          <div class="controls">
                                       <textarea name="comment" cols="70" rows="11" id="comment" style="border: double;color: black;font-family: all;" placeholder="<?php echo Htmlspecialchars($lang['please_write_comment']); ?>"></textarea>
                                          </div>
                                        </div>                
                                      </br></br><hr>
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="give" class="btn btn-info" style="color: black;font-family: all;"><i class="icon-plus-sign icon-large"></i><b>  <?php echo Htmlspecialchars($lang['Give']); ?> </b></button>
                                          </div>
                                        </div>
                                </form>
                                </div>
                            </div>
                        </div>

<?php
   if (isset($_POST['give'])){

$id = $_POST['id'];

$uname = $_POST['uname'];
$comment = $_POST['comment'];

$query = mysqli_query($link,"select * from students where id = '$id'")or die(mysqli_error());
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);

$query1 = mysqli_query($link,"select * from comments where stud_id = '$id' AND username = '$uname' ")
  or die(mysqli_error());
$count1 = mysqli_num_rows($query1);

$id1 = $row['id'];

if ($id!=$id1){ ?>
<script>
alert('Student Does Not Existed');
</script>
<?php
}

elseif ($count1 > 0){ ?>
<script>
alert('comment Already Exist Please Try Again');
</script>
<?php
}

else{
mysqli_query($link,"insert into comments (stud_id,username,comment,date) values('$id','$uname','$comment',NOW())")or die(mysqli_error());
?>
<script>
  alert('Succesfully Added');
window.location = "comment.php";
</script>
<?php
}
}
?>          
    </div>
    <?php include('..//script.php'); ?>
    </body>
</html>                     