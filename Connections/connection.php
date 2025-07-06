<?php 

$users_db_host = "localhost";
$users_db_name = "cinema_db"; 
$users_db_user = "root"; 
$users_db_pass = null;


$cinema_conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($cinema_conn->connect_error) {
  die("Connection failed: " . $cinema_conn->connect_error);
}

echo "Connected successfully to Cinema database<br>";

?>