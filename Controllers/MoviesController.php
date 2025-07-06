<?php 
require("../models/Movies.php");
require("../connection/connection.php");

$response = [];
$response["status"] = 200;
class MoviesController extends BaseController{
    global $mysqli;
    public function getAllMovies(){
        if(!isset($_GET["id"])){
            $movies = Movies::all($mysqli); //reminder: this is an array of OBJECTS!!!!
            $movies_array = CinemaService::moviesToArray($movies); 
            echo ResponseService::success_response($movies_array);
            return;
        }
    }
    public function getMovie(){
        $id = $_GET["id"];
        $movie = Movies::find($mysqli, $id)->toArray();
        return;
    }

    public function deleteMovie(){
        $id = $_GET["id"];
        $movie = Movies::delete($mysqli, $id);
    }
    public function deleteAllMovies(){
        $movie = Movies::deleteAll($mysqli);
        die("Deleting...");
    }

    public function createMovie(){
        $data=[];
        $data["poster"]=$_POST["poster"];
        $data["trailer"]=$_POST["trailer"];
        $data["title"]=$_POST["title"];
        $data["movie_description"]=$_POST["movie_description"];
        $data["rating"]=$_POST["rating"];
        $data["actors"]=$_POST["actors"];
        $movie = Movies::create($mysqli, $data)->toArray();
        echo ResponseService::success_response($movie);
        return;
    }
     public function updateMovie(){
        $data=[];
        $data["poster"]=$_POST["poster"];
        $data["trailer"]=$_POST["trailer"];
        $data["title"]=$_POST["title"];
        $data["movie_description"]=$_POST["movie_description"];
        $data["rating"]=$_POST["rating"];
        $data["actors"]=$_POST["actors"];
        $movie = Movies::update($mysqli, $data)->toArray();
        echo ResponseService::success_response($movie);
        return;
    }
}