<?php 
include'Language/lang.php';
 ?>
<link rel="stylesheet" type="text/css" href="css/resev/css/style.css" />
<script type="text/javascript" src="css/resev/js/saslideshow.js"></script>
<script type="text/javascript" src="css/resev/js/slideshow.js"></script>
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>


  <script type="text/javascript">
// Run function for every second of timer
setInterval(rgbcolors, 2000);
function rgbcolors() {
// rgb string generation
var col = "rgb("
+ Math.floor(Math.random() * 255) + ","
+ Math.floor(Math.random() * 255) + ","
+ Math.floor(Math.random() * 255) + ")";
//change the text color with the new random color
document.getElementById("divstyle").style.color = col;
}
</script>
 </style>

<div id="divstyle" style="font:bold 20px arial" align="center"> 
<strong style="font-family: all;" ><?php echo Htmlspecialchars($lang['wct']); ?></strong><i class="icon-heart"></i> </div>

<div id="wrapper">

    <div id="content">
      <div id="rotator">
              <ul>
              <p style="color:#292f38"></p> 
            <li class="show">
                  
       
        <li><img src="image/www.jpg" width="1000" height="479"  alt="" /></li>
        <li><img src="image/ffff.jpg" width="1000" height="479"  alt="" /></li>
        <li><img src="image/ooo.jpg" width="1000" height="479"  alt="" /></li>
        <li><img src="image/f.jpg" width="1000" height="479"  alt="" /></li>
        <li><img src="image/Parent-Teacher-Student.png" width="1000" height="479"  alt="" /></li>
   
       
      
              </ul>
        </div>
        </div>
      </div>