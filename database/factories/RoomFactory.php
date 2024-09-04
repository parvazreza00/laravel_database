<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_number' => fake()->unique()->numberBetween(100,300),
            'room_size' => fake()->numberBetween(1,10),
            'price' => fake()->numberBetween(10000,20000),
            'des' => fake()->text(500),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
