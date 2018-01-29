<style>
.dataTables_scrollBody{

overflow: none !important;
height: auto !important;
width:  auto  !important;

}
</style>

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

<link rel="stylesheet" type="text/css" href="datatable/media/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="datatable/extensions/TableTools/css/dataTables.tableTools.css">
<link rel="stylesheet" type="text/css" href="datatable/resources/syntax/shCore.css">
<style>

th{
font-size: 12px;
width:20% !important;
}

tr{
font-size: 12px;
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


<?php 
   global $wpsh;
   
   session_start();
   
   if(isset($_SESSION['email']) && $_SESSION['email']!='' && isset($_SESSION['password']) && $_SESSION['password']!='')
   { 
   
   
   
   include("header.php");
   
   
   
   ?>


<?php include("sidebar.php");?> 


<!----------------------------------------------------------------------------->
<!----------------------------Buy Start---------------------------------------->
<!----------------------------------------------------------------------------->
<div class="right-cont" style="">
   <div class="relativeposition">
      <div class="Opportunity">Deals</div>
      <div class="left-content2">
        





 <table id="examplebuy" class="display nowrap dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="examplebuy_info" style="width: 100%;">
            <thead>
               <tr role="row">
                  <th style="display:none"></th>
                  <th class="sorting" tabindex="0" aria-controls="examplebuy" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 215px;">
                     Date
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="examplebuy" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">
                     Share Purchased
                  </th>
                  <th class="dt-body-right sorting" tabindex="0" aria-controls="examplebuy" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 42px;">
                     Share Sold
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="examplebuy" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 92px;">
                     Bitcoin Deposited
                  </th>
                  <th class="dt-body-right sorting" tabindex="0" aria-controls="examplebuy" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">
                     Bitcoin Withdrawn 
                  </th>
               </tr>
            </thead>
            <tbody>

               <?php
                  $get_records_buy  = $wpsh->get_records_buy();
                  
                  $get_records_sell = $wpsh->get_records_sell();
                  
                 
                  
                  
                  
                  foreach ($get_records_buy as $valuein) {
                  
                      $a[]= array( 'id' => $valuein[id] , 'userid' => $valuein[userid] , 'shares' => $valuein[shares] , 'shareprice' => $valuein[shareprice] , 'ip' => $valuein[ip] , 'created' => $valuein[sharetime] , 'type' => $valuein[type]);
                     
                  }
                  
                  foreach ($get_records_sell as $valuein) {
                  
                      $a[]=  array( 'id' => $valuein[id] , 'userid' => $valuein[userid] , 'shares' => $valuein[shares] , 'shareprice' => $valuein[shareprice] , 'ip' => $valuein[ip] , 'created' => $valuein[sharetime] , 'type' => $valuein[type]);
                     
                  }
                  
                  
                  function cmp($a,$b){
                  return strtotime($a['created'])<strtotime($b['created'])?1:-1;
                  };
                  
                  uasort($a,'cmp');
                  
                  $data = $a; 
                  
                  //print_r( $data );
                  
                  
                  
                  foreach ($data as $value_of_all_transaction) {
                  
                        ?>
               <tr role="row" >
                  <td style="display:none" ></td>
                  <td>
                     <?php  echo   $value_of_all_transaction[created] ;  ?>
                  </td>
                  <td>
                     <?php 
                        if($value_of_all_transaction[type] == 'BUY'){
                        
                        echo   $value_of_all_transaction[shares] ;  
                        
                        }
                        
                        
                        ?>
                  </td>
                  <td>
                     <?php 
                        if($value_of_all_transaction[type] == 'SELL'){
                        
                        echo   $value_of_all_transaction[shares] ;  
                        
                        }
                        
                        
                        ?>
                  </td>
                  <td>
                     <?php   ?>
                  </td>
                  <td>
                     <?php   ?>
                  </td>
               </tr>
               <?php       }  ?>
            </tbody>
         </table>























      </div>
   </div>
   <!----------------------------------------------------------------------------->
   <!----------------------------Buy End------------------------------------------>
   <!----------------------------------------------------------------------------->
   <div class="clear"></div>
</div>
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







