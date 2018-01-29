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



  <div class="right-cont">
    <div class="left-content2">










<table id="example" class="display nowrap dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
   <thead>
      <tr role="row">
         <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="activate to sort column descending" style="width: 137px;">Share Holders</th>
         <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="activate to sort column ascending" style="width: 215px;">Shares </th>
         <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="activate to sort column ascending" style="width: 215px;">Holding</th>
         <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="activate to sort column ascending" style="width: 102px;"> Value(BTC)</th>
         <th class="dt-body-right sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="activate to sort column ascending" style="width: 42px;">  Value(GBP)</th>
         
      </tr>
   </thead>
  
   <tbody>
     

              <?php 

               $getuserinfo = $wpsh->getuserinfowithkey();

               $getuserinfoid = $getuserinfo[id]; 

               $totalshares=1000000000;
               $query="SELECT * FROM users where shares !='NULL' or shares > 0;";
               $re=mysql_query($query);
               $GBP=$wpsh->currentrate("GBP"); 
               $GBPlast=$GBP['last'];
               $i=0; $totalbtcval=0;$totaleurval=0;$totalholding=0;$holding=0;$totalshareofcomp=0;
               while($row=mysql_fetch_array($re)){
               $i++; 

               ?>
            <tr>
               <td> <?php if($getuserinfoid == $row['id']){ $styl = "background-color: rgb(244, 255, 174);font-weight: bolder;"; }else{  $styl = ""; } ?>
                  <p style="<?php echo $styl; ?>"><?php echo $row['bitcoinaddress'];?></p>
               </td>

               <td> 
                     <?php 
 
                     $holding=(($row['shares']/$totalshares)*100); echo $holper=round($holding,2);

                     $totalholding+=$holding;

                     ?>%</td>
               <td>
                     <?php 

                     echo number_format($row['shares']); 

                     $totalshareofcomp+=$row['shares'];
 
                     ?>
               </td>
               <td>
                  <?php

                     $btcval= (($row['shares'])/$totalshares)*36512.343 ;

                     echo $btcvalround=round($btcval,2);
 
                     $totalbtcval+=$btcvalround;
                  ?>
               </td>
               <td><?php  

                     $eurval=$btcvalround*$GBPlast;

                     echo $eurvalround=round($eurval,2);

                     $totaleurval+=$eurvalround;
                   ?>
                </td>
            </tr>

            <?php } ?>
   
     
   </tbody>

    <tfoot>
      <tr>

         <th rowspan="1" colspan="1">Totals </th>
         <th rowspan="1" colspan="1"><?php echo $totalholding;?></th>
         <th rowspan="1" colspan="1"><?php echo number_format($totalshareofcomp);?></th>
         <th rowspan="1" colspan="1"><?php $totalbtcvala=round($totalbtcval,3);echo number_format($totalbtcvala);?></th>
         <th rowspan="1" colspan="1"><?php $totaleurvala=round($totaleurval,3);echo number_format($totaleurvala);?></th>

      </tr>
   </tfoot>
</table>









      <div class="clear"></div>
   </div>





   <div class="clear"></div>
</div>
<?php include("footer.php");?>
<?php }else{
   echo '<script type="text/javascript">window.location ="index.php"</script>';
   }?>













<!--------------


    <table id="example" class="display" cellspacing="0" width="1px" bgcolor="#000000" align="center">
         <thead>
         
               <tr bgcolor="#000000" align="center">
               <th align="center" style="color:#fff" rowspan="2">Share Holders</th>
               <th style="color:#fff" align="center">Holding</th>
               <th style="color:#fff" width="1px" align="center">Shares</th>
               <th style="color:#fff" align="center">Value (BTC)</th>
               <th style="color:#fff" align="center">Value (GBP)</th>
               </tr>

         </thead>
         <tbody>

            <?php 
               $totalshares=1000000000;
               $query="SELECT * FROM users where shares !='NULL' or shares > 0;";
               $re=mysql_query($query);
               $GBP=$wpsh->currentrate("GBP"); 
               $GBPlast=$GBP['last'];
               $i=0; $totalbtcval=0;$totaleurval=0;$totalholding=0;$holding=0;$totalshareofcomp=0;
               while($row=mysql_fetch_array($re)){
               $i++; ?>
            <tr>
               <td>
                  <p><?php echo $row['bitcoinaddress'];?></p>
               </td>

               <td><?php $holding=(($row['shares']/$totalshares)*100); echo $holper=round($holding,2);
                  $totalholding+=$holding;?>%</td>
               <td>
                  <?php echo number_format($row['shares']); 
                     $totalshareofcomp+=$row['shares']; ?>
               </td>
               <td>
                  <?php $btcval= (($row['shares'])/$totalshares)*36512.343 ;
                     echo $btcvalround=round($btcval,3); 
                     $totalbtcval+=$btcvalround;?>
               </td>
               <td><?php  
                  $eurval=$btcvalround*$GBPlast;
                  echo $eurvalround=round($eurval,2);
                  $totaleurval+=$eurvalround; ?></td>
            </tr>
            <?php
               }
               ?>
            </tbody>

         <tfoot>
            <tr bgcolor="#000000" align="center">
             
               <td style="color:#fff">Totals </td>
               <td style="color:#fff"><?php echo $totalholding;?>%</td>
               <td style="color:#fff" width="1px"><?php echo number_format($totalshareofcomp);?></td>
               <td style="color:#fff"><?php $totalbtcvala=round($totalbtcval,3);echo number_format($totalbtcvala);?></td>
               <td style="color:#fff"><?php $totaleurvala=round($totaleurval,3);echo number_format($totaleurvala);?></td>
            </tr>
         </tfoot>

      </table>

-->


