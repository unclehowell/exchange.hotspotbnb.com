<?php

include('functions.php'); 
$obj = new share();
$unique_id = $_REQUEST[unique_id];
$bank_data = $obj->select_Bank_Transfer_with_key($unique_id);
$status = $bank_data['status'];

if($status == 0){ $img = 'img/red.png'; }
else{ $img = 'img/green.png'; }

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
echo "data: {$img}\n\n";
flush();
?>