<?php 
require("../models/Screens.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

class ScreensController extends BaseController{
    global $mysqli;
    public function getAllScreens(){
        if(!isset($_GET["id"])){
            $screens = Screens::all($mysqli); //reminder: this is an array of OBJECTS!!!!
            $screens_array = CinemaService::ScreensToArray($screens); 
            echo ResponseService::success_response($screens_array);
            return;
    }
    }
    public function getScreen(Screen){
        $id = $_GET["id"];
        $screen = Screens::find($mysqli, $id)->toArray();
        return;
    }

    public function deleteScreen(){
        $id = $_GET["id"];
        $screen = Screens::delete($mysqli, $id);
    }

    public function deleteAllScreens(){
        $screen = Screens::deleteAll($mysqli);
        die("Deleting...");
    }
    public function createScreen(){
        $data=[];
        $data["screen_number"]=$_POST["screen_number"];
        $data["capacity"]=$_POST["capacity"];
        $screen = Screens::create($mysqli, $data)->toArray();
        echo ResponseService::success_response($screen);
        return;
    }
     public function updateScreen(){
        $data=[];
        $data["screen_number"]=$_POST["screen_number"];
        $data["capacity"]=$_POST["capacity"];
        $screen = Screens::update($mysqli, $data)->toArray();
        echo ResponseService::success_response($screen);
        return;
    }
}