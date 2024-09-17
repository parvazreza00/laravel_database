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

use function Laravel\Prompts\select;

Route::get('/', function () {    
    
 
    // $results = User::with('comment')->get();
    // $results = DB::table('users')->join('comments', 'users.id', '=', 'comments.user_id')->get();
    // $results = DB::select('select * from `users` inner join `comments` on `users`.`id` = `comments`.`user_id`');
    // $results = DB::table('comments')->where('rating',2)->count();
    // $results = DB::table('comments')
    // ->selectRaw('count(rating) as rating_count, rating')
    // ->groupBy('rating')
    // ->orderBy('rating_count','desc')
    // ->get();

    // $results = DB::table('rooms')
    // ->selectRaw('id, room_number')
    // ->orderByRaw('sqrt(room_number)')
    // ->get();

    // $results = DB::table('comments')
    // ->select('comment')
    // ->selectRaw('CASE WHEN rating = 5 THEN "Very Good" WHEN rating = 1 THEN "Very Sad" ELSE "Ok" END as text_rating ')
    // ->get();

    $results = Reservation::select('*')
    ->selectRaw('DATEDIFF(check_out, check_in) as nights')
    ->orderBy('nights', 'DESC')
    ->get();

    dump($results);


    return view('home');
});
