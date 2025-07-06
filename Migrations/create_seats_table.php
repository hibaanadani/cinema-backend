<?php 
require("../connection/connection.php");


$query = "CREATE TABLE seats(
    seat_id INT AUTO_INCREMENT PRIMARY KEY,
    screen_id INT NOT NULL,
    seat_row VARCHAR(1) NOT NULL, -- e.g., 'A', 'B', 'C'
    seat_number INT NOT NULL,     -- e.g., 1, 2, 3
    FOREIGN KEY (screen_id) REFERENCES screens_db(screen_id),
    UNIQUE (screen_id, seat_row, seat_number)
    )AUTO_INCREMENT = 1;";

$execute = $mysqli->prepare($query);
$execute->execute();
?>
