<?php 
require("../connection/connection.php");


$query = "INSERT INTO movies (
    image_poster,
    movie_title,
    movie_description,
    rating,
    show_time
) VALUES (
);";

$execute = $mysqli->prepare($query);
$execute->execute();