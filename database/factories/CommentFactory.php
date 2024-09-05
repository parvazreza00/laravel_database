<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
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
            'comment' => fake()->text(500),
            'rating' => fake()->numberBetween(1,5),
            'commentable_id' => fake()->numberBetween(1,10),
            'commentable_type' => fake()->randomElement([Room::class, Image::class]),
        ];
    }
}
