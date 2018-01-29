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
if(isset($_REQUEST['action']) && $_REQUEST['action']=='change_pass'){
 
        $old=$_REQUEST['old'];
 	    $new=$_REQUEST['new'];
		
		$sql="UPDATE users SET password='$new' WHERE email='".$_SESSION['email']."'";
		mysql_query($sql); 
		
		
			

}	
?>

<div class="container">
<div class="row">
 <?php include("sidebar.php");?> 
  <div class="col-md-9">
		<!-- You Can Start Your Code From here-->
  <div class="col-md-5 border" style="margin-left:115px; border: 1px solid #b1b1b1; width: 99.667%;">
		<form id="buying" name="buying" action="change_password.php?success=success" method="post">
            <div class="panel">
                <div class=" panel-gray">
                    <h4 class="panel-footer text-center">
                        Change Password</h4>
						<div style="color:green"><?php 
								if(isset($_REQUEST['success']) && $_REQUEST['success']=="success"){
								echo "Congratulation! Your Password has been changed successfully.";
							}
						?></div> 
                </div>
                <table border="0" cellpadding="5" cellspacing="5">
				<?php

			$sql="SELECT * FROM users WHERE email= '".$_SESSION['email']."'";  
			    $rs=mysql_query($sql);
				$row=mysql_fetch_array($rs);
				$password=$row['password'];
				
				
				?>
				<script>

                  function checkpass(x)

				  {


				    var pass="<?php echo $password; ?>";
					

				    if(x!='')

					{

					

					   if(pass==x)

					   {

					   $("#olderror").hide();

					   return true;

					   

					   }

					   else

					   {

					  

					   $("#olderror").show();

					   document.getElementById("old").value="";

					   return false;

					   }

					}

				  }

                </script>
                  <tr>
                    <td class="text-center"><strong style="font-size:12px;">Old Password</strong></td>
					<td>&nbsp; </td>
                    <td><input type="password"  value="" id="old" onblur="checkpass(this.value);" placeholder="Old Password"  name="old" class="form-control" style="height:34px;width: 447px;" required> 
					
					<div style="display:none;color: red; font-weight: bold;" class="message" id="olderror">Old Password doesn't match.</div>

					</td>
					
					</tr>
					<tr><td>&nbsp; </td></tr>
					 <tr>
                    <td class="text-center"><strong style="font-size:12px;">New Password</strong></td>
					<td>&nbsp; </td>
                    <td><input type="password"  onblur="CheckPassword();" value="" placeholder="Last Name" id="new" name="new" class="form-control" style="height:34px;width: 447px;" > 
					<div style="display:none;color: red; font-weight: bold;" class="message" id="perror"></div>
					
					</td>
					
					</tr>
					<tr><td>&nbsp; </td></tr>
                   
					<tr><td>&nbsp; </td></tr>
                </table>
				<br />
                <div class="panel-footer text-center">
				<input type="hidden" name="action" value="change_pass">
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