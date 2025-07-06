<?php 
require("../models/BookingSeats.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

class BookingSeatsController extends BaseController{
    global $mysqli;
    public function getAllBookingSeats(){
    if(!isset($_GET["id"])){
        $bookingSeats = BookingSeats::all($mysqli); //reminder: this is an array of OBJECTS!!!!
        $bookingSeats_array = CinemaService::bookingSeatsToArray($bookingSeats); 
        echo ResponseService::success_response($bookingSeats_array);
        return;
        }
    }
    public function getBookingSeat(){
        $id = $_GET["id"];
        $bookingSeat = BookingSeats::find($mysqli, $id)->toArray();
        return;
    }

    public function deleteBookingSeat(){
        $id = $_GET["id"];
        $bookingSeat = BookingSeats::delete($mysqli, $id);
    }
    public function deleteAllBookingSeats(){
        $bookingSeats = BookingSeats::deleteAll($mysqli);
        die("Deleting...");
    }

    public function createBookingSeat(){
        $data=[];
        $data["booking_id"]=$_POST["booking_id"];
        $data["seat_id"]=$_POST["seat_id"];
        $bookingSeat = BookingSeats::create($mysqli, $data)->toArray();
        echo ResponseService::success_response($bookingSeat);
        return;
    }
     public function updateBookingSeat(){
        $data=[];
        $data["booking_id"]=$_POST["booking_id"];
        $data["seat_id"]=$_POST["seat_id"];
        $bookingSeat = BookingSeats::update($mysqli, $data)->toArray();
        echo ResponseService::success_response($bookingSeat);
        return;
    }
}