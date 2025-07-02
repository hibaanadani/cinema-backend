<?php 
require("../connection/connection.php");


$query ="CREATE TABLE showtimes_db (
        showtime_id INT AUTO_INCREMENT PRIMARY KEY,
        movie_id INT NOT NULL,
        screen_id INT NOT NULL,
        show_datetime DATETIME NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        FOREIGN KEY (movie_id) REFERENCES movies_db(movie_id),
        FOREIGN KEY (screen_id) REFERENCES screens_db(screen_id)
        )AUTO_INCREMENT = 1;";

$execute = $mysqli->prepare($query);
$execute->execute();
?>
