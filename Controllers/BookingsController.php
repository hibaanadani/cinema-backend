<?php 
require("../models/Bookings.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;

class BookingsController extends BaseController{
    global $mysqli;
    public function getAllBookings(){
    if(!isset($_GET["id"])){
        $bookings = Bookings::all($mysqli); //reminder: this is an array of OBJECTS!!!!
        $bookings_array = CinemaService::bookingsToArray($bookings); 
        echo ResponseService::success_response($bookings_array);
        return;
        }
    }
    public function getBooking(){
        $id = $_GET["id"];
        $booking = Bookings::find($mysqli, $id)->toArray();
        return;
    }

    public function deleteBooking(){
        $id = $_GET["id"];
        $booking = Bookings::delete($mysqli, $id);
    }
    public function deleteAllBookings(){
        $bookings = Bookings::deleteAll($mysqli);
        die("Deleting...");
    }

    public function createBooking(){
        $data=[];
        $data["user_id"]=$_POST["user_id"];
        $data["showtime_id"]=$_POST["showtime_id"];
        $data["booking_date"]=$_POST["booking_date"];
        $data["total_amount"]=$_POST["total_amount"];
        $booking = Bookings::create($mysqli, $data)->toArray();
        echo ResponseService::success_response($booking);
        return;
    }
     public function updateBooking(){
        $data=[];
        $data["user_id"]=$_POST["user_id"];
        $data["showtime_id"]=$_POST["showtime_id"];
        $data["booking_date"]=$_POST["booking_date"];
        $data["total_amount"]=$_POST["total_amount"];
        $booking = Bookings::update($mysqli, $data)->toArray();
        echo ResponseService::success_response($booking);
        return;
    }
}