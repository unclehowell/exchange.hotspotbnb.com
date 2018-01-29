<?php  session_start();
 global $wpsh;
 if(isset($_SESSION['email']) && $_SESSION['email']!='' && isset($_SESSION['password']) && $_SESSION['password']!='')
{
 include("header.php");?> 

<style>
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.current{ background:#dcdcdc; color:#000 !important;}
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
 <div class=""> <!--right-cont_social-->
            <div class="right-cont" style="margin-left: 30px;"><img width="" alt="img" src="/images/infoexch.png" style="opacity: 1; transition: opacity 2s ease 0s; border-radius: 6px; padding: 10px;" onload="this.style.opacity='1';"></div>
        
            <div class="clear"></div>
</div>
	
   <?php include("footer.php");?>
    
<?php }else{
	echo '<script type="text/javascript">window.location ="index.php"</script>';
}?>

