<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TutorReviewFactory extends Factory
{
    public function definition(): array
    {
        return [
            'content' => fake()->text(),
            'rating' => rand(1,10) > 6 ? rand(1,4) : 5, // gives a 5 star rating
        ];
    }
}
