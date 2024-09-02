<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

Route::get('/', function () {    
    
  

    $results = DB::table('rooms')
    ->leftJoin('reservations','rooms.id', '=', 'reservations.room_id')
    ->leftJoin('cities','reservations.city_id', '=', 'cities.id')
    ->selectRaw('room_size,cities.name, count(reservations.id) as reservations_count')
    ->groupBy('room_size','cities.name')
    ->orderByRaw('count(reservations.id) DESC')
    ->get();
    
    dump($results);
   



    // dump($comments);
  

    return view('home');
});
