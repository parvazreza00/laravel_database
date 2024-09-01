<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Comment;
use App\Models\Reservation;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            CommentSeeder::class,
            RoomSeeder::class,
            ReservationSeeder::class,
            OrderSeeder::class,
        ]);

        // User::factory(25)->create();
        // Comment::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
