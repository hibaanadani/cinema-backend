<?php 
require("../models/Screens.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $screens = Screens::all($mysqli); //reminder: this is an array of OBJECTS!!!!

    $response["screens"] = []; //json_encode DOES NOT read private attributes!!!
    foreach($screens as $s){
        $response["screens"][] = $s->toArray(); //hence, we decided to iterate again on the articles array and now to store the result of the toArray() which is an array. 
    }
    echo json_encode($response); //now we can call json_encode on array of arrays. 
    return;
}

$id = $_GET["id"];
$screen = Screens::find($mysqli, $id);
$response["screen"] = $screen->toArray();

echo json_encode($response);
return;