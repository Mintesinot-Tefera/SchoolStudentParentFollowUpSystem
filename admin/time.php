<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php 
include'..//Language/lang.php';
 ?>
    <body>
    <?php include('navbar.php'); ?>
        <div class="container-fluid">
        <div class="row-fluid">
    <?php include('sidebar_time.php'); ?>
        <div class="span6" id="adduser">
         <div class="row-fluid">
         <div class="pull-right">
            </diV>
                        <!-- block -->
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="alert alert-info"  style="color: 0000;font-family: all;"><i class="icon-info-sign"></i> <?php echo Htmlspecialchars($lang['Acadamic_Calendar']); ?></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                    <form method="post" class="form-horizontal" autocomplete="off">
                  <strong><b><h4 style="color: black;font-family: all;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><strong> <?php echo Htmlspecialchars($lang['Calendar_Form']); ?></strong></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></strong></h4><hr>   
                            <div class="control-group">         	
                  <label class="control-label" for="inputPassword"  
                  style="color: black;font-family: all;">
                    <b><strong><span> <?php echo Htmlspecialchars($lang['Registration_Start_Date']); ?> :</strong></b> </label>
                        <div class="controls">
                       <input class="input focused" name="rs" id="focusedInput" type="date" style="color: black;font-family: all;" required min="<?php echo date('Y-m-d')?>">
                                          </div>
                                          <p class="err-msg"></p> 
                                        </div> 
                             <div class="control-group">         	
                  <label class="control-label" for="inputPassword"  
                  style="color: black;font-family: all;">
                    <b><strong><span> <?php echo Htmlspecialchars($lang['Registration_End_Date']); ?> :</strong></b> </label>
                        <div class="controls">
                       <input class="input focused" name="re" id="focusedInput" type="date" style="color: black;font-family: all;" required min="<?php echo date('Y-m-d')?>">
                                          </div>
                               <p class="err-msg"></p>                      
                                        </div>                                                          
                                       <div class="control-group">         	
                  <label class="control-label" for="inputPassword"  
                  style="color: black;font-family: all;">
                    <b><strong><span><?php echo Htmlspecialchars($lang['Assesment_Start_Date']); ?>  :</strong></b> </label>
                        <div class="controls">
                       <input class="input focused" name="as" id="focusedInput" type="date" style="color: black;font-family: all;" required min="<?php echo date('Y-m-d')?>">
                                          </div>
                                          <p class="err-msg"></p> 
                                        </div> 
                             <div class="control-group">         	
                  <label class="control-label" for="inputPassword"  
                  style="color: black;font-family: all;">
                    <b><strong><span> <?php echo Htmlspecialchars($lang['Assesment_End_Date']); ?> :</strong></b> </label>
                        <div class="controls">
                       <input class="input focused" name="ae" id="focusedInput" type="date" style="color: black;font-family: all;" required min="<?php echo date('Y-m-d')?>">
                                          </div>
                                    <p class="err-msg"></p>       
                                        </div>                                    
                                       <div class="control-group">         	
                  <label class="control-label" for="inputPassword"  
                  style="color: black;font-family: all;">
                    <b><strong><span> <?php echo Htmlspecialchars($lang['Start_Date']); ?>:</strong></b> </label>
                        <div class="controls">
                       <input class="input focused" name="rrs" id="focusedInput" type="date"  style="color: black;font-family: all;" required min="<?php echo date('Y-m-d')?>">
                                          </div>
                                          <p class="err-msg"></p> 
                                        </div> 
                             <div class="control-group">         	
                  <label class="control-label" for="inputPassword"  
                  style="color: black;font-family: all;">
                    <b><strong><span>  <?php echo Htmlspecialchars($lang['End_Date']); ?> :</strong></b> </label>
                        <div class="controls">
                       <input class="input focused" name="rre" id="focusedInput" type="date" style="color: black;font-family: all;" required min="<?php echo date('Y-m-d')?>">
                                          </div>
                                    <p class="err-msg"></p>       
                                        </div> 
                           <?php   
                    $querys = mysqli_query($link,"select * from school_year")
                     or die(mysqli_error());
                     $row = mysqli_fetch_array($querys); 
                     ?>                    
                             <div class="control-group">          
                  <label class="control-label" for="inputPassword"  
                  style="color: black;font-family: all;">
                    <b><strong><span> <?php echo Htmlspecialchars($lang['School_Acadamic_Year']); ?> :</strong></b> </label>
                        <div class="controls">
                       <input class="input focused" name="acadamic" id="focusedInput" 
                       type="text" style="color: black;font-family: all;" required
                         value="<?php echo $row['school_year'] ?>">
                                          </div>
                                    <p class="err-msg"></p>       
                                        </div>                                                                                 
                                      <hr>
                      <div class="control-group">
                        <div class="controls">      
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="set" class="btn btn-info" style="color: black;font-family: all;"><i class="icon-plus-sign"></i><b>  <?php echo Htmlspecialchars($lang['Addadmin']); ?> </b></button>
                                          </div>
                                        </div>
                                </form>
                                </div>
                            </div>
                        </div>

     <script src="sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sweetalert.css">
    <script type="text/javascript">
        function f() {
            swal("ተሰርዞወል!", "በተኑን ይጨኑ!", "success")
        }
        function fun() {
            swal("Calendar Successfully Added!", "Congratulation!", "success")
        }
        function delno() {
            swal("no data","warnning")
        }
        function nosuccess() {
            swal("አልተሰከም እንደገና ይሞክሩ !!", "በተኑን ይጨኑ! ", "error")
        }
        function nocon() {
            swal("ኮኔክሽን  ዬለም ")
        } 
</script>

<?php
   if (isset($_POST['set'])){

    $rs = $_POST['rs'] ;					
	  $re = $_POST['re'] ;
	  $as = $_POST['as'] ;
    $ae = $_POST['ae'] ;
    $rrs = $_POST['rrs'] ;
	  $rre = $_POST['rre'] ;
    $acy = $_POST['acadamic'];
    $Today = date('y:m:d');

  if ($re < $rs) {
          ?>
  <script>
swal(" Calendar Not Valid!", " Please Try Again! ", "error");
  </script>
  <?php
  }
  elseif ($ae < $as) {
  	       ?>
  <script>
    nosuccess();
  </script>
  <?php
  }
    elseif ($rre < $rrs) {
  	       ?>
  <script>
    nosuccess();
  </script>
  <?php
  }
  else{
  $sql=mysqli_query($link,"UPDATE time1 SET rs = '$rs', re = '$re', aas = '$as',	aae = '$ae',
	rpcs = '$rrs' ,rpce = '$rre' where id = '1'") or die(mysqli_error());
  $sql1 = mysqli_query($link,"UPDATE school_year set school_year = '$acy' where id = '1'") 
    or die(mysqli_error());
?>
<script>
  fun();
</script>
<?php
} }
?>          
    </div></div>
    <?php include('..//footer.php'); ?>
    <?php include('..//script.php'); ?>
    </body>
</html> 