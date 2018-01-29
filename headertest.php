<?php 

   ?> 
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
            <title>Wave | Internet Service Provider</title>
            <link rel='stylesheet' id='wave-style-css'  href='style.css?ver=2013-07-18' type='text/css' media='all' />
            <!--[if lt IE 9]>
            <link rel='stylesheet' id='wave-ie-css'  href='css/ie.css?ver=2013-07-18' type='text/css' media='all' />
            <![endif]-->
            <script type='text/javascript' src='js/jquery/jquery.js?ver=1.10.2'></script> <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js">    </script>
            <style type="text/css">
               .recentcomments a {
               display: inline !important;
               padding: 0 !important;
               margin: 0 !important;
               }
            </style>
            <style type="text/css" id="wave-header-css">
               .site-header {
               background: url(images/headers/circle.png) no-repeat scroll top;
               background-size: 1600px auto;
               }
            </style>
            <link rel="stylesheet" href="demo/style2.css" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/jquery.flipcountdown.css" />
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
           
         </head>
         <body>
            <div id="fb-root"></div>
          
            <div id="overlay"></div>
            <div class="wrapper">
            <div class="headerMain">
               <section class="headerTop">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12">
                           <ul>

                              <li><input type="button" value="Graph" onclick="appear_graph()" > </li>
                              <li style="font-size:13px;">
                                 <img src="/images/brit.png" alt="british flag"> 2 Knighted Technology Leaders <img src="/images/uteflag.png" alt="british flag"> 50 Soldiers and Police <img src="/images/brit.png" alt="british flag"> £<script language="JavaScript">
                                    var url="https://docs.google.com/spreadsheet/pub?key=0AjaDYTsxYrzTdFc2N2FFVVhSYnBfbTFnUXRwdHhydnc&single=true&gid=5&range=k14&output=csv";
                                      xmlhttp=new XMLHttpRequest();
                                      xmlhttp.onreadystatechange = function() {
                                        {
                                          document.getElementById("display").innerHTML = xmlhttp.responseText;
                                        }
                                      };
                                      xmlhttp.open("GET",url,true);
                                      xmlhttp.send(null);
                                    function ackbutton() {
                                          //e.preventDefault();
                                          var $this = $(this);
                                          var getvalues = $('#evtid').val();
                                          alert(getvalues);
                                      }
                                 </script><i	id="display">
                              </li>
                              <i style="font-size:13px; font-style: normal;"> Valuation <img src="/images/uteflag.png" alt="british flag"> 10,000 New Pre-Registrations a Month <img src="/images/brit.png" alt="british flag"> </i>
                              <li></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="header">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-4"> <a href="index.php" class="logo"><img src="images/logo.jpg" width="361" height="41"/></a> </div>
                        <div class="col-xs-8">
                           <ul class="menu pull-right">
                              <?php if(isset($_SESSION['email']) && $_SESSION['email']!='') {?>
                              <!--<li> <a href="home.php">Home</a></li>
                                 <li> <a href="register.php">Shares</a></li> 
                                          <li> <a href="home.php">Graph</a></li>-->
                              <li> <a href="myprofile.php">My Profile</a></li>
                              <li> <a href="logout.php">
                                 <button class="btn btn-primary btn-lg btn-green">Log Out</button>
                                 </a> 
                              </li>
                              <?php } else {?>
                              <li>
                                 <button class="btn btn-primary btn-lg btn-green"  data-toggle="modal" data-target="#myModal">Get Started</button>
                              </li>
                              <li>
                                 <button class="btn btn-primary btn-lg btn-grey loginBtn" data-toggle="modal" data-target="#myModal1">Login</button>
                                 <div class="loginSlide">
                                    <span class="closeBtn">X</span>
                                    <div class="modal-body">
                                       <form class="lwa-form" id="loginform" action="process.php" method="post">
                                          <span class="lwa-status"></span>
                                          <p>
                                             <input type="text" name="email" id="email" class="input emailcheck" placeholder="Email" />
                                          </p>
                                          <p>
                                             <input type="password" name="password" id="password" class="input" placeholder="Password"/>
                                             <input type="hidden" id="actions" name="actions" value="login" />
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
                              <?php } ?>
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
                                          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                          <!-- Google Ads -->
                                          <ins class="adsbygoogle"
                                             style="display:inline-block;width:728px;height:90px"
                                             data-ad-client="ca-pub-2636808911428383"
                                             data-ad-slot="8326994240"></ins>
                                          <script>
                                             (adsbygoogle = window.adsbygoogle || []).push({});
                                          </script>
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
                                       </div>
                                       <div class="popBottom">
                                          <h3>Register with</h3>
                                          <div class="form-wrapper">
                                             <div id="error-message" style="color:red;"></div>
                                             <!------------------------------ REGISTRATION FORM START ----------------------------->
                                          
                                             <style>
                                                .error_user{
                                                font-size: xx-small;
                                                font-weight: bolder;
                                                color: tomato;
                                                }
                                                .error_email{
                                                font-size: xx-small;
                                                font-weight: bolder;
                                                color: tomato;
                                                }
                                                .error_password{
                                                font-size: xx-small;
                                                font-weight: bolder;
                                                color: tomato;
                                                }
                                                .error_email_validation{
                                                font-size: xx-small;
                                                font-weight: bolder;
                                                color: tomato;
                                                }
                                                .emailcheck{
                                                border: 1px solid #c9c9c9;
                                                border-radius: 4px;
                                                float: left;
                                                font-size: 15px;
                                                height: 32px;
                                                padding: 6px 0;
                                                text-indent: 10px;
                                                width: 60%;
                                                }
                                             </style>
                                             <form  method="post" action="process.php" name="st-register-form" id="registerform2"  >
                                                <p>
                                                   <label for="st-email">Username</label>
                                                   <input type="text" autocomplete="off" name="username" id="st-username" class="username" required/>
                                                </p>
                                                <p class="error_user" id="error_user" style="display:none"> Username Not Available </p>
                                                <p>
                                                   <label for="st-email">Email</label>
                                                   <input type="email" autocomplete="off" name="email" id="st-email" class="emailcheck" required/>
                                                </p>
                                                <p  class="error_email" id="error_email" style="display:none"> Email already exists.</p>
                                                <p  class="error_email_validation" id="error_email_validation" style="display:none"> Invalid Email.</p>
                                                <p>
                                                   <label for="st-psw">Password</label>
                                                   <input type="password" name="password" id="st-psw" required/>
                                                   <input type="hidden" id="actions" name="actions" value="registration" />
                                                </p>
                                                <p class="error_password" id="error_password" style="display:none"> Passwords Not Matched </p>
                                                <p>
                                                   <label for="st-psw2">Confirm Password</label>
                                                   <input type="password" name="password2" id="st-psw2" required/>
                                                </p>
                                                <p style="text-align:center; width:100%; display:inline-block">
                                                   <input type="button" onclick="myFunction()" value="Register">
                                                </p>
                                             </form>
                                            
                                             <!------------------------------ REGISTRATION FORM START ----------------------------->
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
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div class="forgotPopUp">
               <h3>Enter email to retrieve new password</h3>
               <div class="login" id="theme-my-login1">
                  <p class="message">Please enter your username or email address. You will receive a link to create a new password via email.</p>
                  <form name="lostpasswordform" id="lostpasswordform1" action="process.php" method="post">
                     <p>
                        <label for="user_login1">Username or E-mail:</label>
                        <input type="text" name="user_login" id="user_login" class="input emailcheck" value="" size="20" />
                     </p>
                     <p class="submit">
                        <input type="submit"  name="wp-submit" id="wp-submit" value="Get New Password"  />
                        <input type="hidden" name="action" value="lostpassword" />
                     </p>
                  </form>
                  <ul>
                     <li id="register_here"><a data-target="#myModal" data-toggle="modal" href="#">Register</a></li>
                  </ul>
               </div>
            </div>
            
            <style>
               .banner1 {
               float: left;
               width: 100%;
               background: url("images/banner3.jpg") no-repeat 50% 0;
               height: 700px;
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
               background: url("images/banner2.jpg") no-repeat 100% 0;
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
               background: url("images/banner21.jpg") no-repeat 50% 0;
               min-height: 800px;
               background-attachment: fixed;
               }
            </style>
            <div class="col-md-3" style="top:15%;left:35%;position: fixed; display:none">
               <form id="" name="">
                  <input type="text" id="fromprice" name="fromprice" value="1" />
                  <select	id="currencyfrom" name="currencyfrom">
                     <option value="BTC">BTC</option>
                     <option value="GBP">GBP</option>
                     <option value="USD">USD</option>
                     <option value="EUR">EUR</option>
                     <option value="JPY">JPY</option>
                     <option value="CAD">CAD</option>
                  </select>
                  ==
                  <input type="text" id="toprice" name="toprice" />
                  <select	id="currencyto" name="currencyto">
                     <option value="GBP">GBP</option>
                     <option value="BTC">BTC</option>
                     <option value="USD">USD</option>
                     <option value="EUR">EUR</option>
                     <option value="JPY">JPY</option>
                     <option value="CAD">CAD</option>
                  </select>
               </form>
             
            </div>