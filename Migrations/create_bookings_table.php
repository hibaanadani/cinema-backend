<?php 
require("../connection/connection.php");


$query = "CREATE TABLE bookings_db (
        booking_id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        showtime_id INT NOT NULL,
        booking_date DATETIME DEFAULT CURRENT_TIMESTAMP,
        total_amount DECIMAL(10, 2) NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users_db(user_id),
        FOREIGN KEY (showtime_id) REFERENCES showtimes_db(showtime_id)
    )AUTO_INCREMENT = 1;";
$execute = $mysqli->prepare($query);
$execute->execute();
?>
