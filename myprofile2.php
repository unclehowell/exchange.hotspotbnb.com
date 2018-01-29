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
<style>
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.current{ background:#dcdcdc; color:#000 !important;}
.fa-fw {width: 2em;}
.grad{
	background: #fcfff4 !important; /* Old browsers */
background: -moz-linear-gradient(top, #fcfff4 0%, #e0e0e0 40%, #bcbcbc 100%) !important; /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcfff4), color-stop(40%,#e0e0e0), color-stop(100%,#bcbcbc)) !important; /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #fcfff4 0%,#e0e0e0 40%,#bcbcbc 100%) !important; /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #fcfff4 0%,#e0e0e0 40%,#bcbcbc 100%) !important; /* Opera 11.10+ */
background: -ms-linear-gradient(top, #fcfff4 0%,#e0e0e0 40%,#bcbcbc 100%) !important; /* IE10+ */
background: linear-gradient(to bottom, #fcfff4 0%,#e0e0e0 40%,#bcbcbc 100%) !important; /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#bcbcbc',GradientType=0) !important; /* IE6-9 */
}
table tr td{
	padding:20px;
}
</style>
<?php include("sidebar.php"); ?>

		<!-- You Can Start Your Code From here-->
  
<div class="right-cont_social"><div class="Opportunity">
		<form id="buying" name="buying" action="buynowinfo.php" method="post">
            <div class="panel">
                <div class=" panel-gray">
                    <h4 class="panel-footer text-center">
                        Manage Profile</h4>
						<div style="color:green"><?php 
								if(isset($_REQUEST['success']) && $_REQUEST['success']=="success"){
								echo "Profile edit successfully";
							}
						?></div> 
                </div>
                <table align="center" border="0" cellpadding="5" cellspacing="5">
				<?
				$sql="SELECT * FROM users WHERE id= '".$_SESSION['users']."'";  
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
                    <td><input name="text2" type="text" style="height=3px" class="form-control col-md-6" id="text2" value="<?php $btcaddrss=$wpsh->getbtcaddess($_SESSION['email']);print_R($btcaddrss);?>" size="12px" readonly placeholder="Search term..." /></td>
					</td>
					
					</tr>
					<tr><td>&nbsp; </td></tr>
					 <tr>
                    <td class="text-center"><strong style="text-align:right; font-size:12px;">Shareholder ID</strong></td>
					<td>&nbsp; </td>
                    <td><input name="text2" type="text" style="height=3px" class="form-control col-md-6" id="text2" value="<?php echo $wpsh->certificateid();?>" size="12px" readonly placeholder="Search term..." /></td>
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
   

   <?php include("footer.php");?>
    
<?php }else{
	echo '<script type="text/javascript">window.location ="index.php"</script>';
}?>

