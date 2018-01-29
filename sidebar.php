<!-- Add jQuery library -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/lib/jquery-1.10.1.min.js"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="jqimage/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="jqimage/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="jqimage/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
   $(document).ready(function() {
    	/*
    	 *  Simple image gallery. Uses default settings
    	 */
    
    	$('.fancybox').fancybox();
    
    	/*
    	 *  Different effects
    	 */
    
    	// Change title type, overlay closing speed
    	$(".fancybox-effects-a").fancybox({
    		helpers: {
    			title : {
    				type : 'outside'
    			},
    			overlay : {
    				speedOut : 0
    			}
    		}
    	});
    
    	// Disable opening and closing animations, change title type
    	$(".fancybox-effects-b").fancybox({
    		openEffect  : 'none',
    		closeEffect	: 'none',
    
    		helpers : {
    			title : {
    				type : 'over'
    			}
    		}
    	});
    
    	
    
    	// Remove padding, set opening and closing animations, close if clicked and disable overlay
    	$(".fancybox-effects-d").fancybox({
    		padding: 0,
    
    		openEffect : 'elastic',
    		openSpeed  : 150,
    
    		closeEffect : 'elastic',
    		closeSpeed  : 150,
    
    		closeClick : true,
    
    		helpers : {
    			overlay : null
    		}
    	});
    
    	/*
    	 *  Button helper. Disable animations, hide close button, change title type and content
    	 */
    
    	$('.fancybox-buttons').fancybox({
    		openEffect  : 'none',
    		closeEffect : 'none',
    
    		prevEffect : 'none',
    		nextEffect : 'none',
    
    		closeBtn  : false,
    
    		helpers : {
    			title : {
    				type : 'inside'
    			},
    			buttons	: {}
    		},
    
    		afterLoad : function() {
    			this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
    		}
    	});
    
    
    	/*
    	 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
    	 */
    
    	$('.fancybox-thumbs').fancybox({
    		prevEffect : 'none',
    		nextEffect : 'none',
    
    		closeBtn  : false,
    		arrows    : false,
    		nextClick : true,
    
    		helpers : {
    			thumbs : {
    				width  : 50,
    				height : 50
    			}
    		}
    	});
    
    			
    
    	$("#fancybox-manual-b").click(function() {
    		$.fancybox.open({
    			href : 'iframe.html',
    			type : 'iframe',
    			padding : 5
    		});
    	});
    
    	$("#fancybox-manual-c").click(function() {
    		$.fancybox.open([
    			 {
    				href : '2_b.jpg',
    				title : '2nd title'
    			},
    		], {
    			helpers : {
    				thumbs : {
    					width: 75,
    					height: 50
    				}
    			}
    		});
    	});
    
    
    });
</script>
<style type="text/css">
   .fancybox-custom .fancybox-skin {
   box-shadow: 0 0 50px #222;
   }
</style>
<!-- Add jQuery library -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/lib/jquery-1.10.1.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="jqimage/fancyapps-fancyBox-18d1712/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="jqimage/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link href="css/mystyledesign.css" rel="stylesheet" type="text/css" />
<form>
   <?php
      session_start();
      
      global $wpsh;
      
      $GBP = $wpsh->currentrate("GBP");
      
      $btcaddrss = $wpsh-> getbitcoinaddress();
      
      $GBPh_avg24 = $GBP['24h_avg'];
      
      $ticker = $wpsh->getcurrentBTC();
      
      ?>
   <div class="container">
      <div class="wraper">
         <div class="top-header"> </div>
      </div>
   </div>
   <div class="header-bottom">
   <div class="side-one">
      <ul>
         <li><a href=""> <a href="home.php" class="photo-text" target="_self">Free Internet Access</a> <img onload="this.style.opacity='1';" class="photo" src="images/home.png"/></a></li>
         <li><a href=""> <a href="social.php" class="photo-text" target="_self">Social Network</a> <img onload="this.style.opacity='1';" class="photo" src="images/world.png"/></a></li>
         <li> <a href=""> <a href="developers.php" class="photo-text" target="_self">App Store</a> <img onload="this.style.opacity='1';" class="photo" src="images/home2.png"/></a></li>
         <li> <a href=""> <a href="advertisers.php" class="photo-text" target="_self">Ad Server</a> <img onload="this.style.opacity='1';" class="photo" src="images/home3.png"/></a></li>
         <li><a href="intro.php" class="photo-text" target="_self">Securities Exchange</a> <img onload="this.style.opacity='1';" class="photo" src="images/home4.png"/></a></li>
      </ul>
      <div class="clear"></div>
      <div style="text-align:center; padding-top:23px;  padding-left:20px; height: 190px; width:99%;">
         <a class="twitter-timeline" href="https://twitter.com/tweetonwave" data-widget-id="529951428035366915">Tweets by @tweetonwave</a>
         <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
   </div>
   <div class="right-cont_social">
   <div style="padding-left:27px; padding-top:17px;" class="estimed" target="_self"> </div>
   <div class="scoll">
   <?php 
      $link = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
      
      ?>


 <?php if($link == "intro.php" || $link == "overview.php" ||   $link == "tradeequity.php" || $link == "sellerslist.php" || $link == "activitylog.php"){ ?>

   <div class="left-content"> 

   

      <ul>

        

         <li <?php  if( $link == "intro.php" ){  echo 'style="background: #3DCAFF;text-align:center;"';   }else{ echo 'style="text-align:center;"'; }  ?>><a href="intro.php" target="_self">Welcome<i class="fa fa-file-o fa-fw"></i></a></li>
         <li <?php  if( $link == "overview.php" ){ echo 'style="background: #3DCAFF;text-align:center;"';  }else{ echo 'style="text-align:center;"'; }  ?>><a href="overview.php" target="_self">Shareholders<i class="fa fa-file-o fa-fw"></i></a></li>
         <li <?php  if( $link == "tradeequity.php" ){  echo 'style="background: #3DCAFF;text-align:center;"';  }else{ echo 'style="text-align:center;"'; }  ?>><a href="tradeequity.php" target="_self">Buy/Sell<i class="fa fa-file-o fa-fw "></i></a></li>
         <li <?php  if( $link == "sellerslist.php" ){  echo 'style="background: #3DCAFF;text-align:center;"';   }else{ echo 'style="text-align:center;"'; }  ?>><a href="sellerslist.php" target="_self">Daybook<i class="fa fa-bar-chart-o fa-fw"></i></a></li>
         <li <?php  if( $link == "activitylog.php" ){  echo 'style="background: #3DCAFF;text-align:center;"';   }else{ echo 'style="text-align:center;"'; }  ?>><a href="activitylog.php" target="_self">Deals<i class="fa fa-file-o fa-fw"></i></a></li>
         <li></li>

        

         <li>
            <p align="center">&nbsp;</p>
         </li>
         <li>
            <p align="center"><strong>DATA AND CONTROLS</strong></p>
         </li>
         <li style="padding-left:8px;">
            <p align="left" class="pitk"><strong>Estimated Value:</strong></p>
         </li>
         <li>
            <div style="overflow: hidden;">
               <iframe style="width:interit; height:30px; overflow-x:hidden; overflow-y:disable; border:none;" src="valuation.html"></iframe> 
               <select style="width:100%;" name="select" class="grad" id="balcurrency"  onchange="all_currency_change_onevent()">
               <?php 
                  echo $wpsh->getcurrencies();
                  ?>
               </select>
            </div>
         <li style="background-color: #FFFFFF;">
            <p>&nbsp;</p>
         </li>
         <li style="padding-left:8px;">
            <p class="pitk"><strong id="crrent-currency" >GBP:</strong></p>
         </li>
         <li>

         <?php $ss = $wpsh->getbtcaddessbalance($btcaddrss);
           $val = number_format((float)$ss , 8, '.', ''); ?>
         
         
         <li style=" text-align:center;">
            <input  id="crrent-currency-value-fix" type="hidden"  value="<?php echo $val ?>"/>
           
		      <?php 
		   //    $ss = $wpsh->convertToBTCFromSatoshi($satoshibal);
               
           
               
             $satoshibal=$wpsh->getbtcaddessbalance($btcaddrss);
               //$ss = $wpsh->convertToBTCFromSatoshi($satoshibal);
			   
			   $ss = $satoshibal;
               
               $val = number_format((float)$ss , 8, '.', '');
               
               $val =  $wpsh->currency_converter("GBP",$val); ?>
               
            <input name="text" id="crrent-currency-value" type="text" class="form-control col-md-6" value="<? echo  number_format((float)$val , 8, '.', '') ?>" size="12px" readonly placeholder="Search term..." />
            <input type="hidden" id="priceinbtcbal" value="<?php $satoshibal ?>"/>

            <style type="text/css">
               .fancybox-custom .fancybox-skin {
               box-shadow: 0 0 0 #222;
               }
               element.style {height:400px;}
               iframe  {height:400px;}
            </style>
            <script type="text/javascript">
               $(document).ready(function() {
               	/*
               	 *  Simple image gallery. Uses default settings
               	 */
               
               	$(".fancybox").fancybox({
                 openEffect  : 'none',
                 closeEffect : 'none',
                 iframe : {
                     preload: false
                 }
               });
               
            </script>

            <button class="fancybox" data-fancybox-type="iframe" href="id.php">Id</button>
            <button class="fancybox" data-fancybox-type="iframe" href="withdraw.php">Withdraw</button>
            <button class="fancybox" data-fancybox-type="iframe" href="addfunds.php">Add Funds</button>

         
         </li>


         <p>&nbsp;</p>
         </li>
         <li style="padding-left:8px;">
            <p class="pitk"><strong>Shares:</strong></p>
         </li>
         <li>

         <li style=" text-align:center;">
            <input id="price" type="text" style="height=3px"  value="<?php echo $wpsh->sharebalance();?>" class="form-control col-md-6" placeholder="Search term..." readonly>  <input type="hidden" id="priceinbtcbal" value=""/>


            <button class="fancybox" data-fancybox-type="iframe" href="pdf.php"> Certificate </button>
 
            <button class="fancybox" data-fancybox-type="iframe" href="share.php">Share</button>

<!--
<form style=" margin-top:2px; border-left:2px;" action="myprofile.php" method="post">
<input type='hidden' name='action' value='select2' />
<input name="submit" type="submit" value="ID" />

<form action="myprofile.php" method="post">
<input type='hidden' name='action' value='select2' />
<input type="submit" value="PDF" />

<form action="tradeequity.php" method="post">
<input type='hidden' name='action' value='select2' />
<input type="submit" value="withdraw" />

<form action="myprofile.php" method="post">
<input type='hidden' name='action' value='select2' />
<input type="submit" value="Share" />


</form>

-->


</li>


</ul>


<style>
   .confirmation{
background: none repeat scroll 0 0 #49c8f5;
color: #fff;
font-size: 16px;
padding: 10px;
border-radius: 5px;
border-bottom: 1px solid #ccc;
width: 100%;
font-weight: bolder;
font-family: serif;
margin-left: -5px;
margin-top: 10px;
   }
</style>


 <?php }else{ ?>


<style>
   .confirmation{
background: none repeat scroll 0 0 #49c8f5;
margin-top: 10px;
color: #fff;
font-size: 16px;
padding: 10px;
border-radius: 5px;
border-bottom: 1px solid #ccc;
width: 100%;
margin: 2px auto 0 26%;
font-weight: bolder;
font-family: serif;
 } 
</style>


 <?php }  ?>

<div align="left"></div>
</div>

<!--------------------------------------------------------->
<!--------------------------------------------------------->




<?php

           $filename = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

           if($filename == "intro.php" || $filename == "overview.php" || $filename == "tradeequity.php" || $filename == "sellerslist.php" || $filename == "activitylog.php"  ){





?>


<style>
.Opportunity {background: none repeat scroll 0 0 #F0F0F0;
color: #49C8F5;
font-size: 25px;
margin: 0;
padding: 7px; }
</style>


<script>
   function showIt2() {
     document.getElementById("confirmation").style.display = "none";
   }
   setTimeout("showIt2()", 10000); // after 10 secs
   
</script>


   <div class="col-md-6" style="text-align:center">
    <div class='confirmation' id="confirmation">
          <?php 



           echo $get_notification = $wpsh->get_notification();
         
          ?>
   </div>

<?php



         


  }


?>



</div>