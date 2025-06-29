<?php 
require("../models/users.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

if(!isset($_GET["id"])){
    $users = Users::all($mysqli); //reminder: this is an array of OBJECTS!!!!

    $response["users"] = []; //json_encode DOES NOT read private attributes!!!
    foreach($users as $u){
        $response["users"][] = $u->toArray(); //hence, we decided to iterate again on the articles array and now to store the result of the toArray() which is an array. 
    }
    echo json_encode($response); //now we can call json_encode on array of arrays. 
    return;
}

$id = $_GET["id"];
$user = Users::find($mysqli, $id);
$response["user"] = $user->toArray();
echo json_encode($response);
return;