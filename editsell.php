<?php 

  global $wpsh;

  session_start();

if(isset($_SESSION['email']) && $_SESSION['email']!='' && isset($_SESSION['password']) && $_SESSION['password']!='')
{ 



 include("header.php");



?>

















<style> 
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.current{ background:#3DCAFF; color:#000 !important;}
.fa-fw {width: 2em;}
.panel-gray{
	background:#E9E9E9;
	color:#000;
	font-weight:bold;
	font-size:20px;
	padding:3px;
}
.border{

    border: 1px solid #b1b1b1;
	min-height:392px;

}
.panel-gray h4{
	font-size:30px;
}
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
	padding:7px 10px;
	border: 1px solid #e1e1e1;
	font-family: 'Lucida Console';
    font-size: 12px;
}

html body div.wrapper div.container div.col-md-9.pull-right table#example.display tbody tr th
{
	background:#49C8F5;
	color:#fff;
	padding:3px 0;
}

html body div.wrapper div.container div.col-md-9.pull-right table#example.display tbody tr td form input#buynow
{
	 background: none repeat scroll 0 0 #49c8f5;
    border: medium none;
    border-radius: 6px;
    box-shadow: 1px 2px 0 #999;
    color: #fff;
    padding: 3px 5px;
}
html body div.wrapper div.container div.col-md-9.pull-right table#example.display tbody tr td form input#buynow:hover
{
	 background: none repeat scroll 0 0 #30C1F2;
    box-shadow: none;
}
#example th
{
	padding:8px !important;
}
.transperent-set{
 height:50%;
 width:48%;
 position:absolute;
 top:270px;


 background: -moz-linear-gradient(top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.7)), color-stop(100%,rgba(0,0,0,0.7))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3000000', endColorstr='#b3000000',GradientType=0 ); /* IE6-9 */
 color: transparent;
   text-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
   text-align:center;
 padding-top: 6%;
 font-size: 20px !important;
}
</style>


















<style> 
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.current{ background:#3DCAFF; color:#000 !important;}
.fa-fw {width: 2em;}
.panel-gray{
	background:#E9E9E9;
	color:#000;
	font-weight:bold;
	font-size:20px;
	padding:3px;
}
.border{

    border: 1px solid #b1b1b1;
	min-height:392px;

}
.panel-gray h4{
	font-size:30px;
}
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
	padding:7px 10px;
	border: 1px solid #e1e1e1;
	font-family: 'Lucida Console';
    font-size: 12px;
}

html body div.wrapper div.container div.col-md-9.pull-right table#examplebuy.display tbody tr th
{
	background:#49C8F5;
	color:#fff;
	padding:3px 0;
}

html body div.wrapper div.container div.col-md-9.pull-right table#examplebuy.display tbody tr td form input#buynow
{
	 background: none repeat scroll 0 0 #49c8f5;
    border: medium none;
    border-radius: 6px;
    box-shadow: 1px 2px 0 #999;
    color: #fff;
    padding: 3px 5px;
}
html body div.wrapper div.container div.col-md-9.pull-right table#examplebuy.display tbody tr td form input#buynow:hover
{
	 background: none repeat scroll 0 0 #30C1F2;
    box-shadow: none;
}
#examplebuy th
{
	padding:8px !important;
}
.transperent-set{
 height:50%;
 width:48%;
 position:absolute;
 top:270px;


 background: -moz-linear-gradient(top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.7)), color-stop(100%,rgba(0,0,0,0.7))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3000000', endColorstr='#b3000000',GradientType=0 ); /* IE6-9 */
 color: transparent;
   text-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
   text-align:center;
 padding-top: 6%;
 font-size: 20px !important;
}
</style>






















<script type="text/javascript">
	
   function isNumberKey(evt)
     {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
           return false;
       
        return true;
     }
</script>

<!--
<div class="container">
<div class="row" style="margin-top:150px; margin-bottom:25px;">-->



<?php  include("sidebar.php"); ?>  














<link rel="stylesheet" type="text/css" href="datatable/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="datatable/extensions/TableTools/css/dataTables.tableTools.css">
	<link rel="stylesheet" type="text/css" href="datatable/resources/syntax/shCore.css">
	<style>
	.dataTables_scroll{
		width:100% !important;
	}
	.dataTables_scrollHead{
		width:100% !important;
	}
	.display dataTable{
		width:100% !important;
	}
	
	.dataTables_scrollBody{
		width:100% !important;
	}
	.dataTables_scrollFoot{
		width:100% !important;
	}
	.dataTables_scrollHeadInner{
		width:100% !important;
	}
	.dataTables_scrollHeadInner table tr td p {
		font-size:12px;
	}
	.dataTables_scrollHeadInner table tr td p{
		width: 163px !important;
		word-break: break-all !important; 
	}
	.dataTables_scrollBody table tr td p{
		width: 163px !important;
		word-break: break-all !important; 
	}
	.dataTables_scrollHeadInner table{
		width:100% !important;
	}
	.dataTables_scrollFootInner table{
		width:100% !important;
	}
	.dataTables_scrollFootInner{
		width:100% !important;
	}
	.dataTables_scrollFootInner table tr td p{
		width: 163px !important;
		word-break: break-all !important; 
	}
	table.dataTable thead th, table.dataTable thead td{
		padding: 3px 5px;
		font-size: 12px;
        font-weight: bold;
	}
	table.dataTable tbody th, table.dataTable tbody td {
    font-family: Lucida Console;
    font-size: 12px;
    padding: 2px 4px;
}
	 
	</style>
	
	
	<script type="text/javascript" language="javascript" src="datatable/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="datatable/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="datatable/extensions/TableTools/js/dataTables.tableTools.js"></script>
	<script type="text/javascript" language="javascript" src="datatable/resources/syntax/shCore.js"></script>
	
	<script type="text/javascript" language="javascript" class="init">

$(document).ready(function(jQuery) {

	jQuery('#example').dataTable({
		"scrollY":        "800px",
        "scrollCollapse": true,
		"paging":         true,
		"displayLength": 60,
		"dom": 'T<"clear">lfrtip',
        /*"tableTools": {
            "sSwfPath": "datatable/TableTools/swf/copy_csv_xls_pdf.swf"
        },*/
		"oTableTools": {
            "aButtons": [
                
                "print",
                {
                    "sExtends":    "collection",
                    "sButtonText": "Save",
                    "aButtons":    [ "csv", "xls", "pdf" ]
                }
            ]
        }
	
	}); 
	
});

	</script> 




















	<script type="text/javascript" language="javascript" class="init">

$(document).ready(function(jQuery) {

	jQuery('#examplebuy').dataTable({
		"scrollY":        "800px",
        "scrollCollapse": true,
		"paging":         true,
		"displayLength": 60,
		"dom": 'T<"clear">lfrtip',
        /*"tableTools": {
            "sSwfPath": "datatable/TableTools/swf/copy_csv_xls_pdf.swf"
        },*/
		"oTableTools": {
            "aButtons": [
                
                "print",
                {
                    "sExtends":    "collection",
                    "sButtonText": "Save",
                    "aButtons":    [ "csv", "xls", "pdf" ]
                }
            ]
        }
	
	}); 
	
});

	</script> 























































  <!--<div class="col-md-9 pull-right" style="padding:0;">-->
  


<!--------------------------------------------------------------------->
<!------------------------EDIT END ------------------------------------>
<!--------------------------------------------------------------------->




<?php


                                                    $id = base64_decode($_REQUEST[id]);

                                                    $sql = "select * from `saleshares` where `saleid` = '$id'";

						    $sql_ex = mysql_query($sql);

                                                     while($rows=mysql_fetch_array($sql_ex)){

                                                       $saleid            = $rows['saleid'];
                                                       $userid            = $rows['userid'];
                                                       $sharequantity     = $rows['sharequantity'];
                                                       $salepershareprice = $rows['salepershareprice'];
                                                     }


?>


<div class="box span12">
					<div class="box-header well" data-original-title="">
						Edit Share price
				
					</div>
					<div class="box-content">
                                          	
						    <form action="process.php" name="get" method="post"  class="form-horizontal"  enctype="multipart/form-data">
							<fieldset>

              
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Share Quantity:</label>
								<div class="controls">
								  <input type="text" class="input-xlarge focused" id="c_name_4" name="shareauantity" value="<?php  echo $sharequantity; ?>" disabled>
                                  <span class="help-inline" id="c_name_2_error"></span>
                                 </div>
                                </div>  


  
                                
                                 <div class="control-group">
								<label class="control-label" for="focusedInput">Price Per Share(GBP):</label>
								<div class="controls">

                                      <input type="text" class="input-xlarge focused" id="c_name_5" required="" name="pricepershare" value="<?php  echo $salepershareprice ; ?>">

                                  <span class="help-inline" id="c_name_2_error"></span>
                                 </div>
                                </div>    
                                                     
                       
							  </fieldset></div>  
							  
						
							  
							 
							  
							        <div class="form-actions">

                                                                <input type="hidden" name="action" value="updateaddsharefee">

                                                                <input type="hidden" name="id" value="<?php  echo $saleid ; ?>">

								<button type="submit" class="btn btn-primary">Save</button>

								</form>

							  </div>
							
						  
                                            
					</div>



<!--------------------------------------------------------------------->
<!------------------------EDIT END ------------------------------------>
<!--------------------------------------------------------------------->





		
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<script>

var jq = $.noConflict();
jq(document).ready(function(){
jq( "#progressbar" ).progressbar({
value:37
});
});
</script>

<!--
<div style="float: right;position: relative;right: 10%; padding-bottom:50px; height: 120px; width: 80%;z-index: 99999;">
	<div id="progressbar"></div>  
    
     
</div>
-->

<!--
    <div class="transperent-set">
		    Investment Round in progress (<?php echo $wpsh->getserieaperc(); ?>% complete)
                
    </div>-->
		 <a href="/overview.php" class="" title="Learn More"></a> 
 <!--</div> 
</div>-->

<div class="clear"></div>
  </div>
            
            
</div>           


 <style>
				.absoluteposition
					{
						       /*
                                                         background: none repeat scroll 0 0 rgba(0, 0, 0, 0.58);
							color: #fff;
							font-size: 18px;
							height: 100%;
							left: 0;
							padding-top:30px ;
							position: absolute;
							top: 0;
							width: 100%;
							text-align:center;
                                                      */
					}
					.right-cont
					{
						position:relative
					}
					/* unvisited link */
a:link {
    color: #FF0000;
}

/* visited link */
a:visited {
    color: #00FF00;
}

/* mouse over link */
a:hover {
    color: #FF00FF;
}

/* selected link */
a:active {
    color: #0000FF;
}
				</style>
              <!--  <div class="absoluteposition">

		          <p> (Investment Round Underway)</p>

		          <p> <a href="overview.php" target="_self">Learn more</a>	                  </p>
                </div> -->
          </div>




















  <?php include("footer.php");?>
    
<?php }else{
	echo '<script type="text/javascript">window.location ="index.php"</script>';
}?>
