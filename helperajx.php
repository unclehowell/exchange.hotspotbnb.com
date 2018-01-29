<?php


include('functions.php');

  $obj = new share();


if(isset($_REQUEST['findtotal']) && $_REQUEST['findtotal'] == 'findtotal'){

   $totalbuyprice = $_REQUEST['totalbuyprice'];

   $buymoney = $_REQUEST['buymoney'];

   $buycurrency = $_REQUEST['buycurrency'];

   $totalbuypricefixed = $_REQUEST['totalbuypricefixed'];

   $equity = $totalbuyprice*$buymoney;

   if($buycurrency == "BTC"){

   $price = json_decode(file_get_contents("https://blockchain.info/ticker"),true);

   $equity = ($equity)/($price['GBP']['last']); 

   $equity=number_format((float)$equity, 8, '.', '');

   $own    =  ($totalbuypricefixed )/( $price['GBP']['last']);

   $own    =  number_format((float)$own, 8, '.', '');

   $data = array("equity"=>$equity,"own"=>$own);

   header('Content-Type: application/json');
   echo json_encode($data);

   }else{

   $price = json_decode(file_get_contents("http://rate-exchange.appspot.com/currency?from=GBP&to=".$buycurrency),true);

   $equity =  $equity* exchange($buycurrency);//$price['rate'];

   $own    =  $totalbuypricefixed * exchange($buycurrency);//$price['rate'];

   $own    =  number_format((float)$own, 8, '.', '');

   $equity =  number_format((float)$equity, 8, '.', '');

   $data = array("equity"=>$equity,"own"=>$own );

   header('Content-Type: application/json');
   echo json_encode($data);

   }


  
  

}else if(isset($_REQUEST['findtotalsell']) && $_REQUEST['findtotalsell'] == 'findtotalsell'){



 $totalsellprice = $_REQUEST['totalsellprice'];

   $sellmoney = $_REQUEST['sellmoney'];

   $sellcurrency = $_REQUEST['sellcurrency'];

   $totalsellpricefixed = $_REQUEST['totalsellpricefixed'];

   $equity = $totalsellprice*$sellmoney;

   if($sellcurrency == "BTC"){

   $price = json_decode(file_get_contents("https://blockchain.info/ticker"),true);

   $equity = ($equity)/($price['GBP']['last']); 

   $equity=number_format((float)$equity, 8, '.', '');

   $own    =  ($totalsellpricefixed )/( $price['GBP']['last']);

   $own    =  number_format((float)$own, 8, '.', '');

   $data = array("equity"=>$equity,"own"=>$own);

   header('Content-Type: application/json');
   echo json_encode($data);

   }else{

   $price = json_decode(file_get_contents("http://rate-exchange.appspot.com/currency?from=GBP&to=".$sellcurrency),true);

   $equity =  $equity* exchange($sellcurrency);//$price['rate'];

   $own    =  $totalsellpricefixed * exchange($sellcurrency);//$price['rate'];

   $own    =  number_format((float)$own, 8, '.', '');

   $equity =  number_format((float)$equity, 8, '.', '');

   $data = array("equity"=>$equity,"own"=>$own );

   header('Content-Type: application/json');
   echo json_encode($data);

   }

}else if(isset($_REQUEST['get_username_info']) && $_REQUEST['get_username_info'] == 'get_username_info'){

  $username = $_REQUEST['username'];
  $email =  $_REQUEST['email'];
 
  $username = $obj ->check_vaidation_registration($username,"username");
  $email = $obj ->check_vaidation_registration($email,"email");

   $data = array("username"=>$username ,"email"=>$email );
   header('Content-Type: application/json');
   echo json_encode($data);



}else if(isset($_REQUEST['change_currency_value']) && $_REQUEST['change_currency_value'] == 'change_currency_value'){

  $value =  $_REQUEST['value'];
  $type  =  $_REQUEST['type'];
 
 
   $data = $obj ->currency_converter($type,$value);

   $data = array("value"=>$data,"email"=>$email );
   header('Content-Type: application/json');
   echo json_encode($data);



}















exchange($buycurrency);




function exchange($cur){

$url = "http://query.yahooapis.com/v1/public/yql?q=select * from yahoo.finance.xchange where pair in ('GBP$cur')&env=store://datatables.org/alltableswithkeys"; 

$xml = simplexml_load_file($url) or die("Exchange feed not loading!");

$exchange = array(); 

for($i=0; $i<2; $i++){ 

    $name = (string)$xml->results->rate[$i]->Name; //echo "<br>";

    $rate = (string)$xml->results->rate[$i]->Rate; //echo "<br>";

    break;

}

return trim($rate);

}


















?>