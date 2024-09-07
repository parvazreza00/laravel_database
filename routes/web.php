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
    

   
    // $results = User::find(2)->comment()
    // ->where('rating','>',3)
    // ->orWhere('rating','<',2)
    // ->get();

    // $results = User::find(1)->comment()
    // ->where(function($query){
    //     return $query->where('rating','>',3)
    //     ->orWhere('rating','<',2);
        
    // })
    // ->get();

    $results = User::has('comment','>=',2)->get();

    dump($results);


    return view('home');
});
