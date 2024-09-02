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

    // $comments = DB::table('comments')
    // ->skip(5)
    // ->take(2)
    // ->get();

    // $users = DB::table('users')
    // ->orderBy('id')
    // ->chunk(50, function($users){
    //     foreach ($users as $user) {
    //         // Print user details
    //         echo 'User ID: ' . $user->id . ', Name: ' . $user->name . '<br>';
    //     }
    // });

    // $comments = DB::table('comments')
    // ->join('users', 'comments.user_id','=','users.id')
    // ->select('comments.*','users.name','users.email')
    // ->orderBy('comments.id')
    // ->chunk(8, function($comments){
    //     foreach ($comments as $comment) {
    //         echo 'Comment ID: ' . $comment->id . ', User: ' . $comment->name . ', Email: ' . $comment->email . ', Rating: ' . $comment->rating . '<br>';
    //     }
    // });

    // $results = DB::table('comments')->orderBy('id')->chunkById(5, function($comments){
    //     foreach($comments as $comment){
    //         DB::table('comments')
    //         ->where('id',$comment->id)
    //         ->update(['rating' => null]);
    //     }
    // });

    // $results = DB::table('reservations')
    // ->join('rooms','reservations.room_id', '=', 'rooms.id')
    // ->join('users', 'reservations.user_id','=','users.id')
    // ->join('cities', 'reservations.city_id','=','cities.id')
    // ->where('rooms.id','>',3)
    // ->where('users.id','>',1)
    // ->get();
    // foreach($results as $result){
    //     echo "User name $result->name -> $result->check_in - $result->check_out (city Name) $result->name</br>";
    // }

    // $results = DB::table('reservations')
    // ->join('rooms', function($join){
    //     $join->on('reservations.room_id', '=', 'rooms.id')
    //     ->where('rooms.id','>', 3);
    // })
    // ->join('users', function($join){
    //     $join->on('reservations.user_id','=','users.id')
    //     ->where('users.id','>',1);
    // })
    // ->get();

    // $rooms = DB::table('rooms')->where('rooms.id','>',3);
    // $users = DB::table('users')->where('users.id','>',1);
    // $results = DB::table('reservations')
    // ->joinSub($rooms, 'rooms', function($join){
    //     $join->on('reservations.room_id', '=', 'rooms.id');
    // })
    // ->joinSub($users, 'users', function($join){
    //     $join->on('reservations.user_id','=','users.id');
    // })
    // ->get();

    // $results = DB::table('rooms')
    // ->leftJoin('reservations','reservations.room_id','=','rooms.id')
    // ->select('rooms.*','reservations.check_in','reservations.check_out')
    // ->get();

    // $results = DB::table('rooms')
    // ->rightJoin('reservations','reservations.room_id','=','rooms.id')
    // ->select('reservations.*','rooms.room_number')
    // ->get();

    $results = DB::table('rooms')
    ->leftJoin('reservations','rooms.id', '=', 'reservations.room_id')
    ->leftJoin('cities','reservations.city_id', '=', 'cities.id')
    ->selectRaw('room_size,cities.name, count(reservations.id) as reservations_count')
    ->groupBy('room_size','cities.name')
    ->orderByRaw('count(reservations.id) DESC')
    ->get();
    
    dump($results);


  

    return view('home');
});
