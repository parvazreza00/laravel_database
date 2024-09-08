<?php

use App\Models\Address;
use App\Models\City;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Image;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

Route::get('/', function () {    
    
 
    // $results = Reservation::with('user.address')->get();
    // foreach($results as $res){
    //     echo $res->user->address->street."<br>";
    // }
    $results = User::all();
    // $results->load('address');
    // $results = Image::with('imageable')->get();
    dump($results);


    return view('home');
});
