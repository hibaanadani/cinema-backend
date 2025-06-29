<?php 
require_once("../Models/Model.php");

class BookingSeats extends Model{

    private int $bookingseat_id; 
    private int $booking_id;
    private int $seat_id;
    
    protected static string $table = "bookingseats";

    public function __construct(array $data){
        $this->bookingseat_id = $data["bookingseat_id"];
        $this->booking_id = $data["booking_id"];
        $this->capacity = $data["capacity"];
    }

    public function getBookingSeatId(): int {
        return $this->bookingseat_id;
    }
    
    public function getBookingId(): int {
        return $this->booking_id;
    }
    
    public function getSeatId(): int {
        return $this->seat_id;
    }

    public function toArray(){
        return [$this->bookingseat_id, $this->booking_id, $this->seat_id];
    }
    
}