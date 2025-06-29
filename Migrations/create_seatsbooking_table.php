<?php 
require("../connection/connection.php");


$query ="CREATE TABLE bookingseats_db (
        bookingseat_id INT AUTO_INCREMENT PRIMARY KEY,
        booking_id INT NOT NULL,
        seat_id INT NOT NULL,
        FOREIGN KEY (booking_id) REFERENCES bookings_db(booking_id),
        FOREIGN KEY (seat_id) REFERENCES seats_db(seat_id),
        UNIQUE (booking_id, seat_id)
        )AUTO_INCREMENT = 1;";
$execute = $mysqli->prepare($query);
$execute->execute();
?>
