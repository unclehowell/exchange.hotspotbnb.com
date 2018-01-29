<?php 
   include("config.php");
   include("functions.php");
   $wpsh=new share();
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
    <meta content="width=device-width" name="viewport">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">

    <title>Wave | Internet Service Provider</title>
    <link href='style.css?ver=2013-07-18' id='wave-style-css' media='all' rel=
    'stylesheet' type='text/css'><!--[if lt IE 9]>
            <link rel='stylesheet' id='wave-ie-css'  href='css/ie.css?ver=2013-07-18' type='text/css' media='all' />
            <![endif]-->

    <script src='js/jquery/jquery.js?ver=1.10.2' type='text/javascript'></script>
    <script src=
    "http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <style type="text/css">
           .recentcomments a {
               display: inline !important;
               padding: 0 !important;
               margin: 0 !important;
               }
    </style>
    <style id="wave-header-css" type="text/css">
           .site-header {
               background: url(images/headers/circle.png) no-repeat scroll top;
               background-size: 1600px auto;
               }
    </style>
    <link href="demo/style2.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.flipcountdown.css" rel="stylesheet" type="text/css">
    <link href=
    'http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel=
    'stylesheet' type='text/css'>
    <script charset="utf-8" src="js/jquery-2.0.3.min.js" type=
    "text/javascript"></script>
    <script src="demo/jquery.url.min.js" type="text/javascript"></script>
    <script src="demo/script.js" type="text/javascript"></script>
    <script src="demo/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script src="js/jquery.flipcountdown.js" type="text/javascript"></script><?php if(isset($_SESSION['email']) && $_SESSION['email']!='' && isset($_SESSION['password']) && $_SESSION['password']!='') {?>
    <script src=
    "http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="mysite.js" type="text/javascript"></script><?php } ?>
</head>

<body>
    <div id="fb-root"></div><script>
(function(d, s, id) {
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) return;
               js = d.createElement(s); js.id = id;
               js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1427350427476593&version=v2.0";
               fjs.parentNode.insertBefore(js, fjs);
               }(document, 'script', 'facebook-jssdk'));
    </script>

    <div id="overlay"></div>

    <div class="wrapper">
        <div class="headerMain">
            <section class="headerTop">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul>
                                <li style="list-style: none; display: inline">
                                    <script src=
                                    "administrator/process/data.js"></script> <script src="Chart.js"></script> <script>
function appear_graph(){ 

                                    document.getElementById("chartsheader").style.display = "initial" ;


                                    var barChartData = {
                                    labels : value,
                                    datasets : [
                                    {
                                    fillColor: "rgba(220,220,220,0.2)",
                                        strokeColor: "rgba(220,220,220,1)",
                                        pointColor: "rgba(220,220,220,1)",
                                        pointStrokeColor: "#fff",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                    data : datavalue 
                                    }
                                    ]

                                    }

                                    var ctx = document.getElementById("canvas").getContext("2d");
                                    window.myBar = new Chart(ctx).Line(barChartData, { responsive : true });




                                    }
                                    function hide_graph(){  

                                    document.getElementById("chartsheader").style.display = "none" ;

                                    } 




                                    </script>
                                </li>

                                <li><input onclick="appear_graph()" type=
                                "button" value="Graph"></li>

                                <li style="font-size:13px;">
                                    <img alt="british flag" src=
                                    "/images/brit.png"> 2 Knighted Technology
                                    Leaders <img alt="british flag" src=
                                    "/images/uteflag.png"> 50 Soldiers and
                                    Police <img alt="british flag" src=
                                    "/images/brit.png"> £<script language=
                                    "JavaScript">
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
                                    </script> <i id="display"></i>
                                </li>

                                <li style="list-style: none"><i id="display"
                                style=
                                "font-size: 13px; font-style: normal">Valuation
                                <img alt="british flag" src=
                                "/images/uteflag.png"> 10,000 New
                                Pre-Registrations a Month <img alt=
                                "british flag" src="/images/brit.png"></i></li>

                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-4">
                            <a class="logo" href="index.php"><img height="41"
                            src="images/logo.jpg" width="361"></a>
                        </div>

                        <div class="col-xs-8">
                            <ul class="menu pull-right">
                                <?php if(isset($_SESSION['email']) && $_SESSION['email']!='') {?><!--<li> <a href="home.php">Home</a></li>
                                 <li> <a href="register.php">Shares</a></li> 
                                          <li> <a href="home.php">Graph</a></li>-->

                                <li>
                                    <a href="myprofile.php">My Profile</a>
                                </li>

                                <li>
                                    <a href="logout.php"><button class=
                                    "btn btn-primary btn-lg btn-green">Log
                                    Out</button></a>
                                </li><?php } else {?>

                                <li>
                                    <button class=
                                    "btn btn-primary btn-lg btn-green"
                                    data-target="#myModal" data-toggle="modal"
                                    onclick="popupme()">Get Started</button>
                                    <script>

                                    function popupme(){

                                    document.getElementById("modelbw").style.display = 'inherit';


                                    }

                                    function closeme(){

                                    document.getElementById("modelbw").style.display = 'none';


                                    }


                                    </script>
                                </li>

                                <li>
                                    <button class=
                                    "btn btn-primary btn-lg btn-grey loginBtn"
                                    data-target="#myModal1" data-toggle=
                                    "modal">Login</button>

                                    <div class="loginSlide">
                                        <span class="closeBtn">X</span>

                                        <div class="modal-body">
                                            <form action="process.php" class=
                                            "lwa-form" id="loginform" method=
                                            "post" name="loginform">
                                                <span class=
                                                "lwa-status"></span>

                                                <p><input class=
                                                "input emailcheck" id="email"
                                                name="email" placeholder=
                                                "Email" type="text"></p>

                                                <p><input class="input" id=
                                                "password" name="password"
                                                placeholder="Password" type=
                                                "password"> <input id="actions"
                                                name="actions" type="hidden"
                                                value="login"></p><input name=
                                                "_wp_original_http_referer"
                                                type="hidden" value="">

                                                <p class="submit"><input id=
                                                "lwa_wp-submit" name=
                                                "wp-submit" tabindex="100"
                                                type="submit" value="Log In">
                                                <input name="lwa_profile_link"
                                                type="hidden" value="">
                                                <input name="login-with-ajax"
                                                type="hidden" value=
                                                "login"></p>
                                            </form><a class="lostPass" href=
                                            "#">Forgot Password</a>
                                        </div>
                                    </div>
                                </li><?php } ?>
                            </ul><!-- Modal -->
                            <!--class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"-->

                            <div class="modelbw" id="modelbw" style=
                            "position: absolute;margin: 0;margin-left: -10%;margin-right: 10%;display: none;">
                            <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" data-dismiss=
                                            "modal" onclick="closeme()" style=
                                            "float: right;width: 25px;" type=
                                            "button">&times;</button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="popUpTop">
                                                <h3>Register
                                                with</h3><script async="" src=
                                                "//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <!-- Google Ads -->
                                                 <ins class="adsbygoogle"
                                                data-ad-client=
                                                "ca-pub-2636808911428383"
                                                data-ad-slot="8326994240"
                                                style="display:inline-block;width:728px;height:90px">
                                                </ins> <script>
(adsbygoogle = window.adsbygoogle || []).push({});
                                                </script>

                                                <ul>
                                                    <li style=
                                                    "list-style: none; display: inline">
                                                    <div>
                                                            Coming Soon
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <a href=
                                                        "#"><img height="49"
                                                        onload=
                                                        "this.style.opacity='1';"
                                                        src="images/icon-1.png"
                                                        style=
                                                        "opacity:0; -moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s; transition: opacity 2s;"
                                                        width="49"></a>
                                                    </li>

                                                    <li>
                                                        <a href=
                                                        "#"><img height="48"
                                                        onload=
                                                        "this.style.opacity='1';"
                                                        src="images/icon-2.png"
                                                        style=
                                                        "opacity:0; -moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s; transition: opacity 2s;"
                                                        width="49"></a>
                                                    </li>

                                                    <li>
                                                        <a href=
                                                        "#"><img height="48"
                                                        onload=
                                                        "this.style.opacity='1';"
                                                        src="images/icon-3.png"
                                                        style=
                                                        "opacity:0; -moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s; transition: opacity 2s;"
                                                        width="49"></a>
                                                    </li>

                                                    <li>
                                                        <a href=
                                                        "#"><img height="48"
                                                        onload=
                                                        "this.style.opacity='1';"
                                                        src="images/icon-4.png"
                                                        style=
                                                        "opacity:0; -moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s; transition: opacity 2s;"
                                                        width="49"></a>
                                                    </li>

                                                    <li>
                                                        <a href=
                                                        "#"><img height="48"
                                                        onload=
                                                        "this.style.opacity='1';"
                                                        src="images/icon-5.png"
                                                        style=
                                                        "opacity:0; -moz-transition: opacity 2s; -webkit-transition: opacity 2s; -o-transition: opacity 2s; transition: opacity 2s;"
                                                        width="49"></a>
                                                    </li>
                                                </ul>

                                                <p class="text-center">Or</p>
                                            </div>

                                            <div class="popBottom">
                                                <h3>Register with</h3>

                                                <div class="form-wrapper">
                                                    <div id="error-message"
                                                    style="color:red;"></div>
                                                    <!--============================ REGISTRATION FORM START ===========================-->
                                                    <script>
function loadXMLDoc()
                                                    {





                                                       var username = document.getElementById("st-username").value;
                                                       var email    = document.getElementById("st-email").value;



                                                    var xmlhttp;

                                                    if (window.XMLHttpRequest)
                                                    {// code for IE7+, Firefox, Chrome, Opera, Safari
                                                    xmlhttp=new XMLHttpRequest();
                                                    }
                                                    else
                                                    {// code for IE6, IE5
                                                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                                                    }



                                                    xmlhttp.onreadystatechange = function()
                                                    {

                                                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                                                    {

                                                    var obj = JSON.parse(xmlhttp.responseText);

                                                          if(obj.username == 0){

                                                           document.getElementById("error_user").style.display = "none";

                                                           valione = "true";
                                                            
                                                          }else{

                                                            document.getElementById("st-username").value = "";
                                                            document.getElementById("error_user").style.display = "initial";
                                                          

                                                          }

                                                          if(obj.email == 0){
                                                            
                                                            document.getElementById("error_email").style.display = "none";

                                                            valitwo = "true";

                                                          }else{

                                                            document.getElementById("st-email").value = "";
                                                            document.getElementById("error_email").style.display = "initial";
                                                          }
                                                           
                                                           valithree =  validateForm(); 

                                                           valifour  = validateEmail();   
                                                        

                                                          if( valione == "true"  &&  valithree == "true"  && valithree == "true" && valifour == "true"  ){

                                                              document.getElementById("registerform2").submit();   


                                                          }
                                                          

                                                    }


                                                     
                                                    }

                                                    xmlhttp.open("POST","helperajx.php",true);
                                                    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                                                    xmlhttp.send("get_username_info=get_username_info"+"&username="+username+"&email="+email);


                                                    }






                                                    function validateForm(){

                                                    var x = document.forms["st-register-form"]["password"].value;
                                                    var y = document.forms["st-register-form"]["password2"].value;

                                                    if(x==y){

                                                    document.getElementById("error_password").style.display = "none";
                                                    return "true";

                                                    }else{

                                                    document.getElementById("error_password").style.display = "initial";
                                                    return "false";

                                                    }


                                                    }


                                                    function validateEmail(){

                                                    var x = document.forms["st-register-form"]["email"].value;

                                                    var atpos = x.indexOf("@");

                                                    var dotpos = x.lastIndexOf(".");

                                                    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {

                                                        document.getElementById("error_email_validation").style.display = "initial";

                                                        return "false";

                                                    }else{
                                                        document.getElementById("error_email_validation").style.display = "none";
                                                        return "true";
                                                    }

                                                    }

                                                    </script><style>
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

                                                    <form action="process.php"
                                                    id="registerform2" method=
                                                    "post" name=
                                                    "st-register-form">
                                                        <p><label for=
                                                        "st-email">Username</label>
                                                        <input autocomplete=
                                                        "off" class="username"
                                                        id="st-username" name=
                                                        "username" type=
                                                        "text"></p>

                                                        <p class="error_user"
                                                        id="error_user" style=
                                                        "display:none">Username
                                                        Not Available</p>

                                                        <p><label for=
                                                        "st-email">Email</label>
                                                        <input autocomplete=
                                                        "off" class=
                                                        "emailcheck" id=
                                                        "st-email" name="email"
                                                        type="email"></p>

                                                        <p class="error_email"
                                                        id="error_email" style=
                                                        "display:none">Email
                                                        already exists.</p>

                                                        <p class=
                                                        "error_email_validation"
                                                        id=
                                                        "error_email_validation"
                                                        style="display:none">
                                                        Invalid Email.</p>

                                                        <p><label for=
                                                        "st-psw">Password</label>
                                                        <input id="st-psw"
                                                        name="password" type=
                                                        "password"> <input id=
                                                        "actions" name=
                                                        "actions" type="hidden"
                                                        value=
                                                        "registration"></p>

                                                        <p class=
                                                        "error_password" id=
                                                        "error_password" style=
                                                        "display:none">
                                                        Passwords Not
                                                        Matched</p>

                                                        <p><label for=
                                                        "st-psw2">Confirm
                                                        Password</label>
                                                        <input id="st-psw2"
                                                        name="password2" type=
                                                        "password"></p>

                                                        <p style=
                                                        "text-align:center; width:100%; display:inline-block">
                                                        <input onclick=
                                                        "myFunction()" type=
                                                        "button" value=
                                                        "Register"></p>
                                                    </form><script>
function myFunction() {

                                                    loadXMLDoc();

                                                    //document.getElementById("registerform2").submit();
                                                    }
                                                    </script> 
                                                    <!--============================ REGISTRATION FORM START ===========================-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-default"
                                            data-dismiss="modal" onclick=
                                            "closeme()" type=
                                            "button">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="show"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="forgotPopUp">
            <h3>Enter email to retrieve new password</h3>

            <div class="login" id="theme-my-login1">
                <p class="message">Please enter your username or email address.
                You will receive a link to create a new password via email.</p>

                <form action="process.php" id="lostpasswordform1" method="post"
                name="lostpasswordform">
                    <p><label for="user_login1">Username or E-mail:</label>
                    <input class="input emailcheck" id="user_login" name=
                    "user_login" size="20" type="text" value=""></p>

                    <p class="submit"><input id="wp-submit" name="wp-submit"
                    type="submit" value="Get New Password"> <input name=
                    "action" type="hidden" value="lostpassword"></p>
                </form>

                <ul>
                    <li id="register_here">
                        <a data-target="#myModal" data-toggle="modal" href=
                        "#">Register</a>
                    </li>
                </ul>
            </div>
        </div><script>
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
               transition: opacity 2s;" src='images/load.gif'><\/div>");
               },
               success:function(data){
                ajaxresult=data;
                //$("#error-message").html(data);
               }
               });
               
                return ajaxresult;
               }
               jQuery.noConflict();
               
               (function( $ ) {
               $("#registerme").click(function(){
               var actions="registration";
               var pass1=$("#st-psw").val();
               var pass2=$("#st-psw2").val();
               var email=$("#st-email").val();
               if(email=='' || pass1=='' || pass2==''){
                $("#error-message").html("Please Enter All Fields");
               }else{
                if(pass1==pass2){
                    /*var dataString= "email="+email+"&password="+pass1;
                    result=ajax(actions,dataString);
                    if(result==1){
                        window.location="<?php echo SITEURL."overview.php";?>";
                    }*/
                }
                else{
                    $("#error-message").html("Password Not Match");
                }
               }
               });
               $("#lwa_wp-submit").click(function(){
               var actions="login";
               var email=$("#email").val();
               var password=$("#password").val();
               if (email == ''){
                             $("#error-message").html("Enter email id in the field");
                             //more processing here
                             return false;
                   }else if ( password== ''){
                            $("#error-message").html("Enter Password in the field");
                             //more processing here
                             return false;
                   }
                /*var dataString="id=33&ddd=dfgdg&email="+email+"&password="+password;
                result=ajax(actions,dataString);
                if(result==1){
                    window.location="<?php echo SITEURL."overview.php";?>";
                }else{
                    $("#error-message").html(result);
                }
                */
               });
               /*$(".emailcheck").on("blur",function(){
               var email = $(".emailcheck").val();
               var actions="emailcheck";
               if (email!= ''){
                      var dataString="email="+email;
                ajax(actions,dataString);
                   }else {
                             alert("Enter Email in the field");
                   }
                
               });*/
               })( jQuery );
        </script><style>
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

        <div class="col-md-3" style=
        "top:15%;left:35%;position: fixed; display:none">
            <form id="" name="">
                <input id="fromprice" name="fromprice" type="text" value="1">
                <select id="currencyfrom" name="currencyfrom">
                    <option value="BTC">
                        BTC
                    </option>

                    <option value="GBP">
                        GBP
                    </option>

                    <option value="USD">
                        USD
                    </option>

                    <option value="EUR">
                        EUR
                    </option>

                    <option value="JPY">
                        JPY
                    </option>

                    <option value="CAD">
                        CAD
                    </option>
                </select> == <input id="toprice" name="toprice" type="text">
                <select id="currencyto" name="currencyto">
                    <option value="GBP">
                        GBP
                    </option>

                    <option value="BTC">
                        BTC
                    </option>

                    <option value="USD">
                        USD
                    </option>

                    <option value="EUR">
                        EUR
                    </option>

                    <option value="JPY">
                        JPY
                    </option>

                    <option value="CAD">
                        CAD
                    </option>
                </select>
            </form><script type="text/javascript">
      $("#currencyfrom, #currencyto, #toprice, #fromprice").on("change",function(){
                    var actions="login";
                    var fromprice=$("#fromprice").val();
                    var currencyfrom=$("#currencyfrom").val();
                    var toprice=$("#toprice").val();
                    var currencyto=$("#currencyto").val();
                    var actions='convertprice';
                    var dataString="fromprice="+fromprice+"&currencyfrom="+currencyfrom+"&toprice="+toprice+'&currencyto='+currencyto;
                     result=ajax(actions,dataString);
                            $("#toprice").val(result)
                            //alert(result);
                  });
                  
                  
                  
            </script>
        </div>
    </div>
</body>
</html>