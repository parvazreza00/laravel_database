<?php

use App\Models\Comment;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

Route::get('/', function () {    
    
  

//    $results = User::all();
//    foreach($results as $res){
//     echo $res->name_email."=>".$res->addressphone."<br>";
//    }
// $results = new User();
// $results->name = "rasel";
// $results->email = "rasel@gmail.com";
// $results->phone = "98459458";
// $results->address = "raseladd";
// $results->password = bcrypt('password');
// $results->save();




    // dump($comments);
  

    return view('home');
});
