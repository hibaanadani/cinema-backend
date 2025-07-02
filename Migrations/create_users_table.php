<?php 
require("../connections/connection.php");


$query = "CREATE TABLE users_db (
    user_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    firstname TEXT NOT NULL,
    lastname TEXT NOT NULL,
    username VARCHAR(225) UNIQUE NOT NULL,
    email VARCHAR(225) UNIQUE NOT NULL,
    password VARCHAR(225) NOT NULL,
    phone_number VARCHAR(9) NOT NULL,
    role TEXT NOT NULL DEFAULT 'user'
)AUTO_INCREMENT = 1;";

$execute = $mysqli->prepare($query);
$execute->execute();
?>