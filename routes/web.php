<?php

use App\Http\Resources\UserResource;
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
    

   
    
  

    return view('home');
});
