<?php
$dbhost	= "localhost";
$dbuser	= "root";
$dbpass	= "";
$dbname	= "test";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>