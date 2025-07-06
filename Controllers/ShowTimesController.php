<?php 
require("../models/Showtimes.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

class ShowtimesController extends BaseController{
    global $mysqli;
    public function getAllShowTimes(){
        if(!isset($_GET["id"])){
            $showtimes = Showtimes::all($mysqli); //reminder: this is an array of OBJECTS!!!!
            $showtimes_array = CinemaService::showTimesToArray($showtimes); 
            echo ResponseService::success_response($showtimes_array);
            return;
    }
    }
    public function getShowTime(Screen){
        $id = $_GET["id"];
        $showtime = Showtimes::find($mysqli, $id)->toArray();
        return;
    }

    public function deleteShowTime(){
        $id = $_GET["id"];
        $showtime = Showtimes::delete($mysqli, $id);
    }

    public function deleteAllShowTimes(){
        $showtimes = Showtimes::deleteAll($mysqli);
        die("Deleting...");
    }
    public function createShowTime(){
        $data=[];
        $data["movie_id"]=$_POST["movie_id"];
        $data["screen_id"]=$_POST["screen_id"];
        $data["show_datetime"]=$_POST["show_datetime"];
        $data["price"]=$_POST["price"];
        $showtime = Showtimes::create($mysqli, $data)->toArray();
        echo ResponseService::success_response($showtime);
        return;
    }
     public function updateShowTime(){
        $data=[];
        $data["movie_id"]=$_POST["movie_id"];
        $data["screen_id"]=$_POST["screen_id"];
        $data["show_datetime"]=$_POST["show_datetime"];
        $data["price"]=$_POST["price"];
        $showtime = Showtimes::update($mysqli, $data)->toArray();
        echo ResponseService::success_response($showtime);
        return;
    }
}