<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    // $users = User::all();
    // dd($users);
    // // dump($users);
    // $pdo = DB::Connection('mysql')->getPdo();
    // $users = $pdo->query('select * from users where id=50')->fetchAll();
    // $users = DB::select('select * from users where id = :id', ['id'=>23]);
    // $users = DB::select('select * from users');
    // $users = DB::select('select * from users where id = ?', [1]);
    // $users = DB::select('select * from users where id = 1');
    // $users = DB::insert('insert into users (name, email, phone, address, password)
    // values (?, ?, ?, ?, ?)', ['thamin','thamin@gmail.com','01712345678','dhaka','password']);
    $users = DB::table('users')->orderBy('id','desc')->first();


    // foreach($users as $user){
    //     echo $user->name;
    //     echo "<br>";
    // }
    dump($users);

    return view('welcome');
});
