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
            CompanySeeder::class,
            UsersTableSeeder::class,
            CommentSeeder::class,
            RoomSeeder::class,
            CitySeeder::class,
            ReservationSeeder::class,
            OrderSeeder::class,
            AddressSeeder::class,
            CityRoomSeeder::class,
            ImageSeeder::class,
            LikeablesSeeder::class,
        ]);

        // User::factory(2000)->create();
        // Comment::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
