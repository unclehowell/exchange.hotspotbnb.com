<?php include("header.php"); session_start(); ?>
            <div class="inner">
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
                          <input target="frame" id="url" value="http://duckduckgo.com">
                          <div> 
						  
                            <iframe src="html/"width="99%" name="frame" scrolling="yes" id="frame" wmode="transparent" overflow="no"></iframe>
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


<?php include("footer.php");?>
