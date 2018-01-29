<div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>

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
            <div class="menu-what_we_do-container">
              <ul id="menu-what_we_do" class=" ">
                <li id="menu-item-67" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-67"><a href="#">Free Internet</a></li>
                <li id="menu-item-68" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-68"><a href="#">SVG Advertising</a></li>
              </ul>
            </div>
          </div>
          <div class="PublicFooter-navigation-group">
            <h5>Partner</h5>
            <div class="menu-partner-container">
              <ul id="menu-partner" class=" ">
                <li id="menu-item-69" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-69"><a href="#">Internet Service Providers</a></li>
                <li id="menu-item-70" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-70"><a href="#">Advertisers</a></li>
                <li id="menu-item-71" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-71"><a href="#">Investors</a></li>
                <li id="menu-item-73" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-73"><a href="#">Developers</a></li>
                <li id="menu-item-74" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-74"><a href="#">Commercial</a></li>
              </ul>
            </div>
          </div>
          <div class="PublicFooter-navigation-group">
            <h5>Support</h5>
            <div class="menu-support-container">
              <ul id="menu-support" class=" ">
                <li id="menu-item-75" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-75"><a href="#">Submit Ticket</a></li>
                <li id="menu-item-76" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76"><a href="#">Downloads</a></li>
              </ul>
            </div>
          </div>
          <div class="PublicFooter-navigation-group">
            <h5>About</h5>
            <div class="menu-about-container">
              <ul id="menu-about" class=" ">
                <li id="menu-item-77" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-77"><a href="#">Our team</a></li>
                <li id="menu-item-78" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-78"><a href="#">Stakeholders</a></li>
                <li id="menu-item-79" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-79"><a href="#">Careers</a></li>
                <li id="menu-item-80" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-80"><a href="#">Terms of service</a></li>
                <li id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81"><a href="#">Privacy</a></li>
                 <li id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81"><a href="svg_advertising.php">Svg Advertising</a></li>
              </ul>
            </div>
          </div>
          <div class="PublicFooter-navigation-group">
            <ul class="socialIcons">
              <li ><a href="#" class="google" title=""></a></li>
              <li ><a href="http://twitter.com/tweetwithwave" class="twitter" title=""></a></li>
              <li ><a href="http://facebook.com/wave.free.internet" class="facebook" title=""></a></li>
              <li><a href="#" class="in" title=""></a></li>
            </ul>
            <div id="PublicFooter-copyright" style="margin-bottom: 10px;"> <span>http://surfonwave.com/</span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<? include("inc/javascript/script.php"); ?>

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

            $('#frame').attr('src',urlo);

            $('#url').val(urlo);

        }else{

            $('#frame').attr('src','http://' + urlo);

            $('#url').val('http://' + urlo);

        }
		document.getElementById('frame').contentWindow.location.reload();

        //$('#frame').location.reload();
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

/*

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

*/

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

</body></html>





<!------------------> <!------------------> <!------------------> <!------------------> <!------------------> <!------------------> <!------------------> 
<!------------------> <!------------------> <!------------------> <!------------------> <!------------------> <!------------------> <!------------------> <!------------------> <!------------------> <!------------------> <!------------------> <!------------------> <!------------------> <!------------------> 





<style>
.chartsheader{

position: fixed;
top: 0px;
z-index: 1000000000;
background-color: white;
left: 0px;
width: 100%;
border: none;
display:none;
height:800px !important;

}
.close{
margin: 0 auto;
width: 100%;
font-size: 25px;
font-family: fantasy;
color:black;
}
</style>
              
          
<div id="chartsheader" class="chartsheader">

<div style="width: 60%;margin: AUTO;margin-top: 25px;background-color: white;padding: 2%;border-radius: 10px;">
<canvas id="canvas" height="" width=""></canvas>
</div>

<input type="button" value="close" id="close" class="close" onclick="hide_graph()"/>
</div>
