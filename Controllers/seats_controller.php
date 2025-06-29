<?php 
require("../models/Seats.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $seats = Seats::all($mysqli); //reminder: this is an array of OBJECTS!!!!

    $response["seats"] = []; //json_encode DOES NOT read private attributes!!!
    foreach($seats as $s){
        $response["seats"][] = $s->toArray(); //hence, we decided to iterate again on the articles array and now to store the result of the toArray() which is an array. 
    }
    echo json_encode($response); //now we can call json_encode on array of arrays. 
    return;
}

$id = $_GET["id"];
$seat = Seats::find($mysqli, $id);
$response["seat"] = $seat->toArray();

echo json_encode($response);
return;