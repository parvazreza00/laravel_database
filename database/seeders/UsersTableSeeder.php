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
        $faker = Faker::create();

        User::create([
            'name' => 'Parvaz',
            'email' => 'parvaz@gmail.com',
            'phone' => '01738920277',
            'address' => 'Dhaka',
            'password' => bcrypt('password'),
            'meta' => [
                'settings' => [
                    'site_background' => 'black',
                    'site_language' => 'en',
                ],
                'skills' =>  $faker->randomElements(['Laravel', 'PHP', 'WordPress', 'HTML-5', 'CSS-3', 'ReactJs'], mt_rand(1, 6)),
                'gander' => $faker->randomElement(['male', 'female', 'Other']),
            ]
        ]);

        // User::insert([
        //     [
        //         'name' => 'Reza',
        //         'email' => 'reza@gmail.com',
        //         'phone' => '01738920290',
        //         'address' => 'Chattagram',
        //         'password' => Hash::make('password'),
        //         'meta' => [
        //             'settings' => [
        //                 'site_background' => 'black',
        //                 'site_language' => 'en',
        //             ],
        //             'skills' =>  $faker->randomElements(['Laravel', 'PHP', 'WordPress', 'HTML-5', 'CSS-3', 'ReactJs'], mt_rand(1, 6)),
        //             'gander' => $faker->randomElement(['male', 'female', 'Other']),
        //         ]
        //     ],
        //     [
        //         'name' => 'Yeasin',
        //         'email' => 'yeasin@gmail.com',
        //         'phone' => '01738900290',
        //         'address' => 'Faridpur',
        //         'password' => Hash::make('password'),
        //         'meta' => [
        //             'settings' => [
        //                 'site_background' => 'black',
        //                 'site_language' => 'en',
        //             ],
        //             'skills' =>  $faker->randomElements(['Laravel', 'PHP', 'WordPress', 'HTML-5', 'CSS-3', 'ReactJs'], mt_rand(1, 6)),
        //             'gander' => $faker->randomElement(['male', 'female', 'Other']),
        //         ]
        //     ],
        //     [
        //         'name' => 'ParvazReza',
        //         'email' => 'parvazreza@gmail.com',
        //         'phone' => '01738700290',
        //         'address' => 'Rajshahi',
        //         'password' => Hash::make('password'),
        //         'meta' => [
        //             'settings' => [
        //                 'site_background' => 'black',
        //                 'site_language' => 'en',
        //             ],
        //             'skills' =>  $faker->randomElements(['Laravel', 'PHP', 'WordPress', 'HTML-5', 'CSS-3', 'ReactJs'], mt_rand(1, 6)),
        //             'gander' => $faker->randomElement(['male', 'female', 'Other']),
        //         ]
        //     ],
        // ]);

        $users = [
            [
                'name' => 'Tomal',
                'email' => 'tomal@gmail.com',
                'phone' => '01758920290',
                'address' => 'Chapinababgonj',
                'password' => Hash::make('password'),
                'meta' => [
                    'settings' => [
                        'site_background' => 'black',
                        'site_language' => 'en',
                    ],
                    'skills' =>  $faker->randomElements(['Laravel', 'PHP', 'WordPress', 'HTML-5', 'CSS-3', 'ReactJs'], mt_rand(1, 6)),
                    'gander' => $faker->randomElement(['male', 'female', 'Other']),
                ]
            ],
            [
                'name' => 'Hasan',
                'email' => 'hasan@gmail.com',
                'phone' => '01738000290',
                'address' => 'Shylhet',
                'password' => Hash::make('password'),
                'meta' => [
                    'settings' => [
                        'site_background' => 'black',
                        'site_language' => 'en',
                    ],
                    'skills' =>  $faker->randomElements(['Laravel', 'PHP', 'WordPress', 'HTML-5', 'CSS-3', 'ReactJs'], mt_rand(1, 6)),
                    'gander' => $faker->randomElement(['male', 'female', 'Other']),
                ]
            ],
            [
                'name' => 'Jabed',
                'email' => 'jabed@gmail.com',
                'phone' => '01798700290',
                'address' => 'Bhola',
                'password' => Hash::make('password'),
                'meta' => [
                    'settings' => [
                        'site_background' => 'black',
                        'site_language' => 'en',
                    ],
                    'skills' =>  $faker->randomElements(['Laravel', 'PHP', 'WordPress', 'HTML-5', 'CSS-3', 'ReactJs'], mt_rand(1, 6)),
                    'gander' => $faker->randomElement(['male', 'female', 'Other']),
                ]
            ],
            [
                'name' => 'Arman',
                'email' => 'arman@gmail.com',
                'phone' => '01798790290',
                'address' => 'Khulna',
                'password' => Hash::make('password'),
                'meta' => [
                    'settings' => [
                        'site_background' => 'black',
                        'site_language' => 'en',
                    ],
                    'skills' =>  $faker->randomElements(['Laravel', 'PHP', 'WordPress', 'HTML-5', 'CSS-3', 'ReactJs'], mt_rand(1, 6)),
                    'gander' => $faker->randomElement(['male', 'female', 'Other']),
                ]
            ],
            [
                'name' => 'Thasan',
                'email' => 'thasan@gmail.com',
                'phone' => '01798740290',
                'address' => 'Potuakhali',
                'password' => Hash::make('password'),
                'meta' => [
                    'settings' => [
                        'site_background' => 'black',
                        'site_language' => 'en',
                    ],
                    'skills' =>  $faker->randomElements(['Laravel', 'PHP', 'WordPress', 'HTML-5', 'CSS-3', 'ReactJs'], mt_rand(1, 6)),
                    'gander' => $faker->randomElement(['male', 'female', 'Other']),
                ]
            ],
            [
                'name' => 'Taleb',
                'email' => 'taleb@gmail.com',
                'phone' => '01797700290',
                'address' => 'Bhola',
                'password' => Hash::make('password'),
                'meta' => [
                    'settings' => [
                        'site_background' => 'black',
                        'site_language' => 'en',
                    ],
                    'skills' =>  $faker->randomElements(['Laravel', 'PHP', 'WordPress', 'HTML-5', 'CSS-3', 'ReactJs'], mt_rand(1, 6)),
                    'gander' => $faker->randomElement(['male', 'female', 'Other']),
                ]
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }

        // $faker = Faker::create();
        // foreach(range(1,10) as $index){
        //     User::create([
        //         'name' => $faker->name(),
        //         'email' => $faker->unique()->safeEmail(),
        //         'phone' => $faker->phoneNumber(),
        //         'address' => $faker->address(),
        //         'password' => bcrypt('password'),
        //     ]);
        // }

        // $faker = Faker::create();
        // foreach(range(1,10) as $index){
        //     DB::table('users')->insert([
        //         'name' => $faker->name(),
        //         'email' => $faker->unique()->safeEmail(),
        //         'phone' => $faker->phoneNumber(),
        //         'address' => $faker->address(),
        //         'password' => bcrypt('password'),
        //     ]);
        // }


    }
}
