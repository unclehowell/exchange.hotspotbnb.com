
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

.withdrawain{
background-color: white;
border-radius: 5px;
padding: 10px;
font-family: inherit;
text-align: center;
color: slategray;
margin-bottom:22px;
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

.footer{
margin-top:22px;
background-color: white;
border-radius: 5px;
padding: 10px;
font-family: inherit;
text-align: center;
color: slategray;

}
</style>




<?php include('functions.php'); 

error_reporting(0);

$obj = new share();

$userinfodata = $obj->getuserinfowithkey();



?>













	<div id="form_container">
	
		<h1 class="withdrawa"><a style="font-size: 25px;">Direct transfer
</a></h1>



                <div class="withdrawain" >


                   <div style="text-align: left;margin-top: 2px;margin-bottom: 2px;padding: 10px;">You can add funds to your account and buy shares with bitcoins</div>

                   <div style="margin-top: 3px;margin-bottom: 3px;background-color: rgb(243, 255, 218);text-align: center;font-weight: bolder;border-radius: 5px;padding: 10px;">Unique Reference ID: <?php  echo $rand = md5(uniqid(rand(), true)) ; ?>
</div>

                   <div style="text-align: left;margin-top: 2px;margin-bottom: 2px;padding: 10px;" >For investors transferring from UK accounts, assure you include your unique reference ID
</div>
                   <div style="text-align: left;margin-top: 2px;margin-bottom: 2px;padding: 10px;" >Sort code</div>

                   <div style="text-align: left;margin-top: 2px;margin-bottom: 2px;padding: 10px;" >Account number</div>


                   <div style="text-align: left;margin-top: 2px;margin-bottom: 2px;padding: 10px;" >For investors transferring from international accounts, assure you include your unique reference ID

</div>

  <div style="text-align: left;margin-top: 2px;margin-bottom: 2px;padding: 10px;" >IBAN</div>

 <div style="text-align: left;margin-top: 2px;margin-bottom: 2px;padding: 10px;" > Swift Code</div>

<div style="text-align: left;margin-top: 2px;margin-bottom: 2px;padding: 10px;" >Once payment is received, funds will appear in your account at the current 
BTC exchange rate, you can then purchase shares </div>



<div style="text-align: left;margin-top: 2px;margin-bottom: 10px;padding: 10px;" >

<div style="box-sizing: border-box;width: 50%;float: left;">Icon will appear green once funds are received</div>
<div style="box-sizing: border-box;width: 50%;float: left;"  ><img id="result" src="img/red.png"  /></div>
  

</div>






               </div>




              


               <div class="footer">

                    You can contact transfer@surfonwave.com for any queries


               </div>


		
	</div>


<?php

$insertBankTransfer = $obj->insert_Bank_Transfer($userinfodata[id],$rand);

?>




<script>
if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("relode.php?unique_id=<?php echo $rand; ?>");
    source.onmessage = function(event) {
        document.getElementById("result").src = event.data;
    };
} else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>
   