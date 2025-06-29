<?php 
require("../connection/connection.php");


$query = "CREATE TABLE screens_db (
    screen_id INT AUTO_INCREMENT PRIMARY KEY,
    screen_number INT NOT NULL,
    capacity INT NOT NULL 
);";

$execute = $mysqli->prepare($query);
$execute->execute();
?>
