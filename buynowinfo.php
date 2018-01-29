
<script>
   function all_currency_change_onevent(){
   
   
         value = document.getElementById("crrent-currency-value-fix").value;
         type  = document.getElementById("balcurrency").value;
   
       
   
         $.post("helperajx.php",
         {
           value:value,
           type:type,
           change_currency_value:"change_currency_value"
         },
         function(data,status){
     
              document.getElementById("crrent-currency-value").value = data.value;
         });
        
   
          document.getElementById("crrent-currency").innerHTML =  document.getElementById("balcurrency").value+":";
  
   }
   
</script>

<?php 

  global $wpsh;
  session_start();





  


if(isset($_REQUEST['buymoney']) && isset($_REQUEST['buyamountshares']) &&  isset($_REQUEST['buyuserid']) && isset($_REQUEST['actions']) &&isset($_REQUEST['totalbuyprice']) && isset($_REQUEST['totalbuypricefixed'])){

   
}else{

header('Location: tradeequity.php');

}








if(isset($_SESSION['email']) && $_SESSION['email']!='' && isset($_SESSION['password']) && $_SESSION['password']!='')
{ 

        include("header.php");



	$query = "SELECT * FROM `users`  where email ='".$_SESSION[email]."'  and password ='".$_SESSION[password]."' "; 

	$result = mysql_query($query);

        $info = mysql_fetch_array($result);



     














?>
<style>
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.current{ background:#000000; color:#000 !important;}
.fa-fw {width: 2em;}
.panel-gray{
	background:#E9E9E9;
	color:#000;
	font-weight:bold;
	font-size:20px;
	padding:3px;
}
.border{

    border: 1px solid #b1b1b1;
	min-height:392px;

}
.panel-gray h4{
	font-size:30px;
}
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
	padding:10px;
}
#paynow table{
	width: 100%;
}
#paynow table tr td{
	padding:5px;
	border:solid 1px #dcdcdc;
}

html body div.wrapper div.container div.col-md-9.pull-right h2 {
    background: none repeat scroll 0 0 #49c8f5;
    color: #fff;
    display: block;
    margin: 0;
    padding: 10px;
}
</style>
<script type="text/javascript">
	
   function isNumberKey(evt)
     {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
           return false;
       
        return true;
     }
</script>


<div class="">
<div class="" style=" margin-bottom:15px;">
 <?php include("sidebar.php");?> 
  <div class="col-md-9" style="width:74%">
 <?php 
 global $wpsh;





                  









 ?> 















<h2>Shares Buy Information</h2>
<form id="paynow" name="paynow" action="process.php" method="post">
<table border="1">
	<tr>
		<td>No. of Share to Buy</td>
		<td>      
                        <?php   echo $noofshare = $_REQUEST['buymoney'];  ?>

			<input type="hidden" id="noofshare" name="noofshare" value="<?php echo $noofshare=$_REQUEST['buymoney']; ?>" />
		</td>
	</tr>
	<tr>
		<td>Price of Shares (in <?php echo $_REQUEST['buycurrency']; ?>)</td>
		<td>  

                        <?php echo $priceofsharesincurrency =  $totalprice = $_REQUEST['buyequity']; ?>

			<input type="hidden" id="totalprice" name="totalprice" value="<?php echo $totalprice=$_REQUEST['buyequity']; ?>" />


		</td>
	</tr>
	<tr>
		  <td>



                      Price of Shares inc. <?php echo $getsharebuyfee = $wpsh->getsharebuyfee(); ?>% Fee (in <?php echo $_REQUEST['buycurrency']; ?>)</td>

		 <td> 

                         <?php 

                                $fee = $buycommission = (($totalprice*($getsharebuyfee))/100); 

                                $totalpricewithfee =  $totalprice+$buycommission;

                                echo  $priceofshareinclding = $data =  number_format((float)$totalpricewithfee , 8, '.', '');


                         ?>




			<input type="hidden" id="totalpricewithfee" name="totalpricewithfee" value="<?php echo $totalpricewithfee; ?>" />
		</td>
	</tr>
	<tr>
		<td>Shares Buy From Bitcoin Address </td>
		<td>
                        <?php echo $mybtcoinaddress = $info['bitcoinaddress'];?>

		     
		</td>
	</tr>


	<tr>
		<td> Total Price (In BTC) </td>
		<td>

                       <?php 


                        if( $_REQUEST['buycurrency'] == 'BTC'){

                                           $totalpricewithfee =  $totalprice+$buycommission;

                                           echo    $datafinal =  number_format((float)$totalpricewithfee , 8, '.', '');


                        }else{

                                           $api = "https://blockchain.info/tobtc?currency=".$_REQUEST['buycurrency']."&value=".$totalpricewithfee;

                                           $data = json_decode(file_get_contents($api));

                                           echo   $datafinal =  number_format((float)$data , 8, '.', '');

                        }


                       ?>

		     
		</td>
	</tr>

	
 
</table>
</form>     
 </div> 



<div class="panel-footer text-center" style="margin-top:0px; border:none; display:inline-block">

                     <form action="process.php" method="post" />


                            <input type="hidden" id="noofshare"  name="noofshare" value="<?php echo $noofshare; ?>">

                            <input type="hidden" id="priceofsharesincurrency" name="priceofsharesincurrency"  value="<?php echo $priceofsharesincurrency; ?>">

                            <input type="hidden" id="priceofshareinclding"  name="priceofshareinclding" value="<?php echo  $priceofshareinclding; ?>"> 

                            <input type="hidden" id="mybtcoinaddress"  name="mybtcoinaddress" value="<?php echo  $mybtcoinaddress; ?>">

                            <input type="hidden" id="datafinal"  name="datafinal" value="<?php echo  $datafinal; ?>">

                            <input type="hidden" id="feeinbtc"  name="feeinbtc" value="<?php 


                        if( $_REQUEST['buycurrency'] == 'BTC'){

                                           $totalpriceonlywithfee =  $buycommission;

                                           echo    number_format((float)$totalpriceonlywithfee , 8, '.', '');


                        }else{

                                           $api = "https://blockchain.info/tobtc?currency=".$_REQUEST['buycurrency']."&value=".$buycommission;

                                           $data = json_decode(file_get_contents($api));

                                           echo     number_format((float)$data , 8, '.', '');

                        }


                       ?>">

                            <input type="hidden" id="fee"  name="fee" value="<?php  echo     number_format((float)$fee , 8, '.', ''); ?>">

                            <input type="hidden" id="finalcheckout"  name="finalcheckout" value="finalcheckout">

                            <input type="submit" id="buyshares" class="btn btn-info" value="Check Out">


                     </form>

                 </div>
</div>







                













  <?php include("footer.php");?>
    
<?php }else{
	echo '<script type="text/javascript">window.location ="index.php"</script>';
}?>