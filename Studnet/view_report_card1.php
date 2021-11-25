<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('..//Language/lang.php'); ?>
<head>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=700, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting);  
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style> 
#print_content{
width:500px;
height:500px;
margin:0 auto;
}
</style>

<link rel="stylesheet" type="text/css" href="..//cr7/idcard.css" />
</head>
<body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
			    
     <div class="pull-right">
			<a href="javascript:Clickheretoprint()" id="print" class="btn btn-success"><i class="icon-print"></i>  <?php echo Htmlspecialchars($lang['Print']); ?>  </a>
						</diV> 
    
				<?php include('sidebar_report.php'); ?>
    <?php
		 $query111 = mysqli_query($link,"SELECT * FROM time1") or die(mysqli_error());
                 $row = mysqli_fetch_array($query111);

                  $start = $row['rpcs']; 
                  $end = $row['rpce'];
                  $current= date('Y-m-d');

			     if ($current < $start) {
                      ?>
                       <script>
                         alert('Student Report Card Date Not Reached');
                         window.location = "card.php";
                       </script>
                       <?php
                     }
                    elseif ($current > $end) {
                      ?>
                       <script>
                         alert('Sorry, Student Report Card Date Passed');
                         window.location = "card.php";
                       </script>
                       <?php
                     }
                     else{?>

      <div id="print_content">     
        
       <div id="certbody" style="background-image: url(bgimag.png); background-repeat:no-repeat; background-position:100% 100%; "> 
            <div class="head">
            <div class="sidea" style="float:left;">
          <center>  <p style="color:black"><b style="font-family: all;font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo Htmlspecialchars($lang['Southern']); ?></b></p>
			<p style="color:black"><b style="font-family: all;font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kambata Tambaro Zone Durame Secondary  School</b></p>
           <p style="color:black"><b style="font-family: all;font-size: 16px;">ካምባታ ጣምባሮ ዞን ዱራሜ ሁለተኛ ደረጃ  ትምህርት ቤት<b>
           </p> </center> <br>

		<!--   <div>
    <div class="sideb" ><img src="..//css/<?php // echo $row['location']; ?>" height="120px" width="120px"  ></div> 
            
            </div>-->
                         <?php
                    $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                       $row1 = mysqli_fetch_array($query); 
                       $teacher = $row1['username'];

            $query= mysqli_query($link," select * from students where stud_id = '$teacher' ")
                   or die(mysqli_error());
				$row = mysqli_fetch_array($query);
				?>

			 <?php $query1= mysqli_query($link," select * from school_year")
                   or die(mysqli_error());
				$row1 = mysqli_fetch_array($query1);?>
            <div class="bodymain">
            <div class="bodya" style="float:left;">	
            <?php echo Htmlspecialchars($lang['f_name']); ?> &nbsp;&nbsp;&nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:all; color:maroon;"><?php echo $row['fname'];?></span>
			 &nbsp;&nbsp;<?php echo Htmlspecialchars($lang['m_name']); ?> &nbsp;&nbsp;&nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:all; color:maroon;"><?php echo $row['mname'];?></span>
			     &nbsp;&nbsp;<?php echo Htmlspecialchars($lang['l_name']); ?> &nbsp;&nbsp;&nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:all; color:maroon;"><?php echo $row['lname'];?></span>
			      </span>&nbsp;<?php echo Htmlspecialchars($lang['Gender']); ?> &nbsp;&nbsp;&nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:all; color:maroon;">
			      	<?php echo $row['sex']; ?></span><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo Htmlspecialchars($lang['Age']); ?> &nbsp;&nbsp;&nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:all; color:maroon;">
			      	<?php echo $row['age']; ?></span>&nbsp;&nbsp;&nbsp; <?php echo Htmlspecialchars($lang['Grade']); ?> &nbsp;&nbsp;&nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:all; color:maroon;"><?php echo $row['grade']; ?>
			      	</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <?php echo Htmlspecialchars($lang['Year']); ?> &nbsp;&nbsp;&nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:all; color:maroon;"><?php echo $row1['school_year']; ?>
		         </span><br>
		     <table cellpadding="0" cellspacing="0" border="1" bord class="table" id="example">
  
		     <thead style="color: black;font-family: all;"><br>
		     	<th rowspan="2"><center> <?php echo Htmlspecialchars($lang['Sabject']); ?></center></th>
		      <th colspan="3"><center> <?php echo Htmlspecialchars($lang['Semester']); ?>  </center></th>	
		     	</thead>   
		     <thead style="color: black;font-family: all;">
		     	<th></th>
		     	<th>I</th>
		     </thead>
		     	<?php

		     	     $query = mysqli_query($link,"select * from users where user_id = '$session_id'")
                       or die(mysqli_error());
                       $row1 = mysqli_fetch_array($query); 
                       $teacher = $row1['username'];

                  $user_query = mysqli_query($link,"select * from reportcard1 where stud_id = '$teacher' ")
                  or die(mysqli_error());
                    $row = mysqli_fetch_array($user_query);  
                  ?>
		     	<tbody style="color: black;font-family: all;">
		     		<td>Amharic</td>
		     		<td><?php echo $row['amharic1']; ?></td>
		     	</tbody>
		        <tbody style="color: black;font-family: all;">
		     		<td>English</td>
		     		<td><?php echo $row['english1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td>Maths</td>
		     		<td><?php echo $row['maths1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td>Physics</td>
		     		<td><?php echo $row['physics1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td>Biology</td>
		     		<td><?php echo $row['biology1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td>Chemistry</td>
		     		<td><?php echo $row['chemistry1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td>Geography</td>
		     		<td><?php echo $row['geography1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td>History</td>
		     		<td><?php echo $row['history1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td>Civics</td>
		     		<td><?php echo $row['civics1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td>HPE</td>
		     		<td><?php echo $row['hpe1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td>IT</td>
		     		<td><?php echo $row['it1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td><?php echo Htmlspecialchars($lang['Total']); ?></td>
		     		<td><?php echo $row['total1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td><?php echo Htmlspecialchars($lang['Average']); ?></td>
		     		<td><?php echo $row['avarage1']; ?></td>
		     	</tbody>
		     	<tbody style="color: black;font-family: all;">
		     		<td><?php echo Htmlspecialchars($lang['Rank']); ?></td>
		     		<td><?php echo $row['rank1']; ?></td>
		     	</tbody>		     			     			     			     			     	
		     </table>    
          &nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:italic; color:maroon;"></span><br>
	        <?php 
            
	        $query= mysqli_query($link,"select * from reportcard1 where stud_id = '$teacher'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								$uname = $row['teacher_name'];
	        $query2 = mysqli_query($link,"select * from users where type = 'home_room_teacher' and firstname = '$uname'")or die(mysqli_error());
								$row1 = mysqli_fetch_array($query2);

						?>

             <?php echo Htmlspecialchars($lang['teacher_name']); ?>&nbsp;&nbsp;<span style="border-bottom:1px dotted black; font-family:courier new; font-style:italic; color:maroon;"><?php echo $row['teacher_name']?></span><br>
			&nbsp;&nbsp;&nbsp;&nbsp;Signature: &nbsp;&nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:italic; color:maroon;"><?php echo $row1['signature']?></span><br>
			<?php $query= mysqli_query($link,"select * from users where type = 'director'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
						?>
			 <?php echo Htmlspecialchars($lang['director_name']); ?>  &nbsp;&nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:italic; color:maroon;"><?php echo $row['firstname'] ?></span>
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature: &nbsp;&nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:italic; color:maroon;"><?php echo $row['signature']; ?>
			</span><br>
			<?php $query= mysqli_query($link,"select date from users where type = 'home_room_teacher'")or die(mysqli_error());
				$row = mysqli_fetch_array($query);
						?>
					 <?php echo Htmlspecialchars($lang['Date_received']); ?> &nbsp;&nbsp;&nbsp;<span style="border-bottom:1px  dotted black; font-family:courier new; font-style:italic; color:maroon;"><?php echo $row['date']; ?> </span>&nbsp;&nbsp;&nbsp;<br>
		</ol>
            </div>
            </div>
        </div>
		</div>
		 </div>
                            </div>
                        </div>
                        <!-- /block -->

                    </div>
                </div>
                                   <?php
		} ?>
		<?php include('script.php'); ?>
    </body>
</html>
</html>  