<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TutorFactory extends Factory
{
    public function definition(): array
    {
        $isNative = rand(1,10) > 7 ? true : false;

        return [
            'user_id' => User::factory(),
            'rate' => $isNative ? rand(5,10) * 5 : rand(5,20),
            'is_native' => $isNative,
        ];
    }
}
