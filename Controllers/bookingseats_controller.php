<?php 
require("../models/BookingSeats.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $bookingseats = BookingSeats::all($mysqli); //reminder: this is an array of OBJECTS!!!!

    $response["bookingseats"] = []; //json_encode DOES NOT read private attributes!!!
    foreach($bookingseats as $bs){
        $response["bookingseats"][] = $bs->toArray(); //hence, we decided to iterate again on the articles array and now to store the result of the toArray() which is an array. 
    }
    echo json_encode($response); //now we can call json_encode on array of arrays. 
    return;
}

$id = $_GET["id"];
$bookingseat = BookingSeats::find($mysqli, $id);
$response["bookingseat"] = $bookingseat->toArray();

echo json_encode($response);
return;