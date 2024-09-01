<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1,10),
            'order_number' => fake()->unique()->randomNumber(5),
            'total_amount' => fake()->numberBetween(300,500),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'updated_at' => now(),

        ];
    }
}
