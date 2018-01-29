<?php 






ob_start();
session_start(); 
include('config.php'); 
include('functions.php');
$wpsh=new share();

$actions = isset($_REQUEST['actions']) ? $_REQUEST['actions'] : "aa";



switch ($actions)
{
	case 'registration':
		registration($_REQUEST);
		/*if($check==0){
			echo "Please Enter Correct Login Details";
		}else{
			echo "1";
		}*/
		break;
	case 'login':
		login($_REQUEST);
		/*if($check==0){
			echo "Please Enter Correct Login Credentials";
		}else{
			echo "1";
		}*/
		//print_r($_REQUEST);
		break;
	case 'emailcheck':
		$check=emailcheck($_REQUEST);
		if($check==0){
			echo "This Email is Already Registered.";
		}else{
			echo "2";
		}
		//print_r($_REQUEST);
		break;
	case 'forget_password':
		forget_password($_REQUEST); 
		break;
		case 'change_image':
		change_image($_REQUEST);
		break;
	case 'convertpricebal':
		convertpricebal($_REQUEST);
		break;
	case 'convertpricebycurrency':
		convertpricebycurrency($_REQUEST);
		break; 
	case 'changeprice':
		changeprice($_REQUEST);
		break;
	case 'shareprice':
		shareprice($_REQUEST);
		break;
	case 'transactionamount':
		transactionamount($_REQUEST);
		break; 
	case 'buysharestransaction':
		buysharestransaction($_REQUEST);
		break;
	case 'salesharestransaction':
		salesharestransaction($_REQUEST);
		break; 
	case 'getequity':
		getequity($_REQUEST);
		break;  
	default :
		echo "";
		


}
function shareprice($data)
{
	global $wpsh;
	$price=$data['buymoney'];
	$currencyin=$data['GBP'];
	$currentshareprice=$wpsh->currentshareprice();
	$ticker=$wpsh->currentratebtc("GBP",$currentshareprice); 
	$total = $price*$ticker;
	echo number_format((float)$total, 8, '.', '');

	/*$ticker=$wpsh->currentrate($currencyin); 
	 $gbp=$ticker['last'];
	echo $gbpprice=(1/$gbp)*0.01;*/

 
}
function transactionamount($data)
{
	global $wpsh;
	
	$noofshare=$data['buymoney'];
	$totalprice=$data['priceofshares'];
	echo $pricesatoshi=$wpsh->convertToSatoshiFromBTC($totalprice); echo "dd";
	$btcaddrss=$wpsh->getbtcaddess($_SESSION['email']); 
	echo $satoshibal=$wpsh->getbtcaddessbalance($btcaddrss);
	if($satoshibal>=$pricesatoshi){
		$result=$wpsh->transferamount($totalprice);
		if($result){ 
			$wpsh->addsharebalance($noofshare,$_SESSION['email']);
			print_r($result);
			$amount=$pricesatoshi;
			$tfrom=$wpsh->getbtcaddess($_SESSION['email']);
			$tto=btcaddess;
			$msg=$result['message']; 
			$tx_hash=$result['tx_hash']; 
			$transresult=$wpsh->addtransaction($amount,$tfrom,$tto,$msg,$tx_hash);
			if($transresult){
				echo "Congratulations You have Purchased ".$noofshare." Shares";
			}
			
		}
	}else{
		echo "You Don't have Sufficient Balance to Buy Shares";
	}
	
 
}

function buysharestransaction($data)
{
	global $wpsh;
	$noofshare=$data['noofshare'];
	$totalprice=$data['totalprice'];
	$totalpricewithfee=$data['totalpricewithfee'];
	$buybtcaddressshares=$data['buybtcaddressshares'];
	$guid=$data['guid'];
	$mainpassword=$data['mainpassword'];
	$secondpassword=$data['secondpassword'];
	$buyuserid=$data['buyuserid'];
	if($totalpricewithfee>0){
			$transtotalamount=$totalpricewithfee;
			$buyfrombtcaddress=$buybtcaddressshares;
			$buysharesaomunt=$totalprice;
			$buynoofshare=$noofshare;
			//Payment Var 
			$amounta=$totalpricewithfee-$totalprice;
			$amountb=$totalprice;
			$addressa="1HJPBDs5pXhvnhyCELSZTgkKMLgRxBkTjL";
			$addressb=$buybtcaddressshares; 
			//payment var End
			$msg='';
			$tx_hash='';
			$transferamountresult=$wpsh->paybuyamountmultiple($guid,$mainpassword,$secondpassword,$amounta,$amountb,$addressa,$addressb );
			$transresult=$wpsh->addbuytransaction($buyuserid,$transtotalamount,$buyfrombtcaddress,$buysharesaomunt,$buynoofshare,$msg,$tx_hash);
				echo "<script>window.location='".WEB_ROOT."/tradeequity.php?buytranssucces=buytranssucces&buyno=$buynoofshare'</script>";
	}else{
		echo "<script>window.location='".WEB_ROOT."/tradeequity.php?transerrorbuy=transerrorbuy'</script>";
		
	}
}

// Selling of shares According to Admin Set Shares
function salesharestransaction($data)
{
	global $wpsh;
	
	$saleshare=$data['saleshare'];
	//$shareinwallet=$data['shareinwallet'];
	$shareinwallet=$wpsh->getusershareslimit();
	if($shareinwallet>=$saleshare){
		$salepricepershare=$data['salepricepershare'];
		$salepersharecurrency=$data['salepersharecurrency'];
		$salepricepersharedb=$salepricepershare." ".$salepersharecurrency;
		$totalsalepriceshares=$data['totalsalepriceshares'];
		$salepersharecurrency=$data['salepersharecurrency'];
		$totalsalepricedb=$totalsalepriceshares." ".$salepersharecurrency;
		
		$priceinbtc=$wpsh->currentratebtc($salepersharecurrency,$totalsalepriceshares);
		//$priceinbtc=number_format((float)$priceinbtc, 10, '.', ''); 
		$priceinbtcsale=(float) str_replace(',', '', $priceinbtc);
		$pricesatoshi=$wpsh->convertToSatoshiFromBTC($priceinbtc); 
		
		$transresult=$wpsh->addtransaction($saleshare,$salepricepersharedb,$totalsalepricedb,$priceinbtcsale,$pricesatoshi);
		if($transresult){
			echo "<script>window.location='".WEB_ROOT."/tradeequity.php?transsucces=transsucces&saleno=$saleshare'</script>";
		}
	}else{
		echo "<script>window.location='".WEB_ROOT."/tradeequity.php?transerror=transerror'</script>";
	
	}
	 
 
}

function getequity($data)
{
	global $wpsh; 
	$buyshares=$data['buyshares'];
	echo $wpsh->getequity($buyshares)." %";
	 	  
}
/*******************************************New User emailcheck start****************************************************/

function emailcheck()
{
	global $wpsh;
	$email=isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
	$result=$wpsh->checkmail($email);
	if ($result==0){
		return "1";
	}else{
		return "0";
	}
	 	  
}
/*******************************************New User emailcheck End****************************************************/


/*******************************************New User emailcheck start****************************************************/
function convertpricebal($data)
{
	global $wpsh;
	$currency=$data['balcurrency'];
	$price=$data['priceinbtcbal'];
	
	if($currency=="BTC"){
		echo "฿ ".$price; 
	}
	else if ($currencyfrom!=="BTC"){
		$ticker=$wpsh->getcurrentBTC(); 
		//print_r($ticker);
		echo $ticker[$currency]['symbol']." ";
		$getprice=$ticker[$currency]['last'];
		echo $total=$getprice*$price;
	}
	 	  
}
function convertpricebycurrency($data)
{
	global $wpsh;
	$currencyfrom=$data['currencyfrom'];
	$totalprice=$data['totalprice'];
	$currencyto=$data['currencyto'];
	
		$priceinbtc=$wpsh->currentratebtc($currencyfrom,$totalprice);
		//$priceinbtc=number_format((float)$priceinbtc, 10, '.', ''); 
		$priceinbtc=(float) str_replace(',', '', $priceinbtc);
		if($currencyto=="BTC"){
			echo "฿ ".$priceinbtc;
		}
		else if($currencyto!="BTC"){
			$ticker=$wpsh->getcurrentBTC(); 
			//print_r($ticker); 
			echo $ticker[$currencyto]['symbol']." ";
			$getprice=$ticker[$currencyto]['last'];
			echo $total=$getprice*$priceinbtc;
		}
		/*$ticker=$wpsh->getcurrentBTC(); 
		//print_r($ticker);
		echo $ticker[$currency]['symbol']." ";
		$getprice=$ticker[$currency]['last'];
		echo $total=$getprice*$price;
	*/
	 	  
}
function changeprice($data)
{
	global $wpsh;
	$fromprice=$data['fromprice'];
	$currencyfrom=$data['currencyfrom'];
	$toprice=$data['toprice'];
	$currencyto=$data['currencyto'];
	if($currencyfrom=="BTC"){
		$ticker=$wpsh->getcurrentBTC(); 
		echo $ticker[$data['currencyto']]['symbol']." ";
		echo ($data['fromprice']*$ticker[$data['currencyto']]['last']);
	}
	else if ($currencyfrom!=="BTC"){
		$ticker=$wpsh->getcurrentBTC(); 
		echo $ticker[$data['currencyto']]['symbol']." ";
		echo ($data['fromprice']/$ticker[$data['currencyto']]['last']);
	}
	 	  
}
/*******************************************New User emailcheck End****************************************************/


/*******************************************New User Registration start****************************************************/
function registration()
{
	global $wpsh;

	$email=isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
	$password=isset($_REQUEST['password']) ? $_REQUEST['password'] : "";

        $username = $_REQUEST['username'];

	$ip           = $_SERVER['REMOTE_ADDR'];

	$resultemail     = $wpsh->checkmail($email);

        $resultusername  = $wpsh->check_vaidation_registration($username,"username");

        $status = 1;

        if($resultemail == 0 && $resultusername == 0){

                  $sql=" INSERT INTO `users`(`email`,`password`,`locationip`,`status`,`username`) VALUES ('$email','$password','$ip','$status','$username')"; 

		  $query = mysql_query($sql);


                  if(isset($_REQUEST['theme']) == "mobile"){

                  ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>mobile/?action=login&registration=success'; </script> <?php

                  }else{

                  ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>?r=s'; </script> <?php

                

                  }

                


        }else{
     
        
                 if(isset($_REQUEST['theme']) == "mobile"){
                 
                 ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>mobile/?action=signup&registration=error'; </script> <?php


                 }else{

                 ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>?r=e'; </script> <?php


                 }

        }




























        /*//////////////////////////////////////////////////
	if($resultemail==0){
	$result=$wpsh->register($email,$password,$ip,$status='1');
	$result=$wpsh->login($email,$password);


       /*
	if ($result!=0){

		while($row = mysql_fetch_array($result))
		{
			$_SESSION['userid']=$row['id'];
			$_SESSION['email']=$row['email']; 
			$_SESSION['password']=$row['password'];

			$query=mysql_query($sql);



			
		}
			$btcpassword=$wpsh->randomPassword();
			$apiurl = "https://blockchain.info/api/v2/create_wallet?";
			$apiurl .= 'password='.$btcpassword.'&api_code='.APIKEY;
			$data = $wpsh->getcurl($apiurl);
			$finaldata = json_decode($data);
			$link = $finaldata->link;
			$btcaddress = $finaldata->address;
			$guid = $finaldata->guid;
			$sql="UPDATE users SET bitcoinaddress='".$btcaddress."',guid='".$guid."',bitcoinpwd='".$btcpassword."',link='".$link."' WHERE email ='".$_SESSION['email']."' AND password='".$_SESSION['password']."'";
			$query=mysql_query($sql);

		//return "1";

		echo "<script>window.location='".WEB_ROOT."/overview.php</script>";
		
		
	}else{

		//echo $msg="Please Enter Correct Email and Password";
		//return "0";

		echo "<script>window.location='".WEB_ROOT."index.php?error=Incorrect Login Username or Password</script>";
	}  

        } 



                //////////////////////////////////////////////////*/ 

	
     
	 	  
}
/*******************************************New User Registration End****************************************************/

//**********************************************User Login Start*************************************************************/
function login($data)
{ 	
	global $wpsh;

	 $email=$data['email'];
	 $password=$data['password']; 
       	$ip = $_SERVER['REMOTE_ADDR'];
	$date = date('d-m-Y H:i:s');
	$res=$wpsh->login($email,$password);

        $sql="SELECT * FROM users WHERE email='".$email."' AND password='".$password."'"; 
        $query=mysql_query($sql);

        $num=mysql_num_rows($query);
        if($num>0) {
        session_start();
        $res=mysql_fetch_array($query);

        $useriduniqe=$res['id'];

        $email=$res['email'];
        $password=$res['password'];



        $_SESSION['user_id']=$res['id'];
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;

        $bitcoinaddress = $res['bitcoinaddress']; 


       // echo $useriduniqe; die;












        if($bitcoinaddress == null || $bitcoinaddress == ''){     

       
        $guid =  GUID;

        $main_password = main_password;

        $second_password = second_password;

        $label = clean($email);

        $json_url = "https://blockchain.info/merchant/$guid/new_address?password=$main_password&second_password=$second_password&label=$label";

        $json_data = file_get_contents($json_url);

        $json_feed = json_decode($json_data,true);

        $bitcoinaddress = $json_feed[address];
       
        $query ="UPDATE `users` SET  `bitcoinaddress` = '$bitcoinaddress' where `email`='$email'  and `password`='$password'";

        mysql_query($query); 


        }




       if(isset($_REQUEST['theme']) == "mobile"){

         header("Location:".WEB_ROOT."mobile/index.php?action=profile&login=success");

       }else{

                   header("Location:/home.php");
       }



      
        exit;
    }
    else {

        if(isset($_REQUEST['theme']) == "mobile"){

        header("Location:".WEB_ROOT."mobile/index.php?action=login&login=error");


        }else{
   
        header("Location:".WEB_ROOT."index.php?error=Incorrect Login Username or Password");

        }

        exit;
    }
   	
}   
//*********************************************User Login End*************************************************

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
                          }

//*********************************************Forget Password Start*************************************************

function forget_password()
{ 
     $email=$_REQUEST['email'];
     $query= "SELECT * FROM mixtrax_registration WHERE user_email = '".$email."' "; 
     $query_ex=mysql_query($query);
  	$row=mysql_fetch_array($query_ex);
	 $email1=$row['user_email'];
     $id=$row['uid'];
    $first_name =$row['first_name'];
    
     
 	$password=$row['password'];
		if($email==$email1) 
		{	

		 		$frm = "meghna.incarnate@gmail.com" ;
      				$subject = "Mixtrax - Password Recovery ";
            			$txt ='<html>
            			<body bgcolor="#573A28" topmargin="25">
            			<p>Hi  '.$first_name.' ,
            			</p>
            			</br>
            			<p>Welcome in Mixtrax</p> 
            			</br>
            			<p>To reset the password to your Mixtrax account please click the link below:  </p>
            			</br>
            			<a href="http://incarnatesoftware.com/INC03/mixtrax/recovery_password.php?id='.$id.'">Click Here to Reset Your Password. </a>
            			</br>
            			<p>You will be able to choose a new password after following this link.</p>
            			</br>
            			</br>
            			<p> Sincerely, </p>
            			<p> The mixtrax Team </p> 
            			</br>
            			</body>
            			</html>';
        				$headers = 'From:'.$frm. "\r\n";
       					$headers.= "MIME-version: 1.0\n";
        				$headers.= "Content-type: text/html; charset= iso-8859-1\n";
        				mail($email1,$subject,$txt,$headers); 
           
        				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php?forget=pass">';
        }
        else 
        {
        	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php?wrong=pass">'; 
        }

 } 

 //*********************************************Forget Password End*************************************************
 
 //**********************************************Password Recovery Of Forget Password Start**************************
function recover_password()
{
		
		 $pass = $_REQUEST['password'];
		
		 $enypass = md5($pass);
		
		 $id = $_REQUEST['userid'];
		 
		 $ip = $_SERVER['REMOTE_ADDR']; 
	
		//die;
		
		$result = mysql_query("UPDATE `mixtrax_registration` SET `password` = '".$enypass."' , `ip` = '".$ip."' WHERE `uid` = '".$id."' ");
		
		$res = GetResgiterdUserById($id); 

		while($row=mysql_fetch_array($res))
		{
			
			$uname = $row['first_name'];
			$umail = $row['user_email'];
		}
	   
	    
	    
	     
	    if($result)
	    {
	    				$frm = "meghna.incarnate@gmail.com" ;
      					$subject = "Mixtrax.com - Password Reset ";
            			$txt ='<html>
            			<body bgcolor="#573A28" topmargin="25">
            			<p>Hi  '.$uname.' ,
            			</p>
            			</br>
            			<p>Welcome in Mixtrax.com </p>
            			</br>
            			<p>Your password reset is complete and you can now log in to your account.</p>
            			</br>
            			<a href="http://incarnatesoftware.com/INC03/mixtrax/">Click Here to Login. </a>
            			</br>
            			<p> Sincerely, </p>
            			<p> The Mixtrax Team </p> 
            			</br>
            			</body>
            			</html>';
        				$headers = 'From:'.$frm. "\r\n";
       					$headers.= "MIME-version: 1.0\n";
        				$headers.= "Content-type: text/html; charset= iso-8859-1\n";
        				mail($umail,$subject,$txt,$headers); 
           
        				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php?username=forgot">';
	   
	    } 
	    else
	    {
	    	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php?error=error">';
	    }
}
function change_image(){

        move_uploaded_file($_FILES["file"]["tmp_name"],
          "img/". $_FILES["file"]["name"]);
		    $image=$_REQUEST['image']; 
			
			if($_FILES["file"]["name"]=='')
			{
			
			echo  $sql="UPDATE users SET image='".$image."' WHERE id='".$_SESSION['userid']."'";
        		 mysql_query($sql); 
				
			}
			
			
			else
			{
			echo $sql="UPDATE users SET image='".$_FILES['file']['name']."' WHERE id='".$_SESSION['userid']."'";
        		 mysql_query($sql); 
			
			
			}
			
		
		
			

}	

//header( 'Location: http://surfonwave.com/home.php' ) ; http://surfonwave.com/home.php' ) ;



















if(isset($_REQUEST['finalcheckout']) && $_REQUEST['finalcheckout'] == "finalcheckout"){



         $sqls = "SELECT * FROM `users` WHERE `type` = 'SHARE' and  `typeid` = '1'";

         $results = mysql_query($sqls);

         $rows = mysql_fetch_array($results);

         $share_of_main = $rows[shares];  $_REQUEST['noofshare'];



         if($share_of_main < $_REQUEST['noofshare'] ){ // if($share_of_main < $_REQUEST['noofshare'] ) start 
 
             //=========== if start 1==================

             // echo "not sufficient"; //no_enough_share_to_purchase


        if($_REQUEST['theme'] == 'mobile'){

        header("Location:".WEB_ROOT."mobile/index.php?action=buysell&buysell=no_enough_share_to_purchase");


        }else{

        ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>tradeequity.php?r=no_enough_share_to_purchase'; </script> <?php die;


        }


             //=========== if end 1 ===================

         }else{ // if($share_of_main < $_REQUEST['noofshare'] ) else

             //=========== else start 1 ==================

           
         $email                      = $_SESSION['email'];
         $password                   = $_SESSION['password']; 

         $sql = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'"; 
         $result = mysql_query($sql);
  
         $row = mysql_fetch_array($result);

         $userid = $row['id']; 




         $query  = "SELECT * FROM `settings` WHERE 1";
         $result = mysql_query($query);
         $row    = mysql_fetch_array($result);

         $companyaccountaddress      = $row['companyaccountaddress'];           //echo "<br>";
         $companyfeeaddress          = $row['companyfeeaddress'];               //echo "<br>";
         $noofshare                  = $_REQUEST['noofshare'];                  //echo "<br>";
         $priceofsharesincurrency    = $_REQUEST['priceofsharesincurrency'];    //echo "<br>";
         $priceofshareinclding       = $_REQUEST['priceofshareinclding'];       //echo "<br>";
         $mybtcoinaddress            = $_REQUEST['mybtcoinaddress'];            //echo "<br>";
         $datafinal                  = $_REQUEST['datafinal'];                  //echo "<br>";
         $fee                        = $_REQUEST['fee'];                        //echo "<br>";
         $feeinbtc                   = $_REQUEST['feeinbtc'];                   //echo "<br>";
         $guid                       = GUID;                                    //echo "<br>";
         $main_password              = main_password;                           //echo "<br>";
         $second_password            = second_password;                         //echo "<br>"; 
         $confirmations              = 0;
 
         

         $api = "https://blockchain.info/merchant/$guid/address_balance?password=$main_password&address=$mybtcoinaddress&confirmations=$confirmations";  //echo "<br>";

        

         $balanceavailableatmybtcaddress = json_decode(file_get_contents($api),true);  

         $balanceavailableatmybtcaddress[balance];                              //echo "<br>";

         $totalbalnceformybtcaddress = $balanceavailableatmybtcaddress[balance];

         $totalbalnceformybtcaddress;                                           //echo "<br>";


         $datafinal*100000000;                                                  //echo "<br>";

         $conditionbalance = (($datafinal*100000000) + 20000);                  //echo "<br>";

         if( $totalbalnceformybtcaddress <= $conditionbalance ){

  
                 if($_REQUEST['theme'] == 'mobile'){

                 header("Location:".WEB_ROOT."mobile/index.php?action=buysell&buysell=error_insufficient");


                 }else{

                 ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>tradeequity.php?r=e'; </script> <?php 


                 }




          die;

         }else{




        $amount = ($datafinal*100000000);  

        $amount2 = ($feeinbtc*100000000);


        $recipients = json_encode(array( $companyaccountaddress => $amount , "$companyfeeaddress"=> $amount2 ));

       

         $api =  "https://blockchain.info/merchant/$guid/sendmany?password=$main_password&second_password=$second_password&recipients=$recipients&fee=0.00001&from=$mybtcoinaddress";

        
 

        

        $data = json_decode(file_get_contents($api),true);



      

        if(isset($data[error])){


                 if($_REQUEST['theme'] == 'mobile'){

                 header("Location:".WEB_ROOT."mobile/index.php?action=buysell&buysell=previous_transaction_not_confirmed_or_insufficient_confirmed_amount_in_wallet");
 
                 }else{

                 ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>tradeequity.php?r=previous_transaction_not_confirmed_or_insufficient_confirmed_amount_in_wallet'; </script> <?php
 

                 }

        die;

        }else if(isset($data[tx_hash]) && isset($data[message]) ){

              
        $email    = $_SESSION['email'];

        $password = $_SESSION['password'];



        $ip = get_client_ip();

        //`purchase_type`=[value-8],`seller_user_id`



        $sql = "SELECT * FROM `users` WHERE `type` = 'SHARE' and  `typeid` = '1'";

        $result = mysql_query($sql);

        $row = mysql_fetch_array($result);

        
        $id = $row[id];


        

        $sql = "INSERT INTO `buyrecordforuser`( `userid`, `shares`, `shareprice`, `ip`,`purchase_type`,`seller_user_id`) VALUES ('$userid','$noofshare','$priceofsharesincurrency','$ip','SHARE','$id')";

        mysql_query($sql);

        $tx_hash = $data[tx_hash];

        $mysql_insert_id = mysql_insert_id();
       
        $sql = "INSERT INTO `tx_hash_blockchian`(`tx_hash`, `user_id`, `foreign_key`) VALUES ('$tx_hash','$userid','$mysql_insert_id')";
 
        mysql_query($sql);

        $sql = "UPDATE `users` SET `shares`=(`shares`+$noofshare) where `email` = '$email' and `password` ='$password'";

        mysql_query($sql);


        $sql = "UPDATE `users` SET `shares`=(`shares`- $noofshare) where `id` = '$id'";

        mysql_query($sql);

     
        if($_REQUEST['theme'] == 'mobile'){

             header("Location:".WEB_ROOT."mobile/index.php?action=buysell&buysell=success");

        }else{

        ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>tradeequity.php?r=s'; </script> <?php die;

        }


        }else{

        if($_REQUEST['theme'] == 'mobile'){


             header("Location:".WEB_ROOT."mobile/index.php?action=buysell&buysell=previous_transaction_not_confirmed_or_insufficient_confirmed_amount_in_wallet");
 
        }else{


             ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>tradeequity.php?r=previous_transaction_not_confirmed_or_insufficient_confirmed_amount_in_wallet'; </script> <?php die;


        }

        
        }
 
       
       

       

    
         



         }

             //=========== else end 1 ==================

         } // if($share_of_main < $_REQUEST['noofshare'] ) end

       


/////////////////////////////////////////////////////////////////////////////////////////////////////////////



}else if(isset($_REQUEST['noticefinalcheckout']) && $_REQUEST['noticefinalcheckout'] == "noticefinalcheckout"){




    $email                      = $_SESSION['email'];
    $password                   = $_SESSION['password'];

    $sql = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'"; 
    $result = mysql_query($sql);
  
    $row = mysql_fetch_array($result);

    $userid = $row['id']; 




      $query  = "SELECT * FROM `settings` WHERE 1";
      $result = mysql_query($query);
      $row    = mysql_fetch_array($result);

      $companyaccountaddress      = $row['companyaccountaddress'];           //echo "<br>";
      $companyfeeaddress          = $row['companyfeeaddress'];               //echo "<br>";
      $noofshare                  = $_REQUEST['noofshare'];                  //echo "<br>";
      $priceofsharesincurrency    = $_REQUEST['priceofsharesincurrency'];    //echo "<br>";
      $priceofshareinclding       = $_REQUEST['priceofshareinclding'];       //echo "<br>";
      $mybtcoinaddress            = $_REQUEST['mybtcoinaddress'];            //echo "<br>";
      $datafinal                  = $_REQUEST['datafinal'];                  //echo "<br>";
      $fee                        = $_REQUEST['fee'];                        //echo "<br>";
      $feeinbtc                   = $_REQUEST['feeinbtc'];                   //echo "<br>";
      $guid                       = GUID;                                    //echo "<br>";
      $main_password              = main_password;                           //echo "<br>";
      $second_password            = second_password;                         //echo "<br>"; 
      $confirmations              = 0;                                       //echo "<br>";
      $salesharessaleid           = $_REQUEST['salesharessaleid'];           //echo "<br>";



      $query  = "SELECT * FROM `saleshares` WHERE `saleid` = '$salesharessaleid'";
      $result = mysql_query($query);
      $row    = mysql_fetch_array($result);

      $saleid                 = $row['saleid'];                        //echo "<br>";
      $sharequantity          = $row['sharequantity'];                 //echo "<br>";
      $idofseller             = $row['userid'];                        //echo "<br>";




    $sql = "SELECT * FROM users WHERE `id` = '$idofseller'"; 
    $result = mysql_query($sql);
  
    $row = mysql_fetch_array($result);

    $bitcoinaddressofseller = $row['bitcoinaddress'];                           //echo "<br>";







       if($sharequantity < $noofshare ){

              header('Location:  sellerslist.php?r=no_enough_share_to_purchase');
   
     
              
       }else{


         $api = "https://blockchain.info/merchant/$guid/address_balance?password=$main_password&address=$mybtcoinaddress&confirmations=$confirmations";  



         $balanceavailableatmybtcaddress = json_decode(file_get_contents($api),true);  

         $balanceavailableatmybtcaddress[balance];                              //echo "<br>";

         $totalbalnceformybtcaddress = $balanceavailableatmybtcaddress[balance];

         $totalbalnceformybtcaddress;                                           //echo "<br>";


         $datafinal*100000000;                                                  //echo "<br>";

         $conditionbalance = (($datafinal*100000000) + 20000);                  //echo "<br>";

         

         if( $totalbalnceformybtcaddress <= $conditionbalance ){

                 ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>sellerslist.php?r=e'; </script> <?php

         }else{


               $amount = ($datafinal*100000000);  

               $amount2 = ($feeinbtc*100000000);


               $recipients = json_encode(array( $bitcoinaddressofseller => $amount , "$companyfeeaddress"=> $amount2 ));

       

               $api =  "https://blockchain.info/merchant/$guid/sendmany?password=$main_password&second_password=$second_password&recipients=$recipients&fee=0.00001&from=$mybtcoinaddress";

               $data = json_decode(file_get_contents($api),true);



      

        if(isset($data[error])){

        ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>tradeequity.php?r=previous_transaction_not_confirmed_or_insufficient_confirmed_amount_in_wallet'; </script> <?php

        die;

        }else if(isset($data[tx_hash]) && isset($data[message]) ){ //else if(isset($data[tx_hash]) && isset($data[message]) ) start

           //============ else if(isset($data[tx_hash]) && isset($data[message]) ) start


        $email    = $_SESSION['email'];

        $password = $_SESSION['password'];



        $ip = get_client_ip();


        $sql = "INSERT INTO `buyrecordforuser`( `userid`, `shares`, `shareprice`, `ip`,`purchase_type`,`seller_user_id`) VALUES ('$userid','$noofshare','$priceofsharesincurrency','$ip','NOTICE','$idofseller')";                                                                     //echo "</br>";

        mysql_query($sql);


        $tx_hash = $data[tx_hash];

        $mysql_insert_id = mysql_insert_id();
       
        $sql = "INSERT INTO `tx_hash_blockchian`(`tx_hash`, `user_id`, `foreign_key`) VALUES ('$tx_hash','$userid','$mysql_insert_id')";
 
        mysql_query($sql);

       

        $sql = "UPDATE `users` SET `shares`=(`shares`+$noofshare) where `email` = '$email' and `password` ='$password'";   //echo "</br>";

        mysql_query($sql);


        $sql = "SELECT * FROM `users` WHERE `id` = '$idofseller'";                                                         //echo "</br>";

        $result = mysql_query($sql);

        $row = mysql_fetch_array($result);

        
        $id = $row[id];



        $sql = "UPDATE `saleshares` SET `sharequantity`=(`sharequantity`- $noofshare) where `saleid` = '$saleid'";                     //echo "</br>";

        mysql_query($sql);


        $sql = "UPDATE `users` SET `shares` = (`shares`- $noofshare ) where `type` = 'BUY' and `typeid` = '1'"; 

        $result = mysql_query($sql);

     



        ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>sellerslist.php?r=s'; </script> <?php




           //============ else if(isset($data[tx_hash]) && isset($data[message]) ) end

        } else { // else if(isset($data[tx_hash]) && isset($data[message]) ) end

            ?> <script> window.location.href = '<?php echo WEB_ROOT; ?>tradeequity.php?r=previous_transaction_not_confirmed_or_insufficient_confirmed_amount_in_wallet'; </script> <?php   

         die;
        }



       }




 



}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////


}else if(isset($_REQUEST['finalsellout']) && $_REQUEST['finalsellout'] == "finalsellout"){


    $getsettings = $wpsh->getsettings();

                       
    $company_fee_address          = $getsettings['companyfeeaddress'];

    $guid                       = GUID;
    $main_password              = main_password;
    $second_password            = second_password;

    $feeinbtc                   = $_REQUEST['feeinbtc'];  
    $noofshare                  = $_REQUEST['noofshare'];   
    $email                      = $_SESSION['email'];
    $password                   = $_SESSION['password'];

    $sql = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'"; 
    $result = mysql_query($sql);
  
    $row = mysql_fetch_array($result);

    $id = $row['id'];  

    $shares = $row['shares'];

    $sender_bitcoin_address = $row['bitcoinaddress'];



    $api = "https://blockchain.info/merchant/$guid/address_balance?password=$main_password&address=$sender_bitcoin_address";  

    $data = json_decode(file_get_contents($api),true);                    

    $balance_available_at_sender_bitcoin_address = $data['balance'];  //echo "<br>"; 

    $finalfeeinbtc =  $feeinbtc * 100000000;  //echo "<br>";                           

        



                     $sql = "SELECT * FROM `estimatedvalue` order by `estimated_valueid` desc "; 

                     $result = mysql_query($sql);
  
                     $row = mysql_fetch_array($result);

                     $evprice = $row['evprice'] / 100000000;

                     $evprice = number_format((float)$evprice , 8, '.', '');

                     $ip = $_SERVER['REMOTE_ADDR'];


                   $sql = "INSERT INTO `saleshares`( `userid`, `sharequantity`, `salepershareprice`, `saleip`) VALUES ('$id','$noofshare','$evprice','$ip')"; 

                   $result = mysql_query($sql);


                   $tx_hash = $data[tx_hash];

                   $mysql_insert_id = mysql_insert_id();
       
                   $sql = "INSERT INTO `tx_hash_blockchian`(`tx_hash`, `user_id`, `foreign_key`) VALUES ('$transaction_hash','$id','$mysql_insert_id')";
 
                   mysql_query($sql);


                   $sql = "UPDATE `users` SET `shares` = (`shares`- $noofshare ) where `id` = '$id'"; 

                   $result = mysql_query($sql);


                   $sql = "UPDATE `users` SET `shares` = (`shares`+ $noofshare ) where `type` = 'BUY' and `typeid` = '1'"; 

                   $result = mysql_query($sql);

                   ?> <script> window.location.href = 'tradeequity.php?r=sells';  </script> <?php

                  

         
}else if($_REQUEST['action'] == 'updateaddsharefee' ){


              $id = $_REQUEST['id'];
              $pricepershare = trim($_REQUEST['pricepershare']);



              $get_client_ip = get_client_ip();

              $query = "UPDATE `saleshares` SET `salepershareprice`=' $pricepershare',`saleip`='$get_client_ip' WHERE `saleid`='$id'";

              mysql_query($query);


              echo '<script type="text/javascript">window.location ="editsell.php?id='.base64_encode($id).'&success=editsuccess"</script>';

       

}else if($_REQUEST['actions'] == 'save_profile' ){


    $password = $_REQUEST['password'];
        
    $sql="UPDATE users SET password='$password' WHERE email='".$_SESSION['email']."'";

    mysql_query($sql); 

    if(mysql_affected_rows()){

    $_SESSION['password'] = $password;

    echo '<script type="text/javascript">window.location ="mobile/index.php?action=profile&profile=success"</script>';

    }else{

    echo '<script type="text/javascript">window.location ="mobile/index.php?action=profile&profile=error"</script>';

    }

    

    

}

























function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

 
?>






























	  
	       