<?php

use App\Http\Resources\UserResource;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use function Laravel\Prompts\select;

Route::get('/', function () {    
    
    // $cat = Category::select('id','title')->orderBy('title')->get();
    // $cat = Category::select('id','title')->get();

    $tag = Tag::select('id','name')->orderByDesc(
        DB::table('post_tag')
        ->selectRaw('count(tag_id) as count_tag')
        ->whereColumn('tags.id','post_tag.tag_id')
        ->orderBy('count_tag','desc')
        ->limit(1)
    )->get();
   
    dump($tag);
  

    return view('home');
});
