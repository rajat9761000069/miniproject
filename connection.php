<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = ''; 


$database = 'project';
$table ='baby';
$conn = @mysql_connect($db_host, $db_user, $db_pwd) or
die("cant select database ");


if (!mysql_select_db($database))
die("cant select database");
?>
