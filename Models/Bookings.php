<?php 
require_once("../Models/Model.php");

class Bookings extends Model{

    private int $booking_id; 
    private int $user_id;
    private int $showtime_id;
    private DateTime $booking_date; 
    private float $total_amount;
    
    protected static string $table = "bookings";

    public function __construct(array $data){
        $this->booking_id = $data["booking_id"];
        $this->user_id = $data["user_id"];
        $this->showtime_id = $data["showtime_id"];
        $this->booking_date = $data["booking_date"];
        $this-> total_amount= $data["total_amount"];
    }

    public function getBookingId(): int {
        return $this->booking_id;
    }
    public function getUserId(): int {
        return $this->user_id;
    }
    public function getShowtimeId(): int {
        return $this->showtime_id;
    }
    
    public function getBookingDate(): DateTime {
        return $this->booking_date;
    }
    
    public function getTotalAmount(): float {
        return $this->total_amount;
    }

    public function setTotalAmount(float $total_amount){
        $this->tot$total_amount = $total_amount;
    }

    public function toArray(){
        return [$this->booking_id, $this->user_id, $this->showtime_id, $this->booking_date->format('d-m-Y s:i:H'), $this->total_amount];
    }
    
}