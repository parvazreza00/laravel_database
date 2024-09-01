<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,10) as $index){
            Comment::insert([
                'user_id' => $faker->numberBetween(1,10),
                'comment' => $faker->text(500),
                'rating' => $faker->numberBetween(1,5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
