
<script>
   function all_currency_change_onevent(){
   
   
         value = document.getElementById("crrent-currency-value-fix").value;
         type  = document.getElementById("balcurrency").value;
   
       
   
         $.post("helperajx.php",
         {
           value:value,
           type:type,
           change_currency_value:"change_currency_value"
         },
         function(data,status){
     
              document.getElementById("crrent-currency-value").value = data.value;
         });
        
   
          document.getElementById("crrent-currency").innerHTML =  document.getElementById("balcurrency").value+":";
  
   }
   
</script>


<?php  session_start();
 global $wpsh;
 if(isset($_SESSION['email']) && $_SESSION['email']!='' && isset($_SESSION['password']) && $_SESSION['password']!='')
{
 include("header.php");?> 

<style>
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.current{ background:#3DCAFF; color:#000 !important;}
.fa-fw {width: 2em;}
.grad{
	background: #fcfff4 !important; /* Old browsers */
background: -moz-linear-gradient(top, #fcfff4 0%, #e0e0e0 40%, #bcbcbc 100%) !important; /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcfff4), color-stop(40%,#e0e0e0), color-stop(100%,#bcbcbc)) !important; /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #fcfff4 0%,#e0e0e0 40%,#bcbcbc 100%) !important; /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #fcfff4 0%,#e0e0e0 40%,#bcbcbc 100%) !important; /* Opera 11.10+ */
background: -ms-linear-gradient(top, #fcfff4 0%,#e0e0e0 40%,#bcbcbc 100%) !important; /* IE10+ */
background: linear-gradient(to bottom, #fcfff4 0%,#e0e0e0 40%,#bcbcbc 100%) !important; /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#bcbcbc',GradientType=0) !important; /* IE6-9 */
}
table tr td{
	padding:20px;
}
</style>
<?php include("sidebar.php");?> 
 <div class="right-cont"  >
            <div class="left-content2" style=" vertical-align:middle; height: 605px;">

              <div align="center"><img width=100% src="/img/yeh.png" /></div><table width="100%" align="center" border="0">
  <tr>
    <td align="center" valign="middle" nowrap="NOWRAP"><div align="center"><strong>Intro/ Walkthrough </strong></div></td>
    <td align="center" valign="middle" nowrap="NOWRAP"><div align="center"><strong>2015 - 17 Rudimentary Info </strong></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle" nowrap="nowrap"><div align="center"><a href="sound/index.htm" target="_popup" ><img src="img/play.jpg" width="191" height="171" border="0" /></a></div></td>
    <td align="center" valign="middle" nowrap="nowrap"><p align="center"><a href="http://issuu.com/hywelapbuckler/docs/op_ark_che-schindler_-_v1.1" target="_popup">Operation Schindlers Ark (PDF)</a></p>
      <p align="center"><a href="https://www.dropbox.com/s/i3r2n7ag263j27p/12345678910.docx">Business Plan (Doc) </a></p>
      <p align="center"><a href="https://www.dropbox.com/s/i3r2n7ag263j27p/12345678910.docx">  Full Walkthrough (Video)</a></p>
      <p align="center"> <a href="https://www.dropbox.com/s/i3r2n7ag263j27p/12345678910.docx">Project Updates (blog) </a></p></td>
  </tr>
</table>
              
            </div>
	 <div class="clear"></div>
</div>
            <div class="clear"></div>
            <?php include("footer.php");?>
    
<?php }else{
	echo '<script type="text/javascript">window.location ="index.php"</script>';
}?>

