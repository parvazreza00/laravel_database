<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    

    // $users = DB::table('users')->select()->get();
    // $comments = DB::table('comments')->select()->get();
    // $users = DB::table('users')->where('name','Parvaz')->first();
    // $users = DB::table('users')->where('name','Parvaz')->value('phone');
    // $users = DB::table('users')->pluck('name');
    // $users = DB::table('users')->find(3);

    // $comments = DB::table('comments')->select('comment as user_comment')->get();
    // $comments = DB::table('comments')->select('user_id')->distinct()->get();
    // $comments = DB::table('comments')->count();
    // $comments = DB::table('comments')->where('comment','comment')->exists();
    // $comments = DB::table('comments')->where('comment','comment')->doesntExist();

    // $rooms = DB::table('rooms')->get();
    // $rooms = DB::table('rooms')->where('price','<',15000)->count();
    // $rooms = DB::table('rooms')->where('price','<',15000)->get();
    // $rooms = DB::table('rooms')
    // ->where(
    //    [
    //     ['price','<',15000],
    //     ['room_size','<',10]
    //    ]
    //     )->get();
    $rooms = DB::table('rooms')->where('price','<',15000)->orWhere('room_size','<','10')->get();


    
    dump($rooms);

    return view('welcome');
});
