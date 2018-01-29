<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dbconn = "http://localhost/";
$database_dbconn = "surfowav_sharephp";
$username_dbconn = "root";
$password_dbconn = "mysql.php";
$dbconn = mysql_pconnect($hostname_dbconn, $username_dbconn, $password_dbconn) or trigger_error(mysql_error(),E_USER_ERROR); 
?>