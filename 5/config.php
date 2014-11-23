<!--Webpage is located at http://stranica.6te.net/

Login
Admin: bicom
password: 123456-->	

<?php

ob_start();

$host = 'localhost';
$user = '889478';
$pass = 'mars1234';
$test='889478';
$conn=mysql_connect($host,$user,$pass);
mysql_select_db($test);
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET COLLATION_CONNECTION = 'utf8_general_ci'");




?>
