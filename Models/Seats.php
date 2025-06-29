<?php 
require_once("../Models/Model.php");

class Seats extends Model{

    private int $seat_id; 
    private int $screen_id; 
    private string $seat_row;
    private int $seat_number;
    
    protected static string $table = "seats";

    public function __construct(array $data){
        $this->seat_id = $data["seat_id"];
        $this->screen_id = $data["screen_id"];
        $this->seat_row = $data["seat_row"];
        $this->seat_number = $data["seat_number"];
    }

    public function getSeatId(): int {
        return $this->seat_id;
    }

    public function getScreenId(): int {
        return $this->screen_id;
    }
    
    public function getSeatRow(): string {
        return $this->seat_row;
    }
    
    public function getSeatnumber(): int {
        return $this->seat_number;
    }
    
    public function toArray(){
        return [$this->seat_id, $this->screen_id, $this->seat_row, $this->seat_number];
    }
    
}