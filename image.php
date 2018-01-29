<?php 
 global $wpsh;
  session_start();

if(isset($_SESSION['email']) && $_SESSION['email']!='' && isset($_SESSION['password']) && $_SESSION['password']!='')
{  include("header.php");?>

<?php 
	if(isset($_REQUEST['buynow']) && $_REQUEST['buynow']=="Buy Now"){
		$btcaddress=isset($_REQUEST['btcaddress']) ? ($_REQUEST['btcaddress']) : '';
		$noofshares=isset($_REQUEST['noofshares']) ? ($_REQUEST['noofshares']) : '0';
		$buyuserid=isset($_REQUEST['buyuserid']) ? ($_REQUEST['buyuserid']) : '0';
	}
if(isset($_REQUEST['action']) && $_REQUEST['action']=='change_image'){

        move_uploaded_file($_FILES["file"]["tmp_name"],
          "img/". $_FILES["file"]["name"]);
		    $image=$_REQUEST['image']; 
			
			if($_FILES["file"]["name"]=='')
			{
			
			echo  $sql="UPDATE users SET image='".$image."' WHERE id='".$_SESSION['userid']."'";
        		 mysql_query($sql); 
				
			}
			
			
			else
			{
			echo $sql="UPDATE users SET image='".$_FILES['file']['name']."' WHERE id='".$_SESSION['userid']."'";
        		 mysql_query($sql); 
			
			
			}
			
		
		
			

}	
?>

<div class="container">
<div class="row" style="margin-top:150px;">
 <?php include("sidebar.php");?> 
  <div class="col-md-9">
		<!-- You Can Start Your Code From here-->
  <div class="col-md-5 border" style="margin-left:115px; border: 1px solid #b1b1b1; width: 99.667%;">
		<form id="buying" name="buying" enctype="multipart/form-data" action="image.php?action=change_image" method="post">
            <div class="panel">
                <div class=" panel-gray">
                    <h4 class="panel-footer text-center">
                        Change Profile Picture</h4>
						
                </div>
                <table border="0" cellpadding="5" cellspacing="5">
				<?
 $sqls="SELECT * FROM users WHERE id= '".$_SESSION['userid']."'";  
			    $rss=mysql_query($sqls);
				$rows=mysql_fetch_array($rss);
				$image=$rows['image'];
 ?>
   
   
                  <tr>
                    <td class="text-center">
					
					<? if($image=='')
   {
   ?>
   <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" style="width: 100px;"  src="img/un.jpg" />
   <? 
   }
   else
   {
   ?>
   
    <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" style="width: 117px;" src="img/<? echo $image; ?>" />
   <? } ?>
					</td>
					<td>&nbsp; </td>
                    <td><input type="file"  value=""  name="file" class="form-control"> 
					
					
					</td>
					
					</tr>
					<tr><td>&nbsp; </td></tr>
					
					<tr><td>&nbsp; </td></tr>
                </table>
				<br />
                <div class="panel-footer text-center">
                   <input type="hidden" name="old" value="<? echo $image; ?>">
				    <input type="hidden" name="action" value="change_image">
					   <button id="singlebutton" name="singlebutton" class="btn btn-success">Save </button>
				   <a href="home.php" class="btn btn-default" style="background:#e9e9e9">Close</a>
                </div>
            </div>
			</form>
        </div>
   
  
  
		<!-- End of COde-->
 </div> 
</div>
  <?php include("footer.php");?>
    
<?php }else{
	echo '<script type="text/javascript">window.location ="index.php"</script>';
}?>