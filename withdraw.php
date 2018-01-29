<?php


$url = "https://blockchain.info/ticker";

$value = json_decode(file_get_contents($url),true);

$value = json_encode($value);

?>

<script>

var arrays = '<?php echo $value; ?>';

obj = JSON.parse(arrays); 

  // ISK HKD TWD CHF EUR DKK CLP CAD CNY THB AUD SGD KRW JPY PLN GBP SEK NZD BRL RUB
  




</script>






<script>
function change_currency(){



var amount = document.getElementById("amount").value;

var value  = document.getElementById("selectcurrency").value;

   if(value == "BTC"){
   
   finalvalue = amount; 
 
   document.getElementById("inbtc").value = finalvalue ;

   }else{
   
   finalvalue = (amount)/(obj[value].last); 

   finalvalue = Math.round(finalvalue * 100000000) / (100000000);

   document.getElementById("inbtc").value = finalvalue ;
   
   }

}



function change_amount(){




var amount = document.getElementById("amount").value;

var value  = document.getElementById("selectcurrency").value;

   if(value == "BTC"){
   
   finalvalue = amount; 
 
   document.getElementById("inbtc").value = finalvalue ;

   }else{
   
   finalvalue = (amount)/(obj[value].last); 

   finalvalue = Math.round(finalvalue * 100000000) / (100000000);

   document.getElementById("inbtc").value = finalvalue ;
   
   }

}

</script>

<style>
#selectcurrency{
 width:31% !important;
}
#amount{
 width:29% !important;
}

#amountfake{
 width:29% !important;
}

select{
color: #D5CBFF;
background-color: #FFFFFF;
border-color: #357ebd;
display: inline-block;
padding: 6px 12px;
margin-bottom: 0;
font-size: 15px;
font-weight: 400;
line-height: 1.42857143;
text-align: center;
white-space: nowrap;
vertical-align: middle;
cursor: pointer;
border: 2px solid rgb(213, 203, 255);
border-radius: 4px;
width: 60%;
margin-bottom: 10px;
}

input[type="text"]{
color: #D5CBFF;
background-color: #FFFFFF;
border-color: #357ebd;
display: inline-block;
padding: 6px 12px;
margin-bottom: 0;
font-size: 15px;
font-weight: 400;
line-height: 1.42857143;
text-align: center;
white-space: nowrap;
vertical-align: middle;
cursor: pointer;
border: 2px solid rgb(213, 203, 255);
border-radius: 4px;
width: 60%;
margin-bottom: 10px;
}

input[type="submit"]{
color: #fff;
background-color: #428bca;
border-color: #357ebd;
display: inline-block;
padding: 6px 12px;
margin-bottom: 0;
font-size: 14px;
font-weight: 400;
line-height: 1.42857143;
text-align: center;
white-space: nowrap;
vertical-align: middle;
cursor: pointer;
border: 1px solid transparent;
border-radius: 4px;
width: 60%;

}
.alertmessagetrue{
background-color: rgb(226, 255, 231);
border-radius: 5px;
padding: 10px;
font-family: inherit;
text-align: center;
color: slategray;
margin-bottom: 15px;
border-radius: 5px;
}

.alertmessagefalse{
background-color: rgb(255, 226, 226); 
border-radius: 5px;
padding: 10px;
font-family: inherit;
text-align: center;
color: slategray;
margin-bottom: 15px;
border-radius: 5px;
}

html{
 overflow: hidden;
}
.mainbottom{
background-color: white;
border-radius: 5px;
padding: 10px;
font-family: inherit;
text-align: center;
color: slategray;
overflow: auto;
}
.headin{


text-align: center;

}


label{

width: 40%;
text-align: start;

}
.withdrawa{
background-color: white;
border-radius: 5px;
padding: 10px;
font-family: inherit;
text-align: center;
color: slategray;
}

.formclass{
background-color: white;
border-radius: 5px;
padding: 10px;
font-family: inherit;
text-align: center;
color: slategray;
padding-left: 20px;
}

.insidebox{

float: left;
text-align: center;
margin: 10px;

}
</style>













<?php include('functions.php'); 

error_reporting(0);

$obj = new share();

$userinfodata = $obj->getuserinfowithkey();

?>





	<div id="form_container">
	
		<h1 class="withdrawa"><a style="font-size: 25px;">Withdraw Bitcoins</a></h1>



                <div>



<form id="form_937837" class="formclass"  method="post" action="">
 <div>
      <div>
         <!-- <div>Bitcoin Address </div> -->
         <div>
            <input id="bitcoinaddress" name="bitcoinaddress"  type="text"  value="<?php echo  $_REQUEST['bitcoinaddress']; ?>" placeholder="Bitcoin Address"/> 
         </div>
      </div>

      <div>
         <!-- <div >Amount </div> -->
         <div>

           


            <input id="amount" name="amount" type="text" value="<?php echo  $_REQUEST['amount']; ?>" placeholder="Amount" onchange="change_amount()"    /> 
            <select style="margin-left: -3px;" id="selectcurrency" name="selectcurrency" type="text" onchange="change_currency()" />          <?php echo $obj->getcurrencies(); ?>
            </select>

            <input id="inbtc" name="inbtc" type="text" style="background-color:rgb(252, 255, 226)" value="<?php echo  $_REQUEST['inbtc']; ?>" placeholder="IN BTC"  readonly/>

         </div>
      </div>

       <div>
         <input type="hidden" name="form_id" value="937837" />
         <input id="withdrawbitcoin"  type="hidden" name="withdrawbitcoin" value="withdrawbitcoin" />
         <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
      </div>

   </div>
</form>




               </div>






 <?php 

        if(isset($_REQUEST['withdrawbitcoin'])){    //  if(isset($_REQUEST['withdrawbitcoin'])) Start





          
          $guid = GUID;

          $main_password = main_password;

          $recipient_bitcoin_address = $_REQUEST['bitcoinaddress'];

          $sending_amount = $_REQUEST['inbtc'];



        
        if(is_numeric($sending_amount) == 1){       //  if(is_numeric($sending_amount) == 1) Start

          //========================




                  $rpc_host = 'rpc.blockchain.info';                                           //echo "<br>";          
                  $rpc_port = '443';                                                           //echo "<br>";
                  $rpc_user = GUID;                                                            //echo "<br>";
                  $rpc_pass = main_password;                                                   //echo "<br>";
                  $second_password = second_password;  
                                                                                               //echo "<br>";

         require_once('jsonRPCClient.php');

         $bc = new jsonRPCClient('https://' . $rpc_user . ':' . $rpc_pass . '@' . $rpc_host . ':' . $rpc_port);

         $bc->walletpassphrase($second_password,'60');

         $is_vaild_address = $bc->validateaddress($recipient_bitcoin_address); 
           

          

        if($is_vaild_address['isvalid'] == 1){            //if($is_vaild_address['isvalid'] == 1) Start

              //===========================

              
                $sending_amount = $_REQUEST['inbtc'] * 100000000;                              //echo "<br>";

                 $sender_id = $userinfodata['id'];

                 $sender_bitcoin_address = $userinfodata['bitcoinaddress'];

                 $api = "https://blockchain.info/merchant/$guid/address_balance?password=$main_password&address=$sender_bitcoin_address";  

                 $data = json_decode(file_get_contents($api),true);                    

                 $balance_available_at_sender_bitcoin_address = $data['balance'];                 //echo "<br>";                         

        
                if($balance_available_at_sender_bitcoin_address > ($sending_amount + 20000)){  //if($balance_available_at_sender_bitcoin_address Start
 
                    //=========================

                    


                     $json_url = "https://blockchain.info/merchant/$guid/payment?password=$main_password&second_password=$second_password&to=$recipient_bitcoin_address&amount=$sending_amount&from=$sender_bitcoin_address";


                     $json_data = file_get_contents($json_url,true);

                     $json_feed = json_decode($json_data,true);

                

                     $transaction_hash = $json_feed[tx_hash];

                    if($transaction_hash == '' || $transaction_hash == NULL ){ 

                          $alertmessage = "Transaction Could Not Proceed. There are still Unconfirmed Transactions. Please Try After Some Time" ;

                          $alert = "false";
      

                    }else{

                    $insert_withdraw_record = "INSERT INTO `withdraw_records`(`sending_amount`,`sender_bitcoin_address`, `recipient_bitcoin_address`, `sender_id`, `transaction_hash`) VALUES ('$sending_amount','$sender_bitcoin_address','$recipient_bitcoin_address','$sender_id','$transaction_hash')";
                     
                    $result_withdraw_record = mysql_query($insert_withdraw_record);

                    $mysql_insert_id = mysql_insert_id();
       
                    $sql = "INSERT INTO `tx_hash_blockchian`(`tx_hash`, `user_id`, `foreign_key`) VALUES ('$transaction_hash','$sender_id','$mysql_insert_id')";
 
                    mysql_query($sql);


                          // echo  $message = $json_feed->message;

                          // echo  $txid = $json_feed->tx_hash;

                          $alertmessage = "Amount Successfully transferred." ;

                          $alert = "true";

                   }

                    //========================= 

        
                }else{    //if($balance_available_at_sender_bitcoin_address else start

                    $alertmessage = "Insufficient Balance";   //echo "<br>";

                    $alert = "false";

                }        //if($balance_available_at_sender_bitcoin_address else end




        



              //===========================


        }else{                                            //if($is_vaild_address['isvalid'] == 1) Else Start
 
               $alertmessage =  "Not A Valid Address";
               $alert = "false";
        }                                                 //if($is_vaild_address['isvalid'] == 1) End










         
 



         //========================                           

       
         }else{                                      //  if(is_numeric($sending_amount) == 1) else Start
           $alertmessage = "Invalid Amount";
           $alert = "false";
          
         }                                           //  if(is_numeric($sending_amount) == 1) End


         





        }                      //  if(isset($_REQUEST['withdrawbitcoin'])) End




    ?>




<?php

 if($alert == "true"){

    echo "<div class='alertmessagetrue' >";

    echo $alertmessage;

    echo "</div>";

 }else if($alert == "false") {
 
    echo "<div class='alertmessagefalse' >";

    echo $alertmessage;

    echo "</div>";

 }

?>











               <div class="mainbottom">
                   <div class="headin"> Popular bitcoin withdrawal exchanges</div>
                   <div> 
                        <div style="  margin-left: auto;margin-right: auto;width: 95%;background-color: #b0e0e6;">
                           <div class="insidebox">
                                   <div><a href="https://www.kraken.com" target="_blank" ><img src="img/one.png" /></a>
                                   </div>
                                   <div><a href="https://www.kraken.com" target="_blank" >kraken.com</a>
                                   </div>
                           </div>

                           <div class="insidebox"> 
                                   <div><a href="https://www.coinbase.com" target="_blank" ><img src="img/two.png" /></a>
                                   </div>
                                   <div><a href="https://www.coinbase.com" target="_blank" >coinbase.com</a>

                                   </div>

                           </div>

                           <div class="insidebox"> 
                                   <div><a href="https://www.bittylicious.com" target="_blank" ><img src="img/three.png" /></a>
                                   </div>
                                   <div><a href="https://www.bittylicious.com" target="_blank" >bittylicious.com</a>
                                   </div>

                           </div>

                           <div class="insidebox" target="_blank"  >

                                   <div><a href="https://www.localbitcoins.com" target="_blank"><img src="img/four.png" /></a>
                                   </div>
                                   <div><a href="https://www.localbitcoins.com" target="_blank">localbitcoins.com</a>
                                   </div>
                           </div>
                        </div>
                   </div>
               </div>





		
	</div>


   