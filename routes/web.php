<?php

use App\Http\Resources\UserResource;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
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

    // $tag = Tag::select('id','name')->orderByDesc(
    //     DB::table('post_tag')
    //     ->selectRaw('count(tag_id) as count_tag')
    //     ->whereColumn('tags.id','post_tag.tag_id')
    //     ->orderBy('count_tag','desc')
    //     ->limit(1)
    // )->get();

   

    // $most_popular_posts = Post::select('id','title')->orderByDesc(
    //     Comment::selectRaw('count(post_id) as comment_count')
    //     ->whereColumn('posts.id', 'comments.post_id')
    //     ->orderBy('comment_count','desc')
    //     ->limit(1)
    // )
    // ->withCount('comments')->take(5)->get();

    // $populer_user = User::select('id','name')->orderByDesc(
    //     Post::selectRaw('count(user_id) as user_count')
    //     ->whereColumn('users.id','posts.user_id')
    //     ->orderBy('user_count','desc')
    //     ->limit(1)
    // )
    // ->withCount('posts')->take(3)->get();

    // $popular_Cat = Category::select('id','title')
    // ->withCount('comments')
    // ->orderBy('comments_count','desc')
    // ->take(1)->get();

    $results = Tag::with(['posts' => function($q){
        $q->select('posts.id', 'posts.title');
    }])->find(2);
   
    dump($results);
  

    return view('home');
});
