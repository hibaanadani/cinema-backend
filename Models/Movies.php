<?php 
require_once("../Models/Model.php");

class Movies extends Model{

    private int $movie_id; 
    private string $poster;
    private string $trailer;
    private string $title; 
    private string $movie_description; 
    private float $rating;
    
    protected static string $table = "movies";

    public function __construct(array $data){
        $this->movie_id = $data["movie_id"];
        $this->poster = $data["poster"];
        $this->trailer = $data["trailer"];
        $this->title = $data["title"];
        $this->movie_description = $data["movie_description"];
        $this->rating = $data["rating"];
    }

    public function getId(): int {
        return $this->movie_id;
    }
    
    public function getPoster(): string {
        return $this->poster;
    }
    
    public function getTitle(): string {
        return $this->title;
    }
    
    public function getTrailer(): string {
        return $this->trailer;
    }
    
    public function getMovieDescription(): string {
        return $this->movie_description;
    }
    
    public function getRating(): float {
        return $this->rating;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }
    
    public function setPoster(string $poster){
        $this->poster = $poster;
    }

    public function setTrailer(string $trailer){
        $this->trailer = $trailer;
    }

    public function setMovieDescription(string $movie_description){
        $this->movie_description = $movie_description;
    }
    
    public function setRating(float $rating){
        $this->rating = $rating;
    }

    public function toArray(){
        return [$this->id, $this->title, $this->rating, $this->description];
    }
    
}