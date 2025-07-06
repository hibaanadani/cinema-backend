<?php
//Routing starts here (Mapping between the request and the controller & method names)
//It's an key-value array where the value is an key-value array
//----------------------------------------------------------
$apis = [
    '/users'         => ['Controllers' => 'UsersController', 'method' => 'getAllUsersers'],
    '/get_user'         => ['Controllers' => 'UsersController', 'method' => 'getUserser'],
    '/delete_users'         => ['Controllers' => 'UsersController', 'method' => 'deleteUsers'],
    '/delete_user'         => ['Controllers' => 'UsersController', 'method' => 'deleteUser'],
    '/create_user'         => ['Controllers' => 'UsersController', 'method' => 'createUser'],
    '/update_user'         => ['Controllers' => 'UsersController', 'method' => 'updateUser'],

    '/movies'         => ['Controllers' => 'MoviesController', 'method' => 'getAllMovies'],
    '/get_movie'         => ['Controllers' => 'MoviesController', 'method' => 'getMovie'],
    '/delete_movies'         => ['Controllers' => 'MoviesController', 'method' => 'deleteAllMovies'],
    '/delete_movie'         => ['Controllers' => 'MoviesController', 'method' => 'deleteMovie'],
    '/create_movie'         => ['Controllers' => 'MoviesController', 'method' => 'createMovie'],
    '/update_movie'         => ['Controllers' => 'MoviesController', 'method' => 'updateMovie'],

    '/bookings'         => ['Controllers' => 'BookingsController', 'method' => 'getAllBookings'],
    '/get_booking'         => ['Controllers' => 'BookingsController', 'method' => 'getBooking'],
    '/delete_bookings'         => ['Controllers' => 'BookingsController', 'method' => 'deleteAllBookings'],
    '/delete_booking'         => ['Controllers' => 'BookingsController', 'method' => 'deleteBooking'],
    '/create_booking'         => ['Controllers' => 'BookingsController', 'method' => 'createBooking'],
    '/update_booking'         => ['Controllers' => 'BookingsController', 'method' => 'updateBooking'],

    '/bookingSeats'         => ['Controllers' => 'BookingSeatsController', 'method' => 'getAllBookingSeats'],
    '/get_bookingSeat'         => ['Controllers' => 'BookingSeatsController', 'method' => 'getBookingSeat'],
    '/delete_bookingSeats'         => ['Controllers' => 'BookingSeatsController', 'method' => 'deleteAllBookingSeats'],
    '/delete_bookingSeat'         => ['Controllers' => 'BookingSeatsController', 'method' => 'deleteBookingSeat'],
    '/create_bookingSeat'         => ['Controllers' => 'BookingSeatsController', 'method' => 'createBookingSeat'],
    '/update_bookingSeat'         => ['Controllers' => 'BookingSeatsController', 'method' => 'updateBookingSeat'],

    '/screens'         => ['Controllers' => 'ScreensController', 'method' => 'getAllScreens'],
    '/get_screen'         => ['Controllers' => 'ScreensController', 'method' => 'getScreen'],
    '/delete_screens'         => ['Controllers' => 'ScreensController', 'method' => 'deleteAllScreens'],
    '/delete_screen'         => ['Controllers' => 'ScreensController', 'method' => 'deleteScreen'],
    '/create_screen'         => ['Controllers' => 'ScreensController', 'method' => 'createScreen'],
    '/update_screen'         => ['Controllers' => 'ScreensController', 'method' => 'updateScreen'],


    '/seats'         => ['Controllers' => 'SeatsController', 'method' => 'getAllSeats'],
    '/get_seat'         => ['Controllers' => 'SeatsController', 'method' => 'getSeat'],
    '/delete_seats'         => ['Controllers' => 'SeatsController', 'method' => 'deleteAllSeats'],
    '/delete_seat'         => ['Controllers' => 'SeatsController', 'method' => 'deleteSeat'],
    '/create_seat'         => ['Controllers' => 'SeatsController', 'method' => 'createSeat'],
    '/update_seat'         => ['Controllers' => 'SeatsController', 'method' => 'updateSeat'],

    '/showtimes'         => ['Controllers' => 'ShowtimesController', 'method' => 'getAllShowtimes'],
    '/get_showtime'         => ['Controllers' => 'ShowtimesController', 'method' => 'getShowtime'],
    '/delete_showtimes'         => ['Controllers' => 'ShowtimesController', 'method' => 'deleteAllShowtimes'],
    '/delete_showtime'         => ['Controllers' => 'ShowtimesController', 'method' => 'deleteShowtime'],
    '/create_showtime'         => ['Controllers' => 'ShowtimesController', 'method' => 'createShowtime'],
    '/update_showtime'         => ['Controllers' => 'ShowtimesController', 'method' => 'updateShowtime'],


];

//----------------------------------------------------------

//Routing Logic here 
//This is a dynamic logic, that works on any array... 
//----------------------------------------------------------
if (isset($apis[$request])) {
    $controller_name = $apis[$request]['controller']; //if $request == /articles, then the $controller_name will be "ArticleController" 
    $method = $apis[$request]['method'];
    require_once "controllers/{$controller_name}.php";

    $controller = new $controller_name();
    if (method_exists($controller, $method)) {
        $controller->$method();
    } else {
        echo "Error: Method {$method} not found in {$controller_name}.";
    }
} else {
    echo "404 Not Found";
}
?>