<?php 
require("../connection/connection.php");


$query = "INSERT INTO users (
    firstname,
    lastname,
    username,
    email,
    password,
    phone_number
) VALUES (
    
);";

$execute = $mysqli->prepare($query);
$execute->execute();