<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=20;$i++){
            DB::table('post_tag')->insert([
                'post_id' => mt_rand(1, Post::all()->count()),
                'tag_id' => mt_rand(1,5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
