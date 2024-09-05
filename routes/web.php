<?php

use App\Models\Address;
use App\Models\City;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Image;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

Route::get('/', function () {    
    

   
    //  $results = User::find(5);
    //  $results = Image::find(2);
    // $results = Comment::find(2);
    $results = Room::find(2);

    //  dump($results->likeImages, $results->likeRooms);
    dump($results->likes);


    return view('home');
});
