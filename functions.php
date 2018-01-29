<?php
 include('config.php');
 session_start();
 global $wpsh;

class share
{
	
	function login($email,$password)
	{
        $true=1;
        $false=0;
	   $query="SELECT * FROM users WHERE email='".$email."' AND password= '".$password."'";
           $resul= mysql_query($query); //or die($query."<br/><br/>".mysql_error());

		$num=mysql_num_rows($resul);
		if ($num>1){
			while($row = mysql_fetch_array($result))
			{
				$_SESSION['userid']=$row['id'];
				$_SESSION['email']=$row['email'];
				$_SESSION['password']=$row['password'];
				$_SESSION['bitcoinaddess']=$row['bitcoinaddess'];
			}
			return $true;
		}
		else
		{	
		   return $false;
		}
	}
	function logout()
	{
		session_destroy();
	}
	
	function register($email,$password,$locationip='',$status='1')
	{
		$query="INSERT INTO users (email,password,locationip,status) VALUES ('".$email."','".$password."','".$locationip."','".$status."')";
		$result=$this->query($query);
		return($result);
		
	}
	function sharebalance()
	{
		$query="SELECT shares FROM users WHERE email='".$_SESSION['email']."'";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		$result=isset($row['shares']) ? ($row['shares']) : "0";
		return($result);
	}
	function certificateid()
	{
		$query="SELECT bitcoincertificateid FROM users WHERE email='".$_SESSION['email']."'";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		$result=isset($row['bitcoincertificateid']) ? ($row['bitcoincertificateid']) : "0";
		return($result);
	}
	function getbitcoinaddress()
        {


		$query="SELECT * FROM `users` WHERE email='".$_SESSION['email']."'";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		$result=isset($row['bitcoinaddress']) ? ($row['bitcoinaddress']) : "0";
		return($result);

	}
	function select_user(){
			$sql="SELECT * FROM users WHERE id= '".$_SESSION['userid']."'"; 
			$rs=mysql_query($sql);
			return $rs;
	}
	function query($query)
	{
		$result= mysql_query($query);	
		return($result);
	}
	function selectquery($field="*",$table="",$condition="",$limit="",$orderby="")
	{
		$query="SELECT ".$field." FROM ".$table." ".$condition." ".$limit." ".$orderby.";";
		$result=mysql_query($query);
		$result=mysql_fetch_array($result);
		return $result;
	}
	function getcurl($url)
	{
	   $ch=curl_init($url);
	   curl_setopt($ch,CURLOPT_HEADER,0);
	   curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	   $result=curl_exec($ch);
	   curl_close($ch);  
	   return $result;
	}
	function randomPassword() 
	{
	   $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
	   $pass = array(); //remember to declare $pass as an array
	   $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	   for ($i = 0; $i < 15; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $alphabet[$n];
	   }
	   return implode($pass); //turn the array into a string
	}
	function getbtcaddess($email)
	{
		$query="SELECT * FROM users WHERE email = '".$email."'";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);
		if ($num==1){
			
			while($row = mysql_fetch_array($result)){
				$btcaddress=$row['bitcoinaddress'];
			}
			return($btcaddress);
		}
	}
	function getbtcaddessbalance($btcaddrss)
	{
	   // $apiurl="https://blockchain.info/q/addressbalance/".$btcaddrss; 
	//	$data = $this->getcurl($apiurl);
	//	$finaldata = json_decode($data,true);
	//return ($finaldata);
		
		
		
		$query="SELECT btc FROM `users` WHERE email='".$_SESSION['email']."'";
		$result=mysql_query($query);
		
		if($result) {
		$row=mysql_fetch_array($result);
		$result=isset($row['btc']) ? ($row['btc']) : "0";
		return($result);
		} 
		
		return 0;
		
	
	}
	function getcurrentBTC()
	{
		$apiurl="https://blockchain.info/ticker";
		$data = $this->getcurl($apiurl);
		$finaldata = json_decode($data,true);
		return ($finaldata);
	}
	function currentrate($ratein)
	{
		$apiurl="https://api.bitcoinaverage.com/ticker/".$ratein;
		$data = $this->getcurl($apiurl);
		$finaldata = json_decode($data,true);
		return $finaldata;
	}
	function currentratebtc($curreny,$currentprice)
	{
		$apiurl="https://blockchain.info/tobtc?currency=".$curreny."&value=".$currentprice;
		$data = $this->getcurl($apiurl);
		//$finaldata = json_decode($data);
		return $data;
	}
	function checkmail($email)
	{
		$query="SELECT * FROM users WHERE email = '".$email."'";
		$result=mysql_query($query); 

		$num=mysql_num_rows($result);
		if ($num>0){
			return "1";
		}
		else
		{	
			return "0";
		}
	}
	function convertToBTCFromSatoshi($value) {
		$BTC = $value / 100000000 ;
		return $BTC;
	}
	function convertToSatoshiFromBTC($value) {
		$BTC = $value * 100000000 ;
		return $BTC;
	}
	function currentshareprice() {
		$query = "SELECT * FROM current_share order by share_id desc limit 1";
		$sql=mysql_query($query);
		while($row=mysql_fetch_array($sql)){ 
			$currentshareprice=$row['share_price'];
		}
		return $currentshareprice;
	}
	function getestimatedvalue() {
		$query = "SELECT * FROM estimatedvalue order by estimated_valueid desc limit 1";
		$sql=mysql_query($query);
		while($row=mysql_fetch_array($sql)){ 
			//$estimatedvalue.=$this->getcurrencysymbol($row['evcurrency'])." ";
			$estimatedvalue=" ".number_format($row['evprice'])." ";
			$estimatedvalue.=$row['evcurrency'];
		}
		return $estimatedvalue;
	}

	function getestimatedvalueall() {
		$query = "SELECT * FROM estimatedvalue";
		$sql=mysql_query($query);
		
		return $sql;
	}

	function getestimatedvalueallgraph() {
		$query = "SELECT * FROM estimatedvaluegraph";
		$sql=mysql_query($query);
		
		return $sql;
	}

	function getsharebuyfee() {
		
                $query = "SELECT * FROM `sharefee` order by `sharefeeid` desc limit 1";
		$sql=mysql_query($query);
		while($row=mysql_fetch_array($sql)){ 
			$buyfee = $row['buyfee'];
		}

		return $buyfee ;
	}



       function getsharesellfee() {
		
                $query = "SELECT * FROM `sharefee` order by `sharefeeid` desc limit 1";
		$sql=mysql_query($query);
		while($row=mysql_fetch_array($sql)){ 
			$buyfee = $row['salefee'];
		}

		return $buyfee ;
	}

	function getusershareslimit() {
		$query = "SELECT * FROM users WHERE id='".$_SESSION['userid']."'";   //bitcoinaddess'".$_SESSION['bitcoinaddess']."'";
		$sql=mysql_query($query);
		$row=mysql_fetch_array($sql);
		$usershare=$row['setsharelimit'];
		return $usershare;
	}
	function getsharesalefee() {
		$query = "SELECT salefee FROM sharefee";
		$sql=mysql_query($query); 
		$num= mysql_num_rows($sql);
		$row=mysql_fetch_array($sql);
		$sharefee=$row['salefee'];
		return $sharefee;
	}
	function getadminsharesamount() {
		$query = "SELECT * FROM users Where bitcoinaddress='1DJ4bVxVU3jgpxweYE3L35WFrh8JSS2Pck'";
		$sql=mysql_query($query); 
		$num= mysql_num_rows($sql);
		$row=mysql_fetch_array($sql);
		$sharefee['shares']=$row['shares'];
		$sharefee['bitcoinaddress']=$row['bitcoinaddress'];
		$sharefee['userid']=$row['id'];
		return $sharefee;
	}
	function totalsharescompany() {
		return "1000000000";
	}
	function formatBTC($value) {
		$value = sprintf('%.8f', $value);
		$value = rtrim($value, '0') . ' BTC';
		echo formatBTC(convertToBTCFromSatoshi($btcaddrss));
		return $value;
	}
	function getequity($sharepurchased) {

		$totalshares=$this->totalsharescompany();

		$equity = ($sharepurchased/$totalshares)*100;

		$equity=number_format((float)$equity, 6, '.', '');

		return $equity;

	}
	function transferamount($amount) {
		$amount=$this->convertToSatoshiFromBTC($amount); 
		//echo $apiurl="https://blockchain.info/merchant/".GUID."/payment?password=".main_password."&second_password=".second_password."&to=".btcaddess."&amount=".$amount."&from=".btcaddess;
		//&shared=$shared&fee=$fee&note=$note
		$data = $this->getcurl($apiurl); 
		$finaldata = json_decode($data,true);
		return $finaldata;
	}
	function paybuyamountmultiple($guid,$firstpassword,$secondpassword,$amounta,$amountb,$addressa,$addressb ){
		echo $guid=$guid;echo "<br />";
		echo $firstpassword=$firstpassword;echo "<br />";
		echo $secondpassword=$secondpassword;echo "<br />";
		echo $amounta = $amounta;echo "<br />";
		echo $amountb = $amountb;echo "<br />";
		echo $addressa = $addressa;echo "<br />";
		echo $addressb = $addressb;echo "<br />";
		echo $recipients = urlencode('{
						  "'.$addressa.'": '.$amounta.',
						  "'.$addressb.'": '.$amountb.'
					   }');
 
		echo $json_url = "http://blockchain.info/merchant/$guid/sendmany?password=$firstpassword&second_password=$secondpassword&recipients=$recipients";
		//$data = $this->getcurl($apiurl); 
		//$finaldata = json_decode($data,true);
		//return $finaldata;
	}
	function addtransaction($sharequantity,$salepricepersharedb,$totalsalepricedb,$sharepriceinbtc,$sharepriceinsatoshi)
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		$query="INSERT INTO saleshares (userid,sharequantity,salepershareprice,saletotalshareprice,sharepriceinbtc,sharepriceinsatoshi,saleip) VALUES('".$_SESSION['userid']."','".$sharequantity."','".$salepricepersharedb."','".$totalsalepricedb."','".$sharepriceinbtc."','".$sharepriceinsatoshi."','".$ip."')";
		$result=$this->query($query);
		$type="sale";
		$userid=$_SESSION['userid'];
		$updatesalebuy=$this->updatesalebuy($userid,$sharequantity,$sharepriceinbtc,$sharepriceinsatoshi,$type);
		return($result);
	}
	function getpershareprice($userid)
	{
		$query="SELECT * from saleshares WHERE userid=$userid ORDER BY saletime DESC LIMIT 1 ";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		$salepershare=$row['salepershareprice'];
		return($salepershare);
	}
	function getserieaperc()
	{
		$query="SELECT * from serieaperc ORDER BY shareid DESC LIMIT 1 ";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		$salepershare=$row['serieaperc'];
		return($salepershare);
	}
	function updatesalebuy($userid,$sharequantity,$sharepriceinbtc,$sharepriceinsatoshi,$type)
	{
		$userquery="SELECT * FROM runningshares WHERE userid='".$userid."'";
		$result=mysql_query($userquery);
		if($type=="sale"){
			$num=mysql_num_rows($result);
			if($num==1){
				$row=mysql_fetch_array($result);
				$sharequantity=$row['rsharequantity']+$sharequantity;
				$sharepriceinbtc=$row['rsharepriceinbtc']+$sharepriceinbtc;
				$sharepriceinsatoshi=$row['rsharepriceinsatoshi']+$sharepriceinsatoshi;
				$query="UPDATE runningshares SET rsharequantity='".$sharequantity."',rsharepriceinbtc='".$sharepriceinbtc."',rsharepriceinsatoshi='".$sharepriceinsatoshi."' WHERE userid='".$_SESSION['userid']."'";
				$result=$this->query($query);
				return($result);
			}else if($num==0){
				$query="INSERT INTO runningshares (userid,rsharequantity,rsharepriceinbtc,rsharepriceinsatoshi) VALUES('".$userid."','".$sharequantity."','".$sharepriceinbtc."','".$sharepriceinsatoshi."')";
				$result=$this->query($query);
				return($result);
			}
		}
		else if($type=="buy"){
			$row=mysql_fetch_array($result);
			$sharequantity=$row['rsharequantity']-$sharequantity;
			$sharepriceinbtc=$row['rsharepriceinbtc']-$sharepriceinbtc;
			$sharepriceinsatoshi=$row['rsharepriceinsatoshi']-$sharepriceinsatoshi;
			if($sharequantity>0){
				$query="UPDATE runningshares SET rsharequantity='".$sharequantity."',rsharepriceinbtc='".$sharepriceinbtc."',rsharepriceinsatoshi='".$sharepriceinsatoshi."' WHERE userid='".$userid."'";
				$result=$this->query($query);
			}
			else{
				$query="DELETE FROM runningshares WHERE userid='".$userid."'";
				$result=$this->query($query);
			}
			return($result);
		}
	}
	function addbuytransaction($buyuserid,$transtotalamount,$buyfrombtcaddress,$buysharesaomunt,$buynoofshare,$msg,$tx_hash)
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		$transtotalamount=$this->convertToSatoshiFromBTC($transtotalamount); 
		$buysharesaomunt=$this->convertToSatoshiFromBTC($buysharesaomunt); 
		$query="INSERT INTO transactions (userid,transtotalamount,buyfrombtcaddress,buysharesaomunt,buynoofshare,msg,tx_hash,ipaddress) VALUES('".$_SESSION['userid']."','".$transtotalamount."','".$buyfrombtcaddress."','".$buysharesaomunt."','".$buynoofshare."','".$msg."','".$tx_hash."','".$ip."')";
		$resultbuy=mysql_query($query);
		$buytransactionid=mysql_insert_id();
		
		$userid=$buyuserid;
		$buysharesaomuntbtc=$this->convertToBTCFromSatoshi($buysharesaomunt); 
		$type="buy";
		$updatesalebuy=$this->updatesalebuy($userid,$buynoofshare,$buysharesaomuntbtc,$buysharesaomunt,$type);
		
		if(isset($updatesalebuy)){
			$feefrom=$this->getbtcaddess($_SESSION['email']);$msg='';$tx_hash='';
			$feeamount=$transtotalamount-$buysharesaomunt;
			$adminbuyfee=$this->adminbuysharestransaction($buytransactionid,$feefrom,$feeamount,$msg,$tx_hash);
		}
		$salerid=$buyuserid;
		$buyerid=$_SESSION['userid'];
		$noofshares=$buynoofshare;
		$shareaccount=$this->updateshareaccount($salerid,$buyerid,$noofshares,$buyfrombtcaddress);
		//return ($result); 
	}
	function updateshareaccount($salerid,$buyerid,$noofshares,$buyfrombtcaddress)
	{
		echo $salerquery="SELECT * FROM users WHERE id='".$salerid."'";
		$salersql=mysql_query($salerquery);
		$row=mysql_fetch_array($salersql);echo "<br />";
		$salershares=$row['shares'];
		$salenewshares=$salershares-$noofshares;
		$salesetsharelimit=$row['setsharelimit'];
		$salenewsetsharelimit=$salesetsharelimit-$noofshares;
		echo $salerupdatequery="UPDATE users SET  shares='".$salenewshares."', setsharelimit='".$salenewsetsharelimit."' WHERE id='".$salerid."'";
		$salerupdatesql=mysql_query($salerupdatequery);
		
		echo $buyerquery="SELECT * FROM users WHERE id='".$buyerid."'";
		$buyersql=mysql_query($buyerquery);
		$row1=mysql_fetch_array($buyersql);
		$buyershares=$row1['shares'];
		$buyernewshares=$buyershares+$noofshares; 
		echo $buyerupdatequery="UPDATE users SET  shares='".$buyernewshares."' WHERE id='".$buyerid."'";
		$buyerupdatesql=mysql_query($buyerupdatequery);
		return $result; 
	}
	function adminbuysharestransaction($buytransactionid,$feefrom,$feeamount,$msg,$tx_hash) 
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		$query="INSERT INTO adminfeetransaction (buytransactionid,feefrom,feeamount,msg,tx_hash,feetarnsip) VALUES('".$buytransactionid."','".$feefrom."','".$feeamount."','".$msg."','".$tx_hash."','".$ip."')";
		$result=$this->query($query);
		return $result;
	}
	function salesharestrans($amount) {
		$amount=$this->convertToSatoshiFromBTC($amount); 
		//echo $apiurl="https://blockchain.info/merchant/".GUID."/payment?password=".main_password."&second_password=".second_password."&to=".btcaddess."&amount=".$amount."&from=".btcaddess;
		//&shared=$shared&fee=$fee&note=$note
		$data = $this->getcurl($apiurl); 
		$finaldata = json_decode($data,true);
		return $finaldata;
	}
	function getcurrencysymbol($currency){
		if($currency=="BTC"){
			echo "฿";
		}elseif($currency=="USD"){
			echo "$";
		}elseif($currency=="GBP"){
			echo "£";
		}elseif($currency=="EUR"){
			echo "€";
		}elseif($currency=="JPY"){
			echo "¥";
		}elseif($currency=="CNY"){
			echo "¥";
		}elseif($currency=="CAD"){
			echo "$";
		}elseif($currency=="RUB"){
			echo "RUB";
		}
	
	}
	function curPageURL() {
		$pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	  $urlpageURL =explode ("/", $pageURL );
	  $cnturlpageURL=count($urlpageURL);
	  return $urlpageURL[$cnturlpageURL-1];
	 //return $pageURL;
	}
	function getcurrencies(){
		
           $currencies= '<option value="GBP">GBP</option>
          <option value="BTC">BTC</option>
          <option value="USD">USD</option>
          <option value="EUR">EUR</option>';
          /*<option value="JPY">JPY</option>
          <option value="CNY">CNY</option>
          <option value="CAD">CAD</option>
          <option value="RUB">RUB</option>*/
	  return $currencies;
	}			
	
	function getuserinfo(){

            $email    = $_SESSION['email']; 
            $password = $_SESSION['password'];

            $query="SELECT * FROM users WHERE email='".$email."' AND password= '".$password."'";
            $resul= mysql_query($query);
       
            return $resul;
        }


       function getuserinfobyid($id){


            $query="SELECT * FROM users WHERE `id`='$id'";
            $resul= mysql_query($query);
       
            return $resul;
        }


       /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: Select  data from user table for current user.
           @ Description :: Select all data from user table for current user. and with key and associative array formate
             example $data['id'], $data['email'] and $data[0],$data[1].

        */

       function getuserinfowithkey(){

            $email    = $_SESSION['email']; 
            $password = $_SESSION['password'];

            $query="SELECT * FROM users WHERE email='".$email."' AND password= '".$password."'";

            $result= mysql_query($query);
       
            $row = mysql_fetch_array($result);
     
            return $row; 
        }

        /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: Select all data from setting table.
           @ Description :: Select all data from setting table.and with key and associative array formate
             example $data['id'], $data['comapanyaddress'] and $data[0],$data[1].

        */

	function getsettings(){

            $query="SELECT * FROM `settings` WHERE 1";
            
            $result= mysql_query($query);

            $row = mysql_fetch_array($result);
     
            return $row; 
        }


    

        /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: Select all data from controls table.
           @ Description :: Select all data from controls table.and with key and associative array formate
             example $data['id'], $data['cover_up_the_selling_shares'] and $data[0],$data[1].

        */

	function get_controls() {

        $sql = "SELECT * FROM `controls` WHERE 1";

        $rs = mysql_query($sql); 

        $rs = mysql_fetch_array($rs); 
	 	
        return $rs;  

        }


        /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: Select  data from buyrecordforuser table for current user.
           @ Description :: Select all data from buyrecordforuser table for current user. and with key and associative array formate
             example $data['id'], $data['xxx'] and $data[0],$data[1].

        */

	function get_records_buy() {

        $getusrinfo = self::getuserinfowithkey();

        $getusrinfoid = $getusrinfo[id];

        $sql = "SELECT * FROM `buyrecordforuser` where `userid`='$getusrinfoid'";

        $rs = mysql_query($sql); 

        $i = 0 ;
        while($rows = mysql_fetch_array($rs)){

           
            $data[$i]['id']           = $rows[id];
            $data[$i]['userid']       = $rows[userid];
            $data[$i]['shares']       = $rows[shares];
            $data[$i]['shareprice']   = $rows[shareprice];
            $data[$i]['ip']           = $rows[ip];
            $data[$i]['sharetime']    = $rows[sharetime];
            $data[$i]['type']         = $rows[type];



        $i++; }
	 	
        return $data;  

        }


       /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: Select  data from controls table for current user.
           @ Description :: Select all data from controls table for current user. and with key and associative array formate
             example $data['id'], $data['xxx'] and $data[0],$data[1].

        */

      function get_records_sell()  {

        $getusrinfo = self::getuserinfowithkey();

        $getusrinfoid = $getusrinfo[id];

        $sql = "SELECT * FROM `saleshares` where `userid`='$getusrinfoid'";

        $rs = mysql_query($sql); 

        $i = 0 ;
        while($rows = mysql_fetch_array($rs)){

       
           
            $data[$i]['id']           = $rows[saleid];
            $data[$i]['userid']       = $rows[userid];
            $data[$i]['shares']       = $rows[sharequantity];
            $data[$i]['shareprice']   = $rows[salepershareprice];
            $data[$i]['ip']           = $rows[saleip];
            $data[$i]['sharetime']    = $rows[saletime];
            $data[$i]['type']         = $rows[type];



        $i++; }
	 	
        return $data;  

        }




        /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: Select  data from users table for seriesa user.
           @ Description :: Select all data from seriesa table for current user. and with key and associative array formate
             example $data['id'], $data['xxx'] and $data[0],$data[1].

        */


	function get_series(){

            $query="SELECT * FROM `users` WHERE `type` = 'SHARE' and `typeid` = '1'";
            
            $result= mysql_query($query);

            $row = mysql_fetch_array($result);
     
            return $row; 
        }



       /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: Select  data from users table for sold_shares user.
           @ Description :: Select all data from sold_shares table for current user. and with key and associative array formate
             example $data['id'], $data['xxx'] and $data[0],$data[1].

        */


       function get_sold_share(){

            $query="SELECT sum(`shares`) as sold_shares FROM `buyrecordforuser` WHERE `purchase_type` = 'SHARE'";
            
            $result= mysql_query($query);

            $row = mysql_fetch_array($result);
     
            return $row; 
        }


 


       /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: Select  data from users table for try to register.
           @ Description :: @parmas 1.) value = value form inputs. 
           @ Description :: @parmas 2.) value = column name. 
           
        */


       function check_vaidation_registration($value,$type){

            $query="SELECT * from `users` WHERE `$type` = '$value'";
            
            $result= mysql_query($query);

            $row = mysql_num_rows($result);
     
            return $row; 
        }



       /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: Simple Currency convert.
           @ Description :: @parmas 1.) type = example "BTC". 
           @ Description :: @parmas 2.) value = example "0.001". 
           
        */


       function currency_converter($type,$value){

            if($type == "BTC"){

            $rate['last'] = 1;
           
            }else{

            $rate = self::currentrate($type); 

            }

            $data = $value*$rate['last'];
          
            return $data;
     
        }


       function currency_converter_recursive($type,$value){

            if($type == "BTC"){

            $rate['last'] = 1;
           
            }else{

            $rate = self::currentrate($type); 

            }

            $data = $value/$rate['last'];
          
            return $data;
     
        }



        /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: get notification from block chain.
           @ Description :: This function gives confirmation message for user from the block chain  for new transaction.
           
        */


       function get_notification(){

        $getusrinfo = self::getuserinfowithkey();

        $getusrinfoid = $getusrinfo[id];

        $sql = "SELECT * FROM `tx_hash_blockchian` WHERE `user_id` = '$getusrinfoid' order by id desc";

        $rs = mysql_query($sql); 

        $i = 0 ;

        $rows = mysql_fetch_array($rs);
     
        $tx_hash = $rows[tx_hash]; 

        $apiurl = "https://blockchain.info/q/getblockcount";
       
        $data = $this->getcurl($apiurl);

	$getblockcount = json_decode($data,true);

        $apiurl = "https://blockchain.info/tx/$tx_hash?&format=json";

        $data = $this->getcurl($apiurl);

	$finaldata = json_decode($data,true);

        $array = array();

         if($finaldata['block_height'] == $array){
          
           // echo "Your last transaction is not confirmed yet.";

            echo "Icon will appear green when transaction is confirmed."; echo "&nbsp;&nbsp;&nbsp;<img id='result' src='img/red.png'>";

         }else{

            // echo "Your last transaction was successful. Total Confirmations "; echo $confirmations = $getblockcount - $finaldata['block_height'] + 1;

           echo "Icon will appear green when transaction is confirmed."; echo "&nbsp;&nbsp;&nbsp;<img id='result' src='img/green.png'>";

            //echo "<script> document.getElementById('confirmation').style.display = 'none' ;</script>";

         }


 
     
        }

   


          /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: Select  data from estimatedvalue  table for estimated value .
           @ Description :: with key and associative array formate
             example $data['id'], $data['xxx'] and $data[0],$data[1].
          */

         function get_estimated_value() {

		$query = "SELECT * FROM estimatedvalue order by estimated_valueid desc limit 1";

		$sql=mysql_query($query);

		$row=mysql_fetch_array($sql);
		
		return $row;
	 }


          /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: insert certificate_id .
           @ Description :: @param
             value 1: user id;
             value 2: estimate price id;
          */

        function insert_certificate_id($user_id,$estimated_id) {

		   $insertsql = "INSERT INTO `certificate_id`(`user_id`,`estimate_price_id`) VALUES ('$user_id','$estimated_id')";

                   mysql_query($insertsql);

                   return mysql_insert_id();
	 }





          /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: insert Bank Transfer unique reference id .
           @ Description :: @param
             value 1: user id;
             value 2: unique reference id;
          */

        function insert_Bank_Transfer($user_id,$unique_reference_id) {

		   $insertsql = "INSERT INTO `bank_transfer_id`(`user_id`,`unique_reference_id`) VALUES ('$user_id','$unique_reference_id')";

                   mysql_query($insertsql);

                   return mysql_insert_id();
	 }


          /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: Select Bank Transfer unique reference id (With key).
           @ Description :: @param
             value 1: unique reference id;
          */

        function select_Bank_Transfer_with_key($unique_reference_id) {

		   $select = "select * from `bank_transfer_id` where `unique_reference_id` = '$unique_reference_id'";

                   $query = mysql_query($select);

                   $row = mysql_fetch_array($query);

                   return $row;
	 }


         /*
           @ Incarnate software solution 2014 
           @ Rakesh dongre 
           @ work function :: get Sales Share Info.
           @ Description ::  get Sales Share Info.
        */

        function get_Sales_Share_Info(){

		   $query = "SELECT * FROM `saleshares` where `sharequantity`> '0'";

                   $query = mysql_query($query);

                   return  $query;
	 }

	
	
	
	
}



?>