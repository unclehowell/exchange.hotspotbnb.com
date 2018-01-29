<?php



//ini_set('display_errors', 1); 
//error_reporting(E_ALL);

define("BASE_URL", "http://surfonwave.com/");
define("WEB_ROOT", "http://surfonwave.com/");

session_start();


define('DB_NAME', 'surfowav_sharephp');


/** MySQL database username */
define('DB_USER', 'surfowav_share');

/** MySQL database password */
define('DB_PASSWORD', 'paji93jaksRgb5911');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');



//define('APIKEY', 'b66455a2-5863-452d-923a-317a54639817');

//define('APIKEY', 'af32bd30-8e25-471c-a4dc-ce0387b17bb6');



define('SITEURL', 'http://surfonwave.com/');
define('GUID', '4e1bb0ad-ba0b-4bb0-9388-089757b083f4');
define('main_password', 'Ferrari458');
define('second_password', 'ute12345');
define('btcaddess', '1PpNrKuQKoLbSKPSVVcbFi4t8BBKaiDMYb');


/*define conection*/
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if (!$con)
{
  echo "Failed to connect to MySQL: " . mysql_error();
}

$dbselect = mysql_select_db(DB_NAME,$con);
/* if(!$dbselect)
{
  echo "Failed to select db to MySQL: " . mysql_error();
} */
// Check connection

$table_prefix  = 'wp_';

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


?>