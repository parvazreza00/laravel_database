<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Parvaz',
            'email' => 'parvaz@gmail.com',
            'phone' => '01738920277',
            'address' => 'Dhaka',
            'password' => bcrypt('password'),
        ]);

        User::insert([
            [
                'name' => 'Reza',
                'email' => 'reza@gmail.com',
                'phone' => '01738920290',
                'address' => 'Chattagram',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Yeasin',
                'email' => 'yeasin@gmail.com',
                'phone' => '01738900290',
                'address' => 'Faridpur',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ParvazReza',
                'email' => 'parvazreza@gmail.com',
                'phone' => '01738700290',
                'address' => 'Rajshahi',
                'password' => Hash::make('password'),
            ],
        ]);

        $users = [
            [
                'name' => 'Tomal',
                'email' => 'tomal@gmail.com',
                'phone' => '01758920290',
                'address' => 'Chapinababgonj',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Hasan',
                'email' => 'hasan@gmail.com',
                'phone' => '01738000290',
                'address' => 'Shylhet',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Jabed',
                'email' => 'jabed@gmail.com',
                'phone' => '01798700290',
                'address' => 'Bhola',
                'password' => Hash::make('password'),
            ],
        ];
        foreach($users as $user){
            User::create($user);
        }

        $faker = Faker::create();
        foreach(range(1,10) as $index){
            User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address(),
                'password' => bcrypt('password'),
            ]);
        }

        $faker = Faker::create();
        foreach(range(1,10) as $index){
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address(),
                'password' => bcrypt('password'),
            ]);
        }


    }
}
