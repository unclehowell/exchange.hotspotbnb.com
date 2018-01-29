  
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
width:20%;
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


<?php 
   global $wpsh;
    session_start();
   
   if(isset($_SESSION['email']) && $_SESSION['email']!='' && isset($_SESSION['password']) && $_SESSION['password']!='')
   { 
   
   
   
   include("header.php");
   
   
   
   ?>

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
<?php include("sidebar.php");?> 
<!--<div class="col-md-9 pull-right" style="padding:0;">-->
<div class="right-cont">
   <div class="relativeposition">
      <?php if($_REQUEST[r] == 'e'){ ?>
      <div class="Opportunity" style="background-color: orange;" >Insufficient Funds</div>
      <?php }else if($_REQUEST[r] == 's'){ ?>
      <div class="Opportunity" style="background-color: yellowgreen;" >Successful Transaction </div>
      <?php }else if($_REQUEST[r] == 'sells'){ ?>
      <div class="Opportunity" style="background-color: yellowgreen;" >
         Posted Successfully.  
         <div style="font-size: 10px;color: whitesmoke;"> ( Money will add after selling process completed ) </div>
      </div>
      <?php }else if($_REQUEST[r] == 'selle'){ ?>
      <div class="Opportunity" style="background-color: orange;" >Insufficient Shares</div>
      <?php } else if($_REQUEST[r] == 'no_enough_share_to_purchase'){ ?>
      <div class="Opportunity" style="background-color: orange;" >Not enough shares to purchase</div>
      <?php } ?>
      <?php 
         $get_controls = $wpsh->get_controls();
         
         
         $cover_up_the_daybook =  $get_controls[cover_up_the_daybook]; 
         
         
            if($cover_up_the_daybook == 0) {    //= id=1111=  if start   
         
         ?>  
      <!----------------------------------------------------------->
      <!----------------------------------------------------------->
      <div class="Opportunity">Sellers List</div>
      <div class="left-content2">
         <?php
            $getuserinfo = $wpsh->getuserinfo();
            
            while( $rowgetuserinfo = mysql_fetch_array($getuserinfo) ){
                 
                       $rowgetuserinfoid = $rowgetuserinfo['id'];
            }
            
            ?>
         <table id="example" class="display nowrap dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
            <thead>
               <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 248px !important; ">
                     Bitcoin Address
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">
                     Quantity of Shares
                  </th>
                  <th class="dt-body-right sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 42px;">
                     Price Per Share (in GBP)
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 92px;">
                     Total Shares Price (in GBP)
                  </th>
                  <th class="dt-body-right sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">
                     Buy Shares
                  </th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $query = "SELECT * FROM `saleshares` where `sharequantity`> '0'";
                  $sql   = mysql_query($query);
                  $num   = mysql_num_rows($sql);
                  
                  if($num>0){
                  $i=1;
                  while($row=mysql_fetch_array($sql)){
                  ?>
               <tr role="row"  <?php if($i%2 == 0){  ?> class="odd" <?php } else { ?> class="even" <?php } ?> >
                  <td>

                    <?php  $row['userid'];

                     $userinfo  =  $wpsh->selectquery("*","users","WHERE id='".$row['userid']."'");
                     
                     echo $btcaddress = $userinfo['bitcoinaddress'];
                     
                     ?>
                  </td>
                  <td style="">
                     <?php 
                        echo $sharequantity = $row['sharequantity'];
                        ?>
                  </td>
                  <td>
                     <?php 	
                        echo $salepershareprice = $row['salepershareprice'];
                        
                        ?>
                  </td>
                  <td>
                     <?php 	
                        $equity = $salepershareprice * $sharequantity;
                        
                        echo     number_format((float)$equity, 2, '.', '');
                        
                        ?>
                  </td>
                  <td>
                     <?php if($rowgetuserinfoid != $row['userid']){ ?>
                     <form action="exchange.php" method="get">
                        <input type="hidden" id="buysaleid" name="buysaleid" value="<?php echo $row['saleid'];?>" />
                        <input type="submit" id="buynowfrompost" name="buynowfrompost" value="Buy Now" />
                     </form>
                     <?php }else{ ?>
                     <input type="button" id="" name="" value="Your Post" />
                     <?php } ?>
                  </td>
               </tr>
               <?php $i++; }} ?>
            </tbody>
         </table>
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
         <div class="clear"></div>
      </div>
   </div>
</div>
<!----------------------------------------------------------->
<!----------------------------------------------------------->
<?php
   }   else{                           //= id=1111=  if else start
   
       
   ?>
<!----------------------------------------------------------->
<!---- Dummy DATA ----------------------------->
<!----------------------------------------------------------->
<style>
.abslllllll {
   background: none repeat scroll 0 0 rgba(7, 31, 71, 0.7);
   display: inline-block;
   height: 100%;
   left: 0;
   position: absolute;
   top: 0;
   width: 100%;
   z-index: 99;
   padding-top: 25%;
   color: rgb(168, 255, 83);
   font-size: 30px;
   font-family: serif;

}
.relalllll
{
  position: relative;
}
</style>

<div class="Opportunity">Sellers List</div>
<div class="relalllll">

<div style="" class="pos abslllllll" >
   <div> Investment Round Underway  
      <?php
                     $get_series = $wpsh->get_series(); 
                     
                     $get_sold_share = $wpsh->get_sold_share(); 
                     
                     $sold_shares = $get_sold_share[sold_shares]; 
                     
                     $defaults_share =  $sold_share + $get_series[shares];

                     $math = (( $sold_shares / $defaults_share )) * 100;
         
      ?>
   </div>
   <div>
      <div id="progressbarss">
         <div> 
         </div>
      </div>
      <div style="font-size: 22px;float:left; width:100%; display:inline-block; text-align:center">
         <?php echo number_format((float)$math , 5, '.', '');  ?>  % 
         <div>
            <style>
               #progressbarss {
               background-color: rgb(255, 255, 255);
               border-radius: 13px;
               padding: 5px;
               width: 96%;
               float: left;
               margin: 10px 0px;
               margin-left: 2%;
               }
               #progressbarss > div {
               background-color: blue;
               width: <?php echo number_format((float)$math , 5, '.', '');  ?>%; /* Adjust with JavaScript */
               height: 20px;
               border-radius: 10px;
               }
            </style>
         </div>
      </div>
   </div>
</div>
<div class="left-content2">
   <?php
      $getuserinfo = $wpsh->getuserinfo();
      
      while( $rowgetuserinfo = mysql_fetch_array($getuserinfo) ){
           
                 $rowgetuserinfoid = $rowgetuserinfo['id'];
      }
      
      ?>
   <table id="example" class="display nowrap dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
      <thead>
         <tr role="row">
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 215px;">
               Bitcoin Address
            </th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">
               Quantity of Shares
            </th>
            <th class="dt-body-right sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 42px;">
               Price Per Share (in GBP)
            </th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 92px;">
               Total Shares Price (in GBP)
            </th>
            <th class="dt-body-right sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">
               Buy Shares
            </th>
         </tr>
      </thead>
      <tbody>
         <?php
            $query = "SELECT * FROM `saleshares` where `sharequantity`> '0'";
            $sql   = mysql_query($query);
            $num   = mysql_num_rows($sql);
            
            if($num>0){
            $i=1;
            while($row=mysql_fetch_array($sql)){
            ?>
         <tr role="row"  <?php if($i%2 == 0){  ?> class="odd" <?php } else { ?> class="even" <?php } ?> >
            <td><?php  $row['userid'];
               $userinfo  =  $wpsh->selectquery("*","users","WHERE id='".$row['userid']."'");
               
               echo $btcaddress = $userinfo['bitcoinaddress'];
               
               ?>
            </td>
            <td style="">
               <?php 
                  echo $sharequantity = $row['sharequantity'];
                  ?>
            </td>
            <td>
               <?php 	
                  echo $salepershareprice = $row['salepershareprice'];
                  
                  ?>
            </td>
            <td>
               <?php 	
                  $equity = $salepershareprice * $sharequantity;
                  
                  echo     number_format((float)$equity, 2, '.', '');
                  
                  ?>
            </td>
            <td>
               <?php if($rowgetuserinfoid != $row['userid']){ ?>
               <form action="" method="">
                  <input type="submit" id="" name="" value="Buy Now" />
               </form>
               <?php }else{ ?>
               <input type="button" id="" name="" value="Your Post" />
               <?php } ?>
            </td>
         </tr>
         <?php $i++; }} ?>
      </tbody>
   </table>
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
   <div class="clear"></div>
</div>
</div>           
</div>

<!----------------------------------------------------------->
<!---- Dummy DATA ----------------------------->
<!----------------------------------------------------------->
<?php
   }                                   //= id=1111=  end   
   
   ?>
</div>
</div>
<?php include("footer.php");?>
<?php }else{
   echo '<script type="text/javascript">window.location ="index.php"</script>';
   }?>
