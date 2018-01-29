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
<div class=""  style="width: 100%;">
<div class="row" style="margin:150px  0 0 0; ">
<?php include("sidebar.php");?> 
  <div class="col-md-8" style=" border-radius: 10px; box-shadow: 0 0 6px 1px rgb(80, 80, 82); margin: 22px 0 0; padding: 0; width: 74%;">
  <?php $curPageURL=$wpsh->curPageURL(); if ($curPageURL!="home.php"){?>
  
  <div class="col-md-12">
  <div class="col-md-4">
    <p class="text-center"><strong>Number of share</strong></p>
  <input name="x" type="text" value="<?php echo number_format($wpsh->totalsharescompany());?>" class="form-control" style="height:34px;" readonly> 
  </div>
  <div class="col-md-4">
  <p class="text-center"><strong>Value of share</strong></p>
<div class="input-group">
                <?php global $wpsh;
	$price=$wpsh->totalsharescompany();
	$currencyin=$data['GBP'];
	$currentshareprice=$wpsh->currentshareprice();
	$ticker=$wpsh->currentratebtc("GBP",$currentshareprice); 
	$total = $price*$ticker;
	$totalsharepricebtc=number_format((float)$total, 0, '.', '');?>   
                <input type="hidden" id="search_param" value="all" name="search_param">         
                <input name="x" type="text" id="tshareprice" value="<?php echo "฿ ".$totalsharepricebtc; ?>" class="form-control" placeholder="Search term..." style="height:34px;" readonly>
                <div class="input-group-btn search-panel">	
                    <input type="hidden" id="priceinbtcallshare" value="<?php echo $totalsharepricebtc; ?>" />
                    <select id="allsharecurrency" class="grad" style="padding:7px;width:80px;border:none;">
                      <?php echo $wpsh->getcurrencies(); ?>
                    </select>
          </div>
        </div>
            </div>
        <div class="col-md-4">
        <p class="text-center"><strong>Equity Owned</strong></p>
        <input name="x" type="text" value="<?php echo $wpsh->getequity("1000000000");?> %" class="form-control" style="height:34px;" readonly>
        </div>    
      </div>
	  
	  <?php  }?>
      <iframe src="charts/examples/dynamic-update/index.php" style="border:none;width:800px;height:500px;" ></iframe>
	 <!-- <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          ['12-12-2014',  3],
          ['11-12-2014',  3.4],
          ['10-12-2014',  3],
          ['09-12-2014',  4.4]
        ]);

        var options = {
          title: 'Company Performance'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	<div id="chart_div" style="width: 900px; height: 500px;"></div>
            -->
   <!--<div class="bigchart">
  <div id="bigchartHolder"> <span></span>
    <div id="highcharts-7" class="highcharts-container">
      
	 <iframe width="100%" scrolling="no" height="420" overflow="no" src="demo/stock.htm"></iframe>
    </div>
  </div>
  <a href="#" class="closeGraph">Close Graph</a> </div>-->
 </div> 
</div>
   <?php include("footer.php");?>
    
<?php }else{
	echo '<script type="text/javascript">window.location ="index.php"</script>';
}?>

