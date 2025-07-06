<?php 
require("../models/Seats.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

class SeatsController extends BaseController{
    global $mysqli;
    public function getAllSeats(){
        if(!isset($_GET["id"])){
            $seats = Seats::all($mysqli); //reminder: this is an array of OBJECTS!!!!
            $seats_array = CinemaService::seatsToArray($seats); 
            echo ResponseService::success_response($seats_array);
            return;
    }
    }
    public function getSeat(Screen){
        $id = $_GET["id"];
        $seat = Seats::find($mysqli, $id)->toArray();
        return;
    }

    public function deleteSeat(){
        $id = $_GET["id"];
        $seat = Seats::delete($mysqli, $id);
    }

    public function deleteAllSeats(){
        $seats = Seats::deleteAll($mysqli);
        die("Deleting...");
    }
    public function createSeat(){
        $data=[];
        $data["screen_id"]=$_POST["screen_id"];
        $data["seat_row"]=$_POST["seat_row"];
        $data["seat_number"]=$_POST["seat_number"];
        $seat = Seats::create($mysqli, $data)->toArray();
        echo ResponseService::success_response($seat);
        return;
    }
     public function updateSeat(){
        $data=[];
        $data["screen_id"]=$_POST["screen_id"];
        $data["seat_row"]=$_POST["seat_row"];
        $data["seat_number"]=$_POST["seat_number"];
        $seat = Seats::update($mysqli, $data)->toArray();
        echo ResponseService::success_response($seat);
        return;
    }
}