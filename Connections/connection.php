<?php 

$users_db_host = "localhost";
$users_db_name = "users_db"; 
$users_db_user = "root"; 
$users_db_pass = null;

$movies_db_host = "localhost";
$movies_db_name = "movies_db"; 
$movies_db_user = "root"; 
$movies_db_pass = null;

$screens_db_host = "localhost";
$screens_db_name = "screens_db"; 
$screens_db_user = "root"; 
$screens_db_pass = null;

$seats_db_host = "localhost";
$seats_db_name = "seats_db"; 
$seats_db_user = "root"; 
$seats_db_pass = null;

$showtimes_db_host = "localhost";
$showtimes_db_name = "showtimes_db"; 
$showtimes_db_user = "root"; 
$showtimes_db_pass = null;

$bookings_db_host = "localhost";
$bookings_db_name = "bookings_db"; 
$bookings_db_user = "root"; 
$bookings_db_pass = null;

$bookingseats_db_host = "localhost";
$bookingseats_db_name = "bookingseats_db"; 
$bookingseats_db_user = "root"; 
$bookingseats_db_pass = null;

$users_conn = new mysqli($users_db_host, $users_db_user, $users_db_pass, $users_db_name);
$movies_conn = new mysqli($movies_db_host, $movies_db_user, $movies_db_pass, $movies_db_name);
$seats_conn = new mysqli($seats_db_host, $seats_db_user, $seats_db_pass, $seats_db_name);
$screens_conn = new mysqli($screens_db_host, $screens_db_user, $screens_db_pass, $screens_db_name);
$bookings_conn = new mysqli($bookings_db_host, $bookings_db_user, $bookings_db_pass, $bookings_db_name);
$showtimes_conn = new mysqli($showtimes_db_host, $showtimes_db_user, $showtimes_db_pass, $showtimes_db_name);
$bookingseats_conn = new mysqli($bookingseats_db_host, $bookingseats_db_user, $bookingseats_db_pass, $bookingseats_db_name);

if ($users_conn->connect_error) {
  die("Connection failed: " . $users_conn->connect_error);
}
if ($movies_conn->connect_error) {
  die("Connection failed: " . $movies_conn->connect_error);
}
if ($seats_conn->connect_error) {
  die("Connection failed: " . $seats_conn->connect_error);
}
if ($screens_conn->connect_error) {
  die("Connection failed: " . $screens_conn->connect_error);
}
if ($bookings_conn->connect_error) {
  die("Connection failed: " . $bookings_conn->connect_error);
}
if ($showtimes_conn->connect_error) {
  die("Connection failed: " . $showtimes_conn->connect_error);
}
if ($bookingseats_conn->connect_error) {
  die("Connection failed: " . $bookingseats_conn->connect_error);
}
echo "Connected successfully to users database<br>";
echo "Connected successfully to movies database<br>";
echo "Connected successfully to screens database<br>";
echo "Connected successfully to seats database<br>";
echo "Connected successfully to bookings database<br>";
echo "Connected successfully to showtimes database<br>";
echo "Connected successfully to bookingseats database<br>";
?>