<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {

    $users = User::all();
    // dd($users);
    dump($users);


    return view('welcome');
});
