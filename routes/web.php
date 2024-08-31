<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    
    
    // $rooms = DB::table('rooms')->whereNotBetween('room_size',[5,9])->get();
    // $rooms = DB::table('rooms')->whereIn('room_size',[5,9])->get();
    // $rooms = DB::table('rooms')->whereNotIn('room_size',[5,9])->get();
    // $rooms = DB::table('rooms')->orWhereIn('room_size',[5,9])->get();
//     $results = DB::table('users')
//     ->whereExists(function($query){
//         $query->select('id')
//         ->from('reservations')
//         ->whereRaw('reservations.user_id = users.id')
//         ->where('check_in','=','2024-08-25')
//         ->limit(1); 
//      })
// ->get();  

// $users = DB::table('users')
//     ->whereExists(function ($query) {
//         $query->select(DB::raw(1))
//               ->from('reservations')
//               ->whereColumn('reservations.user_id', 'users.id');
//     })
//     ->get();

// $users = DB::table('users')->whereJsonContains('meta->skills','Laravel')->get();
$users = DB::table('users')->where('meta->settings->site_language','en')->get();

    dump($users);
  

    return view('welcome');
});
