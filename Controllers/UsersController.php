<?php 
require("../models/Users.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;    
class UsersController extends BaseController{
    global $mysqli;
    public function getAllUsers(){
        if(!isset($_GET["id"])){
            $users = Users::all($mysqli); //reminder: this is an array of OBJECTS!!!!
            $users_array = CinemaService::usersToArray($users); 
            echo ResponseService::success_response($users_array); 
            return;
    }
    }
    public function getUser(){
        $id = $_GET["id"];
        $user = Users::find($mysqli, $id)->toArray();
        return;
    }

    public function deleteUser(){
        $id = $_GET["id"];
        $article = Users::delete($mysqli, $id);
    }

    public function deleteAllUsers(){
        $user = Users::deleteAll($mysqli);
        die("Deleting...");
    }
    public function createUser(){
        $data=[];
        $data["firstname"]=$_POST["firstname"];
        $data["lastname"]=$_POST["lastname"];
        $data["username"]=$_POST["username"];
        $data["email"]=$_POST["email"];
        $data["password"]=$_POST["password"];
        $data["phone_number"]=$_POST["phone_number"];
        $user = Users::create($mysqli, $data)->toArray();
        echo ResponseService::success_response($user);
        return;
    }
     public function updateUser(){
        $data=[];
        $data["firstname"]=$_POST["firstname"];
        $data["lastname"]=$_POST["lastname"];
        $data["username"]=$_POST["username"];
        $data["email"]=$_POST["email"];
        $data["password"]=$_POST["password"];
        $data["phone_number"]=$_POST["phone_number"];
        $user = Users::update($mysqli, $data)->toArray();
        echo ResponseService::success_response($user);
        return;
    }
}