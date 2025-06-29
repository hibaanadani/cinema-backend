<?php 
require("../models/Bookings.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $bookings = Bookings::all($mysqli); //reminder: this is an array of OBJECTS!!!!

    $response["bookings"] = []; //json_encode DOES NOT read private attributes!!!
    foreach($bookings as $b){
        $response["bookings"][] = $b->toArray(); //hence, we decided to iterate again on the articles array and now to store the result of the toArray() which is an array. 
    }
    echo json_encode($response); //now we can call json_encode on array of arrays. 
    return;
}

$id = $_GET["id"];
$booking = Bookings::find($mysqli, $id);
$response["booking"] = $booking->toArray();

echo json_encode($response);
return;