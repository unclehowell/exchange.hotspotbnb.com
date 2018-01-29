<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>
Wave | Internet Service Provider</title>

<link rel='stylesheet' id='wave-style-css'  href='style.css?ver=2013-07-18' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='wave-ie-css'  href='css/ie.css?ver=2013-07-18' type='text/css' media='all' />
<![endif]-->
<script type='text/javascript' src='js/jquery/jquery.js?ver=1.10.2'></script>

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
	<style type="text/css" id="wave-header-css">
			.site-header {
			background: url(images/headers/circle.png) no-repeat scroll top;
			background-size: 1600px auto;
		}
		</style>
	<link rel="stylesheet" href="demo/style2.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/jquery.flipcountdown.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
<script type="text/javascript" charset="utf-8" src="js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="demo/jquery.url.min.js"></script>
<script type="text/javascript" src="demo/script.js"></script>
<script type="text/javascript" src="demo/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.flipcountdown.js"></script>


</head>

<body>
<div id="overlay"></div>
<div class="wrapper">

<div class="bigchart">
    <div id="bigchartHolder"> <span></span>
      <div id="highcharts-7" class="highcharts-container">
        <iframe width="100%" scrolling="no" height="420" overflow="no" src="demo/stock.htm"></iframe>
      </div>
    </div>
    <a href="#" class="closeGraph">Close Graph</a>
  </div>


<div class="headerMain">
  <section class="headerTop">
    <div class="container">
            <div class="row">
        <div class="col-xs-12">
          <ul>
         <li>The estimated value of Wave, this hour in time, is <?php echo $wpsh->getestimatedvalue(); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="header">
    <div class="container">
      <div class="row">
        <div class="col-xs-4"> <a href="#" class="logo"><img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/logo.jpg" width="320" height="41"/></a> </div>
        <div class="col-xs-8">
          <ul class="menu pull-right">
            <li> <a href="#">home</a></li>
                                      <li>
              <button class="btn btn-primary btn-lg btn-green"  data-toggle="modal" data-target="#myModal">Get Started</button>
            </li>
            <li>
              <button class="btn btn-primary btn-lg btn-grey loginBtn" data-toggle="modal" data-target="#myModal1">Login</button>

               <div class="loginSlide">
          <span class="closeBtn">X</span>
            <div class="modal-body">
                         	        <form class="lwa-form" id="loginform" action="#/login/" method="post">
        	<span class="lwa-status"></span>
                   <p>
                        <input type="text" name="log" class="input" placeholder="Username" />
                    
                    </p>
              
                        <p>
                        <input type="password" name="pwd" class="input" placeholder="Password"/>
                        </p>
                <input type="hidden" name="_wp_original_http_referer" value="" />
                <p class="submit">
                        <input type="submit" name="wp-submit" id="lwa_wp-submit" value="Log In" tabindex="100" />
                        <input type="hidden" name="lwa_profile_link" value="" />
                        <input type="hidden" name="login-with-ajax" value="login" />
                    </p>
                   
         
        </form>
        		
              <a href="#" class="lostPass">Forgot Password</a>
            </div>
          </div>
            </li>
                      </ul>
          
           
          
          
          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 
                </div>
                <div class="modal-body" >
                                    <div class="popUpTop">
                    <h3>Register with</h3>
        
        <ul>
		<div>Coming Soon</div>
          <li><a href="#"><img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/icon-1.png" width="49" height="49"/></a></li>
          <li><a href="#"><img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/icon-2.png" width="49" height="48"/></a></li>
          <li><a href="#"><img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/icon-3.png" width="49" height="48"/></a></li>
          <li><a href="#"><img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/icon-4.png" width="49" height="48"/></a></li>
          <li><a href="#"><img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/icon-5.png" width="49" height="48"/></a></li>
        </ul>
        <p class="text-center">Or</p>
</div><div class="popBottom">
     <h3>Register with</h3>
                  
                  <div class="form-wrapper">
<div id="error-message"></div>

<form method="post" name="st-register-form" id="registerform2">


<p><label for="st-email">Email</label>
 <input type="text" autocomplete="off" name="mail" id="st-email" /></p>

<p><label for="st-psw">Password</label>
 <input type="password" name="password" id="st-psw" /></p>

 <p><label for="st-psw2">Confirm Password</label>
 <input type="password" name="password2" id="st-psw2" /></p>


<p class="submit"><input type="button" id="register-me" value="Register" /></p>

</form>

</div>
</div>

                </div>
                <div class="modal-footer">
                  <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
                    <div id="show"> </div>

         <script type="text/javascript"> 
          
$("#st-psw2").change(function(){
     if($(this).val() != $("#st-psw").val()){
               alert("Confirm Password  not matched");
               //more processing here
     }
});




          function show_registration() {
        var request = $.ajax({
            url: "form-ajax.php",
            type: "GET",
            dataType: "html"
        });

        request.done(function(msg) {
          //alert('hello');
            $('#show').html(msg);

        });

        request.fail(function(jqXHR, textStatus) {
            alert( "Request failed: " + textStatus );

        });
    }

jQuery('#register-me').on('click',function(){

var action = 'register_action';

var username = jQuery("#st-username").val();
 var mail_id = jQuery("#st-email").val();
 var firname = jQuery("#st-fname").val();
 var lasname = jQuery("#st-lname").val();
 var passwrd = jQuery("#st-psw").val();

var ajaxdata = {

action: 'register_action',
 username: username,
 mail_id: mail_id,
 firname: firname,
 lasname: lasname,
 passwrd: passwrd,

};

jQuery.post( ajaxurl, ajaxdata, function(res){ // ajaxurl must be defined previously

jQuery("#error-message").html(res);
 });
 });




          </script>

                  </div>
      </div>
    </div>
  </section>
</div>
 <div class="forgotPopUp">
          <h3>Enter email to retrieve new password</h3>
          
          
<div class="login" id="theme-my-login1">
	<p class="message">Please enter your username or email address. You will receive a link to create a new password via email.</p>		<form name="lostpasswordform" id="lostpasswordform1" action="/sharesbitcoin/?instance=1" method="post">
		<p>
			<label for="user_login1">Username or E-mail:</label>
			<input type="text" name="user_login" id="user_login" class="input" value="" size="20" />
		</p>

		
		<p class="submit">
			<input type="submit"  name="wp-submit" id="wp-submit" value="Get New Password"  />
			<input type="hidden" name="redirect_to" value="#/login/?checkemail=confirm" />
			<input type="hidden" name="instance" value="1" />
			<input type="hidden" name="action" value="lostpassword" />
		</p>
	</form>
		<ul><li id="register_here"><a data-target="#myModal" data-toggle="modal" href="#">Register</a></li></ul>
</div>

<script>

jQuery("#wp-submit").click(function(){

	if ($("#user_login").val() == ''){
               alert("Enter email id in the field");
               //more processing here
               return false;
     }
});
</script>

          <!--ul>
          <li>
         <input type="text"/></li>
         <li>
         <input type="submit" value="Get New Password"/></li>
         <li>
         <a href="#">Login</a>
         <a href="#">Register</a></li>
         </ul-->
            </div>

<style>

.banner1 {

	float: left;

	width: 100%;

	background: url("images/banner3.jpg") no-repeat 50% 0;

	height: 500px;

	background-attachment: fixed !important;

}

.banner2 {

	float: left;

	width: 100%;

	background: url("images/banner3.jpg") no-repeat 50% 0;

	min-height: 800px;

	background-attachment: fixed;

}

.banner3 {

	float: left;

	width: 100%;

	background: url("images/banner4.jpg") no-repeat 50% 0;

	min-height: 900px;

	background-attachment: fixed;

}

.banner4 {

	float: left;

	width: 100%;

	background: url("images/banner23.jpg") no-repeat 100% 0;

	min-height: 700px;

	background-attachment: fixed;

}

.banner5 {

	float: left;

	width: 100%;

	background: url("images/banner6.jpg") no-repeat 50% 0;

	min-height: 1000px;

	background-attachment: fixed;

}

.banner7 {

	float: left;

	width: 100%;

	background: url("images/banner211.jpg") no-repeat 50% 0;

	min-height: 800px;

	background-attachment: fixed;

}

</style>



 
 


<section class="banner banner1">

  <div class="container">

    <div class="row">

     <div class="bannerIn col-xs-12">

         <h2 class="">Enjoy <span style="font-size:58px;font-weight:900;">FREE</span> internet access</h2>

    <div class="steps">

        <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" style="width: 1120px;height: auto;" src="images/New_landing3.jpg" border="0"/>

        <div class="steps-info">

            <div class="steps-text">

                <p><strong>'Bravo. I admire, pluck and spirit'</strong> Sir Michael Moritz, Sequoia Capital  </p>

                <p><strong>'Interesting model, keep me in the loop!'</strong> Dr Adam Beaumant, AQL</p>

            </div>

            <div class="steps-btns">

                <a href="#" class="btn btn1 pull-left" >&nbsp;</a>

                <a href="#" class="btn btn2">&nbsp;</a>

                <a href="#" class="btn btn3 pull-right">&nbsp;</a>

            </div>





        </div>

        <style>.steps-info{

         width: 100%;

float: left;



text-align: left;padding-top: 25px;

}

.steps-text{

    float: left;

    margin-left: 60px;

}

.steps-text p{font-style: italic;font-size: 11px;margin: 0px;}

.steps-text p strong{font-weight: bold;font-style: normal;font-size: 14px;}

.steps-btns{float: right;width: 640px;margin-top: -12px;}

.steps-btns .btn1{background: url("images/wave.png");width: 193px;height: 52px;display: inline-block;-webkit-animation-name:none;animation-name:none;background-repeat: no-repeat;margin-left: -15px;}

.steps-btns .btn2{background: url("images/try.png");width: 172px;height: 52px;display: inline-block;-webkit-animation-name:none;animation-name:none;margin-left: 50px;background-repeat: no-repeat;}

.steps-btns .btn3{background: url("images/read.png");width: 146px;height: 52px;display: inline-block;-webkit-animation-name:none;animation-name:none;margin-right: 27px;background-repeat: no-repeat;}





.steps-btns .btn1:hover{background: url("images/wave_hover.png");background-repeat: no-repeat;}

.steps-btns .btn2:hover{background: url("images/try_hover.png");background-repeat: no-repeat;}

.steps-btns .btn3:hover{background: url("images/read_hover.png");background-repeat: no-repeat;}





</style>

<img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/New_landing2.png" border="0" usemap="#Map" class="hide" />

      <map name="Map" id="Map">

        <area shape="poly" coords="422,272,452,321,594,319,561,273,420,274" href="#" class="btn btn1 pull-left" />

        <area shape="poly" coords="630,273,663,321,779,319,749,271,629,274" href="#" class="btn btn2"/>

        <area shape="poly" coords="799,271,830,321,937,317,937,274,798,270" href="#" class="btn btn3 pull-right" />

      </map>

    </div>







      </div>

      <div class="col-xs-12">



       <!---->

          
          <div class="VideoBox" id="VideoBox"> <!--<a href="#" class="videoBtn"></a>-->

            <div class="videoPopUp">

            <a href="javascript:void(0)" class="crossBtn">x</a>

              <iframe width="700" height="380" src="//www.youtube.com/embed/3aV-aXgvubM?rel=0" frameborder="0" allowfullscreen></iframe>

            </div>



        </div>

      </div>

    </div>

  </div>

</section>



<section class="demoContainer" id="demoContainer">

  <div class="container">

    <div class="row">

      <div class="col-xs-12">

        <div id="SiteContainer" class="structural">

          <div id="BodyContent" class="structural fixedWidth clear standard marketing">

            <div class="background">

              <div class="middle"></div>

              <div class="top"></div>

              <div class="bottom"></div>

            </div>

            <div class="inner">

                <p class="hide" style="text-align: center; position: absolute; top: 10px; left: 269px;">Log in with account: <strong>guest@wavetele.info</strong> and password: <strong>guest</strong></p>

              <div class="demoIn">

                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="overflow: visible;">

                  <tbody>

                    <tr>

                      <td><div class="buttons">

                          <div class="button" id="rotate"></div>

                          <div class="button" id="to_ipad"></div>

                          <div class="button" id="to_iphone"></div>

                          <div class="button" id="to_iphone5"></div>

                          <div class="button" id="to_windows_phone"></div>

                          <div class="button" id="to_windows_surface"></div>

                          <div class="button" id="to_android_phone"></div>

                        </div></td>

                    </tr>

                    <tr>

                      <td ><div id="iphone5" class="portrait">



                          <input target="frame" id="url" value="http://m.bing.com">

                          <div>

                            <!--<iframe src="http://www.surfwithwave.com/index.php?do=/mobile/feed/" name="frame" scrolling="yes" id="frame" wmode="transparent" overflow="no"></iframe>-->
                            
                            <iframe src="http://surfonwave.com/masterdemo/index.php?do=/mobile/feed/" name="frame" scrolling="yes" id="frame" wmode="transparent" overflow="no"></iframe>

                            <div id="footer_ad" class="svg_ad">

                              <h2>Lynx Excite</h2>

                              <h3>Even Angels<br/>

                                Will Fall</h3>

                              <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/angel_girl.png" id="angel_girl" class="thisone"/>

                              <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/lynx_can.png" id="lynx_can"/>

                              </div>

                            <div class="svg_ad active_overlay">

                            <span id="close_ad">&#xf00d;</span>

                            <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/angel_girl.png" id="angel_girl" class="thisone"/>

                            <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/lynx_can.png" id="lynx_can"/>

                            </div>

                          </div>

                        </div></td>

                    </tr>

                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>



<section class="banner banner2" id="banner2">

  <div class="container">

    <div class="row">

      <div class="banner2Bg">

        <div class="col-xs-6">

          <div class="bannerIn">

            <h2> ANY DEVICE. ANYTIME. ANYWHERE.</h2>

            <p>&nbsp;</p>

            <p>Wave is the freedom to connect and surf without the cost.</p>
<p>We give you unlimited internet access with no broadband or line rental costs. Whatever your need or location we&#8217;d love to hear from you.</p>
<p>Already in a broadband agreement ? Not to worry, the choice to switch is still yours to make. We would love the opportunity to help you start enjoying free internet service so <a href="#/#">get in touch</a> today.</p>

            <p><a class="learnMore learnMore1" href="#banner6">Learn more</a> </p>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<section class="banner banner6" id="banner6">

  <div class="container">

    <div class="row">

      <div class="col-xs-12">

        <div class="bannerIn">

          <h2>The feeling of free internet is unparalleled</h2>

          <p>

            <p>Now is the time for the people and businesses of Britain to catch a break. The cost of digital communications keeps rising. So it gives us great pleasure to bring you the most important part of these service for free. Surfing the internet is a liberating feeling, but now you can surf for nothing, you are trully free.</p>

          </p>

          <p><a class="learnMore learnMore2" href="#banner3">Learn more</a> </p>

        </div>

      </div>

    </div>

  </div>

</section>

<section class="banner banner3" id="banner3">

  <div class="container">

    <div class="row">

      <div class="col-xs-6">

        <div class="bannerIn">

          <h2>DOING MORE</h2>

          <h3>With WAVES next-generation app store</h3>

          <p>

            <p>Wave uses the latest revolutionary technology for its emerging app store. Using high end HTML5 complimented by Scalable Vector Graphics (SVG). Scalable Vector Graphics assure objects do not become pixelated when enlarged. This will be incredibly effective with augmented reality glasses where the size of images are limitless. You can check out our online interactive demo which demonstrates high end SVG graphics in forms of animation, detailed static and even advertisement.</p>

          </p>

          <p><a class="learnMore learnMore3" href="#banner4">Learn more</a> </p>

        </div>

      </div>

    </div>

  </div>

</section>

<!--<section class="banner banner4" id="banner4">



</section>-->

<section class="banner banner7">

  <div class="container">

    <div class="row">

      <div class="col-xs-6">

        <div class="bannerIn">

          <h2>Local Trust</h2>

          <h3>Wave has a broad community of various partners within our Local Trust.</h3>

          <p>

            <p>Communication between key alliance partners and bringing ideas together from all ends of the scale is highly important to us. At Wave everyone has a say, crucial decisions are made as a community. At Wave we believe everyone involved has a say and take all considerations from our partners, and make decisions as a community which is bonded together by our Local Trust.</p>

          </p>

          <p><a class="learnMore learnMore4" href="#banner5">Learn more</a> </p>

        </div>

      </div>

    </div>

  </div>



 </section>

<section class="banner banner5" id="banner5">

  <div class="container">

    <div class="row">

      <div class="col-xs-6 pull-right">

        <div class="bannerIn">

          <h2>ELIMINATING INEQUALITY</h2>

          <h3>CURRENCY IS ARCHAIC, SO WE MADE SOCIALXCHANGE</h3>
<h4>CURRENCY IS A CHRONIC CAUSE OF INEQUALITY (AND DIGITAL CURRENCIES ONLY EXTEND THAT PROBLEM INTO CYBERSPACE).</h4>
<p>We believe in reducing inequality with innovation, so in partnership with the <a href="#">lawful bank</a> and <a href="#">Klout</a>, we are developing the <a href="#">SocialXchange</a>. This sits behind our <a href="#">Logrithmic Social Scoring App</a> which will soon be able to offer an alternative to the very philosophy of currency.</p>
<p>The app determines the collective view of your community then in realtime, quantifies the value you bring them. That communities needs and willingness to release, loan or exchange their resources and services are also indexed with a note of all accepted social scores.</p>

          <p><a class="learnMore learnMore5" href="#demoContainer">Learn more</a> </p>

        </div>

      </div>

    </div>

  </div>

</section>

<section class="BottomContainer">

  <div class="container">

    <div class="row">

      <div class="col-xs-12">

        <div class="BottomContainerIn"> <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/logo_end.png" width="300" height="100"/>

          <aside data-controller="Counter" class="counter clear-self" id="counter-scrolled">

            <p><span class="counter-entry">Here is </span>

              <mark>8,173</mark>

              <span>pixels of great news about our future!</span></p>

            <div class="share-counter">

             <ul class="socialIcons">

           <div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=604258579627621";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>



<li>



</li>



<li><!-- Place this tag where you want the share button to render. -->

<div class="g-plus" data-action="share" data-annotation="none"></div>



<!-- Place this tag after the last share tag. -->

<script type="text/javascript">

  (function() {

    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;

    po.src = 'https://apis.google.com/js/platform.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);

  })();

</script>

</li>



                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>





                    <li ><a href="https://twitter.com/share" class="twitter-share-button"><img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/icon1.png"/></a></li>

                    <li >  <div class="fb-share-button" data-href="http://182.73.117.21/development/wave/" data-type="button_count"></div>

</li>



                    <li>

                      <script src="//platform.linkedin.com/in.js" type="text/javascript">

 lang: en_US

</script>

<script type="IN/Share" data-counter="right"></script>



                    </li>

                  </ul>

            </div>

          </aside>

        </div>

      </div>

    </div>

  </div>

</section>




<script type="text/javascript">

                        var j = jQuery.noConflict();

                        function updateClock() {



                        var htmlString = j('#mywin').html();

                        if(htmlString ==0)

                        {

                        j('#load_tweets').load('record_count.php').fadeIn("slow");



                        }else

                        {

                        j('#url').css('display','block');

                        }



                        }

                        updateClock();

                        myCounter = setInterval(function () {

                            updateClock();

                        }, 15000);





                </script>






<div class="footerOuter">

    <div id="Footer" class="fixedWidth standard" style="margin: 0 auto 0; width: 1170px;">

        <div class="section">

            <div id="PublicFooter" class="fixedWidth standard">

                <div id="PublicFooter-navigation">

                    <div class="PublicFooter-navigation-group">

                        <h5>What we do</h5>

<div class="menu-what_we_do-container"><ul id="menu-what_we_do" class=" "><li id="menu-item-67" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-67"><a href="#">Free Internet</a></li>
<li id="menu-item-68" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-68"><a href="#">SVG Advertising</a></li>
</ul></div>
                    </div>

                    <div class="PublicFooter-navigation-group">

                        <h5>Partner</h5>

<div class="menu-partner-container"><ul id="menu-partner" class=" "><li id="menu-item-69" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-69"><a href="#">Internet Service Providers</a></li>
<li id="menu-item-70" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-70"><a href="#">Advertisers</a></li>
<li id="menu-item-71" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-71"><a href="#">Investors</a></li>
<li id="menu-item-73" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-73"><a href="#">Developers</a></li>
<li id="menu-item-74" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-74"><a href="#">Commercial</a></li>
</ul></div>


                    </div>

                    <div class="PublicFooter-navigation-group">

                        <h5>Support</h5>

<div class="menu-support-container"><ul id="menu-support" class=" "><li id="menu-item-75" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-75"><a href="#">Submit Ticket</a></li>
<li id="menu-item-76" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76"><a href="#">Downloads</a></li>
</ul></div>


                    </div>

                    <div class="PublicFooter-navigation-group">

                        <h5>About</h5>

<div class="menu-about-container"><ul id="menu-about" class=" "><li id="menu-item-77" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-77"><a href="#">Our team</a></li>
<li id="menu-item-78" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-78"><a href="#">Stakeholders</a></li>
<li id="menu-item-79" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-79"><a href="#">Careers</a></li>
<li id="menu-item-80" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-80"><a href="#">Terms of service</a></li>
<li id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81"><a href="#">Privacy</a></li>
</ul></div>


                    </div>

                    <div class="PublicFooter-navigation-group">

                        <ul class="socialIcons">

                            <li ><a href="Default" class="google" title=""></a></li>

                            <li ><a href="Default" class="twitter" title=""></a></li>

                            <li ><a href="Default" class="facebook" title=""></a></li>

                            <li><a href="Default" class="in" title=""></a></li>

                        </ul>

                        <div id="PublicFooter-copyright" style="margin-bottom: 10px;"> <span>http://surfonwave.com/</span> </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

<script type='text/javascript' src='js/jquery/jquery.masonry.min.js?ver=2.1.05'></script>
<script type='text/javascript' src='js/functions.js?ver=2013-07-18'></script>

<script type="text/javascript">

          jQuery.noConflict();

    $(document).ready(function(){



        $('frame').load(function(){

            $('frame').contents().find('input#js_email').bind('change',function(e) {

                $('input#js_email').val('hkhhk');

            });

        });





        $('.btn.btn1').click(function(e){





            $('.videoPopUp').fadeIn();

            e.preventDefault();

        });

        $('.crossBtn').click(function(e){



            $('.videoPopUp').fadeOut();

            e.preventDefault();

        });





        $('.lostPass').click(function(e){

            $('#overlay').fadeIn();

            $('.forgotPopUp').fadeIn();

            e.preventDefault();

        });



        $('#overlay').click(function(e){

            $('#overlay').fadeOut();

            $('.forgotPopUp').fadeOut();

            e.preventDefault();

        });





        $(".demoBtn").click(function() {

            $('html,body').animate({

                scrollTop: $("#demoContainer").offset().top},

            'slow');

        });



        $(".infoBtn").click(function() {

            $('html,body').animate({

                scrollTop: $("#VideoBox").offset().top},

            'slow');

        });





        $(".learnMore1").click(function() {

            $('html,body').animate({

                scrollTop: $("#banner6").offset().top},

            'slow');

        });



        $(".learnMore2").click(function() {

            $('html,body').animate({

                scrollTop: $("#banner3").offset().top},

            'slow');

        });



        $(".learnMore3").click(function() {

            $('html,body').animate({

                scrollTop: $("#banner4").offset().top},

            'slow');

        });



        $(".learnMore4").click(function() {

            $('html,body').animate({

                scrollTop: $("#banner5").offset().top},

            'slow');

        });



        $(".learnMore5").click(function() {

            $('html,body').animate({

                scrollTop: $("#demoContainer").offset().top},

            'slow');

        });





        $(".btn.btn2, .blue-arrow a").click(function() {

            $('html,body').animate({

                scrollTop: $("#demoContainer").offset().top + 90},

            'slow');

        });

        $(".btn.btn3").click(function() {

            $('html,body').animate({

                scrollTop: $("#banner2").offset().top + 90},

            'slow');

        });





        $('.loginBtn').click(function(e){



            $('.loginSlide').fadeIn();

            $(this).hide();

            $('.menu .btn-green').hide();

            e.preventDefault();

        });



        $('.closeBtn').click(function(e){



            $('.loginSlide').hide();

            $('.loginBtn').show();

            $('.menu .btn-green').show();

            e.preventDefault();

        });





        $('.headerTop ul').click(function(e){



            $('.bigchart').css('margin-top','100px');

            $("html,body").stop().animate({scrollTop:0}, 0);

            $('body').addClass('bigchartMain');

            e.preventDefault();

        });



        $('.closeGraph').click(function(e){



            $('.bigchart').css('margin-top','-400px');

            $('body').removeClass('bigchartMain');



            e.preventDefault();

        });



        $('#footer_ad').on('click', function(){

            $('.active_overlay').toggleClass('active');

            $('.active_overlay #lynx_can').animate({

                'bottom' : '-24px'

            }, 2000);



            $('#iphone5.portrait .active_overlay #angel_girl').delay('2000').animate({

                'top' : '99px',

                opacity : '1'

            }, 2000);

            $('#iphone5.landscape .active_overlay #angel_girl').delay('2000').animate({

                'top' : '-110px',

                opacity : '1'

            }, 2000);



            $('#iphone.portrait .active_overlay #angel_girl').delay('2000').animate({

                'top' : '59px',

                opacity : '1'

            }, 2000);

            $('#iphone.landscape .active_overlay #angel_girl').delay('2000').animate({

                'top' : '-90px',

                opacity : '1'

            }, 2000);



            $('#ipad.portrait .active_overlay #angel_girl').delay('2000').animate({

                'top' : '102px',

                opacity : '1'

            }, 2000);

            $('#ipad.landscape .active_overlay #angel_girl').delay('2000').animate({

                'top' : '34px',

                opacity : '1'

            }, 2000);





            $('#windows_surface.portrait .active_overlay #angel_girl').delay('2000').animate({

                'top' : '111px',

                opacity : '1'

            }, 2000);

            $('#windows_surface.landscape .active_overlay #angel_girl').delay('2000').animate({

                'top' : '30px',

                opacity : '1'

            }, 2000);





            $('#windows_phone.portrait .active_overlay #angel_girl').delay('2000').animate({

                'top' : '51px',

                opacity : '1'

            }, 2000);

            $('#windows_phone.landscape .active_overlay #angel_girl').delay('2000').animate({

                'top' : '-90px',

                opacity : '1'

            }, 2000);



            $('.active a').delay('7000').css({opacity: 0, visibility: "visible"}).animate({

                opacity : '1'

            }, 2000);



            //Resize for screen size

            //$currentHeight =  $('#frame').css('height');

            //alert($currentHeight);

            //$('.svg_ad.active_overlay').css('height', $currentHeight);

        });









        $('.svg_ad #close_ad').on('click', function(){

            $('.active_overlay').removeClass('active');

            $('.active_overlay #angel_girl').attr('style','');

            $('.active_overlay #lynx_can').attr('style','');

        });



        var setFrameUrl = function(url) {

            if (!url || url == 'undefined') return;

            if (!url.match('^https?://')) {

                url = 'http://' + url;

            }

            $('#url').val(url);



            //grab the sub iframe iframe id and change source

            //$('#frame').attr('src',url);

            var x = document.getElementById("frame");

            var y = (x.contentWindow || x.contentDocument);

            if (y.document)y = y.document;

            y.getElementById("frame").setAttribute('src', url);



            y.getElementById("frame").style.display="block";

            y.getElementById("holder").style.display="none";

            y.getElementById("mobile_holder").style.position="fixed";



        };





        window.onscroll = function (oEvent) {

            var scrollPos = window.pageYOffset;

            $('.counter mark').html(scrollPos);

        }



    });

$(document).keypress(function(e) {
    if(e.which == 10 || e.which == 13) {
var urlo = $('#url').val();
//alert(urlo);
        var n = urlo.indexOf("http");



        //alert(urlo);
        if(n == 0){

            jQuery('#frame').attr('src',urlo);

            jQuery('#url').val(urlo);

        }else{

            jQuery('#frame').attr('src','http://' + urlo);

            jQuery('#url').val('http://' + urlo);

        }

        jQuery('#frame').location.reload();
    }
});





$("#register_here").on('click', function(){

$(".forgotPopUp").hide();

$("#overlay").hide();

});

var elem = $( ".forgotPopUp" )[0];

$( ".lostPass" ).on( 'click', function ( e ) {
    $( elem ).show();
    e.stopPropagation();
});

$( document ).on( 'click', function ( e ) {
    if ( $( e.target ).closest( elem ).length === 0 ) {
        $( elem ).hide();
                $("#overlay").hide();


    }
});
                
$( document ).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) {
        $( elem ).hide();
        $("#overlay").hide();
    }
});





 

</script>



<script>



    var NY = Math.round((new Date('1/01/2015 00:00:01')).getTime()/1000);

    jQuery('#new_year').flipcountdown({

        tick:function(){

            var nol = function(h){

                return h>9?h:'0'+h;

            }

            var	range  	= NY-Math.round((new Date()).getTime()/1000),

            secday = 86400, sechour = 3600,

            days 	= parseInt(range/secday),

            hours	= parseInt((range%secday)/sechour),

            min		= parseInt(((range%secday)%sechour)/60),

            sec		= ((range%secday)%sechour)%60;

            return nol(days)+' '+nol(hours)+' '+nol(min)+' '+nol(sec);

        }

    });



</script>

<script type="text/javascript">





</script>



<script type="text/javascript">



 var _gaq = _gaq || [];

 _gaq.push(['_setAccount', 'UA-48706063-1']);

 _gaq.push(['_trackPageview']);



 (function() {

   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

 })();



</script>



</body>

</html>
