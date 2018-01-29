
<?php 



include "header.php";
?>
<div style="background: none repeat scroll 0 0 #0099ff;
    font-family: arial;
    font-size: 16px;
    margin: 0;
    padding: 130px;" >
<h2 style="color:#FFFFFF;"> Ad Upload </h2>

<form  method="post" enctype="multipart/form-data">
<div style="padding:11px;float:left;">Select Image:</div><div style="float:left;padding-top:10px;"><input type="file" name="adsimg" /></div><br />
<div style="float:left; width:1200px;">Time for ad to be displayed for in seconds <input type="text" name="settime" />
<input type="submit" value="save" name="save" />
</div>
</form>




</div>
<?php 
	if(isset($_REQUEST['save']))
		{
		$time = $_REQUEST['settime'];
		//echo"<pre>";print_r($_FILES);die;	
		
		
		// Example of accessing data for a newly uploaded file
		$fileName = $_FILES["adsimg"]["name"]; 
		$fileTmpLoc = $_FILES["adsimg"]["tmp_name"];
		// Path and file name
		$pathAndName = "uploads/".$fileName;
		// Run the move_uploaded_file() function here
		$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
		// Evaluate the value returned from the function if needed
		
		if ($moveResult == true) {
		//echo "File has been moved from " . $fileTmpLoc . " to" . $pathAndName;
		
		
		
	
		   $query = "INSERT INTO adstb(imgname,time)VALUES('$fileName','$time')";
		 $res = mysql_query($query);
		
		if($res){
			echo "Ad successfully uploaded";
		
		}else {
			echo"Unable to save";
			}
			
			
			
		} else {
		echo "ERROR: File not moved correctly";
		}
	}

	
	$Qry = "select * from adstb ";
$result = mysql_query($Qry);



while ($row = mysql_fetch_assoc($result)) {
	
	
	
	$image[] 	= $row['imgname'];
	$time_arr[] = $row['time'];
	?>
   <!--   <div id="cycler">
      <img src="uploads/<?php //echo $row['imgname']; ?>"  height="100" width="300"/>
      
      </div>-->
<?php   }
$dd =json_encode($image);
$ss = str_replace('"', '', $dd);
$ssk = str_replace('[', '', $ss);
$sskh = str_replace(']', '', $ssk);

$dd1 =json_encode($time_arr);
$ss1 = str_replace('"', '', $dd1);
$ssk1 = str_replace('[', '', $ss1);
$sskh1 = str_replace(']', '', $ssk1);

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
   var count1 =  '<?php echo mysql_num_rows($result);?>';
  
 img = images.split(',');
 time = times.split(',');
  var image = $('#slideit');
                //Initial Background image setup
  //image.css('background-image', 'url(uploads/' + img[1] +')');
                //Change image at regular intervals
  setInterval(function(){
	 var timesn = time[j++];
	


   image.fadeOut(5000, function () {
   image.css('background-image', 'url(uploads/' + img [i++] +')');
   image.css('background-repeat', 'no-repeat');
  
   image.fadeIn(3000);
   
   });
  
  
   if(i == count1 || i > count1)
   {
  
    i = 0;
	j = 0;
	}
  },5000);            
 });
</script>



</head>
<body>
 <div style="padding:5px;"> <h2> Below is the slider demo :</h2> </div>

      <div id="slideit" style="width:700px;height:391px;">  
      </div>
</body>
</html>



<style>
#cycler{position:relative;}
#cycler img{position:absolute;z-index:1}
#cycler img.active{z-index:3}
</style> 


<?php include("footer.php");?>