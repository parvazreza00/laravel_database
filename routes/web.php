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
//  $comments = DB::table('comments')->where('comment','LIKE','%Sit%')->get();
//  $comments = DB::table('comments')->whereRaw('comment LIKE "%Sit%"')->get();

// $results = DB::table('comments')
// ->select(DB::raw('count(user_id) as number_of_comments, users.name'))
// ->join('users','users.id','=','comments.user_id')
// ->groupBy('user_id')
// ->get();

    // $orders = DB::table('orders')
    // ->selectRaw('total_amount * ? as price_with_tax', [2.90])
    // ->whereRaw('user_id = ?', [4])
    // ->get();

    // $orders = DB::table('comments')
    // ->selectRaw('count(id) as number_of_5stars_comment, rating')
    // ->groupBy('rating')
    // ->having('rating','=',5)
    // ->get();
    $comments = DB::table('comments')
    ->skip(5)
    ->take(2)
    ->get();


    dump($comments);
  

    return view('welcome');
});
