	var result;var ajaxresult;	
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
var jq=$.noConflict();
jq(document).ready(function(){

jq("#buyshares").attr('disabled','disabled');
jq("#sellshares").attr('disabled','disabled');
// Price Conversion
jq("#buycurrency").on("change",function(){
	//var actions="changeprice";
	var buycurrency=jq("#buycurrency").val();
	var priceinbtcbuy=jq("#priceinbtcbuy").val();
	var actions='convertpricebal';
	var dataString="balcurrency="+buycurrency+"&priceinbtcbal="+priceinbtcbuy;
	result=ajax(actions,dataString);
	jq("#totalbuyprice").val(result);
	
});
jq("#salecurrency").on("change",function(){
	//var actions="changeprice";
	var currencyto=jq("#salecurrency").val();
	var currencyfrom=jq("#salepersharecurrency").val();
	var totalprice=jq("#totalsalepriceshares").val();
	
	var actions='convertpricebycurrency';
	var dataString="currencyfrom="+currencyfrom+"&currencyto="+currencyto+"&totalprice="+totalprice;
	result=ajax(actions,dataString);
	jq("#totalsaleprice").val(result);
	
	//jq("#buyequity").getequity();
	//alert(result);
});
jq(".transpercurrency").on("change",function(){
	//var actions="changeprice";
	var currencyto=jq(this).val();
	var currencyfrom=jq(this).siblings(".transpersharepricecurrency").text();
	var totalprice=jq(this).siblings(".transpersharepricehidden").text();
	
	var actions='convertpricebycurrency';
	var dataString="currencyfrom="+currencyfrom+"&currencyto="+currencyto+"&totalprice="+totalprice;
	result=ajax(actions,dataString);
	jq(this).siblings(".transpershareprice").text(result);
	
	//jq("#buyequity").getequity();
	//alert(result);
});
jq(".transtotalcurrency").on("change",function(){
	//var actions="changeprice";
	var currencyto=jq(this).val();
	var currencyfrom=jq(this).siblings(".transtotalsharepricecurrency").text();
	var totalprice=jq(this).siblings(".transtotalsharepricehidden").text();
	
	var actions='convertpricebycurrency';
	var dataString="currencyfrom="+currencyfrom+"&currencyto="+currencyto+"&totalprice="+totalprice;
	result=ajax(actions,dataString);
	jq(this).siblings(".transtotalshareprice").text(result);
	
	//jq("#buyequity").getequity();
	//alert(result);
});
jq("#balcurrency").on("change",function(){
	//var actions="changeprice";
	var balcurrency=jq("#balcurrency").val();
	var priceinbtcbal=jq("#priceinbtcbal").val();
	var actions='convertpricebal';
	var dataString="balcurrency="+balcurrency+"&priceinbtcbal="+priceinbtcbal;
	result=ajax(actions,dataString);
	jq("#price").val(result);
	//alert(result);
});
jq("#allsharecurrency").on("change",function(){
	//var actions="changeprice";
	var allsharecurrency=jq("#allsharecurrency").val();
	var priceinbtcallshare=jq("#priceinbtcallshare").val();
	var actions='convertpricebal'; 
	var dataString="balcurrency="+allsharecurrency+"&priceinbtcbal="+priceinbtcallshare;
	result=ajax(actions,dataString); 
	jq("#tshareprice").val(result);
	//alert(result);
});
// End Conversion

/*
jq("#buyshares").click(function(){
	var actions="transactionamount";
	var buymoney=jq("#buymoney").val();
	var priceofshares=jq("#totalprice").val();
	var GBP="GBP";//$("#buymoney").val();
	var dataString="buymoney="+buymoney+"&GBP="+GBP+"&priceofshares="+priceofshares;
	result=ajax(actions,dataString);
	//$("#totalbuyprice").val(result);
	alert(result); 
}); */
jq("#buymoney").on("focus paste blur",function(){
	var buymoney = jq("#buymoney").val();
	var buyamountshares = jq("#buyamountshares").val();
	/*if (buymoney>buyamountshares || buymoney==0){
		$(".buyerror").html("You Cant Buy Shares more then Sale");
		buymoney=jq("#buymoney").val(buyamountshares);
	}else{ */
		$(".buyerror").empty();
		var actions="shareprice";
		var buymoney=jq("#buymoney").val();
		if(buymoney==''){ buymoney=0; }
		var GBP="GBP";//$("#buymoney").val();
		var dataString="buymoney="+buymoney+"&GBP="+GBP;  
		result=ajax(actions,dataString);
		jq("#totalbuyprice").val(result);
		jq("#priceinbtcbuy").val(result);
		priceinbtcbal=jq("#priceinbtcbal").val();
		jq("#buycurrency > option[value=BTC]").prop('selected', true);
		if(result>priceinbtcbal){
			jq("#buyshares").attr('disabled','disabled'); 
			jq(".balanceerror").html("You Don't have enough Credit Balance to Buy Shares");
		}else if(result<priceinbtcbal){
			jq("#buyshares").removeAttr("disabled");
			jq(".balanceerror").html("");
		}		
		actions= "getequity";
		var dataString="buyshares="+buymoney;
		result=ajax(actions,dataString);
		jq("#buyequity").val(result);
		//alert(result);
	//}
});
jq("#salepricepershare,#saleshare,#salepersharecurrency").on("focus paste blur change",function(){
	var saleshare = jq("#saleshare").val();
	var shareinwallet = jq("#shareinwallet").val();
	//alert(saleshare+" "+shareinwallet);
	/*if (saleshare > shareinwallet){
		$(".saleerror").html("You Don't Have Enough Shares to Sale");
		//saleshare=jq("#saleshare").val(shareinwallet);
	}
	else if (saleshare <= shareinwallet)
	{*/
		$(".saleerror").empty();
		var salepricepershare = jq("#salepricepershare").val();
		var salepersharecurrency = jq("#salepersharecurrency").val();
		var sharesalefee = jq("#sharesalefee").val();
		
		totalsaleshareprice=saleshare*salepricepershare;
		totalsaleshareprice=totalsaleshareprice+(totalsaleshareprice*sharesalefee)/100;
		$("#totalsaleprice").val(totalsaleshareprice);
		jq("#totalsalepriceshares").val(totalsaleshareprice); 
		jq("#salecurrency > option[value="+salepersharecurrency+"]").prop('selected', true);
		
		var calcequity=(saleshare/100000000)*100;
		jq("#saleequity").val(calcequity.toPrecision(4)+" %"); 
		jq("#sellshares").removeAttr("disabled");
		
		/*var actions="shareprice";
		var saleshare=jq("#saleshare").val();
		jq("#sellshares").removeAttr("disabled");
		var GBP="GBP";//$("#buymoney").val();
		var dataString="buymoney="+saleshare+"&GBP="+GBP;
		result=ajax(actions,dataString);
		jq("#totalsaleprice").val(result);
		jq("#priceinbtcsale").val(result); 
		jq("#salecurrency > option[value=BTC]").prop('selected', true);
		actions= "getequity";
		var dataString="buyshares="+saleshare;
		result=ajax(actions,dataString);
		jq("#saleequity").val(result);*/
		//alert(result);
	//}
});

	
	
	
	
	
});	