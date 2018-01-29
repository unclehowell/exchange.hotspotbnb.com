<?php 
include("config.php");
include("functions.php");
$wpsh=new share();
?> 
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<style> 
body {
width:640px; 
height:358px;
background-image:url(/images/bitcoin_wallet.jpg) }

</style>
<head>
</head>

<body><?php 
								if(isset($_REQUEST['success']) && $_REQUEST['success']=="success"){
								echo "Profile edit successfully";
							}
						?><table width="100%" border="0" cellspacing="0" cellpadding="0"><?
				$sql="SELECT * FROM users WHERE `email`= '".$_SESSION['email']."' and `password`= '".$_SESSION['password']."'";  
			        $rs=mysql_query($sql);
				$row=mysql_fetch_array($rs);
				
				
				
				?>
  <tr>
    <td style="position: fixed; bottom: 20px; right: 30px;  margin-right: auto; margin-left: auto;">YOUR BITCOIN WALLET ID:   <strong> Confidential bitcoin account contact the comms rep for details </strong> </td>
  </tr>  <tr>
    <td></td>
  </tr>

</table>
</body></html>
