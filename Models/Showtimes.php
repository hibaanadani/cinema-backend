<?php 
require_once("../Models/Model.php");

class Showtimes extends Model{

    private int $showtime_id; 
    private int $movie_id;
    private int $screen_id;
    private DateTime $show_datetime;
    private float $price;
    
    protected static string $table = "showtimes";

    public function __construct(array $data){
        $this->showtime_id = $data["showtime_id"];
        $this->movie_id = $data["movie_id"];
        $this->screen_id = $data["screen_id"];
        $this->show_datetime = $data["show_datetime"];
        $this->price = $data["price"];
    }
    
    public function getShowTimeId(): int {
        return $this->showtime_id;
    }
    
    public function getMovieId(): int {
        return $this->movie_id;
    }

    public function getScreenId(): int {
        return $this->screen_id;
    }

    public function getShowDateTime(): DateTime {
        return $this->show_datetime;
    }

    public function getPrice(): float {
        return $this->price;
    }
    
    public function setShowDateTime(DateTime $show_datetime){
        $this->show_datetime = $show_datetime;
    }

    public function setPrice(float $price){
        $this->price = $price;
    }
    public function toArray(){
        return [$this->showtime_id, $this->movie_id, $this->screen_id, $this->show_datetime->format('d-m-Y s:i:H'), $this->price];
    }
    
}