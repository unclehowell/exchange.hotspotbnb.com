 <?php 
//include "header.php";

$Qry = "select * from adstb ";
$result = mysql_query($Qry);



while ($row = mysql_fetch_assoc($result)) {
	
	
	$image[] 	= $row['imgname'];
	$time_arr[] = $row['time'];
	?>
   <!--   <div id="cycler">
      <img src="uploads/<?php //echo $row['imgname']; ?>"  height="100" width="300"/>
      
      </div>-->
<?php }
$dd =json_encode($image);
$ss = str_replace('"', '', $dd);
$ssk = str_replace('[', '', $ss);
$sskh = str_replace(']', '', $ssk);

$dd1 =json_encode($time_arr);
$ss1 = str_replace('"', '', $dd1);
$ssk1 = str_replace('[', '', $ss1);
$sskh1 = str_replace(']', '', $ssk1);
//echo'<pre>';print_r($dd);exit;
echo $sskh1;
?>

	

<html>
<head>
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(window).load(function() {           
  var i =0; 
   var j =0; 
  //var images = ['1.png','Chrysanthemum.jpg','Hydrangeas.jpg'];
  var images = '<?php echo $sskh;?>';
  var times = '<?php echo $sskh1;?>';
  //var newimgarr=$.parseJSON(imgarr);
 //console.log(imgarr);
 //var images =imgarr;
 var timesn='';
 img = images.split(',');
 time = times.split(',');
  var image = $('#slideit');
                //Initial Background image setup
  image.css('background-image', 'url(Hydrangeas.jpg)');
                //Change image at regular intervals
  setInterval(function(){
	 var timesn = time[j++];
	 // alert(img.length); 
   image.fadeOut(timesn, function () {
   image.css('background-image', 'url(' + img [i++] +')');
   image.fadeIn(timesn);
   });
   //alert(timesn);
   if(i == img.length)
   
    i = 0;
	j = 0;
  },5000);            
 });
</script>



</head>
<body>

      <div id="slideit" style="width:700px;height:391px;">  
      </div>
</body>
</html>



<style>
#cycler{position:relative;}
#cycler img{position:absolute;z-index:1}
#cycler img.active{z-index:3}
</style> 
