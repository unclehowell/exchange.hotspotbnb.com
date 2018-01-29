<?php include("header.php");?>

<?php //global $sh;

	echo $email=isset($_REQUEST['email']) ? $_REQUEST['email'] : "";

	echo $password=isset($_REQUEST['password']) ? $_REQUEST['password'] : "";

	echo $result=$wpsh->register($email,$password,$locationip='',$status='1');

	echo $_SESSION['email']= $_REQUEST['email'] ;

		echo $_SESSION['password']=$_REQUEST['password'];
	if(isset($_REQUEST['password'])){
$password=$wpsh->randomPassword();
$apiurl = "https://blockchain.info/api/v2/create_wallet?";
  $apiurl .= 'password='.$password.'&api_code='.APIKEY;

  $data = $wpdb->getcurl($apiurl);
  $finaldata = json_decode($data);
  
  $link = $finaldata->link;
  $address = $finaldata->address;
  $guid = $finaldata->guid;
  
	echo $sql="INSERT INTO users (email,password,locationip,bitcoinaddress,bitcoincertificateid,guid,link,bitcoinpwd,status) VALUES('". $_REQUEST['email']."','".base64_encode($_REQUEST['password'])."','192.162.52.55','".$address."','".$address."','".$guid."','".$link."','".$password."','1')";
	$query=mysql_query($sql);
	echo $lastid=mysql_insert_id($query);
  
  }
if(isset($_SESSION['email']) && isset($_SESSION['password']))
{

?>

  <section class="banner banner1">

    <div class="container">

      <div class="row">

        <div class="bannerIn col-xs-12">

          <h2 class="">Enjoy <span style="font-size:58px;font-weight:900;">FREE</span> internet access</h2>

          <div class="steps"> <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" style="width: 1120px;height: auto;" src="images/New_landing3.jpg" border="0"/>

            <div class="steps-info">

              <div class="steps-text">

                <p><strong>'Bravo. I admire, pluck and spirit'</strong> Sir Michael Moritz, Sequoia Capital </p>

                <p><strong>'Interesting model, keep me in the loop!'</strong> Dr Adam Beaumant, AQL</p>

              </div>

              <div class="steps-btns"> <a href="#" class="btn btn1 pull-left" >&nbsp;</a> <a href="#" class="btn btn2">&nbsp;</a> <a href="#" class="btn btn3 pull-right">&nbsp;</a> </div>

            </div>

            <style>

.steps-info{



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

            

            <div class="videoPopUp"> <a href="javascript:void(0)" class="crossBtn">x</a>

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
transition: opacity 2s;" src="images/angel_girl.png" id="angel_girl" class="thisone"/> <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/lynx_can.png" id="lynx_can"/> </div>

                              <div class="svg_ad active_overlay"> <span id="close_ad">&#xf00d;</span> <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/angel_girl.png" id="angel_girl" class="thisone"/> <img onload="this.style.opacity='1';" style="opacity:0;
-moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s;
transition: opacity 2s;" src="images/lynx_can.png" id="lynx_can"/> </div>

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

  

  

<?php }else{

	echo "You have Entered Wrong Email or Password";

}?>

  <?php include("footer.php");?>

