<?php

use App\Models\Address;
use App\Models\City;
use App\Models\Comment;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

Route::get('/', function () {    
    

   
    //  $results = Comment::find(5);
     $results = Address::find(5);




    dump($results->comment->user_comment);
  

    return view('home');
});
