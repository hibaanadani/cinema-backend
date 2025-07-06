<?php 

class CinemaService {

    public static function usersToArray($users_db){
        $results = [];

        foreach($users_db as $u){
             $results[] = $u->toArray();

        return $results;
    }

    }

    public static function moviesToArray($cinema_db){
        $results = [];

        foreach($cinema_db as $m){
             $results[] = $m->toArray();

        return $results;
    }
        }

    public static function bookingSeatsToArray($cinema_db){
        $results = [];

        foreach($cinema_db as $bs){
             $results[] = $bs->toArray();

        return $results;
    }

    }

    public static function bookingsToArray($cinema_db){
        $results = [];

        foreach($cinema_db as $b){
             $results[] = $b->toArray();

        return $results;
    }

    }
        public static function ScreensToArray($cinema_db){
        $results = [];

        foreach($cinema_db as $s){
             $results[] = $s->toArray();

        return $results;
    }

    }

    public static function seatsToArray($users_db){
        $results = [];

        foreach($users_db as $s){
             $results[] = $s->toArray();

        return $results;
    }

    }
}