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

?>

<div class="">
<div class="">
 <?php include("sidebar.php");?> 
  <div class="col-md-9" style="width:74%">
		<!-- You Can Start Your Code From here-->
  <div class="col-md-12 border" style="">
		<form id="buying" name="buying" action="buynowinfo.php" method="post">
            <div class="right-cont" style="width:102%;margin-left: -20px;">
                <div class=" panel-gray">
                    <h4 class="panel-footer text-center" style="width: 96%;margin: 2%;">
                        Manage Profile</h4>
						<div style="color:green"><?php 
								if(isset($_REQUEST['success']) && $_REQUEST['success']=="success"){
								echo "Profile edit successfully";
							}
						?></div> 
                </div>
                <table align="center" border="0" cellpadding="5" cellspacing="5" style="position: relative;
margin-left: 15%;">
				<?
				$sql="SELECT * FROM users WHERE `email`= '".$_SESSION['email']."' and `password`= '".$_SESSION['password']."'";  
			        $rs=mysql_query($sql);
				$row=mysql_fetch_array($rs);
				
				
				
				?>
                  <tr>
                    <P>&nbsp;</p><td class="text-center"><strong style="font-size:12px; text-align:right;">Email Id</strong></td>
					<td>&nbsp;</td>
                    <td><input type="text" onkeypress="return isNumberKey(event)" value="<? echo $row['email'];?>" id="buymoney" name="email" class="form-control" style="height:34px;width: 447px;" readonly=""> 
					
					</td>
					
					</tr>
					<tr><td>&nbsp; </td></tr>
					 <tr>
                    <td class="text-center"><strong style=" text-align:right; font-size:12px;">BitCoin Address</strong></td>
					<td>&nbsp; </td>
                    <td><input name="text2" type="text" style="height=3px" class="form-control col-md-6" id="text2" value="Confidential bitcoin account contact the comms rep for details" size="12px" readonly placeholder="Search term..." /></td>
					</td>
					
					</tr>
					<tr><td>&nbsp; </td></tr>
					 <tr>
                    <td class="text-center"><strong style="text-align:right; font-size:12px;">Shareholder ID</strong></td>
					<td>&nbsp; </td>
                    <td><input name="text2" type="text" style="height=3px" class="form-control col-md-6" id="text2" value="<?php echo


str_pad($row['id'], 8, '0', STR_PAD_LEFT); ?>" size="12px" readonly placeholder="Search term..." /></td>
					</td>
					
					</tr>	              
					<tr><td>&nbsp; </td></tr>
                    
					<tr><td><img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="<?php echo $row['image']; ?>" alt="image"/></td></tr>
                </table>
				<p><br />
				  </p>
				<div class="panel-footer text-center">
                   <a href="change_password.php" class="btn btn-default" style="background:#e9e9e9">Change Password</a>
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