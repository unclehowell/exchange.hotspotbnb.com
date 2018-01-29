<?php

echo "ddddddddddddddddddddddd";


$data = file_get_contents('http://query.yahooapis.com/v1/public/yql?q=select * from yahoo.finance.xchange where pair in ("GBPEUR", "GBPJPY", "GBPBGN", "GBPCZK", "GBPDKK", "GBPUSD", "GBPHUF", "GBPLTL", "GBPLVL", "GBPPLN", "GBPRON", "GBPSEK", "GBPCHF", "GBPNOK", "GBPHRK", "GBPRUB", "GBPTRY", "GBPAUD", "GBPBRL", "GBPCAD", "GBPCNY", "GBPHKD", "GBPIDR", "GBPILS", "GBPINR", "GBPKRW", "GBPMXN", "GBPMYR", "GBPNZD", "GBPPHP", "GBPSGD", "GBPTHB", "GBPZAR", "GBPISK")&env=store://datatables.org/alltableswithkeys');



print_r($data);

echo "ddddddddddddddddddddddd";

?>