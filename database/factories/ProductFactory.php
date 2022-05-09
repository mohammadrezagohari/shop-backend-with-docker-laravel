<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        return [
            'subject' => $this->faker->unique()->word,
            'context' => $this->faker->text,
            'count_exist' => rand(1, 20),
            'user_id' => $user->id,
            'visibility' => rand(0, 1),
        ];
    }
}
