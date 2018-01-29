

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

width: 45%;
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
	
		<h1 class="withdrawa"><a style="font-size: 25px;">Add funds to account
</a></h1>



         



               <div class="mainbottom">
                
                   <div    style="width: 100%;"> 
                        <div style="  margin-left: auto;margin-right: auto;width: 95%;background-color: #b0e0e6;">
                           <div class="insidebox">
                                   <div><a href="bitcoindeposits.php"  ><img src="img/bc.png" /></a>
                                   </div>
                                   <div><a href="bitcoindeposits.php"  >Bitcoin Deposits</a>
                                   </div>
                           </div>

                           <div class="insidebox"> 
                                   <div><a href="directtransfer.php"  ><img src="img/bank.png" /></a>
                                   </div>
                                   <div><a href="directtransfer.php"  >Bank Transfer</a>

                                   </div>

                           </div>

                       </div>
                   </div>
               </div>



               <div class="footer">

                    You can contact transfer@surfonwave.com for any queries


               </div>

		
	</div>


   