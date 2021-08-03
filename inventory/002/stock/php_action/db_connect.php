<?php 	

$localhost = "localhost";
$username = "akar";
$password = "akar";
//$dbname = "stock";
$dbname = "apps_inventory002";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

define('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']) . '/');
define('LOKASI', $_SERVER['SERVER_NAME']);

?>