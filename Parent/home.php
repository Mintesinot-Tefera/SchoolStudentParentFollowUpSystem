<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
    <body>
        <?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include('sidebar_dashboard_parent.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- breadcrumb -->  
                         <ul class="breadcrumb"> 
                        <?php
                        $school_year_query = mysqli_query($link,"select * from school_year order by school_year DESC")or die(mysqli_error());
                        $school_year_query_row = mysqli_fetch_array($school_year_query);
                        $school_year = $school_year_query_row['school_year'];
                        ?>
                          <!--  <li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
                            <li><a href="#">School Year: <?php // echo $school_year_query_row['school_year']; ?></a></li> -->
                        </ul>
                         <!-- end breadcrumb --> 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                            
                        <?php include ('count.php'); ?>
                    <form action="read.php" method="post">
                        <?php if($not_read == '0'){
                                }else{ ?>
                            <button id="delete"  class="btn btn-info" name="read"><i class="icon-check"></i> <?php echo Htmlspecialchars($lang['Read']); ?></button>
                                                    <div class="pull-right">
                            <?php echo Htmlspecialchars($lang['Check_All']); ?><input type="checkbox"  name="selectAll" id="checkAll" />
                                <script>
                                $("#checkAll").click(function () {
                                    $('input:checkbox').not(this).prop('checked', this.checked);
                                });
                                </script>                   
                            </div>
    
                                <?php } ?>
                
                    <?php $query = mysqli_query($link,"select * from teachers
                    where stuff_id = '$session_id' 
                    ")or die(mysqli_error());
                    $count = mysqli_num_rows($query);
                        if ($count  > 0){
                    while($row = mysqli_fetch_array($query)){
                    $get_id = $row['teacher_class_id'];
                    $id = $row['notification_id'];

                    $query_yes_read = mysqli_query($link,"select * from notification_read where notification_id = '$id' and student_id = '$session_id'")
                      or die(mysqli_error());
                    $read_row = mysqli_fetch_array($query_yes_read);
                    $yes = $read_row['student_read'];
                
                    ?>
                                    <div class="post"  id="del<?php echo $id; ?>">
                                        <?php if ($yes == 'yes'){
                                        }else{
                                        ?>
                                        <input id="" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>"> 
                                        <?php } ?>  
                                            <strong><?php echo $row['firstname']." ".$row['lastname'];  ?></strong>
                                            <?php echo $row['notification']; ?> In 
                                            <a href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>">
                                            </a>
                                        <hr>
                                        <div class="pull-right">
                                        <i class="icon-calendar"></i>
                                    </div>              
                                </div>
                    <?php
                    } }else{
                 $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                  $row1 = mysqli_fetch_array($query); 
                  $teacher1 = $row1['firstname'];
                  $teacher2 = $row1['lastname']; 
                  $teacher = $teacher1." ".$teacher2; 
                  $type = $row1['type'];
                    ?>
                    <div class="alert alert-info"><strong style="font-style: normal;font-family: all;
                    font-weight: normal;font-size: 18px"><i class="icon-info-sign"></i><?php echo Htmlspecialchars($lang['Notifications']); ?> </strong></div>
                    <div>
                        <p style="font-style: normal;font-family: all;
                    font-weight: normal;font-size: 20px;color: black;"><?php echo Htmlspecialchars($lang['You_are']); ?> <?php
                   echo $teacher; ?> <?php echo Htmlspecialchars($lang['signed_as']); ?>  <?php echo $type;?></p>
                    </div>
                    <?php
                    }
                    ?>
                    </form>
                                </div>
                                     <?php
                                                $Today = date('y:m:d');         
                                    $user_query = mysqli_query($link,"select * from news where 
                                        date = '$Today' ")
                                            or die(mysqli_error());
                                          $row = mysqli_fetch_array($user_query);

                                    $count = mysqli_num_rows($user_query);
                                    if ($count <= 0) {?>
                                  <p><strong style="font-style: normal;font-family: all;
                    font-weight: normal;font-size: 20px;color: black;"> <?php echo Htmlspecialchars($lang['No_News']); ?> <br><br>
                                  <?php
                                    }                            
                                    else{
                                  ?>
                                  <p><strong style="font-style: normal;font-family: all;
                    font-weight: normal;font-size: 20px;color: black;"><?php echo Htmlspecialchars($lang['News']); ?> <br><br>
                                  <?php
                                        echo $row['news'];

                                    }                          
                                                    ?>
                                                    </strong></p>
                            </div>
                        </div>
                        <!-- /block -->
            </div><br><br>
             <p style="font-style: normal;font-family: all;
                    font-weight: normal;font-size: 16px;color: black;">
   <script type='text/javascript'>
 var mydate=new Date()

var year=mydate.getYear()

if (year<1000) year+=1900

var day=mydate.getDay()

var month=mydate.getMonth()

var daym=mydate.getDate()

if (daym<10)

daym="0"+daym

var hours2=mydate.getHours()

var minutes2=mydate.getMinutes()

var seconds2=mydate.getSeconds()

dn2="am" 

if ((hours2>=12)&&(minutes2>=1)||(hours2>=13)){
dn2="pm"
hours2=hours2-12

}
if (hours2==0)

hours2=12

if (hours2<10) hours2="0"+hours2

else hours2=hours2+''

if (minutes2<10) minutes2="0"+minutes2

else minutes2=minutes2+''

if (seconds2<10) seconds2="0"+seconds2

else seconds2=seconds2+''

var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")

var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")

 document.write(dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"<br>"+hours2+" : "+minutes2+" : "+seconds2+"<br>" )
//-->
 </script>       
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p> 
                 </div>
                </div><br><br><br><br><br>
        <?php include('..//footer.php'); ?>
        </div>
        <?php include('script.php'); ?>
    </body>
</html>