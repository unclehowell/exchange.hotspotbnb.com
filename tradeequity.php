<script type="text/javascript" >
   function all_currency_change_onevent(){
   
   
   
         document.getElementById("buyshares").disabled = true;
         document.getElementById("sellshares").disabled = true;
   
         balcurrency = document.getElementById("balcurrency").selectedIndex;
   
         buycurrency  = document.getElementById("buycurrency").value;
         sellcurrency = document.getElementById("sellcurrency").value;
   
         document.getElementById("buycurrency").selectedIndex = balcurrency ;
         document.getElementById("sellcurrency").selectedIndex = balcurrency ;
      
         var totalbuyprice = $("#totalbuyprice").val();
         var buymoney = $("#buymoney").val();
         var buycurrency = $("#buycurrency").val();
         var totalbuypricefixed = $("#totalbuypricefixed").val();
     
         $.post("helperajx.php",
         {
           totalbuyprice:totalbuypricefixed ,
           buymoney:buymoney,
           buycurrency:buycurrency,
           totalbuypricefixed:totalbuypricefixed,
           findtotal:"findtotal"
         },
         function(data,status){
     
               $("#totalbuyprice").val(data.own);
           
               val_equ = $("#buyequity").val(data.equity);
     
               $("#buyequityhidden").val(data.equity);
                 
              
     
         });
   
   
   
   
         var totalsellprice = $("#totalsellprice").val(); 
         var sellmoney = $("#sellmoney").val();          
         var sellcurrency = $("#sellcurrency").val();    
         var totalsellpricefixed = $("#totalsellpricefixed").val();  
   
     
         $.post("helperajx.php",
         {
           totalsellprice:totalsellpricefixed ,
           sellmoney:sellmoney,
           sellcurrency:sellcurrency,
           totalsellpricefixed:totalsellpricefixed,
           findtotalsell:"findtotalsell"
         },
         function(data,status){
     
               $("#totalsellprice").val(data.own);
       
               val_equ = $("#sellequity").val(data.equity);
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
   .pos{ 
   position: absolute;width: 100%;
   background: rgb(7, 31, 71);
   height: 454px;opacity: 0.7;
   color: rgb(168, 255, 83);
   font-size: 30px;
   font-family: serif;
   padding:0 20px
   }
   .pos2{  position: absolute;width: 58%;
   background: rgb(7, 31, 71);
   height: 454px;opacity: 0.7;
   color: rgb(168, 255, 83);
   font-size: 50px;
   font-family: serif;
   }
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
   { 


    include("header.php");


    ?>
<!------------------------------------WorkAreaStart--------------------------------------------->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script type="text/javascript" >
   function disabletoenablesell(){
   
   document.getElementById("sellshares").setAttribute("disabled", false); 
   
   
   }
   
   function disabletoenablebuy(){
   
   document.getElementById("buyshares").setAttribute("disabled", false); 
   
   
   }
   
   function submitbuy(){
   
    var buypermission = document.getElementById("permissiontobuy").value;
   
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
   
     $("#buymoney").change(function(){
    
       var totalbuyprice = $("#totalbuyprice").val();
       var buymoney = $("#buymoney").val();
       var buycurrency = $("#buycurrency").val();
       var totalbuypricefixed = $("#totalbuypricefixed").val();
   
       $.post("helperajx.php",
       {
         totalbuyprice:totalbuypricefixed ,
         buymoney:buymoney,
         buycurrency:buycurrency,
         totalbuypricefixed:totalbuypricefixed,
         findtotal:"findtotal"
       },
       function(data,status){
   
             $("#totalbuyprice").val(data.own);
         
             $("#buyequity").val(data.equity);
   
             var vb = data.equity;
   
             if(  vb > 0 ) {
             document.getElementById("buyshares").disabled = false;
             }else{
             
             }
   
       });
   
     });
   
   
   
   
     $("#buycurrency").change(function(){
    
       var totalbuyprice = $("#totalbuyprice").val();
       var buymoney = $("#buymoney").val();
       var buycurrency = $("#buycurrency").val();
       var totalbuypricefixed = $("#totalbuypricefixed").val();
   
       $.post("helperajx.php",
       {
         totalbuyprice:totalbuypricefixed ,
         buymoney:buymoney,
         buycurrency:buycurrency,
         totalbuypricefixed:totalbuypricefixed,
         findtotal:"findtotal"
       },
       function(data,status){
   
             $("#totalbuyprice").val(data.own);
     
             $("#buyequity").val(data.equity);
   
             var vb = data.equity;
   
             if(  vb > 0 ) {
             document.getElementById("buyshares").disabled = false;
             }else{
             
             }
   
   
       });
   
     });
   
   
   
   
   
   
   
   
   
   
   
     $("#sellmoney").change(function(){ 
    
       var totalsellprice = $("#totalsellprice").val(); 
       var sellmoney = $("#sellmoney").val();          
       var sellcurrency = $("#sellcurrency").val();    
       var totalsellpricefixed = $("#totalsellpricefixed").val();  
   
       $.post("helperajx.php",
       {
         totalsellprice:totalsellpricefixed ,
         sellmoney:sellmoney,
         sellcurrency:sellcurrency,
         totalsellpricefixed:totalsellpricefixed,
         findtotalsell:"findtotalsell"
       },
       function(data,status){
   
             $("#totalsellprice").val(data.own);
     
             $("#sellequity").val(data.equity);
   
            // $("#sellequityhidden").val(data.equity);
   
            document.getElementById("sellshares").disabled = false;
   
   
       });
   
     });
   
   
   
   
     $("#sellcurrency").change(function(){
    
       var totalsellprice = $("#totalsellprice").val();
       var sellmoney = $("#sellmoney").val();
       var sellcurrency = $("#sellcurrency").val();
       var totalsellpricefixed = $("#totalsellpricefixed").val();
   
       $.post("helperajx.php",
       {
         totalsellprice:totalsellpricefixed ,
         sellmoney:sellmoney,
         sellcurrency:sellcurrency,
         totalsellpricefixed:totalsellpricefixed,
         findtotalsell:"findtotalsell"
       },
       function(data,status){
   
             $("#totalsellprice").val(data.own);
     
             $("#sellequity").val(data.equity);
   
             var vb = data.equity;
   
             if(  vb > 0 ) {
             document.getElementById("sellshares").disabled = false;
             }else{
             
             }
   
       });
   
     });
   
   
   
   
   
   
   
   
   
   
   
     $("#totalsellprice").change(function(){
   
   
   
       document.getElementById("sellcurrency").selectedIndex = 0;
   
    
       var totalsellprice = $("#totalsellprice").val();
       var sellmoney = $("#sellmoney").val();
       var sellcurrency = $("#sellcurrency").val();
       var totalsellpricefixed = $("#totalsellpricefixed").val();
   
       $.post("helperajx.php",
       {
         totalsellprice:totalsellpricefixed ,
         sellmoney:sellmoney,
         sellcurrency:sellcurrency,
         totalsellpricefixed:totalsellpricefixed,
         findtotalsell:"findtotalsell"
       },
       function(data,status){
   
             $("#totalsellprice").val(data.own);
     
             $("#sellequity").val(data.equity);
   
             var vb = data.equity;
   
             if(  vb > 0 ) {
             document.getElementById("sellshares").disabled = false;
             }else{
             
             }
   
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
<?php         include("sidebar.php");      
   $get_controls = $wpsh->get_controls();
   
   
   $cover_up_the_selling_shares = $get_controls[cover_up_the_selling_shares];
   
   $cover_up_the_buy_sell = $get_controls[cover_up_the_buy_sell];
   
   
   if($cover_up_the_buy_sell == 0) {  // if($cover_up_the_buy_sell == 0) start ?>
<!------------if cover_up_the_buy_sell start ---------------->
<!---------------------------------------------------------->
<div class="right-cont">
   <!-- right-cont start -->
   <?php if($_REQUEST[r] == 'e'){ ?>
   <div class="Opportunity" style="background-color: orange;" >Insufficient Funds</div>
   <?php }else if($_REQUEST[r] == 's'){ ?>
   <div class="Opportunity" style="background-color: yellowgreen;color:white" >Successful Transaction </div>
   <?php }else if($_REQUEST[r] == 'sells'){ ?>
   <div class="Opportunity" style="background-color: yellowgreen;color:white" >
      Posted Successfully.  
      <div style="font-size: 10px;color: whitesmoke;"> ( Money will add after selling process completed ) </div>
   </div>
   <?php }else if($_REQUEST[r] == 'selle'){ ?>
   <div class="Opportunity" style="background-color: orange;" >Insufficient Shares</div>
   <?php }else if($_REQUEST[r] == 'insufficient_funds_for_post_sell'){ ?>
   <div class="Opportunity" style="background-color: orange;" >Insufficient Funds For Post Sell</div>
   <?php }else if($_REQUEST[r] == 'previous_transaction_not_confirmed_or_insufficient_confirmed_amount_in_wallet'){ ?>
   <div class="Opportunity" style="background-color: orange;" >Previous Transaction Not Confirmed Or Insufficient Confirmed Amount In Wallet, Please Try After Confirmation of Bitcoins Transactions</div>
   <?php } else if($_REQUEST[r] == 'no_enough_share_to_purchase'){ ?>
   <div class="Opportunity" style="background-color: orange;" >No Enough Share To Purchase</div>
   <?php }else if($_REQUEST[r] == 'insufficient_funds_for_post_sell_or_previous_transaction_not_confirmed_or_insufficient_confirmed_amount_in_wallet_please_try_after_confirmation_of_bitcoins_transactions'){ ?>
   <div class="Opportunity" style="background-color: orange;" >Insufficient Funds For Post Sell Or Previous Transaction Not Confirmed Or Insufficient Confirmed Amount In Wallet, Please Try After Confirmation Of Bitcoins Transactions</div>
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
      <div class="col-md-12">
         <div class="col-md-6" style="padding:0px 5px 0 0;">
            <div class="border">
               <form id="buying" name="buying" action="buynowinfo.php" method="post"  >
                  <div class="panel">
                     <div class=" panel-gray">
                        <h4 class="text-center">
                           Notice to Buy
                        </h4>
                        <div style="color:green"><?php 
                           if(isset($_REQUEST['buytranssucces']) && $_REQUEST['buytranssucces']=="buytranssucces"){
                           echo "Congratulations You have Buy ".$_REQUEST['buyno']." Shares";
                           }
                           ?></div>
                     </div>
                     <table border="0" cellpadding="5" cellspacing="5">
                        <tr>
                           <td class="text-center"><strong style="font-size:12px;">Number of share to Buy</strong></td>
                           <td>
                              <input type="text" onkeypress="return isNumberKey(event)" value="<?php //echo $noofshares; ?>" id="buymoney" name="buymoney" class="form-control" style="height:34px;" onmouseover="disabletoenablebuy()" onclick="disabletoenablebuy()"> 
                              <div class="buyerror" style="color:red;"><?php if(isset($_REQUEST['transerrorbuy']) && $_REQUEST['transerrorbuy']=="transerrorbuy"){
                                 echo "You Cant have Enough Shares to Buy";
                                 }?></div>
                              <input type="hidden" name="buyamountshares" id="buyamountshares" value="<?php echo isset($noofshares) ? ($noofshares) : "0";?>">
                              <input type="hidden" name="buyuserid" id="buyuserid" value="<?php echo isset($buyuserid) ? ($buyuserid) : "0";?>">
                              <input type="hidden" name="buybtcaddressshares" id="buybtcaddressshares" value="<?php echo isset($btcaddress) ? ($btcaddress) : "nobtcaddress";?>">
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center"><strong style="font-size:12px;">Price of shares</strong></td>
                           <td>
                              <div class="input-group">
                                 <input type="hidden" id="search_param" value="all" name="search_param">         
                                 <input type="hidden" id="actions" name="actions" value="buysharestransaction">         
                                 <input name="totalbuyprice" type="text" id="totalbuyprice" value="<?php $evprice ;
                                    echo  $evprice  =  number_format((float)$evprice , 8, '.', '');  ?>" class="form-control" placeholder="Price of Shares" readonly style="height:34px;width:120px;">
                                 <input name="totalbuypricefixed" type="hidden" id="totalbuypricefixed" value="<?php echo $evprice ; ?>" class="form-control" placeholder="Price of Shares" readonly style="height:34px;width:120px;">
                                 <div class="input-group-btn search-panel">
                                    <input type="hidden" id="priceinbtcbuy" name="priceinbtcbuy" /> 
                                    <select id="buycurrency" name="buycurrency" onmouseover="disabletoenablebuy()" onclick="disabletoenablebuy()" class="grad" style="padding:7px;width:80px;border:none;">
                                    <?php echo $wpsh->getcurrencies(); ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="balanceerror" style="color:red;"></div>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center"><strong style="font-size:12px;">Total Price </strong></td>
                           <td>
                              <input type="text" id="buyequity" name="buyequity" value="<?php echo $wpsh->getequity("00");?> " class="form-control" style="height:34px;" readonly> 
                              <!-- <input type="hidden" id="buyequityhidden" value="<?php echo $wpsh->getequity("00");?> " class="form-control" style="height:34px;" >  -->
                           </td>
                        </tr>
                     </table>
                     <div class="panel-footer text-center">
                        <input type="hidden"  id="permissiontobuy" name="permissiontobuy" value="0"  readonly>
                        <input style="width: 100%;" type="submit" id="buyshares" class="btn btn-info" value="Buy now!" disabled>
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
            <script src="http://code.jquery.com/jquery-1.10.2.js" type="text/javascript" ></script>
            <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js" type="text/javascript" ></script>
            
            <script type="text/javascript" >
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
         <!---------------------------------------------------------------------------------->
         <!-------------------------------Notice to Sell------------------------------------->
         <!---------------------------------------------------------------------------------->
         <?php
            $get_controls = $wpsh->get_controls();
            
            
            $cover_up_the_selling_shares = $get_controls[cover_up_the_selling_shares];
            
            $cover_up_the_buy_sell = $get_controls[cover_up_the_buy_sell];
            
            
            if($cover_up_the_selling_shares == 0) {
            
            
            ?>
         <div class="col-md-12" >
            <div class="col-md-6" style="padding:0px 5px 0 0;">
               <div class="border">
                  <form id="selling" name="selling" action="sellnowinfo.php" method="post">
                     <div class="panel">
                        <div class=" panel-gray">
                           <h4 class="text-center">
                              Notice to Sell
                           </h4>
                           <div style="color:green"><?php 
                              if(isset($_REQUEST['selltranssucces']) && $_REQUEST['selltranssucces']=="selltranssucces"){
                              echo "Congratulations You have Sell ".$_REQUEST['sellno']." Shares";
                              }
                              ?></div>
                        </div>
                        <table border="0" cellpadding="5" cellspacing="5">
                           <tr>
                              <td class="text-center"><strong style="font-size:12px;">Number of share to Sell</strong></td>
                              <td>
                                 <input type="text" onkeypress="return isNumberKey(event)" value="<?php //echo $noofshares; ?>" id="sellmoney" name="sellmoney" class="form-control" style="height:34px;" onmouseover="return disabletoenablesell()" onclick="return disabletoenablesell()"> 
                                 <div class="sellerror" style="color:red;"><?php if(isset($_REQUEST['transerrorsell']) && $_REQUEST['transerrorsell']=="transerrorsell"){
                                    echo "You Cant have Enough Shares to Sell";
                                    }?></div>
                                 <input type="hidden" name="sellamountshares" id="sellamountshares" value="<?php echo isset($noofshares) ? ($noofshares) : "0";?>">
                                 <input type="hidden" name="selluserid" id="selluserid" value="<?php echo isset($selluserid) ? ($selluserid) : "0";?>">
                                 <input type="hidden" name="sellbtcaddressshares" id="sellbtcaddressshares" value="<?php echo isset($btcaddress) ? ($btcaddress) : "nobtcaddress";?>">
                              </td>
                           </tr>
                           <tr>
                              <script type="text/javascript" >
                                 function changefixed(){
                                 
                                  document.getElementById("totalsellpricefixed").value =  document.getElementById("totalsellprice").value;
                                 }
                                 
                                          
                              </script>
                              <td class="text-center"><strong style="font-size:12px;">Price of shares</strong></td>
                              <td>
                                 <div class="input-group">
                                    <input type="hidden" id="search_param" value="all" name="search_param">         
                                    <input type="hidden" id="actions" name="actions" value="sellsharestransaction">         
                                    <input name="totalsellprice" type="text" id="totalsellprice" onchange="return changefixed(),disabletoenablesell()" value="<?php $evprice ;
                                       echo  $evprice  =  number_format((float)$evprice , 8, '.', '');  ?>" class="form-control" placeholder="Price of Shares" style="height:34px;width:120px;">
                                    <input name="totalsellpricefixed" type="hidden" id="totalsellpricefixed" value="<?php echo $evprice ; ?>" class="form-control" placeholder="Price of Shares" readonly style="height:34px;width:120px;">
                                    <div class="input-group-btn search-panel">
                                       <input type="hidden" id="priceinbtcsell" name="priceinbtcsell" /> 
                                       <select id="sellcurrency" name="sellcurrency" class="grad" style="padding:7px;width:80px;border:none;" onmouseover="return disabletoenablesell()" onclick="return disabletoenablesell()">
                                       <?php echo $wpsh->getcurrencies(); ?>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="balanceerror" style="color:red;"></div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center"><strong style="font-size:12px;">Total Price </strong></td>
                              <td>
                                 <input type="text" id="sellequity" name="sellequity" value="<?php echo $wpsh->getequity("00");?> " class="form-control" style="height:34px;" readonly> 
                                 <!-- <input type="hidden" id="sellequityhidden" value="<?php echo $wpsh->getequity("00");?> " class="form-control" style="height:34px;" >  -->
                              </td>
                           </tr>
                        </table>
                        <div class="panel-footer text-center">
                           <input type="hidden"  id="permissiontosell" name="permissiontosell" value="0"  readonly>
                           <input type="submit" style="width: 100%;"  id="sellshares" class="btn btn-info" value="Sell now!"  disabled>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php }else{ ?>
      <!-----dummy--------------->
      <div class="col-md-12">
         <div class="col-md-6" style="padding:0px 5px 0 0;">
            <div class="border" style="position:absolute">
               <form id="" name="" action="" method="">
                  <div class="panel">
                     <div class=" panel-gray">
                        <h4 class="text-center">
                           Notice to Sell
                        </h4>
                        <div style="color:green">
                        </div>
                     </div>
                     <table border="0" cellpadding="5" cellspacing="5">
                        <tbody>
                           <tr>
                              <td class="text-center">
                                 <strong style="font-size:12px;">
                                 Number of share to Sell
                                 </strong>
                              </td>
                              <td>
                                 <input type="text" class="form-control" style="height:34px;" onmouseover="return disabletoenablesell()" onclick="return disabletoenablesell()">
                                 <div class="sellerror" style="color:red;">
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">
                                 <strong style="font-size:12px;">
                                 Price of shares
                                 </strong>
                              </td>
                              <td>
                                 <div class="input-group">
                                    <input name="" type="text" id="" value="0.01085000" class="form-control" placeholder="Price of Shares" readonly="" style="height:34px;width:120px;">
                                    <input name="" type="hidden" id="" value="0.01085000" class="form-control" placeholder="Price of Shares" readonly="" style="height:34px;width:120px;">
                                    <div class="input-group-btn search-panel">
                                       <select id="" name="" class="grad" style="padding:7px;width:80px;border:none;" >
                                          <option value="GBP">
                                             GBP
                                          </option>
                                          <option value="BTC">
                                             BTC
                                          </option>
                                          <option value="USD">
                                             USD
                                          </option>
                                          <option value="EUR">
                                             EUR
                                          </option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="balanceerror" style="color:red;">
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">
                                 <strong style="font-size:12px;">
                                 Total Price 
                                 </strong>
                              </td>
                              <td>
                                 <input type="text" id="" name="" value="0.00000000 " class="form-control" style="height:34px;" readonly="">
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="panel-footer text-center">
                        <input type="submit" style="width: 100%;" id="" class="btn btn-info" value="Sell now!" disabled="">
                     </div>
                  </div>
               </form>
            </div>
            <div style="padding-top: 13%;" class="pos" >
               <div> Investment Round Underway  
                  <?php
                     $get_series = $wpsh->get_series(); 
                     
                     $get_sold_share = $wpsh->get_sold_share(); 
                     
                     $sold_shares = $get_sold_share[sold_shares]; 
                     
                     $defaults_share =  $sold_share + $get_series[shares];
                     
                     $math = (( $sold_shares / $defaults_share )) * 100;
                     
                     ?>
               </div>
               <div>
                  <div id="progressbarss">
                     <div> 
                     </div>
                  </div>
                  <div style="font-size: 22px;float:left; width:100%; display:inline-block; text-align:center">
                     <?php echo number_format((float)$math , 5, '.', '');  ?>  % 
                     <div>
                        <style>
                           #progressbarss {
                           background-color: rgb(255, 255, 255);
                           border-radius: 13px;
                           padding: 5px;
                           width: 100%;
                           float:left;
                           margin:10px 0px
                           }
                           #progressbarss > div {
                           background-color: blue;
                           width: <?php echo number_format((float)$math , 5, '.', '');  ?>%; /* Adjust with JavaScript */
                           height: 20px;
                           border-radius: 10px;
                           }
                        </style>
                     </div>
                  </div>
                  <!-----dummy--------------->
                  <?php } ?>
                  <!-- right-cont end -->
               </div>
               </form>
            </div>
         </div>
      </div>
      <div class="clear"></div>
   </div>
   <div class="clear"></div>
</div>
<!---------------------------------------------------------->
<!------------if cover_up_the_buy_sell end ------------------>
<?php }else{  ?>
<!------------else cover_up_the_buy_sell start ---------------->
<!------------------------------------------------------------>
<div class="right-cont">
   <!-- right-cont start -->
   <?php if($_REQUEST[r] == 'e'){ ?>
   <div class="Opportunity" style="background-color: orange;" >Insufficient Funds</div>
   <?php }else if($_REQUEST[r] == 's'){ ?>
   <div class="Opportunity" style="background-color: yellowgreen;" >Successful Transaction </div>
   <?php }else if($_REQUEST[r] == 'sells'){ ?>
   <div class="Opportunity" style="background-color: yellowgreen;" >
      Posted Successfully.  
      <div style="font-size: 10px;color: whitesmoke;"> ( Money will add after selling process completed ) </div>
   </div>
   <?php }else if($_REQUEST[r] == 'selle'){ ?>
   <div class="Opportunity" style="background-color: orange;" >Insufficient Shares</div>
   <?php }else if($_REQUEST[r] == 'insufficient_funds_for_post_sell'){ ?>
   <div class="Opportunity" style="background-color: orange;" >Insufficient Funds For Post Sell</div>
   <?php }else if($_REQUEST[r] == 'previous_transaction_not_confirmed_or_insufficient_confirmed_amount_in_wallet'){ ?>
   <div class="Opportunity" style="background-color: orange;" >Previous Transaction Not Confirmed Or Insufficient Confirmed Amount In Wallet, Please Try After Confirmation of Bitcoins Transactions</div>
   <?php } else if($_REQUEST[r] == 'no_enough_share_to_purchase'){ ?>
   <div class="Opportunity" style="background-color: orange;" >No Enough Share To Purchase</div>
   <?php }else if($_REQUEST[r] == 'insufficient_funds_for_post_sell_or_previous_transaction_not_confirmed_or_insufficient_confirmed_amount_in_wallet_please_try_after_confirmation_of_bitcoins_transactions'){ ?>
   <div class="Opportunity" style="background-color: orange;" >Insufficient Funds For Post Sell Or Previous Transaction Not Confirmed Or Insufficient Confirmed Amount In Wallet, Please Try After Confirmation Of Bitcoins Transactions</div>
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
      <div class="col-md-12">
         <div class="col-md-6" style="padding:0px 5px 0 0;">
            <div class="border">
               <form id="" name="" action="" method=""  >
                  <div class="panel">
                     <div class=" panel-gray">
                        <h4 class="text-center">
                           Notice to Buy
                        </h4>
                        <div style="color:green"><?php 
                           if(isset($_REQUEST['buytranssucces']) && $_REQUEST['buytranssucces']=="buytranssucces"){
                           echo "Congratulations You have Buy ".$_REQUEST['buyno']." Shares";
                           }
                           ?></div>
                     </div>
                     <table border="0" cellpadding="5" cellspacing="5">
                        <tr>
                           <td class="text-center"><strong style="font-size:12px;">Number of share to Buy</strong></td>
                           <td>
                              <input type="text" onkeypress="return isNumberKey(event)" value="<?php //echo $noofshares; ?>" id="buymoney" name="buymoney" class="form-control" style="height:34px;" onmouseover="disabletoenablebuy()" onclick="disabletoenablebuy()"> 
                              <div class="buyerror" style="color:red;"><?php if(isset($_REQUEST['transerrorbuy']) && $_REQUEST['transerrorbuy']=="transerrorbuy"){
                                 echo "You Cant have Enough Shares to Buy";
                                 }?></div>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center"><strong style="font-size:12px;">Price of shares</strong></td>
                           <td>
                              <div class="input-group">
                                 <input name="" type="text" id="" value="<?php $evprice ;
                                    echo  $evprice  =  number_format((float)$evprice , 8, '.', '');  ?>" class="form-control" placeholder="Price of Shares" readonly style="height:34px;width:120px;">
                                 <div class="input-group-btn search-panel">
                                    <select class="grad" style="padding:7px;width:80px;border:none;">
                                    <?php echo $wpsh->getcurrencies(); ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="balanceerror" style="color:red;"></div>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center"><strong style="font-size:12px;">Total Price </strong></td>
                           <td><input type="text" id="" name="" value="<?php echo $wpsh->getequity("00");?> " class="form-control" style="height:34px;" readonly> 
                           </td>
                        </tr>
                     </table>
                     <div class="panel-footer text-center">
                        <input style="width: 100%;" type="submit" id="buyshares" class="btn btn-info" value="Buy now!" disabled>
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
            <script src="http://code.jquery.com/jquery-1.10.2.js" type="text/javascript" ></script>
            <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js" type="text/javascript" ></script>
            
            <script type="text/javascript" >
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
         <!---------------------------------------------------------------------------------->
         <!-------------------------------Notice to Sell------------------------------------->
         <!---------------------------------------------------------------------------------->
         <?php
            $get_controls = $wpsh->get_controls();
            
            
            $cover_up_the_selling_shares = $get_controls[cover_up_the_selling_shares];
            
            $cover_up_the_buy_sell = $get_controls[cover_up_the_buy_sell];
            
            
            if($cover_up_the_selling_shares == 0) {
            
            
            ?>
         <div class="col-md-12" >
            <div class="col-md-6" style="padding:0px 5px 0 0;">
               <div class="border">
                  <form id="" name="" action="" method="">
                     <div class="panel">
                        <div class=" panel-gray">
                           <h4 class="text-center">
                              Notice to Sell
                           </h4>
                           <div style="color:green"></div>
                        </div>
                        <table border="0" cellpadding="5" cellspacing="5">
                           <tr>
                              <td class="text-center"><strong style="font-size:12px;">Number of share to Sell</strong></td>
                              <td>
                                 <input type="text" onkeypress="return isNumberKey(event)" value="<?php //echo $noofshares; ?>" id="" name="" class="form-control" style="height:34px;" > 
                                 <div class="sellerror" style="color:red;"><?php if(isset($_REQUEST['transerrorsell']) && $_REQUEST['transerrorsell']=="transerrorsell"){
                                    echo "You Cant have Enough Shares to Sell";
                                    }?></div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center"><strong style="font-size:12px;">Price of shares</strong></td>
                              <td>
                                 <div class="input-group">
                                    <input name="" type="text" id="" value="<?php $evprice ;
                                       echo  $evprice  =  number_format((float)$evprice , 8, '.', '');  ?>" class="form-control" placeholder="Price of Shares" readonly style="height:34px;width:120px;">
                                    <input name="totalsellpricefixed" type="hidden" id="totalsellpricefixed" value="<?php echo $evprice ; ?>" class="form-control" placeholder="Price of Shares" readonly style="height:34px;width:120px;">
                                    <div class="input-group-btn search-panel">
                                       <select id="sellcurrency" name="sellcurrency" class="grad" style="padding:7px;width:80px;border:none;" onmouseover="return disabletoenablesell()" onclick="return disabletoenablesell()">
                                       <?php echo $wpsh->getcurrencies(); ?>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="balanceerror" style="color:red;"></div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center"><strong style="font-size:12px;">Total Price </strong></td>
                              <td>
                                 <input type="text" id="" name="" value="<?php echo $wpsh->getequity("00");?> " class="form-control" style="height:34px;" readonly> 
                                 <!-- <input type="hidden" id="" value="<?php echo $wpsh->getequity("00");?> " class="form-control" style="height:34px;" >  -->
                              </td>
                           </tr>
                        </table>
                        <div class="panel-footer text-center">
                           <input type="hidden"  id="permissiontosell" name="permissiontosell" value="0"  readonly>
                           <input type="submit" style="width: 100%;"  id="" class="btn btn-info" value="Sell now!"  disabled>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php }else{ ?>
      <!-----dummy--------------->
      <div class="col-md-12">
         <div class="col-md-6" style="padding:0px 5px 0 0;">
            <div class="border" style="position:absolute">
               <form id="" name="" action="" method="">
                  <div class="panel">
                     <div class=" panel-gray">
                        <h4 class="text-center">
                           Notice to Sell
                        </h4>
                        <div style="color:green">
                        </div>
                     </div>
                     <table border="0" cellpadding="5" cellspacing="5">
                        <tbody>
                           <tr>
                              <td class="text-center">
                                 <strong style="font-size:12px;">
                                 Number of share to Sell
                                 </strong>
                              </td>
                              <td>
                                 <input type="text" class="form-control" style="height:34px;" onmouseover="return disabletoenablesell()" onclick="return disabletoenablesell()">
                                 <div class="sellerror" style="color:red;">
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">
                                 <strong style="font-size:12px;">
                                 Price of shares
                                 </strong>
                              </td>
                              <td>
                                 <div class="input-group">
                                    <input name="" type="text" id="" value="0.01085000" class="form-control" placeholder="Price of Shares" readonly="" style="height:34px;width:120px;">
                                    <input name="" type="hidden" id="" value="0.01085000" class="form-control" placeholder="Price of Shares" readonly="" style="height:34px;width:120px;">
                                    <div class="input-group-btn search-panel">
                                       <select id="" name="" class="grad" style="padding:7px;width:80px;border:none;" >
                                          <option value="GBP">
                                             GBP
                                          </option>
                                          <option value="BTC">
                                             BTC
                                          </option>
                                          <option value="USD">
                                             USD
                                          </option>
                                          <option value="EUR">
                                             EUR
                                          </option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="balanceerror" style="color:red;">
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">
                                 <strong style="font-size:12px;">
                                 Total Price 
                                 </strong>
                              </td>
                              <td>
                                 <input type="text" id="" name="" value="0.00000000 " class="form-control" style="height:34px;" readonly="">
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="panel-footer text-center">
                        <input type="submit" style="width: 100%;" id="" class="btn btn-info" value="Sell now!" disabled="">
                     </div>
                  </div>
               </form>
            </div>
            <div style="padding-top: 13%;" class="pos" >
               <div>  Investment Round Underway   </div>
            </div>
         </div>
         <!-----dummy--------------->
         <?php } ?>
         <!-- right-cont end -->
         <div style="padding-top: 13%;width:58%" class="pos" >
            <div> Investment Round Underway  
               <?php
                  $get_series = $wpsh->get_series(); 
                  
                  $get_sold_share = $wpsh->get_sold_share(); 
                  
                  $sold_shares = $get_sold_share[sold_shares]; 
                  
                  $defaults_share =  $sold_share + $get_series[shares];
                  
                  $math = (( $sold_shares / $defaults_share )) * 100;
                  
                  ?>
            </div>
            <div>
               <div id="progressbarss">
                  <div> 
                  </div>
               </div>
               <div style="font-size: 22px;float:left; width:100%; display:inline-block; text-align:center">
                  <?php echo number_format((float)$math , 5, '.', '');  ?>  % 
                  <div>
                     <style>
                        #progressbarss {
                        background-color: rgb(255, 255, 255);
                        border-radius: 13px;
                        padding: 5px;
                        width: 100%;
                        float:left;
                        margin:10px 0px
                        }
                        #progressbarss > div {
                        background-color: blue;
                        width: <?php echo number_format((float)$math , 5, '.', '');  ?>%; /* Adjust with JavaScript */
                        height: 20px;
                        border-radius: 10px;
                        }
                     </style>
                  </div>
               </div>
            </div>
         </div>
         </form>
      </div>
   </div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<!------------------------------------------------------------>
<!------------else cover_up_the_buy_sell end ------------------>
<?php } ?> 
<?php include("footer.php");?>
<?php }else{
   echo '<script type="text/javascript">window.location ="index.php"</script>';
   }?>