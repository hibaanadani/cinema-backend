<?php 
require_once("../Models/Model.php");

class Screens extends Model{

    private int $screen_id; 
    private int $screen_number;
    private int $capacity;
    
    protected static string $table = "screens";

    public function __construct(array $data){
        $this->screen_id = $data["screen_id"];
        $this->screen_number = $data["screen_number"];
        $this->capacity = $data["capacity"];
    }

    public function getId(): int {
        return $this->screen_id;
    }
    
    public function getScreenNumber(): int {
        return $this->screen_number;
    }
    
    public function getCapacity(): int {
        return $this->capacity;
    }
    
    public function setCapacity(int $capacity){
        $this->capacity = $capacity;
    }
    public function toArray(){
        return [$this->screen_id, $this->screen_number, $this->capacity];
    }
    
}