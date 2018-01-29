<?php

/**
 * English Number Converter - Collection of PHP functions to convert a number
 *                            into English text.
 *
 * This exact code is licensed under CC-Wiki on Stackoverflow.
 * http://creativecommons.org/licenses/by-sa/3.0/
 *
 * @link     http://stackoverflow.com/q/277569/367456
 * @question Is there an easy way to convert a number to a word in PHP?
 *
 * This file incorporates work covered by the following copyright and
 * permission notice:
 *
 *   Copyright 2007-2008 Brenton Fletcher. http://bloople.net/num2text
 *   You can use this freely and modify it however you want.
 */

function convertNumber($number)
{
    list($integer, $fraction) = explode(".", (string) $number);

    $output = "";

    if ($integer{0} == "-")
    {
        $output = "negative ";
        $integer    = ltrim($integer, "-");
    }
    else if ($integer{0} == "+")
    {
        $output = "positive ";
        $integer    = ltrim($integer, "+");
    }

    if ($integer{0} == "0")
    {
        $output .= "zero";
    }
    else
    {
        $integer = str_pad($integer, 36, "0", STR_PAD_LEFT);
        $group   = rtrim(chunk_split($integer, 3, " "), " ");
        $groups  = explode(" ", $group);

        $groups2 = array();
        foreach ($groups as $g)
        {
            $groups2[] = convertThreeDigit($g{0}, $g{1}, $g{2});
        }

        for ($z = 0; $z < count($groups2); $z++)
        {
            if ($groups2[$z] != "")
            {
                $output .= $groups2[$z] . convertGroup(11 - $z) . (
                        $z < 11
                        && !array_search('', array_slice($groups2, $z + 1, -1))
                        && $groups2[11] != ''
                        && $groups[11]{0} == '0'
                            ? " and "
                            : ", "
                    );
            }
        }

        $output = rtrim($output, ", ");
    }

    if ($fraction > 0)
    {
        $output .= " point";
        for ($i = 0; $i < strlen($fraction); $i++)
        {
            $output .= " " . convertDigit($fraction{$i});
        }
    }

    return $output;
}

function convertGroup($index)
{
    switch ($index)
    {
        case 11:
            return " decillion";
        case 10:
            return " nonillion";
        case 9:
            return " octillion";
        case 8:
            return " septillion";
        case 7:
            return " sextillion";
        case 6:
            return " quintrillion";
        case 5:
            return " quadrillion";
        case 4:
            return " trillion";
        case 3:
            return " billion";
        case 2:
            return " million";
        case 1:
            return " thousand";
        case 0:
            return "";
    }
}

function convertThreeDigit($digit1, $digit2, $digit3)
{
    $buffer = "";

    if ($digit1 == "0" && $digit2 == "0" && $digit3 == "0")
    {
        return "";
    }

    if ($digit1 != "0")
    {
        $buffer .= convertDigit($digit1) . " hundred";
        if ($digit2 != "0" || $digit3 != "0")
        {
            $buffer .= " and ";
        }
    }

    if ($digit2 != "0")
    {
        $buffer .= convertTwoDigit($digit2, $digit3);
    }
    else if ($digit3 != "0")
    {
        $buffer .= convertDigit($digit3);
    }

    return $buffer;
}

function convertTwoDigit($digit1, $digit2)
{
    if ($digit2 == "0")
    {
        switch ($digit1)
        {
            case "1":
                return "ten";
            case "2":
                return "twenty";
            case "3":
                return "thirty";
            case "4":
                return "forty";
            case "5":
                return "fifty";
            case "6":
                return "sixty";
            case "7":
                return "seventy";
            case "8":
                return "eighty";
            case "9":
                return "ninety";
        }
    } else if ($digit1 == "1")
    {
        switch ($digit2)
        {
            case "1":
                return "eleven";
            case "2":
                return "twelve";
            case "3":
                return "thirteen";
            case "4":
                return "fourteen";
            case "5":
                return "fifteen";
            case "6":
                return "sixteen";
            case "7":
                return "seventeen";
            case "8":
                return "eighteen";
            case "9":
                return "nineteen";
        }
    } else
    {
        $temp = convertDigit($digit2);
        switch ($digit1)
        {
            case "2":
                return "twenty-$temp";
            case "3":
                return "thirty-$temp";
            case "4":
                return "forty-$temp";
            case "5":
                return "fifty-$temp";
            case "6":
                return "sixty-$temp";
            case "7":
                return "seventy-$temp";
            case "8":
                return "eighty-$temp";
            case "9":
                return "ninety-$temp";
        }
    }
}

function convertDigit($digit)
{
    switch ($digit)
    {
        case "0":
            return "zero";
        case "1":
            return "one";
        case "2":
            return "two";
        case "3":
            return "three";
        case "4":
            return "four";
        case "5":
            return "five";
        case "6":
            return "six";
        case "7":
            return "seven";
        case "8":
            return "eight";
        case "9":
            return "nine";
    }
}

?>
<!DOCTYPE html>
<html>
   <head>
      <style>
         html{
            overflow: hidden;
            font-size: 1.2vw;
            font-family: monospace;
            color: rgb(148, 148, 148);
            font-weight: bolder;
         }
         .clear{
            clear: both;
         }
      </style>
   </head>
   <body>

      <!--------------------->
      <?php
          include 'functions.php';
          
          $obj = new share();

          $user = $obj->getuserinfowithkey();

          $user_id =  $user[id];

          $bitcoinaddress = $user[bitcoinaddress];

          $date           = date("d-F-Y");

          $shares         = $user[shares];

          $message = "(OF THE ONE MILLION TOTAL SHARES IN CIRCULATION)";

          $estimated = $obj->get_estimated_value();
 
          $estimated_id = $estimated[estimated_valueid];

          $evprice = ($estimated[evprice])/100000000; 
 
          $evprice = $obj->currency_converter_recursive("GBP",$evprice) ;

          $evprice = number_format((float)$evprice , 6, '.', '');

          $insert_certificate_id = $obj->insert_certificate_id($user_id,$estimated_id);
 
     

      ?>
      <!--------------------->
      <!-- container start -->
      <div class="container" style="/*overflow: hidden;*/">
      <!-- main start -->
      <div>
         <!-- relative start -->
         <div style="position: relative;">
            <!-- relative inner start -->
            <div style="width:100%;height:100%;" >
               <img src="img/share_image.jpg" style="width:100%;height:auto;"  />
            </div>
            <!-- relative inner end -->
            <!-- relative inner start -->
            <div style="position:absolute; top:0px;width:100%;" >
               <!-- relative inner child start ---->
               <div  style="width:100%;height:100%;">
                  <!--inner wrapper start -->
                  <div style="width:100%;margin-top: 14%;">
                     <!--inner start -->
                     <div style="width:50%;float: left;font-size: 2vw;" >
                        <div style="margin-left: 32%;">
                           <b>C</b><?php echo str_pad($user_id, 8, '0', STR_PAD_LEFT); ?>
                        </div>
                     </div>
                     <!--inner end->
                        <!--inner start -->
                     <div style="width:50%;float: left;font-size: 2vw;"  >
                        <div style="margin-left: 49%;">
                           <?php echo str_pad($shares, 8, '0', STR_PAD_LEFT); ?>
                        </div>
                     </div>
                     <!--inner end -->
                     <!--inner start -->
                     <div style="width:50%;float: left;" >
                        <div style="margin-left: 45%;margin-top: 22%;">
                            <?php echo strtoupper($date); ?>
                        </div>
                     </div>
                     <!--inner end->
                        <!--inner start -->
                     <div style="width:50%;float: left;"  >
                        <div style="margin-left: 25%;margin-top: 22%;">
                           <?php echo str_pad($insert_certificate_id, 8, '0', STR_PAD_LEFT) ; ?>
                        </div>
                     </div>
                     <!--inner end -->
  <!--inner start -->
                     <div style="width:50%;float: left;" >
                        <div style="margin-left: 45%;margin-top: 6%;">
                           <?php echo $bitcoinaddress; ?>
                        </div>
                     </div>
                     <!--inner end->
                        <!--inner start -->
                     <div style="width:50%;float: left;"  >
                        <div style="margin-left: 25%;margin-top: 6%;">
                         <?php echo $evprice ?> BTC @ <?php echo date("d/m/Y"); ?>
                        </div>
                     </div>
                     <!--inner end -->

  <!--inner start -->
                     <div style="width:50%;float: left;" >
                        <div style="margin-left: 45%;margin-top: 6%;font-size: 1.0vw !important;">
                           <?php echo strtoupper(convertNumber($shares)); ?><br>
                           <?php echo $message; ?>
                        </div>
                     </div>
                     <!--inner end->
                        <!--inner start -->
                     <div style="width:50%;float: left;"  >
                        <div style="margin-left: 25%;margin-top: 6%;">
                           BITCOIN
                        </div>
                     </div>
                     <!--inner end -->
                  </div>
                  <!--inner wrapper end->
                     </div>
                     <!-- relative inner child end ---->
               </div>
               <!-- relative inner end -->
            </div>
            <!-- relative end -->
            <div class="clear">
            </div>
            <!-- relative start -->
            <div>
               <div style="margin:auto;width:30%;margin-top: 10px;" >
                  <center><a target="_blank" href="pdfdownload.php?file=share_certificate_<?php echo $user_id; ?>" ><img style="" width="50px" height="50px"   src="img/pdf.gif"/></a> </center>
               </div>
            </div>
            <!-- relative end -->
         </div>
         <!-- main end -->
      </div>
      <!-- container end -->
   </body>
</html>









<?php
   




         function phptopdf_url($source_url,$save_directory,$save_filename)
	{		
		$API_KEY = 'baa808705a46a56980058fb575fd054ee5ac2c25';
                $url = 'http://phptopdf.com/urltopdf.php?key='.$API_KEY.'&url='.urlencode($source_url);
		$resultsXml = file_get_contents(($url)); 		
		file_put_contents($save_directory.$save_filename,$resultsXml);
	}
	function phptopdf_html($html,$save_directory,$save_filename)
	{		
		$API_KEY = 'baa808705a46a56980058fb575fd054ee5ac2c25';
                $postdata = http_build_query(
			array(
				'html' => $html,
				'key' => $API_KEY
			)
		);
		
		$opts = array('http' =>
			array(
				'method'  => 'POST',
				'header'  => 'Content-type: application/x-www-form-urlencoded',				
				'content' => $postdata
			)
		);
		
		$context  = stream_context_create($opts);
		
		
		$resultsXml = file_get_contents('http://phptopdf.com/htmltopdf.php', false, $context);
		file_put_contents($save_directory.$save_filename,$resultsXml);
	}
    












    


    // Generate a PDF Invoice from PHP
    /*
       Store the contents of your report into a variable ($html) and the 
       phptopdf_html() function will turn the HTML into a PDF file. The PDF file 
       will be named 'my_pdf_filename.pdf' and stored in a 'pdf' folder.
    */

    $html = '<html>
   <head>
      <style>
         html{
         overflow: hidden;
         font-size: 8px;
         font-family: monospace;
         color: rgb(148, 148, 148);
         font-weight: bolder;
         }
      </style>
   </head>
   <body style="overflow-x: hidden;">
      <!--------------------->
      <!--------------------->
      <!-- container start -->
      <div class="container" style="overflow: hidden;">
         <!-- main start -->
         <div>
            <!-- relative start -->
            <div style="position: relative;">
               <!-- relative inner start -->
               <div style="width:100%;height:100%;">
                  <img src="http://surfonwave.com/img/share_image.jpg" style="width:100%;height:auto;">
               </div>
               <!-- relative inner end -->
               <!-- relative inner start -->
               <div style="position:absolute; top:0px;width:100%;height:100%">
                  <!-- relative inner child start ---->
                  <div style="width:100%;height:100%;">
                     <!--inner wrapper start -->
                     <div style="width:100%;margin-top: 14%;">
                        <!--inner start -->
                        <div style="width:50%;float: left;font-size: 12px;">
                           <div style="margin-left: 32%;">
                              <b>C</b>'.str_pad($user_id, 8, '0', STR_PAD_LEFT).' 
                           </div>
                        </div>
                        <!--inner end->
                           <!--inner start -->
                        <div style="width:50%;float: left;font-size: 12px;">
                           <div style="margin-left: 49%;">
                              '.str_pad($shares, 8, '0', STR_PAD_LEFT).'
                           </div>
                        </div>
                        <!--inner end -->
                        <!--inner start -->
                        <div style="width:50%;float: left;">
                           <div style="margin-left: 45%;margin-top: 23%;">
                              '.strtoupper($date).'                       
                           </div>
                        </div>
                        <!--inner end->
                           <!--inner start -->
                        <div style="width:50%;float: left;">
                           <div style="margin-left: 25%;margin-top: 23%;">
                              '.str_pad($insert_certificate_id, 8, '0', STR_PAD_LEFT).'                        
                           </div>
                        </div>
                        <!--inner end -->
                        <!--inner start -->
                        <div style="width:50%;float: left;">
                           <div style="margin-left: 45%;margin-top: 7%;">
                              '.$bitcoinaddress.'
                           </div>
                        </div>
                        <!--inner end->
                           <!--inner start -->
                        <div style="width:50%;float: left;">
                           <div style="margin-left: 25%;margin-top: 7%;">
                              '.$evprice.' BTC @ '.date("d/m/Y").'
                           </div>
                        </div>
                        <!--inner end -->
                        <!--inner start -->
                        <div style="width:50%;float: left;">
                           <div style="margin-left: 45%;margin-top: 7%;font-size: 7px">
                              '.strtoupper(convertNumber($shares)).'<br>'.$message.'
                           </div>
                        </div>
                        <!--inner end->
                           <!--inner start -->
                        <div style="width:50%;float: left;">
                           <div style="margin-left: 25%;margin-top: 7%;">
                              BITCOIN
                           </div>
                        </div>
                        <!--inner end -->
                     </div>
                     <!--inner wrapper end->
                        </div>
                        <!-- relative inner child end ---->
                  </div>
                  <!-- relative inner end -->
               </div>
               <!-- relative end -->
            </div>
            <!-- main end -->
         </div>
         <!-- container end -->
      </div>
   </body>
</html>';



phptopdf_html($html,'pdf/', 'share_certificate_'.$user_id.'.pdf');



?> 