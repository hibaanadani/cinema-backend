<?php 
require("../models/Showtimes.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $showtimes = Showtimes::all($mysqli); //reminder: this is an array of OBJECTS!!!!

    $response["showtimes"] = []; //json_encode DOES NOT read private attributes!!!
    foreach($showtimes as $st){
        $response["showtimes"][] = $st->toArray(); //hence, we decided to iterate again on the articles array and now to store the result of the toArray() which is an array. 
    }
    echo json_encode($response); //now we can call json_encode on array of arrays. 
    return;
}

$id = $_GET["id"];
$showtime = Showtimes::find($mysqli, $id);
$response["showtime"] = $showtime->toArray();

echo json_encode($response);
return;