<?php 
require("../connection/connection.php");


$query = "CREATE TABLE movies_db (
    movie_id INT PRIMARY KEY AUTO_INCREMENT,
    poster varchar(255) NOT NULL,
    trailer varchar(255),
    title varchar(255) NOT NULL,
    movie_description TEXT,
    rating REAL
)AUTO_INCREMENT = 1;";

$execute = $mysqli->prepare($query);
$execute->execute();
?>