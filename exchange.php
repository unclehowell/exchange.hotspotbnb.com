<script>
   function all_currency_change_onevent(){
   
   
         document.getElementById("noticebuyshares").disabled = true;
   
         balcurrency = document.getElementById("balcurrency").selectedIndex;
   
         buycurrency  = document.getElementById("noticebuycurrency").value;
   
         document.getElementById("noticebuycurrency").selectedIndex = balcurrency ;   
      
          var totalbuyprice = $("#noticetotalbuyprice").val();
          var buymoney = $("#noticebuymoney").val();
          var buycurrency = $("#noticebuycurrency").val();
          var totalbuypricefixed = $("#noticetotalbuypricefixed").val();

    $.post("helperajx.php",
    {
      totalbuyprice:totalbuypricefixed ,
      buymoney:buymoney,
      buycurrency:buycurrency,
      totalbuypricefixed:totalbuypricefixed,
      findtotal:"findtotal"
    },
    function(data,status){

          $("#noticetotalbuyprice").val(data.own);
      
          $("#noticebuyequity").val(data.equity);

         // $("#noticebuyequityhidden").val(data.equity);

          document.getElementById("noticebuyshares").disabled = false;

    });
   
   
   
   
         
   
   
         value = document.getElementById("crrent-currency-value-fix").value;
         type  = document.getElementById("balcurrency").value;
   
         ///alert(value);    alert(type);
   
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











 <style>
				
a:link {
    color: #FF0000;
}

a:visited {
    color: #00FF00;
}

a:hover {
    color: #FF00FF;
}

a:active {
    color: #0000FF;
}
		

		
.absoluteposition
					{
						   background: none repeat scroll 0 0 rgba(0, 0, 0, 0.58);
							color: #fff;
							font-size: 18px;
							height: 100%;
							left: 0;
							padding-top:30px;
							position: absolute;
							top: 0;
							width: 100%;
							text-align:center
					}
</style>


<?php 
 global $wpsh;
  session_start();

if(isset($_SESSION['email']) && $_SESSION['email']!='' && isset($_SESSION['password']) && $_SESSION['password']!='')
{  include("header.php");?>




<!------------------------------------WorkAreaStart--------------------------------------------->

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->


<script>



function disabletoenablesell(){

document.getElementById("sellshares").setAttribute("disabled", false); 


}

function disabletoenablebuy(){

document.getElementById("noticebuyshares").setAttribute("disabled", false); 


}

function submitbuy(){

 var buypermission = document.getElementById("noticepermissiontobuy").value;

 if(buypermission == 1){
 return true;
 }else{
  return false;
 }




}


function submitsell(){

 var sellpermission = document.getElementById("permissiontosell").value;

 if(sellpermission == 1){
 return true;
 }else{
 return false;
 }



}


$(document).ready(function(){

  $("#noticebuymoney").change(function(){
 
    var totalbuyprice = $("#noticetotalbuyprice").val();
    var buymoney = $("#noticebuymoney").val();
    var buycurrency = $("#noticebuycurrency").val();
    var totalbuypricefixed = $("#noticetotalbuypricefixed").val();

    $.post("helperajx.php",
    {
      totalbuyprice:totalbuypricefixed ,
      buymoney:buymoney,
      buycurrency:buycurrency,
      totalbuypricefixed:totalbuypricefixed,
      findtotal:"findtotal"
    },
    function(data,status){

          $("#noticetotalbuyprice").val(data.own);
      
          $("#noticebuyequity").val(data.equity);

         // $("#noticebuyequityhidden").val(data.equity);

          document.getElementById("noticebuyshares").disabled = false;

    });

  });




  $("#noticebuycurrency").change(function(){
 
    var totalbuyprice = $("#noticetotalbuyprice").val();
    var buymoney = $("#noticebuymoney").val();
    var buycurrency = $("#noticebuycurrency").val();
    var totalbuypricefixed = $("#noticetotalbuypricefixed").val();

    $.post("helperajx.php",
    {
      totalbuyprice:totalbuypricefixed ,
      buymoney:buymoney,
      buycurrency:buycurrency,
      totalbuypricefixed:totalbuypricefixed,
      findtotal:"findtotal"
    },
    function(data,status){

          $("#noticetotalbuyprice").val(data.own);
  
          $("#noticebuyequity").val(data.equity);

         // $("#noticebuyequityhidden").val(data.equity);

          document.getElementById("noticebuyshares").disabled = false;


    });

  });


















});






</script>








<?php

	$query = "SELECT * FROM `estimatedvalue`  order by `estimated_valueid` desc "; 

	$result = mysql_query($query);

        $priceinformation = mysql_fetch_array($result);

        $evprice = $priceinformation['evprice']; 

        $evprice = ($evprice/100000000);

        $evcurrency = $priceinformation['evcurrency']; 

        $evtime = $priceinformation['evtime']; 


 
 

?>


<!-------------------------------------WorkAreaEnd---------------------------------------------->
























<style>
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.current{ background:#3DCAFF; color:#000 !important;}
.fa-fw {width: 2em;}
.panel-gray{
	background:#E9E9E9;
	color:#000;
	font-weight:bold;
	font-size:20px;
	padding:0px;
}
body
{
	background:#f1f1f1;
}
.border{

    border: 1px solid #e1e1e1	;
	min-height:455px;
	padding:0; 
	background:#fff

}
.panel table
{
	padding:0px 5px;
}
.nav-stacked
{
	background:#fff;
}
.panel table .text-center
{
	text-align:left
}
.panel table .text-center strong
{
	font-weight:100
}
.panel-gray h4{
	background: none repeat scroll 0 0 #49c8f5;
    color: #fff;
    font-size: 25px;
    margin: 0;
    padding: 7px;
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
.transperent-noticesell{
 display:inline-block;
 width:100%;
 background: -moz-linear-gradient(top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.7)), color-stop(100%,rgba(0,0,0,0.7))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3000000', endColorstr='#b3000000',GradientType=0 ); /* IE6-9 */
 color: transparent;
   text-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
   text-align:center;
 padding: 2%;
 font-size: 20px !important;
  z-index: 9999999;
}
</style>
<script type="text/javascript">
	/*	var result;var ajaxresult;
	
 function ajax(actions,dataString){
	$.ajax({
	type:"post",
	url:"<?php echo SITEURL; ?>/process.php?actions="+actions,
	data: dataString,
	async: false, 
	beforeSend:function(){
		//$("#error-message").html("<div style='align:center;'><img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src='images/load.gif'></div>");
	},
	success:function(data){
		ajaxresult=data;
		//$("#error-message").html(data);
	}
	});
	
		return ajaxresult;
}
$("#currency").on("change",function(){
	//var actions="changeprice";
	var currency=$("#currency").val();
	var price=$("#priceinbtcbuy").val();
	var actions='convertprice';
	var dataString="currency="+currency+"&price="+price;
	result=ajax(actions,dataString);
	$("#totalprice").val(result)
	//alert(result);
});
$("#buyshares").click(function(){
	var actions="transactionamount";
	var buymoney=$("#buymoney").val();
	var priceofshares=$("#totalprice").val();
	var GBP="GBP";//$("#buymoney").val();
	var dataString="buymoney="+buymoney+"&GBP="+GBP+"&priceofshares="+priceofshares;
	result=ajax(actions,dataString);
	//$("#totalprice").val(result);
	alert(result); 
}); 
$("#buymoney").on("focus blur focusin select",function(){
	var actions="shareprice";
	var buymoney=$("#buymoney").val();
	var GBP="GBP";//$("#buymoney").val();
	var dataString="buymoney="+buymoney+"&GBP="+GBP;
	result=ajax(actions,dataString);
	$("#totalprice").val(result);
	$("#priceinbtcbuy").val(result); 
	//alert(result);
});*/
   function isNumberKey(evt)
     {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
           return false;
       
        return true;
     }
</script>










 <?php         include("sidebar.php");      ?> 












<div class="right-cont">

            <?php if($_REQUEST[r] == 'e'){ ?>

            <div class="Opportunity" style="background-color: orange;" >Insufficient Funds</div>

            <?php }else if($_REQUEST[r] == 's'){ ?>

            <div class="Opportunity" style="background-color: yellowgreen;" >Successful Transaction </div>

            <?php }else if($_REQUEST[r] == 'sells'){ ?>

            <div class="Opportunity" style="background-color: yellowgreen;" >Posted Successfully.  <div style="font-size: 10px;color: whitesmoke;"> ( Money will add after selling process completed ) </div></div>

           <?php }else if($_REQUEST[r] == 'selle'){ ?>

            <div class="Opportunity" style="background-color: orange;" >Insufficient Shares</div>

            <?php } ?>



            <div class="Opportunity">Trade Equity</div>

            <div class="left-content2">

 
 
 <?php 
	if(isset($_REQUEST['buynow']) && $_REQUEST['buynow']=="Buy Now"){
		$btcaddress=isset($_REQUEST['btcaddress']) ? ($_REQUEST['btcaddress']) : '';
		$noofshares=isset($_REQUEST['noofshares']) ? ($_REQUEST['noofshares']) : '0';
		$buyuserid=isset($_REQUEST['buyuserid']) ? ($_REQUEST['buyuserid']) : '0';
	}else{
		$sharesbuy = $wpsh->getadminsharesamount();
		$btcaddress=$sharesbuy['bitcoinaddress'];//isset($_REQUEST['btcaddress']) ? ($_REQUEST['btcaddress']) : '';
		$noofshares=$sharesbuy['shares'];//isset($_REQUEST['noofshares']) ? ($_REQUEST['noofshares']) : '0';
		$buyuserid=$sharesbuy['userid'];//isset($_REQUEST['buyuserid']) ? ($_REQUEST['buyuserid']) : '0';
	}

?>



<!---------------------------------------------------------------------------------->
<!-------------------------------Notice to Buy ------------------------------------->
<!---------------------------------------------------------------------------------->




<?php




$buysaleid      = $_REQUEST[buysaleid];
$buynowfrompost = $_REQUEST[buynowfrompost];


$query = "SELECT * FROM `saleshares` WHERE `saleid` = '$buysaleid'";

$result = mysql_query($query);

$saleshares = mysql_fetch_array($result);


//print_r($saleshares);

$salesharessaleid = $saleshares[saleid];

$salesharesuserid = $saleshares[userid];

$salesharessharequantity = $saleshares[sharequantity];

$salesharessalepershareprice = $saleshares[salepershareprice];



?>













  <div class="col-md-12">
  <div class="col-md-6" style="padding:0px 5px 0 0;">
  	<div class="border">
		<form id="noticebuying" name="noticebuying" action="noticebuynowinfo.php" method="post"  >
            <div class="panel">
                <div class=" panel-gray">
                    <h4 class="text-center">
                        Notice to buy from seller</h4>
						
                </div>
                <table border="0" cellpadding="5" cellspacing="5">
                  <tr>
                    <td class="text-center"><strong style="font-size:12px;">Number of share to Buy</strong></td>
                    <td><input type="text" onkeypress="return isNumberKey(event)" value="<?php //echo $salesharessharequantity; ?>" id="noticebuymoney" name="noticebuymoney" class="form-control" style="height:34px;" onmouseover="disabletoenablebuy()" onclick="disabletoenablebuy()"> 
				
					<input type="hidden" name="noticebuyamountshares" id="noticebuyamountshares" value="">
					<input type="hidden" name="noticebuyuserid" id="noticebuyuserid" value="">
					<input type="hidden" name="noticebuybtcaddressshares" id="noticebuybtcaddressshares" value="">
					</td>
					
					</tr>
                  
                  <tr>
                    <td class="text-center"><strong style="font-size:12px;">Price of shares</strong></td>
                    <td><div class="input-group">
                
                <input type="hidden" id="search_param" value="all" name="search_param">  
       
                <input type="hidden" id="actions" name="actions" value="noticebuysharestransaction">    
     
                <input name="noticetotalbuyprice" type="text" id="noticetotalbuyprice" value="<?php $evprice ;
echo  $evprice  =  number_format((float)$salesharessalepershareprice , 8, '.', '');  ?>" class="form-control" placeholder="Price of Shares" readonly style="height:34px;width:120px;">

 <input name="noticetotalbuypricefixed" type="hidden" id="noticetotalbuypricefixed" value="<?php echo $evprice ; ?>" class="form-control" placeholder="Price of Shares" readonly style="height:34px;width:120px;">

                <div class="input-group-btn search-panel">
					 <input type="hidden" id="noticepriceinbtcbuy" name="noticepriceinbtcbuy" /> 

                    <select id="noticebuycurrency" name="noticebuycurrency" onmouseover="disabletoenablebuy()" onclick="disabletoenablebuy()" class="grad" style="padding:7px;width:80px;border:none;">
                        <?php echo $wpsh->getcurrencies(); ?>
                    </select>
          </div>
        </div>
		  <div class="balanceerror" style="color:red;"></div> 
		  </td>
                  </tr>
				  
				  
                  
                  <tr>
                    <td class="text-center"><strong style="font-size:12px;">Total Price </strong></td>

                    <td><input type="text" id="noticebuyequity" name="noticebuyequity" value="<?php echo $wpsh->getequity("00");?> " class="form-control" style="height:34px;" readonly> 

                    <!-- <input type="hidden" id="noticebuyequityhidden" value="<?php echo $wpsh->getequity("00");?> " class="form-control" style="height:34px;" >  -->

                   </td>

                  </tr>
                </table>
                <div class="panel-footer text-center">

                   <input type="hidden"  id="noticepermissiontobuy" name="noticepermissiontobuy" value="0"  readonly>

                   <input style="width: 100%;" type="submit" id="noticebuyshares" class="btn btn-info" value="Buy now!" disabled>

                   <input type="hidden"  id="salesharessaleid" name="salesharessaleid" value="<?php echo $salesharessaleid; ?>"  >

                </div>
            </div>
			</form>
            </div>
        </div>




<!---------------------------------------------------------------------------------->
<!-------------------------------Notice to Buy ------------------------------------->
<!---------------------------------------------------------------------------------->
		
		
<!--		
		
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<script>
var jq = $.noConflict();
jq(document).ready(function(){
jq( "#progressbar" ).progressbar({
value:37
});
});
</script>
<div style="float: right;position: relative;right: 25%;top: -43%;width: 50%;z-index: 99999;">
	<div id="progressbar"></div>   
</div>     
-->













<!--absoluteposition-->
			<div class="" style="display:none"> <p>&nbsp;</p>


		   
     <p>Locked</p><p>&nbsp;</p><p> (Investment Round Underway)</p>
		          
		          <p>&nbsp;</p> <p> <a href="overview.php" target="_self">Learn more</a> </p><link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
                <p>
                  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
                  <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
                </p>


                 <p>&nbsp;</p>

<!---------------------------------------------------------------------------------->
<!-------------------------------Notice to Sell------------------------------------->
<!---------------------------------------------------------------------------------->




<script>
var jq = $.noConflict();
jq(document).ready(function(){
jq( "#progressbar" ).progressbar({
value:37
});
});
</script>
	
	<div id="progressbar"></div> <div style="float: center;position: relative; padding-bottom:50px; width: 10px;z-index: 99999;">                   </div>
				
            </div>
            
			</form>
            </div>
        </div>
        
          
 </div> 
 
<div class="clear"></div>












            </div>
            <div class="clear"></div>
          </div>

  <?php include("footer.php");?>
    
<?php }else{
	echo '<script type="text/javascript">window.location ="index.php"</script>';
}?>